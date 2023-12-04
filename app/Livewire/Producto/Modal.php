<?php

namespace App\Livewire\Producto;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Proveedor as ModelsProducto;

class Modal extends Component
{
    public $precio_unitario;
    public $precio_costo;
    public $precio_mayore;
    public $producto;
    public $modelo_producto;
    public $id_proveedor;
    public $marca_producto;
    public $tipo_producto;
    public $proveedor;
    public $id;

    protected $rules = [
        'precio_unitario' => 'required|numeric|min:5',
        'precio_costo' => 'required|numeric',
        'precio_mayore' => 'required|numeric',
        'id_proveedor' => 'required|numeric',
        'marca_producto' => 'required|string',
        'tipo_producto' => 'required|string',
        'modelo_producto' => 'required|string',

    ];

    public function render()
    {
        return view('livewire.producto.modal');
    }

 public function mount($id){
    $this->proveedor = ModelsProducto::all();
        $this->id;
        $this->producto = $id ? Producto::findOrFail($this->id) : new Producto();
        $this->marca_producto = $this->producto->marca_producto;
        $this->modelo_producto = $this->producto->modelo_producto;
        $this->tipo_producto = $this->producto->tipo_producto;
        $this->precio_unitario = $this->producto->precio_unitario;
        $this->precio_costo = $this->producto->precio_costo;
        $this->precio_mayore = $this->producto->precio_mayore;
        $this->id_proveedor = $this->producto->id_proveedor;

 }

    public function guardar()
    {
        $this->validate();

        if ($this->id) {
            $producto = Producto::find($this->id);
            $producto->update($this->getDatosProducto());
        } else {
            Producto::create($this->getDatosProducto());
        }

        return redirect(route('producto'));
    }

    public function multiplicar()
    {
        $this->precio_unitario = (0.40 * floatval($this->precio_costo)) + floatval($this->precio_costo);
        $this->precio_mayore = (0.30 * floatval($this->precio_costo)) + floatval($this->precio_costo);
    }

    private function getDatosProducto()
    {
        return [
            'marca_producto' => $this->marca_producto,
            'modelo_producto' => $this->modelo_producto,
            'tipo_producto' => $this->tipo_producto,
            'precio_costo' => $this->precio_costo,
            'precio_unitario' => $this->precio_unitario,
            'precio_mayore' => $this->precio_mayore,
            'id_proveedor' => $this->id_proveedor,
        ];
    }
}
