<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmergencyService extends Model
{
    protected $primaryKey = 'service_id';
    protected $fillable = ['service_name', 'description', 'price'];

    public function visits()
    {
        return $this->hasMany(EmergencyVisit::class, 'service_id');
    }
}