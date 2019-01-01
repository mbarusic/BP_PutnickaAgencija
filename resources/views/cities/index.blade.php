@extends('layouts.app')

@section('content')
<h1><mark>Cities</mark></h1>
<table class="table table-striped table-primary">
<a class="btn btn-primary float-right" href="/cities/new">New</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">City name</th>
      <th scope="col">Country name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($cities as $city)
    <tr>
      <td><?= $city->id ?></td>
      <td><?= $city->name ?></td>
      <td><?= $city->country->name?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection