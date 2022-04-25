<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Tables extends Component
{
    public function render()
    {
        $this->q1 = DB::table('agriculteurs')
            ->select('Agr_Nom')
            ->get();
        $this->q2 = DB::table('parcelles')
            ->select('Par_Nom')
            ->where('Par_Superficie' , '>' , '500')
            ->get();

        $this->q3 = DB::table('parcelles')
            ->select('*')
            ->whereBetween('Par_Superficie' ,['300' , '500'])
            ->where('Par_Lieu' , '=' , 'Arith')
            ->get();

        $this->q4 = DB::table('parcelles')
            ->join('agriculteurs' ,'parcelles.Par_Prop' ,'=','agriculteurs.id')
            ->select('agriculteurs.Agr_Nom','parcelles.*')
            ->get();
        $from = date('2011-11-07');
        $to = date('2012-02-09');

        $this->q5 = DB::table('interventions')
            ->select('*')
            ->whereBetween('Int_Debut',[$from,$to])
            ->get();

        $this->q6 = DB::table('interventions')
            ->join('parcelles' ,'parcelles.id' ,'=','interventions.Int_Par_Id')
            ->select('parcelles.Par_Nom','interventions.*')
            ->get();

        $this->q7 = DB::table('interventions')
            ->join('parcelles' ,'parcelles.id' ,'=','interventions.Int_Par_Id')
            ->join('agriculteurs' ,'parcelles.Par_Prop' ,'=','agriculteurs.id')            
            ->select('parcelles.Par_Nom','interventions.*','agriculteurs.Agr_Nom')
            ->get();
        
        $this->q8 = DB::table('interventions')
            ->join('employes' ,'employes.Emp_Nss' ,'=','interventions.Int_Emp_Nss')
            ->where('employes.Emp_Nom','=','Pernet')
            ->select('employes.Emp_Nom','interventions.*')
            ->get();

        $this->q9 = DB::table('parcelles')
            ->sum('Par_Superficie');
        
        $this->max = DB::table('parcelles')
        ->max('Par_Superficie');

        $this->min = DB::table('parcelles')
        ->min('Par_Superficie');

        $this->q10 = DB::table('parcelles')
            ->where('Par_Superficie','=',$this->max)
            ->select('Par_Nom')
            ->get();
        
        $this->q11 = DB::table('parcelles')
            ->where('Par_Superficie','=',$this->min)
            ->select('Par_Nom')
            ->get();
        
        return view('livewire.tables');
    }
}
