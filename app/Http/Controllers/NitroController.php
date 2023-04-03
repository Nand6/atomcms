<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NitroController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('client.nitro');
    }

    /**
     * @param Request $request
     * @return View
     */
    public function client(Request $request): View
    {
        $request->session()->put('sso', Auth::user()->ssoTicket());
        return view('client.client');
    }
}
