@extends('livewire.components.layout.app')
@section('title','Producto')
@section('contenido')
@livewire('producto.modal',['id' => $id])
@endsection
