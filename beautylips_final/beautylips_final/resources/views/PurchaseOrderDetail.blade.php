@extends('layouts.layout') @section('content')
<style>
table {
    font-size: 30px;
}

td {
    padding-right: 20px;
}

td:first-child {
    text-align: right;
}
</style>

<br>
<div style="border: solid;padding: 40px">
    <table>
        <tr>
            <td>Date: </td>
            <td><strong>{{$purchaseorder->purchaseDate}}</strong>
            </td>
        </tr>
        <tr>
            <td>P.O Number: </td>
            <td><strong>{{$purchaseorder->PONum}}</strong>
            </td>
        </tr>
        <tr>
            <td>Customer Name: </td>
            <td><strong>{{$customer->name}}</strong>
            </td>
        </tr>
        <tr>
            <td>Shipping Address: </td>
            <td><strong>{{$customer->shippingAdr}}</strong>
            </td>
        </tr>
        <tr>
            <td>Status: </td>
            <td><strong>{{$purchaseorder->status}}</strong>
            </td>
        </tr>
        <tr id="shipped">
            <td>Shipment date: </td>
            <td><strong>{{$purchaseorder->shipping_time}}</strong>
            </td>
        </tr>
        <tr class="cancel">
            <td>Cancel Date: </td>
            <td><strong>{{$purchaseorder->cancel_time}}</strong></td>
        </tr>
        <tr class="cancel">
            <td>Cancel By: </td>
            <td><strong>{{$purchaseorder->cancel_by}}</strong></td>
        </tr>
        <tr>
            <td>Total Amount: </td>
            <td><strong>${{$TotalA}}</strong>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table class="table table-bordered text-center" style="font-size: 1.4rem;">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>

                @if($purchaseorder->status=="shipped")
                <th scope="col">Comment</th>
                @endif
                
            </tr>
        </thead>
        <tbody>

            @foreach($purchaseA as $purchase)
            <tr>
                <td>
                    <div class="row">
                        <div class="col-4">
                            <img src="\imgs\{{$purchase->tImage}}" class="img-thumbnail" width="100px" style="overflow:hidden;height: 100px !important"></div>
                        <div class="col text-left">
                            <p class="mb-0 ">{{$purchase->brand}}</p>
                            <p class="mb-0 ">{{$purchase->productName}}</p>
                        </div>
                    </div>
                </td>
                <td>${{$purchase->price}}</td>
                <td>{{$purchase->quantity}}</td>
                
                    @if($purchaseorder->status=="shipped")
                    <td>
                        @if($purchase->comment != 1 )
                        <div class="text-right" style="font-size: 1.2rem">
                        <input class="btn btn-dark mx-4" value="Comment the products" onclick="
                        document.getElementById('comment-form{{$purchase->productID}}').submit();
                        "> 
                        </div>

                        <form id="comment-form{{$purchase->productID}}"  action="/product_reviews/{{$purchaseorder->PONum}}{{$purchase->productID}}" method="POST">
                                        {{ csrf_field() }}
                                    <div class="form-group" type="hidden">
                                        <input      id="pon"
                                                    name="PON"
                                                    class="form-control"
                                                    type="hidden"
                                                    value="{{$purchaseorder->PONum}}"
                                            ></input>
                                    </div>

                                    <div class="form-group" type="hidden">
                                        <input      id="productID"
                                                    name="productID"
                                                    class="form-control"
                                                    type="hidden"
                                                    value="{{$purchase->productID}}"
                                            ></input>
                                    </div>

                        </form>
                        @else
                        <p> Product already commented</p>
                        @endif
                        </td>
                    @endif
               
            </tr>
            @endforeach
            @if($purchaseorder->status!="shipped")
            <tr>
                <td colspan="4">
                    <div class="text-right" style="font-size: 1.2rem">
                        <form id="cancelForm" action="/purchaseOrderDetail/{{$purchaseorder->PONum}}" method="post">
                            
                            
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <input id="cancelB" type="submit" class="btn btn-dark mx-4" value="Cancel the order">
                        </form>
                        
                    </div>
                </td>
                
            </tr>
            @endif
    </table>
</div>
<br>
<br>
<script type="text/javascript" language="javascript">
$('#cancelB').on('click', function(event) {
    if(confirm('Are you sure you want to cancel the order?')){
        document.getElementById('cancelForm').submit();
    }
});

if ("{{$purchaseorder->status}}" == "shipped") {} else { document.getElementById("shipped").style.display = "none"; }

if ("{{$purchaseorder->status}}" == "cancelled") {} else { $('.cancel').attr('hidden', 'true'); }

if ("{{$purchaseorder->status}}" == "pending" || "{{$purchaseorder->status}}" == "hold") {} else { document.getElementById("cancelB").style.display = "none"; }
</script>
@endsection