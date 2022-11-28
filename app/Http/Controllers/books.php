<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class books extends Controller
{
    //
    public function showAllData(){
        $datas = books::all();
        echo($datas);
    }
}
