<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [12,8,3,20,22,8,23];
        $result = [];
        for ($i = 0;$i < count($data); $i++)
        {
            $elem = $data[$i];
            for ($j = $i; $j < count($data); $j++)
            {
                if ($data[$j] > $elem){
                    $temp = [$elem => $j];
                    $result[] = $temp;
                    break;
                }
            }
        }
        return $result;
    }
}
