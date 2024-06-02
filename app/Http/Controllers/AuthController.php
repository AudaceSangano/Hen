<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required','min:6'],
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            return redirect()->route('dashboard.index');

        }

        return back()->withErrors([
            'login' => 'Credentials do not match',
        ]);
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required','unique:users,email'],
            'password' => ['required','confirmed','min:6'],
            'username' => ['required','min:6','unique:users,name'],
            'province' => ['required'],
            'district' => ['required'],
            'sector' => ['required'],
            'telephone' => ['required'],
            'role' => ['required'],
        ]);

        User::create([
            'name' =>$request->username,
            'email' =>$request->email,
            'role_id' => $request->role,
            'password' =>Hash::make($request->password),
            'telephone' =>$request->telephone,
            'province_id'=>$request->province,
            'district_id'=>$request->district,
            'sector_id'=>$request->sector,
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $request->session()->regenerate();
            return redirect()->route('dashboard.index');

        }
    }

    public function changePassword(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        $this->validate($request, [
            'old_password' => 'required',
            'password' => ['required','different:old_password','min:6','confirmed'],
        ]);

        if (Hash::check($request->old_password, $user->password)) {
            DB::table('users')
            ->where('user_id',Auth::id())
            ->update([
                'password' => Hash::make($request->password),
            ]);
            return back();
        }else{
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('auth.login.form');
    }
}
