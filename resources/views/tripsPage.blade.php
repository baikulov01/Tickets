@extends('layout')

@section('content')
@role('administrator')
<a class="btn btn-primary" href="/trips_create" role="button">Добавить Новую Поездку</a><br>
<br>
@endrole

<div class="row">

<div class="col-md-12">

    <form method="get">
        <div class="form-row">
            <div class="form-group col-md-5">
                <input type="text" class="form-control" id="s1" name="from" placeholder="Откуда..." >
            </div>
            <div class="form-group col-md-5">
                <input type="text" class="form-control" id="s2" name="to" placeholder="Куда..." >
            </div>
            <div class="form-group col-md-2">
                <button type="submit" class="btn btn-primary btn-block">Search</button>
            </div>
        </div>

    </form>

</div><!-- ./col-md-12-->

</div><!-- ./row-->
<h1 class="display-4">Поездки</h1>



    <div class="table-responsive">

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <!-- <th scope="col">#</th> -->
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
                <!-- <th scope="row">{{$trip->id}}</th> -->
                <td>{{$trip->departure_place}}</td>
                <td>{{$trip->arrival_place}}</td>
                <td>{{$trip->departure_time}}</td>
                <td>{{$trip->arrival_time}}</td>


                @if(Auth::user())
                <td><a href="/placesPage?trip={{$trip->id}}" class="btn btn-success">Выбрать место</td>
                @else
                <td><a href="/login" class="btn btn-success">Выбрать место</td>
                @endif

                @role('administrator')
                <td><a href="/trips/{{$trip->id}}" class="btn btn-primary">Обновить</td>
                <td><a href="trips_delete/{{$trip->id}}" class="btn btn-danger">Удалить</td>
                @endrole
            </tr>
                @endforeach
            </tbody>
        </table>

    </div><!-- ./table-responsive-->

@endsection
