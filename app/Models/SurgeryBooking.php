<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurgeryBooking extends Model
{
    protected $primaryKey = 'surgery_id';
    protected $fillable = ['surgery_date', 'surgery_time', 'patient_id', 'doctor_id', 'surgery_type', 'operating_room', 'status', 'notes'];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}