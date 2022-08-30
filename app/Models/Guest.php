<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_guest';
    protected $fillable = [
        'name_guest',
        'address_guest',
        'agency_guest',
        'email_guest',
        'telp_guest',
        'description_guest',
        'date_created_guest',
    ];
    public $timestamps = false;
}
