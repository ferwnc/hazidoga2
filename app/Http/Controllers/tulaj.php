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
    public function tulajdonos(Request $req){

        $validate = $req->validate(
            [

            ],
            [

            ]
        );
        
        DB::insert("INSERT INTO tulaj (tulaj_id,Nev,Tuljog_kezd,Tuljog_veg) VALUES (?,?,?,?)",[$req->get('tulaj_id'),$req->get('Nev'),date('Y-m-d H:i:s'),date('Y-m-d H:i:s')]);

        return redirect("/tulaj")->with("success","Az autó adatai rögzítése sikeres!");
    }
}
