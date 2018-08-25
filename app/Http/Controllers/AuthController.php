<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/**
 * Class AuthController
 * @package App\Http\Controllers
 */
class AuthController extends Controller
{
    /**
     * @param LoginRequest $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('name', 'surname', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->route('mainPage');
        }

        Session::flash('fail', 'Wrong data provided');

        return redirect()->back()->withInput($credentials);
    }
    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->route('start');
    }
}
