@extends('livewire.components.layout.app')
@section('title','Proveedor')
@section('contenido')
@livewire('proveedor.createoredit',['id' => $id])
@endsection
