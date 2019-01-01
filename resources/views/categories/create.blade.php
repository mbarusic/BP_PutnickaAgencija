@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<h1>Add new Category</h1>
<form method="post" action="/categories">
@csrf

<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Category name">
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection