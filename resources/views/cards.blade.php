@extends('layouts.main')
@section('content')

<br/><br/><br/>
<h1>Shuffled cards</h1>
<h3>
    @foreach ($shuffled_deck as $card)
        {{ $card->getRank() }}{{ $card->getHTMLSuit() }} 
    @endforeach
</h3>
<br/><br/>
<h1>Sorted cards</h1>
<h3>
    @foreach ($sorted_deck as $card)
        {{ $card->getRank() }}{{ $card->getHTMLSuit() }} 
    @endforeach
</h3>
<br/><br/><br/>
<h1>Refresh to shuffle!</h1>
        
@endsection
