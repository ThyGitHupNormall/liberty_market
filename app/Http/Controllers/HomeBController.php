<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeBController extends Controller
{
    public function HomeB(){
        $homeb = Home::all();
        return view('backs.index',[
            'homeb'=> $homeb,
        ]) ;
        }
}
