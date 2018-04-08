<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use KeriganSolutions\FacebookFeed\FacebookFeed;

class TheWalkController extends Controller
{
    public function index() {
        define('FACEBOOK_PAGE_ID','195964274191011');
        define('FACEBOOK_ACCESS_TOKEN','EAACEdEose0cBANs0qtLsf9IgED7Mg76U8qvrgo3bRjNE9d00CF5kuSqJmiEDKZBq1XVuPHHz1CtQuea3zx3wiE635px2GBc2EfAawEtxoebpMOZBZAo6icWJZABhynYECAxZByQOF3ztQ3HPLbYbxVZBMf3mLtDU2ZAOaYge2aEmnw17Hha2SJXlZCq0oiS8O2oZD');
        
        $facebook = new FaceBookFeed();
        $posts = $facebook->fetch(3);

        return view('the-walk', compact('posts'));
    }
}
