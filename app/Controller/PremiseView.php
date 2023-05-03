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

        $premises = Premise::all();
        $subdivisions = Subdivision::all();

        return (new View())->render('site.premises.premises', ['premises' => $premises, 'subdivisions' => $subdivisions,]);
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
    public function update_premises(Request $request): string
    {
        $subdivisions = Subdivision::all();
        $premises = Premise::all();
        $type_premises = Type_Premise::all();
        if ($request->method === 'POST' && Premise::update($request->all())) {
            app()->route->redirect('/premises');
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
