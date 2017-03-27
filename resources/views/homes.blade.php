@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            

            <form method="POST" action="homes">

                {{ csrf_field() }}

              <div class="form-group">
                <label for="Address1">Address1</label>
                <input type="text" class="form-control" id="Address1" placeholder="Address1">
              </div>

              <div class="form-group">
                <label for="Address2">Address2</label>
                <input type="text" class="form-control" id="Address2" placeholder="Address2">
              </div>

              <div class="form-group">
                <label for="CityStateZip">City, State  Zip</label>
                <input type="text" class="form-control" id="CityStateZip" placeholder="City, State Zip">
              </div>

              <button type="submit" class="btn btn-default">Search</button>
            </form>


        </div>
    </div>
</div>
@endsection
