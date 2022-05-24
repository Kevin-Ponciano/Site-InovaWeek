<?php

namespace App\Http\Livewire;

use App\Models\Doenca;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Boolean;

class Doencas extends Component
{
    public $doencas, $nome_doenca, $diagnostico, $sintomas, $tratamento, $doenca_id;
    public $isOpen = 0;

    public function render()
    {
        $this->doencas = Doenca::all();
        return view('livewire.doencas');
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

    public  function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->nome_doenca = '';
        $this->diagnostico = '';
        $this->sintomas = '';
        $this->tratamento = '';
        $this->doenca_id = '';
    }

    public  function store()
    {
        $this->validate([
            'nome_doenca' => 'required',
            'diagnostico' => 'required',
            'sintomas' => 'required',
            'tratamento' => 'required',
        ]);

        Doenca::updateOrCreate(['id' => $this->doenca_id],[
            'nome_doenca' => $this->nome_doenca,
            'diagnostico' => $this->diagnostico,
            'sintomas' => $this->sintomas,
            'tratamento' => $this->tratamento
        ]);

        session()->flash('message',
        $this->doenca_id ? 'Doença atualizada com Sucesso': 'Doença Criado com Sucesso');

        $this->closeModal();
        $this->resetInputFields();
    }


    public function edit($id)
    {
        $doenca = Doenca::findOrFail($id);
        $this->doenca_id = $id;
        $this->nome_doenca = $doenca->nome_doenca;
        $this->diagnostico = $doenca->diagnostico;
        $this->sintomas = $doenca->sintomas;
        $this->tratamento = $doenca->tratamento;

        $this->openModal();
    }

    public function delete($id)
    {
        Doenca::find($id)->delete();
        session()->flash('message', 'Doença Apagada com Sucesso');
    }
}
