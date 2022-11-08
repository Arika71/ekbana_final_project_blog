<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\user;

class UserController extends Controller
{
    public function index(){

        $user = user::all()->where('role','0');
        return view('admin.user.index',compact('user'));
    }

    public function show($id){

        $user = user::findOrFail($id);

        return view('admin.user.show',compact('user'));
    }
}
