<?php

namespace Challenge\Http\Controllers;

use Challenge\PlayingCards\DeckOfCards;

class CardsController extends Controller
{    
    private $deck;
    
    public function __construct()
    {
        $this->deck = new DeckOfCards();
    }
    
    public function index()
    {   
        $shuffled_deck = clone $this->deck;
        $sorted_deck = clone $this->deck;

        $shuffled_deck->shuffle();
        $sorted_deck->sort();
        
        return view('cards', [
            'nav_selection' => 'cards',
            'shuffled_deck' => $shuffled_deck->getAll(),
            'sorted_deck' => $sorted_deck->getAll()                
                ]);
    }
}
