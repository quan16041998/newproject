<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;

class ViewC1ControllerWithRepos extends Controller
{
    public function index(){
        return view('eproject.viewC1.index');
    }

    public function shop(){
        $product = AdminRepos::getAllProducts();
        return view('eproject.viewC1.shop',[
            'product' => $product
        ]);
    }

    public function cart(){
        return view('eproject.viewC1.cart');
    }

}
