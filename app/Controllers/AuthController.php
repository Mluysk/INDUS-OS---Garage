<?php

namespace App\Controllers;

use App\Core\Controller;

class AuthController extends Controller
{
    public function showLogin(): void
    {
        $this->view('auth/login');
    }
}
