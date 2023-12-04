<?php

namespace App\Livewire\Producto;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Producto as Prod;

class Producto extends Component
{

public $fondo="";
public $isChecked;
    public function render()
    {

        return view('livewire.producto.producto')
            ->with([
                'producto' => Prod::all(),
            ]);
    }
    public function destroy($id){
Prod::destroy($id);

    }

public function updateIsChecked(){
    dd($this->isChecked);
    if($this->isChecked){
        dd($this->isChecked);
        $this->fondo="bg-black";
    }else{
        $this->fondo="bg-white";
    }
return $this->fondo;
}

}
