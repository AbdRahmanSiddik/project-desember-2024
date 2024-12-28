<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerService extends Controller
{
    public function index()
    {
        if(auth()->user()->profile_id != 1) {
            $user_id = auth()->user()->id;
            $data = [
                'tellers' => User::where('role', 'teller')->where('profile_id', $user_id)->with('profile')->get(),
                'admins' => User::where('role', 'admin')->where('profile_id', $user_id)->with('profile')->get(),
                'operators' => User::where('role', 'operator')->where('profile_id', $user_id)->with('profile')->get(),
            ];
        }else{
            $data = [
                'tellers' => User::where('role', 'teller')->with('profile')->get(),
                'admins' => User::where('role', 'admin')->with('profile')->get(),
                'operators' => User::where('role', 'operator')->with('profile')->get(),
            ];
        }
        return view('admin.customer-service.index', $data);
    }
}
