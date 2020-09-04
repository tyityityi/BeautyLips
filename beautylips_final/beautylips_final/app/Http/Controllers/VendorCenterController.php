<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class VendorCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $url="";
        $searchedBy="";
        $search="";
        if ($request->has('search')){
            $searchedBy = "Search results for ";
            $url = "search={$request->query('search')}";
            $searchPName = "%{$request->query('search')}%";
            $search = "{$request->query('search')}";
            $products = product::where('productID',$search)
                                 ->orWhere('productName','like',$searchPName)
                                 ->paginate(8);
        }else{
            $url = "";
            $products = product::paginate(8);
        }
        return view('VendorCenter',compact('products','url','searchedBy','search'));
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
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
