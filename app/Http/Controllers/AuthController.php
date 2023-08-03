<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{

    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('login');
    }
}
