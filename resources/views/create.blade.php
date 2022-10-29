@extends('layout')

@section('content')

    <form action="" method="post">
        {{csrf_field()}}

        <div class="form-group">
            <label for="number" >Номер автобуса</label>
            <input type="text" id="number" name="number" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="place_count" >Кол-во мест</label>
            <input type="number" id="place_count" name="place_count" class="form-control"/>
        </div>
        <button class="btn btn-primary" type="submit">Add</button>
    </form>

@endsection
