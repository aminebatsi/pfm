<?php

namespace App\Http\Livewire;

use App\Models\Tarif;
use Livewire\Component;

class TarifController extends Component
{
    public function render()
    {
        return view('livewire.tarif-controller');
    }
    public $isOpen  = 0;
    public $tarif , $Tar_id , $Tar_Eur , $tar_Description;
    public function render1()
    {
        $this->tarif = Tarif::all();
        return view('livewire.tarifs');
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
        $this->Tar_Eur = '';
        $this->tar_Description = '';
    }

    public function store(){
        $this->validate([
            'Tar_Eur' => 'required',
            'tar_Description' => 'required',
        ]);
        Tarif::updateOrCreate(['Tar_Eur' => $this->Tar_Eur , 'tar_Description' => $this->tar_Description]);
        session()->flash('message', 
        $this->Tar_id ? 'Agr Updated Successfully.' : 'Agr Created Successfully.');
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id){
        $tar = Tarif::findOrFail($id);
        $this->Tar_id = $id;
        $this->Tar_Eur = $tar->Tar_Eur;
        $this->tar_Description = $tar->tar_Description;
        $this->openModal();
    }

    public function update(){
        Tarif::where('Tar_id',$this->Tar_id)->update([
            'Tar_Eur' => $this->Tar_Eur,
            'tar_Description' => $this->tar_Description
        ]);
    }

    public function delete($id){
        Tarif::find($id)->delete();
        session()->flash('message', 'Tarif Deleted Successfully.');
    }

    public function cancel(){
        $this->closeModal();
    }
    public function destroy($id)
    {
       Tarif::find($id)->delete();
  
        return redirect()->back();
    }
}
