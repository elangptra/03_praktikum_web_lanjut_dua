<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreexpRequest;
use App\Http\Requests\UpdateexpRequest;
use App\Models\exps;
use Illuminate\Support\Facades\Auth;

class ExpsController extends Controller
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
        $user = Auth::user();
        $data_exps=exps::all();
        return view('kuliah',compact('data_exps'), ['user'=>$user]);
    }
}
