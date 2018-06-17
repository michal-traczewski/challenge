<div class="jumbotron form-box__fullwidth">
    <div class="container">
        <form name="add-magazine" action="{{ route('add-magazine') }}" method="GET">
            {{ csrf_field() }}
            <div class="form-group">
                <h3>Add Magazine</h3>
                <label for="Name">Name:</label>
                <input type="text" name="Name" id="Name" class="form-control" placeholder="Name"><br/>
                @if ($errors->first('Name'))
                    <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        {{ $errors->first('Name') }}
                    </div>
                @endif
                <label for="Price">Price:</label>
                <input type="text" name="Price" id="Price" class="form-control" placeholder="Price"><br/>
                @if ($errors->first('Price'))
                    <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        {{ $errors->first('Price') }}
                    </div>
                @endif
                <label for="Cover">Cover:</label>
                <input type="text" name="Cover" id="Cover" class="form-control" placeholder="Cover"><br/>
                @if ($errors->first('Cover'))
                    <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        {{ $errors->first('Cover') }}
                    </div>
                @endif
                <label for="Colour">Colour:</label>
                <input type="text" name="Colour" id="Colour" class="form-control" placeholder="Colour"><br/>
                @if ($errors->first('Colour'))
                    <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        {{ $errors->first('Colour') }}
                    </div>
                @endif
                <label for="Size">Size:</label>
                <input type="text" name="Size" id="Size" class="form-control" placeholder="Size"><br/>
                @if ($errors->first('Size'))
                    <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        {{ $errors->first('Size') }}
                    </div>
                @endif
                <label for="Theme">Theme:</label>
                <input type="text" name="Theme" id="Theme" class="form-control" placeholder="Theme"><br/>
                @if ($errors->first('Theme'))
                    <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        {{ $errors->first('Theme') }}
                    </div>
                @endif
                <button class="btn btn-primary" tye="submit">
                    <span class="glyphicon glyphicon-ok" ></span>Submit
                </button>
            </form>
        </div>
    </div>
</div>