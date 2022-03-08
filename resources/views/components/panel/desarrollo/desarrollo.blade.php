@extends('components.panel.panel')

@section('section_admin')


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

            </tr>
            @endforeach
        </tbody>
      </table>
      <!-- End Table with stripped rows -->

    </div>
  </div>


@endsection
