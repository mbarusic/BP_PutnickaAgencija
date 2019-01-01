@extends('layouts.app')

@section('content')
<h1><mark>Reservations</mark></h1>
<table class="table table-striped table-primary table-responsive">
<a class="btn btn-primary float-right" href="/reservations/new">New</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Period of travel</th>
      <th scope="col">Name and surname of passenger</th>
      <th scope="col">E-mail of passenger</th>
      <th scope="col">Phone number of passenger</th>
      <th scope="col">Number of adults</th>
      <th scope="col">Number of children</th>
      <th scope="col">Max number of passengers</th>
      <th scope="col">Date of travel</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($reservations as $reservation)
    <tr>
      <td><?= $reservation->id ?></td>
      <td><?= $reservation->period_of_travel ?></td>
      <td><?= $reservation->name_surname_of_pass ?></td>
      <td><?= $reservation->e_mail_pass ?></td>
      <td><?= $reservation->phone_num_pass ?></td>
      <td><?= $reservation->num_of_adults ?></td>
      <td><?= $reservation->num_children ?></td>
      <td><?= $reservation->travel->max_num_of_pass ?></td>
      <td><?= $reservation->travel->date_of_travel ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection