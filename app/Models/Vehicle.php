<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle', 'model', 'year', 'created_by'
    ];

    /**
     * User relation
     */
    public function entered_by()
    {
        return $this->hasOne(User::class, 'id', 'created_by');
    }
}
