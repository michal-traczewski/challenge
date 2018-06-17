<?php

namespace Challenge\Http\Controllers;

use Challenge\Services\BookstoreService;
use Illuminate\Http\Request;

class BookstoreController extends Controller
{    
    private $service, $magazines, $viewData;
    
    public function __construct()
    {
        $this->service = new BookstoreService;
        $this->viewData = ['nav_selection' => 'bookstore'];
    }
    
    private function readData()
    {
        $this->magazines = $this->service->getAllMagazines();
    }
    
    public function index()
    {   
        $this->readData();
        $this->viewData['magazines'] = $this->magazines;

        return view('magazines', $this->viewData);
    }
    
    public function addMagazine(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Price' => 'required|numeric',
            'Cover' => 'required',
            'Colour' => 'required',
            'Size' => 'required|numeric',
            'Theme' => 'required'
        ]);
                
        $this->service->insertMagazine($request);
        $this->readData();
        $this->viewData['magazines'] = $this->magazines;

        return view('magazines', $this->viewData);
    }
    
    public function removeMagazine(Request $request, $id)
    {           
        $this->service->deleteMagazineById($id);
        $this->readData();
        $this->viewData['magazines'] = $this->magazines;

        return view('magazines', $this->viewData);
    }
    
}
