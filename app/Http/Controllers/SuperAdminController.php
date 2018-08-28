<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * Class SuperAdminController
 * @package App\Http\Controllers
 */
class SuperAdminController extends Controller
{
    /**
     * @return Factory|\Illuminate\View\View
     */
    public function index()
    {
        $allUsers = User::where('userRole', '!=', User::ROLE_SUPER_ADMIN)->get();

        return view('superAdminPage.index', [
            'users' => $allUsers,
            'admin' => Auth::user()
        ]);
    }
}
