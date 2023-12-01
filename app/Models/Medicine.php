<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medicine extends Model
{
    use HasFactory;

    public function medicineOutgoings()
    {
        return $this->hasMany(MedicineOutgoing::class, 'id_medicine');
    }
}
