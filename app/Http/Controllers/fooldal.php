<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Http\Controllers\Controller;

class fooldal extends Controller
{
    public function getContent(){
        return view("fooldal");
    }
}
