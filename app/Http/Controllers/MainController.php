<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function book_doctor(Request $request)
    {
        $carbonDate = Carbon::createFromFormat('Y-m-d', $request->input('date'));
        $formattedDate = $carbonDate->format('d-M-Y');
        $doctor = str_replace('_', ' ', $request->input('doctor'));

        $bookingData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'date' => $formattedDate,
            'doctor' => ucwords($doctor),
            'time' => $request->input('time'),
        ];

        $create = Booking::create($bookingData);
        if (!$create) {
            return back()->with('alert', 'Gagal menambahkan data booking');
        }

        return back()->with('alert', 'Berhasil menambahkan data booking');
    }

    public function book_list()
    {
        $booking = Booking::all();
        return view('pages.booking', ['booking' => $booking]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
