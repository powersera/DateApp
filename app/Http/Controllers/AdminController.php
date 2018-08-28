<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * Class AdminController
 * @package App\Http\Controllers
 */
class AdminController extends Controller
{
    /**
     * @return Factory|\Illuminate\View\View
     */
    public function index()
    {
        $userForAdmin = User::whereNotIn(
            'userRole', [User::ROLE_ADMIN, User::ROLE_SUPER_ADMIN])
            ->get();

        return view('adminPage.index', [
            'users' => $userForAdmin,
            'admin' => Auth::user()
        ]);
    }
}
