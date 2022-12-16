@extends('layout')

@section('content')
<a class="btn btn-primary" href="/places_create" role="button">Добавить Новое Место</a><br>
<h1 class="display-4">Места</h1>

<div class="table-responsive">

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <!-- <th scope="col">#</th> -->
                <th scope="col">Номер поездки</th>
                <th scope="col">Номер места</th>
                <th scope="col">Статус</th>
                <th scope="col">Цена</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($places as $place)
            <tr>
                <!-- <th scope="row">{{$place->id}}</th> -->
                <td>{{$place->id_trip}}</td>
                <td>{{$place->place_number}}</td>
                <td>{{$place->status}}</td>
                <td>{{$place->price}}</td>
                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-place_id="{{$place->id   }}">Купить</button></td>
                <td><a href="/places/{{$place->id}}" class="btn btn-primary">Обновить</td>
                <td><a href="places_delete/{{$place->id}}" class="btn btn-danger">Удалить</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div><!-- ./table-responsive-->


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Введите данные</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/buy" method="post">
                    @csrf
                <div class="form-group">
                        <!-- <label for="recipient-name" class="col-form-label">МЕСТО</label> -->
                        <input id="place_id" type="hidden" class="form-control"  name="id" >
                    </div>
                <div class="form-group">
                        <label for="recipient-name" class="col-form-label">ФИО</label>
                        <input type="text" value="{{Auth::user()->name.(' ').Auth::user()->surname}}"  class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input name="email" type="text"  value="{{Auth::user()->email}}" class="form-control" id="recipient-name">
                    </div>
                    <!-- <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div> -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Купить</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', function(event) {
        console.log('test');
        //var name = Auth::user()->id;

        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('place_id') // Extract info from data-* attributes

        var modal = $(this)
        modal.find('.modal-title').text('Введите данные')
        document.querySelector('#place_id').value = recipient;
    })
</script>

@endsection
