@extends('layout')

@section('content')
<h2 class="display-5">Обновить Место</h2><br>
    <form action="" method="post">
        {{csrf_field()}}

        <div class="form-group">
            <label for="id_bus" >ID автобуса</label>
            <input type="number" id="id_bus" name="id_bus" class="form-control" value="{{ $place->id_bus}}"/>
        </div>
        <div class="form-group">
            <label for="id_trip" >ID поездки</label>
            <input type="number" id="id_trip" name="id_trip" class="form-control" value="{{ $place->id_trip}}"/>
        </div>
        <div class="form-group">
            <label for="status" >Статус</label>
            <input type="text" id="status" name="status" class="form-control" value="{{ $place->status}}"/>
        </div>
        <button class="btn btn-primary" type="submit">Обновить</button>
        <a href="{{route('places.index')}}" class="btn btn-default">Назад</a>
    </form>

@endsection
