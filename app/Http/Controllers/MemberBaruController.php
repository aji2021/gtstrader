<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;


class MemberBaruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $users = DB::table('users')->where('status','=',0)->get();
        return view('admin.member_baru.read',['users' => $users]);
    }

    public function detail(Request $request,$id)
    {   
        $users = DB::table('users')
        ->join('akun_trading', 'akun_trading.id_users', '=', 'users.id')
        ->join('akun_bank', 'akun_bank.id_users', '=', 'users.id')
        ->find($id);
    
        return view('admin.member_baru.detail',compact('users'))->renderSections()['content'];
    }

    public function create()
    {
        return view('admin.member_baru.create');
    }

    public function approve($id)
    {
        DB::table('users')->where('id',$id)->update([
            'role' =>1,
            'status' =>2
        ]);

        return redirect('/admin/member_baru');
    }

    public function reject($id)
    {
        DB::table('users')->where('id',$id)->update([
            'status' =>1
        ]);

        return redirect('/admin/member_baru');
    }














    public function email(){

        $details = [
        'title' => 'Login GTStrading',
        'body' => 'Selamat Akunmu Sudah Aktif'
        ];
       
        \Mail::to('ekopamuji1922@gmail.com')->send(new \App\Mail\MyTestMail($details));
       
        dd("Email sudah terkirim.");
    }
}
