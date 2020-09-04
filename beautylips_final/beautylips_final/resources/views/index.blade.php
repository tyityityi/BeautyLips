@extends('layouts.layout') @section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" height="464px" style="overflow:hidden" src="/imgs/cover/cover.jpg">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" height="464px" style="overflow:hidden" src="/imgs/cover/cover2.jpg">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" height="464px" style="overflow:hidden" src="/imgs/cover/cover3.jpg">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" height="464px" style="overflow:hidden" src="/imgs/cover/cover4.jpg">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div style="position: relative;" class="justify-content-center pb-5 my-5">
    <hr style="position: absolute;width: 100%;border-top: 4px solid gray;top: 8px;">
    <div style="position: absolute;font-size: 2rem;background-color: white;left:40%;">Recommendation</div>
</div>
<div class="row">
    @foreach ($products as $product)
    <div class="col-3 py-4">
        <div class="card box-shadow">
            <div class="card-body">
                <a href="/productdetail/{{$product->productID}}">
                    <img class="card-img-top" width="250" height="300" src="/imgs/{{$product->tImage}}" alt="">
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
@endsection