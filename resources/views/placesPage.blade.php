@extends('layout')

@section('content')
<a class="btn btn-primary" href="/places_create" role="button">Добавить Новое Место</a><br>
<h1 class="display-4">Места</h1>



    <div class="table-responsive">

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID автобуса</th>
                <th scope="col">ID поездки</th>
                <th scope="col">Статус</th>
                <th>Действия</th>
                <th> </th>
            </tr>
            </thead>
            <tbody>
                @foreach($places as $place)
            <tr>
                <th scope="row">{{$place->id}}</th>
                <td>{{$place->id_bus}}</td>
                <td>{{$place->id_trip}}</td>
                <td>{{$place->status}}</td>
                <td><a href="/places/{{$place->id}}" class="btn btn-primary">Обновить</td>
                <td><a href="places_delete/{{$place->id}}" class="btn btn-danger">Удалить</td>
            </tr>
                @endforeach
            </tbody>
        </table>

    </div><!-- ./table-responsive-->

@endsection
