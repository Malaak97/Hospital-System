<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmergencyVisit extends Model
{
    protected $primaryKey = 'visit_id';
    protected $fillable = ['visit_date', 'visit_time', 'patient_id', 'service_id', 'notes'];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function service()
    {
        return $this->belongsTo(EmergencyService::class, 'service_id');
    }
}