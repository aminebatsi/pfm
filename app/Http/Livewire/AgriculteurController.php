<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Agriculteur;

class AgriculteurController extends Component
{
    public $isOpen = 0;
    public $agriculteur , $Agr_Id , $Agr_Nom , $Agr_Prenom , $Agr_Resid , $agrCount;
    public function render()
    {
        return view('livewire.agriculteur-controller');
    }
    
    public function destroy($id)
    {
        Agriculteur::find($id)->delete();
  
        return redirect()->back();
    }

    public function render1()
    {
        //$this->agriculteur = DB::table('agriculteurs')->get();
        $this->agriculteur = Agriculteur::all();
        $this->agrCount = count($this->agriculteur);
        
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
        $this->title = '';
        $this->description = '';
        $this->post_id = '';
    }

    public function store()
    {
        $this->validate([
            'Agr_Nom' => 'required',
            'Agr_Prenom' => 'required',
            'Agr_Resid' => 'required'
        ]);

        Agriculteur::updateOrCreate(['Agr_Nom' => $this->Agr_Nom ,'Agr_Prenom' => $this->Agr_Prenom , 'Agr_Resid' => $this->Agr_Resid]);
        session()->flash('message', 
        $this->Agr_Id ? 'Agr Updated Successfully.' : 'Agr Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
        return redirect()->back();
    }

    public function edit($id)
    {
        $Agri = Agriculteur::findOrFail($id);
        $this->Agr_Id = $id;
        $this->Agr_Prenom = $Agri->Agr_Prenom;
        $this->Agr_Nom = $Agri->Agr_Nom;
        $this->Agr_Resid = $Agri->Agr_Resid;
    
        $this->openModal();
    }

    public function update(){
        Agriculteur::where('Agr_Id', $this->Agr_Id)
      ->update(['Agr_Nom' => $this->Agr_Nom,
                'Agr_Prenom' => $this->Agr_Prenom,
                'Agr_resid' => $this->Agr_Resid
                 ]);
    }
    public function delete($id)
    {
        Agriculteur::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }

    public function cancel(){
        $this->closeModal();
    }
}
