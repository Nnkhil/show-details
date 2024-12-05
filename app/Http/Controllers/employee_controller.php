<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee; 
use App\Models\Member; 
use App\Models\Company_employee; 
use App\Models\Employee_one; 
use App\Models\Post; 
use App\Models\Comment;
use DataTables; 
class employee_controller extends Controller
{
    public function show(){

    {
        if(request()->ajax()){
          $data = Employee::with('department')->orderBy('id', 'DESC')->get();
        
          return DataTables::of($data)
              ->addIndexColumn()
              ->addColumn('department_name', function($row) {                 
                return $row->department->department_name ; 
              })
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('employee_detail');
    }
    }

    // public function delete($id){

    //   $deletedata =Employee::destroy($id);
    //   if($deletedata){
    //     return redirect('employee');
    //   }else{
    //     echo "data not deleted";
    //   }

    // }

    // public function update($id){
    //     $updatedata=Employee::find($id);
    //     return view('update_employee', compact('updatedata'));   
    // }
    
    // public function update_data(Request $request,$id){
    //     $emp = Employee::find($id);
    //     $emp->username = $request->name;
    //     $emp->email = $request->email;
    //     $emp->address = $request->address;

    //     $result = $emp->save();
            
    //     if ($result) {
    //         return redirect('employee');
         
    //     } else {
    //         return "Product not inserted";
    //     }
        

    // }

    public function detail(){

      $post = Member::with('member_detail')->get();
 
       return $post;

    }

    public function relation()
    {
        $student = Company_employee::all();
        foreach ($student as $employee) {
            
            echo  $employee->name . " ";
            echo  $employee->email . " ";
            foreach ($employee->role as $role) {
              
            echo $role->roles . "<br>"; 
            }
            echo "<hr>";
        }
    
        } 


        public function records()
        {   
          $posts = Post::with('comments')->get();
 
          foreach ($posts as $post) {
            echo $post->name;
            foreach ($post->comments as $comment) {
              echo $comment->description."<br>";
           }
            echo "<hr>";
          }
          // $post = Post::find(1);
 

          // foreach ($post->comments as $comment) {
              //   echo $post->name;
              //   echo $comment->description . "<br>";
              // }
            } 
    
}
