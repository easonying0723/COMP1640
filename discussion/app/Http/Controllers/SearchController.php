<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Idea;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Contracts\View\View;
use App\Models\Search;
use DB;

class SearchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function category_search()
    {

    }
}
