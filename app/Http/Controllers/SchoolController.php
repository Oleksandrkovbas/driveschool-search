<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prices;

class SchoolController extends Controller
{
    public function getShools(Request $request){
        if($request->post('zipcode')){
            $zipcode = $request->post('zipcode');
            $schools = Prices::where('zipcode', '=', $zipcode)->get();
            return response()->json($schools, 200);
        }else if($request->post('coop')){
            $coop = $request->post('coop');
            $schools = Prices::where('coop', '=', $coop)->get();
            return response()->json($schools, 200);
        }
    }
}
