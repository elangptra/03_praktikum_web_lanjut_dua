<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreexpRequest;
use App\Http\Requests\UpdateexpRequest;
use App\Models\exps;

class ExpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_exps=exps::all();
        return view('kuliah',compact('data_exps'));
    }
}
