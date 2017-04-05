<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Zillow\ZillowClient;

class HomesController extends Controller
{
    // show the homes page
    public function index()
    {
        return view('homes');
    }

    public function show(Request $request)
    {
        $client = new ZillowClient(env('ZPID'));

        $response = $client->GetSearchResults(
            ['address' => $request->input('streetAddress'), 'citystatezip' => $request->input('CityStateZip')]);

        $details = $response['results']['result'];
        
        return view('searchDetails', ['response'=>$details]);
    }
}
