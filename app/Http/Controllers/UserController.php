<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.user.read');
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function update()
    {
        return view('admin.user.update');
    }
}
