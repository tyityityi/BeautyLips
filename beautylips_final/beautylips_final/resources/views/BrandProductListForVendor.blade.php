@extends('layouts.layoutForVendor') @section('content')
<style type="text/css">
    .filter a{
        font-size: 1.2rem;
        margin: 2px;
    }


</style>
<hr>
<div class="row">
    <div class="col-3 filter">
        <div class="p-4 m-4">
            <h1>Brand</h1>
            <br>
            <ul class="list-unstyled">
                <li><a class="btn btn-sm btn-outline-secondary" href="/vendorCenter/Brand/3CE">3CE</a></li>
                <li><a class="btn btn-sm btn-outline-secondary" href="/vendorCenter/Brand/Charlotte Tilbury">Charlotte Tilbury</a></li>
                <li><a class="btn btn-sm btn-outline-secondary" href="/vendorCenter/Brand/Huda Beauty">Huda Beauty</a></li>
                <li><a class="btn btn-sm btn-outline-secondary" href="/vendorCenter/Brand/SHISEIDO">SHISEIDO</a></li>
                <li><a class="btn btn-sm btn-outline-secondary" href="/vendorCenter/Brand/Kevyn Aucoin">Kevyn Aucoin</a></li>
                <li><a class="btn btn-sm btn-outline-secondary" href="/vendorCenter/Brand/TOM FORD">TOM FORD</a></li>   
            </ul>
        </div>
    </div>
    <div class="col-9">
        <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4 my-4">
            <div class="card box-shadow">
                <p class="card-text text-center mb-0">Product ID: {{$product->productID}}</p>
                <img class="card-img-top" width="250" height="300" src="/imgs/{{$product->tImage}}" alt="">
                <div class="card-body">
                <p class="card-text text-center mb-0">{{$product->brand}}</p>
                <p class="card-text text-center mb-0">{{$product->productName}}</p>
                <p class="card-text text-center mb-0">${{$product->price}}</p>
                <p class="card-text text-center mb-0">#{{$product->shades}}</p>
                <a href="/productedit/{{$product->productID}}">
                    <p class="card-text text-center mb-0">Edit</p>
                </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
</div>
<br>
<div class="row justify-content-center">
    @if($products->total()>6)
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            @if($url!="") @if (strpos($products->previousPageUrl(), 'page') !== false)
            <li class="page-item"><a class="page-link" href="{{$products->previousPageUrl()}}&{{$url}}">Previous</a></li>
            @else
            <li class="page-item"><a class="page-link" href="">Previous</a></li>
            @endif @if (strpos($products->nextPageUrl(), 'page') !== false)
            <li class="page-item"><a class="page-link" href="{{$products->nextPageUrl()}}&{{$url}}">Next</a></li>
            @else
            <li class="page-item"><a class="page-link" href="">Next</a></li>
            @endif
            <li class="page-item">
                <input type="number" id="goto" class="form-control" value="{{$products->currentPage()}}" style="width: 100px !important;" min=1 max={{($products->total()+5)/6}}>
            </li>
            <li class="page-item"><a class="page-link" onclick="fungoto(this);">Ok</a></li>
            @else
            <li class="page-item"><a class="page-link" href="{{$products->previousPageUrl()}}">Previous</a></li>
            <li class="page-item"><a class="page-link" href="{{$products->nextPageUrl()}}">Next</a></li>
            <li class="page-item">
                <input type="number" id="goto" class="form-control mx-2" value="{{$products->currentPage()}}" style="width: 100px !important;" min=1 max={{($products->total()+5)/6}}>
            </li>
            <li class="page-item"><a class="page-link" onclick="fungoto(this);">Ok</a></li>
            @endif
        </ul>
    </nav>
    @endif
</div>
<br>
@endsection
<script type="text/javascript">
function fungoto(elem) {
    if (document.getElementById('goto').value < document.getElementById('goto').max && document.getElementById('goto').value > document.getElementById('goto').min) {

        url1 = document.URL;
        if (url1.includes("page=")) {
            replacetext = 'page=' + document.getElementById('goto').value;
            href = url1.replace(/page=\d+/, replacetext);
        } else {
            if (url1.includes("?"))
                url1 = url1 + "&page=" + document.getElementById('goto').value
            else {
                url1 = url1 + "?page=" + document.getElementById('goto').value
            }
            href = url1
        }
    } else {
        href = "";
    }
    elem.href = href;
}
</script>