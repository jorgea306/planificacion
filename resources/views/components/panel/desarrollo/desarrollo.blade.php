@extends('components.panel.panel')

@section('section_admin')
<div class="pagetitle">
    <h1>Plan de Desarrollo Territorial</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('panel')}}">Home</a></li>
        <li class="breadcrumb-item active">Desarrollo</li>
      </ol>
    </nav>
  </div><

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Desarrollo Territorial</h5>

      <!-- Table with stripped rows -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Position</th>
            <th scope="col">Age</th>
            <th scope="col">Start Date</th>
            <th scope="col">Start Date</th>
            <th scope="col">Start Date</th>
            <th scope="col">Start Date</th>
            <th scope="col">Start Date</th>
            <th scope="col">Start Date</th>
            <th scope="col">Start Date</th>
            <th scope="col">Start Date</th>
            <th scope="col">Start Date</th>
            <th scope="col">Start Date</th>
            <th scope="col">Start Date</th>
            <th scope="col">Start Date</th>
            <th scope="col">Start Date</th>
            <th scope="col">Start Date</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($desarrollo as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->pregunta1}}</td>
                <td>{{$item->pregunta1}}</td>
                <td>{{$item->pregunta1}}</td>
                <td>{{$item->pregunta1}}</td>
                <td>{{$item->pregunta1}}</td>
                <td>{{$item->pregunta1}}</td>
                <td>{{$item->pregunta1}}</td>
                <td>{{$item->pregunta1}}</td>
                <td>{{$item->pregunta1}}</td>
                <td>{{$item->pregunta1}}</td>
                <td>{{$item->pregunta1}}</td>
                <td>{{$item->pregunta1}}</td>
                <td>{{$item->pregunta1}}</td>
                <td>{{$item->pregunta1}}</td>
                <td>{{$item->pregunta1}}</td>
                <td>{{$item->pregunta1}}</td>
                <td>{{$item->pregunta1}}</td>
                <td class="td-btn">
                    <form action="{{route('bajaDesarrollo',$item)}}" class="d-inline" method="POST">
                      @method('DELETE')
                      @csrf
                      <button title="borarr" class="btn btn-link icdelete" type="submit"><i class="bi bi-trash-fill"></i></button>
                    </form>
                  </td>

            </tr>
            @endforeach
        </tbody>
      </table>
      <!-- End Table with stripped rows -->

    </div>
  </div>


@endsection
