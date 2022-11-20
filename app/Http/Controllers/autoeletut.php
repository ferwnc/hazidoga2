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
                "Rendszam" => "required|max:8",
                "Tipus" => "required|max:50",
                "Szin" => "required"
            ],
            [
                "Rendszam.required" => "A mező kitöltése kötelező!",
                "Tipus.required" => "A mező kitöltése kötelező!",
                "Szin.required" => "A mező kitöltése kötelező!",

                "Rendszam.max" => "Maximum 8 karakter lehet!",
                "Tipus.max" => "Maximum 50 karakter lehet!"
            ]
        );
        
        DB::insert("INSERT INTO autoadat (adat_id,Rendszam,Tipus,Szin) VALUES (?,?,?,?)",[$req->get('adat_id'),$req->get('Rendszam'),$req->get('Tipus'),$req->get("Szin")]);

        return redirect("/autoadat")->with("success","Az autó adatai rögzítése sikeres!");
    }
}
