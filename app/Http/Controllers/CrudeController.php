<?php

namespace App\Http\Controllers;
use App\peoples;
use Illuminate\Http\Request;
use DB;

class CrudeController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.ajax.ajaxcrude');
    }
    public function postStore(Request $request)
    {
        //print_r($request->all()) ;
        peoples::insert($request->all());
        //DB::table('peoples')->insert($request->all());
        return ['success'=>true,'message'=>'Inserted Successfully'];
    }

    public function postDelete(Request $request)
    {
        $id = $request->id;
        DB::delete('delete from peoples where id = ?',[$id]);
        return ['success'=>true,'message'=>'Deleted Successfully'];
        //return ['id'=>$id];
    }

    public function postUpdate(Request $request)
    {
        $id = $request->datas['id'];
        $fname = $request->datas['fname'];
        $lname = $request->datas['lname'];
        $email = $request->datas['email'];
        DB::update('update peoples set fname = ?,lname = ?,email = ? where id = ?',[$fname,$lname,$email,$id]);
        return ['success'=>true,'message'=>'Data Update Successfully!'];
        //return ['id'=>$fname];
    }

    public function getData(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $data = DB::table('peoples')
            ->orderBy('id', 'asc')
            ->get();
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                 $output .= '
                 <tr>
                 <th scope="row">'.$row->id.'</th>
                  <td>'.$row->fname.'</td>
                  <td>'.$row->lname.'</td>
                  <td>'.$row->email.'</td>
                  <td class="text-center"><button id="ebtn" type="button" pid="' . $row->id . '" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">Edit</button></td>
                  <td class="text-center"><button type="button" user ="' . $row->id . '"  id="dbtnbtndelete" class="btn btn-danger dbtnbtndelete" data-dismiss="modal">Delete</button></td>
                 </tr>
                 ';
                }         
            }
            else
            {
                $output = '<tr><td align="center" colspan="6">No Data Found</td></tr>';
            }
            $datas = array
            (
                'table_data'  => $output,
                'total_data'  => $total_row
            );
                echo json_encode($datas);
        }
    }
}
