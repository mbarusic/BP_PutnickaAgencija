
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-image:url("http://opinion.al/wp-content/uploads/2016/09/moti.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">VVG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/documents">Documents <span class="sr-only">(current)</span></a>
                </li>
                <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="/categories">Categories</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/destinations">Destinations</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/cities">Cities</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/countries">Countries</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/transports">Transports</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/travels">Travels</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/reservations">Reservations</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/accommodations">Accommodations</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/accounts">Accounts</a>
    </li>
</ul>
            </ul>
        </div>
    </nav>
    <div class="container pt-3">
        @yield('content')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>