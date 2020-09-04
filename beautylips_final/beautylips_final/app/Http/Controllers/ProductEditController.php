<?php

namespace App\Http\Controllers;

use App\product;
use App\detail_image;
use Illuminate\Http\Request;

class ProductEditController extends Controller
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
    public function store(Request $request, product $product, detail_image $dImg)
    {
        //
        $idForProduct = $request->productID;
        $product = product::where("productID","=",$idForProduct)->first();
        $product->productName = $request->productName;
        $product->brand = $request->brand;
        /*$product->tImage = $request->tImage;
        */
        $product->shades = $request->shades;
        $product->texture = $request->texture;
        $product->lip = $request->lip;
        $product->information = $request->information;
        $product->price = $request->price;
        if ($request->OutOfStock == true){
            $product->out_of_stock = "1";
        }
        else {         
            $product->out_of_stock = "0";
        }
        if($request->hasFile('tImage')){
            $tImage = $request->tImage;
            $destinationPath="imgs/{$request->brand}_{$request->texture}_\${$request->price}/{$request->shades}";
            $filename=$tImage->getClientOriginalName();
            //$filename="{$request->productName}_{$request->shades}";
            $tImage->move($destinationPath,$filename);
            $product->tImage="{$request->brand}_{$request->texture}_\${$request->price}/{$request->shades}/{$filename}";
        }
        $product->save();

        for($count=1;$count<=4;$count++){
            if($request->hasFile("{$idForProduct}di{$count}")){
                $idForDImage = "{$idForProduct}di{$count}";
                $dImage=$request->file("{$idForProduct}di{$count}");
                $dImg = detail_image::where("id","=",$idForDImage)->first();
                if($dImg){
                    $destinationPath="imgs/{$request->brand}_{$request->texture}_\${$request->price}/{$request->shades}";
                    $filename=$dImage->getClientOriginalName();
                    $dImage->move($destinationPath,$filename);
                    $dImg->dImage="{$request->brand}_{$request->texture}_\${$request->price}/{$request->shades}/{$filename}";
                    $dImg->save();
                }
                else{
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
        }
        

        /*if($request->hasFile("{$idForProduct}di2")){
            $idForDImage = "{$idForProduct}di2";
            $dImg = detail_image::where("id","=",$idForDImage)->first();
            $dImage2=$request->file("{$idForProduct}di2");
            $destinationPath="imgs/{$request->brand}_{$request->texture}_\${$request->price}/{$request->shades}";
            $filename=$dImage2->getClientOriginalName();
            $dImage2->move($destinationPath,$filename);
            $dImg->dImage="{$request->brand}_{$request->texture}_\${$request->price}/{$request->shades}/{$filename}";
            $dImg->save();
        }

        if($request->hasFile("{$idForProduct}di3")){
            $idForDImage = "{$idForProduct}di3";
            $dImage3=$request->file("{$idForProduct}di3");
            $dImg = detail_image::where("id","=",$idForDImage)->first();
            if($dImg){
                $destinationPath="imgs/{$request->brand}_{$request->texture}_\${$request->price}/{$request->shades}";
                $filename=$dImage3->getClientOriginalName();
                $dImage3->move($destinationPath,$filename);
                $dImg->dImage="{$request->brand}_{$request->texture}_\${$request->price}/{$request->shades}/{$filename}";
                $dImg->save();
            }
            else{
                $newDImg=new detail_image;

                $newDImg->id="{$idForProduct}di3";
                
                $destinationPath="imgs/{$request->brand}_{$request->texture}_\${$request->price}/{$request->shades}";
                $filename=$dImage3->getClientOriginalName();
                $dImage3->move($destinationPath,$filename);
                $newDImg->dImage="{$request->brand}_{$request->texture}_\${$request->price}/{$request->shades}/{$filename}";
                
                $newDImg->productID=$idForProduct;

                $newDImg->save();

            }
            
        }

        if($request->hasFile("{$idForProduct}di4")){
            $idForDImage = "{$idForProduct}di4";
            $dImg = detail_image::where("id","=",$idForDImage)->first();
            $dImage4=$request->file("{$idForProduct}di4");
            $destinationPath="imgs/{$request->brand}_{$request->texture}_\${$request->price}/{$request->shades}";
            $filename=$dImage4->getClientOriginalName();
            $dImage4->move($destinationPath,$filename);
            $dImg->dImage="{$request->brand}_{$request->texture}_\${$request->price}/{$request->shades}/{$filename}";
            $dImg->save();
        }*/
        //return redirect()->route('vendorCenter');
        return back()->withInput();
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
    public function destroy(Request $request, detail_image $dImg)
    {
        $productId=$request->productId;
        $count=$request->count;
        $idForDImg="{$productId}di{$count}";
        $dImg = detail_image::where("id","=",$idForDImg)->first();
            if($dImg->delete()){
                //redirect
                return back()->withInput();
    
            }
    
            return back()->withInput()->with('error', 'Detail image {$count} with product id {$productId} could not be deleted');
       

        //
    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    }
}
