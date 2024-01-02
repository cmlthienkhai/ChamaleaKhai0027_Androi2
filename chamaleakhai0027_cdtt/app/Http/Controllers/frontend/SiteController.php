<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Link;
use App\Models\Product;
use App\Models\Post;
use App\Models\Page;
use App\Models\Topic;

class SiteController extends Controller
{
    public function index($slug=NULL){
        if($slug == NULL){
           return $this->home();
        }
        else
        {
            $link= Link::where('slug', '=', $slug)->first();
            if($link != NULL){                 
                $type = $link->type;
                switch ($type) {
                    case 'category': {
                        return $this->product_category($slug);//3 cai
                    }
                    case 'brand': {
                        return $this->product_brand($slug);//5 cai 
                    }
                    case 'topic': {
                        return $this->post_topic($slug);//2 cai
                    }
                    case 'page': {
                        return $this->post_page($slug);//4 cai
                    }                    
                }
            }else {
                $product = Product::where([['slug', '=', $slug], ['status', '=', 1]])->first();
                if ($product != NULL)
                {
                    return $this->prodduct_detail($product);
                }else {
                    $args = [
                        ['slug', '=', $slug],
                        ['status', '=', 1],
                        ['type', '=', 'post']
                    ];
                    $post = Post::where($args)->first();
                    if ($post != NULL)
                    {
                        return $this->post_detail($post);
                    } else {
                        return $this->error_404($slug);
                    }
                }
            }
        }
        
    }
    private function home()
    {
        $title = 'Home';
        $args = [
            ['status','=',1],
            ['parent_id','=',0]
        ];
        $list_category = Category::where($args)->orderBy('sort_order')->get();
        return view('frontend.home.home',compact('list_category','title'));
    }
    // product
    public function product()
    {
        $list_product = Product::where('status','=', 1)
        ->orderBy('created_at', 'DESC')
        ->paginate(12);
        return view('frontend.pages.product', compact('list_product'));
    }
    // product_category
    private function product_category($slug)
    {
        $args = [
            ['status','=',1],
            ['slug','=',$slug]
        ];
        $cat = Category::where($args)->orderBy('sort_order')->first();
        $listcatid = array();
        array_push($listcatid,$cat->id);
        $args1 = [
            ['parent_id', '=', $cat->id],
            ['status', '=', 1]         
        ];
        $list_category1 = Category::where($args1)->get();
        if(count($list_category1)>0)
        {
            foreach($list_category1 as $cat1)
            {
                array_push($listcatid,$cat1->id);
                $args2 = [
                    ['parent_id', '=', $cat1->id],
                    ['status', '=', 1]         
                ];
                $list_category2 = Category::where($args2)->get();
                if(count($list_category2)>0)
                { 
                    foreach($list_category2 as $cat2)
                    {
                        array_push($listcatid,$cat2->id);
                    }
                }        
            }
        }
        $list_product = Product::where('status','=',1)
        ->whereIn('category_id',$listcatid)
        ->orderBy('created_at','DESC')
        ->paginate(9);
        return view('frontend.product-category',compact('list_product', 'cat'));
    }
    // product_brand
    private function product_brand($slug)
    {
        $args = [
            ['slug', '=', $slug],
            ['status', '=', 1]         
        ];
        $list_brand = Brand::where($args)->first();
        $list_product = Product::where([['status','=',1],['brand_id','=', $list_brand->id]])
        ->orderBy('created_at','DESC')
        ->paginate(9);
        return view('frontend.product-brand',compact('list_brand','list_product'));
    }
    // prodduct_detail
    private function prodduct_detail($product)
    {
        $listcatid = array();
        array_push($listcatid,$product->category_id);
        $args1 = [
            ['parent_id', '=', $product->category_id],
            ['status', '=', 1]         
        ];
        $list_category1 = Category::where($args1)->get();
        if(count($list_category1)>0)
        {
            foreach($list_category1 as $cat1)
            {
                array_push($listcatid,$cat1->id);
                $args2 = [
                    ['parent_id', '=', $cat1->id],
                    ['status', '=', 1]         
                ];
                $list_category2 = Category::where($args2)->get();
                if(count($list_category2)>0)
                { 
                    foreach($list_category2 as $cat2)
                    {
                        array_push($listcatid,$cat2->id);
                    }
                }        
            }
        }
        $list_product = Product::where([['status', '=', 1], ['id','!=', $product->id ]])
        ->whereIn('category_id',$listcatid)
        ->orderBy('created_at','DESC')
        ->take(4)
        ->get();
        return view('frontend.prodduct-detail', compact('product','list_product'));
    }
    // post
    public function post()
    {
        $args = [
            ['status','=',1],
            ['type','=','post']
        ];
        $list_post = Post::where($args)
        ->orderBy('created_at','DESC')
        ->paginate(4);
        return view('frontend.post', compact('list_post'));
    }
    // post_topic
    private function post_topic($slug)
    {
        // $args = [
        //     ['slug', '=', $slug],
        //     ['status', '=', 1]         
        // ];
        // $list_topic = Topic::where($args)->first();
        // $list_post = Post::where([['status','=',1],['topic_id','=', $list_topic->id]])
        // ->orderBy('created_at','DESC'), compact('list_topic', 'list_post')
        // ->get();
        return view('frontend.post-topic');
    }
    // post_page
    private function post_page($slug)
    {
        $args = [
            ['slug', '=', $slug],
            ['status','=',1],
            ['type','=','page']
        ];
        $list_page = Page::where($args)->orderBy('created_at','DESC')->get();
        return view('frontend.post-page', compact('list_page'));
    }
    // post_detail
    private function post_detail($post)
    {
        $args = [
            ['status','=',1],
            ['type', '=', 'post'],
            ['id','!=', $post->id ]
        ];
        $list_post = Post::where($args)
        ->orderBy('created_at','DESC')
        ->take(2)
        ->get();
        return view('frontend.post-detail', compact('post', 'list_post'));
    }
    #error 404
    private function error_404($slug)
    {
    }
}