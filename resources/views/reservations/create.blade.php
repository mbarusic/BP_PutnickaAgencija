@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<h1>Add new Reservation</h1>
<form method="post" action="/reservations">
@csrf

<div class="form-group">
    <input class="form-control" name="period_of_travel" type="text" placeholder="Period of travel">
</div>
<div class="form-group">
    <input class="form-control" name="name_surname_of_pass" type="text" placeholder="Name and surname of passenger">
</div>
<div class="form-group">
    <input class="form-control" name="e_mail_pass" type="text" placeholder="Passenger e-mail">
</div>
<div class="form-group">
    <input class="form-control" name="phone_num_pass" type="text" placeholder="Passenger phone number">
</div>
<div class="form-group">
    <input class="form-control" name="num_of_adults" type="text" placeholder="Number of adults">
</div>
<div class="form-group">
    <input class="form-control" name="num_children" type="text" placeholder="Number of children">
</div>


<div class="form-group">
    <select class="form-control" name="travel_id">
        @foreach($travels as $travel)
        <option value="{{ $travel->id }}">{{ $travel-> date_of_travel}}</option>
        @endforeach
    </select>
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection