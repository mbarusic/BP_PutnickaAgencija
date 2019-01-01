@extends('layouts.app')

@section('content')
<h1><mark>Countries</mark></h1>
<table class="table table-striped table-primary">
<a class="btn btn-primary float-right" href="/countries/new">New</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($countries as $country)
    <tr>
      <td><?= $country->id ?></td>
      <td><?= $country->name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection