@extends('layout')

@section('content')
<a class="btn btn-primary" href="/tickets/public/trips_create" role="button">Добавить Новую Поездку</a><br>
<h1 class="display-4">Поездки</h1>



    <div class="table-responsive">
        
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Место отправления</th>
                <th scope="col">Место прибытия</th>
                <th scope="col">Время отправления</th>
                <th scope="col">Время прибытия</th>
                <th>Действия</th>
                <th> </th>
            </tr>
            </thead>
            <tbody>
                @foreach($trips as $trip)
            <tr>
                <th scope="row">{{$trip->id}}</th>
                <td>{{$trip->departure_place}}</td>
                <td>{{$trip->arrival_place}}</td>
                <td>{{$trip->departure_time}}</td>
                <td>{{$trip->arrival_time}}</td>
                <td><a href="/tickets/public/trips/{{$trip->id}}" class="btn btn-primary">Обновить</td>
                <td><a href="/tickets/public/trips/{{$trip->id}}" class="btn btn-danger">Удалить</td>
            </tr>
                @endforeach
            </tbody>
        </table>

    </div><!-- ./table-responsive-->

@endsection
