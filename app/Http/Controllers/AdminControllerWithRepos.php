<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Hash;


class   AdminControllerWithRepos extends Controller
{
    public function ask(){
        return view('eproject.adminuser.login');

    }


    public function signin(Request $request){
        $this->formadminloginValidate($request)->validate();
        $admin = AdminRepos::getadmin($request->input('username'));

        $admin3 = $request->input('password');
        if(!$admin){
            return redirect()->action('AdminControllerWithRepos@ask')
                ->with('msgs', 'Your username is incorrect ');
        }else{
            $admin1 = $admin[0]->password;
          if(Hash::check($admin3, $admin1)){

              Session::put('username', $request->input('username'));
              return redirect()->route('admin.adminindex');
          }else{
              return redirect()->action('AdminControllerWithRepos@ask')
                  ->with('msgs', 'Your password is incorrect ');
          }
        }

    }
    public function signout(){
        if (Session::has('username')){
            Session::forget('username');
        }
        return redirect()->action('AdminControllerWithRepos@ask');
    }
    private function formadminloginValidate(Request $request){
        return Validator::make(
            $request->all(),
            [
                'username' => ['required'],
                'password' => ['required']

            ],
            [
                'username.required' => 'Username can not be empty',
                'password.required' => 'Password can not be empty']);
    }

    public function adminindex()
    {
        $admin = AdminRepos::getAllAdmin();
        return view('eproject.admin.table_list',
            [
                'admin' => $admin
            ]);
    }

    public function showadmin($username)
    {
        $admin = AdminRepos::getAdminByUsername($username);
        return view('eproject.admin.show', [
            'admin' => $admin[0]
        ]);
    }

    public function editadmin($username)
    {
        $admin = AdminRepos::getAdminByUsername($username); //this is always an array


        return view(
            'eproject.admin.edit',
            ["admin" => $admin[0]]);
    }

    public function updateadmin(Request $request, $username)
    {
        if ($username != $request->input('username')) {
            return redirect()->action('AdminControllerWithRepos@adminindex');
        }
        $this->formadminValidate($request)->validate();
        if($request->input('newpassword')!= null){
            $admin = (object)[
                'username' => $request->input('username'),
                'password' => Hash::make($request->input('newpassword'), [
                    'rounds' => 10,
                ]),
                'name' => $request->input('name'),
                'dob' => $request->input('dob'),
                'contact' => $request->input('contact'),
                'email' => $request->input('email'),
            ];
        }else{
            $admin = (object)[
                'username' => $request->input('username'),
                'password' => Hash::make($request->input('oldpassword'), [
                    'rounds' => 10,
                ]),
                'name' => $request->input('name'),
                'dob' => $request->input('dob'),
                'contact' => $request->input('contact'),
                'email' => $request->input('email'),
            ];
        }

            $admin2 = AdminRepos::getadmin($request->input('username'));
            $admin3 = $request->input('oldpassword');
            $admin1 = $admin2[0]->password;
            if(!Hash::check($admin3, $admin1)){
                return redirect()->action('AdminControllerWithRepos@editadmin',['username'=>$request->input('username')])
                    ->with('msgs', 'Your old password is incorrect ');

            }else{
                AdminRepos::updateadmin($admin);
                return redirect()->action('AdminControllerWithRepos@adminindex')->with('msg','Update Successfully');

            }

    }

    private function formadminValidate(Request $request)
    {
        return Validator::make(
            $request->all(),
            [
                'username' => ['required'],
                'name' => ['required'],
                'dob' => ['required'],
                'contact' => ['required'],
                'email' => ['email'],
                'oldpassword' => ['required']
            ],
            [
                'username.required' => 'Username can not be empty',
                'oldpassword.required' => 'Please enter old password',
                'name.required' => 'Name can not be empty',
                'dob.required' => 'Date of birth can not be empty',
                'contact.required' => 'Contact can not be empty',
                'email.required' => 'Email can not be empty',
            ]
        );

    }







    public function collectionindex(){
      $collection = AdminRepos::getallcollection();
      return view('eproject.collection.index',[
         'collection' => $collection
      ]);
    }
    public  function showcollection($id){

        $collection = AdminRepos::getcollectionbyid($id);
        return view('eproject.collection.show',[
            'collection' => $collection[0]
            ]);
    }
    public function createcollection(){
       $stylist = AdminRepos::getallstylist();

        return view('eproject.collection.create',
            [
                "collection" =>(object)[
                    'name' => '',
                    'stylist' =>'',
                    'urlimg' => '',
                    'introduce'=>''
                ],
                "stylist" => $stylist

            ]);
    }

