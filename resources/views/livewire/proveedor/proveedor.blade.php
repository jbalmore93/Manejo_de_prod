<div>
<div>
<a href="{{route('proveedor.create')}}" class="btn btn-outline-success"> <i class='bx bx-plus'></i></a>
</div>
<table class="table table">
<thead>
<tr class="text-center">
<th colspan="5">PROVEEDORES</th>
</tr>
<tr class="text-center">
<th>ID</th>
<th>NOMBRE</th>
<th colspan="3">ACCIONES</th>
</tr>
</thead>
<tbody>
@foreach($proveedor as $proveedor)
<tr class="text-center">
<td>{{$proveedor->id}}</td>
<td>{{$proveedor->nombre_proveedor}}</td>
<td><a href="{{route('proveedor.edit',['id' => $proveedor->id])}}" class="btn btn-outline-primary"><i class='bx bxs-edit-alt'></i></a></td>
<td><button type="submit"  wire:confirm="Are you sure?" wire:click='destroy({{$proveedor->id}})' class="btn btn-outline-danger"><i class='bx bx-x-circle'></i></button></td>

</tr>
@endforeach
</tbody>
</table>
</div>
