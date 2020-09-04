<?php

namespace App\Http\Controllers;

use App\purchase_order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\purchase_product;
use App\shopping_cart;
use App\product;
use App;

class PurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::check()){
            
            $purchases  = App\purchase_product::join('product','purchase_product.productID','=','product.productID')->join('purchase_order','purchase_product.PONum','=','purchase_order.PONum')->where('customerID','=',Auth::user()->customerID)->orderBy('purchaseDate', 'desc')->select('purchase_product.*','purchase_order.*','product.brand','product.productName','product.tImage')->get()->groupby('PONum');
            $TotalA = array();;
            foreach( $purchases as $ps ) {
                $T = 0;
                $i = 0;
                foreach( $ps  as $purchase ) {
                    $T += $purchase->price * $purchase->quantity;
                }

                array_push($TotalA,$T);
            }
            return view('PurchaseOrder',compact('purchases','TotalA'));

        }

        return view('auth.login');

    }



    public function currentP()
    {
        //
        if(Auth::check()){
            
            $purchasesA = App\purchase_product::join('product','purchase_product.productID','=','product.productID')->join('purchase_order','purchase_product.PONum','=','purchase_order.PONum')->where('customerID','=',Auth::user()->customerID)->orderBy('purchaseDate', 'desc')->select('purchase_product.*','purchase_order.*','product.brand','product.productName','product.tImage')->where('status','pending')->orWhere('status','hold')->get();
            $purchases = $purchasesA->groupby('PONum');
            $TotalA = array();;
            foreach( $purchases as $ps ) {
                $T = 0;
                $i = 0;
                foreach( $ps  as $purchase ) {
                    $T += $purchase->price * $purchase->quantity;
                }

                array_push($TotalA,$T);
            }

            return view('PurchaseOrder',compact('purchases','TotalA'));

        }
        return view('auth.login');

    }

    public function shipped()
    {
        //
        if(Auth::check()){
            
            $purchasesA = App\purchase_product::join('product','purchase_product.productID','=','product.productID')->join('purchase_order','purchase_product.PONum','=','purchase_order.PONum')->where('customerID','=',Auth::user()->customerID)->orderBy('purchaseDate', 'desc')->select('purchase_product.*','purchase_order.*','product.brand','product.productName','product.tImage')->where('status','shipped')->orWhere('status','cancelled')->get();
            $purchases = $purchasesA->groupby('PONum');
            $TotalA = array();;
            foreach( $purchases as $ps ) {
                $T = 0;
                $i = 0;
                foreach( $ps  as $purchase ) {
                    $T += $purchase->price * $purchase->quantity;
                }

                array_push($TotalA,$T);
            }
            return view('PurchaseOrder',compact('purchases','TotalA'));

        }
        return view('auth.login');

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datetime =date('y-m-d h:i:s',time());

        if(Auth::check()){

            $purchaseOrder = purchase_order::insert([
                'status' => $request->input('status'),
                'customerID' => Auth::user()->customerID,
                'shipping_time' =>NULL,
                'cancel_time' =>NULL,
                'cancel_by' => NULL,
                'purchaseDate' => $datetime
            ]);


            if($purchaseOrder){     

                $purchaseOrderNum = purchase_order::where('customerID',Auth::user()->customerID)->max('PONum');
                $shopping_carts = shopping_cart::where('customerID',Auth::user()->customerID)->get();
                $products = product::all();
                foreach($shopping_carts as $shopping_cart){
                    foreach($products as $product){
                        if($product->productID == $shopping_cart->productID){

                            $purchase_product = purchase_product::insert([
                                'productID' => $shopping_cart->productID,
                                'quantity' => $shopping_cart->quantity,
                                'PONum' => $purchaseOrderNum,
                                'price' => $product->price,
                                'comment' => 0
                    ]);

                }
                }
                }
                $findShop = shopping_cart::where('customerID',Auth::user()->customerID);
                if($findShop->delete()){
                    $view = "\\purchaseOrderDetail\\" . "{$purchaseOrderNum}";
                    return redirect($view);
                }
                
            }
        }
        
        return back()->withInput()->with('errors', 'Error creating new company.');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\purchase_order  $purchase_order
     * @return \Illuminate\Http\Response
     */
    public function show($PONum)
    {
        //
        
        $purchaseorder = App\purchase_order::where('customerID','=',Auth::user()->customerID)->where('PONum',$PONum)->first();
        $customer = App\customer::where('customerID','=',Auth::user()->customerID)->first();

        $purchaseA = App\purchase_product::where('PONum',$PONum)->join('product','purchase_product.productID','=','product.productID')->select('purchase_product.*','purchase_product.*','product.brand','product.productName','product.tImage')->get();




        $TotalA = 0;
        foreach ($purchaseA  as $ps ) {
            $TotalA += $ps->price * $ps->quantity;
        }

                
        return view('PurchaseOrderDetail',compact('purchaseorder','TotalA','customer','purchaseA'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\purchase_order  $purchase_order
     * @return \Illuminate\Http\Response
     */
    public function edit(purchase_order $purchase_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\purchase_order  $purchase_order
     * @return \Illuminate\Http\Response
     */
    public function update($PONum)
    {
        //
        $customer = App\customer::where('customerID','=',Auth::user()->customerID)->first();
        $name = $customer->name;
        $update = App\purchase_order::where('customerID','=',Auth::user()->customerID)->where('PONum',$PONum)->update(['status'=>"cancelled"]);
        $update2 = App\purchase_order::where('customerID','=',Auth::user()->customerID)->where('PONum',$PONum)->update(['cancel_by'=>$name]);
        $update3 = App\purchase_order::where('customerID','=',Auth::user()->customerID)->where('PONum',$PONum)->update(['cancel_time'=>date('y-m-d h:i:s')]);
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\purchase_order  $purchase_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(purchase_order $purchase_order)
    {
        //
    }

    public function storeProduct(){


        return true;

    }

    public function remove()
    {
        //
        

            return back()->withInput()->with('error', 'project could not be deleted');
    }
}
