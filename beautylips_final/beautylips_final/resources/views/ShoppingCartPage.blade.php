@extends('layouts.layout') @section('content')
<script type="text/javascript">
function minus() {
    var num = parseInt($('#quantity').text());
    if (num > 1)
        $('#quantity').text(num - 1);
}

function plus() {
    var num = parseInt($('#quantity').text());
    $('#quantity').text(num + 1);
}
</script>
<style type="text/css">
.col p {
    font-size: 1.2rem;
}
</style>
<div class="mx-4">
    <h1>My Basket</h1>
    <hr>
    <div class="row">
        <div class="col-8">
            
            <div style="border: solid; padding: 10px;">
                <h3>Items in Basket</h3>
                <div class="row p-4" style="border:solid;margin: 20px;">
                    <div class="col-3"><img src="\imgs\3CE_matte_$13\116\mood-recipe_116_timage.jpg" class="img-thumbnail" width="150px" style="overflow:hidden"></div>
                    <div class="col-4 text-left">
                        <p>3CE</p>
                        <p>Mood Recipe</p>
                        <p>matte</p>
                        <p>116</p>
                    </div>
                    <div class="col mt-4">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a id="minusBtn" class="btn btn-outline-dark" href="#" role="button" onclick="minus()">-</a>
                                </li>
                                <li class="page-item">
                                    <a id="quantity" class="btn btn-outline-dark" href="#" role="button">1</a>
                                </li>
                                <li class="page-item">
                                    <a id="plusBtn" class="btn btn-outline-dark" href="#" role="button" onclick="plus()">+</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="d-flex align-items-end flex-column">
                        <p class="text-right display-4">$13</p>
                        <a class="btn btn-dark mt-auto" href="#" role="button">Remove</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="mx-2" style="border: solid; padding: 10px;">
                <h5><ins>Order Summary</ins></h5>

                <hr>
                <a class="btn btn-dark mx-auto justify-content-center d-flex" href="#" role="button" data-toggle="modal" data-target="#exampleModalCenter">Checkout</a>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">!!!Are you Sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        The estimated total is 	$x, Still want to checkout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>
@endsection