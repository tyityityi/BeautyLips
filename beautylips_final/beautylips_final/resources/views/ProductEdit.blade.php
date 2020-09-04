@extends('layouts.layoutForVendor') @section('content')
<style type="text/css">
    .mx-1 a{
        font-size: 1.5rem;
    }
    
</style>
<script type="text/javascript" language="javascript">
document.getElementsByClassName("dImageCount").style.display="none";
</script>

<div style="position: relative;" class="justify-content-center pb-5 my-5">
    <hr style="position: absolute;width: 100%;border-top: 4px solid gray;top: 8px;">
    <div style="position: absolute;font-size: 2rem;background-color: white;left:40%;">Edit Product</div>
</div>

    <form action="/productedit/store" method="post" id="form1" enctype="multipart/form-data">
        {{ csrf_field() }}
        <table>
            <tr class="row justify-content-start">
                <td class="col-2">Product ID: </td>
                <td class="col-3">
                    <input type="text" value="{{$product->productID}}" name="productID" readonly>
                </td>
            </tr>
            <tr class="row justify-content-start">
                <td class="col-2">Brand: </td>
                <td class="col-3">
                    <input class="" list="brands" value="{{$product->brand}}" name="brand">
                    <datalist id="brands">
                        <option value="3CE">
                        <option value="Charlotte Tilbury">
                        <option value="Huda Beauty">
                        <option value="SHISEIDO">
                        <option value="Kevyn Aucoin">
                        <option value="TOM FORD">
                    </datalist>
                </td>
            </tr>
            <tr class="row justify-content-start">
                <td class="col-2">Name: </td>
                <td class="col-3">
                    <input class="" type="text" value="{{$product->productName}}" name="productName">
                </td>
            </tr>
            <tr class="row justify-content-start">
                <td class="col-2">Price: </td>
                <td class="col-3">
                    <input class="" type="text" value="{{$product->price}}" name="price">
                </td>
            </tr>
            <tr class="row justify-content-start">
                <td class="col-2">Texture: </td>
                <td class="col-3">
                    <input class="" type="text" value="{{$product->texture}}" name="texture">
                </td>
            </tr>
            <tr class="row justify-content-start">
                <td class="col-2">Shades: </td>
                <td class="col-3">
                    <input class="" type="text" value="{{$product->shades}}" name="shades">
                </td>
            </tr>
            <tr class="row justify-content-start">
                <td class="col-2">Lip: </td>
                <td class="col-3">
                    <input class="" type="text" value="{{$product->lip}}" name="lip">
                </td>
            </tr>
            <tr class="row justify-content-start">
                <td class="col-2">Information: </td>
                <td class="col-3">
                    <input class="" type="text" value="{{$product->information}}" name="information">
                </td>
            </tr>
            
            <br/>

            <tr class="row justify-content-start" >
                <td colspan="2" class="col-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" checked="checked" class="custom-control-input" id="OutOfStock" name="OutOfStock">
                        <label class="custom-control-label" for="OutOfStock">Out Of Stock</label>
                    </div>
                </td>
            </tr>

            <br/>

            <tr class="row justify-content-start">
                <td class="col-2">Thumbnail Image: </td>
                <td class="col-3">
                    <img class="card-img-top w-200" width="200" height="240" src="/imgs/{{$product->tImage}}" alt="">
                </td>
                <td class="col-4"><input type="file" name="tImage" /></td>
            </tr>


            <?php $count=1 ?> 
            @foreach ($dImages as $img)
            <tr class="row justify-content-start">
                <td class="col-2">Detail Image{{$count}}: 
                    
                </td>
                <td class="col-3">
                    <img class="card-img-top w-200" width="200" height="240" src="/imgs/{{$img->dImage}}" alt="">
                </td>
                <td class="col-4">
                    <input type="file" name="{{$img->productID}}di{{$count}}" ><br>
                </td>
            </tr>
            <?php $count++; ?>
            @endforeach


            @for(;$count<=4;$count++)
                <tr class="row justify-content-start">
                    <td class="col-2">Add Detail Image{{$count}}:<br>(If exist) 
                        <input type="hidden" value="{{$count}}" name="dImage{{$count}}" readonly>
                    </td>
                    <td class="col-3">
                    </td>
                    <td class="col-4"><form ><input type="file" name="{{$product->productID}}di{{$count}}" /></td>
                </tr>
            @endfor

        </table>
    
        <br>
        <div class="row status justify-content-end col-8">
                <input class="btn btn-dark" type="submit" name="submit" value="Ok">
                <a class="btn btn-dark mx-4 " href="/vendorCenter " role="button ">Cancel</a>
        </div>
    </form>


<div style="position: relative;" class="justify-content-center pb-5 my-5">
    <hr style="position: absolute;width: 100%;border-top: 4px solid gray;top: 8px;">
    <div style="position: absolute;font-size: 2rem;background-color: white;left:37%;">Delete detail images</div>
</div>
    <table>
    <?php $count=1 ?> 
    @if($dImages->first())
    @foreach ($dImages as $img)
        <tr class="row justify-content-start">
            <td class="col-2">Detail Image{{$count}}
            </td>
            <td class="col-3">
                <img class="card-img-top w-200" width="200" height="240" src="/imgs/{{$img->dImage}}" alt=""> 
            </td>
            <td class="col-4">
                <form action="/productedit/destroy" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <input type="hidden" name="count" value="{{$count}}" readonly>
                    <input type="hidden" name="productId"value="{{$product->productID}}" readonly>
                    <input type="submit" id="deleteDImg" name="suibian" value="Delete detail image{{$count}}">
                </form>
            </td>
        </tr>
    <?php $count++ ?> 
    @endforeach
    @else
    <div class="h3 row justify-content-center alert alert-light">
        There is no detail image currently.
    </div>
    @endif
    </table>
@endsection

