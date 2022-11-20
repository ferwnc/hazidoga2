<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\facades\DB;


class tablazat extends Controller
{
    public function getContent(){
    $lista = DB::select("SELECT autoadat.adat_id, autoadat.Rendszam, autoadat.Tipus, autoadat.Szin FROM autoadat");
    return view("autoadat",["tablazat" => $lista]);
    }
}