    public function storecollection(Request $request){
        $this->formcollectionVailidate($request)->validate();

        $collection =(object)[
            'name'=>$request->input('name'),
            'urlimg'=>$request->input('urlimg'),
            'introduce'=>$request->input('introduce'),
        ];
        if($request->hasFile('image')){
            $image = $request->file('image');
            $collection->urlimg = $image->getClientOriginalName();
            $image->move('images/collection', $image->getClientOriginalName());

        }
        $newid = AdminRepos::insertcollection($collection);
        return redirect()->action('AdminControllerWithRepos@collectionindex')->
        with('msg', 'New collection with id: ' . $newid . ' has been inserted');
    }

    function  formcollectionVailidate(Request $request){
        return Validator::make(
            $request->all(),[
                'name'=>['required'],
                'introduce'=>['required']
            ],
            [
                'name.required' => 'Collection name can not be empty',
                'introduce.required' => 'Introduce can not be empty',
            ]
        );
    }
    public function editcollection($id){
        $collection = AdminRepos::getcollectionbyid($id);
        return view('eproject.collection.update',[
           'collection'=>$collection[0]
        ]);
    }
    public function updatecollection(Request $request,$id){
        if($id != $request->input('id')){
            return redirect()->action('AdminControllerWithRepos@collectionindex');
        }
        $this->formcollectionVailidate($request)->validate();

        $collection =(object)[
            'CollectionID' => $request->input('id'),
            'name'=>$request->input('name'),
            'urlimg'=>$request->input('urlimg'),
            'introduce'=>$request->input('introduce'),
        ];
        if($request->hasFile('image')){
            $image = $request->file('image');
            $collection->urlimg = $image->getClientOriginalName();
            $image->move('images/collection', $image->getClientOriginalName());

        }
        AdminRepos::updatecolelction($collection);
        return redirect()->action('AdminControllerWithRepos@collectionindex')->with('msg','Update Successfully');
    }

    public  function confirmcollection($id){

        $collection = AdminRepos::getcollectionbyid($id);
        return view('eproject.collection.delete',[
            'collection' => $collection[0]
        ]);
    }

    public function deletecollection(Request $request, $id){
        if ($request->input('id') != $id){
            return redirect()->action('AdminControllerWithRepos@colletionindex');
        }
        $product = AdminRepos::getproductbyCollectionID($id);
        if(!$product){
            AdminRepos::deletecollection($id);
            return redirect()->action('AdminControllerWithRepos@collectionindex')
                ->with('msg', 'Delete Successfully');
        }else{
            return redirect()->action('AdminControllerWithRepos@confirmcollection',($id))
                ->with('msgs', 'Can not Delete collection has product!');
        }
    }















