<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class dane extends Controller
{
    public function wyswietl(){

        $users = User::all();
        return view('welcome', ["title" => "Lista uzytkownikow",
            "uzytkownicy" => $users
        ]);
    }
}
