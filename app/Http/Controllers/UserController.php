<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        $data = user::paginate(2);
        return view('dashboard.data_pengguna', compact('data'));
    } //
}
