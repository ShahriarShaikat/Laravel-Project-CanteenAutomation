<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\comments;
use App\user_table;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class postController extends Controller
{
    public function show_postpage(Request $request)
    {
        return view('admin.view.addpost.index');
    }

    public function insert_post(Request $request)
    {
        $post = new post();
        $post->title = $request->title;
        $post->content = $request->content;

        if($request->hasfile('image')) 
        {
           $file = $request->file('image');
           $extension =$file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/post',$filename);
           $post->image = $filename;
        }
        //return view('admin.view.addpost.index');
        else
        {
            return $request;
            $post->image = '';
        }

        $post->save();
        $request->session()->flash('message_A','*New post create Successfull!');
        return view('admin.view.index');
    }

    public function view_all_post(Request $request)
    {
        $post = post::all();
        $user = user_table::all();
        return view('admin.view.addpost.postpage',['post'=>$post,'user'=>$user]);//multiple varriable return
    }

    public function delete_the_post(Request $request,$id)
    {
        //echo $id;
        DB::delete('delete from post where id = ?',[$id]);
        DB::delete('delete from comments where post_id = ?',[$id]);
        $request->session()->flash('messagei','*Post has been deleted!');
        return redirect()->route('view.all.post');
    }

    public function view_the_post(Request $request,$id)
    {
        $post = DB::select('select * from post where id = ?',[$id]);
       return view('admin.view.addpost.singlepost',['post'=>$post]);//multiple varriable return
    }

    public function singlepost_update(Request $request,$id)
    {
       $img = $request->image;
       $title = $request->title;
       $content = $request->content;
       $importance = $request->importance;

       if ($importance=="same") 
       {
           DB::update('update post set title = ?,content = ? where id = ?',[$title,$content,$id]);
           $request->session()->flash('messagei','*Update Successfull!');
           return redirect()->route('view.all.post');
       }



       else if ($importance=="Remove")
       {
           $update_img = " ";
           DB::update('update post set title = ?,content = ?,image = ? where id = ?',[$title,$content,$update_img,$id]);
           $request->session()->flash('messagei','*Update Successfull!');
           return redirect()->route('view.all.post');
       }



       else if ($importance=="New") 
       {
        
        
        if(strlen($img)==0)
        {
           $request->session()->flash('messagei','*Update failed! Please select an image first!');
           return redirect()->route('view.all.post');
        }
        else if($request->hasfile('image')) 
        {
           $file = $request->file('image');
           $extension =$file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/post',$filename);
           $image = $filename;
        
           DB::update('update post set title = ?,content = ?,image = ? where id = ?',[$title,$content,$image,$id]);
           $request->session()->flash('messagei','*Update Successfull!');
           return redirect()->route('view.all.post');
        }
        
       }

    }    


    public function single_page_post(Request $request,$id)
    { 
       
        $posttt = DB::select('select * from post where id = ?',[$id]);
        $comment = DB::select('select TIMESTAMPDIFF(second,comments.time,CURRENT_TIMESTAMP()) as "totime",comments.comment as "comment",comments.post_id as "pid",comments.id as "cid",user_table.name as "man_name",user_table.id as "uid",user_table.image as "image" from comments left join user_table on comments.user_id = user_table.id where comments.post_id = ? order by comments.time',[$id]);
        
        $auth_username=session('username');
        $auth_id = DB::select('select id from user_table where uname = ?',[$auth_username]);
          $user_id = $auth_id[0]->id;
        return view('home.single',['posttt'=>$posttt,'comment'=> $comment,'user_id'=>$user_id]);
    }

    public function comment_insert(Request $request,$id)
    {   
        
        $comment_content =$request->content;

        if (strlen($comment_content)==0) 
        {
          $request->session()->flash('messagecr','*Comment added failed! Must type something.');
          return redirect()->route('single.page',[$id]);
        }
        else
        {
          $auth_username=session('username');
          $auth_id = DB::select('select id from user_table where uname = ?',[$auth_username]);
          $user_id = $auth_id[0]->id;
          $comments = new comments();
          $comments->post_id = $id;
          $comments->user_id = $auth_id[0]->id;
          $comments->comment = $comment_content;
          $comments->save();
          $request->session()->flash('messagec','*Comment added Successfull!.');
          $count = DB::select('select count(post_id) as "post_id"  from comments where post_id = ?',[$id]);
          $total_comment = $count[0]->post_id;
          DB::update('update post set total_comment = ? where id = ?',[$total_comment,$id]);
        return redirect()->route('single.page',[$id]);
        }
    }
}
