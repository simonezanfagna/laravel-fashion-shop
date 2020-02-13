<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;

class HomeController extends Controller{

  public function index(){
    $cloth = Cloth::all();
    return view('home', [
      'cloth' => $cloth
    ]);
  }


}
