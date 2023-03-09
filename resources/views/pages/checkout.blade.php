@extends('layouts.main')
@section('content')

    <div class="main-content">

        <section class="section">
            <div class="empty-lg-140 empty-md-100 empty-sm-60 empty-xs-60"></div>
            <div class="empty-lg-50 empty-md-20 empty-sm-10 empty-xs-10"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
                        <div class="simple-item color-type-2 text-center">
                            <div class="main-title">
                                <h1 class="h1 color-2">Checkout</h1>
                                <div class="empty-sm-25"></div>
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="simple-text md opacity-1">
                                        <p>Make Payments for your Orders!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-xs-12">
                        <div class="empty-sm-60 empty-xs-30"></div>
                        <div class="text-left check-subtitle">
                            <h4 class="h4 sm color-2">Your Order</h4>
                        </div>
                        <div class="empty-sm-40 empty-xs-20"></div>
                        <table id="elmm" class="order-list" cols="4" cellspacing="0">
                        </table>
                        <div class="empty-sm-30 empty-xs-15"></div>

                        <div class="empty-sm-30 empty-xs-15"></div>
                        <div class="cart-total">
                            <ul>
                                {{--<li><h5 class="tt h5 sm color-2 height-50">Cart Total<span><b class="main-col">$19.80</b></span></h5></li>
                                <li><h5 class="tt h5 sm color-2 height-50">Delivery:<span><b class="main-col">free</b></span></h5></li>
                                <li><h5 class="tt h5 sm color-2 height-50">Box for pizza:<span><b class="main-col">$1.60</b></span></h5></li>--}}
                                <div class="empty-sm-15 empty-xs-15"></div>
                                <li><h4 class="tt h4 color-2 height-50">Total:<span><b class="main-col"
                                                                                       id="elmm-total"></b></span></h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 col-xs-12">
                        <div class="empty-sm-60 empty-xs-30"></div>
                        <div class="text-left check-subtitle">
                            <h4 class="h4 sm color-2">Your Info</h4>
                        </div>
                        <div class="empty-sm-40 empty-xs-20"></div>
                        <form action="{{route('pay')}}" method="post">
                            <input type="hidden" name="items" id="items">
                            <input type="hidden" name="amount" id="amount">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="text" class="input-field color-2" name="name" placeholder="Names"
                                               required>
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="email" class="input-field color-2" name="email"
                                               placeholder="Email *" required>
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="text" class="input-field color-2" name="phone"
                                               placeholder="Phone *" required>
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="text" class="input-field color-2" name="city" placeholder="City *"
                                               required>
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="text" class="input-field color-2" name="street"
                                               placeholder="Street *" required>
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                            </div>
                            <div class="input-field-wrap">
                                <textarea placeholder="Message" name="message" class="input-field color-2"></textarea>
                                <div class="focus"></div>
                            </div>
                            <div class="empty-sm-50 empty-xs-50"></div>
                            <div class="fr button-full-width">
                                <button class="page-button button-style-1 type-4"><span
                                        class="txt">Pay with Mpesa</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="empty-lg-140 empty-md-100 empty-sm-60 empty-xs-60"></div>
        </section>

    </div>

@endsection
@section('js')
    <script>
        $(document).ready(function () {
            order();
        });

        function order() {
            console.log("order...")
            let cart = localStorage.getItem('goods');
            let cart_div = $('#elmm');
            let total_price = 0;
            if (cart !== null) {
                console.log("items...")
                cart = JSON.parse(cart);
                console.log(cart)
                //$('#s-count').html(cart.length)
                cart.forEach(function (item) {
                    var item_total = item.quantity * item.unit_price;
                    total_price = +total_price + item_total;
                    console.log(total_price)
                    cart_div.append("<tr>" +
                        "<td>" +
                        "<div class='img hover-zoom'>" +
                        "<div class='color-type-1'>" +
                        "<a href='checkout-1.html#' class='image-hover'><img src='" + item.image + "' alt=''></a>" +
                        "</div>" +
                        "</div>" +
                        "</td>" +
                        "<td>" +
                        "<h5 class='h5 caption'><a href='#' class='link-hover'>" + item.name + "-" + item.type + "(" + item.size + " KG)" + "</a></h5>" +
                        "</td>" +
                        "<td>" +
                        "<div class='shop-item'>" +
                        "<h6 class='h6'> X" + item.quantity + " @ KES:" + item.unit_price + "</h6>" +
                        "</div>" +
                        "</td>" +
                        "<td>" +
                        "<h5 class='h5 sm order-price main-col'> KES: " + item_total + "</h5>" +
                        "</td>" +
                        "</tr>");
                });
                $('#elmm-total').append("KES: " + total_price)

                var items = document.getElementById("items");
                items.value = localStorage.getItem("goods");
                //items.disabled = true;

                var amt = document.getElementById("amount");
                amt.value = total_price;
                console.log("auauauauau")
                //amt.disabled = true;
            }
        }

        // read from storage here

    </script>
@endsection
