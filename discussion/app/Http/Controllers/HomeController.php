<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Idea;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Contracts\View\View;
use App\Models\Cactegory;
use DB;

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
        $comments = Comment::paginate(10);
        $data = Cactegory::all();
        
        return view('homepage',compact('ideas','comments','data'));

    }

    public function idea_details($id){
        return Idea::where('id','=', $id)->get();
    }

    public function comment_details($id){
        return Comment::join('idea', 'idea.id','=','comments.idea_id')
        ->join('users', 'users.id','=','comments.user_id')
        ->where('comments.idea_id','=', $id)
        ->get();
       
    }

    public function liked(Request $request, $id){
        $user_id = (int)$request->session()->get('LoggedUser');
        $like = Like::where('user_id', '=' , $user_id) ->where('idea_id','=', $id);

        if($like->exists()) //check if user and post id matches in record ( check if user liked the post before)
        {
            $save = Like::where('user_id',$user_id) ->where('idea_id',$id) ->update(['like' => 1]);
        }

        else{
            $like = new like();
            $like->idea_id = $id;
            $like->user_id = $user_id;
            $like->like = 1;
            $save = $like->save();
        }

        if($save){
            return back()->with('success','Thank you for your reaction');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
        
    }

    
    public function disliked(Request $request, $id){
        $user_id = (int)$request->session()->get('LoggedUser');

        $like = Like::where('user_id', '=' , $user_id) ->where('idea_id','=', $id);
        if($like->exists()) //check if user and post id matches in record ( check if user liked the post before)
        {
            $save = Like::where('user_id',$user_id) ->where('idea_id', $id) ->update(['like' => 0]);
        }
        else{
            $like = new like();
            $like->idea_id = $id;
            $like->user_id = $user_id;
            $like->like = 0;
            $save= $like->save();

        }
        if($save){
            return back()->with('success','Thank you for your reaction');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
        
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
        //echo session('LoggedUser');

        $files_name = implode(",",$files_name);
        Idea::create([
            'user_id' => (int)$request->session()->get('LoggedUser'),
            'name' =>  $request->name,
            'subject' =>  $request->subject,
            'photo' => strval($image),
            'file' => strval($files_name),
            'idea' => $request->idea,
            'anonymous' => $request->anonymous ? 1 : 0
        ]);
        return redirect()->route('home');

    }
    public function store_comment(Request $request,$idea_id)
    {
        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->anonymity = $request->anonymity? 1 : 0;
        $comment->idea_id = $idea_id;
        $comment->user_id = (int)$request->session()->get('LoggedUser');
        $save = $comment->save();
        if($save){
            return back()->with('success','New user has been successfuly added to database');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
    }

    public function category_store(Request $request)
    {
        $data = new Cactegory;
        $data->cate_name = $request->input('cate_name');
        $data->cate_option = $request->input('cate_option');

        $data->save();
        return redirect('/homepage')->with('success','Category added successfully');
    }
    public function category_delete($id)
    {
            DB::delete('delete from category_details where id = ? ', [$id]);
            return redirect('/homepage')->with('success','Category deleted successfully');
    }
}
