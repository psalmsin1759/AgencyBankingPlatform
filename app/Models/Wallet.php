<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Agent;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'agent_id',
        'amount',
    ];

    // Define the relationship with the Agent model
    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agent_id');
    }
}
