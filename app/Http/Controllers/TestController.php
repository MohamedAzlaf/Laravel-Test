<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;

class TestController extends Controller
{
    //api insert data
    public function add(Request $request){
      $data= new Category;
      $data->category_name= $request->category_name;
      $result=$data->save();
      if($result){
      return["Result"=>"data has been saved"];        
      }
      else{
      return["Result"=>"data  failed"];
      }
    }
      //category insert
       public function catsave(Request $request){
         // dd($request->all());
         $request->validate([
          'cname' => 'required',]);
          
            $catdata= new Category;
            $catdata->category_name = $request->cname;
            $catdata->save();

            return redirect('/category')->with('message','successfully Added');

       }
            
       public function viewproduct(){
        $categories = DB::table("categories")
         ->get();
           return view ('product')->with('categories',$categories);      
          }

          public function viewproductlist(){
            $product = DB::table("products")
            ->join('categories','products.category_id','=','categories.id')
            ->select('products.id as productId','products.price as productPrice','products.product_name as productName','products.category_id as categoryId','categories.category_name as categoryName')
            ->get();
              return view ('productlist')->with('products',$product);      
             }

             public function product_EditView($id){
              $products=DB::table("products")
              ->join('categories','products.category_id','=','categories.id')
              ->where('products.id',$id)
              // ->select('products.id as productId','products.product_name as productName','products.category_id as categoryId')
              ->get();
              // dd( $products->All());
              return view ('product_edit')->with('as',$products);
             }

             public function product_update(Request $request){
              DB::table('products')
              ->where('id',$request->id)
              ->update([
               'product_name'=>$request->pname,
               'price'=>$request->price,
               'category_id'=>$request->category,
            ]);
       
            return redirect('/productlist')->with('message', 'updated');
         }

         public function product_delete($id){
          DB::table('products')
          ->where('id',$id)
          ->delete();

          return redirect('/productlist')->with('message', 'Deleted');

      }
             

             public function viewcategorylist(){
              $categories = DB::table("categories")
            ->get();
              return view ('categorylist')->with('categories',$categories);      
             }

       public function saveproduct(Request $request){
         //  dd($request->all());
          $request->validate([
            'pname' => 'required',
            'price' => 'required', ]);
            $pdata= new Product;
            $pdata->product_name=$request->pname;
            $pdata->price=$request->price;
            $pdata->category_id=$request->category;
            $pdata->save();

            return redirect('/product')->with('message','successfully Added');

            
       }

       public function Register(Request $request){

        $request->validate([
          'name' => 'required|unique:users|min:3|max:255',
          'email' => 'required|unique:users|email:rfc,dns',
          'password' => 'required|min:5|max:8',]);

            $user= new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password =Hash::make($request->password);
            $user->save();

           // return redirect('/login');
            return redirect('/')->with('message','successfully Registered');


       }

       public function CheckUser(Request $request){
        $login= $request->only('name','password');
        if(Auth::attempt($login)){
            $userDetails = Auth::user();  
              return redirect('/home');  
              
            }else{

              return redirect('/');
            }
           
          }

       public function logout(){
        Auth::logout();
        return redirect('/');
       }

       }

