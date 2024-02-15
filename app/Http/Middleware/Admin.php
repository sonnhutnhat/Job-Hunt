<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Admin extends Middleware
{
    protected function redirectTo($request)
    {
        if(! $request->expectsJson()){
            return route('admin_login');
        }
    }
}
