<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineOutgoing extends Model
{
    use HasFactory;

    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'id_medicine');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'id_unit');
    }
}
