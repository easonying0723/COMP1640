<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
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
    public function index()
    {
        $departments = array(array("id"=>1,"name"=>'Department 1'),array("id"=>2,"name"=>'Department 2'));
        $titles = array(array("id"=>1,"name"=>'Title 1'),array("id"=>2,"name"=>'Title 2'),array("id"=>3,"name"=>'Title 3'),array("id"=>4,"name"=>'Title 4'),array("id"=>5,"name"=>'Title 5'));
        $ideasWithoutComment = array(array("ID"=>1,"idea"=>'Idea Post'),array("ID"=>2,"idea"=>'Test'));
        $anonymous = array(array("id"=>1,"idea"=>'Idea Post 1',"comment"=>'Comment 1',"thumbsup"=>'1',"thumbsdown"=>'1'),array("id"=>1,"idea"=>'Idea Post 2',"comment"=>'Comment 2',"thumbsup"=>'2',"thumbsdown"=>'2'));

        $chart1XValues = array("January", "February", "March", "April", "May","June","July");
        $chart1yValues = array(65, 58, 80, 83, 55,53,40);
        $chart1Colors = array("red", "green","blue","orange","brown","purple","yellow");

        $chart2xTitle = array("Title 1", "Title 2", "Title 3", "Title 4", "Title 5","Title 6","Title 7");
        $chart2yTitle = array(65, 58, 80, 83, 55,53,40);
        $chart2barColors = array("red", "green","blue","orange","brown","purple","yellow");

        return view('dashboard', compact('titles','departments','ideasWithoutComment','chart1XValues','chart1yValues','chart1Colors','chart2xTitle','chart2yTitle','chart2barColors','anonymous'));
    }
}
