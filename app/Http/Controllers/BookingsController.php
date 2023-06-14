<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use Illuminate\Support\Facades\DB;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking = DB::table('Bookings')
        ->orderby('matric_id','asc')
        ->get();
        return view('listbooking' ,['Booking'=>$booking]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $booking= new Booking();
        $booking->matric_id=$request->matric_id;
        $booking->first_name=$request->first_name;
        $booking->last_name=$request->last_name;
        $booking->gym_room=$request->gym_room;
        $booking->date=$request->date;
        $booking->email=$request->email;
        $booking->created_at=today();
        $booking->updated_at=today();
        $booking->save();
        return redirect('listbooking');




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return booking::all();

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
