<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Components\Auth\SocialAuthMechanism;

class SocialMediaAuthController extends Controller
{
    use SocialAuthMechanism;
}
