@extends('layout')

@section('content')
<h2 class="display-5">Добавить Поездку</h2><br>
    <form action="" method="post">
        {{csrf_field()}}

        <div class="form-group">
            <label for="departure_place" >Место отправления</label>
            <input type="text" id="departure_place" name="departure_place" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="arrival_place" >Место прибытия</label>
            <input type="text" id="arrival_place" name="arrival_place" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="departure_time" >Время отправления</label>
            <input type="datetime-local" id="departure_time" name="departure_time" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="arrival_time" >Время прибытия</label>
            <input type="datetime-local" id="arrival_time" name="arrival_time" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="id_bus" >ID автобуса</label>
            <select name="id_bus" class="form-control">
            @foreach($buses as $bus)
                <option> {{$bus->id}} </option>
            @endforeach
            </select>



            <!-- <input type="dropdown" id="id_bus" name="id_bus" class="form-control"/> -->
        </div>

        <button class="btn btn-primary" type="submit">Добавить</button>
        <a href="{{route('trips.index')}}" class="btn btn-default">Назад</a>
    </form>

@endsection
