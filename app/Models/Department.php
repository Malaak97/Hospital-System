<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'department_id';
    protected $fillable = ['department_name'];

    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'department_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'department_id');
    }
}