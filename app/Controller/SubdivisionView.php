<?php

namespace Controller;

use Model\Premise;
use Model\Subdivision;
use Model\Type_Subdivision;
use Src\Request;
use Src\View;

class SubdivisionView{
    public function subdivisions(Request $request): string
    {
        if ($request->method === "POST") {
            $subdivisions_list = Subdivision::where('name_subdivision', 'like', '%' . $request->search . '%')->get();
        } else {
            $subdivisions_list = Subdivision::orderBy('name_subdivision')->get();
        }
        $sum = Subdivision::sum('number_cabinets');

        return (new View())->render('site.subdivisions.subdivisions', ['subdivisions' => $subdivisions_list, 'sum' => $sum]);
    }

    public function add_subdivision(Request $request): string
    {
        $subdivisions = Subdivision::all();
        $type_subdivisions = Type_Subdivision::all();
        if ($request->method === 'POST' && Subdivision::create($request->all())) {
            app()->route->redirect('/subdivisions');
        }
        return new View('site.subdivisions.add_subdivision', ['subdivisions' => $subdivisions,'type_subdivisions'=>$type_subdivisions]);
    }
    public function update_subdivision(Request $request)
    {
        $type_subdivisions = Type_Subdivision::all();
        $subdivisions= Subdivision::where('id', $request->id)->first();
        if($request->method === 'POST') {
            $updateSubdivision = [
                'name_subdivision' => $request->get('name_subdivision'),
                'number_cabinets' => $request->get('number_cabinets'),
                'id_type' => $request->get('id_type'),
                'square' => $request->get('square'),
                'address' => $request->get('address'),
            ];
            $subdivisions->update($updateSubdivision);
            return app()->route->redirect('/subdivisions?id=' . $subdivisions->id);
        }
        return (new View())->render('site.subdivisions.update_subdivision', ['subdivisions' => $subdivisions,
            'type_subdivisions' => $type_subdivisions]);
    }
    public function delete_subdivisions(Request $request): void
    {
        if (Subdivision::where('id', $request->id)->delete()) {
            app()->route->redirect('/subdivisions');
        }
    }

}