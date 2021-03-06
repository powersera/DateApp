<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

/**
 * Class RegistrationController
 * @package App\Http\Controllers
 */
class RegistrationController extends Controller
{
    const DEFAULT_ERROR_RESPONSE_MESSAGE = 'Cannot create new account. Please try again later';

    /**
     * @return Factory|\Illuminate\View\View
     */
    public function showRegisterPage()
    {
        return view('StartPage.register');
    }
    /**
     * @param RegistrationRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registration(RegistrationRequest $request)
    {
        $newUser = User::create([
            'name'        => $request->name,
            'surname'     => $request->surname,
            'password'    => Hash::make($request->password),
            'email'       => $request->email,
            'dateOfBirth' => $request->dateOfBirth
        ]);
        if (!$newUser) {
            Session::flash('fail', self::DEFAULT_ERROR_RESPONSE_MESSAGE);

            return redirect()->route('start');
        }
        Auth::loginUsingid($newUser->id);

        return redirect()->route('userPage');
    }
}
