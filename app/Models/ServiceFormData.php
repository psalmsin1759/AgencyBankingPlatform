<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class ServiceFormData extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'data',
        'type',
        'value',
        'required',
    ];

    // Define the relationship with the Service model
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
