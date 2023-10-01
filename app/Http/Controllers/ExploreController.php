<?php

namespace App\Http\Controllers;

use App\Models\Explore;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function Explore(){
        $explore = Explore::all();

        return view('fronts.explore',[
            'explores'=> $explore,
        ]) ;
        }
}
