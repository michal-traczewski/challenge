<?php

namespace Challenge\Services;

use Illuminate\Support\Facades\DB;

class BookstoreService
{   
    public function getAllMagazines()
    {
        return DB::table('Magazines')
                ->select('Magazines.Id',
                        'Magazines.Name',
                        'Magazines.Price',
                        'Magazines.Cover',
                        'Magazines.Colour',
                        'Magazines.Size',
                        'Magazines.Theme'
                        )->get();
    }
    
    public function insertMagazine($params)
    {
        DB::table('Magazines')
                ->insert([
                    'Name' => $params['Name'],
                    'Price' => $params['Price'],
                    'Cover' => $params['Cover'],
                    'Colour' => $params['Colour'],
                    'Size' => $params['Size'],
                    'Theme' => $params['Theme']
                    ]);
    }
    
    public function deleteMagazineById($id)
    {
        DB::table('Magazines')->where('Id', '=', $id)->delete();
    }
}

