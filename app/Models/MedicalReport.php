<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalReport extends Model
{
    use HasFactory;

    public function patient_details()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
