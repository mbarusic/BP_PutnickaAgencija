@extends('layouts.app')

@section('content')
<h1><mark>Accommodations</mark></h1>
<table class="table table-striped table-primary table-responsive">
<a class="btn btn-primary float-right" href="/accommodations/new">New</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Accommodation name</th>
      <th scope="col">Apartmant or hotel</th>
      <th scope="col">Discount</th>
      <th scope="col"> The price of accommodation</th>
      <th scope="col">Total accommodation price</th>
      <th scope="col">Maximum accommodation</th>
      <th scope="col">Discount</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($accommodations as $accommodation)
    <tr>
      <td><?= $accommodation->id ?></td>
      <td><?= $accommodation->accommodation_name ?></td>
      <td><?= $accommodation->apartment_hotel ?></td>
      <td><?= $accommodation->discount ?></td>
      <td><?= $accommodation->the_price_of_accommodation ?></td>
      <td><?= $accommodation->total_accommodation_price ?></td>
      <td><?= $accommodation->max_accommodation ?></td>
      <td><?= $accommodation->destination->discount ?></td>

    </tr>
  @endforeach
  </tbody>
</table>

@endsection