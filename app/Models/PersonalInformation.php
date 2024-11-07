<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;
    //setup fillable
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'country',
        'street_address',
        'city',
        'state',
        'zip_code',
    ];

    // setup guarded
    // protected $guarded = [
    //     'id',
    //     'created_at',
    //     'updated_at',
    // ];
}
