<?php

namespace App\Http\Controllers;

use App\shopping_cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\product;
use App\customer;

class ShoppingcartController extends Controller
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
            
            $shopping_carts = shopping_cart::where('customerID', Auth::user()->customerID)->get();

            
            $products = product::all();
            return view('shopping_carts.index', [ 'shopping_carts' => $shopping_carts, 'products'=> $products]);

        }
        return redirect()->route('login');
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

        $timestamps = false;

        if(Auth::check()){

            $products = shopping_cart::where('productID','=',$request->input('productID'))->get();

            foreach($products as $product){
                if ($product->customerID == Auth::user()->customerID){
                    return back()->withInput()->withErrors('Product already exist in your shopping cart.');
                }
            }



            $shopping_cart = shopping_cart::insert([
                'productID' => $request->input('productID'),
                'quantity' => $request->input('quantityS'),
                'customerID' => Auth::user()->customerID
            ]);


            if($shopping_cart){
                
                return back()->withInput()->with('success', 'The product has been put in your shopping cart!');
            }


        }
        
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\shopping_cart  $shopping_cart
     * @return \Illuminate\Http\Response
     */
    public function show(shopping_cart $shopping_cart)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\shopping_cart  $shopping_cart
     * @return \Illuminate\Http\Response
     */
    public function edit(shopping_cart $shopping_cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\shopping_cart  $shopping_cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, shopping_cart $shopping_cart)
    {
        //
        $shoppingUpdate = shopping_cart::where('id', $shopping_cart->id)
                                        ->update([
                                            'quantity'=> $request->input('quantity')
                                            ]);


        if($shoppingUpdate){
            return back();
        }
        //redirect
        return back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\shopping_cart  $shopping_cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(shopping_cart $shopping_cart)
    {
        //
        $findShop = shopping_cart::find( $shopping_cart->id );
            if($findShop->delete()){
                //redirect
                return back();
    
            }
    
            return back()->withInput()->with('error', 'project could not be deleted');
    }

    





}
