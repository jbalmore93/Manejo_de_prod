<div class="{{$this->fondo}}">
{{$this->isChecked}}
<div class="switch-button" >
    <!-- Checkbox -->
    <input type="checkbox" wire:click='fondo'  wire:model='isChecked' name="switch-button" id="switch-label" class="switch-button__checkbox">
    <!-- BotÃ³n -->
    <label for="switch-label" class="switch-button__label"></label>

</div>
    <div class="mb-2">
<a href="{{route('create')}}" class="btn btn-outline-success" > <i class='bx bx-plus'></i></a>
</div>
<div class="table-responsive-sm">
<table class="table">
<thead>
<tr class="text-center">
<th colspan="11">PRODUCTO</th>
</tr>
<tr class="text-center">
<th>ID</th>
<th>MARCA</th>
<th>MODELO</th>
<th>TIPO</th>
<th>PRECIO COSTO</th>
<th>PRECIO UNITARIO</th>
<th>PRECIO MAYOREO</th>
<th>PROVEEDOR</th>
<th colspan="3">ACCIONES</th>
</tr>
</thead>
<tbody>
@foreach($producto as $producto)
<tr class="text-center">
<td>{{$producto->id}}</td>
<td>{{$producto->marca_producto}}</td>
<td>{{$producto->modelo_producto}}</td>
<td>{{$producto->tipo_producto}}</td>
<td>{{$producto->precio_costo}}</td>
<td>{{$producto->precio_unitario}}</td>
<td>{{$producto->precio_mayore}}</td>
<td>{{$producto->id_proveedor}}</td>
<td><a href="{{route('producto.edit',['id' => $producto->id])}}" class="btn btn-outline-primary"><i class='bx bxs-edit-alt'></i></a></td>
<td><button class="btn btn-outline-danger" wire:confirm="Are you sure?" wire:click='destroy({{$producto->id}})'><i class='bx bx-x-circle'></i></button></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
