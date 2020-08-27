<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();

        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.booking');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validates request
        $request->validate([
            'date_of_booking'=>'required',
            'no_of_people'=>'required',
            'no_of_nights'=>'require'
        ]);

        // Record booking values
        $booking = new Booking([
            'date_of_booking' => $request->get('date_of_booking'),
            'no_of_people' => $request->get('no_of_people'),
            'no_of_nights' => $request->get('no_of_nights')
        ]);

        // Save the booking values
        $booking->save();

        return redirect('/bookings')->with('success', 'Booking saved!');
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
        $booking = Booking::find($id);
        
        return view('bookings.update', compact('booking'));
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
        $request->validate([
            'date_of_booking'=>'required',
            'no_of_people'=>'required',
            'no_of_nights'=>'required'
        ]);

        $booking = Booking::find($id);
        $booking->date_of_booking = $request->get('date_of_booking');
        $booking->no_of_people = $request->get('no_of_people');
        $booking->no_of_nights = $request->get('no_of_nights');

        $booking->save();

        return redirect('/bookings')->with('success', 'Booking updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        return redirect('/bookings')->with('success', 'Booking deleted!');
    }
}
