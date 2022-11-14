<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\comments;
use App\user_table;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class profileController extends Controller
{
  public function profile_page(Request $request)
  {
    $auth_username=session('username');
    $auth_user = DB::select('select * from user_table where uname = ?',[$auth_username]);
    //echo $auth_user[0]->name;
    return view('profile.index',['auth_user'=>$auth_user]);
  }

  
}
