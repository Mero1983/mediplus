<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontpages extends Controller
{
public function home(){
    $title=' marwa medi-plus website';
    return view('home',compact('title'));

}
}

