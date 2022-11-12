@extends('layout')

@section('content')

    <form action="" method="post">
        {{csrf_field()}}

        <div class="form-group">
            <label for="number" >Номер автобуса</label>
            <input type="text" id="number" name="number" class="form-control" value="{{$bus->number}}"/>
        </div>
        <div class="form-group">
            <label for="place_count" >Кол-во мест</label>
            <input type="number" id="place_count" name="place_count" class="form-control" value="{{$bus->place_count}}"/>
        </div>
        <button class="btn btn-primary" type="submit">Update</button>
        <a href="{{route('buses.index')}}" class="btn btn-default">Back</a>
    </form>

@endsection
