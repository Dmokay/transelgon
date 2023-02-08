@extends('layouts.main')
@section('content')

<div class="main-content">
    
    <section class="full-height-slider">
       <div class="swiper-container full-h paralax-slider animation-3" data-mode="horizontal" data-autoplay="5000" data-slides-per-view="1" data-loop="0" data-speed="1000" data-parallax="1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="parallax-bg bg" style="background-image: url(img/home-1/101.jpg)" data-swiper-parallax="50%"></div>
                   <div class="table-view mobile-rel-block">
                   	 <div class="table-cell">
                       <div class="container">
                          <div class="empty-lg-50 empty-md-50 empty-sm-0 empty-xs-0"></div>
                           <div class="simple-item text-center color-type-1 simple-item-style-1" data-swiper-parallax="30%" data-swiper-parallax-duration="1000">
                               <div class="first-div title h1 main-col">Products</div>
                               <div class="empty-sm-30 empty-xs-30"></div>
                                   <div class="wrap-padding">
                                       <h1 class="sub-title">High quality</h1>
                                       <div class="empty-sm-20  empty-xs-20"></div>
                                           <div class="simple-text md simple-sub-text">
                                               <p>Quality is key in the production of our products. We believe you deserve nothing less than the best.</p>
                                           </div>
                                   </div>
                               <div class="empty-sm-45  empty-xs-45"></div>
                               <div class="button-wrap">
                                   <a href="#" class="page-button button-style-1"><span class="txt">Talk to Us</span></a>
                               </div>
                           </div>
                       </div>
                     </div>
                   </div>
                </div>
                <div class="swiper-slide">
                    <div class="parallax-bg layer bg" style="background-image: url(img/home-1/machine.jpeg)" data-swiper-parallax="50%"></div>
                   <div class="table-view mobile-rel-block">
                   	 <div class="table-cell">
                       <div class="container">
                          <div class="empty-lg-50 empty-md-50 empty-sm-0 empty-xs-0"></div>
                           <div class="simple-item text-center color-type-1 simple-item-style-1" data-swiper-parallax="30%" data-swiper-parallax-duration="1000">
                               <div class="first-div title h1 main-col">Process</div>
                               <div class="empty-sm-30 empty-xs-30"></div>
                                   <div class="wrap-padding">
                                       <h1 class="sub-title"> Technology Driven</h1>
                                       <div class="empty-sm-20  empty-xs-20"></div>
                                           <div class="simple-text md simple-sub-text">
                                               <p>We apply state of the art milling machinery in the daily operation to ensure an extreamly efficient production process</p>
                                           </div>
                                   </div>
                               <div class="empty-sm-45  empty-xs-45"></div>
                               <div class="button-wrap">
                                   <a href="#" class="page-button button-style-1"><span class="txt">Talk to Us</span></a>
                               </div>
                           </div>
                       </div>
                     </div>
                   </div>
                </div>
                <div class="swiper-slide">
                   <div class="parallax-bg bg" style="background-image: url(img/home-1/truck2.jpg)" data-swiper-parallax="50%"></div>
                   <div class="table-view mobile-rel-block">
                   	 <div class="table-cell">
                       <div class="container">
                          <div class="empty-lg-50 empty-md-50 empty-sm-0 empty-xs-0"></div>
                           <div class="simple-item text-center color-type-1 simple-item-style-1" data-swiper-parallax="30%" data-swiper-parallax-duration="1000">
                               <div class="first-div title h1 main-col">Place</div>
                               <div class="empty-sm-30 empty-xs-30"></div>
                                   <div class="wrap-padding">
                                       <h1 class="sub-title">Seamless Delivery</h1>
                                       <div class="empty-sm-20  empty-xs-20"></div>
                                           <div class="simple-text md simple-sub-text">
                                               <p>We bring the products to you. Our dedicated delivery team are always working to get the products to you in good time</p>
                                           </div>
                                   </div>
                               <div class="empty-sm-45  empty-xs-45"></div>
                               <div class="button-wrap">
                                   <a href="#" class="page-button button-style-1"><span class="txt">Talk to Us</span></a>
                               </div>
                           </div>
                       </div>
                     </div>
                   </div>
                </div>
            </div>
           <div class="pagination swiper-pagination-2"></div>
        </div> 
    </section>
    
    <section class="section">
      <div class="empty-lg-140 empty-md-100 empty-sm-90 empty-xs-60"></div>    
        <div class="custome-container">
            <div class="row vertical-wrap item-animation scroll-type-1">
                <div class="col-md-3 col-sm-12 col-xs-12 md-hide">
                    <div class="simple-item-style-2 simple-item">
                      <span class="page-span-1 page-span"></span>
                      <span class="page-span-2 page-span type-2"></span>
                      <img src="{{asset('img/home-1/about_home_1_img_1.jpg')}}" alt="" class="resp-img">
                    </div>
                    <div class="empty-lg-0 empty-md-0 empty-sm-60 empty-xs-40"></div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                   <div class="main-caption text-center item-padd-30">
                       <h2 class="h1 title main-col">About Us</h2>
                       <div class="empty-sm-10 empty-xs-10"></div>
                       <div class="simple-text md simple-sub-text">
                           <p>
                            TransElgon millers ltd is a maize flour milling company.
                            </p>
                       </div>
                       <div class="empty-sm-35 empty-xs-25"></div>
                       <div class="simple-text">
                        <p>
                            We are working to be the leading grain and flour supplier in Kenya and consistently produce high quality and nutritious
                            products.
                        </p>
                        <P>
                            We aspire to impact lives by contributing to the social and economic well-being of our customers, employees, and other stakeholders
                            by optimally utilizing our mill to produce high quality, safe and nutritious grain/flour products.
                        </p>
                       </div>
                       <div class="empty-sm-45 empty-xs-35"></div>
                       <a href="#" class="page-button button-style-2"><span class="bg" style="background-image: url(img/home-1/button_img_3.jpg)"></span><span class="txt">about us</span></a>
                   </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12 md-hide">
                    <div class="simple-item-style-2 simple-item">
                      <span class="page-span-1 page-span type-2"></span>
                      <span class="page-span-2 page-span"></span>
                      <img src="{{asset('img/home-1/about_home_1_img_2.jpg')}}" alt="" class="resp-img">
                    </div>
                </div>
            </div>
        </div>
      <div class="empty-lg-140 empty-md-100 empty-sm-90 empty-xs-60"></div>     
    </section>
    
    <section class="section">
     <div class="empty-lg-170 empty-md-70 empty-sm-50 empty-xs-20"></div>
      <div class="bg layer ready data-jarallax" data-jarallax="5" style="background-image: url(img/home-1/section_home1_bg_1.jpg)"></div>
       <div class="container item-animation scroll-type-1">
         <div class="simple-item text-center color-type-1 simple-item-style-1">
           <div class="first-div sub-title">Products</div>
           <div class="empty-sm-20 empty-xs-20"></div>
               <div class="wrap-padding">
                   <h2 class="title main-col h1">Healty and Tasty</h2>
                   <div class="empty-sm-10 empty-xs-10"></div>
                       <div class="simple-text md simple-sub-text">
                           <p>We endevour to give you and your family a sumptuous and nutritious maize meal moment. </p>
                       </div>
               </div>
               <div class="empty-sm-40  empty-xs-40"></div>
               <div class="button-wrap">
                   <a href="#" class="page-button button-style-1"><span class="txt">Shop</span></a>
               </div>
         </div>  
       </div>
     <div class="empty-lg-200 empty-md-100 empty-sm-90 empty-xs-60"></div>   
    </section>
    
    <section class="section">
      <div class="empty-lg-140 empty-md-100 empty-sm-90 empty-xs-60"></div> 
         <div class="container">
             <div class="row item-animation scroll-type-1">
                 <div class="col-md-6 col-md-offset-3">
                     <div class="main-caption text-center">
                       <h2 class="h1 title main-col">Associated Products</h2>
                       <div class="empty-sm-10 empty-xs-10"></div>
                       <div class="simple-text md simple-sub-text">
                           <p> Apart from the main fortified flour products which we trade under the brand name "MWAMBA", we also have a range of related products</p>
                       </div>
                       <div class="empty-lg-70 empty-md-60 empty-sm-60 empty-xs-40"></div>
                    </div>    
                 </div>
             </div>
         </div>
         <div class="custome-container">
             <div class="row item-animation scroll-type-1">
                 <div class="col-md-3 col-sm-6 col-xs-12">
                     <div class="menu-item menu-item-1">
                      <div class="image">
                          <span class="page-span-1 page-span"></span>
                          <span class="page-span-2 page-span type-2"></span>
                          <img src="{{asset('img/home-1/menu_item_1.jpg')}}" alt="">
                          <div class="vertical-align full menu-button">
                              <a href="#" class="page-button button-style-1"><span class="txt">view more</span></a>
                          </div>
                      </div>
                      <div class="text">
                          <div class="empty-sm-20 empty-xs-20"></div>
                          <h4 class="h4 caption"><a href="#" class="link-hover-line">Whole Flour</a></h4>
                          <div class="empty-sm-10 empty-xs-10"></div>
                          <div class="cat">Not sifted)</div>
                      </div>
                     </div>
                    <div class="empty-sm-30 empty-xs-30"></div> 
                 </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                     <div class="menu-item menu-item-1">
                      <div class="image">
                          <span class="page-span-4 page-span"></span>
                          <img src="{{asset('img/home-1/menu_item_2.jpg')}}" alt="">
                          <div class="vertical-align full menu-button">
                              <a href="#" class="page-button button-style-1"><span class="txt">view more</span></a>
                          </div>
                      </div>
                      <div class="text">
                          <div class="empty-sm-20 empty-xs-20"></div>
                          <h4 class="h4 caption"><a href="#" class="link-hover-line">Animal feeds</a></h4>
                          <div class="empty-sm-10 empty-xs-10"></div>
                          <div class="cat">Maize germ and Bran</div>
                      </div>
                     </div>
                    <div class="empty-sm-30 empty-xs-30"></div> 
                 </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                     <div class="menu-item menu-item-1">
                      <div class="image">
                          <img src="{{asset('img/home-1/menu_item_3.jpg')}}" alt="">
                          <div class="vertical-align full menu-button">
                              <a href="#" class="page-button button-style-1"><span class="txt">view more</span></a>
                          </div>
                      </div>
                      <div class="text">
                          <div class="empty-sm-20 empty-xs-20"></div>
                          <h4 class="h4 caption"><a href="#" class="link-hover-line">Grains</a></h4>
                          <div class="empty-sm-10 empty-xs-10"></div>
                          <div class="cat">Maize,Beans,Groundnuts </div>
                      </div>
                     </div>
                    <div class="empty-sm-30 empty-xs-30"></div> 
                 </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                     <div class="menu-item menu-item-1">
                      <div class="image">
                          <span class="page-span-4 type-2 page-span"></span>
                          <span class="page-span-3 page-span"></span>
                          <img src="{{asset('img/home-1/menu_item_4.jpg')}}" alt="">
                          <div class="vertical-align full menu-button">
                              <a href="#" class="page-button button-style-1"><span class="txt">view more</span></a>
                          </div>
                      </div>
                      <div class="text">
                          <div class="empty-sm-20 empty-xs-20"></div>
                          <h4 class="h4 caption"><a href="#" class="link-hover-line">Packaging Materials</a></h4>
                          <div class="empty-sm-10 empty-xs-10"></div>
                          <div class="cat">0.5-1-2-5 kg branded packets</div>
                      </div>
                     </div>
                    <div class="empty-sm-30 empty-xs-30"></div> 
                 </div>     
               <div class="text-center">
                  <div class="empty-sm-20 empty-xs-20"></div>
                   <a href="#" class="page-button button-style-2"><span class="bg" style="background-image: url(img/home-1/button_img_1.jpg)"></span><span class="txt">Other products</span></a>
               </div>
             </div>
         </div>
      <div class="empty-lg-140 empty-md-100 empty-sm-90 empty-xs-60"></div>
    </section>
    
    <section class="section">
     <div class="empty-lg-170 empty-md-70 empty-sm-50 empty-xs-20"></div>
      <div class="bg layer ready data-jarallax" data-jarallax="5" style="background-image: url(img/home-1/section_home1_bg_2.jpg)"></div>
       <div class="container item-animation scroll-type-1">
         <div class="simple-item text-center color-type-1 simple-item-style-1">
           <div class="first-div sub-title">Core Values</div>
           <div class="empty-sm-20 empty-xs-20"></div>
               <div class="wrap-padding">
                   <h2 class="title main-col h1">We Delight in...</h2>
                   <div class="empty-sm-10 empty-xs-10"></div>
                       <div class="simple-text md simple-sub-text">
                           <p>Embracing Professionalism, innovation, Teamwork, Safety, Integrity, Community and Customer Focus</p>
                       </div>
               </div>
               <div class="empty-sm-40  empty-xs-40"></div>
               <div class="button-wrap">
                   <a href="#" class="page-button button-style-1"><span class="txt">Talk to Us</span></a>
               </div>
         </div>  
       </div>
     <div class="empty-lg-200 empty-md-100 empty-sm-90 empty-xs-60"></div>   
    </section>
    
    <section class="section">
        <div class="empty-lg-140 empty-md-100 empty-sm-90 empty-xs-60"></div> 
            <div class="custome-container">
                <div class="row vertical-wrap item-animation scroll-type-1">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="main-caption text-center item-padd-30">
                           <h2 class="h1 title main-col">Mwamba Maize Meal</h2>
                           <div class="empty-sm-10 empty-xs-10"></div>
                           <div class="simple-text md simple-sub-text">
                               <p> Bringing families together to share an 'Ugali' meal like no other. </p>
                           </div>
                           <div class="empty-sm-35 empty-xs-35"></div>
                           <div class="simple-text">
                               <p>Mwamba Maize Flour has been produced to bring back the nutrious and tasty qualities which had been deprived from us.</p>
                           </div>
                           <div class="empty-sm-45  empty-xs-45"></div>
                           <a href="#" class="page-button button-style-2"><span class="bg" style="background-image: url(img/home-1/button_img_2.jpg)"></span><span class="txt">our menu</span></a>
                        </div>
                        <div class="empty-lg-0 empty-md-0 empty-sm-60 empty-xs-60"></div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                       <div class="row">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="simple-item-style-2 simple-item">
                              <span class="page-span-3 page-span"></span>
                              <img src="{{asset('img/home-1/about_home_1_img_3.jpg')}}" alt="" class="resp-img">
                            </div>
                            <div class="empty-sm-30 empty-xs-30"></div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="simple-item-style-2 simple-item">
                              <span class="page-span-1 page-span type-2"></span>
                              <img src="{{asset('img/home-1/about_home_1_img_4.jpg')}}" alt="" class="resp-img">
                            </div>
                            <div class="empty-sm-30 empty-xs-30"></div>
                          </div>  
                       </div>
                       <div class="simple-item-style-2 simple-item">
                          <span class="page-span-4 page-span"></span>
                          <span class="page-span-2 page-span type-2"></span>
                          <img src="{{asset('img/home-1/about_home_1_img_5.jpg')}}" alt="" class="resp-img">
                        </div>
                    </div>
                </div>
            </div>   
        <div class="empty-lg-140 empty-md-100 empty-sm-90 empty-xs-60"></div> 
    </section>
    
</div>   

@endsection  