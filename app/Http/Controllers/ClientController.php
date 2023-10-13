<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function client(){
        $data = Http::get("https://reqres.in/api/users?page=1");

        return view('test',['collection'=>$data['data']]);

    }
}
