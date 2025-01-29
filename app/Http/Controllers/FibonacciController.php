<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function index()
    {
        return view('fibonacci');
    }

    public function calculate(Request $request)
    {
        $n = $request->input('n');
        $sequence = [];
        $a = 0;
        $b = 1;
        for ($i = 0; $i < $n; $i++) {
            $sequence[] = $a;
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }
        return view('fibonacci', [
            'sequence' => $sequence,
            'n' => $n
        ]);
    }
}
