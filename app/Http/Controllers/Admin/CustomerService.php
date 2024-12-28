<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerService extends Controller
{
    public function index()
    {
        $data = [
            'tellers' => User::where('role', 'teller')->with('profile')->get(),
            'admins' => User::where('role', 'admin')->with('profile')->get(),
            'operators' => User::where('role', 'operator')->with('profile')->get(),
        ];
        return view('admin.customer-service.index', $data);
    }
}
