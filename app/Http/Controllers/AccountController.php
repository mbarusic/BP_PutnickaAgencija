<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = \App\Account::with('reservation')->paginate();
        return view('accounts/index', ['accounts' => $accounts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reservations = \App\Reservation::all();
        return view('accounts/create', ['reservations' => $reservations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'username_of_passenger' => 'required',
            'user_password' => 'required',
            'name_surname_of_pass' => 'required',
            'num_of_pass' => 'required',
            'date_of_writing_acc' => 'required|date',
            'due_date_of_acc' => 'required|date',
            'payment_method'=>'required', 
            'currency'=>'required',
            'currency_exchange_rate'=>'required',
            'date_of_departure_of_the_passenger'=>'required|date',
            'commission'=>'required',
            'vat'=>'required',
            'type_of_payment'=>'required',
            'amount'=>'required'
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('AccountController@create')
                ->withErrors($validator);
        }
    
    
        $data = $request->input();
        \App\Account::create($data);
        return redirect()->action('AccountController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
