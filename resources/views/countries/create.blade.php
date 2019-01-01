@extends('layouts.app')

@section('content')


@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<h1>Add new Country</h1>
<form method="post" action="/countries">
@csrf

<div class="form-group">
    <input class="form-control" name="name" type="text" placeholder="Country name">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection