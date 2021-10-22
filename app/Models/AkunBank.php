<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class AkunBank extends Model
{
    protected $table = 'akun_bank';
    protected $fillable = [
        'id_users',
        'nama_bank',
        'nomor_rekening',
        'nama_cabang',
        'foto_rekening',
    ];
    public $timestamps = false;
}