<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = \App\Reservation::with('travel')->paginate();
        return view('reservations/index', ['reservations' => $reservations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $travels = \App\Travel::all();
        return view('reservations/create', ['travels' => $travels]);
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
            'name_surname_of_pass' => 'required',
            'period_of_travel' => 'required|date',
            'name_surname_of_pass' => 'required',
            'e_mail_pass' => 'required|email',
            'phone_num_pass' => 'required|numeric',
            'num_of_adults' => 'required|numeric',
            'num_children' => 'required|numeric'
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('ReservationController@create')
                ->withErrors($validator);
        }
    
    
        $data = $request->input();
        \App\Reservation::create($data);
        return redirect()->action('ReservationController@index');
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
