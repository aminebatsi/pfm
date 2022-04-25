<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Parcelle;

class ParcelleController extends Component
{
    public function render()
    {
        return view('livewire.parcelle-controller');
    }
    public $isOpen = 0;
    public $parcelle, $Par_Idf,$Par_Nom,$Par_Lieu,$Par_Superficie,$Par_Prop;
    public function render1()
    {
        $this->parcelle = Parcelle::all();
        return view('livewire.parcelles');
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
            'Par_Nom' => 'required',
            'Par_Lieu' => 'required',
            'Par_Superficie' => 'required',
            'Par_Prop' => 'required'
        ]);

        Parcelle::updateOrCreate(['Par_Nom' => $this->Par_Nom ,'Par_Lieu' => $this->Par_Lieu , 'Par_Superficie' => $this->Par_Superficie
        ,'Par_Prop' => $this->Par_Prop]);
        session()->flash('message', 
        $this->Par_Idf ? 'Agr Updated Successfully.' : 'Agr Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Agri = Parcelle::findOrFail($id);
        $this->Par_Idf = $id;
        $this->Par_Nom = $Agri->Par_Nom;
        $this->Par_Lieu= $Agri->Par_Lieu;
        $this->Par_Superficie= $Agri->Par_Superficie;
        $this->Par_Prop= $Agri->Par_Prop;
        $this->openModal();
    }
    public function update(){
        Parcelle::where('Par_Idf', $this->Par_Idf)
      ->update(['Par_Nom' => $this->Par_Nom,
                'Par_Lieu' => $this->Par_Lieu,
                'Par_Superficie' => $this->Par_Superficie,
                'Par_Prop' => $this->Par_Prop
                 ]);
    }
    public function delete($id)
    {
        Parcelle::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }

    public function cancel(){
        $this->closeModal();
    }

    public function destroy($id)
    {
        Parcelle::find($id)->delete();
  
        return redirect()->back();
    }
}
