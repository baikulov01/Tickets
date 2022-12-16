@extends('layout')

@section('content')



<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="text-center">
  <img src="assets/20945315.jpg" class="rounded" alt="" width="510" height="350">
</div>
<div  class="text-center">
    <h1 class="display-4">Мои билеты</h1>
</div>

    <div class="table-responsive">

        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">Номер билета</th>
                <th scope="col">Цена</th>
                <th scope="col">Статус</th>
                <th scope="col">Время покупки</th>
            </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
            <tr>
                <td>{{$ticket->id}}</td>
                <td>{{$ticket->price}}</td>
                <td>{{$ticket->status}}</td>
                <td>{{$ticket->updated_at}}</td>
            </tr>
                @endforeach
            </tbody>
        </table>

    </div><!-- ./table-responsive-->
@endsection
