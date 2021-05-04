<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function getAll()
    {
        $users=User::all();

        return view('user',compact('users'));
    }
    public function create()
    {
        $arr=['username'=>'yousef'
              ,'email'=>'yousef@gmail.com'
              ,'userpassword'=>sha1('1234')
              ,'image'=>'yousef.png'
              ,'role'=>'admin'];
        $newUser = User::create($arr);
        return view('create');
    }
    // get one
    public function select($id)
    {
        $user=User::find($id);
        dd($user);
    }
    // update
    // public function update($id)
    // {
    //     $user=User::find($id);
    //     dd($user);
    // }

    // delete
    public function delete($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('getuser');
    }

}
