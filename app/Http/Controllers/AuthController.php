<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Carbon;

class AuthController extends Controller
{
    public function show(Request $request)
    {
        // echo 'kesini';
        // $request->session()->flush();
        // $request->session()->invalidate();
        if (Auth::check()) {
            return redirect()->route('cms.dashboard.index');
        }

        return view('cms.auth.index', ['pageName'    => 'Login']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('cms.login.index');
    }

    public function authenticate(Request $request)
    {
        //Validate the data
        $rules = [
            'username'  => 'required|string',
            'password'  => 'required|string'
        ];

        $messages = [
            'username.required' => 'Username cannot be empty',
            'password.required' => 'Password cannot be empty',
            'password.string'   => 'Invalid password format'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'status'    => 200,
                'code'      => 401,
                'message'   => 'Invalid password/username'
            ]);
        }

        $loginData = [
            'username'  => $request->input('username'),
            'password'  => $request->input('password')
        ];

        Auth::attempt($loginData);

        if (Auth::check()) {
            $request->session()->regenerate();

            $user = Auth::user();

            $userDetail = User::find($user->id);
            $userDetail->last_login = Carbon::now();

            $userDetail->save();

            return response()->json([
                'status'    => 200,
                'code'      => 200,
                'message'   => 'Correct User',
                'user'      => $user
            ]);
        } else {
            return response()->json([
                'status'    => 200,
                'code'      => 401,
                'message'   => 'Invalid password/username'
            ]);
        }
    }
}
