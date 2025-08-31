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
        return view('auth.login');
    }

    public function proses_login(Request $request)
    {
        $credentials = $request->validate([
            'nomor_identitas' => 'required|string',
            'password' => 'required',
        ]);

        $credentials['role'] = User::ROLE_USER;

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/voter')->with('success', 'Login berhasil, Selamat datang ' . Auth::user()->callname . '.');
        }

        return back()->withErrors([
            'nomor_identitas' => 'Nomor identitas atau password salah.',
        ])->withInput();
    }

    public function dashboard_login()
    {
        return view('dashboard.auth.login');
    }

    public function proses_dashboard_login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        $adminCredentials = array_merge($credentials, ['role' => User::ROLE_ADMIN]);
        $superAdminCredentials = array_merge($credentials, ['role' => User::ROLE_SUPERADMIN]);

        if (Auth::attempt($adminCredentials) || Auth::attempt($superAdminCredentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('success', 'Login berhasil, Selamat datang ' . Auth::user()->callname ?? Auth::user()->fullname . '.');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->withInput();
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
        $user = auth()->user();
         return view('dashboard.profile.index', compact('user'));
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
        'password' => 'nullable|min:6|confirmed',
    ]);

    $data = [
        'fullname' => $request->fullname,
        'callname' => $request->callname,
        'email'    => $request->email,
        'phone'    => $request->phone,
    ];

    // Update password jika diisi
    if ($request->filled('password')) {
        $data['password'] = Hash::make($request->password);
    }

    $user->update($data);

    return redirect()->route('dashboard.profile.index')->with('success', 'Profil berhasil diperbarui.');
}

    /* Profile END */

    /* Dashboard */
    public function d()
    {
        $admins = User::where('role', User::ROLE_ADMIN)->get();

        return view('dashboard.admins.index', compact('admins'));
    }

    public function d_create_admin()
    {
        return view('dashboard.admins.create');
    }


    public function d_store_admin(Request $request)
    {
        $credentials = $request->validate([
            'fullname' => 'required|string|max:100',
            'callname' => 'required|string|max:10',
            'email' => 'nullable|email|unique:users,email',
            'phone' => 'nullable|numeric|digits_between:6,20|unique:users,phone',
            'username' => 'required|string|min:6|max:50|unique:users',
            'password' => 'required|min:6|confirmed',
            'role' => [
                'nullable',
                Rule::in([User::ROLE_ADMIN]),
            ],
        ]);

        User::create([
            'fullname' => $request->fullname,
            'callname' => $request->callname,
            'email' => $request->email,
            'phone' => $request->phone,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => User::ROLE_ADMIN,
        ]);

        return redirect()->route('dashboard.admins.index')->with('success', 'Admin berhasil ditambahkan.');
    }

    public function d_edit_admin(User $user)
    {
        return view('dashboard.admins.edit', compact('user'));
    }

    public function d_update_admin(Request $request, User $user)
    {
        $credentials = $request->validate([
            'fullname' => 'required|string|max:100',
            'callname' => 'required|string|max:10',
            'email' => [
                'nullable',
                'email',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'phone' => [
                'nullable',
                'numeric',
                'digits_between:6,20',
                Rule::unique('users', 'phone')->ignore($user->id),
            ],
            'password' => 'nullable|min:6|confirmed',
        ]);

        $data = [
            'fullname' => $request->fullname ?? $user->fullname,
            'callname' => $request->callname ?? $user->callname,
            'email' => $request->email,
            'phone' => $request->phone,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('dashboard.admins.index')->with('success', 'Admin berhasil diperbarui.');
    }

    public function d_destroy(User $user)
    {
        if ($user->role == Auth::user()->role || $user->role == User::ROLE_SUPERADMIN)
            return abort('404', 'NOT FOUND');

        $user->delete();
        return redirect()->route('dashboard.admins.index')->with('success', 'User berhasil dihapus.');
    }
    /* Dashboard END */
}
