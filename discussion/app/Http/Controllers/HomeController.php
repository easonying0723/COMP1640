<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Idea;
use App\Models\Comment;
use App\Models\Like;
use App\Models\User;

use App\Mail\EmailIdea;
use App\Mail\CommentIdea;

use Illuminate\Support\Facades\Mail;

use App\Models\Cactegory;
use App\Models\Title;
use App\Models\IdeaView;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use PDO;
use stdClass;
use Symfony\Component\Console\Input\Input;

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
    public function index(Request $request)
    {
       
        $idea_closure_date = Setting::firstOrCreate([
            'setting' => 'idea_closure_date',
            'extra' => date('Y')
        ]);
        $comment_closure_date = Setting::firstOrCreate([
            'setting' => 'comment_closure_date',
            'extra' => date('Y')
        ]);

        $udata = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        $user_id = (int)$udata['LoggedUserInfo']->id;

        

        //$titlefilter_id =$request->get('tfilter'); 
        //dd($titlefilter_id);
        
        $data = Cactegory::all();

        $titleC = Title::all();

        if($request->get('tfilter')){
            $ideas = DB::table('idea')
            ->join('title_details','title_details.title_id','=','idea.title_id')
            ->Join('users', 'users.id', '=', 'idea.user_id')
            ->join('category_details','category_details.id','=','idea.cat_id')
            ->select(DB::raw('idea.*,users.name as user_name,users.profilepic,users.department, category_details.cate_name,title_details.title_id,title_details.title_name'))
            ->where('idea.title_id', $request->get('tfilter'))
            ->paginate(5)->appends(request()->query());
        }
        
        else if($request->get('filter') == 'recent-view'){
            $ideas = DB::table('idea_view')
            ->join('idea', 'idea.id', '=', 'idea_view.idea_id')
            ->leftJoin('users', 'users.id', '=', 'idea.user_id')
            ->leftJoin('category_details','category_details.id','=','idea.cat_id')
            ->select(DB::raw('idea.*,users.name as user_name,users.profilepic,  max(idea_view.created_at) as latest,users.department, category_details.cate_name'))
            ->where('idea_view.user_id',$user_id)
            ->groupBy('idea_view.idea_id')
            ->orderBy('latest','desc')
            ->paginate(5)->appends(request()->query());;
            
        }else if($request->get('filter') == 'most-viewed'){
            $ideas = DB::table('idea_view')
            ->join('idea', 'idea.id', '=', 'idea_view.idea_id')
            ->leftJoin('users', 'users.id', '=', 'idea.user_id')
            ->leftJoin('category_details','category_details.id','=','idea.cat_id')
            ->select(DB::raw('idea.*,users.name as user_name, users.profilepic, count(idea_view.id) as number_of_view,users.department,category_details.cate_name'))
            ->groupBy('idea.id')
            ->orderBy('number_of_view','desc')            
            ->paginate(5)->appends(request()->query());
        }else if($request->get('filter') == 'most-liked'){
            $ideas = DB::table('idea')
            ->leftJoin('likes', 'idea.id', '=', 'likes.idea_id')
            ->leftJoin('users', 'users.id', '=', 'idea.user_id')
            ->leftJoin('category_details','category_details.id','=','idea.cat_id')
            ->select(DB::raw('idea.*,users.name as user_name,users.profilepic, count(likes.id) as number_of_like,users.department, category_details.cate_name'))
            ->groupBy('idea.id')
            ->orderBy('number_of_like','desc')->paginate(5)->appends(request()->query());
        }else if($request->get('filter') == 'hottest-topic'){
            $ideas = Idea::leftJoin('users', 'users.id', '=', 'idea.user_id')
            ->leftJoin('category_details','category_details.id','=','idea.cat_id')
            ->leftJoin('likes','likes.idea_id','=','idea.id')
            ->select(DB::raw('*,idea.created_at as created_at,users.profilepic, idea.id as id, category_details.cate_name,((select count(id) from likes where idea_id = idea.id and `like` = 1) - (select count(id) from likes where idea_id = idea.id and `like` = 0)) as point'))
            ->orderBy('point','desc')
            ->paginate(5)->appends(request()->query());

        }else{
            $ideas = Idea::leftJoin('users', 'users.id', '=', 'idea.user_id')
            ->leftJoin('category_details','category_details.id','=','idea.cat_id')
            ->select(DB::raw('*,idea.created_at as created_at,users.profilepic, idea.id as id, category_details.cate_name'))
            ->orderBy('idea.created_at','desc')
            ->paginate(5)->appends(request()->query());
        }
        
        //dd($ideas);

        $comments = Comment::paginate(7);
        $data = Cactegory::all();
        foreach ($ideas as $key => $idea) {

            $number_of_comment = Comment::where('idea_id',$idea->id)->get()->count();
            $ideas[$key]->number_of_comment = $number_of_comment;
          
            $number_of_like = Like::where('idea_id',$idea->id)->where('like',1)->get()->count();
            $ideas[$key]->number_of_like = $number_of_like;

            $number_of_dislike = Like::where('idea_id',$idea->id)->where('like',0)->get()->count();
            $ideas[$key]->number_of_dislike = $number_of_dislike;

            $number_of_view = IdeaView::where('idea_id',$idea->id)->get()->count();
            $ideas[$key]->number_of_view = $number_of_view;

            $user_like = Like::where('idea_id',$idea->id)->where('user_id',$user_id)->first();
            if($user_like){
                $ideas[$key]->user_like = $user_like->like;
            }
            else
            {
                $ideas[$key]->user_like = 'null';
            }
        }

        return view('homepage',compact('ideas','comments','data','idea_closure_date','comment_closure_date','titleC'), $udata,);

    
    }

    public function idea_details($id){
        return Idea::where('id','=', $id)->get();
    }

    public function comment_details(Request $request,$id){
        $user_id = (int)$request->session()->get('LoggedUser');
        $view = new IdeaView();
        $view->idea_id = $id;
        $view->user_id = $user_id;
        $view->save();

        return Comment::join('idea', 'idea.id','=','comments.idea_id')
        ->join('users', 'users.id','=','comments.user_id')
        ->where('comments.idea_id','=', $id)
        ->get();
       
    }

    public function liked(Request $request, $id){
        $user_id = (int)$request->session()->get('LoggedUser');
        $like = Like::where('user_id', '=' , $user_id) ->where('idea_id','=', $id)->first();
        
        if($like) //check if user and post id matches in record ( check if user liked the post before)
        {
            return 'You can only react to idea once.';
            // if($like->like == 1){
            //     $save = $like->delete();                
            // }else if($like->like == 0){
            //     $like->like = 1;
            //     $save = $like->save();
            // }
        }
        else{
            $like = new like();
            $like->idea_id = $id;
            $like->user_id = $user_id;
            $like->like = 1;
            $save = $like->save();
        }

        if($save){
            return 'success';
        }else{
            return 'fail';
        }
        
    }

    public function disliked(Request $request, $id){
        $user_id = (int)$request->session()->get('LoggedUser');
        $like = Like::where('user_id', '=' , $user_id) ->where('idea_id','=', $id)->first();

        if($like) //check if user and post id matches in record ( check if user liked the post before)
        {
            return 'You can only react to idea once.';
            // if($like->like == 0){
            //     $save = $like->delete();                
            // }else if($like->like == 1){
            //     $like->like = 0;
            //     $save = $like->save();
            // }
        }
        else{
            $like = new like();
            $like->idea_id = $id;
            $like->user_id = $user_id;
            $like->like = 0;
            $save= $like->save();

        }
        if($save){
            return 'success';
        }else{
            return 'fail';
        }
        
    }


    public function store_idea(Request $request){

        $userid = (int)$request->session()->get('LoggedUser');

        $userdepartment = User::select('department')->where('id','=', $userid)->get();//get user's department

        $coordinatoremail = User::select('email')->where('position','=','Coordinator')->where('department','=',$userdepartment[0]->department)->first(); //get user's coordinator email
        $data=array("name"=>User::find($userid)->name,"title"=>Title::find($request->title)->title_name,"category"=>Cactegory::find($request->category)->cate_name);
        Mail::to($coordinatoremail->email)->send(new EmailIdea($data));

        $setting = Setting::firstOrCreate([
            'setting' => 'idea_closure_date',
            'extra' => date('Y')
        ]);
        if(date('Y-m-d',strtotime($setting->detail)) < date('Y-m-d')){
            return back()->with('fail','Adding idea is no longer allowed after closure date.');
        }

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
            'cat_id' => (int)$request->category, 
            'title_id' => (int)$request->title, 
            'subject' => $request->subject,
            'photo' => strval($image),
            'file' => strval($files_name),
            'idea' => $request->idea,
            'anonymous' => $request->anonymous ? 1 : 0
        ]);

        return redirect()->route('home')-> with('success', 'Thank you for contributing your idea.');

    }

    public function store_comment(Request $request,$idea_id)
    {

        $userid = Idea::select('user_id')->where('id','=', $idea_id)->get(); //get idea id

        $commentidea = User::select('email')->where('id','=',$userid[0]->user_id)->first(); //get user's coordinator email

        Mail::to($commentidea->email)->send(new CommentIdea());

        $setting = Setting::firstOrCreate([
            'setting' => 'comment_closure_date'
        ]);
        if(date('Y-m-d',strtotime($setting->detail)) < date('Y-m-d')){
            return back()->with('fail','Comment is no longer allowed after closure date.');
        }

        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->anonymity = $request->anonymity? 1 : 0;
        $comment->idea_id = $idea_id;
        $comment->user_id = (int)$request->session()->get('LoggedUser');
        $save = $comment->save();
        if($save){
            return back()->with('success','Your comment has been posted successfully.');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
    }

    public function store_closure_date(Request $request)
    {
        $udata = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        if($udata['LoggedUserInfo']->position != 'Manager'){
            return redirect('/homepage')->with('fail','Only Manager is allowed to set closure date.');
        }
        $setting = Setting::firstOrCreate([
            'setting' => 'idea_closure_date',
            'extra' => date('Y')
        ]);
        $setting->detail = $request->idea_closure_date;
        $save = $setting->save();

        $setting1 = Setting::firstOrCreate([
            'setting' => 'comment_closure_date'
        ]);
        $setting1->detail = $request->comment_closure_date;
        $save = $setting1->save();

        if($save){
            return back()->with('success','Closure date has been set');
         }else{
            return back()->with('fail','Something went wrong, try again later');
         }
    }



    /////////////////////CATEGORY//////////////////////
  
    public function category_store(Request $request)
    {
        $data = new Cactegory;
        $data->cate_name = $request->input('cate_name');
        $data->save();
        return redirect('/homepage')->with('success','Category added successfully');
    }

    public function category_delete($id)
    {
       // DB::delete('delete category_details , title_details from category_details INNERJOIN title_details
       // WHERE category_details.id = title_details.id and category_details.id = ?' ,[$id]);
        
       $data = DB::table('category_details')
       ->leftJoin('title_details','category_details.id','=','title_details.id')
       ->leftJoin('idea','category_details.id','=','idea.cat_id')
       ->leftJoin('likes','idea.id','=','likes.idea_id' )
       ->leftJoin('comments','idea.id','=','comments.idea_id')
       ->where('category_details.id',$id);
       

     
        DB::table('title_details')->where('id', $id)->delete();                           
        $data->delete();
        
       // DB::delete('delete from category_details where id = ? '),
       // delete from title_details where id = ?,
        //delete from idea where cat_id = ?', [$id]);
        return back()->with('success','Category deleted successfully');

    }

    /////////////////////TITLE//////////////////////

    public function title_store(Request $request)
    {
        $titleC = new Title;
        $titleC->title_name = $request->input('title_name');
        $titleC->id = $request->input('cat_id');

        $titleC->save();
        return back()->with('success','Title added successfully');
    }
    public function title_delete($title_id)
    {
        DB::delete('delete from title_details where title_id = ?', [$title_id]);
        return back()->with('success','Title deleted successfully');
    }


    public function export_data(){
        $udata = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];
        if(!$udata['LoggedUserInfo']){
            return redirect('/homepage');
        }
        if($udata['LoggedUserInfo']->position != 'Manager'){
            return redirect('/homepage')->with('fail','Only Manager is allowed to export data.');
        }
      
        $ideas = Idea::get();
        $filename = 'idea.csv';
        $title = array('All Ideas');

        $callback = function () use ($title,$ideas) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $title);
            foreach ($ideas as $idea) {
                $columnIdea = array('ID','Subject','Idea','Anonymous','Created At','File','User ID','User Name','User Email','Department');
                $row['ID']  = $idea->id;
                $row['Subject']    = $idea->subject;
                $row['Idea']    = $idea->idea;
                $row['Anonymous']  = $idea->anonymous == 0 ? 'No' : 'Yes';
                $row['File']  = $idea->file;
                $row['Created At']  = $idea->created_at;
                $row['User ID']  = $idea->user->id;
                $row['User Name']  = $idea->user->name;
                $row['User Email']  = $idea->user->email;
                $row['Department']  = $idea->user->department;
                fputcsv($file, array(' '));
                fputcsv($file, $columnIdea);
                fputcsv($file, array($row['ID'], $row['Subject'], $row['Idea'], $row['Anonymous'], $row['Created At'], $row['File'],$row['User ID'], $row['User Name'],$row['User Email'], $row['Department']));

                $comments = $idea->comments;
                if(count($comments) != 0){
                    fputcsv($file, array('Comments'));
                    $column = array('Comment', 'Anonymous','Created At','User ID','User Name','User Email','Department');
                    fputcsv($file, $column);

                    foreach ($comments as $comment ) {
                        $row['Comment']  = $comment->comment;
                        $row['Anonymous']  = $comment->anonymity == 1 ? 'Yes' : 'No';
                        $row['Created At']  = $comment->created_at;
                        $row['User ID']  = $comment->user->id;
                        $row['User Name']  = $comment->user->name;
                        $row['User Email']  = $comment->user->email;
                        $row['Department']  = $comment->user->department;    
    
                        fputcsv($file, array($row['Comment'] , $row['Anonymous'], $row['Created At'], $row['User ID'],$row['User Name'],$row['User Email'], $row['Department']));
                    }
                }
            }
            fclose($file);
        };

        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );
        return Response::stream($callback, 200, $headers);
    }

    public function export_file(){
        $zip_file = 'uploaded_documents.zip';
        $zip = new \ZipArchive();
        $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

        $path = public_path('file/idea');
        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
        foreach ($files as $name => $file)
        {
            // We're skipping all subfolders
            if (!$file->isDir()) {
                $filePath     = $file->getRealPath();

                // extracting filename with substr/strlen
                $relativePath = substr($filePath, strlen($path) + 1);

                $zip->addFile($filePath, $relativePath);
            }
        }
        $zip->close();
        return response()->download($zip_file);
    }
   
}