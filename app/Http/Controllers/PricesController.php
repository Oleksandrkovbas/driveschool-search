<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Prices;
use DataTables;

class PricesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('prices.index');
    }

    public function getDataTableData(){
        $prices = Prices::select('*');  
   
        return Datatables::of($prices)
            ->addIndexColumn()
            ->addColumn('status', function($row){

                if($row->status == 1){
                    return "Active";
                }else{
                    return "Inactive";
                }

            }) 
            ->addColumn('action', function($row){

                // Update Button
                $updateButton = "<button class='btn btn-sm btn-info updateUser' data-id='".$row->id."' data-bs-toggle='modal' data-bs-target='#updateModal' ><i class='fa-solid fa-pen-to-square'></i></button>";

                // Delete Button
                $deleteButton = "<button class='btn btn-sm btn-danger deleteUser' data-id='".$row->id."'><i class='fa-solid fa-trash'></i></button>";

                return $updateButton." ".$deleteButton;

           }) 
           ->make();
    }

     // Read Prices record by ID
    public function getPriceData(Request $request){
        $id = $request->post('id');

        $priceData = Prices::find($id);    

        $response = array();

        if(!empty($priceData)){
            $response['name'] = $priceData->name;          
            $response['email']  = $priceData->email;
            $response['phone']  = $priceData->phone;
            $response['website']  = $priceData->website;
            $response['zipcode']  = $priceData->zipcode;
            $response['coop']  = $priceData->coop;
            $response['license']  = $priceData->license;
            $response['product']  = $priceData->product;
            $response['books']  = $priceData->books ;
            $response['tests']  = $priceData->tests;
            $response['onsite']  = $priceData->onsite;
            $response['online']  = $priceData->online;
            $response['practical']  = $priceData->practical;
            $response['numberOfPractical']  = $priceData->numberOfPractical;
            $response['price']  = $priceData->price;
            $response['extraLesson']  = $priceData->extraLesson;
            $response['created_at']  = $priceData->created_at;
            $response['updated_at']  = $priceData->updated_at;
           
            $response['success'] = 1;
        }else{
            $response['success'] = 0;
        }
   
        return response()->json($response);
    }

     // Update Prices record
     public function updatePrices(Request $request){
        ## Read POST data
        $id = $request->post('id');

        $priceData = Prices::find($id);

        $response = array();
        if(!empty($priceData)){

            $updata['name'] = $request->post('name');
            $updata['email'] = $request->post('email');
            $updata['phone'] = $request->post('phone');
            $updata['website'] = $request->post('website');
            $updata['zipcode'] = $request->post('zipcode');
            $updata['coop'] = $request->post('coop');
            $updata['license'] = $request->post('license');
            $updata['product'] = $request->post('product');
            $updata['books'] = $request->post('books');
            $updata['tests'] = $request->post('tests');
            $updata['onsite'] = $request->post('onsite');
            $updata['online'] = $request->post('online');
            $updata['practical'] = $request->post('practical');
            $updata['numberOfPractical'] = $request->post('numberOfPractical');
            $updata['price'] = $request->post('price');
            $updata['extraLesson'] = $request->post('extraLesson');
            $updata['updated_at'] = $request->post('updated_at');
            

            if($priceData->update($updata)){
                $response['success'] = 1;
                $response['msg'] = 'Update successfully'; 
            }else{
                $response['success'] = 0;
                $response['msg'] = 'Record not updated';
            }

        }else{
             $response['success'] = 0;
             $response['msg'] = 'Invalid ID.';
        }

        return response()->json($response); 
    }

    public function addPrices(Request $request){       

        $request->validate([
            'name'=> 'required',
            'zipcode'=> 'required',           
        ]);

        Prices::create($request->all());
        $response['success'] = 1;
        $response['msg'] = 'New Data added successfully'; 
        return response()->json($response); 
    }

     // Delete Price
     public function deletePrice(Request $request){

        ## Read POST data
        $id = $request->post('id');

        $priceData = Prices::find($id);

        if($priceData->delete()){
            $response['success'] = 1;
            $response['msg'] = 'Delete successfully'; 
        }else{
            $response['success'] = 0;
            $response['msg'] = 'Invalid ID.';
        }

        return response()->json($response); 
    } 

}
