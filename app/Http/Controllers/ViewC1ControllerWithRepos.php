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
    public function signup(){
        return view('eproject.viewC1.signup');
    }

    public function index(){

        return view('eproject.viewC1.index',[
            'collection' => DB::table('collection')->Paginate(  4),
            'stylist'   => DB::table('stylist')->Paginate(4)
        ]);
    }
    public function search(Request $request){
        $search = $request->input('search');
        $product = AdminRepos::getProductbySearch($request->input('search'));
        $collection = AdminRepos::getallcollection();
        $stylist = AdminRepos::getallstylist();
        if(!isset($search)){

            return redirect()->action('ViewC1ControllerWithRepos@shop');
        }else{
            return view('eproject.viewC1.search',
                [   'product' => $product,
                    'collection' => $collection,
                    'stylist' => $stylist
                ]);
        }

    }

    public function shop(){
        $collection = AdminRepos::getallcollection();
        $stylist = AdminRepos::getallstylist();
        return view('eproject.viewC1.shop',[
            'product' => DB::table('product')->paginate(12),
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

    public function detail($id){
        $product = AdminRepos::getProductById($id);
        $collection1 = AdminRepos::getcollectionbyProductid($id);
        $stylist1 = AdminRepos::getstylistbyProductid($id);
        return view('eproject.viewC1.detail',[
            'product' => $product[0],
            'collection1' => $collection1[0],
            'stylist1' => $stylist1[0],
            'stylist' => DB::table('stylist')->get(),
            'collection' => DB::table('collection')->get()
        ]);

    }
    public function collection(){

    }
   
    
     public function stylist($id){
        $stylist = AdminRepos::getstylistbyid($id);
        return view('eproject.viewC1.viewstylist',[
            'stylist' => $stylist[0]
        ]);

    }

    
     public function login(){
        return view('eproject.viewC1.login');
    }

    public function signupcus(){
        $customer = AdminRepos::getAllCustomer();
        return view('eproject.viewC1.signup',
        [
          'customer' =>(object)[
              'name' => '',
              'dob' => '',
              'contact' => '',
              'email' => '',
              'address' => ''
          ],
            'customer' => $customer
        ]);
    }

    public function storecus(Request $request){
        $this->formcustomerValidate($request)->validate();

        $customer = (object)[
            'name'=>$request->input('name'),
            'dob'=>$request->input('dob'),
            'contact'=>$request->input('contact'),
            'email'=>$request->input('email'),
            'address'=>$request->input('address')
        ];

        $newid = AdminRepos::insertcustomer($customer);
        return redirect()->action('ViewC1ControllerWithRepos@login')->
        with('msg', 'New customer with id: ' . $newid . ' has been inserted');
    }


    function formcustomerVailidate(Request $request){
        return Validator::make(
            $request->all(),[
                'name'=>['required'],
                'dob'=>['required'],
                'contact'=>['required'],
                'email' => ['required'],
                'address' => ['required'],
            ],
            [
                'name.required' => 'Stylist name can not be empty',
                'dob.required' => 'dob can not be empty',
                'contact.required' => 'contact can not be empty',
                'email.required' => 'email can not be empty',
                'address.required' => 'address can not be empty',

            ]
        );
    }

}
