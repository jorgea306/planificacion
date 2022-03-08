@extends('components.panel.panel')

@section('section_admin')


    <a type="button" href="{{route('contenido_alta')}}" class="btn btn-dark">Crear</a>

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Contenido</h5>

          <div class="row">
            @foreach ($contenidos as $item)

            <div class="col-xl-3 col-lg-4 col-md-6 mb-4" style="">
                <div class="bg-white shadow rounded overflow p-3 tarjeta">
                    <img src="{{ asset('img/'.$item->ruta)}}" alt="ft_producto" class="img-fluid card-img-top">
                    <p class="text-muted mb-2 mt-2">nombre: {{$item->titulo}}</p>
                    <p class="text-muted mb-2 mt-2">nombre: {{$item->contenido}}</p>
                    <p class="text-muted mb-2 mt-2">ruta: {{$item->ruta}}</p>
                    {{-- <a href="{{route('editarFoto', $item)}}" title="editar" class="btn btn-sm btn-warning text-white mb-3">
                        <i class="fa fa-pen"></i>
                        Editar
                    </a> --}}
                    <form action="{{route('bajaContenido',$item)}}" class="d-inline" method="POST">
                        @method('DELETE')
                        @csrf
                        <button title="borarr" class="btn btn-danger btn-sm" type="submit">
                            <i class="fa fa-trash"></i>
                            Eliminar
                        </button>
                    </form>
                </div>
            </div>

            @endforeach
        </div>


        </div>
      </div>


@endsection
