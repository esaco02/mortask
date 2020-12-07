<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;

class YouTubeController extends Controller
{
    public function search(Request $request)
    {

        $text = $request->text;
        $DEVELOPER_KEY = 'AIzaSyAB98PzZIopyuAbdNR2vMEBw5il0SicTUY';
        $client = new \Google_Client();
        $client->setDeveloperKey($DEVELOPER_KEY);
        $youtube = new \Google_Service_YouTube($client);
        $searchResponse = $youtube->search->listSearch('id,snippet', array(
            'q' => $text,
            'maxResults' => "20",
        ));

        $results = $searchResponse->items;

        $view = view("results", ["results" => $results])->render();

        return response()->json(['html' => $view]);
    }
}
