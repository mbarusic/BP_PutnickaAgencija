@extends('layouts.app')

@section('content')
<h1><mark>Destinations</mark></h1>
<table class="table table-striped table-primary">
<a class="btn btn-primary float-right" href="/destinations/new">New</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Discount</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($destinations as $destination)
    <tr>
      <td><?= $destination->id ?></td>
      <td><?= $destination->discount ?></td>
      <td><?= $destination->city->name ?></td>
      
    </tr>
  @endforeach
  </tbody>
</table>

@endsection