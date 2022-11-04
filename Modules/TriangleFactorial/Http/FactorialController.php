<?php

namespace Modules\TriangleFactorial\Http;

use App\Http\Controllers\Controller;

class FactorialController extends Controller
{
    public function index($rows=1){
        $sumRow=array();

        for($line = 1; $line <= $rows; $line++)
        {
            $n = 1;
            for($i = 1; $i <= $line; $i++)
            {
                $sumRow[]=[$line=>$n];
                $n = $n * ($line - $i) / $i;
            }
        }
        return view('Factorial::triangle_factorial',['array'=>$sumRow,'previousKey'=>0]) ;
    }
}
