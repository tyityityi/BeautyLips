@extends('layouts.layout') @section('content')
<style>
table {
    font-size: 30px;
}

td {
    padding-right: 20px;
}
</style>
<br>
<div style="border: solid;padding: 40px">
    <table>
        <tr>
            <td>Date: </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>P.O Number: </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>Customer Name: </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>Shipping Address: </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>Status: </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>Shipment date / Canncel Date: </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>Total Amount: </td>
            <td>
            </td>
        </tr>
    </table>
    <br>
    <div class="row">
        <a class="btn btn-dark mx-4" href="#" role="button">Hold</a>
        <a class="btn btn-dark mx-4" href="#" role="button">Shipped</a>
        <a class="btn btn-dark mx-4" href="#" role="button">Cancel</a>
    </div>
</div>
<br>
<br> @endsection