@extends('layouts.app')

@section('content')
<h1><mark>Transports</mark></h1>
<table class="table table-striped table-primary">
<a class="btn btn-primary float-right" href="/transports/new">New</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Price</th>
      <th scope="col">Service</th>
      <th scope="col">Transport</th>
      <th scope="col">Reservation</th>
      <th scope="col">Discount</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($transports as $transport)
    <tr>
      <td><?= $transport->id ?></td>
      <td><?= $transport->price ?></td>
      <td><?= $transport->service ?></td>
      <td><?= $transport->transport ?></td>
      <td><?= $transport->reservation ?></td>
      <td><?= $transport->destination->discount?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection