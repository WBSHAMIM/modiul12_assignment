<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class homecontroller extends Controller
{
    function home(){
        return view('home');
    }
    function sell_ticket(){
        $bus_place = User::with('bus','place')->get();
        return view('home', compact('bus_place'));
    }

}
