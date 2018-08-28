<?php

namespace App\Http\Controllers;

use App\Exceptions\UnknownRoleException;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
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
            try {
                return Auth::user()->redirectByUserRole();
            } catch (UnknownRoleException $exception) {
                Log::error($exception->getMessage());
                Session::flash('fail', 'Something wend wrong. Please try again later');

                return redirect()->route('start');
            }
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
