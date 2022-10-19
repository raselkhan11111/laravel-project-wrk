<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function header()
   {
      $category = Category::all();
      return view('components.forntend.partials.header', compact('category'));
   }


   public function index()
   {
      if ($key = request('product_name')) {

         $productall = Product::latest()
            ->where('name', 'SOUNDS LIKE', $key."%")
            // ->where("SOUNDEX('name_am') = SOUNDEX($key)")
            ->paginate(2)
            ->fragment('productall');
      } else {
         $productall = Product::latest()->paginate(12)->fragment('productall');
      }
      if ($key = request('product_name')) {
         $category = Category::latest()
            ->where('name', 'LIKE', "%{$key}%")
            ->paginate(1);
      } else {
         $category = Category::paginate(5);
      }
      if ($key = request('product_name')) {
         $blogs = Blog::latest()
            ->where('title', 'LIKE', "%{$key}%")
            ->paginate(1);
      } else {
         $blogs = Blog::paginate(3)->fragment('blogs');
      }
      return view("forntend/index", compact('category', 'productall', 'blogs'));
   }

   public function productDetails(Product $product)
   {
      return view('forntend/productdetels', compact('product'));
   }

   public function productListCategory(Category $category)
   {
      return view('forntend/categoryProductList', compact('category'));
   }


   public function productlist()
   {
      $productall = Product::paginate(15)->get();
      $blogs = Blog::all();
      $category = Category::get();
      return view("forntend/productlist", compact('category', 'productall', 'blogs'));
   }


   public function contact()
   {
      return view("forntend/contact");
   }

   public function about()
   {
      return view("forntend/about");
   }

   public function addtocard()
   {
      return view("forntend/addtocard");
   }

   public function checkout()
   {
      return view("forntend/checkout");
   }

   public function productdetels()
   {
      return view("forntend/productdetels");
   }

   public function thankyou()
   {
      return view("forntend/thankyou");
   }
   public function invoice()
   {
      return view("forntend/invoice");
   }
   public function login()
   {
      return view("forntend/login");
   }
}
