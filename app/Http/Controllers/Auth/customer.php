<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class customer extends Controller
{

    /**
     * customer constructor.
     */
    public function __construct()
    {
    }

    public function teenagers()
    {
        return view('teenagers');
    }




}
