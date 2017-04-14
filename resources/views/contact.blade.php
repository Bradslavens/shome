@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            

            <form method="POST" action="/contact">

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
                <label for="message">Message</label>
                <textarea name="message" class="form-control" id="message" placeholder="Please add your message" required></textarea>
              </div>

              <input style="display: none;" type="text" name="middle" value="">

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
              

              <button type="submit" class="btn btn-default">Send</button>
            </form>


        </div>
    </div>
</div>
@endsection
