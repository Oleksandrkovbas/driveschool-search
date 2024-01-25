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

    public function show(Request $request){
        $zipcode = $request->zipcode;
        $schools = Prices::where('zipcode', '=', $zipcode)->get();
        if(count($schools)>1){
            return view('priceTable.index', compact('schools', 'zipcode'));
        }
        else{
            $schools = Prices::where('coop', '=', 'gold')->get();           
            return view('priceTable.index', compact('schools', 'zipcode'));
        }             
    }

    public function sendEmail(Request $request){
        
        $request->validate([
            'contactEmail'=> 'required',
            'contactPhone'=> 'required',  
            'contactText' => 'required'         
        ]);

        $subject = "Contact Information";

        $to = 'contacto@carnetfacil.com';
        $message = "
            <html>
                <head>
                    <title>Contact Information</title>
                </head>
                <body>                    
                <table>
                <tr>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Text</th>
                </tr>
                <tr>
                    <td>".$request->contactEmail."</td>
                    <td>".$request->contactPhone."</td>
                    <td>".$request->contactText."</td>
                </tr>
                </table>
                </body>
            </html>
            ";

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: '.$request->contactEmail. "\r\n";          

            mail($to,$subject,$message,$headers);

        $response['msg'] = 'Email Sent Correctly'; 
        return redirect()->route('welcome')->with('success', 'Email Successfully Sent!');
    }
}
