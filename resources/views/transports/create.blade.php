@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<h1>Add new Transport</h1>
<form method="post" action="/transports">
@csrf

<div class="form-group">
    <input class="form-control" name="price" type="text" placeholder="Price">
</div>
<div class="form-group">
    <input class="form-control" name="service" type="text" placeholder="Service">
</div>
<div class="form-group">
    <input class="form-control" name="transport" type="text" placeholder="Transport">
</div>
<div class="form-group">
    <input class="form-control" name="reservation" type="text" placeholder="Reservation">
</div>

<div class="form-group">
    <select class="form-control" name="destination_id">
        @foreach($destinations as $destination)
        <option value="{{ $destination->id }}">{{ $destination-> discount}}</option>
        @endforeach
    </select>
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection