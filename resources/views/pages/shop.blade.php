@extends('layouts.main')
@section('content')

<div class="main-content">
    
    <section class="section">
      <div class="empty-lg-110 empty-md-80 empty-sm-40 empty-xs-30"></div>
      <div class="empty-lg-110 empty-md-60 empty-sm-40 empty-xs-20"></div>
      <div class="container"> 
        <div class="row">
          <div class="col-md-12">
            <div class="color-type-2 text-center">
                <h5 class="h2 color-2">Mediterranean Shrimp Pizza</h5> 
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-5 col-xs-12">
            <div class="empty-sm-55 empty-xs-30"></div>
            <div class="swipers-wrapper">
              <div class="sideBarTopSwiper">
                <div class="swiperMainWrapper">
                  <div class="swiper-container full-h animation-2 swiper-control-top" data-mode="horizontal" data-autoplay="0" data-effect="slide" data-slides-per-view="1" data-loop="0" data-speed="600">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide activeSlide"> 
                        <div class="content">
                          <img src="img/product-detail/product-slide-1.jpg" alt="" class="full-img">
                        </div>
                      </div>
                      <div class="swiper-slide" > 
                        <div class="content">
                          <img src="img/product-detail/product-slide-1-1.jpg" alt="" class="full-img">
                        </div>
                      </div>
                      <div class="swiper-slide"> 
                        <div class="content">
                          <img src="img/product-detail/product-slide-1-2.jpg" alt="" class="full-img">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="empty-sm-10 empty-xs-10"></div>
              <div class="sideBarSwiper">
                <div class="swiperMainWrapper">
                  <div class="swiper-container swiper-control-bottom" data-mode="horizontal" data-autoplay="0" data-effect="slide" data-slides-per-view="5" data-loop="0" data-speed="800" data-space="10">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide active" > 
                        <div class="content controlTopSwiper">
                          <img src="img/product-detail/product-thumb-1.jpg" alt="" class="full-img">
                        </div>
                      </div>
                      <div class="swiper-slide"> 
                        <div class="content controlTopSwiper">
                          <img src="img/product-detail/product-thumb-2.jpg" alt="" class="full-img">
                        </div>
                      </div>
                      <div class="swiper-slide"> 
                        <div class="content controlTopSwiper">
                          <img src="img/product-detail/product-thumb-3.jpg" alt="" class="full-img">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-7 col-xs-12">
            <div class="empty-sm-55 empty-xs-30"></div>
            <aside>
              <div class="empty-sm-10 empty-xs-10"></div>
              <h4 class="h4 sm color-2">Price: <span class="main-col"><b>$8.40</b></span></h4>
            </aside>
            <div class="empty-sm-35 empty-xs-20"></div>
            <aside class="pizza-size">
              <div class="col-sm-1 col-xs-2 no-padd no-padd-sm">
                <h5 class="h5 sm color-2 inline-box">Size:</h5>
              </div>
              <div class="col-sm-11 col-xs-10 no-padd no-padd-sm">
                <select class="input-field">
                    <option value="val1">30cm (450g)</option>
                    <option value="val1">40cm (580g)</option>
                    <option value="val1">25cm (280g)</option>
                    <option value="val1">38cm (350g)</option>
                </select>
              </div>
            </aside>
            <div class="empty-sm-30 empty-xs-20"></div>
            <aside>
              <div class="simple-text">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat null eiusmod tempor incididunt ut labore tore veritatis </p>
              </div>
            </aside>
            <div class="empty-sm-30 empty-xs-20"></div>
            <aside>
              <h5 class="tt h5 sm color-2">Choose Ingredients:</h5>
              <div class="row">
                <div class="col-sm-3">
                  <div class="empty-sm-30 empty-xs-15"></div>
                  <div class="checkbox-entry-wrap type-1">  
                    <label class="checkbox-entry">
                        <input type="checkbox" checked="">
                        <span>
                          <i></i>
                          <p>Pepperoni</p>  
                        </span>
                    </label>
                  </div>
                  <div class="empty-sm-30 empty-xs-15"></div>
                  <div class="checkbox-entry-wrap type-1">  
                    <label class="checkbox-entry">
                        <input type="checkbox" checked="">
                        <span>
                          <i></i>
                          <p>Mozzarella</p>  
                        </span>
                    </label>
                  </div>
                  <div class="empty-sm-30 empty-xs-15"></div>
                  <div class="checkbox-entry-wrap type-1">  
                    <label class="checkbox-entry">
                        <input type="checkbox" checked="">
                        <span>
                          <i></i>
                          <p>Carrot</p>  
                        </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="empty-sm-30 empty-xs-15"></div>
                  <div class="checkbox-entry-wrap type-1">  
                    <label class="checkbox-entry">
                        <input type="checkbox">
                        <span>
                          <i></i>
                          <p>Mashrooms</p>  
                        </span>
                    </label>
                  </div>
                  <div class="empty-sm-30 empty-xs-15"></div>
                  <div class="checkbox-entry-wrap type-1">  
                    <label class="checkbox-entry">
                        <input type="checkbox">
                        <span>
                          <i></i>
                          <p>Green</p>  
                        </span>
                    </label>
                  </div>
                  <div class="empty-sm-30 empty-xs-15"></div>
                  <div class="checkbox-entry-wrap type-1">  
                    <label class="checkbox-entry">
                        <input type="checkbox">
                        <span>
                          <i></i>
                          <p>Chicken</p>  
                        </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="empty-sm-30 empty-xs-15"></div>
                  <div class="checkbox-entry-wrap type-1">  
                    <label class="checkbox-entry">
                        <input type="checkbox">
                        <span>
                          <i></i>
                          <p>Ham</p>  
                        </span>
                    </label>
                  </div>
                  <div class="empty-sm-30 empty-xs-15"></div>
                  <div class="checkbox-entry-wrap type-1">  
                    <label class="checkbox-entry">
                        <input type="checkbox">
                        <span>
                          <i></i>
                          <p>Pepper</p>  
                        </span>
                    </label>
                  </div>
                  <div class="empty-sm-30 empty-xs-15"></div>
                  <div class="checkbox-entry-wrap type-1">  
                    <label class="checkbox-entry">
                        <input type="checkbox">
                        <span>
                          <i></i>
                          <p>Tomatos</p>  
                        </span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="empty-sm-30 empty-xs-15"></div>
                  <div class="checkbox-entry-wrap type-1">  
                    <label class="checkbox-entry">
                        <input type="checkbox">
                        <span>
                          <i></i>
                          <p>Ruccola</p>  
                        </span>
                    </label>
                  </div>
                  <div class="empty-sm-30 empty-xs-15"></div>
                  <div class="checkbox-entry-wrap type-1">  
                    <label class="checkbox-entry">
                        <input type="checkbox">
                        <span>
                          <i></i>
                          <p>Grill Salmon</p>  
                        </span>
                    </label>
                  </div>
                  <div class="empty-sm-30 empty-xs-15"></div>
                  <div class="checkbox-entry-wrap type-1">  
                    <label class="checkbox-entry">
                        <input type="checkbox">
                        <span>
                          <i></i>
                          <p>Spicy Sauce</p>  
                        </span>
                    </label>
                  </div>
                </div>
              </div>
            </aside>
            <div class="empty-sm-40 empty-xs-25"></div>
            <aside>
            <div class="buy-bar type-2">
               <div class="fl">
                  <h5 class="h5 sm follow-title quntity">Quantity:</h5>
                  <div class="custom-input-number type-2">
                    <button type="button" class="cin-btn cin-decrement">
                      <img src="img/left_arr.png" alt="">
                    </button>
                    <input type="number" class="cin-input input-field" step="1" value="1" min="0" max="1000">
                    <button type="button" class="cin-btn cin-increment">
                      <img src="img/right_arr.png" alt="">
                    </button>
                  </div>
                  <div class="empty-xs-15"></div>
               </div>
               <div class="fr">
                   <a href="#" class="page-button button-style-1 type-2"><span class="txt">Add to cart</span></a>
                   <a href="#" class="page-button button-style-1 type-4"><span class="txt">MY favourite</span></a>
               </div>
            </div>
            </aside>
            <div class="empty-sm-40 empty-xs-25"></div>
            <aside>
              <div class="follow follow-style-1 sm mob-center">
                <h5 class="h5 sm follow-title">Share:</h5>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 155.139 155.139" style="enable-background:new 0 0 155.139 155.139;" xml:space="preserve" width="16px" height="16px"><g>
                        <path id="f_1_" d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184   c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452   v20.341H37.29v27.585h23.814v70.761H89.584z" fill="#FFFFFF"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve" width="16px" height="16px">
                    <g id="XMLID_826_">
                        <path id="XMLID_827_" d="M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73   c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783   c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598   C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467   c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977   c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889   c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597   c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961   c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895   c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367   c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998   C307.394,57.037,305.009,56.486,302.973,57.388z" fill="#FFFFFF"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                  </a>
                  <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 604.35 604.35" style="enable-background:new 0 0 604.35 604.35;" xml:space="preserve">
                          <g><g id="google-plus"><path d="M516.375,255v-76.5h-51V255h-76.5v51h76.5v76.5h51V306h76.5v-51H516.375z M320.025,341.7l-28.051-20.4    c-10.2-7.649-20.399-17.85-20.399-35.7s12.75-33.15,25.5-40.8c33.15-25.5,66.3-53.55,66.3-109.65c0-53.55-33.15-84.15-51-99.45    h43.35l30.6-35.7h-158.1c-112.2,0-168.3,71.4-168.3,147.9c0,58.65,45.9,122.4,127.5,122.4h20.4c-2.55,7.65-10.2,20.4-10.2,33.15    c0,25.5,10.2,35.7,22.95,51c-35.7,2.55-102,10.2-150.45,40.8c-45.9,28.05-58.65,66.3-58.65,94.35    c0,58.65,53.55,114.75,168.3,114.75c137.7,0,204.001-76.5,204.001-150.449C383.775,400.35,355.725,372.3,320.025,341.7z     M126.225,109.65c0-56.1,33.15-81.6,68.85-81.6c66.3,0,102,89.25,102,140.25c0,66.3-53.55,79.05-73.95,79.05    C159.375,247.35,126.225,168.3,126.225,109.65z M218.024,568.65c-84.15,0-137.7-38.25-137.7-94.351c0-56.1,51-73.95,66.3-81.6    c33.15-10.2,76.5-12.75,84.15-12.75s12.75,0,17.85,0c61.2,43.35,86.7,61.2,86.7,102C335.324,530.4,286.875,568.65,218.024,568.65z    " fill="#FFFFFF"></path>
                          </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                      </svg>
                  </a>
                </div>
              </aside>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section">
      <div class="empty-lg-80 empty-md-60 empty-sm-50 empty-xs-30"></div>
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
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conse quat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                </div>
                <div class="empty-sm-45 empty-xs-20"></div>
                <div class="video-open">
                 <img src="img/product-detail/video-bg.jpg" alt="" class="resp-img">
                 <div class="vertical-align full">
                   <a href="#" class="play-button" data-video="https://www.youtube.com/embed/XRnZiqk5Grs?autoplay=1">
                       <span class="play-button-wrap"> 
                         <svg version="1.1" class="vertical-align full" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 443.307 443.306" style="enable-background:new 0 0 443.307 443.306;" xml:space="preserve"><g><path d="M415.934,212.799L36.788,2.097C32.411-0.377,28.65-0.661,25.51,1.242c-3.14,1.902-4.708,5.328-4.708,10.276V431.78
                              c0,4.952,1.569,8.381,4.708,10.284c3.14,1.902,6.901,1.622,11.278-0.855l379.146-210.703c4.381-2.478,6.571-5.434,6.571-8.856
                              C422.505,218.224,420.314,215.274,415.934,212.799z"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                         </svg>
                       </span>    
                  </a> 
                 </div>
                 <div class="video-item">
                     <div class="video-wrapper">
                         <div class="video-iframe"></div>
                           <div class="close-video main-fill-col">
                               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 21.9 21.9" enable-background="new 0 0 21.9 21.9" width="14px" height="14px">
                                <path d="M14.1,11.3c-0.2-0.2-0.2-0.5,0-0.7l7.5-7.5c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7l-1.4-1.4C20,0.1,19.7,0,19.5,0  c-0.3,0-0.5,0.1-0.7,0.3l-7.5,7.5c-0.2,0.2-0.5,0.2-0.7,0L3.1,0.3C2.9,0.1,2.6,0,2.4,0S1.9,0.1,1.7,0.3L0.3,1.7C0.1,1.9,0,2.2,0,2.4  s0.1,0.5,0.3,0.7l7.5,7.5c0.2,0.2,0.2,0.5,0,0.7l-7.5,7.5C0.1,19,0,19.3,0,19.5s0.1,0.5,0.3,0.7l1.4,1.4c0.2,0.2,0.5,0.3,0.7,0.3  s0.5-0.1,0.7-0.3l7.5-7.5c0.2-0.2,0.5-0.2,0.7,0l7.5,7.5c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l1.4-1.4c0.2-0.2,0.3-0.5,0.3-0.7  s-0.1-0.5-0.3-0.7L14.1,11.3z" fill="#FFFFFF"></path>
                              </svg>
                           </div>
                     </div>
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
                                     <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.</p>
                                 </div>
                                 <div class="empty-sm-25 empty-xs-25"></div>
                                 <span class="separator"></span>
                              </div>
                              <div class="reply">
                                <a href="#" class="page-button button-style-1 sm type-3"><span class="txt">REPLY</span></a>
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
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                     </div>
                                     <div class="empty-sm-25 empty-xs-25"></div>
                                  </div>
                                  <div class="reply">
                                    <a href="#" class="page-button button-style-1 sm type-3"><span class="txt">REPLY</span></a>
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
                                     <p>Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                 </div>
                              </div> 
                              <div class="reply">
                                <a href="#" class="page-button button-style-1 sm type-3"><span class="txt">REPLY</span></a>
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
                            <input type="text" class="input-field" placeholder="Name *" required=""> 
                          <div class="empty-sm-20 empty-xs-20"></div>   
                          </div>
                          <div class="col-sm-6 col-xs-12">
                            <input type="email" class="input-field" placeholder="Email *" required=""> 
                          <div class="empty-sm-20 empty-xs-20"></div>   
                          </div>
                        </div>
                          <textarea placeholder="Comment..." class="input-field" required=""></textarea>
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
    </section>

    <section class="section">
      <div class="empty-lg-100 empty-md-80 empty-sm-60 empty-xs-50"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="simple-item color-type-2 text-center">
              <h2 class="h2">You Can Also Order</h2>
              <div class="empty-sm-10 empty-xs-10"></div>
              <div class="col-md-6 col-md-offset-3 col-xs-12">
                <div class="simple-text md opacity-1">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="empty-md-65 empty-sm-50 empty-xs-50"></div>
            <div class="menu-item menu-item-2 type-3">
              <div class="image hover-zoom">
                <a href="#" class="like-product main-fill-col">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                        <g><path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                        c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                        l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                        C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                        s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                        c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                        C444.801,187.101,434.001,213.101,414.401,232.701z"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                    </svg>
                </a>  
                  <img src="img/product-detail/order-1.jpg" alt="">
                  <div class="vertical-align full menu-button">
                      <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                      <div class="empty-sm-10 empty-xs-10"></div>
                      <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery"><span class="txt">quick view</span></a>
                  </div>
              </div>
              <div class="text">
                  <div class="empty-sm-15 empty-xs-10"></div>
                  <h5 class="h5 caption"><a href="#" class="link-hover-line">Greek Salad</a></h5>
                  <div class="empty-sm-5 empty-xs-5"></div>
                  <div class="simple-text">
                      <p>Ut enimex ea ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                  <div class="empty-sm-10 empty-xs-10"></div>
                  <div class="menu-price style-2 title main-col">$8.40</div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="empty-md-65 empty-sm-50 empty-xs-50"></div>
            <div class="menu-item menu-item-2 type-3">
              <div class="image hover-zoom">
                <a href="#" class="like-product main-fill-col">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                        <g><path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                        c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                        l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                        C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                        s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                        c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                        C444.801,187.101,434.001,213.101,414.401,232.701z"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                    </svg>
                </a>  
                  <img src="img/product-detail/order-2.jpg" alt="">
                  <div class="vertical-align full menu-button">
                      <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                      <div class="empty-sm-10 empty-xs-10"></div>
                      <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery"><span class="txt">quick view</span></a>
                  </div>
              </div>
              <div class="text">
                  <div class="empty-sm-15 empty-xs-10"></div>
                  <h5 class="h5 caption"><a href="#" class="link-hover-line">Steak</a></h5>
                  <div class="empty-sm-5 empty-xs-5"></div>
                  <div class="simple-text">
                      <p>Ut enimex ea ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                  <div class="empty-sm-10 empty-xs-10"></div>
                  <div class="menu-price style-2 title main-col">$9.20</div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="empty-md-65 empty-sm-50 empty-xs-50"></div>
            <div class="menu-item menu-item-2 type-3">
              <div class="image hover-zoom">
                <a href="#" class="like-product main-fill-col">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                        <g><path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                        c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                        l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                        C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                        s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                        c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                        C444.801,187.101,434.001,213.101,414.401,232.701z"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                    </svg>
                </a>  
                  <img src="img/product-detail/order-3.jpg" alt="">
                  <div class="vertical-align full menu-button">
                      <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                      <div class="empty-sm-10 empty-xs-10"></div>
                      <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery"><span class="txt">quick view</span></a>
                  </div>
              </div>
              <div class="text">
                  <div class="empty-sm-15 empty-xs-10"></div>
                  <h5 class="h5 caption"><a href="#" class="link-hover-line">Potato Crisps</a></h5>
                  <div class="empty-sm-5 empty-xs-5"></div>
                  <div class="simple-text">
                      <p>Ut enimex ea ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                  <div class="empty-sm-10 empty-xs-10"></div>
                  <div class="menu-price style-2 title main-col">$7.35</div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="empty-md-65 empty-sm-50 empty-xs-50"></div>
            <div class="menu-item menu-item-2 type-3">
              <div class="image hover-zoom">
                <a href="#" class="like-product main-fill-col">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                        <g><path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                        c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                        l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                        C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                        s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                        c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                        C444.801,187.101,434.001,213.101,414.401,232.701z"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                    </svg>
                </a>  
                  <img src="img/product-detail/order-4.jpg" alt="">
                  <div class="vertical-align full menu-button">
                      <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                      <div class="empty-sm-10 empty-xs-10"></div>
                      <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery"><span class="txt">quick view</span></a>
                  </div>
              </div>
              <div class="text">
                  <div class="empty-sm-15 empty-xs-10"></div>
                  <h5 class="h5 caption"><a href="#" class="link-hover-line">Coca-Cola</a></h5>
                  <div class="empty-sm-5 empty-xs-5"></div>
                  <div class="simple-text">
                      <p>Ut enimex ea ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                  <div class="empty-sm-10 empty-xs-10"></div>
                  <div class="menu-price style-2 title main-col">$9.20</div>
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
          <div class="col-md-12">
            <div class="simple-item color-type-2 text-center">
              <h2 class="h2">You May Also Like</h2>
              <div class="empty-sm-10 empty-xs-10"></div>
              <div class="col-md-6 col-md-offset-3 col-xs-12">
                <div class="simple-text md opacity-1">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
           <div class="also-like-col-wrapper">
          <div class="col-20">
            <div class="empty-md-65 empty-sm-50 empty-xs-50"></div>
            <div class="menu-item menu-item-2 type-3">
              <div class="image hover-zoom">
                <a href="#" class="like-product main-fill-col">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                        <g><path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                        c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                        l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                        C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                        s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                        c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                        C444.801,187.101,434.001,213.101,414.401,232.701z"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                    </svg>
                </a>  
                  <img src="img/shop/product-29.jpg" alt="">
                  <div class="vertical-align full menu-button">
                      <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                      <div class="empty-sm-10 empty-xs-10"></div>
                      <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery"><span class="txt">quick view</span></a>
                  </div>
              </div>
              <div class="text">
                  <div class="empty-sm-15 empty-xs-10"></div>
                  <h5 class="h5 caption"><a href="#" class="link-hover-line">Pizza al Prosciutto</a></h5>
                  <div class="empty-sm-5 empty-xs-5"></div>
                  <div class="simple-text">
                      <p>Ut enimex ea ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                  <div class="empty-sm-10 empty-xs-10"></div>
                  <div class="menu-price style-2 title main-col">$6.25</div>
              </div>
            </div>
          </div>
          <div class="col-20">
            <div class="empty-md-65 empty-sm-50 empty-xs-50"></div>
            <div class="menu-item menu-item-2 type-3">
              <div class="image hover-zoom">
                <a href="#" class="like-product main-fill-col">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                        <g><path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                        c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                        l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                        C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                        s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                        c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                        C444.801,187.101,434.001,213.101,414.401,232.701z"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                    </svg>
                </a>  
                  <img src="img/shop/product-25.jpg" alt="">
                  <div class="vertical-align full menu-button">
                      <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                      <div class="empty-sm-10 empty-xs-10"></div>
                      <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery"><span class="txt">quick view</span></a>
                  </div>
              </div>
              <div class="text">
                  <div class="empty-sm-15 empty-xs-10"></div>
                  <h5 class="h5 caption"><a href="#" class="link-hover-line">Mediterranean Pizza</a></h5>
                  <div class="empty-sm-5 empty-xs-5"></div>
                  <div class="simple-text">
                      <p>Ut enimex ea ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                  <div class="empty-sm-10 empty-xs-10"></div>
                  <div class="menu-price style-2 title main-col">$6.25</div>
              </div>
            </div>
          </div>
          <div class="col-20">
            <div class="empty-md-65 empty-sm-50 empty-xs-50"></div>
            <div class="menu-item menu-item-2 type-3">
              <div class="image hover-zoom">
                <a href="#" class="like-product main-fill-col">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                        <g><path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                        c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                        l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                        C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                        s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                        c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                        C444.801,187.101,434.001,213.101,414.401,232.701z"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                    </svg>
                </a>  
                  <img src="img/shop/product-26.jpg" alt="">
                  <div class="vertical-align full menu-button">
                      <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                      <div class="empty-sm-10 empty-xs-10"></div>
                      <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery"><span class="txt">quick view</span></a>
                  </div>
              </div>
              <div class="text">
                  <div class="empty-sm-15 empty-xs-10"></div>
                  <h5 class="h5 caption"><a href="#" class="link-hover-line">Pizza Margherita</a></h5>
                  <div class="empty-sm-5 empty-xs-5"></div>
                  <div class="simple-text">
                      <p>Ut enimex ea ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                  <div class="empty-sm-10 empty-xs-10"></div>
                  <div class="menu-price style-2 title main-col">$6.25</div>
              </div>
            </div>
          </div>
          <div class="col-20">
            <div class="empty-md-65 empty-sm-50 empty-xs-50"></div>
            <div class="menu-item menu-item-2 type-3">
              <div class="image hover-zoom">
                <a href="#" class="like-product main-fill-col">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                      <g><path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                      c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                      l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                      C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                      s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                      c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                      C444.801,187.101,434.001,213.101,414.401,232.701z"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                  </svg>
                </a>  
                  <img src="img/shop/product-27.jpg" alt="">
                  <div class="vertical-align full menu-button">
                      <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                      <div class="empty-sm-10 empty-xs-10"></div>
                      <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery"><span class="txt">quick view</span></a>
                  </div>
              </div>
              <div class="text">
                  <div class="empty-sm-15 empty-xs-10"></div>
                  <h5 class="h5 caption"><a href="#" class="link-hover-line">Pizza al Prosciutto</a></h5>
                  <div class="empty-sm-5 empty-xs-5"></div>
                  <div class="simple-text">
                      <p>Ut enimex ea ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                  <div class="empty-sm-10 empty-xs-10"></div>
                  <div class="menu-price style-2 title main-col">$6.25</div>
              </div>
            </div>
          </div>
          <div class="col-20">
            <div class="empty-md-65 empty-sm-50 empty-xs-50"></div>
            <div class="menu-item menu-item-2 type-3">
              <div class="image hover-zoom">
                <a href="#" class="like-product main-fill-col">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 471.701 471.701" style="enable-background:new 0 0 471.701 471.701;" xml:space="preserve" width="16px" height="16px">
                        <g><path d="M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                        c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                        l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                        C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                        s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                        c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                        C444.801,187.101,434.001,213.101,414.401,232.701z"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                    </svg>
                </a>  
                  <img src="img/shop/product-28.jpg" alt="">
                  <div class="vertical-align full menu-button">
                      <a href="#" class="page-button button-style-1 type-4"><span class="txt">Add to cart</span></a>
                      <div class="empty-sm-10 empty-xs-10"></div>
                      <a href="#" class="page-button button-style-1 type-2 open-popup" data-open="popup-gallery"><span class="txt">quick view</span></a>
                  </div>
              </div>
              <div class="text">
                  <div class="empty-sm-15 empty-xs-10"></div>
                  <h5 class="h5 caption"><a href="#" class="link-hover-line">Mediterranean Pizza</a></h5>
                  <div class="empty-sm-5 empty-xs-5"></div>
                  <div class="simple-text">
                      <p>Ut enimex ea ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                  <div class="empty-sm-10 empty-xs-10"></div>
                  <div class="menu-price style-2 title main-col">$6.25</div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="empty-lg-140 empty-md-100 empty-sm-60 empty-xs-60"></div>
    </section>
	</div>

@endsection