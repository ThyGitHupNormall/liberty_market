<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\H_Ex;
class HomeController extends Controller
{
//front home
   public function Home(){
    $home = Home::all();
    $h_ex = H_Ex::all();
    return view('fronts.index',[
        'home'=> $home,
        'h_ex'=>$h_ex
    ]) ;
    }

}
