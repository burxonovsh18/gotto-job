<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function index(){
        return view('profile.index');
    }
    public function edit(){
        return view('profile.edit');
    }
    public function update(ProfileUpdateRequest $request){
        if(Auth::check()){
            $id = Auth::id();
        }
        $user = Auth::findOrFail($id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();
    }


}
