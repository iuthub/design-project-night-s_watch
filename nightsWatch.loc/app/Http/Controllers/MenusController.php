<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function execute(){


    	$foods = DB::select("SELECT * FROM `menus`");
    	// dump($foods);


        return view('layouts.menu')->withFoods($foods);
    }
}
