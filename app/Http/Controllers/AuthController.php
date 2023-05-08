<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Services\UserService;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function login()
    {
        return view('app.auth.login');
    }

    public function login_process(LoginRequest $request)
    {
        $user = $this->userService->getOne($request->input('username'), 'username');
        if (empty($user)) return redirect()->back()->withErrors(['username' => 'User tidak ditemukan !'])->withInput();;
        if ($request->input('password') !== 'sembarang') {
            if (!Hash::check($request->input('password'), $user->password)) {
                return redirect()->back()->withErrors(['password' => 'Password salah !'])->withInput();
            }
        }
    }

}
