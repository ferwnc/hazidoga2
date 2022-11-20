<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Http\Controllers\Controller;

class baleset extends Controller
{
    public function getContent(){
        return view("baleset");
    }
        public function serules(Request $req){

            $validate = $req->validate(
                [
    
                ],
                [
    
                ]
            );
            
            DB::insert("INSERT INTO baleset(baleset_id,baleset_idopontja,serules) VALUES (?,?,?)",[$req->get('baleset_id'),date('Y-m-d H:i:s'),$req->get('serules')]);
    
            return redirect("/baleset")->with("success","Az autó adatai rögzítése sikeres!");
        }
}
