<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category_detail; 
use App\Models\Detail; 
use App\Models\Brand_detail; 
class product_controller extends Controller
{
   public function add_category(Request $request){

    $category = new category_detail();
    $category->category_name = $request->category ;

    $result = $category->save();
    if($result){
        return redirect('add');
    }else{
        echo "not inserted";
    }

   }

   public function add_brand(Request $request){

    $brand = new Brand_detail;
    $brand->brand_name = $request->brand_name ;
    $result =$brand->save();
    if($result){
        return redirect('add');

    }else{
        echo 'not inserted';
    }
   }



   public function save_products(Request $request){
    $request->validate([
        'name' => 'required|unique:details,product_name',   
        'category' => 'required',
        'brand' => 'required',
        'quantity'=>'required|digits_between:2,5',
       
    ]);
    $products = new Detail();
    $products->product_name = $request->name;
    $products->category = $request->category;
    $products->brand = $request->brand;
    $products->quantity = $request->quantity;

    $result = $products->save();
    if($result){
        return redirect('add');
    }else{
        echo "not inserted";
    }


   }


   public function select_category(){

    $categories = Category_detail::all();
    $brands = Brand_detail::all();
    $add = DB::table('details')
    ->join('category_details', 'details.category', '=', 'category_details.id')
    ->join('brand_details', 'details.brand', '=', 'brand_details.id')
    ->select('details.product_name', 'details.quantity','category_details.category_name', 'brand_details.brand_name')
    ->get();
    
    return view('add_product', compact('categories','brands','add'));
   }
   
}
