<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocasaController extends Controller

{
    public function __invoke(){
    return view('Socasa');
}
}