<?php

namespace App\Livewire\Proveedor;

use Livewire\Component;
use App\Models\Proveedor;

class Createoredit extends Component
{
    public $nombre_proveedor;
    public $proveedor;
    public $id;

    protected $rules=[
'nombre_proveedor' => 'required|string|max:15'

    ];
    public function render()
    {

        return view('livewire.proveedor.createoredit');

    }

    public function mount($id)
{
    $this->id = $id;
    $this->proveedor = $id ? Proveedor::findOrFail($id) : new Proveedor();
    $this->nombre_proveedor = $this->proveedor->nombre_proveedor;
}

public function guardar(){
    $this->validate();
    if($this->id){
        $proveedor = Proveedor::find($this->id);
        $proveedor->update(

            ['nombre_proveedor' => $this->nombre_proveedor,
        ]

        );

    }else{
        Proveedor::create(
            [
                'nombre_proveedor' => $this->nombre_proveedor,
            ]
        );
    }

    return redirect(route('proveedor'));
}


}



