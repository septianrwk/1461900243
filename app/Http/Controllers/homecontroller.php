<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        return view("home0243");
    }
    public function artikel(){
        return view("artikel0243");
    }
    public function mycontact(){
        return view("Mycontact0243");
    }
}