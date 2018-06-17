<?php

namespace Challenge\Http\Controllers;

use Challenge\Services\MotorbikesService;
use Illuminate\Http\Request;

class MotorbikesController extends Controller
{    
    private $service, $viewData;
    
    public function __construct()
    {
        $this->service = new MotorbikesService;
        $this->viewData = ['nav_selection' => 'motorbikes'];
    }
    
    private function readData()
    {
        $bikes = $this->service->getAllBikes();
        $owners = $this->service->getAllOwners();
        $distances = $this->service->setDistancesFromDefault($owners);
        $closest = $this->service->getClosest($distances);
        
        $this->viewData['bikes'] = $bikes;
        $this->viewData['owners'] = $owners;
        $this->viewData['distances'] = $distances;
        $this->viewData['closest'] = $closest;
    }
    
    public function index()
    {   
        $this->readData();

        return view('motorbikes_list', $this->viewData);
    }
    
    public function addBike(Request $request)
    {
        $request->validate([
            'Brand' => 'required',
            'Colour' => 'required',
            'ModelYear' => 'required|numeric',
        ]);
                
        $this->service->insertMotorbike($request);
        $this->readData();
        
        return view('motorbikes_list', $this->viewData);
    }
    
    public function addOwner(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Location' => 'required'
        ]);

        $this->service->insertOwner($request);
        $this->readData();
        
        return view('motorbikes_list', $this->viewData);
    }
}
