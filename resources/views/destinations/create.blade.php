@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<h1>Add new Destination</h1>
<form method="post" action="/destinations">
@csrf

<div class="form-group">
    <input class="form-control" name="discount" type="text" placeholder="Discount">
</div>

<div class="form-group">
    <select class="form-control" name="category_id">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <select class="form-control" name="city_id">
        @foreach($cities as $city)
        <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
    </select>
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection