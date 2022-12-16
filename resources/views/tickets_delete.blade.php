@extends('layout')

@section('content')
<h2 class="display-5">Обновить билет</h2><br>
    <form action="" method="post">
        {{csrf_field()}}

        <div class="form-group">
            <label for="description" >Описание</label>
            <input type="text" id="description" name="description" class="form-control" value="{{ $ticket->description}}"/>
        </div>
        <div class="form-group">
            <label for="price" >Цена</label>
            <input type="number" id="price" name="price" class="form-control" value="{{ $ticket->price}}"/>
        </div>
        <div class="form-group">
            <label for="status" >Статус</label>
            <input type="text" id="status" name="status" class="form-control" value="{{ $ticket->status}}"/>
        </div>
        <div class="form-group">
            <label for="id_place" >ID Места</label>
            <input type="number" id="id_place" name="id_place" class="form-control" value="{{ $ticket->id_place}}"/>
        </div>
        <div class="form-group">
            <label for="id_user" >ID Пользователя</label>
            <input type="number" id="id_user" name="id_user" class="form-control" value="{{ $ticket->id_user}}"/>
        </div>
        <button class="btn btn-primary" type="submit">Обновить</button>
        <a href="{{route('tickets.index')}}" class="btn btn-secondary">Назад</a>
    </form>

@endsection
