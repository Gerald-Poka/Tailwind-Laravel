<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Hash;

class UserDetailController extends Controller
{
    public function Uploads(Request $request){

        $request->validate([
            'firstname' => 'required|string|max:25',
            'middlename' => 'nullable|string|max:25',
            'lastname' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'gender' => 'required|string',
        ]);

        // Create a new user instance
        $user_details = new User();
        $user_details->firstname = $request->firstname;
        $user_details->lastname = $request->lastname;
        $user_details->middlename = $request->middlename;
        $user_details->age = $request->age;
        $user_details->address = $request->address;
        $user_details->email = $request->email;
        $user_details->password = Hash::make($request->password); // Hash the password
        $user_details->gender = $request->gender;

        $user_details->save();

       return redirect()->back()->with('success', 'User details added successfully!');


    }

    public function Leta(){

        $user_detail = User::all();

        return view('All',compact('user_detail'));
    }
    public function Reke($id){

        $user_detail  = User::find($id);

        return view('Kurekebisha',compact('user_detail'));

    }
    public function Rekebisha(Request $request, $id){


        $request->validate([
            'firstname' => 'required|string|max:25',
            'middlename' => 'nullable|string|max:25',
            'lastname' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'gender' => 'required|string',
        ]);

        $user_detail = User::find($id);
        $user_detail->firstname = $request->firstname;
        $user_detail->lastname = $request->lastname;
        $user_detail->middlename = $request->middlename;
        $user_detail->age = $request->age;
        $user_detail->address = $request->address;
        $user_detail->email = $request->email;
        $user_detail->gender = $request->gender;

        $user_detail->save();

        return redirect()->back()->with('success', 'User details updated successfully!');

    }


    public function Futa($id){

        $user_detail  =  User::find($id);

        $user_detail->delete();

        return redirect()->back()->with('success', 'User details deleted successfully!');
    }
}
