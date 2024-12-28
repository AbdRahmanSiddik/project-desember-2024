<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Profile;
use App\Http\Requests\ProfileRequest;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('admin.profiles.index', compact('profiles'));
    }

    public function create()
    {
        return view('admin.profiles.create');
    }

    public function store(ProfileRequest $request)
    {
        $token = Str::random(32);
        $no_profile = $request->no_profile;
        $logo = $request->file('logo');
        $logo_text = $request->file('logo_text');
        $nama_profile = $request->nama_profile;
        $alamat = $request->alamat;
        $deskripsi = $request->deskripsi;
        $tanggal_berdiri = DateTime::createFromFormat('l d F Y - H:i', $request->tanggal_berdiri);

        $logo_name = $token."logo.".$logo->getClientOriginalExtension();
        $logo_text_name = $token."logo-text.".$logo_text->getClientOriginalExtension();


        $data = [
            'token_profile' => $token,
            'no_profile' => $no_profile,
            'logo' => $logo_name,
            'logo_text' => $logo_text_name,
            'nama_profile' => $nama_profile,
            'alamat' => $alamat,
            'deskripsi' => $deskripsi,
            'created_at' => $tanggal_berdiri,
        ];

        Profile::create($data);

        $logo->move('images/logo', $logo_name);
        $logo_text->move('images/logo', $logo_text_name);

        return redirect()->route('profile.index')->with('success', 'Profile created successfully.');
    }

    public function show(Profile $profile)
    {
        return view('admin.profiles.show', compact('profile'));
    }

    public function edit(Profile $profile)
    {
        return view('admin.profiles.edit', compact('profile'));
    }

    public function update(ProfileRequest $request, Profile $profile)
    {
        $token = Str::random(32);
        $no_profile = $request->no_profile;
        $nama_profile = $request->nama_profile;
        $alamat = $request->alamat;
        $deskripsi = $request->deskripsi;
        $tanggal_berdiri = DateTime::createFromFormat('l d F Y - H:i', $request->tanggal_berdiri);

        if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $logo_name = $token."logo.".$logo->getClientOriginalExtension();
            File::delete('images/logo/'.$profile->logo);
            $logo->move('images/logo', $logo_name);

        }else{
            $logo_name = $profile->logo;
        }
        if($request->hasFile('logo_text')){
            $logo_text = $request->file('logo_text');
            $logo_text_name = $token."logo-text.".$logo_text->getClientOriginalExtension();
            File::delete('images/logo/'.$profile->logo_text);
            $logo_text->move('images/logo', $logo_text_name);
        }else{
            $logo_text_name = $profile->logo_text;
        }

        $data = [
            'token_profile' => $token,
            'no_profile' => $no_profile,
            'logo' => $logo_name,
            'logo_text' => $logo_text_name,
            'nama_profile' => $nama_profile,
            'alamat' => $alamat,
            'deskripsi' => $deskripsi,
            'created_at' => $tanggal_berdiri,
        ];

        $profile->update($data);

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }

    public function destroy(Profile $profile)
    {
        File::delete('images/logo/'.$profile->logo);
        File::delete('images/logo/'.$profile->logo_text);
        $profile->delete();
        return redirect()->route('profile.index')->with('success', 'Profile deleted successfully.');
    }
}
