<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\vehículo as vehi;
use App\Models\Piloto;
use App\Models\Color;
use App\Models\Fabricante;
class Vehículo extends Component
{
    public $vehículos,$numero_placas,$tipo,$piloto_id,$color_id,$fabricante_id,$modal = false;
    public $pilotos,$Colores,$fabricantes;
    public function render()
    {
        $this->pilotos = Piloto::all();
        $this->Colores = Color::all();
        $this->fabricantes = Fabricante::all();
        $this->vehículos = vehi::all();
        return view('livewire.vehículo');
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
        $this->numero_placas = '';
        $this->tipo = '';
        $this->piloto_id = '';
        $this->color_id = '';
        $this->fabricante_id = '';
    }
    public function guardar()
    {
        vehi::updateOrCreate(['id'=>$this->idpilot],
        [
            'numero_placas' => $this->numero_placas, 
            'tipo' => $this->tipo,
            'piloto_id' => $this->piloto_id,
            'color_id' => $this->color_id,
            'fabricante_id' => $this->fabricante_id, 
        ]);
        $this->cerrarModal();
        $this->limpiarCampos();
    }
    public function editar($id){
        $vehiculos= vehi::findOrFail($id);
        $this->idpilot=$id;
        $this->numero_placas=$vehiculos->numero_placas;
        $this->tipo=$vehiculos->tipo;
        $this->piloto_id=$vehiculos->piloto_id;
        $this->color_id=$vehiculos->color_id;
        $this->fabricante_id=$vehiculos->fabricante_id;
        $this->abrirModal();
    }
    public function borrar($id){
        vehi::find($id)->delete();
        
    }
}
