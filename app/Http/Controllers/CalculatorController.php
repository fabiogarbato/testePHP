<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        $expression = session('expression', '0');
        return view('calculator', ['displayValue' => $expression]);
    }

    public function process(Request $request)
    {
        $btn = $request->input('btn');
        $expression = session('expression', '0');

        if ($expression === 'Erro') {
            $expression = '0';
        }

        switch ($btn) {
            case 'C':
                $expression = '0';
                break;
            case 'back':
                $expression = (strlen($expression) > 1) ? substr($expression, 0, -1) : '0';
                break;
            case '=':
                $result = $this->evaluateExpression($expression);
                $expression = ($result === null) ? 'Erro' : (string) $result;
                break;
            default:
                if ($expression === '0' || $expression === 'Erro') {
                    $expression = $btn;
                } else {
                    $expression .= $btn;
                }
        }

        session(['expression' => $expression]);
        return redirect('/calculadora');
    }

    private function evaluateExpression($expr)
    {
        $safeExpr = str_replace(['÷','×'], ['/','*'], $expr);
        if (!preg_match('/^[0-9\+\-\*\/\.\(\)]+$/', $safeExpr)) {
            return null;
        }
        try {
            $res = eval("return $safeExpr;");
            return $res;
        } catch (\Throwable $th) {
            return null;
        }
    }
}