<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Mail\AccountSuspended;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AccountController extends Controller
{
    public function suspend(User $suspend)
    {
        $suspend->update([
            'status' => 'nonaktif',
        ]);
        Mail::to($suspend->email)->send(new AccountSuspended('suspend'));
        return redirect()->route('customer-service.index')->with('success', 'Status Customer Service berhasil diubah.');
    }

    public function unsuspend(User $unsuspend)
    {
        $unsuspend->update([
            'status' => 'aktif',
        ]);
        Mail::to($unsuspend->email)->send(new AccountSuspended('unsuspend'));
        return redirect()->route('customer-service.index')->with('success', 'Status Customer Service berhasil diubah.');
    }
}
