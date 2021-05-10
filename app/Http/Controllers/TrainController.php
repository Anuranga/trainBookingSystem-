<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use App\Models\Train;
use App\Models\TrainBooking;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function viewTrainList()
    {
        return view('admin.view');
    }

    public function addTrain()
    {
        return view('admin/create');
    }

    public function submitTrainData(Request $request)
    {
        $rules = [
            'name' => 'required|min:6',
            'start_station' => 'required',
            'end_station' => 'required',
            'seats' => 'required|max:10',
            'departure_date_time' => 'required',
        ];

        $errorMessage = [
            'required' => 'Enter your :attribute first.'
        ];

        $this->validate($request, $rules, $errorMessage);

        Train::create([
            'name' => $request->name,
            'start_station' => \Str::slug($request->start_station),
            'end_station' => \Str::slug($request->end_station),
            'seats' => $request->seats,
            'departure_date_time' => $request->departure_date_time
        ]);

        $this->message('message','Train created successfully!');

        return redirect()->back();
    }

    public function bookTrainSeats(Request $request)
    {
        $rules = [
            'nic' => 'required|max:10',
            'phone' => 'required'
        ];

        $errorMessage = [
            'required' => 'Enter your :attribute first.'
        ];

        $this->validate($request, $rules, $errorMessage);

        $passengerId = Passenger::create([
            'nic' => $request->nic,
            'phone' => $request->phone
        ]);

        foreach ($request->seats as $seatNumber){
            TrainBooking::create([
                'train_id' => $request->nic,
                'seat_number' => $request->$seatNumber,
                'booking_status' => 1,
                'passenger_id' => $passengerId,
            ]);
        }

        $this->message('message','Train Booked successfully!');

        return redirect()->back();
    }

    public function fetchAllTrains()
    {
        $trains = Train::toBase()->get();
        return view('passenger.index',compact('trains'));
    }

    public function message(string $name = null, string $message = null)
    {
        return session()->flash($name,$message);
    }
}
