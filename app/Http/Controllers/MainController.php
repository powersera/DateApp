<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class MainController
 * @package App\Http\Controllers
 */
class MainController extends Controller
{
    public function index()
    {
        return view('StartPage.index');
    }
}
