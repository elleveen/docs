<?php

namespace Controller;

use Model\Premise;
use Model\Subdivision;
use Model\Type_Premise;
use Src\Request;
use Src\View;

class PremiseView {
    public function premises(Request $request): string
    {

        $subdivisions = Subdivision::all();
        if ($request->method === "POST") {
            $premises_list = Premise::where('name', 'like', '%' . $request->search . '%')->get();
        } else {
            $premises_list = Premise::orderBy('name')->get();
        }

        return (new View())->render('site.premises.premises', ['premises' => $premises_list, 'subdivisions' => $subdivisions,]);
    }
    public function add_premises(Request $request): string
    {
        $subdivisions = Subdivision::all();
        $premises = Premise::all();
        $type_premises = Type_Premise::all();
        if ($request->method === 'POST' && Premise::create($request->all())) {
            app()->route->redirect('/premises');
        }
        return (new View())->render('site.premises.add_premises', ['premises' => $premises, 'subdivisions' => $subdivisions,
            'type_premises' => $type_premises]);
    }
    public function update_premises(Request $request)
    {
        $subdivisions = Subdivision::all();
        $type_premises = Type_Premise::all();
        $premises= Premise::where('id', $request->id)->first();
        if($request->method === 'POST') {
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

    public function sort_number(Request $request): void
    {
        $sorted = Premise::all();
        if($sorted->sortBy('number')->first()){
            app()->route->redirect('/premises');
        }
    }
}
