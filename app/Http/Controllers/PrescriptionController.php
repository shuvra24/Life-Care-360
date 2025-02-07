<?php

namespace App\Http\Controllers;

use App\Models\Prescription; // ✅ Import Prescription Model
use App\Models\User; // ✅ Import User Model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrescriptionController extends Controller
{
    public function index()
    {
        // ✅ Make sure `Auth::user()` is not null
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in!');
        }

        // ✅ Fix: Ensure the method name `prescriptions()` is correct
        $prescriptions = Auth::user()->prescriptions()->with('doctor')->get();

        return view('prescriptions.index', compact('prescriptions'));
    }
}
