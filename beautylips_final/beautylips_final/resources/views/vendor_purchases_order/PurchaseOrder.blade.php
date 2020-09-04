<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BeautyLips</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar fixed-top bg-white container px-0">
        <div class="row w-100 justify-content-end">
            <a class="btn btn-sm btn-outline-secondary" href="#">Vendor</a>
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
        <div class="row d-flex justify-content-between align-items-center w-100 py-2">
            <div class="col-9 mb-4">
                <a class="text-dark" href="/vendorCenter" style="text-decoration: none"><h1 class="display-3">Beauty Lips Vendor Center</a>
            </div>
            <div class="col-3 row justify-content-end">
                <a class="btn btn-outline-secondary" href="/vendorPurchaseOrder">Purchase Order</a>
                <a class="btn btn-outline-secondary" href="/productadding/index">Add a Product</a>
            </div>
            <div class="border-top border-bottom w-100">
                <nav class="nav d-flex justify-content-between">
                    <div class="btn-group col-2 p-0">
                        <button class="btn btn-light btn-lg dropdown-toggle w-100" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Brand
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/vendorCenter/Brand/3CE">3CE</a>
                            <a class="dropdown-item" href="/vendorCenter/Brand/Charlotte Tilbury">Charlotte Tilbury</a>
                            <a class="dropdown-item" href="/vendorCenter/Brand/Huda Beauty">Huda Beauty</a>
                            <a class="dropdown-item" href="/vendorCenter/Brand/SHISEIDO">SHISEIDO</a>
                            <a class="dropdown-item" href="/vendorCenter/Brand/Kevyn Aucoin">Kevyn Aucoin</a>
                            <a class="dropdown-item" href="/vendorCenter/Brand/TOM FORD">TOM FORD</a>
                        </div>
                    </div>
                    <div class="btn-group col-2 p-0">
                        <button class="btn btn-light btn-lg dropdown-toggle w-100" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Lip
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/vendorCenter/Lip/lipstick">Lipstick</a>
                            <a class="dropdown-item" href="/vendorCenter/Lip/lip linear">Lip Linear</a>
                            <a class="dropdown-item" href="/vendorCenter/Lip/liquid lipstick">Liquid Lipstick</a>
                            <a class="dropdown-item" href="/vendorCenter/Lip/lip gloss">Lip Gloss</a>
                        </div>
                    </div>
                    <div class="btn-group col-2 p-0">
                        <button class="btn btn-light btn-lg dropdown-toggle w-100" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Texture
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/vendorCenter/Texture/matte">Matte</a>
                            <a class="dropdown-item" href="/vendorCenter/Texture/cream">Cream</a>
                            <a class="dropdown-item" href="/vendorCenter/Texture/satin">Satin</a>
                            <a class="dropdown-item" href="/vendorCenter/Texture/sheer">Sheer</a>
                        </div>
                    </div>
                    <div class="col-6 row justify-content-end">
                        <div class="row">
                            <form id="Search" class="form-inline mt-2 mt-md-0" method="get" action="/vendorPurchaseOrder">
                                <input class="form-control mr-sm-2 col-9" type="text" name="search" placeholder="Search by PONum" aria-label="Search">
                                <a class="text-dark" href="#" onclick="document.getElementById('Search').submit()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-2">
                                        <circle cx="10.5" cy="10.5" r="7.5"></circle>
                                        <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
                                    </svg>
                                </a>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
    </nav>
    <div class="container" style="margin-top: 15rem;">
        <br>
        <div class="row">
            <div class="col-3">
                <h4>Filter</h4>
                <div class="custom-control custom-checkbox" style="font-size: 1.2rem">
                    <input name='PendingCheck' type="checkbox" class="custom-control-input" id="PendingCheck">
                    <label class="custom-control-label" for="PendingCheck">pending orders</label>
                </div>
                <div class="custom-control custom-checkbox" style="font-size: 1.2rem">
                    <input name='HoldCheck' type="checkbox" class="custom-control-input" id="HoldCheck">
                    <label class="custom-control-label" for="HoldCheck">orders on hold</label>
                </div>
                <div class="custom-control custom-checkbox" style="font-size: 1.2rem">
                    <input type="checkbox" class="custom-control-input" id="PastCheck">
                    <label class="custom-control-label" for="PastCheck">Past Purchase</label>
                </div>
                <div class="custom-control custom-checkbox" style="font-size: 1.2rem">
                    <a class="btn btn-dark mx-4 " href="# " role="button" id="Filter">Filter</a>
                </div>
                <script>
                $('#Filter').on('click', function(event) {
                    if (document.getElementById("PendingCheck").checked == true && document.getElementById("HoldCheck").checked == false && document.getElementById("PastCheck").checked == false) {
                        var href = '/vendorPurchaseOrder/status/pendingtP';
                    } else if (document.getElementById("PendingCheck").checked == false && document.getElementById("HoldCheck").checked == true && document.getElementById("PastCheck").checked == false) {
                        var href = '/vendorPurchaseOrder/status/holdP';
                    } else if (document.getElementById("PendingCheck").checked == false && document.getElementById("HoldCheck").checked == false && document.getElementById("PastCheck").checked == true) {
                        var href = '/vendorPurchaseOrder/status/pastP';
                    };
                    // change the href attribute for the element ID = download to the value stored in 'c'.
                    $('#Filter').attr("href", href);
                });
                </script>
            </div>
            <div class="col-9">
                <table class="table table-bordered text-center" style="font-size: 1.4rem;">
                    
                    <tbody>
                        <div class="row">
                        </div>
                        @php $i = 0; @endphp@foreach($purchases as $ps)
                        <tr>
                            <td colspan="4">
                                <div class="row">
                                    <div class="h4 col-5"> Customer Name:
                                        <ins>{{$ps->first()->name}}</ins>
                                    </div>
                                    <div class="h4 col-5">
                                        Date:
                                        <ins>{{$ps->first()->purchaseDate}}</ins>
                                    </div>
                                    
                                    <div class="h4 col-2" style="font-size: 1.2rem">
                        <a class="btn btn-dark mx-4 " href="/VendorPurchaseOrderDetail/{{$ps->first()->PONum}}" role="button" id="DetailB">Detail</a>
                    </div>
                                </div>
                                <div class="row">
                                    <div class="h4 col-4"> P.O Number:
                                        <ins>{{$ps->first()->PONum}}</ins>
                                    </div>
                                    <div class="h4 col-4"> Total amount:
                                        <ins>${{$TotalA[$i]}}</ins>
                                    </div>
                                    <div class="h4 col-4"> Status:
                                        <ins>{{$ps->first()->status}}</ins>
                                    </div>

                                    

                                </div>
                            </td>
                        </tr>
                        
            <tr>
                <td colspan="4"></td>
            </tr>
        </div>
        @php $i += 1; @endphp @endforeach
        </tbody>
        </table>
    </div>
    </div>
    <br>
    </div>
    <hr>
    <footer class="my-2 py-2 text-muted text-center">
        <p class="mb-1">&copy; 2018 Jack Tim Cindy Lee Meng</p>
    </footer>
</body>

</html>