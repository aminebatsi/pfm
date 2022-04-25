<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate();
        return view('admin',compact('users'));
    }
    public function destroy($id)
    {
        User::find($id)->delete();
  
        return redirect()->back();
    }
}
