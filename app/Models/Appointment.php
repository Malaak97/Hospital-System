<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $primaryKey = 'appointment_id';
    protected $fillable = ['patient_id', 'doctor_id', 'department_id', 'appointment_date', 'appointment_time', 'status'];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}