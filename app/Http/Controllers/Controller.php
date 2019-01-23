<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

session_start();
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req){
        $ime = $req->input('ime');
        $opis = $req->input('opis');
        $user = auth::id();
        $u2 = $req->input('uporabnik_2');
        $u3 = $req->input('uporabnik_3');
        $u4 = $req->input('uporabnik_4');
        $u5 = $req->input('uporabnik_5');


        $email = DB::table('users')->where('id', $user)->value('email');



        $data = array('ime'=>$ime,'user_id'=> $user, "opis"=>$opis, "uporabnik_1"=>$email,
        "uporabnik_2"=>$u2, "uporabnik_3"=>$u3, "uporabnik_4"=>$u4, "uporabnik_5"=>$u5);

        DB::table('ekipe')->insert($data);

        return view('success')->with('ime', $ime)->with('opis', $opis)->with('uporabnik_1', $email);

    }

    function get(){
        $data['data'] = DB::table('ekipe')->get();

        if(count($data)>0){
            return view('ekipe', $data);
        }else {
            return view('ekipe');
        }
    }
}
