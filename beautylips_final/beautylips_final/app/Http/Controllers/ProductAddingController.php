<?php

namespace App\Http\Controllers;

use App\product;
use App\detail_image;
use Illuminate\Http\Request;

class ProductAddingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("ProductAdding");
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
    public function store(Request $request,product $product, detail_image $dImg)
    {
        //
        $product = new product;
        
        $product->productName = $request->productName;
        $product->brand =$request->brand;
        //$product->tImage = $request->tImage;
        $tImage = $request->tImage;
        $destinationPath="imgs/{$request->brand}_{$request->texture}_\${$request->price}/{$request->shades}";
        $filename=$tImage->getClientOriginalName();
        //$filename="{$request->productName}_{$request->shades}";
        $tImage->move($destinationPath,$filename);
        $product->tImage="{$request->brand}_{$request->texture}_\${$request->price}/{$request->shades}/{$filename}";
        
        $product->shades = $request->shades;
        $product->texture = $request->texture;
        $product->lip =$request->lip;
        $product->information = $request->information;
        $product->price = $request->price;
        if ($request->OutOfStock = true){
            $product->out_of_stock = "1";
        }
        else {         
            $product->out_of_stock = "0";
        }
        $product->save();
        $idForProduct=$product->productID;
        
        for($count=1;$count<=4;$count++){
            if($request->hasFile("di{$count}")){
                $idForDImage = "{$idForProduct}di{$count}";
                $dImage=$request->file("di{$count}");

                $newDImg=new detail_image;

                $newDImg->id="{$idForProduct}di{$count}";
                
                $destinationPath="imgs/{$request->brand}_{$request->texture}_\${$request->price}/{$request->shades}";
                $filename=$dImage->getClientOriginalName();
                $dImage->move($destinationPath,$filename);
                $newDImg->dImage="{$request->brand}_{$request->texture}_\${$request->price}/{$request->shades}/{$filename}";
                
                $newDImg->productID=$idForProduct;

                $newDImg->save();
    
                
                
            }
        }

        return redirect()->route('productedit', ['id' => $product->productID]);
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
