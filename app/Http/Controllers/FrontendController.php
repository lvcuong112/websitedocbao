<?php

namespace App\Http\Controllers;


use App\News;
use App\Category;
use App\Banner;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    public function index(){
        // 1. Lấy dữ liệu - Danh mục sản phẩm
       // echo (md5('123456')); die;
        $categories = Category::where('is_active' ,1)->get();

        // 2. Lấy dữ liệu - Banner
        $banners = Banner::where([
        		['is_active','=' ,'1'],
        		['position','=' ,'1'],
        ])->get();
        $bannersT = Banner::where([
                ['is_active','=' ,'1'],
                ['position','=' ,'2'],
        ])->get();

        $newNews = News::Orderby('created_at', 'DESC')->limit(15)->get();

        $bannerNews = News::Orderby('created_at', 'DESC')->limit(4)->get();
        // 3. Lấy dữ liệu -News
        $news = News::where('is_hot' , 1)->latest()->paginate(10);
        $newsBD = News::where('category_id' , 7)->limit(5)->get();
        $newsGD = News::where('category_id' , 8)->limit(5)->get();
        $newsTG = News::where('category_id' , 9)->limit(5)->get();
        $newsVH = News::where('category_id' , 10)->limit(5)->get();
        $newsES = News::where('category_id' , 11)->limit(5)->get();    

        return view('frontend.index',[
            // truyền dữ liệu sang view
            'categories' => $categories,
            'banners' => $banners,
            'bannersT' => $bannersT,
            'news' => $news,
            'newsBD'=> $newsBD,
            'newsGD'=> $newsGD,
            'newsTG'=> $newsTG,
            'newsVH'=> $newsVH,
            'newsES'=> $newsES,
            'newNews'=> $newNews,
            'bannerNews'=> $bannerNews
        ]);
    }
    public function showdetailnews($name){

        $categories = Category::where('is_active' ,1)->get();

        $detailNews = News::where('name',$name)->get();

        $newNews = News::Orderby('created_at', 'DESC')->limit(15)->get();

        $bannerNews = News::Orderby('created_at', 'DESC')->limit(4)->get();
        $bannersT = Banner::where([
                ['is_active','=' ,'1'],
                ['position','=' ,'2'],
        ])->get();


        $news = News::where('is_hot' , 1)->limit(10)->get();
        $newsBD = News::where('category_id' , 7)->limit(5)->get();
        $newsGD = News::where('category_id' , 8)->limit(5)->get();
        $newsTG = News::where('category_id' , 9)->limit(5)->get();
        $newsVH = News::where('category_id' , 10)->limit(5)->get();
        $newsES = News::where('category_id' , 11)->limit(5)->get();      

        return view('frontend.showdetailnews',[
            // truyền dữ liệu sang view
            'categories' => $categories,
            'news' => $news,
            'newsBD'=> $newsBD,
            'bannersT' => $bannersT,
            'newsGD'=> $newsGD,
            'newsTG'=> $newsTG,
            'newsVH'=> $newsVH,
            'newsES'=> $newsES,
            'detailNews'=>$detailNews,
            'newNews'=> $newNews,
            'bannerNews'=> $bannerNews
        ]);
    }

    public function thethao(){
        $categories = Category::where('is_active' ,1)->get();
        $banners = Banner::where([
                ['is_active','=' ,'1'],
                ['position','=' ,'1'],
        ])->get();
        $bannersT = Banner::where([
                ['is_active','=' ,'1'],
                ['position','=' ,'2'],
        ])->get();

        $newsBD = News::where([
                ['is_active','=' ,'1'],
                ['category_id','=' ,'7'],
        ])->get();
     
        return view('frontend.thethao' ,[
            'categories' => $categories,
            'banners' => $banners,
            'newsBD'=> $newsBD,
            'bannersT' => $bannersT

        ]); 
    }
    public function giaoduc(){
        $categories = Category::where('is_active' ,1)->get();
        $banners = Banner::where([
                ['is_active','=' ,'1'],
                ['position','=' ,'1'],
        ])->get();

        $bannersT = Banner::where([
                ['is_active','=' ,'1'],
                ['position','=' ,'2'],
        ])->get();
        $newsGD = News::where([
                ['is_active','=' ,'1'],
                ['category_id','=' ,'8'],
        ])->get();
     
        return view('frontend.giaoduc' ,[
            'categories' => $categories,
            'banners' => $banners,
            'newsGD'=> $newsGD,
            'bannersT' => $bannersT

        ]); 
    }
    public function thoisu(){
        $categories = Category::where('is_active' ,1)->get();
        $banners = Banner::where([
                ['is_active','=' ,'1'],
                ['position','=' ,'1'],
        ])->get();

        $bannersT = Banner::where([
                ['is_active','=' ,'1'],
                ['position','=' ,'2'],
        ])->get();

        $newsTG = News::where([
                ['is_active','=' ,'1'],
                ['category_id','=' ,'9'],
        ])->get();
     
        return view('frontend.thoisu' ,[
            'categories' => $categories,
            'banners' => $banners,
            'bannersT' => $bannersT,
            'newsTG'=> $newsTG

        ]); 
    }
    public function vanhoa(){
        $categories = Category::where('is_active' ,1)->get();
        $banners = Banner::where([
                ['is_active','=' ,'1'],
                ['position','=' ,'1'],
        ])->get();

        $bannersT = Banner::where([
                ['is_active','=' ,'1'],
                ['position','=' ,'2'],
        ])->get();

        $newsVH = News::where([
                ['is_active','=' ,'1'],
                ['category_id','=' ,'10'],
        ])->get();
     
        return view('frontend.vanhoa' ,[
            'categories' => $categories,
            'banners' => $banners,
            'bannersT' => $bannersT,
            'newsVH'=> $newsVH

        ]); 
    }
    public function esport(){
        $categories = Category::where('is_active' ,1)->get();
        $banners = Banner::where([
                ['is_active','=' ,'1'],
                ['position','=' ,'1'],
        ])->get();

        $bannersT = Banner::where([
                ['is_active','=' ,'1'],
                ['position','=' ,'2'],
        ])->get();
        $newsES = News::where([
                ['is_active','=' ,'1'],
                ['category_id','=' ,'11'],
        ])->get();
     
        return view('frontend.esport' ,[
            'categories' => $categories,
            'banners' => $banners,
            'bannersT' => $bannersT,
            'newsES'=> $newsES

        ]); 
    }
    public function search(Request $request){

        $categories = Category::where('is_active' ,1)->get();
        $banners = Banner::where([
                ['is_active','=' ,'1'],
                ['position','=' ,'1'],
        ])->get();

        $bannersT = Banner::where([
                ['is_active','=' ,'1'],
                ['position','=' ,'2'],
        ])->get();

        $search = News::where('name','like','%'.$request->keys.'%')->get();   

                                        
        return view('frontend.search' ,[
            'categories' => $categories,
            'banners' => $banners,
            'bannersT' => $bannersT,    
            'search'  => $search
        ]);

    }

}
