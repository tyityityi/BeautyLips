@extends('layouts.layoutForVendor') @section('content')
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
        <tr class="shipped" hidden="true">
            <td>Shipment date: </td>
            <td><strong>{{$purchaseorder->shipping_time}}</strong></td>
        </tr>
        <tr class="cancel" hidden="true">
            <td>Cancel Date: </td>
            <td><strong>{{$purchaseorder->cancel_time}}</strong></td>
        </tr>
        <tr class="cancel" hidden="true">
            <td>Cancel By: </td>
            <td><strong>{{$purchaseorder->cancel_by}}</strong></td>
        </tr>
        <tr>
            <td>Total Amount: </td>
            <td><strong>${{$TotalA}}</strong></td>
        </tr>
</div>
<div class="col-9">
    <table class="table table-bordered text-center" style="font-size: 1.4rem;">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Availability</th>
            </tr>
        </thead>
        <tbody>
            <div class="row">
            </div>
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

                @if( $purchase->out_of_stock ==1)
                <td style="color:red;" >Out of stock</td>
                @else
                <td>In stock</td>
                @endif
               
            </tr>
            @endforeach
            </tr>
            <tr>
                <td colspan="5">
                    <div class="d-flex justify-content-end" style="font-size: 1.2rem">
                        <form id="processForm" action="/VendorPurchaseOrderDetail/{{$purchaseorder->PONum}}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                            <input type="hidden" id="processFormAction" name="action" value="">
                            
                            <input id="shippingbtn" type="submit" class="btn btn-dark mx-4" value="Shipping the order">
                            <input id="holdbtn" type="submit" class="btn btn-dark mx-4" value="Hold the order">
                            <input id="cancelbtn" type="submit" class="btn btn-dark mx-4" value="Cancel the order">
                        </form>
                    </div>
                </td>
            </tr>
    </table>
</div>
<br>
<br>
<script type="text/javascript" language="javascript">
$('#shippingbtn').on('click', function(event) {
    if (confirm('Are you sure you want to ship the order?')) {
        document.getElementById('processFormAction').value = "shipping";
        document.getElementById('processForm').submit();
    }
});

$('#cancelbtn').on('click', function(event) {
    if (confirm('Are you sure you want to cancel the order?')) {
        document.getElementById('processFormAction').value = "cancel";
        document.getElementById('processForm').submit();
    }
});

$('#holdbtn').on('click', function(event) {
    if (confirm('Are you sure you want to hold the order?')) {
        console.log('9');
        document.getElementById('processFormAction').value = "hold";
        document.getElementById('processForm').submit();
        console.log('8');
    }
});



if ("{{$purchaseorder->status}}" == "shipped") {
    $('.shipped').removeAttr('hidden');
    document.getElementById("shippingbtn").style.display = "none";
    document.getElementById("holdbtn").style.display = "none";
    document.getElementById("cancelbtn").style.display = "none";
}

if ("{{$purchaseorder->status}}" == "cancelled") {
    $('.cancel').removeAttr('hidden');
    document.getElementById("shippingbtn").style.display = "none";
    document.getElementById("holdbtn").style.display = "none";
    document.getElementById("cancelbtn").style.display = "none";
}

if (("{{$purchaseorder->status}}" == "pending") && ("{{$outOfStock}}" == "1") ) {
    document.getElementById("shippingbtn").style.display = "none";
}
if ("{{$purchaseorder->status}}" == "hold") {
    document.getElementById("holdbtn").style.display = "none";

}
if (("{{$purchaseorder->status}}" == "hold") && ("{{$outOfStock}}" == "1") ) {
    document.getElementById("shippingbtn").style.display = "none";
}
</script>
@endsection