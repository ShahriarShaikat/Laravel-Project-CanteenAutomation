<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    function index()
    {
     return view('live_search');
    }

    function action(Request $request)
    {
        if($request->ajax())
        {
                $output = '';
                $query = $request->get('query');

                if($query != '')
                {
                 $data = DB::table('user_table')
                   ->where('id', 'like', '%'.$query.'%')
                   ->orwhere('name', 'like', '%'.$query.'%')
                   ->orWhere('uname', 'like', '%'.$query.'%')
                   ->orWhere('email', 'like', '%'.$query.'%')
                   ->orWhere('password', 'like', '%'.$query.'%')
                   ->orWhere('image', 'like', '%'.$query.'%')
                   ->orWhere('birthday', 'like', '%'.$query.'%')
                   ->orWhere('gender', 'like', '%'.$query.'%')
                   ->orWhere('mobile', 'like', '%'.$query.'%')
                   ->orderBy('id', 'desc')
                   ->get();
                   
                }

                else
                {
                 $data = DB::table('user_table')
                   ->orderBy('id', 'desc')
                   ->get();
                }
                
                $total_row = $data->count();
                if($total_row > 0)
                {
                       foreach($data as $row)
                       {
                        $output .= '
                        <tr>
                         <td>'.$row->id.'</td>
                         <td>'.$row->name.'</td>
                         <td>'.$row->uname.'</td>
                         <td>'.$row->email.'</td>
                         <td>'.$row->password.'</td>
                         <td>'.$row->image.'</td>
                         <td>'.$row->birthday.'</td>
                         <td>'.$row->gender.'</td>
                         <td>'.$row->mobile.'</td>
                        </tr>
                        ';
                       }
                }
                else
                {
                       $output = '
                       <tr>
                        <td align="center" colspan="9">No Data Found</td>
                       </tr>
                       ';
                }
                $data = array(
                 'table_data'  => $output,
                 'total_data'  => $total_row
                );

                echo json_encode($data);
       }
    }
}