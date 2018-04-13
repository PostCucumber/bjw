<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use KeriganSolutions\FacebookFeed\FacebookFeed;

class TheWalkController extends Controller
{
    public function index() {
        define('FACEBOOK_PAGE_ID','195964274191011');
        define('FACEBOOK_ACCESS_TOKEN','EAAKZC4DkquMMBAJGqrh3Nz3KXI9Y0HZCItfwFh0aoZBKUrWXIwJddwcyACkJ0Y31oWtYnTpGWOCZC0nwd1gktezZA6hn6HRWMZCCYrWNT1I8EhnmcEZAZCaDoWFms4K8mudbyt6b9sCLllwUELqO8rKtDYjnBR8kLI5yOvQGSzY3IwZDZD');
        
        $facebook = new FaceBookFeed();
        $posts = $facebook->fetch(5);
        
        return view('pages/the-walk',compact('posts'));
    }
}
