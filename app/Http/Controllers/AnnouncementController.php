<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        return view('announcement'); // Make sure the "announcement.blade.php" file exists in the "resources/views" folder
    }
}

