@extends('layout')

@section('content')
@role('administrator')
<a class="btn btn-primary" href="/tickets/public/tickets_create" role="button">Добавить Новый Билет</a><br>
@endrole
<h1 class="display-4">Билеты</h1>



    <div class="table-responsive">

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Описание</th>
                <th scope="col">Цена</th>
                <th scope="col">Статус</th>
                <th>Действия</th>
                <th> </th>
            </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
            <tr>
                <th scope="row">{{$ticket->id}}</th>
                <td>{{$ticket->description}}</td>
                <td>{{$ticket->price}}</td>
                <td>{{$ticket->status}}</td>
                <td><a href="/tickets/public/tickets/{{$ticket->id}}" class="btn btn-primary">Обновить</td>
                <td><a href="tickets_delete/{{$ticket->id}}" class="btn btn-danger">Удалить</td>
            </tr>
                @endforeach
            </tbody>
        </table>

    </div><!-- ./table-responsive-->

@endsection
