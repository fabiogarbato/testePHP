<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(Request $request)
    {
        $displayValue = session('displayValue', '0');
        return view('calculator', compact('displayValue'));
    }

    public function process(Request $request)
    {
        $btn = $request->input('btn');
        $displayValue = session('displayValue', '0');
        $operator = session('operator', null);
        $operand1 = session('operand1', null);
        $justCalculated = session('justCalculated', false);

        if ($justCalculated) {
            $displayValue = '0';
            $justCalculated = false;
            session(['justCalculated' => false]);
        }

        switch ($btn) {
            case 'C':
                $displayValue = '0';
                $operator = null;
                $operand1 = null;
                break;
            case 'CE':
                $displayValue = '0';
                break;
            case 'back':
                if (strlen($displayValue) > 1) {
                    $displayValue = substr($displayValue, 0, -1);
                } else {
                    $displayValue = '0';
                }
                break;
            case '+':
            case '-':
            case '*':
            case '/':
                $operator = $btn;
                $operand1 = floatval($displayValue);
                $displayValue = '0';
                break;
            case '.':
                if (!str_contains($displayValue, '.')) {
                    $displayValue .= '.';
                }
                break;
            case '±':
                if (str_starts_with($displayValue, '-')) {
                    $displayValue = substr($displayValue, 1);
                } else if ($displayValue !== '0') {
                    $displayValue = '-'.$displayValue;
                }
                break;
            case '1/x':
                $operand1 = floatval($displayValue);
                $displayValue = ($operand1 == 0) ? 'Erro' : (1 / $operand1);
                $justCalculated = true;
                break;
            case 'x^2':
                $operand1 = floatval($displayValue);
                $displayValue = $operand1 * $operand1;
                $justCalculated = true;
                break;
            case 'sqrt':
                $operand1 = floatval($displayValue);
                $displayValue = ($operand1 < 0) ? 'Erro' : sqrt($operand1);
                $justCalculated = true;
                break;
            case '%':
                $operand1 = floatval($displayValue);
                $displayValue = $operand1 / 100;
                $justCalculated = true;
                break;
            case '=':
                if ($operator && $operand1 !== null && !$justCalculated) {
                    $operand2 = floatval($displayValue);
                    $result = 0;
                    switch ($operator) {
                        case '+':
                            $result = $operand1 + $operand2;
                            break;
                        case '-':
                            $result = $operand1 - $operand2;
                            break;
                        case '*':
                            $result = $operand1 * $operand2;
                            break;
                        case '/':
                            if ($operand2 == 0) {
                                $displayValue = 'Erro';
                                session([
                                    'displayValue' => $displayValue,
                                    'operator' => null,
                                    'operand1' => null,
                                    'justCalculated' => true
                                ]);
                                return redirect('/calculadora');
                            } else {
                                $result = $operand1 / $operand2;
                            }
                            break;
                    }
                    $displayValue = (string) $result;
                    $justCalculated = true;
                }
                break;
            default:
                if ($displayValue === '0' || $displayValue === 'Erro') {
                    $displayValue = $btn;
                } else {
                    $displayValue .= $btn;
                }
        }

        session([
            'displayValue' => (string) $displayValue,
            'operator' => $operator,
            'operand1' => $operand1,
            'justCalculated' => $justCalculated
        ]);

        return redirect('/calculadora');
    }
}
