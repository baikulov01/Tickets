@extends('layout')

@section('content')
<h2 class="display-5">Добавить билет</h2><br>
    <form action="" method="post">
        {{csrf_field()}}

        <div class="form-group">
            <label for="description" >Описание</label>
            <input type="text" id="description" name="description" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="price" >Цена</label>
            <input type="number" id="price" name="price" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="status" >Статус</label>
            <input type="text" id="status" name="status" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="id_place" >ID Места</label>
            <input type="number" id="id_place" name="id_place" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="id_user" >ID Пользователя</label>
            <input type="number" id="id_user" name="id_user" class="form-control"/>
        </div>
        <button class="btn btn-primary" type="submit">Добавить</button>
        <a href="{{route('tickets.index')}}" class="btn btn-default">Назад</a>
    </form>

@endsection
