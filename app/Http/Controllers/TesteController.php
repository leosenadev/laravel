<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $vl_1, int $vl_2){

        // echo "O resultado $vl_1 + $vl_2 é :".($vl_1 + $vl_2);
        return view('site.teste',['a'=>$vl_1, 'b'=>$vl_2]); // ARRAY ASSOCIATIVO
        
    }
}
