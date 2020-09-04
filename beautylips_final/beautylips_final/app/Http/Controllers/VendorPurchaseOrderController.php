<?php

namespace App\Http\Controllers;

use App\purchase_order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\purchase_product;
use App\shopping_cart;
use App\product;
use App;
use Carbon;

class VendorPurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->has('search')) {
            $search = "{$request->query('search')}";
            $purchases = App\purchase_product::join('product','purchase_product.productID','=','product.productID')->join('purchase_order','purchase_product.PONum','=','purchase_order.PONum')->join('customer','purchase_order.customerID','=','customer.customerID')->where('purchase_order.PONum','=',$search)->orderBy('purchaseDate', 'desc')->select('purchase_product.*','purchase_order.*','product.brand','product.productName','product.tImage')->get()->groupby('PONum');
            $TotalA = array();
            foreach( $purchases as $purchase ) {
                $T = 0;
                foreach( $purchase  as $p ) {
                    $T += $p->price * $p->quantity;
                }
                array_push($TotalA,$T);
            }
        }else{
            $purchases = App\purchase_product::join('product','purchase_product.productID','=','product.productID')->join('purchase_order','purchase_product.PONum','=','purchase_order.PONum')->join('customer','purchase_order.customerID','=','customer.customerID')->orderBy('purchaseDate', 'desc')->select('purchase_product.*','purchase_order.*','product.brand','product.productName','product.tImage')->get()->groupby('PONum');
            $TotalA = array();
            foreach( $purchases as $purchase ) {
                $T = 0;
                foreach( $purchase  as $p ) {
                    $T += $p->price * $p->quantity;
                }
                array_push($TotalA,$T);
            }
        }


        return view('vendor_purchases_order.PurchaseOrder',compact('purchases','TotalA'));

    }


    public function holdP()
    {
        //
        $purchases = App\purchase_product::join('product','purchase_product.productID','=','product.productID')->join('purchase_order','purchase_product.PONum','=','purchase_order.PONum')->join('customer','purchase_order.customerID','=','customer.customerID')->orderBy('purchaseDate', 'desc')->select('purchase_product.*','purchase_order.*','product.brand','product.productName','product.tImage')->where('status','hold')->get()->groupby('PONum');
        $TotalA = array();
        foreach( $purchases as $purchase ) {
                    $T = 0;
                    $i = 0;
                    foreach( $purchase  as $p ) {
                        $T += $p->price * $p->quantity;
                    }

                    array_push($TotalA,$T);
                }
        return view('vendor_purchases_order.PurchaseOrder',compact('purchases','TotalA'));

    }

    public function pendingtP()
    {
        //
       $purchases = App\purchase_product::join('product','purchase_product.productID','=','product.productID')->join('purchase_order','purchase_product.PONum','=','purchase_order.PONum')->join('customer','purchase_order.customerID','=','customer.customerID')->orderBy('purchaseDate', 'desc')->select('purchase_product.*','purchase_order.*','product.brand','product.productName','product.tImage')->where('status','pending')->get()->groupby('PONum');
                $TotalA = array();
                
                foreach( $purchases as $purchase ) {
                    $T = 0;
                    $i = 0;
                    foreach( $purchase  as $p ) {
                        $T += $p->price * $p->quantity;
                        
                    }

                    array_push($TotalA,$T);
                }

        return view('vendor_purchases_order.PurchaseOrder',compact('purchases','TotalA'));

    }

        public function pastP()
    {
        //
       $purchases = App\purchase_product::join('product','purchase_product.productID','=','product.productID')->join('purchase_order','purchase_product.PONum','=','purchase_order.PONum')->join('customer','purchase_order.customerID','=','customer.customerID')->orderBy('purchaseDate', 'desc')->select('purchase_product.*','purchase_order.*','product.brand','product.productName','product.tImage')->where('status','shipped')->orWhere('status','cancelled')->get()->groupby('PONum');
                $TotalA = array();;
                foreach( $purchases as $purchase ) {
                    $T = 0;
                    $i = 0;
                    foreach( $purchase  as $p ) {
                        $T += $p->price * $p->quantity;
                    }

                    array_push($TotalA,$T);
                }

        return view('vendor_purchases_order.PurchaseOrder',compact('purchases','TotalA'));

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
        $datetime =date('y-m-d h:i:s');

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
                                'price' => $product->price
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
            
        $purchaseorder = App\purchase_order::where('PONum',$PONum)->first();
        $customer = App\customer::where('customerID','=',$purchaseorder->customerID)->first();
        $purchaseA = App\purchase_product::where('PONum',$PONum)->join('product','purchase_product.productID','=','product.productID')->select('purchase_product.*','product.brand','product.productName','product.tImage','product.out_of_stock')->get();
        $TotalA = 0;
        $outOfStock = 0;
        
        foreach ($purchaseA  as $p ) {
            $TotalA += $p->price * $p->quantity;
            
            if ($p->out_of_stock==1){
                $outOfStock=1;
             
            }
        }
        

        return view('vendor_purchases_order.PurchaseOrderDetail',compact('purchaseorder','TotalA','customer','purchaseA','outOfStock'));





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
    public function update(Request $request, $PONum)
    {
        //
        if($request->action =="shipping"){
            $purchaseorder = App\purchase_order::where('PONum',$PONum)->first();
            $customer = App\customer::where('customerID','=',$purchaseorder->customerID)->first();

            $update = App\purchase_order::where('customerID','=',$purchaseorder->customerID)->where('PONum',$PONum)->update(['status'=>"shipped"]);
            $update2 = App\purchase_order::where('customerID','=',$purchaseorder->customerID)->where('PONum',$PONum)->update(['shipping_time'=>date('y-m-d h:i:s')]);
            
            $notice = new App\notification;
            $notice->PONum = $PONum;
            $notice->customerID = $purchaseorder->customerID;
            $notice->status = "shipped";
            $notice->time = Carbon\Carbon::now();
            $notice->isread =0;
            $notice->save();
            
            return back()->withInput();
        }else if($request->action =="cancel"){
            $purchaseorder = App\purchase_order::where('PONum',$PONum)->first();
            $customer = App\customer::where('customerID','=',$purchaseorder->customerID)->first();
            $update = App\purchase_order::where('customerID','=',$purchaseorder->customerID)->where('PONum',$PONum)->update(['status'=>"cancelled"]);
            $update2 = App\purchase_order::where('customerID','=',$purchaseorder->customerID)->where('PONum',$PONum)->update(['cancel_by'=>"vendor"]);
            $update3 = App\purchase_order::where('customerID','=',$purchaseorder->customerID)->where('PONum',$PONum)->update(['cancel_time'=>date('y-m-d h:i:s')]);
            
            $notice = new App\notification;
            $notice->PONum = $PONum;
            $notice->customerID = $purchaseorder->customerID;
            $notice->status = "cancel";
            $notice->time = Carbon\Carbon::now();
            $notice->isread =0;
            $notice->save();
            return back()->withInput();
        }else if($request->action =="hold"){
            $purchaseorder = App\purchase_order::where('PONum',$PONum)->first();
            $customer = App\customer::where('customerID','=',$purchaseorder->customerID)->first();

            $update = App\purchase_order::where('customerID','=',$purchaseorder->customerID)->where('PONum',$PONum)->update(['status'=>"hold"]);
            
            $notice = new App\notification;
            $notice->PONum = $PONum;
            $notice->customerID = $purchaseorder->customerID;
            $notice->status = "hold";
            $notice->time = Carbon\Carbon::now();
            $notice->isread =0;
            $notice->save();
            return back()->withInput();
        }else{
            
        }

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
