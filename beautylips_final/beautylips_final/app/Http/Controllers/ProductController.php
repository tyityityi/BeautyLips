<?php

namespace App\Http\Controllers;


use App;
use App\Product_review;
use App\Product_rate;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = App\product::all();
        return view('Index',compact('products'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {    
        
        $product = App\product::where('productID',$id)->first();
        $dImages = App\detail_image::where('productID',$id)->get();
        $product_rate = product_rate::leftjoin('customer','product_rate.customerID','=','customer.customerID')->where('productID',$id)->get();
        $avga = product_rate::where('productID',$id)->avg('rate');
        $avg = round($avga,1);
        $product_review = product_review::leftjoin('customer','product_reviews.customerID','=','customer.customerID')->where('productID',$id)->get();

        return view('ProductDetail',compact('product','dImages','product_rate','product_review','avg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
