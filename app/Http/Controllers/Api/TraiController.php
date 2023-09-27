<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class TraiController extends Controller
{
    

    public function index(){

        $trains = Train::all();

        return response()->json([

            'trains' => $trains

        ]);

    }


    public function show(string $slug){

        $trains = Train::where('slug' , $slug)->firstOrFail();

        return response()->json([

            'trains' => $trains
            
        ]);

    }


}
