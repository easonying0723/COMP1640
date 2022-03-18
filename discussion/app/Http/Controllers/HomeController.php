<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Idea;

class HomeController extends Controller
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
        $ideas = Idea::paginate(5);
        return view('homepage',compact('ideas'));
    }
    
    public function store_idea(Request $request){
        $image = '';
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $image = date('YmdHis') . '.' . $file[0]->getClientOriginalExtension();
            $file[0]->move('images/idea', $image);
        }

        $files_name = array();
        if ($request->hasFile('file')) {
            $files = $request->file('file');
            foreach ($files as $key => $file) {
                $file_name =$file->getClientOriginalName();
                $file->move('file/idea', $file_name);
                $files_name[] = $file_name ;
            }
        }
        $files_name = implode(",",$files_name);
        Idea::create([
            'name' =>  $request->name,
            'subject' =>  $request->subject,
            'photo' => strval($image),
            'file' => strval($files_name),
            'idea' => $request->idea,
            'anonymous' => $request->anonymous ? 1 : 0
        ]);
        return redirect()->route('home');

    }
}
