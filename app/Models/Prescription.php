<?php

// app/Models/Prescription.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'doctor_id',
        'medicines',
        'instructions',
    ];

    // Relationship with the patient
    public function patient()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relationship with the doctor
    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
}
