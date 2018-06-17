<?php

namespace Challenge\Services;

use Illuminate\Support\Facades\DB;

class MotorbikesService
{   
    const defaultLocation = '51.5081742,-0.0876602' ;
    
    public function getAllBikes()
    {
        return DB::table('Motorbikes')
                ->select('Motorbikes.Id',
                        'Motorbikes.Brand',
                        'Motorbikes.Colour',
                        'Motorbikes.ModelYear'
                        )->get();
    }
    
    public function getAllOwners()
    {
        return DB::table('Owners')
                ->select('Owners.Id',
                        'Owners.Name',
                        'Owners.MotorbikeId',
                        'Owners.Location'
                        )->get();
    }
    
    public function insertMotorbike($params)
    {
        DB::table('Motorbikes')
                ->insert([
                    'Brand' => $params['Brand'],
                    'Colour' => $params['Colour'],
                    'ModelYear' =>$params['ModelYear']
                    ]);
    }
    
    public function insertOwner($params)
    {
        DB::table('Owners')
                ->insert([
                    'Name' => $params['Name'],
                    'MotorbikeId' => $params['MotorbikeId'],
                    'Location' =>$params['Location']
                    ]);
    }
    
    public function getDistance($from, $to)
    {
        $earthRadius = 6371000;
        
        // get coordinates of first location
        $from = str_replace(' ', '', $from);
        $separatorFromPos = strpos($from, ',');
        $latitudeFrom = (float) substr($from, 0, $separatorFromPos+1);
        $longitudeFrom = (float) substr($from, $separatorFromPos+1);
        
        // get coordinates of second location
        $to = str_replace(' ', '', $to);
        $separatorToPos = strpos($to, ',');
        $latitudeTo = (float) substr($to, 0, $separatorToPos+1);
        $longitudeTo = (float) substr($to, $separatorToPos+1);
        
        // convert from degrees to radians
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
          cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        
        return $angle * $earthRadius / 1609;
    }
    
    public function getDistanceFromDefault($location)
    {
        $default = self::defaultLocation;
        
        return $this->getDistance($location, $default);
    }
    
    public function setDistancesFromDefault($owners)
    {
        $distances = array();
        
        foreach ($owners as $owner){
            $distance = $this->getDistanceFromDefault($owner->Location);
            $distances[$owner->Id]=$distance;
        }
        
        return $distances;
    }
    
    public function getClosest($distances)
    {
        $dist = min($distances);
        return array_search($dist, $distances);
    }
}

