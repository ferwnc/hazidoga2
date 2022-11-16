<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Http\Controllers\Controller;

class tulaj extends Controller
{
    public function getContent(){
        return view("tulaj");
    }
}
