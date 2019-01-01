@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif
<h1>Add new Travel</h1>
<form method="post" action="/travels">
@csrf

<div class="form-group">
    <input class="form-control" name="max_num_of_pass" type="text" placeholder="Max number of passengers">
</div>
<div class="form-group">
    <input class="form-control" name="date_of_travel" type="text" placeholder="Date of travel">
</div>

<div class="form-group">
    <select class="form-control" name="transport_id">
        @foreach($transports as $transport)
        <option value="{{ $transport->id }}">{{ $transport->service}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <select class="form-control" name="accommodation_id">
        @foreach($accommodations as $accommodation)
        <option value="{{ $accommodation->id }}">{{ $accommodation->accommodation_name}}</option>
        @endforeach
    </select>
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection