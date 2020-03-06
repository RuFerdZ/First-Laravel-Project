<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list(){
        $names = ["Rusiru","Hasani","adffdgfd","hgfhgjhkj"];
        return view('Quiz.about',["contacts"=>$names]);
    }
}
