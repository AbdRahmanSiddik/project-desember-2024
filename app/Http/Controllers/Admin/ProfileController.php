<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Profile;
use App\Http\Requests\ProfileRequest;
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

        $logo_name = $token."logo.".$logo->getClientOriginalExtension();
        $logo_text_name = $token."logo-text.".$logo_text->getClientOriginalExtension();

        $logo->move('images/logo', $logo_name);
        $logo_text->move('images/logo', $logo_text_name);

        $data = [
            'token_profile' => $token,
            'no_profile' => $no_profile,
            'logo' => $logo_name,
            'logo_text' => $logo_text_name,
            'nama_profile' => $nama_profile,
            'alamat' => $alamat,
            'deskripsi' => $deskripsi,
        ];

        Profile::create($data);

        return redirect()->route('admin.profiles.index')->with('success', 'Profile created successfully.');
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
        $data = $request->validated();

        if ($request->hasFile('logo')) {
            // Delete the old logo
            if (File::exists(public_path('images/logo/' . $profile->logo))) {
                File::delete(public_path('images/logo/' . $profile->logo));
            }
            $logo = $request->file('logo');
            $logo_name = $profile->token_profile . "logo." . $logo->getClientOriginalExtension();
            $logo->move('images/logo', $logo_name);
            $data['logo'] = $logo_name;
        } else {
            $data['logo'] = $profile->logo;
        }

        if ($request->hasFile('logo_text')) {
            // Delete the old logo_text
            if (File::exists(public_path('images/logo/' . $profile->logo_text))) {
                File::delete(public_path('images/logo/' . $profile->logo_text));
            }
            $logo_text = $request->file('logo_text');
            $logo_text_name = $profile->token_profile . "logo-text." . $logo_text->getClientOriginalExtension();
            $logo_text->move('images/logo', $logo_text_name);
            $data['logo_text'] = $logo_text_name;
        } else {
            $data['logo_text'] = $profile->logo_text;
        }

        $profile->update($data);

        return redirect()->route('admin.profiles.index')->with('success', 'Profile updated successfully.');
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('admin.profiles.index')->with('success', 'Profile deleted successfully.');
    }
}
