<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Withdraw extends Model
{
    protected $table = 'Withdraw';
    protected $fillable = [
        'id_users',
        'jumlah_withdraw',
        'tanggal',
    ];

    public $timestamps = false;
}