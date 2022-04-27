<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOtp extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Relationships
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
