<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Slide;

class HomeController extends Controller
{
    private $categories,$page,$products,$product, $related_products,$category,$setting,$slides;
   public function index()
   {
    $this->categories  = Category::all();
    $this->slides  = Slide::all();
    // $this->setting  = Setting::all();
   
    $this->products=Product::latest()->where('status', '1')->paginate(30);
    return view('website.home.index',[
        'products'=> $this->products,
        'categories'=> $this->categories,
        'slides'=> $this->slides,
        // 'setting'=> $this->setting,
       
     ]);
   }
   public function hotdeal()
   {
    $this->categories  = Category::all();
    // $this->setting  = Setting::all();
   
    $this->products=Product::latest()->where('status', '1')->paginate(30);
    return view('website.home.hotdeal',[
        'products'=> $this->products,
        'categories'=> $this->categories,
        // 'setting'=> $this->setting,
       
     ]);
   }

   public function detail($id, $slug = null)
   {
    // $this->setting  = Setting::all();
    $cat_id= Product::where('id',$id)->value('category_id');
    $this->related_products = Product::where('category_id',$cat_id)->latest()->take(8)->get();

    $this->categories  = Category::all();
    $this->product=Product::find($id);
    return view('website.detail.index',[
        'product'=>$this->product,
        'categories'=> $this->categories,
        'related_products'=> $this->related_products,
        // 'setting'=> $this->setting,
    ]);
   }


   public function category($id)
   {

    //    $this->setting  = Setting::all();
       $this->categories  = Category::all();
       $this->category  = Category::find($id);
       $this->products = Product::where('category_id', $id)->orderBy('id', 'desc')->paginate(30);
       return view('website.category.category',[
           'products' => $this->products,
           'category'=> $this->category,
           'categories'=> $this->categories,
        //    'setting'=> $this->setting,
           
       ]);
   }

   public function search(Request $request)
   {

    $searchText    =$request->search;

    // $this->setting  = Setting::all();

    $this->categories  = Category::all();
    $this->slides  = Slide::all();
    $this->product =Product::where('name','LIKE',"%" .$searchText. "%")->paginate(30);
    return view('website.home.hotdeal',[
        'products'=> $this->product,
        'categories'=> $this->categories,
        'slides'=> $this->slides,
        // 'setting'=> $this->setting,
        
    ]);
    
   }
   
}
