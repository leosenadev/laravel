<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    



    public function Principal(){

        var_dump($_POST);

        //Array associativo passando o titulo
        return view('site.principal',['titulo'=>'Home (titulo controlle)']);

       
    }
}
