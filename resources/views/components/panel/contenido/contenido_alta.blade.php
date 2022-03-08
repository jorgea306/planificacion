@extends('components.panel.panel')

@section('section_admin')


    <div class="card-body">
        <form class="form-group" action="{{route('altaContenido')}}" method="POST" enctype="multipart/form-data">
            @csrf

            @error('ruta')
            <div class="alert alert-danger" role="alert">
                la foto es obligatoria o el tamaño supera lo permitido
            </div>
            @enderror

            <div class="custom-file">
                <label class="custom-file-label" for="descripcion">seleccione una imagen...</label>
                <input type="file" class="custom-file-input" name="ruta">
            </div>


            <label for="nombre">Titulo</label>
            <input type="text" name="titulo" placeholder="ingrese el titulo.." class="form-control mb-2">

            <label for="descripcion">Contenido</label>
            <input type="text" name="contenido" placeholder="ingrese el contenido.." class="form-control mb-2">

            <button type="submit" class="btn btn-success mt-2">agregar foto</button>
        </form>
    </div>


@endsection
