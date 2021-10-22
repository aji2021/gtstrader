<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function approve()
    {   
        $users = DB::table('users')->where('status','=',2)->get();
        return view('admin.member.approve',['users' => $users]);
    }

    public function reject()
    {   
        $users = DB::table('users')->where('status','=',1)->get();
        return view('admin.member.reject',['users' => $users]);
    }

     public function approveUpdate($id)
    {
        DB::table('users')->where('id',$id)->update([
            'role' =>1,
            'status' =>2
        ]);

        return redirect('/admin/member_baru');
    }

    public function create()
    {
        return view('admin.member.create');
    }
}