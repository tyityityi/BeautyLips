<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductListController extends Controller
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
        if ($request->has('search')) {
            $searchedBy = $request->query('search');
            if ($request->has('order')) {
                if($request->query('order')=="increase"){
                    $search = "%{$request->query('search')}%";
                    $url = "search={$request->query('search')}.order=increase";
                    $products = product::where('productName','like',$search)->orderBy('price')->paginate(9);
                }else if($request->query('order')=="decrease"){
                    $search = "%{$request->query('search')}%";
                    $url = "search={$request->query('search')}.order=decrease";
                    $products = product::where('productName','like',$search)->orderBy('price','desc')->paginate(9);
                }
            }else{
                $search = "%{$request->query('search')}%";
                $url = "search={$request->query('search')}";
                $products = product::where('productName','like',$search)->paginate(9);
            }
        }else{
            $searchedBy = "";
            if ($request->has('order')) {
                if($request->query('order')=="increase"){
                    $url = "order=decrease";
                    $products = product::orderBy('price')->paginate(9);
                }else if($request->query('order')=="decrease"){
                    $url = "order=decrease";
                    $products = product::orderBy('price','desc')->paginate(9);
                }
            }else{
                $url = "";
                $products = product::paginate(9);
            }
        }
        return view('ProductList',compact('products','url','searchedBy'));
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

    public function showBrand(Request $request,$brand)
    {
        //
        $url = "";
        $searchedBy="";
        if ($request->has('search')) {
            $searchedBy = $request->query('search');
            if ($request->has('order')) {
                if($request->query('order')=="increase"){
                    $search = "%{$request->query('search')}%";
                    $url = "search={$request->query('search')}.order=increase";
                    $products = product::where('brand',$brand)->where('productName','like',$search)->orderBy('price')->paginate(9);
                }else if($request->query('order')=="decrease"){
                    $search = "%{$request->query('search')}%";
                    $url = "search={$request->query('search')}.order=decrease";
                    $products = product::where('brand',$brand)->where('productName','like',$search)->orderBy('price','desc')->paginate(9);
                }
            }else{
                $search = "%{$request->query('search')}%";
                $url = "search={$request->query('search')}";
                $products = product::where('brand',$brand)->where('productName','like',$search)->paginate(9);
            }
        }else{
            $searchedBy = "";
            if ($request->has('order')) {
                if($request->query('order')=="increase"){
                    $url = "order=increase";
                    $products = product::where('brand',$brand)->orderBy('price')->paginate(9);
                }else if($request->query('order')=="decrease"){
                    $url = "order=decrease";
                    $products = product::where('brand',$brand)->orderBy('price','desc')->paginate(9);
                }
            }else{
                $url = "";
                $products = product::where('brand',$brand)->paginate(9);
            }
        }

        return view('ProductList',compact('products','url','searchedBy'));

    }

    public function showLip(Request $request,$lip)
    {
        //
        $url = "";
        $searchedBy="";
        if ($request->has('search')) {
            $searchedBy = $request->query('search');
            if ($request->has('order')) {
                if($request->query('order')=="increase"){
                    $search = "%{$request->query('search')}%";
                    $url = "search={$request->query('search')}.order=increase";
                    $products = product::where('lip',$lip)->where('productName','like',$search)->orderBy('price')->paginate(9);
                }else if($request->query('order')=="decrease"){
                    $search = "%{$request->query('search')}%";
                    $url = "search={$request->query('search')}.order=decrease";
                    $products = product::where('lip',$lip)->where('productName','like',$search)->orderBy('price','desc')->paginate(9);
                }
            }else{
                $search = "%{$request->query('search')}%";
                $url = "search={$request->query('search')}";
                $products = product::where('lip',$lip)->where('productName','like',$search)->paginate(9);
            }
        }else{
            $searchedBy = "";
            if ($request->has('order')) {
                if($request->query('order')=="increase"){
                    $searchedBy = "Price from small to large";
                    $url = "order=increase";
                    $products = product::where('lip',$lip)->orderBy('price')->paginate(9);
                }else if($request->query('order')=="decrease"){
                    $searchedBy = "Price from large to small";
                    $url = "order=decrease";
                    $products = product::where('lip',$lip)->orderBy('price','desc')->paginate(9);
                }
            }else{
                $url = "";
                $products = product::where('lip',$lip)->paginate(9);
            }
        }

        return view('ProductList',compact('products','url','searchedBy'));

    }

    public function showTexture(Request $request,$texture)
    {
        //
        $url = "";
        $searchedBy="";
        if ($request->has('search')) {
            $searchedBy = $request->query('search');
            if ($request->has('order')) {
                if($request->query('order')=="increase"){
                    $search = "%{$request->query('search')}%";
                    $url = "search={$request->query('search')}.order=increase";
                    $products = product::where('texture',$texture)->where('productName','like',$search)->orderBy('price')->paginate(9);
                }else if($request->query('order')=="decrease"){
                    $search = "%{$request->query('search')}%";
                    $url = "search={$request->query('search')}.order=decrease";
                    $products = product::where('texture',$texture)->where('productName','like',$search)->orderBy('price','desc')->paginate(9);
                }
            }else{
                $search = "%{$request->query('search')}%";
                $url = "search={$request->query('search')}";
                $products = product::where('texture',$texture)->where('productName','like',$search)->paginate(9);
            }
        }else{
            $searchedBy = "";
            if ($request->has('order')) {
                if($request->query('order')=="increase"){
                    $url = "order=increase";
                    $products = product::where('texture',$texture)->orderBy('price')->paginate(9);
                }else if($request->query('order')=="decrease"){
                    $url = "order=decrease";
                    $products = product::where('texture',$texture)->orderBy('price','desc')->paginate(9);
                }
            }else{
                $url = "";
                $products = product::where('texture',$texture)->paginate(9);
            }
        }
        return view('ProductList',compact('products','url','searchedBy'));
    }
}
