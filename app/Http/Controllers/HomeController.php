<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [12,25,8,3,40,20,23,22,8,30];
        $result = [];
        for ($i = 0;$i < count($data); $i++)
        {
            $resultKey = $data[$i];
            $resultValue = -1;
            for ($j = $i; $j < count($data); $j++)
            {
                if ($data[$j] > $resultKey){
                    $resultValue = $j;
                    break;
                }
            }
            $result[] = [$resultKey => $resultValue];
        }
        return $result;
    }
}
