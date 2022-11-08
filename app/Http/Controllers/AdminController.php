<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function index(){

        $admin = user::all()->where('role','1');
        return view('admin.admin.index',compact('admin'));
    }

    public function create(){

        $admin = new user();
        return view('admin.admin.create',compact('admin'));
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'userName' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'role' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('picture')) {
            $destinationPath = 'images/';
            $userImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $userImage);
            $input['picture'] = $userImage;
        }

        $admin = User::create([
            'name' => $input['name'],
            'userName' => $input['userName'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'contact' => $input['contact'],
            'address' => $input['address'],
            'gender' => $input['gender'],
            'picture' => $input['picture'],
            'role' => $input['role'],
        ]);

        return redirect()->route('admin.index')->with('message','New Admin Created Successfully'); 
    }

    public function edit($id){
        $admin = user::findOrFail($id);
        return view('admin.admin.edit',compact('admin'));
    }

    public function show($id){
        $admin = user::findOrFail($id);
        return view('admin.admin.show',compact('admin'));
    }


    public function update($id, Request $request){
         
        $request->validate([
            'name' => 'required',
            'userName' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'role' => 'required',
        ]);
        
        $input = $request->all();

        if ($image = $request->file('picture')) {
            $destinationPath = 'images/';
            $userImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $userImage);
            $input['picture'] = $userImage;
        }


        $admin = user::find($id);
        $admin->update([
            'name' => $input['name'],
            'userName' => $input['userName'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'contact' => $input['contact'],
            'address' => $input['address'],
            'gender' => $input['gender'],
            'picture' => $input['picture'],
            'role' => $input['role'],
        ]);
        

        return redirect()->route('admin.index')->with('message','data updated successfully');

    }

    public function destroy($id){
        $admin = user::findOrFail($id);
        $admin->delete();

        return redirect()->route('admin.index')->with('message','Data removed successfully');
    }
}
