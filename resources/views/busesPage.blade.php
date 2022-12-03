@extends('layout')

@section('content')

    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Номер</th>
                <th scope="col">Количество мест</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <tbody>
                @foreach($buses as $bus)
            <tr>
                <th scope="row">{{$bus->id}}</th>
                <td>{{$bus->number}}</td>
                <td>{{$bus->place_count}}</td>
                <td><a href="/tickets/public/buses/{{$bus->id}}" class="btn btn-primary">Update</td>
                <td><a href="delete/{{$bus->id}}" class="btn btn-danger">Delete</td>
            </tr>
                @endforeach
            </tbody>
        </table>

    </div><!-- ./table-responsive-->

@endsection
