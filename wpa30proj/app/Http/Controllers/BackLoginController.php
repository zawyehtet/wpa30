<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackLoginController extends Controller
{
    //
    public function getLogin() {
    	return view("auth.back-login");
    }

    public function logout() {
    	\Auth::guard("super")->logout();
    	return redirect()->route("backend.get");
    }

    public function postLogin(Request $request) {
    	$request->validate([
    		'email'	=> 'required|email',
    		'password'	=> 'required|min:4'
    	]);
    	if(\Auth::guard("super")->attempt(['email' => $request->email, 'password' => $request->password])) {
    		return redirect()->route("dashboard.index");
    	} else {
    		return redirect()->route('backend.get');
    	}
    }










}
