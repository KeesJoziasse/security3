<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\Routing\Route;
use Illuminate\Foundation\Auth\RegistersUsers;

class LoginController extends Controller
{
    protected $maxAttempts = 3;

    protected $decayMinutes = 2;

    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;


}
