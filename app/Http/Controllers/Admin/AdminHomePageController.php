<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageHomeItem;

class AdminHomePageController extends Controller
{
    public function index()
    {
        $page_home_data = PageHomeItem::where('id',1)->first();
        return view('admin.page_home', compact('page_home_data'));
    }

    public function update(Request $request)
    {
        echo $request->heading;
    }
}
