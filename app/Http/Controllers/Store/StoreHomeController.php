<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Store\StoreController;
use Illuminate\Http\Request;

class StoreHomeController extends StoreController
{
    public function index()
    {
        return view('store.home.home');
    }

}
