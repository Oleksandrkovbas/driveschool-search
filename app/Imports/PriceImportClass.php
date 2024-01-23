<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

use App\Models\Prices;
use Maatwebsite\Excel\Concerns\ToModel;

class PriceImportClass implements ToModel
{ 

    public function model(array $row)
    {        
        $temp = [];
        foreach($row as $item){
           
            if($item == 'Sí'){
                $item = 'Yes';
            }
            array_push($temp, $item);
        }       

        return new Prices([
                'name' => $temp[0],
                'email'=> $temp[1],
                'phone' => $temp[2],
                'website' => $temp[3],
                'zipcode' => $temp[4],
                'coop' => $temp[5],
                'license' => $temp[6],
                'product' => $temp[7],
                'books' => $temp[8],
                'tests' => $temp[9],
                'onsite' => $temp[10],
                'online' => $temp[11],
                'practical' => $temp[12],
                'numberOfPractical' => $temp[13],
                'price' => $temp[14],
                'extraLesson' => $temp[15],
                'status' => 'Yes'
            ]);
        }
}
