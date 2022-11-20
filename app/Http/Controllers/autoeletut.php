<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Http\Controllers\Controller;


class autoeletut extends Controller
{
    public function getContent(){
        return view("autoadat");
    }

    public function adatok(Request $req){

        $validate = $req->validate(
            [

            ],
            [

            ]
        );
        
        DB::insert("INSERT INTO autoadat (adat_id,Rendszam,Tipus,Szin) VALUES (?,?,?,?)",[$req->get('adat_id'),$req->get('Rendszam'),$req->get('Tipus'),$req->get("Szin")]);

        return redirect("/autoadat")->with("success","Az autó adatai rögzítése sikeres!");
    }
}
