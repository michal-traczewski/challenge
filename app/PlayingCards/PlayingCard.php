<?php

namespace Challenge\PlayingCards;

class PlayingCard
{
    const ranks = ['2','3','4','5','6','7','8','9','10','J','D','K','A'];
    const suits = ['H','D','C','S'];
    const html_suits = [
            '&hearts;',
            '&diams;',
            '&clubs;',
            '&spades;'
            ];

    private $cardId;
    
    public function __construct($cardId = 0)
    {        
        $this->cardId = $cardId;
    }

    public function getSuit()
    {
        $cardId = $this->cardId;

        $suitId = floor($cardId / 13);
        return self::suits[$suitId];
    }
    
    public function getHTMLSuit()
    {
        $cardId = $this->cardId;

        $suitId = floor($cardId / 13);
        return self::html_suits[$suitId];
    }

    public function getRank()
    {
        $cardId = $this->cardId;

        $rankId = $cardId % 13;
        return self::ranks[$rankId];
    }   
}
