<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerServiceRequest;
use App\Models\Admin\Profile;
use App\Models\Teller\Pegadaian;
use App\Models\Teller\PembayaranPegadaian;
use App\Models\Teller\PembayaranPinjaman;
use App\Models\Teller\Pinjaman;
use App\Models\Teller\Rekening;
use App\Models\Teller\Tabungan;
use Illuminate\Support\Facades\File;

class CustomerService extends Controller
{
    public function index()
    {
        if(auth()->user()->profile_id != 1) {
            $user_id = auth()->user()->id;
            $data = [
                'tellers' => User::where('role', 'teller')->where('status', 'aktif')->where('profile_id', $user_id)->with('profile')->get(),
                'admins' => User::where('role', 'admin')->where('status', 'aktif')->where('profile_id', $user_id)->with('profile')->get(),
                'operators' => User::where('role', 'operator')->where('status', 'aktif')->where('profile_id', $user_id)->with('profile')->get(),
                'ditangguhkan' => User::where('status', 'nonaktif')->where('profile_id', $user_id)->with('profile')->get(),
            ];
        }else{
            $data = [
                'tellers' => User::where('role', 'teller')->where('status', 'aktif')->with('profile')->get(),
                'admins' => User::where('role', 'admin')->where('status', 'aktif')->with('profile')->get(),
                'operators' => User::where('role', 'operator')->where('status', 'aktif')->with('profile')->get(),
                'ditangguhkan' => User::where('status', 'nonaktif')->with('profile')->get(),
            ];
        }
        return view('admin.customer-service.index', $data);
    }

    public function create()
    {
        $data = [
            'profiles' => Profile::select('id_profile', 'nama_profile')->get(),
        ];
        return view('admin.customer-service.create', $data);
    }

    public function destroy(User $customer_service)
    {
        $relatedDataCount = Rekening::where('teller', $customer_service->id)->count() +
                            Tabungan::where('_teller', $customer_service->id)->count() +
                            Pinjaman::where('_teller', $customer_service->id)->count() +
                            PembayaranPinjaman::where('__teller', $customer_service->id)->count() +
                            Pegadaian::where('_teller', $customer_service->id)->count() +
                            PembayaranPegadaian::where('__teller', $customer_service->id)->count();

        if ($relatedDataCount > 0) {
            return redirect()->route('customer-service.index')->with([
                'service' => "Customer Service ini tidak dapat dihapus masih memiliki data yang terkait dengan rekening, tabungan, pinjaman, pembayaran",
                'token' => $customer_service->token_user,
            ]);
        } else {
            File::delete('images/user/' . $customer_service->foto_user);
            $customer_service->delete();
            return redirect()->route('customer-service.index')->with('success', 'Customer Service berhasil dihapus.');
        }
    }

    public function service(User $service)
    {
        $service->update([
            'status' => 'nonaktif',
        ]);

        return redirect()->route('customer-service.index')->with('success', 'Status Customer Service berhasil diubah.');
    }
}
