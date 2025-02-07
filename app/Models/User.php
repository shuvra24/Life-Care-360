<?php

// app/Models/User.php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_picture',
        'role_id', // Add role_id to mass assignable fields
        'specialty', // Add specialty if needed
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relationship with appointments (as a patient)
    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'user_id');
    }

    // Relationship with appointments (as a doctor)
    public function doctorAppointments()
    {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }

    // Relationship with prescriptions (as a patient)
    public function prescriptions()
    {
        return $this->hasMany(Prescription::class, 'user_id');
    }

    // Relationship with prescriptions (as a doctor)
    public function doctorPrescriptions()
    {
        return $this->hasMany(Prescription::class, 'doctor_id');
    }

    // Check if the user is a doctor
    public function isDoctor()
    {
        return $this->role_id === 2; // Assuming role_id 2 is for doctors
    }

    // Check if the user is a patient
    public function isPatient()
    {
        return $this->role_id === 1; // Assuming role_id 1 is for patients
    }
}