<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'specialization',
        'experience',
        'certifications',
    ];

    /**
     * Define the relationship to the User model.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
