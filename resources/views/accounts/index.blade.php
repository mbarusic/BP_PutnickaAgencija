@extends('layouts.app')

@section('content')
<h1><mark>Accounts</mark></h1>
<table class="table table-striped table-primary table-responsive">
<a class="btn btn-primary float-right" href="/accounts/new">New</a>
  <thead>
    <tr>
   
      <th scope="col">#</th>
      <th scope="col">Number of passengers</th>
      <th scope="col">Username of passenger</th>
      <th scope="col">User password</th>
      <th scope="col">Name and surname of passenger</th>
      <th scope="col">Date of writing account</th>
      <th scope="col">Due date of account</th>
      <th scope="col">Payment method</th>
      <th scope="col">Currency</th>
      <th scope="col">Currency exchange rate</th>
      <th scope="col">Date of departure of the passenger</th>
      <th scope="col">Commission</th>
      <th scope="col">Vat</th>
      <th scope="col">Type of payment</th>
      <th scope="col">Amount</th>
      <th scope="col">Period of travel</th>
      <th scope="col">Name and surname of passenger</th>
      <th scope="col">E-mail of passenger</th>
      <th scope="col">Passenger phone number</th>
      <th scope="col">Number of adults</th>
      <th scope="col">Number of children</th>
      

    </tr>
  </thead>
  <tbody>
  @foreach ($accounts as $account)
    <tr>
      <td><?= $account->id ?></td>
      <td><?= $account->num_of_pass ?></td>
      <td><?= $account->username_of_passenger ?></td>
      <td><?= $account->user_password ?></td>
      <td><?= $account->name_surname_of_pass ?></td>
      <td><?= $account->date_of_writing_acc ?></td>
      <td><?= $account->due_date_of_acc ?></td>
      <td><?= $account->payment_method ?></td>
      <td><?= $account->currency ?></td>
      <td><?= $account->currency_exchange_rate ?></td>
      <td><?= $account->date_of_departure_of_the_passenger ?></td>
      <td><?= $account->commission ?></td>
      <td><?= $account->vat ?></td>
      <td><?= $account->type_of_payment ?></td>
      <td><?= $account->amount?></td>
      <td><?= $account->reservation->period_of_travel ?></td>
      <td><?= $account->reservation->name_surname_of_pass ?></td>
      <td><?= $account->reservation->e_mail_pass?></td>
      <td><?= $account->reservation->phone_num_pass?></td>
      <td><?= $account->reservation->num_of_adults?></td>
      <td><?= $account->reservation->num_children?></td>

    </tr>
  @endforeach
  </tbody>
</table>

@endsection