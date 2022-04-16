<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
        $udata = User::where('id','=', session('LoggedUser'))->first();
        if(!$udata){
            redirect('homepage');
        }
        if($udata->position != 'manager'){
            return back()->with('fail','Only manager is allowed to access the dashboard.');
        }
        $departmentsArray = DB::table('users')->select('department')->distinct()->get()->toArray();
        $departments = array();
        foreach ($departmentsArray as $key => $value) {
            $departments[$key] = array("id"=>intval($key)+1,"name"=>$value->department);
        }
        
        $contribution_of_title = Idea::get()->count();

        $titles = array(array("id"=>1,"name"=>'Title 1'),array("id"=>2,"name"=>'Title 2'),array("id"=>3,"name"=>'Title 3'),array("id"=>4,"name"=>'Title 4'),array("id"=>5,"name"=>'Title 5'));

        $anonymousIdea = Idea::where('anonymous',1)->paginate(5,['*'], 'anonymous_idea');
        $anonymousComment = Comment::where('anonymity',1)->paginate(5, ['*'], 'anonymous_comment');

        $chart1Data = DB::table('idea')
        ->leftJoin('users', 'users.id', '=', 'idea.user_id')
        ->select(DB::raw('department,count(idea.id) as number_of_idea'))
        ->groupBy('users.department')
        ->get()
        ->toArray();
        $chart1XValues = array_column($chart1Data,'department');
        $chart1yValues = array_column($chart1Data,'number_of_idea');
        $chart1Colors = array("red", "green","blue","orange","brown","purple","yellow","black","pink");

        $chart3Data = DB::table('idea')
        ->rightJoin('users', 'users.id', '=', 'idea.user_id')
        ->select(DB::raw('count(distinct(idea.user_id)) as number_of_user, users.department'))
        ->groupBy('users.department')
        ->get()
        ->toArray();
        $chart3XValues = array_column($chart3Data,'department');
        $chart3YValues = array_column($chart3Data,'number_of_user');

        $chart2xTitle = array("Title 1", "Title 2", "Title 3", "Title 4", "Title 5","Title 6","Title 7");
        $chart2yTitle = array(65, 58, 80, 83, 55,53,40);
        $chart2barColors = array("red", "green","blue","orange","brown","purple","yellow","black","pink");
        
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];

        $ideasWithoutComment = DB::table('idea')->select('idea.*')->whereNotIn('id', DB::table('comments')->select('comments.idea_id'))->paginate(5, ['*'], 'ideas_without_comment');
        return view('dashboard', compact('titles','departments','chart1XValues','chart1yValues','chart1Colors','chart2xTitle','chart2yTitle','chart2barColors','anonymousIdea','anonymousComment','contribution_of_title','chart3XValues','chart3YValues','ideasWithoutComment'),  $data);
    }


}
