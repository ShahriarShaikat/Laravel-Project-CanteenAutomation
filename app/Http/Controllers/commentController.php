<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\comments;
use App\user_table;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class commentController extends Controller
{
  public function comment_edit_update(Request $request,$id,$pid)
  {
    $comment_content = $request->edit_comment;
    //echo $id;
    //echo $pid;
    DB::update('update comments set comment = ? where id = ?',[$comment_content,$id]);
    $request->session()->flash('messagec','*Comment update Successful!.');
    return redirect()->route('single.page',[$pid]);
  }

  public function delete_comment(Request $request,$id,$pid)
  {
    DB::delete('delete from comments where id = ?',[$id]);
    $count = DB::select('select count(post_id) as "post_id"  from comments where post_id = ?',[$pid]);
    $total_comment = $count[0]->post_id;
    DB::update('update post set total_comment = ? where id = ?',[$total_comment,$pid]);
    $request->session()->flash('messagec','*Comment has been deleted!.');
    return redirect()->route('single.page',[$pid]);
  }

  public function admin_single_post(Request $request,$id)
  {
    $posttt = DB::select('select * from post where id = ?',[$id]);
    $comment = DB::select('select TIMESTAMPDIFF(second,comments.time,CURRENT_TIMESTAMP()) as "totime",comments.comment as "comment",comments.post_id as "pid",comments.id as "cid",user_table.name as "man_name",user_table.id as "uid",user_table.image as "image" from comments left join user_table on comments.user_id = user_table.id where comments.post_id = ? order by comments.time',[$id]);
    //select TIMESTAMPDIFF(second,comments.time,CURRENT_TIMESTAMP()) as "time",comments.comment as "comment",comments.post_id as "pid",comments.id as "cid",user_table.name as "man_name",user_table.id as "uid",user_table.image as "image" from comments left join user_table on comments.user_id = user_table.id where comments.post_id = 1 order by comments.time; 
    //echo $auth_username=session('username');
    //$auth_id = DB::select('select id from user_table where uname = ?',[$auth_username]);
    //echo $user_id = $auth_id[0]->id;
    return view('admin.view.addpost.single',['posttt'=>$posttt,'comment'=> $comment]);
  }

  public function admin_delete_comment(Request $request,$id,$pid)
  {
    DB::delete('delete from comments where id = ?',[$id]);
    $count = DB::select('select count(post_id) as "post_id"  from comments where post_id = ?',[$pid]);
    $total_comment = $count[0]->post_id;
    DB::update('update post set total_comment = ? where id = ?',[$total_comment,$pid]);
    $request->session()->flash('messagec','*Comment has been deleted!.');
    return redirect()->route('admin.single.post',[$pid]);
  }
}
