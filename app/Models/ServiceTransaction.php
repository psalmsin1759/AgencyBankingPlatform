<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use App\Models\Agent;

class ServiceTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'agent_id',
        'amount',
        'transaction_id',
        'description',
    ];

    // Define the relationship with the Service model
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    // Define the relationship with the Agent model
    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agent_id');
    }
}
