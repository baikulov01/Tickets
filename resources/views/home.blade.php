@extends('layout')

@section('content')

    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Номер</th>
                <th scope="col">Количество мест</th>
            </tr>
            </thead>
            <tbody>
                @foreach($buses as $bus)
            <tr>
                <th scope="row">{{$bus->id}}</th>
                <td>{{$bus->number}}</td>
                <td>{{$bus->place_count}}</td>
            </tr>
                @endforeach
            </tbody>
        </table>

    </div><!-- ./table-responsive-->

@endsection
