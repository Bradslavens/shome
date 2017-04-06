@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <h1>
              Property Details
            </h1>

            <table class="table">
              <tr>
                <td>Home Details</td>
                <td><a href="{{$response['links']['homedetails']}}">Details</a></td>
              </tr>
              <tr>
                <td>Graphs Data</td>
                <td><a href="{{$response['links']['graphsanddata']}}">Graphs Data</a></td>
              </tr>
              <tr>
                <td>Map This Home</td>
                <td><a href="{{$response['links']['mapthishome']}}">Map This Home</a></td>
              </tr>
              <tr>
                <td>Street</td>
                <td>{{$response['address']['street']}}</td>
              </tr>
              <tr>
                <td>City, State  Zip</td>
                <td>{{$response['address']['city']}}, {{$response['address']['state']}}  {{$response['address']['zipcode']}}</td>
              </tr>
              <tr>
                <td>Zestimate</td>
                <td>
                  <?php 
                    setlocale(LC_MONETARY,"en_US.utf8");
                  ?>
                  ${{money_format('%!i', $response['zestimate']['amount'])}}</td>
              </tr>
            </table>

        </div>
    </div>
</div>
@endsection
