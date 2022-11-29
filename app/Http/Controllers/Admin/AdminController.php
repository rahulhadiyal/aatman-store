<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        //View For Admin Theme
        view()->share('adminTheme','adminTheme.default');
    }
}
