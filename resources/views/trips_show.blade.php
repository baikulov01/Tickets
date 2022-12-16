@extends('layout')

@section('content')
<h2 class="display-5">Обновить Поездку</h2><br>
    <form action="" method="post">
        {{csrf_field()}}

        <div class="form-group">
            <label for="departure_place" >Место отправления</label>
            <input type="text" id="departure_place" name="departure_place" class="form-control" value="{{ $trip->departure_place}}"/>
        </div>
        <div class="form-group">
            <label for="arrival_place" >Место прибытия</label>
            <input type="text" id="arrival_place" name="arrival_place" class="form-control" value="{{ $trip->arrival_place}}"/>
        </div>
        <div class="form-group">
            <label for="departure_time" >Время отправления</label>
            <input type="datetime-local" id="departure_time" name="departure_time" class="form-control" value="{{ $trip->departure_time}}"/>
        </div>
        <div class="form-group">
            <label for="arrival_time" >Время прибытия</label>
            <input type="datetime-local" id="arrival_time" name="arrival_time" class="form-control" value="{{ $trip->arrival_time}}"/>
        </div>
        <div class="form-group">
            <label for="id_bus" >ID автобуса</label>
            <input type="number" id="id_bus" name="id_bus" class="form-control" value="{{ $trip->id_bus}}"/>
        </div>
        <button class="btn btn-primary" type="submit">Обновить</button>
        <a href="{{route('trips.index')}}" class="btn btn-default">Назад</a>
    </form>

@endsection
