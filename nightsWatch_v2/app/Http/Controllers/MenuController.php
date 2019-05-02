<?php

namespace Chatty\Http\Controllers;

use Illuminate\Http\Request;
use Chatty\Dish;

class MenuController extends Controller
{
    public function index() {
      $dishes = Dish::get();
      return view('pages.menu')->with('dishes', $dishes);
    }
}
