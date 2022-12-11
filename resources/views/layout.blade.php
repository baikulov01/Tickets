<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Билеты.ru</title>
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
<h1 class="navbar-brand" href="/">Билеты.ru</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/ticketsPage">Tickets</a>
      </li>
      @role('administrator')

      <li class="nav-item">
        <a class="nav-link" href="/tripsPage">Trips</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/busesPage">Buses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/placesPage">Places</a>
      </li>
      @endrole
    </ul>
  </div>
</nav>

<div class="container">
    <!-- <a class="btn btn-primary" href="/create" role="button">Add new bus</a> -->

    <div class="row">

        <div class="col-md-12">

            <form>
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <input type="text" class="form-control" id="q" name="q" placeholder="Search...">
                    </div>
                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                    </div>
                </div>

            </form>

        </div><!-- ./col-md-12-->

    </div><!-- ./row-->

    <div class="row mt-3 mb-3">
        <div class="col-md-12">

            @yield('content')

        </div><!-- ./col-md-12-->

    </div><!-- ./row-->

</div><!-- ./container-->


</body>
</html>
