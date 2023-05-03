<?php

namespace Controller;

use Model\Premise;
use Model\Subdivision;
use Model\Type_Subdivision;
use Src\Request;
use Src\View;

class SubdivisionView{
    public function subdivision(Request $request): string
    {
        $subdivisions = Subdivision::all();
        return (new View())->render('site.subdivisions.subdivision', ['subdivisions' => $subdivisions]);
    }

    public function add_subdivision(Request $request): string
    {
        $subdivisions = Subdivision::all();
        $type_subdivisions = Type_Subdivision::all();
        if ($request->method === 'POST' && Subdivision::create($request->all())) {
            app()->route->redirect('/subdivision');
        }
        return new View('site.subdivisions.add_subdivision', ['subdivisions' => $subdivisions,'type_subdivisions'=>$type_subdivisions]);
    }
    public function delete_subdivisions(Request $request): void
    {
        if (Subdivision::where('id', $request->id)->delete()) {
            app()->route->redirect('/subdivision');
        }
    }

}