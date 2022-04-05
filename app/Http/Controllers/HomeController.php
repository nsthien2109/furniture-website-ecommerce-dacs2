<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;
use App\Models\Slide;
class HomeController extends Controller
{

    public function index(Request $request)
    {
      $meta_descrip = "Website bán đồ nội thất và thiết kế nội thất";
      $meta_keyword = "shop noi that,shop đồ nội thất , Orange-Furni ,Nội thất Furni-Orange";
      $meta_title = "Nội thất đẹp khiến ngôi nhà của bạn đẹp và sang trọng";
      $url_cano = $request->url();
      // $view_product = DB::table('tbl_product')->join('tbl_category_product','tbl_category_product.CategoryID','=','tbl_product.CategoryID')->join('tbl_brand','tbl_brand.BrandID','=','tbl_product.BrandID')->get();;
      // $manager_product = view('admin.view_product')->with('view_product', $view_product);
      $new_product = DB::table('tbl_product')->where('ProductStatus',1)->orderby('ProductID','DESC')->limit(4)->get();
      $hot_product = DB::table('tbl_product')->where('ProductStatus',1)->where('ProductChienluoc',1)->orderby('ProductID','DESC')->limit(8)->get();
      $Product_all = DB::table('tbl_product')->get();
      $Slide = Slide::orderby('SlideID','DESC')->where('SlideStatus', 1)->get();
      Session::forget('discount');
      Session::forget('ShipMon');
      return view('pages.home')->with('Slide', $Slide)->with('new_product', $new_product)->with('hot_product', $hot_product)->with('meta_descrip',$meta_descrip)->with('meta_keyword',$meta_keyword)->with('meta_title', $meta_title)->with('url_cano',$url_cano)->with('Product_all', $Product_all);
    }
    public function search_key(Request $request)
    {
      $Popular = DB::table('tbl_bill_detail')->join('tbl_product','tbl_product.ProductID','=','tbl_bill_detail.ProductID')->select('tbl_product.*','tbl_bill_detail.ProductID')->distinct()->orderby('tbl_bill_detail.ProductQuanty','ASC')->limit(3)->get();
      $cateProduct = DB::table('tbl_category_product')->where('CategoryStatus',1)->orderby('CategoryID','DESC')->get();
      $brandProduct = DB::table('tbl_brand')->where('BrandStatus',1)->orderby('BrandID','DESC')->get();
      $word_key = $request->Search;
      $Product_all = DB::table('tbl_product')->get();
      $search_resu = DB::table('tbl_product')->where('ProductName','like','%'.$word_key.'%')->where('ProductStatus',1)->orderby('ProductID','DESC')->get();
      return view('pages.shop.product-of-cate')->with('Popular', $Popular)->with('search_resu', $search_resu)->with('cateProduct', $cateProduct)->with('brandProduct', $brandProduct)->with('Product_all', $Product_all);
    }
}
