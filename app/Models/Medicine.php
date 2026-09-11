<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $primaryKey = 'medicine_id';
    protected $fillable = ['medicine_name', 'category_id', 'description', 'price', 'stock_quantity'];

    public function category()
    {
        return $this->belongsTo(MedicineCategory::class, 'category_id');
    }
}