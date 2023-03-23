@extends('layouts.main')
@section('content')

    <div class="main-content">

        <section class="full-height-slider type-1">
            <div class="bg ready data-jarallax" data-jarallax="5"
                 style="background-image: url(img/tem/animals_feeding3.png)" data-swiper-parallax="50%"></div>
            <div class="table-view mobile-rel-block">
                <div class="table-cell">
                    <div class="container no-padd">
                        <div class="row vertical-wrap">
                            <div class="col-lg-6 col-lg-offset-3 col-sm-12 col-sm-offset-0">
                                <div class="simple-item color-type-1 text-center">
                                    <div class="main-title">
                                        <h1 class="h1 caption">Animal Feeds</h1>
                                        <div class="empty-sm-30"></div>
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="simple-text md">
                                                <p>At the click of a button you will get your Animal Feeds delivered at
                                                    your doorstep.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="empty-lg-100 empty-md-80 empty-sm-60 empty-xs-50"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-xs-12">
                        <img src="{{asset('img/tem/feeds_details.png')}}" alt="" class="full-img">
                    </div>
                    <div class="col-lg-6 col-md-7 col-xs-12">
                        <div class="empty-sm-0 empty-xs-30"></div>
                        <aside>
                            <div class="empty-sm-20 empty-xs-20"></div>
                            <h4 class="h4 sm tt color-2">Mwamba Feeds</h4>
                            <div class="empty-sm-20 empty-xs-20"></div>
                            <aside>
                                <div class="simple-text">
                                    <p>High-quality and nutritious feeds for various types of livestock and poultry.</p>
                                </div>
                            </aside>
                            <div class="empty-sm-30 empty-xs-20"></div>
                            <aside>
                                <h5 class="tt h5 sm color-2">Choose Type:</h5>
                                <div class="empty-sm-25 empty-xs-15"></div>
                                <div class="arrow-closest item-padd-30">
                                    <div class="swiper-container checkbox-wrapp" data-mode="horizontal"
                                         data-effect="slide" data-add-slides="4" data-slides-per-view="responsive"
                                         data-lg-slides="4" data-md-slides="4" data-xs-slides="2" data-sm-slides="4"
                                         data-loop="0" data-speed="800" data-space="13">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="checkbox-entry-wrap type-1">
                                                    <label class="checkbox-entry">
                                                        <input name="type" type="checkbox" value="Dairy Meal"
                                                               onclick="selectOnlyThis(this)">
                                                        <div class="content-check">
                                                            <img src="{{asset('img/tem/dairy_meal.jpg')}}" alt=""
                                                                 class="full-img">
                                                            <div class="empty-sm-10 empty-xs-10"></div>
                                                            <div class="simple-text">
                                                                <p><b>Dairy Meal</b></p>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="checkbox-entry-wrap type-1">
                                                    <label class="checkbox-entry">
                                                        <input name="type" type="checkbox" value="Maize Bran"
                                                               onclick="selectOnlyThis(this)">
                                                        <div class="content-check">
                                                            <img src="{{asset('img/tem/maize_bran.jpg')}}" alt=""
                                                                 class="full-img">
                                                            <div class="empty-sm-10 empty-xs-10"></div>
                                                            <div class="simple-text">
                                                                <p><b>Maize Bran</b></p>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="swiper-arrow-left swiper-arrow type-3 style-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                             viewBox="0 0 129 129" enable-background="new 0 0 129 129" width="19px"
                                             height="19px">
                                            <g>
                                                <path
                                                    d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z"
                                                    fill="#FFFFFF"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="swiper-arrow-right swiper-arrow type-3 style-3">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                             viewBox="0 0 129 129" enable-background="new 0 0 129 129" width="19px"
                                             height="19px">
                                            <g>
                                                <path
                                                    d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z"
                                                    fill="#FFFFFF"/>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </aside>
                            <div class="empty-sm-40 empty-xs-25"></div>

                            <aside class="product-size">
                                <h5 class="h5 sm color-2 inline-box">Size:</h5>
                                <div class="checkbox-entry-wrap">
                                    <label class="checkbox-entry">
                                        <input type="radio" name="1" checked="">
                                        <span>
                                          <i></i>
                                          <p id="elm-size"></p>
                                        </span>
                                    </label>
                                </div>

                            </aside>
                            <div class="empty-sm-25 empty-xs-20"></div>

                            <h5 class="h5 sm color-2">Price: <span class="h4 main-col"><b id="elm-price"></b></span></h5>
                        </aside>
                        <div class="empty-sm-20 empty-xs-20"></div>

                        <aside>
                            <div class="buy-bar type-2">
                                <div class="fl">
                                    <h5 class="h5 sm follow-title quntity">Quantity:</h5>
                                    <div class="custom-input-number type-2">
                                        <button type="button" class="cin-btn cin-decrement">
                                            <img src="img/left_arr.png" alt="">
                                        </button>
                                        <input type="number" id="quantity" class="cin-input input-field" step="1" value="1" min="0"
                                               max="1000">
                                        <button type="button" class="cin-btn cin-increment">
                                            <img src="img/right_arr.png" alt="">
                                        </button>
                                    </div>
                                    <div class="empty-sm-0 empty-xs-15"></div>
                                </div>
                                <div class="fr">
                                    <a href="#" onclick="addToCart()" class="page-button button-style-1 type-2"><span
                                            class="txt">Add to cart</span></a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="empty-lg-50 empty-md-50 empty-sm-40 empty-xs-30"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="text-center">
                            <ul class="item-tabs type-2">
                                <li class="active"><a href="#" class="link-hover-line type-2">Description</a></li>
                                <!-- <li><a href="#" class="link-hover-line type-2">Reviews</a></li> -->
                            </ul>
                        </div>
                        <div class="tab-container-wraps">
                            <div class="tab-container-item min-h-430">
                                <div class="empty-sm-60 empty-xs-30"></div>
                                <div class="simple-text">
                                    <p>We take pride in our commitment to producing feeds that are rich in essential
                                        nutrients and formulated to meet the specific dietary needs of each type of
                                        animal. Mwamba's animal feeds are made with the finest ingredients and are
                                        carefully balanced to provide the optimal nutrition for optimal health and
                                        productivity. Whether you're raising poultry, cattle, or pigs, Mwamba has a feed
                                        that is right for you. Their products are formulated with the latest research
                                        and technology to ensure the best possible nutrition for your animals. With
                                        Mwamba, you can be sure that your animals are receiving the best nutrition for
                                        optimal growth, health, and productivity.</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="empty-sm-45 empty-xs-20"></div>
                                        <img src="{{asset('img/tem/feeds_description3.png')}}" alt="" class="full-img">
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="empty-sm-45 empty-xs-20"></div>
                                        <img src="{{asset('img/tem/feeds_description1.png')}}" alt="" class="full-img">
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="empty-sm-45 empty-xs-20"></div>
                                        <img src="{{asset('img/tem/feeds_description2.png')}}" alt="" class="full-img">
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="empty-sm-30 empty-xs-15"></div>
        </section>
    </div>

