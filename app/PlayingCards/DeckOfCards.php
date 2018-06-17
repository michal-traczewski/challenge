<?php

namespace Challenge\PlayingCards;

class DeckOfCards
{
    private $deck = [];
    
    public function __construct()
    {
        for ($i=0; $i<52; $i++){
            array_push($this->deck, new PlayingCard($i));
        }
    }
    
    public function getCard($position)
    {
        return $this->deck[$position];
    }
    
    public function getAll()
    {
        return $this->deck;
    }
    
    public function shuffle()
    {
        shuffle($this->deck);
    }
    
    public function sort()
    {
        sort($this->deck);
    }  
}
