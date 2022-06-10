<?php

namespace App\Http\Livewire;

use Livewire\Component;
USE App\Models\Piloto as pilot;

class Piloto extends Component
{
    public $pilotos,$idpilot,$nombre,$direccion,$dpi,$edad;
    public $modal = false;
    public function render()
    {
        $this->pilotos = pilot::all();
        return view('livewire.piloto');
    }
    public function abrirModal(){
        $this->modal = true;
    }
    public function cerrarModal(){
        $this->modal = false;
    }
    public function crear(){
        $this->abrirModal();
    }
    public function limpiarCampos(){
        $this->nombre = '';
        $this->direccion = '';
        $this->dpi = '';
        $this->edad = '';
    }
    public function guardar()
    {
        pilot::updateOrCreate(['id'=>$this->idpilot],
        [
            'nombre' => $this->nombre, 
            'direccion' => $this->direccion,
            'dpi' => $this->dpi,
            'edad' => $this->edad, 
        ]);
        $this->cerrarModal();
        $this->limpiarCampos();
    }
    public function editar($id){
        $pilotos= pilot::findOrFail($id);
        $this->idpilot=$id;
        $this->nombre=$pilotos->nombre;
        $this->direccion=$pilotos->direccion;
        $this->dpi=$pilotos->dpi;
        $this->edad=$pilotos->edad;
        $this->abrirModal();
    }
    public function borrar($id){
        pilot::find($id)->delete();
        
    }
}
