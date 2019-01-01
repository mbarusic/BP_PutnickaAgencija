@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<h1>Add new Accommodation</h1>
<form method="post" action="/accommodations">
@csrf

<div class="form-group">
    <input class="form-control" name="accommodation_name" type="text" placeholder="Accommodation name">
</div>
<div class="form-group">
    <input class="form-control" name="apartment_hotel" type="text" placeholder="Apartment or hotel">
</div>
<div class="form-group">
    <input class="form-control" name="discount" type="text" placeholder="Discount">
</div>
<div class="form-group">
    <input class="form-control" name="the_price_of_accommodation" type="text" placeholder="The price of accommodation">
</div>
<div class="form-group">
    <input class="form-control" name="total_accommodation_price" type="text" placeholder="Total accommodation price">
</div>
<div class="form-group">
    <input class="form-control" name="max_accommodation" type="text" placeholder="Max accommodations">
</div>

<div class="form-group">
    <select class="form-control" name="destination_id">
        @foreach($destinations as $destination)
        <option value="{{ $destination->id }}">{{ $destination->city_id}}</option>
        @endforeach
    </select>
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection