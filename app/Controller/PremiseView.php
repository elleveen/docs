<?php

namespace Controller;

use Model\Premise;
use Model\Subdivision;
use Model\Type_Premise;
use Src\Request;
use Src\Validator\Validator;
use Src\View;

class PremiseView
{
    public function premises(Request $request): string
    {

        $subdivisions = Subdivision::all();
        if ($request->method === "POST") {
            $payload = $request->all();

            if(isset($payload['sort'])) {
                if ($request->sort === "name") {
                    $premises_list = Premise::orderBy('name')->get();
                } else if ($request->sort === 'number') {
                    $premises_list = Premise::orderBy('number')->get();
                }
            } else if(isset($payload['search'])) {
                $premises_list = Premise::where('name', 'like', '%' . $request->search . '%')->get();
            }
        } else {
            $premises_list = Premise::all();
        }
        $result = Premise::sum('square');

        return (new View())->render('site.premises.premises', ['premises' => $premises_list,
            'subdivisions' => $subdivisions, 'result' => $result]);
    }

    public function add_premises(Request $request): string
    {
        $subdivisions = Subdivision::all();
        $premises = Premise::all();
        $type_premises = Type_Premise::all();
        if ($request->method === 'POST') {
            $validator = new Validator($request->all(), [
                'name' => ['required'],
                'number' => ['required', 'number'],
                'number_of_seates' => ['required', 'number'],
                'square' => ['required', 'number'],
            ], [
                'required' => 'Поле :field пусто',
                'number' => 'Поле :field должно содержать только цифры'
            ]);
            if ($validator->fails()) {
                $message = json_encode($validator->errors(), JSON_UNESCAPED_UNICODE);
                return new View('site.premises.add_premises', ['premises' => $premises,
                    'type_premises' => $type_premises,
                    'subdivisions' => $subdivisions,
                    'errors' => $message]);
            }
            if (Premise::create($request->all())) {
                app()->route->redirect('/premises');
            }


        }

        return (new View())->render('site.premises.add_premises', ['premises' => $premises, 'subdivisions' => $subdivisions,
            'type_premises' => $type_premises]);
    }

    public function update_premises(Request $request)
    {
        $subdivisions = Subdivision::all();
        $type_premises = Type_Premise::all();
        $premises = Premise::where('id', $request->id)->first();
        if ($request->method === 'POST') {
            $updatePremise = [
                'name' => $request->get('name'),
                'number' => $request->get('number'),
                'number_of_seates' => $request->get('number_of_seates'),
                'square' => $request->get('square'),
                'id_subdivision' => $request->get('id_subdivision'),
                'id_type' => $request->get('id_type'),
            ];
            $premises->update($updatePremise);
            return app()->route->redirect('/premises?id=' . $premises->id);
        }
        return (new View())->render('site.premises.update_premises', ['premises' => $premises, 'subdivisions' => $subdivisions,
            'type_premises' => $type_premises]);
    }

    public function delete_premises(Request $request): void
    {
        if (Premise::where('id', $request->id)->delete()) {
            app()->route->redirect('/premises');
        }
    }
}


