<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['company_id'];

    public function companie()
    {
        return $this->belongsTo(Companie::class);
    }

    public function attendences()
    {
        return $this->hasMany(Attendence::class);
    }
}
