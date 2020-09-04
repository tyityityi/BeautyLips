<?php

namespace App\Http\Controllers;

use App\Product_review;
use App\Product_rate;
use App\product;
use App\purchase_product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if(Auth::check()){
            $comment = product_review::create([
                'productID' => $request->input('productID'),
                'PONum' => $request->input('PONUM'),
                'customerID' => Auth::user()->customerID,
                'reviews' => $request->input('review')
            ]);

            $rate = product_rate::insert([
                'productID' => $request->input('productID'),
                'PONum' => $request->input('PONUM'),
                'customerID' => Auth::user()->customerID,
                'rate' => $request->input('rate')
            ]);

            

            $POnum = $request->input('PONUM');
            
            if($comment && $rate){
                $productUpdate = purchase_product::where([
                    ['productID','=',$request->input('productID')],
                    ['PONum','=',$request->input('PONUM')]
                ])->update([
                    'comment'=>1
                ]);
                $view = "\\purchaseOrderDetail\\" . "{$POnum}";
                    return redirect($view);
            }
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product_review  $product_review
     * @return \Illuminate\Http\Response
     */
    public function show(Product_review $product_review)
    {
        //
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product_review  $product_review
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_review $product_review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product_review  $product_review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_review $product_review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product_review  $product_review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_review $product_review)
    {
        //
    }

    public function pass(Request $request){

        if(Auth::check()){
            
            $PONUM = $request->input('PON');
            $target = product::where('productID',$request->input('productID'))->get();
           
            return view('product_reviews.index', [ 'ponumber' => $PONUM, 'products'=> $target]);

        }
        return redirect()->route('login');
    }
}
