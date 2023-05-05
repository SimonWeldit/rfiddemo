<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class RfidController extends Controller
{
    public function create()
    {

        return Inertia::render('Auth/RfidLogin');
    }




    public function store(Request $request)
    {
        //Get value from input
        $rfid = $request->rfid;

        //Try to query user using input rfid
        $currentUser = DB::table('users')->where('rfid_auth_string', $rfid)->first();

        //IF there is no user with that rfid
        if (!$currentUser) return response('unautorized', 401);


        //ELSE login the user found from rfid
        Auth::loginUsingId($currentUser->id);

        // $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
