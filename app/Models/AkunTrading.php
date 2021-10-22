<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class AkunTrading extends Model
{
    protected $table = 'akun_trading';
    protected $fillable = [
        'id_users',
        'username_trading',
        'password_trading',
        'jumlah_deposit',
    ];
    public $timestamps = false;
}