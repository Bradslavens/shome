@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            

            <form method="POST" action="/careers">

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

              <input type="text" name="middle" value="" style="display:none;">

              <input type="hidden" name="source" value="{{$source}}">

                {{-- errors --}}
              @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif

              <button type="submit" class="btn btn-default">Apply</button>
            </form>


        </div>
    </div>
</div>
@endsection