@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('input[type=radio]').click(function () {
                console.log(this.value)
                var price = getPrice(this.value)
                $('#price_display').text("KES: " + price);
            });
        });


        function selectOnlyThis(id) {
            var myCheckbox = document.getElementsByName("type");
            Array.prototype.forEach.call(myCheckbox, function (el) {
                el.checked = false;
            });
            id.checked = true;
            var price = getPrice(id.value);
            var size = getSize(id.value);
            $('#elm-price').text("KES: " + price);
            $('#elm-size').text(size + " KG");
        }

        function getSize(label) {
            if (label === "Dairy Meal") {
                return 70;
            } else if (label === "Maize Bran") {
                return 50;
            }
        }


        function getPrice(label) {
            if (label === "Dairy Meal") {
                return 3500;
            } else if (label === "Maize Bran") {
                return 1500;
            }
        }

        function getItemID() {

        }


        function addToCart() {
            var product = {};
            product.name = 'Feeds';
            product.type = $('input:checkbox[name=type]:checked').val();
            product.size = getSize(product.type);
            var unit_price = getPrice(product.type);
            product.unit_price = unit_price;
            product.id = "F" + product['size'];
            product.image = product.type == "Dairy Meal" ? 'img/tem/dairy_meal.jpg' : "img/tem/maize_bran.jpg";
            product.quantity = $('#quantity').val();
            let cart = localStorage.getItem('goods');
            if (cart !== null) {
                cart = JSON.parse(cart)
                let index = cart.findIndex(x => x.id === product.id)
                if (index === -1)
                    cart.push(product)
                else {
                    cart[index] = product;
                }
            } else {
                cart = [product];
            }
            localStorage.setItem('goods', JSON.stringify(cart));
            alert(product.type + "(" + product.size + "KG) Successfully added to Cart")
            location.reload();
        }
    </script>
@endsection
