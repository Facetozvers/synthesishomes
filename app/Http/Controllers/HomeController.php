<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){

        if($request->kontak == "bintang"){
            $hp = "85692956909";
            $nama = "Bintang";
            $userid = "BAF1108020022";
        }

        else if($request->kontak == "suwandi"){
            $hp = '81215548602';
            $nama = "Suwandi";
            $userid = "BAF1108020009";
        }

        else if($request->kontak == "surip"){
            $hp = '85313578379';
            $nama = "Surip";
            $userid = "BAF1108020013";
        }

        else if($request->kontak == "emirzakariansyah"){
            $hp = '85717444577';
            $nama = "Emir Zakariansyah";
            $userid = "BAF1108020014";
        }
        else if($request->kontak == "veramaylinda"){
            $hp = '87781302200';
            $nama = "Vera Maylinda";
            $userid = "BAF1108020021";
        }
        else if($request->kontak == "ahmadrafialfahrozi"){
            $hp = '89627851344';
            $nama = "Ahmad Rafi Alfahrozi";
            $userid = "BAF1109020001";
        }
        else if($request->kontak == "usmansantoso"){
            $hp = '83892340454';
            $nama = "Usman Santoso";
            $userid = "BAF1108020007";
        }
        else if($request->kontak == "weimpysulendra"){
            $hp = '81318886743';
            $nama = "Weimpy Sulendra";
            $userid = "BAF1108020011";
        }
        else if($request->kontak == "rahadiankhoirulfatah"){
            $hp = '85695498380';
            $nama = "Rahadian Khoirul Fatah";
            $userid = "BAF1108020016";
        }
        else if($request->kontak == "edikusumah"){
            $hp = '85210384621';
            $nama = "Edi Kusumah";
            $userid = "BAF1108020015";
        }

        else{
            return view('home');
        }

        return view('home-agen', ['hp' => $hp, 'nama' => $nama, 'userid' => $userid]);
    }
}
