<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Deposit extends Model
{
    protected $table = 'deposit';
    protected $fillable = [
        'id_users',
        'nama_bank_deposit',
        'tanggal',
        'jumlah_deposit',
        'bukti_pembayaran',
    ];

    public $timestamps = false;
}