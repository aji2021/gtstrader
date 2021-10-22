<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Deposit;
use App\Models\Withdraw;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function depositRead()
    {   
        $deposit = DB::table('deposit')->get();
        return view('admin.transaksi.deposit',['deposit' => $deposit]);
    }

    public function createDeposit(Request $request) {
        $deposit = new Deposit;
        $deposit->id_users= Auth::user()->id;
        $deposit->nama_bank_deposit=$request->nama_bank_deposit;
        $deposit->tanggal=date("y-m-d");
        $deposit->jumlah_deposit=$request->jumlah_deposit;
        $deposit->bukti_pembayaran=$request->bukti_pembayaran;
        $deposit->save();
        return redirect('/admin/transaksi/deposit');
    }

    public function withdrawRead()
    {   
        $withdraw = DB::table('withdraw')->get();
        return view('admin.transaksi.withdraw',['withdraw' => $withdraw]);
    }

    public function createWithdraw(Request $request) {
        $withdraw = new Withdraw;
        $withdraw->id_users= Auth::user()->id;
        $withdraw->tanggal=date("y-m-d");
        $withdraw->jumlah_withdraw=$request->jumlah_withdraw;
        $withdraw->save();
        return redirect('/admin/transaksi/withdraw');
    }

}
