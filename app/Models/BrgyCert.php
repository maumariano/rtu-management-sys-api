<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrgyCert extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'name_suffix',
        'birthdate',
        'age',
        'address',
        'purpose',
        'email',
        'mobile_number',
        'doc_type'
    ];
}
