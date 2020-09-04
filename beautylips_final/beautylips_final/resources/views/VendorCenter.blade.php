@extends('layouts.layoutForVendor') @section('content')
<div class="row justify-content-start alert alert-light h3">
{{$searchedBy}} &nbsp;<strong><span class="badge badge-secondary">{{$search}}</span></strong>
</div>
<div class="row">
    @foreach ($products as $product)
    <div class="col-3 py-4">
        <div class="card box-shadow">
            <p class="card-text text-center mb-0">Product ID: {{$product->productID}}</p>
            <img class="card-img-top" width="250" height="300" src="/imgs/{{$product->tImage}}" alt="">
            <div class="card-body">
            <p class="card-text text-center mb-0">{{$product->brand}}</p>
            <p class="card-text text-center mb-0">{{$product->productName}}</p>
            <p class="card-text text-center mb-0">#{{$product->shades}}</p>
            <p class="card-text text-center mb-0">${{$product->price}}</p>
            <a href="/productedit/{{$product->productID}}">
                <p class="card-text text-center mb-0">Edit</p>
            </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<br>
<div class="row justify-content-center">
    @if($products->total()>8)
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
                <input type="number" id="goto" class="form-control" value="{{$products->currentPage()}}" style="width: 100px !important;" min=1 max={{($products->total()+7)/8}}>
            </li>
            <li class="page-item"><a class="page-link" onclick="fungoto(this);">Ok</a></li>
            @else
            <li class="page-item"><a class="page-link" href="{{$products->previousPageUrl()}}">Previous</a></li>
            <li class="page-item"><a class="page-link" href="{{$products->nextPageUrl()}}">Next</a></li>
            <li class="page-item">
                <input type="number" id="goto" class="form-control mx-2" value="{{$products->currentPage()}}" style="width: 100px !important;" min=1 max={{($products->total()+7)/8}}>
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