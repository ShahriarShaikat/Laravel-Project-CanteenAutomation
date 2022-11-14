<?php

namespace App\Http\Controllers;

use App\User; //to use the user Model
use Illuminate\Support\Facades\DB; //query builder

use Illuminate\Http\Request;

class signupController extends Controller
{
    public function index(Request $request)
    {
        return view('signup.index');
    }


    public function create(Request $request)
    {
        
        $full_name = $request->input('full_name');
        $username = $request->input('u_name');
        $pass = $request->input('lpassword');
        $gender = $request->input('gender');
        $birthday = $request->input('birthday');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $data=array(
        	'name'=>$full_name,
        	'uname'=>$username,
        	'password'=>$pass,
        	'birthday'=>$birthday,
        	'email'=>$email,
        	'gender'=>$gender,
        	'mobile'=>$phone
        );
        DB::table('user_table')->insert($data);
        $request->session()->flash('messag','*Sign Up Successful');
        
        return redirect()->route('login.index');
    }


    public function display(Request $request,$id)
    {
        $user=DB::select('select * from user_table where id = ?',[$id]);
        return view('admin.view.users.custom.index',['user'=>$user]);
    }

    public function update(Request $request,$id)
    {
    	        $name = $request->input('ulname');
		    	$email = $request->input('edit_email');
		    	$password = $request->input('edit_password');
		    	$mobile = $request->input('edit_mobile');
		    	$birthday = $request->input('edit_birthday');
		    	$gender = $request->input('gendere');

        if (strlen($name)==0 || strlen($email)==0 || strlen($password)==0 || strlen($mobile)==0 || strlen($birthday)==0 || strlen($gender)==0)  
        {
        	    $request->session()->flash('messaged','*Data update failed due to empty field! Try again with valid data.');
        	    return redirect()->route('users.index');
        }
        else
        {
		    	
		    	//echo $name;
		    	//echo $uname;
		        DB::update('update user_table set name = ?,email = ?,password = ?,mobile = ?, birthday =?,gender = ? where id = ?',[$name,$email,$password,$mobile,$birthday,$gender,$id]);
		        $request->session()->flash('messaged','*Data Update Successful!');
		        return redirect()->route('users.index');
        }

        
        //return view('admin.view.users.custom.index',['user'=>$user]);
    }

 
    
}
