<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
 * Action hiển thị danh sách Sản phẩm
 */
        public function post()
    {
        return view('frontend.pages.post');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }

}
