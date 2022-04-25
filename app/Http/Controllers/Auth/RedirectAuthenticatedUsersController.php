<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedirectAuthenticatedUsersController extends Controller
{
    public function home()
    {
        if (auth()->user()->role == 'admin') {
            return view('admin');
        }
        elseif(auth()->user()->role == 'user'){
            return view('admin');
        }
        elseif(auth()->user()->role == 'guest'){
            return view('admin');
        }
        else{
            return auth()->logout();
        }
    }

    public function back(){
        return view('login');
    }
    // retun for edit 
    public static function check_role() {
        if (auth()->user()->role == 'admin' || auth()->user()->role == 'user'){
            return true;
        }
        else{
            return false;
        }
    }

    public function logout () {
        auth()->logout();
        return view('welcome');
    }
        
}
