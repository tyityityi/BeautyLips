<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BeautyLips</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
<script type="text/javascript">

        function getNotice() {
                $.ajax({
                type: 'GET',
                url: '/notification/get',
                success: function(data) {
                    if (data > 0) {
                        //$('#msg').removeAttr("hidden");
                        $('#msgNum').removeAttr("hidden");
                        $('#msgNum').text(data);
                    } else {
                        //$('#msg').attr("hidden", "hidden");
                        $('#msgNum').attr("hidden", "hidden");
                    }
                }
            });
        }

        self.setInterval("getNotice()",1000);

    </script>
    <nav class="navbar fixed-top bg-white container px-0">
        <div class="row w-100 justify-content-end">
            @guest
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('register') }}">Register</a>
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">Login in</a> @else
            <a class="btn btn-sm btn-outline-secondary" href="#">{{ Auth::user()->name }}</a>
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            @endguest
        </div>
        <div class="row d-flex justify-content-between align-items-center w-100 py-2">
            <div class="col-6 mb-4">
                <a class="text-dark" href="/" style="text-decoration: none"><h1 class="display-3">Beauty Lips</h1></a>
            </div>
            <div class="col-6 row justify-content-end">

            <div class="col-2">
                    <a class="" style="position: relative;" href="/notification">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40.000000pt" height="40.000000pt" viewBox="0 0 535.5 535.5" style="enable-background:new 0 0 535.5 535.5;" xml:space="preserve">
                            <g>
                                <g id="notifications-on">
                                    <path d="M142.8,53.55l-35.7-35.7C45.9,63.75,5.1,135.15,0,216.75h51C56.1,147.9,89.25,89.25,142.8,53.55z M484.5,216.75h51
            c-5.1-81.6-43.35-153-104.55-198.9l-35.7,35.7C446.25,89.25,479.4,147.9,484.5,216.75z M433.5,229.5
            c0-79.05-53.55-142.8-127.5-160.65V51c0-20.4-17.85-38.25-38.25-38.25c-20.4,0-38.25,17.85-38.25,38.25v17.85
            C155.55,86.7,102,150.45,102,229.5v140.25l-51,51v25.5h433.5v-25.5l-51-51V229.5z M267.75,522.75c2.55,0,7.65,0,10.2,0
            c17.85-2.55,30.6-15.3,35.7-30.6c2.55-5.101,5.1-12.75,5.1-20.4h-102C216.75,499.8,239.7,522.75,267.75,522.75z" />
                                </g>
                            </g>
                        </svg>
                        <p id="msgNum" style="position: absolute;top: -10px;right: 0px;font-size: 30px;color: red;font-weight: bold;" hidden="hidden"></p>
                    </a>
                </div>

                <div class="col-2">
                    <a class="" href="/purchaseOrder">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="40.000000pt" height="40.000000pt" viewBox="0 0 1600.000000 1600.000000" preserveAspectRatio="xMidYMid meet">
                            <metadata>
                                Created by potrace 1.15, written by Peter Selinger 2001-2017
                            </metadata>
                            <g transform="translate(0.000000,1600.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                <path d="M6039 15942 c-118 -31 -196 -77 -284 -166 -44 -45 -93 -104 -107
                                    -132 -33 -62 -2975 -8114 -2995 -8199 -21 -85 -13 -240 16 -325 78 -225 267
                                    -378 509 -411 222 -31 472 92 589 291 18 32 625 1678 1418 3850 762 2087 1388
                                    3796 1389 3798 5 5 7725 -1544 7732 -1551 11 -10 -522 -1665 -916 -2847 -689
                                    -2069 -1447 -4200 -1960 -5510 -465 -1189 -855 -1968 -1220 -2440 -88 -113
                                    -267 -299 -365 -380 -335 -274 -742 -404 -1215 -387 -394 15 -678 129 -932
                                    375 -191 185 -329 422 -431 737 -104 321 -149 648 -149 1081 l0 271 -3437
                                    1388 c-1890 763 -3441 1389 -3447 1392 -6 2 -24 -65 -47 -179 -116 -581 -127
                                    -1136 -31 -1607 93 -460 282 -870 561 -1216 172 -213 455 -462 693 -610 123
                                    -76 296 -164 401 -205 46 -18 1187 -532 2534 -1142 2993 -1357 2712 -1230
                                    2885 -1295 248 -93 562 -178 745 -203 44 -5 128 -17 186 -25 189 -26 316 -30
                                    387 -11 35 9 90 16 123 16 33 0 126 7 207 15 360 37 668 110 961 226 995 396
                                    1673 1229 2409 2959 696 1638 2122 5700 3332 9495 150 471 153 484 147 605
                                    -12 251 -170 461 -409 546 -21 7 -2067 417 -4546 910 -3163 630 -4531 898
                                    -4587 900 -53 2 -102 -3 -146 -14z" />
                                <path d="M7032 12608 c-221 -31 -404 -179 -490 -396 -24 -61 -26 -80 -27 -202
                                    0 -155 18 -225 84 -327 104 -161 257 -257 451 -283 41 -5 113 -17 160 -25 369
                                    -69 720 223 720 597 0 100 -14 166 -56 257 -59 129 -164 236 -289 295 -141 67
                                    -398 106 -553 84z" />
                                <path d="M8970 12035 c-221 -41 -410 -215 -476 -440 -21 -73 -24 -217 -5 -295
                                    30 -125 109 -249 211 -334 98 -80 129 -90 1475 -465 710 -198 1334 -371 1389
                                    -386 241 -66 451 -13 616 154 85 85 138 176 165 281 24 90 16 260 -15 349 -51
                                    145 -175 282 -315 347 -48 23 -479 144 -1365 384 -712 193 -1342 364 -1400
                                    380 -135 37 -188 42 -280 25z" />
                                <path d="M6175 10094 c-92 -22 -119 -32 -187 -66 -135 -69 -240 -194 -296
                                    -350 -22 -62 -26 -89 -25 -183 0 -91 4 -124 26 -190 70 -212 244 -362 482
                                    -415 50 -12 122 -28 160 -36 325 -73 662 156 722 489 35 195 -27 387 -172 533
                                    -79 80 -194 144 -292 164 -32 6 -98 20 -148 32 -89 19 -232 31 -270 22z" />
                                <path d="M7887 9534 c-312 -75 -515 -392 -453 -705 36 -179 157 -342 311 -421
                                    86 -44 2760 -923 2854 -939 106 -17 258 9 361 61 201 102 329 315 330 545 0
                                    98 -19 176 -67 275 -47 99 -168 221 -263 266 -75 36 -2752 900 -2850 920 -82
                                    17 -149 16 -223 -2z" />
                                <path d="M5185 7760 c-179 -36 -344 -166 -424 -333 -47 -98 -61 -161 -61 -270
                                    0 -263 174 -497 423 -571 279 -82 409 -92 557 -40 153 54 271 153 342 290 50
                                    96 70 180 70 295 0 168 -66 315 -197 438 -97 90 -176 125 -383 166 -171 35
                                    -249 40 -327 25z" />
                                <path d="M6923 7100 c-178 -32 -349 -165 -430 -335 -83 -175 -82 -361 3 -535
                                    49 -100 170 -222 264 -267 36 -17 391 -139 790 -271 399 -132 1012 -336 1363
                                    -452 584 -193 645 -212 725 -217 403 -24 720 340 637 731 -38 181 -159 339
                                    -322 420 -39 20 -1702 564 -2718 889 -121 39 -228 51 -312 37z" />
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="col-2">
                    <a class="" href="/shopping_carts">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="40.000000pt" height="40.000000pt" viewBox="0 0 570.000000 573.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,573.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                <path d="M5245 5718 c-83 -16 -174 -66 -241 -132 -106 -107 -163 -233 -230
                                    -512 l-39 -160 -370 -37 c-203 -20 -433 -41 -510 -47 -172 -13 -878 -83 -1515
                                    -150 -777 -82 -2334 -251 -2337 -254 -1 -1 110 -552 247 -1225 138 -672 250
                                    -1227 250 -1232 0 -5 690 -9 1760 -9 968 0 1760 -2 1760 -5 0 -2 -27 -116 -60
                                    -252 -33 -136 -62 -258 -65 -270 l-5 -23 -1623 0 c-1556 0 -1624 -1 -1662 -19
                                    -70 -32 -105 -86 -105 -162 0 -80 51 -147 128 -169 38 -10 3542 -15 3542 -5 0
                                    21 985 4083 1001 4130 12 33 35 82 51 108 51 81 107 95 200 52 106 -49 209
                                    -24 255 64 39 75 26 157 -33 213 -39 36 -128 76 -211 93 -76 16 -115 17 -188
                                    3z m-605 -1182 c0 -24 -131 -560 -138 -567 -8 -7 -620 -54 -626 -48 -2 2 15
                                    128 38 279 41 272 42 275 66 278 14 2 165 18 335 36 171 19 313 34 318 35 4 0
                                    7 -5 7 -13z m-910 -108 c-1 -38 -77 -518 -83 -525 -8 -7 -646 -57 -652 -51 -6
                                    6 24 520 30 526 4 5 616 69 668 71 32 1 37 -2 37 -21z m-931 -120 c-1 -99 -25
                                    -467 -31 -473 -6 -7 -619 -57 -624 -52 -2 2 -7 117 -10 255 -7 244 -7 252 12
                                    253 10 0 156 15 324 34 168 18 311 33 318 34 8 1 12 -15 11 -51z m-885 -69 c3
                                    -17 6 -132 6 -254 l0 -222 -67 -6 c-264 -23 -524 -40 -530 -33 -7 7 -53 468
                                    -47 474 1 2 141 19 311 37 169 18 311 33 314 34 4 0 9 -13 13 -30z m-854 -69
                                    c0 -6 9 -112 21 -236 11 -124 18 -228 15 -231 -5 -5 -568 -53 -573 -49 -4 3
                                    -93 436 -93 450 0 8 93 21 298 43 360 37 332 35 332 23z m3390 -434 c0 -9
                                    -149 -618 -152 -621 -5 -5 -542 -33 -547 -29 -5 5 81 591 89 604 8 13 610 59
                                    610 46z m-832 -68 c-3 -7 -25 -145 -49 -305 l-44 -293 -30 0 c-16 0 -147 -7
                                    -290 -14 -143 -8 -260 -14 -261 -13 -3 7 34 578 37 582 5 4 528 50 613 54 19
                                    1 27 -3 24 -11z m-861 -140 c-4 -46 -12 -175 -18 -288 -6 -113 -12 -206 -13
                                    -207 0 0 -95 -6 -211 -12 -115 -6 -244 -13 -286 -16 l-76 -6 -6 278 c-3 153
                                    -3 280 0 283 5 5 492 46 572 49 l44 1 -6 -82z m-825 -255 c2 -153 4 -279 3
                                    -280 -2 -4 -540 -31 -544 -27 -7 7 -53 525 -48 531 3 2 133 15 289 28 156 12
                                    286 23 289 24 4 0 9 -124 11 -276z m-808 185 c7 -35 48 -499 44 -503 -5 -5
                                    -451 -27 -477 -24 -24 4 -27 13 -76 257 -49 244 -50 252 -30 253 11 0 112 9
                                    225 18 296 26 309 26 314 -1z m3091 -700 c-18 -73 -50 -204 -71 -290 l-37
                                    -158 -239 0 c-187 0 -238 3 -238 13 0 15 80 541 83 543 3 2 377 20 463 22 l72
                                    2 -33 -132z m-725 87 c0 -2 -18 -122 -40 -266 -22 -144 -40 -263 -40 -265 0
                                    -2 -115 -4 -255 -4 l-256 0 6 73 c7 86 25 393 25 423 0 21 6 22 193 31 233 12
                                    367 15 367 8z m-780 -72 c0 -21 -5 -134 -12 -250 l-12 -213 -263 0 -263 0 0
                                    240 0 240 73 1 c39 1 124 5 187 9 63 3 154 7 203 8 l87 2 0 -37z m-770 -81 c0
                                    -44 3 -147 7 -230 l6 -152 -251 0 -251 0 -5 33 c-10 57 -39 397 -35 401 5 6
                                    309 23 432 24 l97 2 0 -78z m-746 6 c7 -51 36 -356 36 -375 0 -10 -44 -13
                                    -218 -13 l-217 0 -41 200 c-23 110 -39 200 -35 201 3 0 103 7 221 13 118 7
                                    223 14 232 14 13 2 18 -9 22 -40z" />
                                <path d="M1285 928 c-117 -22 -238 -105 -306 -210 -53 -82 -72 -164 -67 -281
                                    3 -85 8 -103 41 -170 83 -168 240 -267 422 -267 182 0 339 99 422 267 33 67
                                    38 85 41 170 3 70 0 112 -13 159 -45 166 -195 301 -369 333 -69 13 -101 12
                                    -171 -1z" />
                                <path d="M3143 925 c-91 -20 -175 -69 -239 -137 -87 -95 -127 -195 -128 -319
                                    0 -194 121 -370 301 -439 117 -46 272 -37 387 22 53 27 152 122 183 176 85
                                    144 84 346 -3 483 -108 171 -311 258 -501 214z" />
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="border-top border-bottom w-100">
                <nav class="nav d-flex justify-content-between">
                    <div class="btn-group col-4 p-0">
                    </div>
                </nav>
            </div>
        </div>
    </nav>
    <style type="text/css">
    .col p {
        font-size: 1.2rem;
    }
    </style>
    <div class="container" style="margin-top: 15rem;">
        <div class="mx-4">
            <h1>My Basket</h1>
            <hr>
            <div class="row">
                <div class="col-8">
                    <div style="border: solid; padding: 10px;">
                        <h3>Items in Basket</h3> @foreach($shopping_carts as $shopping_cart) @foreach($products as $product) @if($product->productID == $shopping_cart->productID)
                        <div id="{{$shopping_cart->productID}}" class="row p-4" style="border:solid;margin: 20px;">
                            <div class="col-2"><a href="/productdetail/{{$product->productID}}"><img src="\imgs\{{$product->tImage}}" class="img-thumbnail" width="150px" style="overflow:hidden"></a></div>
                            <div class="col-4 text-left">
                                <p>{{$product->brand}}</p>
                                <p>{{$product->productName}}</p>
                                <p>{{$product->texture}}</p>
                                <p>{{$product->shades}}</p>
                            </div>
                            <div class="col mt-4">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a id="minusBtn" class="btn btn-outline-dark" href="#" role="button" value="{{$shopping_cart->id}}" onclick="conbineM({{$shopping_cart->id}})">-</a>
                                        </li>
                                        <li class="page-item">
                                            <a id="quantity{{$shopping_cart->id}}" class="btn btn-outline-dark" href="#" role="button">{{$shopping_cart->quantity}}</a>
                                        </li>
                                        <li class="page-item">
                                            <a id="plusBtn" class="btn btn-outline-dark" href="#" role="button" value="{{$shopping_cart->id}}" onclick="conbineP({{$shopping_cart->id}})">+</a>
                                        </li>
                                    </ul>
                                </nav>
                                <form id="edit-form{{$shopping_cart->id}}" method="post" action="{{ route('shopping_carts.update',[$shopping_cart->id]) }}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="put">
                                    <div class="form-group">
                                        <input id="{{$shopping_cart->id}}" name="quantity" class="form-control" type="hidden" value="{{$shopping_cart->quantity}}"></input>
                                    </div>
                                </form>
                            </div>
                            <div class="col-3 d-flex align-items-end flex-column">
                                <p class="text-right display-4">$<span id='price{{$shopping_cart->id}}'>{{$product->price*$shopping_cart->quantity}}</span></p>
                            </div>
                            <div class="col-12 text-right">
                                <label>
                                    <a class="btn btn-dark mt-auto" href="#" role="button" onclick="
                                var result = confirm('Are you confirm to delete this product from shopping cart?');
                                if( result ){
                                    event.preventDefault();
                                    document.getElementById('delete-form').submit();
                                }
                                    ">
                                Delete
                             </a>
                                </label>
                                <form id="delete-form" action="{{ route('shopping_carts.destroy', [$shopping_cart->id]) }}" method="POST">
                                    <input type="hidden" name="_method" value="delete" /> {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                        @endif @endforeach @endforeach
                    </div>
                </div>
                <div class="col-4">
                    <div class="mx-2 pull-right" style="border: solid; padding: 10px;">
                        <div>
                            <h3>Order Summary</h3>
                            <hr>
                            <h4>Estimated total</h4>
                            <h4 id="total" style="text-align:right"></h4>
                        </div>
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
                        <h5 class="modal-title" id="exampleModalLongTitle">Check out</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you confirm to checkout?
                    </div>
                    <div class="modal-footer">
                        <a type="button" class="btn btn-secondary" data-dismiss="modal">No</a>
                        <a type="button" class="btn btn-primary" onclick="
                document.getElementById('transmit-form').submit();
            ">Yes</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Submit function-->
        <form id="transmit-form" method="post" action="{{ route('purchase_orders.store') }}">
            {{csrf_field()}}
            <div class="form-group" type="hidden">
                <input id="status" name="status" class="form-control" type="hidden" value="pending"></input>
            </div>
        </form>
        <script type="text/javascript">
        window.onload = getTotal;


        window.onbeforeunload = function(event) {
            document.getElementById('edit-form').submit();
        }


        function conbineM(n) {
            minus(n);
            save(n);
        }

        function conbineP(n) {
            plus(n);
            save(n);
        }

        function save(n) {
            document.getElementById('edit-form' + n).submit();
        }

        function minus(n) {
            var num = parseInt($('a#quantity' + n).text());
            var price = parseFloat($('span#price' + n).text());
            price = Math.round(price / num * 10) / 10;
            if (num > 1)
                num -= 1;
            price *= num;
            $('a#quantity' + n).text(num);
            $('#' + n).val(num);
            $('span#price' + n).text(price);
            getTotal();

        }

        function plus(n) {
            var num = parseInt($('a#quantity' + n).text());
            var price = parseFloat($('span#price' + n).text());
            price = Math.round(price / num * 10) / 10;
            num += 1;
            price *= num;
            $('a#quantity' + n).text(num);
            $('#' + n).val(num);
            $('span#price' + n).text(price);
            getTotal();

        }

        function getTotal() {
            var price = 0;
            $('p span').each(function() {
                price += parseFloat($(this).text());
            });
            $('#total').text('$' + price);

        }
        </script>
    </div>
    <hr>
    <footer class="my-2 py-2 text-muted text-center">
        <p class="mb-1">&copy; 2018 Jack Tim Cindy Lee Meng</p>
    </footer>
</body>

</html>