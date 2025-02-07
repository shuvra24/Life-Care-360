<?php

// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch user data
        $user = Auth::user();

        // Fetch user's upcoming appointments (example data)
        $appointments = [
            ['date' => '2023-10-15', 'doctor' => 'Dr. John Doe', 'specialty' => 'Cardiologist'],
            ['date' => '2023-10-20', 'doctor' => 'Dr. Jane Smith', 'specialty' => 'Neurologist'],
        ];

        // Fetch user's recent prescriptions (example data)
        $prescriptions = [
            ['medicine' => 'Paracetamol', 'dosage' => '500mg', 'instructions' => 'Take twice daily'],
            ['medicine' => 'Amoxicillin', 'dosage' => '250mg', 'instructions' => 'Take once daily'],
        ];

        return view('dashboard', compact('user', 'appointments', 'prescriptions'));
    }
}
