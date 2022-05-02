<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminloginController extends Controller
{
    public function showlogin()
    {
        return view('admin.auth.login');
    }
    public function loginform(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $rules = [
                'email' => 'required',
                'password' => 'required',
            ];
            $validator = Validator::make($data, $rules);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
            if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect()->route('admin.dashboard')->with('success', 'Admin Login sucessfuly');
            } else {
                return back()->with('error', 'Invalid Credinational');
            }
        } else {
            return back()->with('error', 'Something went wrong!Please try again');
        }
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin')->with('success', 'Admin Logout Successfuly');
    }
    public function index()
    {
        return view('admin.dashboard');
    }
}
