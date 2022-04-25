<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;

class UserController extends Component
{
    public function render()
    {
        return view('livewire.user-controller');
    }

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
