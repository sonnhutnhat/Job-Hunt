<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageOtherItem;
use Auth;
use Hash;

class LoginController extends Controller
{
    public function index()
    {
        $other_page_item = PageOtherItem::where('id',1)->first();
        return view('front.login', compact('other_page_item'));
    }

    public function company_login_submit(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credential = [
            'username' => $request->username,
            'password' => $request->password,
            'status' => 1
        ];

        if(Auth::guard('company')->attempt($credential)) {
            return redirect()->route('company_dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Information is not correct!');
        }
    }

    public function company_logout()
    {
        Auth::guard('company')->logout();
        return redirect()->route('login');
    }
}