<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index(){
        return json_encode(["ok"=>true]);
    }
}
