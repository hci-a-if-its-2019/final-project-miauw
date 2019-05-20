<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function ResourceGroup()
    {
        return view('resource_group');
    }

    public function VirtualMachine()
    {
        return view('virtual_machine');
    }

    public function Create()
    {
        return view('create');
    }

    public function CreateProgress()
    {
        return view('create_progress');
    }
}
