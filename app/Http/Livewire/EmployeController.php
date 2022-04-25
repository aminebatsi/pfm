<?php

namespace App\Http\Livewire;

use App\Models\Employe;
use Livewire\Component;

class EmployeController extends Component
{
    public function render()
    {
        return view('livewire.employe-controller');
    }
    public $isOpen = 0;
    public $employes, $Emp_id , $Emp_Nss , $Emp_Nom ,$Emp_Pm , $Emp_Tarif;

    public function render1()
    {
        $this->employes = Employe::all();
        return view('livewire.employes');
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

    private function resetInputFields(){
        $this->Emp_Nss = '';
        $this->Emp_Nom = '';
        $this->Emp_Pm = '';
        $this->Emp_Tarif = '';
    }
    public function store()
    {
        $this->validate([
            'Emp_Nss' => 'required',
            'Emp_Nom' => 'required',
            'Emp_Pm' => 'required',
            'Emp_Tarif' => 'required',
        ]);

        Employe::updateOrCreate(['Emp_Nss' => $this->Emp_Nss ,'Emp_Nom' => $this->Emp_Nom, 'Emp_Tarif' => $this->Emp_Tarif , 'Emp_Pm' => $this->Emp_Pm]);
        session()->flash('message', 
        $this->Emp_id ? 'Agr Updated Successfully.' : 'Agr Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Empl = Employe::findOrFail($id);
        $this->Emp_id = $id;
        $this->Emp_Nom = $Empl->Emp_Nom;
        $this->Emp_Tarif = $Empl->Emp_Tarif;
        $this->Emp_Pm= $Empl->Emp_Pm;
        $this->Emp_Nss= $Empl->Emp_Nss;
        $this->openModal();
    }

    public function update(){
        Employe::where('Emp_id', $this->Emp_id)
      ->update(['Emp_Nss' => $this->Emp_Nss ,'Emp_Nom' => $this->Emp_Nom, 'Emp_Tarif' => $this->Emp_Tarif , 'Emp_Pm' => $this->Emp_Pm]);
    }
    public function delete($id)
    {
        Employe::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }

    public function cancel(){
        $this->closeModal();
    }
    public function destroy($id)
    {
        Employe::find($id)->delete();
  
        return redirect()->back();
    }
}
