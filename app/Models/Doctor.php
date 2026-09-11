<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $primaryKey = 'doctor_id';
    protected $fillable = ['user_id', 'department_id', 'fname', 'lname', 'specialization', 'phone', 'consultation_fee'];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }

    public function surgeries()
    {
        return $this->hasMany(SurgeryBooking::class, 'doctor_id');
    }
}
