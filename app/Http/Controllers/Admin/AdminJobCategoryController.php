<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobCategory;

class AdminJobCategoryController extends Controller
{
    public function index()
    {
        $job_categories = JobCategory::get();
        return view('admin.job_category', compact('job_categories'));
    }

    public function create(){
        return view('admin.job_category_create');
    }
}
