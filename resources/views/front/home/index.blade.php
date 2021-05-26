@extends('layouts.front.index')
@section('content')
        <div class="main_slider js_height">
            <div class="slider_wrap" id="main_slider_wrap">
                <div class="slide">
                    <div class="bg-img" style="background-image: url('/images/bali.jpg')"></div>
                    <div class="wrap">
                        <div class="wrap_float js_height">
                            <div class="slide_content">
                                <div class="title_wrap" style="margin-top: -25em;">
                                    <p class="slide_title" style="font-size:36pt; text-align:center;">Time to start a journey</p>
                                    <div id="rcorners1" class="searching-menu">
                                    <img src="/images/search-hover.svg" style="float:left;width:7%;"></img>
                                    <label style="float:left;">&nbsp; What are you looking for?</label>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="destinations">
                    <div class="wrap">
                        <div class="wrap_float">
                            <div class="section_content" style="padding-left:10%;padding-right:5%;">
                                <div class="box_image">
                                <a href="/home" class="logo">
                                    <img src="/images/icon-restaurant.svg" alt="" >
                                    </a>
                                    <label >Restaurant</label>
                                </div>
                                <div class="box_image">
                                <a href="/'home" class="logo">
                                    <img src="/images/icon-cafe.svg" alt="" >
                                    </a>
                                    <label >Cafe</label>
                                </div>
                                <div class="box_image">
                                <a href="/home" class="logo">
                                   <img src="/images/icon-bar.svg" alt="" >
                                   </a>
                                   <label >Bar</label>
                                </div>
                               
                                <div class="box_image2" >
                                <a href="/home" class="logo">
                                    <img src="/images/icon-tour.svg" alt="" >
                                    </a>
                                    <label >Tour Attraction</label>
                                </div>
                                <div class="box_image">
                                <a href="/home" class="logo">
                                    <img src="/images/icon-hotel.svg" alt="" >
                                    </a>
                                    <label >Hotel & Resort</label>
                                </div>
                                <div class="box_image">
                                <a href="/home" class="logo">
                                   <img src="/images/icon-shopping.svg" alt="" >
                                   </a>
                                   <label >Shopping Center</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="most_popular">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="title_wrap">
                        <h2 class="title">Discover Our Journey Stories</h2>
                        <p class="subtitle">
                            Let's take a look at the best recommended places to visit and reviews about them
                        </p>
                       
                    </div>
                    <div class="section_content">
                        <div class="tour-slider" id="tour-slider">
                            <a href="tour-page-right-sidebar.html" class="tour_item" style="background-image: url(/images/iceland.jpg)">
                                <div class="tour_item_top">
                                    <p class="country">
                                        <span>North Africa</span>
                                    </p>
                                    <div class="add_bookmark fav-button">
                                        <i class="is-added bouncy"></i>
                                        <i class="not-added bouncy"></i>
                                        <span class="fav-overlay"></span>
                                    </div>
                                </div>
                                <div class="tour_item_bottom">
                                    <h3 class="_title">A trip to the mighty desert</h3>
                                    <div class="_info">
                                        <div class="_info_left">
                                            <div class="days">5 days |</div>
                                            <div class="cost">from $356</div>
                                        </div>
                                        <div class="_info_right">
                                            <div class="rating-stars">
                                                <div class="star filled"></div>
                                                <div class="star filled"></div>
                                                <div class="star filled"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                            <p class="rating-text">10 reviews</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>

                            <a href="tour-page-right-sidebar.html" class="tour_item" style="background-image: url(/images/arizona.jpg)">
                                <div class="tour_item_top">
                                    <p class="country">
                                        <span>United States of America</span>
                                    </p>
                                    <div class="add_bookmark fav-button">
                                        <i class="is-added bouncy"></i>
                                        <i class="not-added bouncy"></i>
                                        <span class="fav-overlay"></span>
                                    </div>
                                </div>
                                <div class="tour_item_bottom">
                                    <h3 class="_title">Antelope canyon in Arizona USA exclusive tour</h3>
                                    <div class="_info">
                                        <div class="_info_left">
                                            <div class="days">5 days |</div>
                                            <div class="cost">from $356</div>
                                        </div>
                                        <div class="_info_right">
                                            <div class="rating-stars">
                                                <div class="star filled"></div>
                                                <div class="star filled"></div>
                                                <div class="star filled"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                            <p class="rating-text">5 reviews</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>

                            <a href="tour-page-right-sidebar.html" class="tour_item" style="background-image: url(/images/iceland.jpg)">
                                <div class="tour_item_top">
                                    <p class="country">
                                        <span>Iceland</span>
                                    </p>
                                    <div class="add_bookmark fav-button">
                                        <i class="is-added bouncy"></i>
                                        <i class="not-added bouncy"></i>
                                        <span class="fav-overlay"></span>
                                    </div>
                                </div>
                                <div class="tour_item_bottom">
                                    <h3 class="_title">Reykjavik</h3>
                                    <div class="_info">
                                        <div class="_info_left">
                                            <div class="days">5 days |</div>
                                            <div class="cost">from $356</div>
                                        </div>
                                        <div class="_info_right">
                                            <div class="rating-stars">
                                                <div class="star filled"></div>
                                                <div class="star filled"></div>
                                                <div class="star filled"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                            <p class="rating-text">10 reviews</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>

                            <a href="tour-page-right-sidebar.html" class="tour_item" style="background-image: url(/images/asia.jpg)">
                                <div class="tour_item_top">
                                    <p class="country">
                                        <span>The biggest part of the world</span>
                                    </p>
                                    <div class="add_bookmark fav-button">
                                        <i class="is-added bouncy"></i>
                                        <i class="not-added bouncy"></i>
                                        <span class="fav-overlay"></span>
                                    </div>
                                </div>
                                <div class="tour_item_bottom">
                                    <h3 class="_title">Asia</h3>
                                    <div class="_info">
                                        <div class="_info_left">
                                            <div class="days">5 days |</div>
                                            <div class="cost">from $356</div>
                                        </div>
                                        <div class="_info_right">
                                            <div class="rating-stars">
                                                <div class="star filled"></div>
                                                <div class="star filled"></div>
                                                <div class="star filled"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                            <p class="rating-text">10 reviews</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="destinations">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="title_wrap">
                        <h2 class="title">Top Destinations</h2>
                        <p class="subtitle">
                            Find out detailed information in a place that you want to know more about.
                        </p>
                        
                    </div>
                    <div class="section_content">
                        <div class="scroll">
                            <a href="travel-list-full-width.html" class="destinations_item" style="background-image: url(/images/asia.jpg)">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="_content">
                                                <h3 class="_title">America</h3>
                                                <p class="_info">45 tours | 62 hotels</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>

                            <a href="travel-list-full-width.html" class="destinations_item" style="background-image: url(/images/asia.jpg)">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="_content">
                                                <h3 class="_title">Australia</h3>
                                                <p class="_info">45 tours | 62 hotels</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>

                            <a href="travel-list-full-width.html" class="destinations_item" style="background-image: url(/images/asia.jpg)">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="_content">
                                                <h3 class="_title">Portugal</h3>
                                                <p class="_info">45 tours | 62 hotels</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>

                            <a href="travel-list-full-width.html" class="destinations_item" style="background-image: url(/images/asia.jpg)">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="_content">
                                                <h3 class="_title">Russia</h3>
                                                <p class="_info">45 tours | 62 hotels</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>

                            <a href="travel-list-full-width.html" class="destinations_item" style="background-image: url(/images/asia.jpg)">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="_content">
                                                <h3 class="_title">Africa</h3>
                                                <p class="_info">45 tours | 62 hotels</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>

                            <a href="travel-list-full-width.html" class="destinations_item" style="background-image: url(/images/asia.jpg)">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="_content">
                                                <h3 class="_title">Italy</h3>
                                                <p class="_info">45 tours | 62 hotels</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>

                            <a href="travel-list-full-width.html" class="destinations_item" style="background-image: url(/images/asia.jpg)">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="_content">
                                                <h3 class="_title">Maldives</h3>
                                                <p class="_info">45 tours | 62 hotels</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>

                            <a href="travel-list-full-width.html" class="destinations_item" style="background-image: url(/images/asia.jpg)">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="_content">
                                                <h3 class="_title">Japan</h3>
                                                <p class="_info">45 tours | 62 hotels</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="subscribe_section">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="subscribe_block" style="background-image: url(/images/asia.jpg)">
                        <div class="left">
                            <h2 class="_title">Stay in touch</h2>
                            
                        </div>
                        <div class="right" style="background-color: #fff;padding-left:2%;padding-right:2%;padding-top:5%;padding-bottom:5%; text-align:center;border-radius:20px;">
                        <label for="" >Get a variety of information about your favorite places</label>
                        <br> <br>

                            <div class="input_wrap" style="border-radius:40px; text-align:center;">
                                <input type="email" class="input" placeholder="Put your email here" >
                            </div>
                            <button class="submit button"><span style="color: black;">Subscribe Now</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    <div style="width: 100%;text-align:center; color: black;padding-top:2%;padding-bottom:2%;">
    <a href="#" >Go to top of page</a>
@endsection
   
