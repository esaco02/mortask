<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class YouTubeController extends Controller
{
    public function search(Request $request)
    {
        $text = $request->text;
echo $text;
die();

        //return getProgramsByLang($langId);                    
    }    

}