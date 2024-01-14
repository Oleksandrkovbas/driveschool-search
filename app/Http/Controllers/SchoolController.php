<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prices;

class SchoolController extends Controller
{
    public function getShools(Request $request){
        $zipcode = $request->post('zipcode');
        $schools = Prices::where('zipcode', '=', $zipcode)->get();
        return response()->json($schools, 200);
       
        
    }
}
