<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowHide extends Component
{
    public $pageToShow = 0;

    
    public function render()
    {
        $this->Users = DB::table('users')->count();
        $this->Agric = DB::table('agriculteurs')->count();
        $this->Parc = DB::table('parcelles')->count();
        $this->Empl = DB::table('employes')->count();

        return view('livewire.show-hide');
    }
    public function set($nb){
        $this->pageToShow = $nb;
    }
    
}
