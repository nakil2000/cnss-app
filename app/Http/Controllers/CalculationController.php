<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationController extends Controller
{
    //

    public function showForm()
    {
        $number1 = $number11 = $number12 = $number2 = $number21 = $number22 = $number3 = $number31 = $number32 = $number4 = $number41 = $number42 = $totale1 = $totale2 = $totale3 = 0;

        return view('home', compact('number1', 'number11', 'number12', 'number2', 'number21', 'number22', 'number3', 'number31', 'number32', 'number4', 'number41', 'number42', 'totale1', 'totale2', 'totale3'));
    }
    public function calculate(Request $request)
    {
        $validated = $request->validate([
            'salaire' => 'required|numeric|gt:0',
        ], [
            'salaire.required' => 'Le champ salaire est requis.',
            'salaire.numeric' => 'Le champ salaire doit être un nombre.',
            'salaire.gt' => 'Le champ salaire doit être supérieur à 0.',
        ]);

        $salaire = $validated['salaire'];


        $number1 = $salaire +1;
        $number11 = $salaire +1;
        $number12 = $salaire +1;

        $number2 = $salaire + 2;
        $number21 = $salaire + 2;
        $number22 = $salaire + 2;


        $number3 = $salaire + 3;
        $number31 = $salaire + 3;
        $number32 = $salaire + 3;

        $number4 = $salaire + 4;
        $number41 = $salaire + 4;
        $number42 = $salaire + 4;

        $totale1 = $number1 + $number2 + $number3 + $number4;
        $totale2 = $number11 + $number21 + $number31 + $number41;
        $totale3 = $number12 + $number22 + $number32 + $number42;

        return view('home', compact('number1',
        'number11',
        'number12',
        'number2',
        'number21',
        'number22',
        'number3',
        'number31',
        'number32',
        'number4',
        'number41',
        'number42',
        'totale1',
        'totale2',
        'totale3'));

    }
}
