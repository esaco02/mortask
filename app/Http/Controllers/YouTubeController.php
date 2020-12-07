<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YouTubeController extends Controller
{
    public function search(Request $request)
    {

        $text = urlencode($request->text);
        $DEVELOPER_KEY = env("YOUTUBE_API_KEY") ;
        $YOUTUBE_API_URL = env("YOUTUBE_API_URL") ;
        $maxResults = "20";
        $api_url = $YOUTUBE_API_URL . "search?part=snippet&maxResults=".$maxResults."&q=".$text ."&key=".$DEVELOPER_KEY;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        $results = json_decode($response)->items;
        $view = view("results", ["results" => $results])->render();

        return response()->json(['html' => $view]);
    }

}
