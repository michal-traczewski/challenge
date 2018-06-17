<div class="jumbotron form-box">
    <div class="container">
        <form name="add-motorbike" action="{{ route('add-motorbike') }}" method="GET">
            {{ csrf_field() }}
            <div class="form-group">
                <h3>Add Motorbike</h3>
                <label for="Brand">Brand:</label>
                <input type="text" name="Brand" id="Brand" class="form-control" placeholder="Brand"><br/>
                @if ($errors->first('Brand'))
                    <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        {{ $errors->first('Brand') }}
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
                <label for="ModelYear">Year:</label>
                <input type="text" name="ModelYear" id="ModelYear" class="form-control" placeholder="Year"><br/>
                @if ($errors->first('ModelYear'))
                    <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        {{ $errors->first('ModelYear') }}
                    </div>
                @endif
                <button class="btn btn-primary" tye="submit">
                    <span class="glyphicon glyphicon-ok" ></span>Submit
                </button>
            </form>
        </div>
    </div>
</div>