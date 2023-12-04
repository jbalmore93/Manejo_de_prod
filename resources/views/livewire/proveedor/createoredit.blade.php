       <form wire:submit.prevent='guardar' id="miForm"  >
       @csrf
       <div class="form-group col-6">
       @if($this->nombre_proveedor)
       <label>Ingrese el nuevo nombre del proveedor</label>
       @else
       <label>Ingrese el nombre del proveedor</label>
       @endif
       <input type="text" class="form-control"  placeholder="Proveedor" wire:model='nombre_proveedor'
        name="nombre_proveedor" required>
       </div>
       <span class="text-danger error">
            @error('nombre_proveedor') *{{ $message }} @enderror
        </span>
           <div class="mt-2 from-control">
        <a href="{{route('proveedor')}}" class="btn btn-outline-info">Cancelar</a>
        <button type="submit" class="btn btn-outline-primary" >Guardar</button>
      </div>
       </form>
