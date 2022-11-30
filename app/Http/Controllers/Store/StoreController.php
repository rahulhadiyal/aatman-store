<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __construct()
    {
        //View For Admin Theme
        view()->share('storeTheme','storeTheme.default');
    }
    
}
