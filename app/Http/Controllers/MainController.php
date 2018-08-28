<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;

/**
 * Class MainController
 * @package App\Http\Controllers
 */
class MainController extends Controller
{
    /**
     * @return Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('StartPage.index');
    }
}
