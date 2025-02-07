<?php

// app/Models/Appointment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'doctor_id',
        'date',
        'time',
        'status',
    ];

    // Relationship with the user (patient)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship with the doctor
    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
}
