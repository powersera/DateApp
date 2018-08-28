<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

/**
 * Class MainPageController
 * @package App\Http\Controllers
 */
class MainPageController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('mainPage.index',
            ['user' => Auth::user()]
        );
    }
}
