<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function login(Request $request)
    {

        $log = DB::table('users')->where('username', $request->username)->first();

        if ($log) {
            if ($request->password == $log->password) {
                if ($log->role == 'A') {
                    session(['success' => true]);
                    return redirect('/admin');
                } else {
                    session(['success' => true]);
                    return redirect('/user');
                }
            }
        } else {
            return redirect('/guest');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
