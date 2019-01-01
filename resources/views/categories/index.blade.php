@extends('layouts.app')

@section('content')
<h1><mark>Categories</mark></h1>
<table class="table table-striped table-primary">
<a class="btn btn-primary float-right" href="/categories/new">New</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($categories as $category)
    <tr>
      <td><?= $category->id ?></td>
      <td><?= $category->name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection