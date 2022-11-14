<?php

namespace App\Http\Controllers;

use App\User; //to use the user Model
use App\post; //to use the user Model
use Illuminate\Support\Facades\DB; //query builder
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Notice;

use Illuminate\Http\Request;

class loginController extends Controller
{

public function index(Request $request)
    {
        return view('login.index');
    }


public function user_homepage(Request $request)
    {
        $data = DB::table('post')->paginate(3);
        //$data = DB::select('select * from post');
        //$data = $this->arrayPaginator($data, $request);
        //print_r($data[0]->title);
        //$data[0]->link;

        return view('home.index')->with('data', $data);
    }
    
public function verify(Request $request)
    {
        $username=$request->username;
        $password=($request->password);
        
        
        $user=DB::table('user_table')
                ->where('uname',$username)
                ->where('password',$password)
                ->first();
        
        if($user!=null)
        {
            $request->session()->put('username',$user->uname);
            return redirect()->route('home.userhomepage');
        }
        else
        {
            $request->session()->flash('message','*Invalid Username or Password'); //flash data used for only one request and view for 2nd time
            return redirect()->route('login.index');
        }
    }
    
    
}
