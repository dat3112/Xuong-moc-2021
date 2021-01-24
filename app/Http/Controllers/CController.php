<?php

namespace App\Http\Controllers;

use App\Banner;
use App\category;
use App\News;
use App\Partner;
use App\product;
use Illuminate\Http\Request;

class CController extends GenneralController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function demo()
    {
        return view('demo');
    }

    public function index()
    {
        $banner = Banner::where(['is_active'=> 1, 'page_image'=>1])->orderBy('position', 'ASC')->orderBy('id', 'DESC')->get();
        $is_hot = product::where(['is_hot' => 1, 'is_active' => 1])->orderBy('position', 'ASC')->orderBy('id', 'DESC')->get();
        $partner = Partner::where(['is_active' => 1])->orderBy('position', 'ASC')->orderBy('id', 'DESC')->get();
        $news = News::where(['is_active'=> 1])->orderBy('id', 'DESC')->limit(4)->get();
        $category = category::where('is_active',1)->orderBy('position', 'ASC')->orderBy('id', 'DESC')->limit(8)->get();
        return view('frontend.index', ['banner' => $banner,
            'category' => $category,
            'is_hot' => $is_hot,
            'partner' => $partner,
            'news' => $news]);
    }

    public function cateid($slug){
        $banner = Banner::where(['is_active'=> 1, 'page_image'=>2])->orderBy('position', 'ASC')->orderBy('id', 'DESC')->get();

        $cate =category::where(['slug'=>$slug])->first();



        $products = product::where(['is_active'=>1, 'category_id'=>$cate->id])
            ->orderBy('id','desc')
            ->paginate(8);


        return view('frontend.category.cate_product', ['cate' => $cate,
            'banner' => $banner,
            'products' => $products
        ]);

    }
    public function productid($id){
        $product = product::findorFail($id);
        return view('frontend.product.product_detail', [
            'product' => $product
        ]);
    }

    public function article(){
        $list = News::where(['is_active' => 1])->orderBy('id', 'DESC')->get();
        return view('frontend.article.index', ['list' => $list]);
    }
    public function detail($slug){
        return view('frontend.article.index');
    }

    public function introduce(){
        return view('frontend.introduce');
    }

    public function partner(){
        $partner = Partner::where(['is_active' => 1])->orderBy('position', 'ASC')->orderBy('id', 'DESC')->get();
        return view('frontend.partner', ['partner' => $partner]);
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function product(){
        $livingroom = product::where(['is_active'=> 1, 'category_id'=>56])->orderBy('id', 'DESC')->get();
        $bedroom = product::where(['is_active'=> 1, 'category_id'=>58])->orderBy('id', 'DESC')->get();
        $kidchen = product::where(['is_active'=> 1, 'category_id'=>57])->orderBy('id', 'DESC')->get();
        return view('frontend.product.product', ['livingroom' => $livingroom,
            'bedroom' => $bedroom,
            'kidchen' => $kidchen,
            ]);
    }

//
//
//        foreach ($categories as $key => $category){
//            if($category->categories == 0){
//                $ids = [$category->id];
//
//                $list[$key]['category'] = $category;
//
//                $list[$key]['products'] = product::where(['is_active' => 1])->whereIn('category_id' , $ids)
//                    ->limit(8)
//                    ->orderBy('id','ASC')
//                    ->orderBy('id','desc')
//                    ->orderBy('position','ASC')
//                    ->orderBy('position','desc')
//                    ->get();
//            }
//        }
//
//
//
//
//

//
//    public  function category($slug){
//        $cate = category::where(['slug' => $slug])->first();
//
//        $categories = $this->categories;
//        $ids = [];
//
//        foreach ($categories as $key => $category){
//            if($category->id == $cate->id){
//                $ids[] = $cate->id;
//            }
//        }
//        $products = product::where(['is_active' => 1])
//            ->whereIn('category_id',$ids)
//            ->orderBy('id','desc')
//            ->paginate(8);
//
//        return view('frontend.category', [
//            'category' => $cate,
//            'products' => $products
//        ]);
//
//    }



}
