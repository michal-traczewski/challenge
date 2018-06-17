@extends('layouts.main')
@section('content')
<div class="container">
    <br/><br/><br/>
    
    @include('partials.bookstore.add_magazine')
    
    <table class="table table-striped">
        <tr>
            <th>Id </th>
            <th>Name</th>
            <th>Price</th>
            <th>Cover</th>
            <th>Colour</th>
            <th>Size</th>
            <th>Theme</th>
            <th></th>
        </tr>
        @foreach($magazines as $magazine)
            <tr>
                <td>{{ $magazine->Id }}</td>
                <td>{{ $magazine->Name }}</td>
                <td>&#163;{{ $magazine->Price }}</td>
                <td>{{ $magazine->Cover }}</td>
                <td>{{ $magazine->Colour }}</td>
                <td>{{ $magazine->Size }}</td>
                <td>{{ $magazine->Theme }}</td>
                <td><a href="/bookstore/remove/{{ $magazine->Id }}"><button class="btn btn-link">
                            <span class="glyphicon glyphicon-remove rem-button" ></span>
                        </button></a></td>
            </tr>
        @endforeach
    </table>
</div>
        
@endsection