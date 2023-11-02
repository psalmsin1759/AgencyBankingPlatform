<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class ServiceCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "popularity"
    ];


    public function services()
    {
        return $this->hasMany(Service::class, 'service_category_id');
    }
}
