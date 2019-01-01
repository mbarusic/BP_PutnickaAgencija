@extends('layouts.app')

@section('content')
<h1><mark>Travels</mark></h1>
<table class="table table-striped table-primary table-responsive">
<a class="btn btn-primary float-right" href="/travels/new">New</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Maximum number of passengers</th>
      <th scope="col">Date of travel</th>
      <th scope="col">Price</th>
      <th scope="col">Service</th>
      <th scope="col">Transport</th>
      <th scope="col">Reservation</th>
      <th scope="col">Accommodation name</th>
      <th scope="col">Apartment or Hotel</th>
      <th scope="col">Discount</th>
      <th scope="col">The price of accommodation</th>
      <th scope="col">Total accommodation price</th>
      <th scope="col">Max accommodation</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($travels as $travel)
    <tr>
      <td><?= $travel->id ?></td>
      <td><?= $travel->max_num_of_pass ?></td>
      <td><?= $travel->date_of_travel ?></td>
      <td><?= $travel->transport->price?></td>
      <td><?= $travel->transport->service?></td>
      <td><?= $travel->transport->transport?></td>
      <td><?= $travel->transport->reservation?></td>
      <td><?= $travel->accommodation->accommodation_name?></td>
      <td><?= $travel->accommodation->apartment_hotel?></td>
      <td><?= $travel->accommodation->discount?></td>
      <td><?= $travel->accommodation->the_price_of_accommodation?></td>
      <td><?= $travel->accommodation->total_accommodation_price?></td>
      <td><?= $travel->accommodation->max_accommodation?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection