<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index() {

        $users = User::all();
        
        // dd($users);

        return view('landing',[
        'users' => $users
    ]);

    }
}
