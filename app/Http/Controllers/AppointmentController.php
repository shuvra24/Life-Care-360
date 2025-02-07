<?php

// app/Http/Controllers/AppointmentController.php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    // Display all appointments
    public function index()
    {
        // Fetch the logged-in user's appointments
        $appointments = Auth::user()->appointments()->with('doctor')->get();

        return view('appointments.index', compact('appointments'));
    }

    // Show the form to create a new appointment
    public function create()
    {
        // Fetch available doctors (assuming doctors have a role_id of 2)
        $doctors = User::where('role_id', 2)->get();

        return view('appointments.create', compact('doctors'));
    }

    // Store a new appointment
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'doctor_id' => 'required|numeric|exists:users,id',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        // Create the appointment
        Appointment::create([
            'user_id' => Auth::id(),
            'doctor_id' => $request->doctor_id,
            'date' => $request->date,
            'time' => $request->time,
            'status' => 'Pending',
        ]);

        // Redirect with success message
        return redirect()->route('appointments')->with('success', 'Appointment booked successfully!');
    }

    // Cancel an appointment
    public function destroy($id)
    {
        // Find the appointment
        $appointment = Appointment::findOrFail($id);

        // Ensure the logged-in user owns the appointment
        if ($appointment->user_id !== Auth::id()) {
            return redirect()->route('appointments')->with('error', 'You are not authorized to cancel this appointment.');
        }

        // Delete the appointment
        $appointment->delete();

        // Redirect with success message
        return redirect()->route('appointments')->with('success', 'Appointment canceled successfully!');
    }
}
