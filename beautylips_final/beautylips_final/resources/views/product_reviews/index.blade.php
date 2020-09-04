@extends('layouts.layout') @section('content')

<h3 class'col-sm-2 control-label'>The purchase number you have chosen is: <mark>{{$ponumber}}</mark></h3>
<div style="border:solid;margin: 20px;">
@foreach($products as $product)

        <form method="post" action="{{ route('product_reviews.store') }}">
                            {{csrf_field()}}

                            <div class="form-group" type="hidden">
                                <input   id="ponumber"
                                         name="PONUM"
                                         class="form-control"
                                         type="hidden"
                                         value="{{$ponumber}}"
                                         ></input>
                             </div>

        <div class="form-group">
                <h4>Give your rate to the product:</h4>
                <select name="rate" class="form-control">
                    @for($i = 5; $i > -1; $i--)
                    <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
        </div> 
                        

        <tr>
            <td>
                <div id="{{$product->productID}}" class="row p-4" style="border:solid;margin: 10px;">
                    <div class="row">
                        <div class="col-4">
                            <img src="\imgs\{{$product->tImage}}" class="img-thumbnail" width="200px" style="overflow:hidden;height: 100px !important">
                        </div>
                        <div class="col text-left">
                                <p class="mb-0 ">{{$product->brand}}</p>
                                <p class="mb-0 ">{{$product->productName}}</p>
                                <p class="mb-0 ">{{$product->texture}}</p>
                                <p class="mb-0 ">{{$product->shades}}</p>
                        </div>
                    </div>
                </div>
            </td>
        </tr>

                            <div class="form-group" type="hidden">
                                <input   id="productID"
                                         name="productID"
                                         class="form-control"
                                         type="hidden"
                                         value="{{$product->productID}}"
                                         ></input>
                             </div>

        <hr>

                            <div class="form-group" type="hidden">
                                <h4 class="col-4"for="product-comment">  Comment</h4>
                                <textarea   placeholder="Enter comment"
                                            style="resize: vertical"
                                            id="product-comment"
                                            name="review"
                                            rows="3" spellcheck="true"
                                            class="form-control autosize-target text-left"
                                            type="hidden"
                                         ></textarea>
                             </div>

        <hr>

        <div class="form-group col-12 pull-right">   
            <input class="btn btn-dark col-12 pull-right" href="#" role="button" type="submit" value="Submit comment"></input>
        </div>

        </form>
        
@endforeach

</div>  

@endsection