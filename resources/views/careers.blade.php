@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            

            <form method="POST" action="apply">

                {{ csrf_field() }}

              <div class="form-group">
                <label for="name">Name- required</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Name (first last)" required>
              </div>

              <div class="form-group">
                <label for="email">Email- required</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
              </div>

              <div class="form-group">
                <label for="bre">CA BRE License Number</label>
                <input name="bre" type="number" class="form-control" id="bre" placeholder="CA BRE License Number" >
              </div>

              <hidden name="source" value="{{$source}}">

              <button type="submit" class="btn btn-default">Apply</button>
            </form>


        </div>
    </div>
</div>
@endsection
