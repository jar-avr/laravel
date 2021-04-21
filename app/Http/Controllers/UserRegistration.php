<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;

class UserRegistration extends Controller {
    public function postRegister(Request $request) {
        $user = new User($request->input('name'), $request->password);
        return view('greeting', ['user' => $user]);
    }
    public function register() {
        return view('register');
    }
    public function param($id, $name) {
        return view('showAll')->with('info', ['id' => $id, 'name' => $name]);
    }
}
