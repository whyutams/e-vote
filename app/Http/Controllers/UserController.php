<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /* Auth */
    public function login()
    {
        return "view login";
    }

    public function proses_login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(Auth::user()->role == User::ROLE_USER ? '/' : '/dashboard')->with('success', 'Login berhasil, Selamat datang ' . Auth::user()->callname . '.');
        }
        
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->withInput();
    }

    public function register()
    {
        return "view register";
    }

    public function proses_register(Request $request)
    {
        $credentials = $request->validate([
            'fullname' => 'required|string|max:100',
            'callname' => 'required|string|max:10',
            'email' => 'nullable|email|unique:users,email',
            'phone' => 'required|numeric|digits_between:6,20|unique:users,phone',
            'photo_profile' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'username' => 'required|string|min:6|max:50|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'fullname' => $request->fullname,
            'callname' => $request->callname,
            'email' => $request->email,
            'phone' => $request->phone,
            'photo_profile' => $request->photo_profile,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'Registrasi berhasil, Selamat datang ' . $request->callname . '.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Berhasil logout.');
    }
    /* Auth END */

    /* Profile */
    public function profile()
    {
        return "view profile";
    }

    public function update_profile()
    {
        return "view edit profile";
    }

    public function proses_update_profile(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'fullname' => 'required|string|max:100',
            'callname' => 'required|string|max:10',
            'email' => [
                'nullable',
                'email',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'phone' => [
                'required',
                'numeric',
                'digits_between:6,20',
                Rule::unique('users', 'phone')->ignore($user->id),
            ],
            'photo_profile' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'password' => 'nullable|min:6|confirmed',
        ]);

        $data = [
            'fullname' => $request->fullname ?? Auth::user()->fullname,
            'callname' => $request->callname ?? Auth::user()->callname,
            'email' => $request->email ?? Auth::user()->email,
            'phone' => $request->phone ?? Auth::user()->phone, 
        ];

        if ($request->hasFile('photo_profile')) {
            if ($user->photo_profile) {
                Storage::disk('public')->delete($user->photo_profile);
            }

            $data['photo_profile'] = $request->file('photo_profile')->store('profile', 'public');
        }

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui.');
    }
    /* Profile END */
}