    public function stylistindex()
    {
        $stylist = AdminRepos::getallstylist();

        return view('eproject.stylist.index',
            [
                'stylist' => $stylist,
            ]);
    }
    public  function showstylist($id){

        $stylist = AdminRepos::getstylistbyid($id);
        return view('eproject.stylist.show',[
            'stylist' => $stylist[0]
        ]);
    }
    public function createstylist()
    {
        $stylist = AdminRepos::getallstylist();
        return view(
            'eproject.stylist.create',
            [
                "stylist" => (object)[
                    'name' => '',
                    'dob' => '',
                    'contact' => '',
                    'email' => '',
                    'history' => '',
                    'urlimg' => ''
                ],
            ]);

    }
    public function storestylist(Request $request)
    {
        $this->formValidate($request)->validate();

        $stylist = (object)[
            'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'history' => $request->input('history'),
            'urlimg' => $request->input('urlimg'),
        ];

        if($request->hasFile('image')){
            $image = $request->file('image');
            $stylist->urlimg = $image->getClientOriginalName();
            $image->move('images/stylist', $image->getClientOriginalName());

        }

        $newSID = AdminRepos::insertstylist($stylist);
        return redirect()
            ->action('AdminControllerWithRepos@stylistindex')
            ->with('msg', 'New Stylist with id: '.$newSID.' has been inserted');
    }
    public function editstylist($SID)
    {
        $stylist = AdminRepos::getstylistById($SID);

        return view(
            'eproject.stylist.update',
            [
                "stylist" => $stylist[0],

            ]);
    }
    public function updatestylist(Request $request, $SID)
    {
        if ($SID != $request->input('id')) {
            return redirect()->action('AdminControllerWithRepos@stylistindex');
        }

        $this->formValidate($request)->validate();

        $stylist = (object)[
            'SID' => $request->input('id'),
            'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'history' => $request->input('history'),
            'urlimg' => $request->input('urlimg'),
        ];
        if($request->hasFile('image')){
            $image = $request->file('image');
            $stylist->urlimg = $image->getClientOriginalName();
            $image->move('images/stylist', $image->getClientOriginalName());

        }

        AdminRepos::updatestylist($stylist);

        return redirect()->action('AdminControllerWithRepos@stylistindex')
            ->with('msg', 'Update Successfully');
    }
    public function confirmstylist($id){
        $stylist = AdminRepos::getstylistById($id);

        return view('eproject.stylist.delete',
            [
                'stylist' => $stylist[0],
            ]
        );
    }
    public function deletestylist(Request $request, $id){
        if ($request->input('id') != $id){
            return redirect()->action('AdminControllerWithRepos@stylistindex') ->with('msgs', 'Delete  not Successfully');;
        }

        AdminRepos::deletestylist($id);

        return redirect()->action('AdminControllerWithRepos@stylistindex')
            ->with('msg', 'Delete Successfully');
    }
    private function formValidate(Request $request)
    {
        return Validator::make(
            $request->all(),
            [
                'name' => ['required'],
                'dob' => ['required'],
                'contact' => ['required'],
                'email' => ['required'],
                'history' => ['required'],
            ],
            [
                'name.required' => 'Stylist name can not be empty',
                'dob.required' => 'DOB can not be empty',
                'contact.required' => 'Contact can not be empty',
                'email.required' => 'Email can not be empty',
                'history.required' => 'History can not be empty'

            ]
        );
    }


















    public function productindex(){
        $product = AdminRepos::getAllProducts();

        return view('eproject.product.index',
            [
                'product' => $product
            ]);
    }

    public  function showproduct($id){

        $product = AdminRepos::getProductById($id);
        $collection = AdminRepos::getcollectionbyProductid($id);
        $stylist = AdminRepos::getstylistbyProductid($id);
        return view('eproject.product.show',[
            'product' => $product[0],
            'collection' => $collection[0],
            'stylist' => $stylist[0]
        ]);
    }

    public function createproduct(){
        $stylist = AdminRepos::getallstylist();
        $collection = AdminRepos::getallcollection();

        return view(
            'eproject.product.create',
            [
                "product" => (object)[
                    'product_code' => '',
                    'fabric' => '',
                    'price' => '',
                    'size' => '',
                    'urlimg' => '',
                    'CollectionID' => '',
                    'SID' => ''
                ],
                "stylist" => $stylist,
                "collection" => $collection
            ]);
    }

    public function storeproduct(Request $request){
        $this->formproductValidate($request)->validate();

        $product = (object)[
            'product_code' => $request->input('product_code'),
            'fabric' => $request->input('fabric'),
            'price' => $request->input('price'),
            'size' => $request->input('size'),
            'urlimg' => $request->input('urlimg'),
            'CollectionID' => $request->input('CollectionID'),
            'SID' => $request->input('SID'),
        ];
        if($request->hasFile('image')){
            $image = $request->file('image');
            $product->urlimg = $image->getClientOriginalName();
            $image->move('images/product', $image->getClientOriginalName());

        }

        $newCID = AdminRepos::insertproduct($product);

        return redirect()
            ->action('AdminControllerWithRepos@productindex')
            ->with('msg', 'New product with id: '.$newCID.'has been inserted');
    }

    public function editproduct($id)
    {
        $product = AdminRepos::getProductById($id);
        $stylist = AdminRepos::getallstylist();
        $collection = AdminRepos::getallcollection();
        $stylist1 = AdminRepos::getstylistbyProductid($id);
        $collection1 = AdminRepos::getcollectionbyProductid($id);
        return view(
            'eproject.product.update',
            [
                "product" => $product[0],
                "stylist" => $stylist,
                "collection" => $collection,
                "stylist1" => $stylist1[0],
                "collection1" => $collection1[0]
            ]);
    }

