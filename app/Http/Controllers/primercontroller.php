<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class primerController extends Controller
{
    //public function __invoke(){

       // return "portada web";
        public function __invoke(){

        return view("portada");
    }
}


