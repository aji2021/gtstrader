<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client;

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
}
