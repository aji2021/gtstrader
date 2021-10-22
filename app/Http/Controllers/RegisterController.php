<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AkunTrading;
use App\Models\AkunBank;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    //     public function create(Request $request)
    // {
    //     DB::table('users')->insert([
    //         'nama' => $request->nama,
    //     ]);
    // }


    public function create(Request $request) {
        $users = new User;
        $users->nama=$request->nama;
        $users->alamat=$request->alamat;
        $users->email=$request->email;
        $users->nik_ktp=$request->nik_ktp;
        $users->foto_ktp=$request->foto_ktp;
        $users->username=$request->username_trading;
        $users->referal="1";
        $users->password=Hash::make($request->password);
        $users->save();

        $akunbank= new AkunBank;
        $akunbank->id_users =  $users->id;
        $akunbank->nama_bank = $request->nama_bank;
        $akunbank->nomor_rekening = $request->nomor_rekening;
        $akunbank->nama_cabang = $request->nama_cabang;
        $akunbank->foto_rekening = $request->foto_rekening;
        $akunbank->save();


        $akuntrading= new AkunTrading;
        $akuntrading->id_users = $users->id;
        $akuntrading->username_trading = $request->username_trading;
        $akuntrading->password_trading = $request->password_trading;
        $akuntrading->jumlah_deposit = $request->jumlah_deposit;
        $akuntrading->save();
    }
}
