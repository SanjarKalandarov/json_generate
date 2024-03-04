<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImportController extends Controller
{
    public function store(Request $request){

        $jsonData = file_get_contents($request->file('geo_data')->path());
        $data = json_decode($jsonData,true);
//        dd($data);

        foreach ($data as $item) {
            DB::table('mahalla')->insert([
                'Viloyat' => $item['properties']['Viloyat'],
                'Tuman' => $item['properties']['Tuman'],
                'MFY_nomi' => $item['properties']['MFY_nomi'],
                'Qaror_bilan_tasdiqlangan' => $item['properties']['Qaror_bilan_tasdiqlangan'],
                'Shape_Length' => $item['properties']['Shape_Length'],
                'Shape_Area' => $item['properties']['Shape_Area'],
                'Mahalla_ID' => $item['properties']['Mahalla_ID'],
                'geometry' => json_encode($item['geometry'])
            ]);
        }


        return response()->json(['message' => 'Ma\'lumotlar saqlandi'], 200);

    }

}