    public function updateproduct(Request $request, $id){
        if($id != $request->input('id')) {
            return redirect()->action('AdminControllerWithRepos@productindex');
        }

        $this->formproductValidate($request)->validate();

        $product = (object)[
            'CID'=>$request->input('id'),
            'product_code' => $request->input('product_code'),
            'fabric' => $request->input('fabric'),
            'price' => $request->input('price'),
            'size' => $request->input('size'),
            'urlimg' => $request->input('urlimg'),
            'CollectionID' => $request->input('CollectionID'),
            'SID' => $request->input('SID')
        ];
        if($request->hasFile('image')){
            $image = $request->file('image');
            $product->urlimg = $image->getClientOriginalName();
            $storedPath = $image->move('images/product', $image->getClientOriginalName());

        }

        AdminRepos::updateproduct($product);

        return redirect()->action('AdminControllerWithRepos@productindex')
            ->with('msg', 'Update Successfully');
    }

    public function confirmproduct($id){
        $product = AdminRepos::getProductById($id);
        $collection = AdminRepos::getcollectionbyProductid($id);
        $stylist = AdminRepos::getstylistbyProductid($id);
        if(!$product){
            return  redirect()->action('AdminControllerWithRepos@productindex')
                ->with('msgs', 'No information');
        }else{
            return view('eproject.product.delete',
                [
                    'product' => $product[0],
                    'collection' => $collection[0],
                    'stylist' => $stylist[0]
                ]
            );
        }

    }

    public function deleteproduct(Request $request, $id){
        if ($request->input('id') != $id){
            return redirect()->action('AdminControllerWithRepos@productindex') ->with('msg', 'Delete fall');
        }

        AdminRepos::deleteproduct($id);

        return redirect()->action('AdminControllerWithRepos@productindex')
            ->with('msg', 'Delete successfully');
    }

    private function formproductValidate(Request $request)
    {
        return Validator::make(
            $request->all(),
            [
                'product_code' => ['required'],
                'fabric' => ['required'],
                'price' => ['required'],
                'size' => ['required'],
                'CollectionID' => ['gt:0'],
                'SID' => ['gt:0']
            ],
            [
                'product_code.required' => 'Product code can not be empty',
                'fabric.required' => 'Fabric can not be empty',
                'price.required' => 'Price can not be empty',
                'size.required' => 'Size can not be empty',
                'CollectionID.gt' => 'Conllection ID can not be empty',
                'SID.gt' => 'SID can not be empty',
            ]
        );
    }











    public function customerindex()
    {
        $customer = AdminRepos::getAllCustomer();

        return view('eproject.customer.index',
            [
                'customer' => $customer,
            ]);
    }

    public function showcustomer($ID)
    {

        $customer = AdminRepos::getsCustomerById($ID);
        return view('eproject.customer.show',
            [
                'customer' => $customer[0]

            ]);
    }

    public function editcustomer($ID)
    {
        $customer = AdminRepos::getsCustomerById($ID);

        return view(
            'eproject.customer.update',
            [
                "customer" => $customer[0],

            ]);
    }

    public function updatecustomer(Request $request, $ID)
    {
        if ($ID != $request->input('id')) {
            return redirect()->action('AdminControllerWithRepos@customerindex');
        }

        $this->formCustomerValidate($request)->validate();

        $customer = (object)[
            'CusID' => $request->input('id'),
            'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
        ];
        AdminRepos::updatecustomer($customer);

        return redirect()->action('AdminControllerWithRepos@customerindex')
            ->with('msg', 'Update Successfully');
    }


    private function formCustomerValidate(Request $request){
        return Validator::make(
            $request->all(),
            [
                'name' => ['required'],
                'dob' => ['required'],
                'contact' => ['required'],
                'email' => ['required'],
                'address' => ['required']
            ],
            [
                'name.required' => 'Customer name can not be empty',
                'dob.required' => 'dob can not be empty',
                'contact.required' => 'contact can not be empty',
                'email.required' => 'email can not be empty',
                'address.required' => 'history can not be empty',
            ]
        );
    }


}


