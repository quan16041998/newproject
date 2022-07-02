<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use Illuminate\Support\Collection;

class ViewC1ControllerWithRepos extends Controller
{


    public function index(){

        return view('eproject.viewC1.index',[
            'collection' => DB::table('collection')->Paginate(  4),
            'stylist'   => DB::table('stylist')->Paginate(4)
        ]);
    }
    public function search(Request $request){

    }

    public function shop(){
        $collection = AdminRepos::getallcollection();
        $stylist = AdminRepos::getallstylist();
        return view('eproject.viewC1.shop',[
            'product' => DB::table('product')->orderBy('price', 'desc')->paginate(12),
            'collection' => $collection,
            'stylist' => $stylist
        ]);
    }

    public function cart(){
        return view('eproject.viewC1.cart');
    }
    public function viewcollection($id){
        $collection = AdminRepos::getallcollection();
        $stylist = AdminRepos::getallstylist();
        $collectionname = AdminRepos::getcollectionbyid($id);
        return view('eproject.viewC1.viewcollection',[
            'collection' => $collection,
            'stylist' => $stylist,
            'product' => DB::table('product')->where('CollectionID','=',$id)->paginate(12),
            'sum'=> DB::table('product')->where('CollectionID','=',$id)->count(),
            'collectionname'=>$collectionname[0]
        ]);
    }
    public function viewstylist($id){
        $collection = AdminRepos::getallcollection();
        $stylist = AdminRepos::getallstylist();
        $stylistname = AdminRepos::getstylistbyid($id);
        return view('eproject.viewC1.viewstylist',[
            'collection' => $collection,
            'stylist' => $stylist,
            'product' => DB::table('product')->where('SID','=',$id)->paginate(12),
            'sum'=> DB::table('product')->where('SID','=',$id)->count(),
            'stylistname'=> $stylistname[0]
        ]);
    }
}
