@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<h1>Create new Account</h1>
<form method="post" action="/accounts">
@csrf

<div class="form-group">
    <input class="form-control" name="num_of_pass" type="text" placeholder="Number of passengers">
</div>
<div class="form-group">
    <input class="form-control" name="username_of_passenger" type="text" placeholder="Username of passenger">
</div>
<div class="form-group">
    <input class="form-control" name="user_password" type="pass" placeholder="User password">
</div>
<div class="form-group">
    <input class="form-control" name="name_surname_of_pass" type="text" placeholder="Name and username of passenger">
</div>
<div class="form-group">
    <input class="form-control" name="date_of_writing_acc" type="text" placeholder="Date of writing account">
</div>
<div class="form-group">
    <input class="form-control" name="due_date_of_acc" type="text" placeholder="Due date of account">
</div>
<div class="form-group">
    <input class="form-control" name="payment_method" type="text" placeholder="Payment method">
</div>
<div class="form-group">
    <input class="form-control" name="currency" type="text" placeholder="Currency">
</div>
<div class="form-group">
    <input class="form-control" name="currency_exchange_rate" type="text" placeholder="Currency exchange rate">
</div>
<div class="form-group">
    <input class="form-control" name="date_of_departure_of_the_passenger" type="text" placeholder="Date of departure of the passenger">
</div>
<div class="form-group">
    <input class="form-control" name="commission" type="text" placeholder="Commision">
</div>
<div class="form-group">
    <input class="form-control" name="vat" type="text" placeholder="Vat">
</div>
<div class="form-group">
    <input class="form-control" name="type_of_payment" type="text" placeholder="Type of payment">
</div>
<div class="form-group">
    <input class="form-control" name="amount" type="text" placeholder="Amount">
</div>

<div class="form-group">
    <select class="form-control" name="reservation_id">
        @foreach($reservations as $reservation)
        <option value="{{ $reservation->id }}">{{ $reservation->period_of_travel }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <select class="form-control" name="reservation_id">
        @foreach($reservations as $reservation)
        <option value="{{ $reservation->id }}">{{ $reservation->name_surname_of_pass }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <select class="form-control" name="reservation_id">
        @foreach($reservations as $reservation)
        <option value="{{ $reservation->id }}">{{ $reservation->e_mail_pass}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <select class="form-control" name="reservation_id">
        @foreach($reservations as $reservation)
        <option value="{{ $reservation->id }}">{{ $reservation->phone_num_pass}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select class="form-control" name="reservation_id">
        @foreach($reservations as $reservation)
        <option value="{{ $reservation->id }}">{{ $reservation->num_of_adults}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <select class="form-control" name="reservation_id">
        @foreach($reservations as $reservation)
        <option value="{{ $reservation->id }}">{{ $reservation->num_of_children}}</option>
        @endforeach
    </select>
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection