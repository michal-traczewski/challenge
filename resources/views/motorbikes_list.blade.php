@extends('layouts.main')
@section('content')
<div class="container">
    <br/><br/><br/>

    @include('partials.motorbikes.add_motorbike')
    @include('partials.motorbikes.add_owner')

    <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#motorbikes">Motorbikes</a></li>
        <li><a data-toggle="pill" href="#owners">Owners</a></li>
    </ul>
  
  <div class="tab-content">
    <div id="motorbikes" class="tab-pane fade in active"><br/>
        <table class="table table-striped">
            <tr>
                <th>Id </th>
                <th>Brand</th>
                <th>Colour</th>
                <th>Year</th>
            </tr>
            @foreach($bikes as $bike)
                <tr>
                    <td>{{ $bike->Id }}</td>
                    <td>{{ $bike->Brand }}</td>
                    <td>{{ $bike->Colour }}</td>
                    <td>{{ $bike->ModelYear }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div id="owners" class="tab-pane fade"><br/>
        <table class="table table-striped">
            <tr>
                <th>Id </th>
                <th>Name</th>
                <th>Motorbike ID</th>
                <th>Location</th>
                <th>Distance from default location [miles]</th>
            </tr>
            @foreach($owners as $owner)
                <tr>
                    <td>{{ $owner->Id }}</td>
                    <td>{{ $owner->Name }}</td>
                    <td>{{ $owner->MotorbikeId }}</td>
                    <td>{{ $owner->Location }}</td>
                    <td>
                        @if ($owner->Id == $closest)
                            <font color="red">
                        @endif
                        {{ $distances[$owner->Id] }}
                        @if ($owner->Id == $closest)
                            </font>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
        
@endsection