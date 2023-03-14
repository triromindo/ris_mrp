<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\sys\Role;
use App\Models\sys\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login.user');
    }

    public function loginProcess(Request $request)
    {
        ## get user selain admin ##
        $user = User::where([
            ['username', '=', $request->username],
            ['role_id', '<>', Role::admin]
        ])->first();

        ## cek jika data user ditemukan ##
        if ($user) {

            ## jika user aktif ##
            if ($user->status == User::active) {

                ## melakukan validasi dari input request ##
                $credentials = $request->validate([
                    'username' => ['required'],
                    'password' => ['required'],
                ]);

                ## jika validasi gagal (password salah dll) ##
                if (!Auth::attempt($credentials)) {
                    $attemps = $user->try_login + 1; // menambahkan angka percobaan
                    User::where('username', $request->username)->update(['try_login' => $attemps]); // mengupdate angka percobaan pada database

                    if ($attemps >= 3) { // jika percobaan sudah lebih dari 3x
                        User::where('username', $request->username)->update(['status' => User::lock]); // melakukan lock akun
                    }
                    return redirect()->route('login')->with('status', 'Password salah ! (' . $attemps . '/3)'); // return

                    ## jika validasi berhasil ##
                } else {
                    User::where('username', $request->username)->update([
                        'try_login' => 0, // mengupdate angka percobaan kembali ke 0 pada database
                        'is_online' => User::is_online, // mengupdate status online pada user
                        'last_login_timestamp' => Carbon::now(), // mengupdate last_login_timestamp pada user
                        'last_login_ip' => request()->ip() // mengupdate last_login_ip pada user
                    ]);
                    $request->session()->regenerate(); // meregenerate session login
                    return redirect('dashboard'); // return
                }
            }

            ## jika user di kunci ##
            if ($user->status == User::lock) {
                return redirect()->route('login')->with('status', 'Akun terkunci, silahkan hubungi admin!');
            }

            ## jika user tidak aktif ##
            if ($user->status == User::inactive) {
                return redirect()->route('login')->with('status', 'Akun anda belum aktif, silahkan hubungi admin!');
            }
        }

        ## jika data user tidak ditemukan ##
        return redirect()->route('login')->with('status', 'User tidak ditemukan !');
    }

    public function loginAdmin()
    {
        return view('auth.login.admin');
    }

    public function loginAdminProcess(Request $request)
    {
        ## get user selain admin ##
        $admin = User::where([
            ['username', '=', $request->username],
            ['role_id', '=', Role::admin]
        ])->first();

        ## cek jika data user ditemukan ##
        if ($admin) {

            ## jika user aktif ##
            if ($admin->status == User::active) {

                ## melakukan validasi dari input request ##
                $credentials = $request->validate([
                    'username' => ['required'],
                    'password' => ['required'],
                ]);

                ## jika validasi gagal (password salah dll) ##
                if (Auth::attempt($credentials)) {
                    User::where('username', $request->username)->update([
                        'is_online' => User::is_online, // mengupdate status online pada user
                        'last_login_timestamp' => Carbon::now(), // mengupdate last_login_timestamp pada user
                        'last_login_ip' => request()->ip() // mengupdate last_login_ip pada user
                    ]);

                    $request->session()->regenerate(); // meregenerate session login
                    return redirect('dashboard'); // return
                } else {
                }
            }
        }

        ## jika data user tidak ditemukan ##
        return redirect()->route('login-admin')->with('status', 'Username atau password salah !');
    }

    public function logout(Request $request)
    {
        User::where('rec_id', Auth::user()->rec_id)->update([
            'is_online' => User::is_offline, // mengupdate status online pada user
            'last_logout_timestamp' => Carbon::now(), // mengupdate last_logout_timestamp pada user
        ]);

        if (Auth::user()->role_id == Role::admin) { // jika admin
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('login-admin');
        } else { // jika bukan admin
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('login');
        }
    }

    public function changePassword()
    {
        if (Auth::user()->role_id == Role::admin) { // jika admin
            return view('auth.change_password.admin');
        } else { // jika bukan admin
            return view('auth.change_password.user');
        }
    }

    public function updatePassword(Request $request)
    {
        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Password Lama Salah!");
        }

        #Match The New Password and Confirm
        if ($request->new_password != $request->new_password_confirmation) {
            return back()->with("error", "Konfirmasi Password Baru Tidak Cocok!");
        }

        #Update the new Password
        User::where('rec_id', auth()->user()->rec_id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password berhasil diubah!");
    }
}
