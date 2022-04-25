<?php

namespace App\Http\Livewire;

use App\Models\Intervention;
use Livewire\Component;

class InterventionController extends Component
{
    public function render()
    {
        return view('livewire.intervention-controller');
    }
    public function destroy($id)
    {
        Intervention::find($id)->delete();
  
        return redirect()->back();
    }

    public $isOpen = 0;
    public $interv,$Int_id,$Int_Emp_Nss,$Int_Par_Id,$Int_Debut,$Int_Nb_Jours;
    public function render1()
    {
        $this->interv= Intervention::all();
        return view('livewire.interventions');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }
    //$Int_id,$Int_Emp_Nss,$Int_Par_Id,$Int_Debut,$Int_Nb_Jours;
    private function resetInputFields(){
        $this->Int_Emp_Nss = '';
        $this->Int_Par_Id = '';
        $this->Int_Debut = '';
        $this->Int_Nb_Jours = '';
    }
    
    public function store()
    {
        $this->validate([
            'Int_Emp_Nss' => 'required',
            'Int_Par_Id' => 'required',
            'Int_Debut' => 'required',
            'Int_Nb_Jours' => 'required'
        ]);

        Intervention::updateOrCreate(['Int_Emp_Nss' => $this->Int_Emp_Nss,
        'Int_Par_Id' => $this->Int_Par_Id , 
        'Int_Debut' => $this->Int_Debut ,
        'Int_Nb_Jours' => $this->Int_Nb_Jours]);
        session()->flash('message', 
        $this->Int_id ? 'Agr Updated Successfully.' : 'Agr Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $Inter = Intervention::findOrFail($id);
        $this->Int_id = $id;
        $this->Int_Emp_Nss = $Inter->Int_Emp_Nss;
        $this->Int_Par_Id= $Inter->Int_Par_Id;
        $this->Int_Debut= $Inter->Int_Debut;
        $this->Int_Nb_Jours= $Inter->Int_Nb_Jours;
        $this->openModal();
    }
    public function update(){
        Intervention::where('Int_id', $this->Int_id)
      ->update(['Int_Emp_Nss' => $this->Int_Emp_Nss,
                'Int_Par_Id' => $this->Int_Par_Id,
                'Int_Debut' => $this->Int_Debut,
                'Int_Nb_Jours' => $this->Int_Nb_Jours
                 ]);
    }
    public function delete($id)
    {
        Intervention::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }

    public function cancel(){
        $this->closeModal();
    }
}
