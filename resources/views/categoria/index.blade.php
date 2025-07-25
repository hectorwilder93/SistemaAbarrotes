<!DOCTYPE html>
@extends('template')

@section('title','categorias')

@push('head')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@push('css')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">

@endPush



@section('content')

@if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function(){
        const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    })
    Toast.fire({
        icon: "success",
        title: "Operación exitosa"
    });
 });

</script>
@endif
<div class="container w-100 border-4 border-primary rounded p-2 mt-5">
    <div class="container-fluid px-4">
        <h1 class="mt-4 text-center">Categorias</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"><a href="{{ route('panel') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Categorías</li>
        </ol>

        <div class="mb-4">
            <a href="{{ route('categoria.create') }}">
                <button type="button" class="btn btn-primary">Añadir nuevo registro</button>
            </a>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabla categorías
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categorias as $categoria)
                        <tr>
                            <td>
                                {{ $categoria->caracteristica->nombre }}
                            </td>
                            <td>
                                {{ $categoria->caracteristica->descripcion }}
                            </td>
                            <td>
                                {{ $categoria->caracteristica->acciones }}
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <form action="{{route('categoria.edit',['categoria'=>$categoria])}}" method="get">
                                        <button type="submit" class="btn btn-warning">Editar</button>
                                    </form>
                                  <button type="button" class="btn btn-danger">Eliminar</button>
                                </div>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@push('js')

<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
<script src="{{asset('js/datatables-simple-demo.js')}}"></script>

@endPush
