<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_table;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class adminController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.index');
    }

    public function view_homepage(Request $request)
    {
        //print_r(session('admin-username'));
        return view('admin.view.index');
    }

    //public function saw(Request $request){return view('users.index');}


    public function getdata(Request $request)
    {
        $data['data'] = DB::table('user_table')->get();
        if(count($data)>0)
        {
        	return view('admin.view.users.index',$data);
        }
        else
        {
        	return view('admin.view.users.index');
        }
    }

    public function give(Request $request,$id)
    {
        $event= new user_table();
        $even=$event::find($id);
        return view('admin.view.edit.index')->with('even',$even);
    }
    public function delete(Request $request,$uname)
    {
       
        $request->session()->flash('messaged','*Data deleted Successfull!');
        DB::delete('delete from user_table where uname = ?',[$uname]);
        return redirect()->route('users.index');
    }
    






    public function check(Request $request)
    {
        $username=$request->admin_username;
        $password=($request->admin_password);
        
        if (strlen($username)==0 || strlen($password)==0) 
        {
        	$request->session()->flash('message','*Fields could\'n be empty');
        	return redirect()->route('admin.index');
        }
        else
        {
        	$user=DB::table('admin')
                ->where('username',$username)
                ->where('password',$password)
                ->first();
        
        if($user!=null)
        {
            $request->session()->put('admin-username',$user->username);
            $request->session()->flash('message_A','*Log-In Successfull');
            //return view('admin.view.index');
            return redirect()->route('admin.homepage');
        }
        else
        {
            $request->session()->flash('message','*Invalid Username or Password'); //flash data used for only one request and view for 2nd time
            return redirect()->route('admin.index');
        }
        }
        
    }
    
}
