@extends('layouts.layout') @section('content')

<style type="text/css">
    .mx-1 a{
        font-size: 1.5rem;
    }
</style>
<script type="text/javascript" >
function minus() {

    var num = parseInt($('#quantity').text());
    
    
    if (num > 1)

        $('#quantity').text(--num);

    $('#hidQ').val(num);
        
}

function plus() {
    var num = parseInt($('#quantity').text());
    $('#quantity').text(++num);

    $('#hidQ').val(num);
}

</script>
<div class="row">
    <div class="col-5">
        <img class="card-img-top" width="400" height="480" src="/imgs/{{$product->tImage}}" alt="">
    </div>
    <div class="col-7 mt-4">
        <div class="mx-4 px-4">
            <p class="h3"><strong>Brand : </strong>{{$product->brand}}</p>
            <p class="h3"><strong>Name : </strong>{{$product->productName}}</p>
            <p class="h3"><strong>Price : </strong>{{$product->price}}</p>
            <p class="h3"><strong>Texture : </strong>{{$product->texture}}</p>
            <p class="h3"><strong>Shades : </strong>{{$product->shades}}</p>
            <br>
            @if($avg)
                <svg viewBox="0 0 32 32" width="30px" height="30px" class="css-12vz1s9" data-comp="IconStar Icon Box" style="float:left">
                    <path d="M16 0l4.9 10.5L32 12.2l-8 8.2L25.9 32 16 26.5 6.1 32 8 20.4l-8-8.2 11.1-1.7L16 0z"></path>
                </svg>
                <h4>{{$avg}}</h4>
                @else
                <h3>This product has not been rated yet.</h3>
            @endif
            <br>
            <br>
            <div class="row justify-content-between mx-1">



                <form method="post" action="{{ route('shopping_carts.store') }}">
                            {{csrf_field()}}

                            <div class="form-group" type="hidden">
                                <input   id="hidP"
                                         name="productID"
                                         class="form-control"
                                         type="hidden"
                                         value="{{$product->productID}}"
                                         ></input>
                            </div>


                    
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a id="minusBtn" class="btn btn-outline-dark" href="#" role="button" onclick="minus()">-</a>
                            </li>
                            <li class="page-item">
                                <a id="quantity" name="quantity" class="btn btn-outline-dark form-control" role="button" value="1">1</a>
                            </li>
                            <li class="page-item">
                                <a id="plusBtn" class="btn btn-outline-dark" href="#" role="button" onclick="plus()">+</a>
                            </li>
                        </ul>
                    </nav>
                    </div>
                    <div class="form-group">
                        <input id="hidQ" name="quantityS" class="form-control" type="hidden" value="1"></input>
                    <div>
                        
                        <div class="form-group">   
                            <input class="btn btn-dark pull-right" href="#" role="button" type="submit" value="Add To Cart"></input>
                        </div>
                    </div>
                </form>


                
            </div>
        </div>
    </div>
</div>
<div style="position: relative;" class="justify-content-center pb-5 my-5">
    <hr style="position: absolute;width: 100%;border-top: 4px solid gray;top: 8px;">
    <div style="position: absolute;font-size: 2rem;background-color: white;left:40%;">Detail Images</div>
</div>
<div class="row">
    @foreach ($dImages as $img)
    <div class="col-8 mx-auto">
        <img class="card-img-top" width="" height="" src="/imgs/{{$img->dImage}}" alt="">
    </div>
    @endforeach
</div>
<div style="position: relative;" class="justify-content-center pb-5 my-5">
    <hr style="position: absolute;width: 100%;border-top: 4px solid gray;top: 8px;">
    <div style="position: absolute;font-size: 2rem;background-color: white;left:45%;">Reviews</div>

    <br>
    <br>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1" id="logout">
        <div class="page-header">
            <h2 class="reviews">Leave your comment</h2>
        </div>
        <div class="comment-tabs"> 
            @foreach($product_rate as $rate)
                @foreach($product_review as $review)
                    @if($rate->customerID == $review->customerID and $rate->PONum == $review->PONum)
            <div class="tab-content">
                <div class="tab-pane active" id="comments-logout">                
                    <ul class="media-list">
                      <li class="media">
                        <div class="media-body">
                            <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">{{$rate->name}}</h4>
                              <h6 class="media-heading text-uppercase reviews">{{$review->created_at}}</h6>
                            <svg viewBox="0 0 32 32" width="20px" height="20px" class="css-12vz1s9" data-comp="IconStar Icon Box" style="float:left">
                                <path d="M16 0l4.9 10.5L32 12.2l-8 8.2L25.9 32 16 26.5 6.1 32 8 20.4l-8-8.2 11.1-1.7L16 0z"></path>
                            </svg>
                            <h4>{{$rate->rate}}</h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li class="dd"></li>
                              </ul>
                              <p class="media-comment">
                                {{$review->reviews}}
                              </p>
                            </div>
                        </div>
                     </li>
                    </ul>
                </div>
            </div>
            <hr>
                    @endif
                @endforeach
            @endforeach
        </div>
            

                     





</div>
@endsection