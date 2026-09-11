<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    protected $fillable = ['name', 'email', 'password'];
    protected $primaryKey = 'patient_id';
   // protected $fillable = ['user_id', 'first_name', 'last_name', 'phone', 'age', 'gender', 'address'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'patient_id');
    }

    public function emergencyVisits()
    {
        return $this->hasMany(EmergencyVisit::class, 'patient_id');
    }

    public function surgeries()
    {
        return $this->hasMany(SurgeryBooking::class, 'patient_id');
    }
}
