@extends('layouts.main')
@section('content')

    <div class="main-content">

        <section class="full-height-slider type-1">
            <div class="bg ready data-jarallax" data-jarallax="5" style="background-image: url(img/tem/products.jpg)"
                 data-swiper-parallax="50%"></div>
            <div class="table-view mobile-rel-block">
                <div class="table-cell">
                    <div class="container no-padd">
                        <div class="row vertical-wrap">
                            <div class="col-lg-6 col-lg-offset-3 col-sm-12 col-sm-offset-0">
                                <div class="simple-item color-type-1 text-center">
                                    <div class="main-title">
                                        <h1 class="h1 caption">Maize Flour</h1>
                                        <div class="empty-sm-30"></div>
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="simple-text md">
                                                <p>At the click of a button you will get your Mwamba Maize Flour
                                                    delivered at your doorstep.</p>
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
                        <img src="{{asset('img/tem/product_detail.jpg')}}" alt="" class="full-img">
                    </div>
                    <div class="col-lg-6 col-md-7 col-xs-12">
                        <div class="empty-sm-0 empty-xs-30"></div>
                        <aside>
                            <div class="empty-sm-20 empty-xs-20"></div>
                            <h4 class="h4 sm tt color-2">Mwamba Maize Flour</h4>
                            <div class="empty-sm-20 empty-xs-20"></div>
                            <aside>
                                <div class="simple-text">
                                    <p>The premium choice for your culinary needs.</p>
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
                                                        <input type="checkbox" value="Fortified Floor" name="type" onclick="selectOnlyThis(this)">
                                                        <div class="content-check">
                                                            <img src="{{asset('img/tem/flour_type.jpg')}}" alt=""
                                                                 class="full-img">
                                                            <div class="empty-sm-10 empty-xs-10"></div>
                                                            <div class="simple-text">
                                                                <p><b>Fortified <br>Flour</b></p>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="checkbox-entry-wrap type-1">
                                                    <label class="checkbox-entry">
                                                        <input name="type" value="Whole Floor" type="checkbox" onclick="selectOnlyThis(this)">
                                                        <div class="content-check">
                                                            <img src="{{asset('img/tem/flour_type.jpg')}}" alt=""
                                                                 class="full-img">
                                                            <div class="empty-sm-10 empty-xs-10"></div>
                                                            <div class="simple-text">
                                                                <p><b>Whole <br> Flour</b></p>
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
                                        <input type="radio" value="0.5" name="1" checked="">
                                        <span>
                      <i></i>
                      <p>0.5Kg <span>(500g)</span></p>
                    </span>
                                    </label>
                                </div>
                                <div class="checkbox-entry-wrap">
                                    <label class="checkbox-entry">
                                        <input type="radio" value="1" name="1">
                                        <span>
                      <i></i>
                      <p>1Kg <span>(1000g)</span></p>
                    </span>
                                    </label>
                                </div>
                                <div class="checkbox-entry-wrap">
                                    <label class="checkbox-entry">
                                        <input value="2" type="radio" name="1">
                                        <span>
                      <i></i>
                      <p>2Kg <span>(2000g)</span></p>
                    </span>
                                    </label>
                                </div>
                                <div class="checkbox-entry-wrap">
                                    <label class="checkbox-entry">
                                        <input value="5" type="radio" name="1">
                                        <span>
                      <i></i>
                      <p>5Kg <span>(5000g)</span></p>
                    </span>
                                    </label>
                                </div>

                            </aside>
                            <div class="empty-sm-25 empty-xs-20"></div>

                            <h5 class="h5 sm color-2">Price: <span class="h4 main-col"><b id="price_display">KES: 50</b></span></h5>
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
                                        <input type="number" id="quantity" class="cin-input input-field" step="1"
                                               value="1" min="0" max="1000">
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
                                <li><a href="#" class="link-hover-line type-2">Reviews</a></li>
                            </ul>
                        </div>
                        <div class="tab-container-wraps">
                            <div class="tab-container-item min-h-430">
                                <div class="empty-sm-60 empty-xs-30"></div>
                                <div class="simple-text">
                                    <p>Made from the finest quality maize grown in the fertile black cotton soils of
                                        Mount Elgon, Kenya, our maize flour is expertly milled to preserve the natural
                                        goodness and wholesome flavor of the grain. Whether you're making ugali, or
                                        whipping up a delicious porridge, Mwamba Maize Flour is the perfect ingredient
                                        to add to your kitchen. It's versatile and rich in essential nutrients, making
                                        it an excellent source of energy for you and your family. At Mwamba, we take
                                        pride in our commitment to sustainability and responsible sourcing. Our maize
                                        flour is packaged in eco-friendly, resealable bags to help reduce waste and keep
                                        your food fresher for longer.</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="empty-sm-45 empty-xs-20"></div>
                                        <img src="{{asset('img/tem/flour_description.jpg')}}" alt="" class="full-img">
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="empty-sm-45 empty-xs-20"></div>
                                        <img src="{{asset('img/tem/flour_description.jpg')}}" alt="" class="full-img">
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="empty-sm-45 empty-xs-20"></div>
                                        <img src="{{asset('img/tem/flour_description.jpg')}}" alt="" class="full-img">
                                    </div>
                                </div>

                            </div>
                            <div class="tab-container-item min-h-430">
                                <div class="empty-sm-60 empty-xs-30"></div>
                                <div class="col-md-10 col-md-offset-1 col-xs-12">
                                    <article>
                                        <div class="comment-wrap">
                                            <ul>
                                                <li>
                                                    <div class="testimonials-item testi-type-4 style-2">
                                                        <div class="img">
                                                            <img src="img/blog/comments-1.jpg" alt="">
                                                        </div>
                                                        <div class="text">
                                                            <h5 class="h5 caption">Emil Bonny</h5>
                                                            <div class="empty-sm-15 empty-xs-15"></div>
                                                            <span class="proff">June, 19, 2016</span>
                                                            <div class="empty-sm-15 empty-xs-15"></div>
                                                            <div class="simple-text">
                                                                <p>Sed ut perspiciatis, unde omnis iste natus error sit
                                                                    voluptatem accusantium doloremque laudantium, totam
                                                                    rem aperiam eaque ipsa, quae ab illo inventore
                                                                    veritatis et quasi architecto beatae vitae dicta
                                                                    sunt, explicabo.</p>
                                                            </div>
                                                            <div class="empty-sm-25 empty-xs-25"></div>
                                                            <span class="separator"></span>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#"
                                                               class="page-button button-style-1 sm type-3"><span
                                                                    class="txt">REPLY</span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <div class="empty-sm-25 empty-xs-25"></div>
                                                        <li>
                                                            <div class="testimonials-item testi-type-4 style-2">
                                                                <div class="img">
                                                                    <img src="img/blog/comments-2.jpg" alt="">
                                                                </div>
                                                                <div class="text">
                                                                    <h5 class="h5 caption">Daniel Collins</h5>
                                                                    <div class="empty-sm-15 empty-xs-15"></div>
                                                                    <span class="proff">5 minutes ago</span>
                                                                    <div class="empty-sm-15 empty-xs-15"></div>
                                                                    <div class="simple-text">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit</p>
                                                                    </div>
                                                                    <div class="empty-sm-25 empty-xs-25"></div>
                                                                </div>
                                                                <div class="reply">
                                                                    <a href="#"
                                                                       class="page-button button-style-1 sm type-3"><span
                                                                            class="txt">REPLY</span></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <span class="separator"></span>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="empty-sm-25 empty-xs-25"></div>
                                                    <div class="testimonials-item testi-type-4 style-2">
                                                        <div class="img">
                                                            <img src="img/blog/comments-3.jpg" alt="">
                                                        </div>
                                                        <div class="text">
                                                            <h5 class="h5 caption">Linda Cormik</h5>
                                                            <div class="empty-sm-15 empty-xs-15"></div>
                                                            <span class="proff">1 day ago</span>
                                                            <div class="empty-sm-15 empty-xs-15"></div>
                                                            <div class="simple-text">
                                                                <p>Nemo enim ipsam voluptatem, quia voluptas sit,
                                                                    aspernatur aut odit aut fugit, sed quia consequuntur
                                                                    magni dolores eos, qui ratione voluptatem sequi
                                                                    nesciunt, neque porro quisquam est, qui dolorem
                                                                    ipsum, quia dolor sit, amet, consectetur, adipisci
                                                                    velit, sed quia non numquam eius modi tempora
                                                                    incidunt, ut labore et dolore magnam aliquam quaerat
                                                                    voluptatem.</p>
                                                            </div>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#"
                                                               class="page-button button-style-1 sm type-3"><span
                                                                    class="txt">REPLY</span></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="empty-sm-50 empty-xs-30"></div>
                                    </article>
                                    <article>
                                        <div class="text-left color-type-2">
                                            <h4 class="h4 tt color-type-1">leave Your comment</h4>
                                        </div>
                                        <div class="empty-sm-45 empty-xs-30"></div>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12">
                                                    <input type="text" class="input-field" placeholder="Name *"
                                                           required="">
                                                    <div class="empty-sm-20 empty-xs-20"></div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <input type="email" class="input-field" placeholder="Email *"
                                                           required="">
                                                    <div class="empty-sm-20 empty-xs-20"></div>
                                                </div>
                                            </div>
                                            <textarea placeholder="Comment..." class="input-field"
                                                      required=""></textarea>
                                            <div class="empty-sm-30 empty-xs-30"></div>
                                            <div class="text-left">
                                                <div class="page-button button-style-1 type-2">
                                                    <input type="submit">
                                                    <span class="txt">SUBMIT</span><i></i>
                                                </div>
                                            </div>

                                        </form>
                                    </article>
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
        $(document).ready(function(){
            $('input[type=radio]').click(function(){
                console.log(this.value)
                var price = getPrice(this.value)
                $('#price_display').text("KES: "+price);
            });
        });


        function selectOnlyThis(id){
            var myCheckbox = document.getElementsByName("type");
            Array.prototype.forEach.call(myCheckbox,function(el){
                el.checked = false;
            });
            id.checked = true;
        }


        function getPrice(size) {
            if (size === "0.5") {
                return 50;
            } else if (size === "1") {
                return 90;
            } else if (size === "2") {
                return 175;
            } else if (size === "5") {
                return 430;
            }
        }

        function getItemID(){

        }


        function addToCart() {
            var product = {};
            product.name = 'Maize Floor';
            product.size = $('input[type=radio]:checked').val();
            product.type = $('input:checkbox[name=type]:checked').val();
            var unit_price = getPrice(product.size);
            product.unit_price = unit_price;
            product.id = "" + product.unit_price + product.size;
            product.image = "img/tem/flour_type.jpg";
            product.quantity = $('#quantity').val();
            let cart = localStorage.getItem('goods');
            if (cart !== null) {
                cart = JSON.parse(cart)
                let index = cart.findIndex(x => x.id == product.id)
                if (index === -1)
                    cart.push(product)
                else {
                    cart[index] = product;
                }
            } else {
                cart = [product];
            }
            localStorage.setItem('goods', JSON.stringify(cart));
            alert(product.name + "(" +product.size + "KG) Successfully added to Cart")
            location.reload();
        }
    </script>
@endsection
