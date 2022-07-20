<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AntriUmum;
use Carbon\Carbon;


class UmumController extends Controller
{
    //get data umum 
public function index()
    {
        $umum = AntriUmum::whereDate('created_at', Carbon::today())->limit('1')->latest()->get();
        // $umum = AntriUmum::all();
    
        // dd($umum);
        return view('welcome', compact('umum'));
    }

    public function store(Request $requst)
    {
        $insert_umum = new AntriUmum;
        $insert_umum->code_antrian = $requst->code_antrian;
        // $insert_umum->code_antrian = $requst->code_antrian;
        $insert_umum->save();
        return redirect()->back();
    }
}
