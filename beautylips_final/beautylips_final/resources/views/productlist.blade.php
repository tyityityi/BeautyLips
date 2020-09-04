@extends('layouts.layout') @section('content')
<style type="text/css">
.filter a {
    font-size: 1.2rem;
    margin: 2px;
}
</style>
<div class="row">
    <div class="col-4">
        <img class="d-block w-100" style="overflow:hidden" src="/imgs/product list page/product list pic.png">
    </div>
    <div class="col-8"> <img class="d-block w-100" height="" style="overflow:hidden" src="/imgs/product list page/product list text.png">
    </div>
</div>
<hr>
<div class="row">
    <div class="col-3 filter">
        <div class="p-4 m-4">
            @if(strpos(url()->full(), 'order') !== false) @if(strpos(url()->full(), 'order=decrease') !== false)
            <p><strong><a href="{{str_replace('increase','decrease',url()->full())}}">Price from large to small</a></strong></p>
            @else
            <p><a href="{{str_replace('increase','decrease',url()->full())}}">Price from large to small</a></p>
            @endif @if(strpos(url()->full(), 'order=increase') !== false)
            <p><strong><a href="{{str_replace('decrease','increase',url()->full())}}">Price from small to large</a></strong></p>
            @else
            <p><a href="{{str_replace('decrease','increase',url()->full())}}">Price from small to large</a></p>
            @endif @else @if(strpos(url()->full(), '?') !== false) @if(strpos(url()->full(), 'order=decrease') !== false)
            <p><strong><a href="{{url()->full()}}&order=decrease">Price from large to small</a></strong></p>
            @else
            <p><a href="{{url()->full()}}&order=decrease">Price from large to small</a></p>
            @endif @if(strpos(url()->full(), 'order=increase') !== false)
            <p><strong><a href="{{url()->full()}}&order=increase">Price from small to large</a></strong></p>
            @else
            <p><a href="{{url()->full()}}&order=increase">Price from small to large</a></p>
            @endif @else @if(strpos(url()->full(), 'order=increase') !== false)
            <p><strong><a href="{{url()->full()}}?order=decrease">Price from large to small</a></strong></p>
            @else
            <p><a href="{{url()->full()}}?order=decrease">Price from large to small</a></p>
            @endif @if(strpos(url()->full(), 'order=increase') !== false)
            <p><strong><a href="{{url()->full()}}?order=increase">Price from small to large</a></strong></p>
            @else
            <p><a href="{{url()->full()}}?order=increase">Price from small to large</a></p>
            @endif @endif @endif @if(strpos(url()->full(), '/productlist/brand/') !== false)
            <h1>Brand</h1>
            <br>
            <ul class="list-unstyled">
                @if(strpos(url()->full(), '/3CE') !== false)
                <li><a class="btn btn-sm btn-dark" href="/productlist/brand/3CE">3CE</a></li>
                @else
                <li><a class="btn btn-sm btn-outline-secondary" href="/productlist/brand/3CE">3CE</a></li>
                @endif @if(strpos(url()->full(), '/Charlotte%20Tilbury') !== false)
                <li><a class="btn btn-sm btn-dark" href="/productlist/brand/Charlotte Tilbury">Charlotte Tibury</a></li>
                @else
                <li><a class="btn btn-sm btn-outline-secondary" href="/productlist/brand/Charlotte Tilbury">Charlotte Tibury</a></li>
                @endif @if(strpos(url()->full(), '/Huda%20Beauty') !== false)
                <li><a class="btn btn-sm btn-dark" href="/productlist/brand/Huda Beauty">Huda Beauty</a></li>
                @else
                <li><a class="btn btn-sm btn-outline-secondary" href="/productlist/brand/Huda Beauty">Huda Beauty</a></li>
                @endif @if(strpos(url()->full(), '/SHISEIDO') !== false)
                <li><a class="btn btn-sm btn-dark" href="/productlist/brand/SHISEIDO">SHISEIDO</a></li>
                @else
                <li><a class="btn btn-sm btn-outline-secondary" href="/productlist/brand/SHISEIDO">SHISEIDO</a></li>
                @endif @if(strpos(url()->full(), '/Kevyn%20Aucoin') !== false)
                <li><a class="btn btn-sm btn-dark" href="/productlist/brand/Kevyn Aucoin">Kevyn Aucoin</a></li>
                @else
                <li><a class="btn btn-sm btn-outline-secondary" href="/productlist/brand/Kevyn Aucoin">Kevyn Aucoin</a></li>
                @endif @if(strpos(url()->full(), '/TOM%20FORD') !== false)
                <li><a class="btn btn-sm btn-dark" href="/productlist/brand/TOM FORD">TOM FORD</a></li>
                @else
                <li><a class="btn btn-sm btn-outline-secondary" href="/productlist/brand/TOM FORD">TOM FORD</a></li>
                @endif
            </ul>
            @endif @if(strpos(url()->full(), '/productlist/lip/') !== false)
            <h1>Lips</h1>
            <br>
            <ul class="list-unstyled">
                @if(strpos(url()->full(), '/Lipstick') !== false)
                <li><a class="btn btn-sm btn-dark" href="/productlist/lip/Lipstick">Lipstick</a></li>
                @else
                <li><a class="btn btn-sm btn-outline-secondary" href="/productlist/lip/Lipstick">Lipstick</a></li>
                @endif @if(strpos(url()->full(), '/Lip%20Linear') !== false)
                <li><a class="btn btn-sm btn-dark" href="/productlist/lip/Lip Linear">Lip Linear</a></li>
                @else
                <li><a class="btn btn-sm btn-outline-secondary" href="/productlist/lip/Lip Linear">Lip Linear</a></li>
                @endif @if(strpos(url()->full(), '/Liquid%20Lipstick') !== false)
                <li><a class="btn btn-sm btn-dark" href="/productlist/lip/Liquid Lipstick">Liquid Lipstick</a></li>
                @else
                <li><a class="btn btn-sm btn-outline-secondary" href="/productlist/lip/Liquid Lipstick">Liquid Lipstick</a></li>
                @endif @if(strpos(url()->full(), '/Lip%20Gloss') !== false)
                <li><a class="btn btn-sm btn-dark" href="/productlist/lip/Lip Gloss">Lip Gloss</a></li>
                @else
                <li><a class="btn btn-sm btn-outline-secondary" href="/productlist/lip/Lip Gloss">Lip Gloss</a></li>
                @endif
            </ul>
            @endif @if(strpos(url()->full(), '/productlist/texture/') !== false)
            <h1>Texture</h1>
            <br>
            <ul class="list-unstyled">
                @if(strpos(url()->full(), '/Matte') !== false)
                <li><a class="btn btn-sm btn-dark" href="/productlist/texture/Matte">Matte</a></li>
                @else
                <li><a class="btn btn-sm btn-outline-secondary" href="/productlist/texture/Matte">Matte</a></li>
                @endif @if(strpos(url()->full(), '/Cream') !== false)
                <li><a class="btn btn-sm btn-dark" href="/productlist//texture/Cream">Cream</a></li>
                @else
                <li><a class="btn btn-sm btn-outline-secondary" href="/productlist/texture/Cream">Cream</a></li>
                @endif @if(strpos(url()->full(), '/Satin') !== false)
                <li><a class="btn btn-sm btn-dark" href="/productlist/texture/Satin">Satin</a></li>
                @else
                <li><a class="btn btn-sm btn-outline-secondary" href="/productlist/texture/Satin">Satin</a></li>
                @endif @if(strpos(url()->full(), '/Sheer') !== false)
                <li><a class="btn btn-sm btn-dark" href="/productlist/texture/Sheer">Sheer</a></li>
                @else
                <li><a class="btn btn-sm btn-outline-secondary" href="/productlist/texture/Sheer">Sheer</a></li>
                @endif
            </ul>
            @endif
        </div>
    </div>
    <div class="col-9">
        <div class="row justify-content-start">
            @if(strpos(url()->full(), 'search') !== false)
            <h3>Search results for <strong><mark>{{$searchedBy}}</mark></strong></h3> @endif
        </div>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4 my-4">
                <div class="card box-shadow">
                    <div class="card-body">
                        <a href="/productdetail/{{$product->productID}}">
                            <img class="card-img-top" width="125" height="325" src="/imgs/{{$product->tImage}}" alt="">
                            <p class="card-text text-center mb-0">{{$product->brand}}</p>
                            <p class="card-text text-center mb-0">{{$product->productName}}</p>
                            <p class="card-text text-center mb-0">#{{$product->shades}}</p>
                            <p class="card-text text-center mb-0">${{$product->price}}</p>
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
    @if($products->total()>9)
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
                <input type="number" id="goto" class="form-control" value="{{$products->currentPage()}}" style="width: 100px !important;" min=1 max={{($products->total()+8)/9}}>
            </li>
            <li class="page-item"><a class="page-link" onclick="fungoto(this);">Ok</a></li>
            @else
            <li class="page-item"><a class="page-link" href="{{$products->previousPageUrl()}}">Previous</a></li>
            <li class="page-item"><a class="page-link" href="{{$products->nextPageUrl()}}">Next</a></li>
            <li class="page-item">
                <input type="number" id="goto" class="form-control mx-2" value="{{$products->currentPage()}}" style="width: 100px !important;" min=1 max={{($products->total()+8)/9}}>
            </li>
            <li class="page-item"><a class="page-link" onclick="fungoto(this);">Ok</a></li>
            @endif
        </ul>
    </nav>
    @endif
</div>
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
<br> @endsection