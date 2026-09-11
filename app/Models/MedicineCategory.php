<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicineCategory extends Model
{
    protected $primaryKey = 'category_id';
    protected $fillable = ['category_name', 'description'];

    public function medicines()
    {
        return $this->hasMany(Medicine::class, 'category_id');
    }
}