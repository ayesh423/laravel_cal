<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculaterController extends Controller
{
    public function calculater(Request $request)
    {
        $input = $request->input('input');
        $expression = session('expression', '');

        if ($input === 'C') {
            session()->forget(['expression', 'answer']);
        } elseif ($input === '=') {
            try {
                // Replace symbols with actual operators
                $evalExp = str_replace(['×', '÷'], ['*', '/'], $expression);
                $result = eval("return $evalExp;");
                session(['answer' => $result, 'expression' => $expression]);
            } catch (\Throwable $e) {
                session(['answer' => 'Error', 'expression' => $expression]);
            }
        } else {
            $expression .= $input;
            session(['expression' => $expression, 'answer' => $expression]);
        }

        return redirect()->route('index');
    }
}
