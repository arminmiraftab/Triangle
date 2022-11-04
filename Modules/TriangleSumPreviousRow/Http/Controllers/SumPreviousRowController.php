<?php

namespace Modules\TriangleSumPreviousRow\Http\Controllers;

use App\Http\Controllers\Controller;

class SumPreviousRowController extends Controller
{
    public function index($rows){

        $arr = array(array());
        $sumRow=array();

        for ($line = 0; $line < $rows; $line++)
        {
            for ($i = 0; $i <= $line; $i++)
            {
                if ($line == $i || $i == 0)
                    $arr[$line][$i] = 1;
                else{
                    $arr[$line][$i] = $arr[$line - 1][$i - 1] + $arr[$line - 1][$i];
                }
                $sumRow[]=[$line=>$arr[$line][$i]];
            }
        }
        return view('Sum::triangle_sum',['array'=>$sumRow,'previousKey'=>0]) ;

    }

}
