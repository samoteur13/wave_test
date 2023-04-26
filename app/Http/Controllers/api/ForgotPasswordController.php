<?php

namespace App\Http\Controllers\api;

use Wave\Http\Controllers\Auth\ResetPasswordController as AuthResetPasswordController;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends AuthResetPasswordController
{
    
    use SendsPasswordResetEmails;

}
