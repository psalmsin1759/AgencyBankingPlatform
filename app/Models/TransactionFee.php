<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class TransactionFee extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'amount',
    ];

 
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
