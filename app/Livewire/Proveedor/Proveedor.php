<?php

namespace App\Livewire\Proveedor;

use Livewire\Component;
use App\Models\Proveedor as Prove;
class Proveedor extends Component
{
    public $id_proveedor;
    public $nombre_proveedor;

    public $proveedor;
    public function render()
    {

        $this->proveedor = Prove::all();
        return view('livewire.proveedor.proveedor');
    }
    public function destroy($id){
        Prove::destroy($id);

            }

}
