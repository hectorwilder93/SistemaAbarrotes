@extends('template')

@section('title', 'Editar categoria')

@push('css')

@endPush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Editar Categoria</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="{{ route('panel')}}">Inicio</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('categoria.index')}}">Categorías</a></li>
        <li class="breadcrumb-item active">Editar categoría</li>
    </ol>

    <div class="container w-100 border-4 border-primary rounded p-2 mt-3">
        <form action="{{ route('categoria.update', ['categoria'=>$categoria]) }}" method="post">
            @method('PATCH')
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre',$categoria->caracteristica->nombre) }}"  >
                    @error('nombre')
                    <small class="text-danger">{{'*'.$message}}</small>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label for="descripcion" class="form-label">Descripción :</label>
                    <textarea name="descripcion" id="descripcion" rows="3" class="form-control">{{ old('descripcion',$categoria->caracteristica->descripcion) }}</textarea>
                    @error('descripcion')
                    <small class="text-danger">{{'*'.$message}}</small>
                    @enderror
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <button type="reset" class="btn btn-secondary">Reiniciar</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@push('js')

@endpush
