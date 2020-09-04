@extends('layouts.layoutForVendor') @section('content')
<style>
table {
    font-size: 1.4rem;
}

td {
    padding-right: 20px;
}
.status a{
    font-size: 1.4rem;
}
</style>
<div style="position: relative;" class="justify-content-center pb-5 my-5">
    <hr style="position: absolute;width: 100%;border-top: 4px solid gray;top: 8px;">
    <div style="position: absolute;font-size: 2rem;background-color: white;left:40%;">Add new Product</div>
</div>
<form action="/productadding/store" method="post" id="form1" enctype="multipart/form-data">
        {{ csrf_field() }}
        <table>
            
            <tr class="row justify-content-start">
                <td class="col-4">Brand: </td>
                <td class="col-3">
                    <input class="" list="brands" value="" name="brand">
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
                <td class="col-4">Name: </td>
                <td class="col-3">
                    <input class="" type="text" value="" name="productName">
                </td>
            </tr>
            <tr class="row justify-content-start">
                <td class="col-4">Price: </td>
                <td class="col-3">
                    <input class="" type="text" value="" name="price">
                </td>
            </tr>
            <tr class="row justify-content-start">
                <td class="col-4">Texture: </td>
                <td class="col-3">
                    <input class="" type="text" value="" name="texture">
                </td>
            </tr>
            <tr class="row justify-content-start">
                <td class="col-4">Shades: </td>
                <td class="col-3">
                    <input class="" type="text" value="" name="shades">
                </td>
            </tr>
            <tr class="row justify-content-start">
                <td class="col-4">Lip: </td>
                <td class="col-3">
                    <input class="" type="text" value="" name="lip">
                </td>
            </tr>
            <tr class="row justify-content-start">
                <td class="col-4">Information: </td>
                <td class="col-3">
                    <input class="" type="text" value="" name="information">
                </td>
            </tr>
            
            <br/>

            <tr class="row justify-content-start" >
                <td colspan="2" class="col-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="OutOfStock" name="OutOfStock">
                        <label class="custom-control-label" for="OutOfStock">Out Of Stock</label>
                    </div>
                </td>
            </tr>

            <br/>

            <tr class="row justify-content-start">
                <td class="col-4">Thumbnail Image: </td>
                <td class="col-4"><input type="file" name="tImage" /></td>
            </tr>

            @for($count=1;$count<=4;$count++)
                <tr class="row justify-content-start">
                    <td class="col-4">Add Detail Image{{$count}}:<br>(If exist) 
                        <input type="hidden" value="{{$count}}" name="dImage{{$count}}" readonly>
                    </td>
                    
                    <td class="col-4"><input type="file" name="di{{$count}}" /></td>
                </tr>
            @endfor
            
        </table>
    
        <br>
        <div class="row status justify-content-end col-8">
                <input class="btn btn-dark" type="submit" name="submit" value="Ok">
                <a class="btn btn-dark mx-4 " href="/vendorCenter " role="button ">Cancel</a>
        </div>
    </form>

<br>
<br>
<br>
<br> @endsection