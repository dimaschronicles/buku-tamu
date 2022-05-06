<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'alamat',
        'keperluan',
    ];

    public function getGuestByDate($tgl_mulai, $tgl_sampai)
    {
        return DB::table('guests')->where('created_at', '>=', $tgl_mulai)->where('created_at', '<=', $tgl_sampai)->get()->toArray();
    }
}
