<div class="jumbotron form-box">
    <div class="container">
        <form name="add-owner" action="{{ route('add-owner') }}" method="GET">
            {{ csrf_field() }}
            <div class="form-group">
                <h3>Add Owner</h3>
                <label for="Name">Name:</label>
                <input type="text" name="Name" id="Name" class="form-control" placeholder="Name"><br/>
                @if ($errors->first('Name'))
                    <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        {{ $errors->first('Name') }}
                    </div>
                @endif
                <label for="Location">Location:</label>
                <input type="text" name="Location" id="Location" class="form-control" placeholder="Location" value="51.5081742,-0.0876602"><br/>
                @if ($errors->first('Location'))
                    <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        {{ $errors->first('Location') }}
                    </div>
                @endif
                <label for="select-motorbike">Select Motorbike:</label>
                    <select class="form-control" id="select-motorbike" name="MotorbikeId">
                        @foreach ($bikes as $bike)
                            <option value="{{ $bike->Id }}">{{ $bike->Id }} {{ $bike->Brand }} {{ $bike->Colour }}</option>
                        @endforeach
                    </select><br/>
                <button class="btn btn-primary" tye="submit">
                    <span class="glyphicon glyphicon-ok" ></span>Submit
                </button>
            </form>
        </div>
    </div>
</div>