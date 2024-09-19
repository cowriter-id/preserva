<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class DstnController extends Controller
{
    public function index()
    {
        //
        return view('destination.index');
    }

    public function login()
    {
        //
        return view('destination.login');
    }
}
