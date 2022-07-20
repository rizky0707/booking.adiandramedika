<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AntriUmum;
use Carbon\Carbon;
// use Illuminate\Support\Facades\Http;


class LandingController extends Controller
{
    public function getUmum()
    {
        // if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {

        $umum = AntriUmum::whereDate('created_at', Carbon::today())->limit('1')->latest()->get();
        
        if ($umum->count() > 0)
        {
        foreach ($umum as $item)
        {
            $data = $item->code_antrian;
            echo $data;
            // echo json_encode($data);

        }
        }else{
            echo 0;
        }
    // }
    
    }

    public function getAll()
    {
        // echo json_encode(DB::table('services')->where('id_category', $id)->get());

        // $all = AntriUmum::whereDate('created_at', Carbon::today())->latest()->get();
        $response["data"] = array();
        $response["data"] = AntriUmum::whereDate('created_at', Carbon::today())->latest()->get();
       
            // array_push($response["data"], $all);
            echo json_encode($response);
        
    }

    public function landing()
    {
        
        return view('landing');
        
    }

    public function callUmum()
    {
        $callUmum = AntriUmum::whereDate('created_at', Carbon::today())->limit('1')->latest()->get();

    }
}
