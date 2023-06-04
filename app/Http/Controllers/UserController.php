<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('admin.user.index');
    }

    public function create(Request $request){

        $user             = new User();
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->password   = bcrypt($request->password);
        // $user->role       = $request->role;
        $user->save();

        return redirect()->back()->with('message','New User Info Create Successfully');
    }


    public function manage(){

        $users = User::all();
        
        return view('admin.user.manage',[
            'users'=> $users
            
         ]);

    }
     public function delete($id)
    {
        $user = User::find($id);
       
       $user->delete();
        
        return redirect('/user/manage')->with('message', 'user info delete successfully.');
    }
}
