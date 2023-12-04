      <form wire:submit.prevent='guardar' id="miForm"  enctype="multipart/form-data">
           <div class="px-6 lg:p-8 bg-gray border-b border-gray-100" >
       @csrf
       <div class="form-group col-6">
       <label>Marca</label>
       <input type="text" maxlength="25" class="form-control" placeholder="Marca" wire:model='marca_producto' name="marca_producto" required>
       </div>
       <span class="text-danger error">
            @error('marca_producto') *{{ $message }} @enderror
        </span>
        <div class="form-group col-6">
       <label>Modelo</label>
       <input type="text" maxlength="25" class="form-control" placeholder="Modelo" wire:model='modelo_producto' name="modelo_producto" required>
       </div>
       <span class="text-danger error">
            @error('modelo_producto') *{{ $message }} @enderror
        </span>
       <div class="form-group col-6">
       <label>Tipo</label>
       <input type="text" maxlength="30"  class="form-control" placeholder="Tipo Producto" wire:model='tipo_producto' name="tipo_producto" required>
       </div>
       <span class="text-danger error">
            @error('tipo_producto') *{{ $message }} @enderror
        </span>
       <div class="form-group col-6">
       <label>Precio Costo</label>
       <input class="form-control" placeholder="Precio Costo" wire:change='multiplicar'  wire:model.live='precio_costo' name="precio_costo"
       oninput="javascript: if (this.value.length > this.maxLength)
       this.value = this.value.slice(0, this.maxLength);"
       type="number"
       maxlength="5"
       required>
       </div>
       <span class="text-danger error">
            @error('precio_costo') *{{ $message }} @enderror
        </span>
        <div class="form-group col-6">
       <label>Precio Unitario</label>
       <input type="number" class="form-control" placeholder="Precio Unitario"   value="{{$this->precio_unitario}}" wire:model.live='precio_unitario' name="precio_unitario" readonly>
       </div>
       <div class="form-group col-6">
       <label>Precio Mayoreo</label>
       <input type="number" class="form-control" placeholder="Precio Mayoreo"   value="{{$this->precio_mayore}}" wire:model='precio_mayore' name="precio_mayore" readonly>
       </div>
        <div class="form-group col-6">
       <label>Proveedor</label>
       <select name="id_proveedor"  wire:model="id_proveedor" >
       <option value="">--Proveedor--</option>
       @foreach($this->proveedor as $prove)
       <option value="{{ $prove->id }}"> {{ $prove->nombre_proveedor }}</option>
       @endforeach
       </select>
       </div>
       <span class="text-danger error">
            @error('id_proveedor') *{{ $message }} @enderror
        </span>
           <div class="mt-2 from-control">
        <a href="{{route('producto')}}" class="btn btn-outline-info">Cancelar</a>
        <button type="submit" class="btn btn-outline-primary">Guardar</button>
      </div>
       </div>
       </form>


