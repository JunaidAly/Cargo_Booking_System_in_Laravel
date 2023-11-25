<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Models\CargoBooking;

class CargoBookingController extends Controller
{
    public function create()
    {
        return view('cargo.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'from' => 'required',
            'destination' => 'required',
        ]);

        $booking =  CargoBooking::create($validatedData);

        return view('cargo.show', ['booking' => $booking]);

    }
    public function show($id)
{
    $booking = CargoBooking::findOrFail($id);
    return view('cargo.show', ['booking' => $booking]);
}

}
