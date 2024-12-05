<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; 

class User_controller extends Controller
{
    public function show(Request $request)
    {
        $student = new Student(); 
        $student->name = $request->name;
        $student->category = $request->category;
        $student->quantity = $request->quantity;

        $result = $student->save();
        
        if ($result) {
            return redirect('about');
            echo "product inserted";                                                                                               
        } else {
            return "Product not inserted";
        }
    }
    public function detail()
    {
        $products = Student::all();
        return view('product_detail', compact('products'));
    }


    public function delete($id)
    {
        $delete_product = Student::destroy($id);
        if($delete_product){
           return redirect('about');
        }else{
            echo "product not deleted";
        }
    }

    public function update($id)
    {
        $updates = Student::find($id);
        return view('update_detail', compact('updates'));
    }


    public function update_data(Request $request,$id){
        $student = Student::find($id);
        $student->name = $request->name;
        $student->category = $request->category;
        $student->quantity = $request->quantity;

        $result = $student->save();
        
        if ($result) {
            return redirect('about');
         
        } else {
            return "Product not inserted";
        }
        

    }
}
