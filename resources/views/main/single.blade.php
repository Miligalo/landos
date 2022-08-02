<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Event</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/reset.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/color.css')}}">
        <!--=============== favicons ===============-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
            <!-- header-->
            <header class="main-header dark-header fs-header sticky">
                <div class="header-inner">
                    <div class="logo-holder">
                        <a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/index.html"><img src="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/images/logo.png" alt=""></a>
                    </div>
                    <div class="header-search vis-header-search">
                        <div class="header-search-input-item">
                            <input type="text" placeholder="Keywords" value=""/>
                        </div>
{{--                        <div class="header-search-select-item">--}}
{{--                            <select data-placeholder="All Categories" class="chosen-select" >--}}
{{--                                <option>All Categories</option>--}}
{{--                                <option>Shops</option>--}}
{{--                                <option>Hotels</option>--}}
{{--                                <option>Restaurants</option>--}}
{{--                                <option>Fitness</option>--}}
{{--                                <option>Events</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <button class="header-search-button" onclick="window.location.href='listing.html'">Search</button>--}}
{{--                    </div>--}}
{{--                    <div class="show-search-button"><i class="fa fa-search"></i> <span>Search</span></div>--}}
{{--                    <a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/dashboard-add-listing.html" class="add-list">Add Listing <span><i class="fa fa-plus"></i></span></a>--}}
{{--                    <div class="show-reg-form modal-open"><i class="fa fa-sign-in"></i>Sign In</div>--}}
{{--                    <!-- nav-button-wrap-->--}}
{{--                    <div class="nav-button-wrap color-bg">--}}
{{--                        <div class="nav-button">--}}
{{--                            <span></span><span></span><span></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- nav-button-wrap end-->--}}
{{--                    <!--  navigation -->--}}
{{--                    <div class="nav-holder main-menu">--}}
{{--                        <nav>--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Home <i class="fa fa-caret-down"></i></a>--}}
{{--                                    <!--second level -->--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/index.html">Parallax Image</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/index2.html">Video</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/index3.html">Map</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/index4.html">Slideshow</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/index5.html">Sider</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <!--second level end-->--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#" class="act-link">Listings <i class="fa fa-caret-down"></i></a>--}}
{{--                                    <!--second level -->--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/listing.html">Column map</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/listing2.html">Column map 2</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/listing3.html">Fullwidth Map</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/listing4.html">Fullwidth Map 2</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/listing5.html">Without Map</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/listing6.html">Without Map 2</a></li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#">Single <i class="fa fa-caret-down"></i></a>--}}
{{--                                            <!--third  level  -->--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/listing-single.html">Style 1</a></li>--}}
{{--                                                <li><a href="single.html">Style 2</a></li>--}}
{{--                                                <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/listing-single3.html">Style 3</a></li>--}}
{{--												<li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/listing-single4.html">Style 4</a></li>--}}
{{--                                            </ul>--}}
{{--                                            <!--third  level end-->--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <!--second level end-->--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/blog.html">News</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Pages <i class="fa fa-caret-down"></i></a>--}}
{{--                                    <!--second level -->--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/about.html">About</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/contacts.html">Contacts</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/author-single.html">User single</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/how-itworks.html">How it Works</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/pricing-tables.html">Pricing</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/dashboard-myprofile.html">User Dasboard</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/blog-single.html">Blog Single</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/dashboard-add-listing.html">Add Listing</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/404.html">404</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/coming-soon.html">Coming Soon</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/header2.html">Header 2</a></li>--}}
{{--                                        <li><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/footer-fixed.html">Footer Fixed</a></li>--}}
{{--                                    </ul>--}}
{{--                                    <!--second level end-->--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </nav>--}}
                    </div>
                    <!-- navigation  end -->
                </div>
            </header>
            <!--  header end -->
            <!-- wrapper -->
            <div id="wrapper">
                <!--  content  -->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section single-par list-single-section" data-scrollax-parent="true" id="sec1">
                        <div class="bg par-elem"  data-bg="{{asset('storage/' . $event->image)}}" style="max-width: none;" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="bubble-bg"></div>
                        <div class="list-single-header absolute-header fl-wrap">
                            <div class="container">
                                <div class="list-single-header-item">
                                    <div class="list-single-header-item-opt fl-wrap">
                                        <div class="list-single-header-cat fl-wrap">
                                            <a href="#">Restourant</a>
                                            <span>  Now Opening <i class="fa fa-check"></i></span>
                                        </div>
                                    </div>
                                    <h2>{{$event->title}}</h2>
                                    <span class="section-separator"></span>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                        <span>(11 reviews)</span>
                                    </div>
                                    <div class="list-post-counter single-list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="list-single-header-contacts fl-wrap">
                                                <ul>
                                                    <li><i class="fa fa-phone"></i><a  href="#">{{$event->phone}}</a></li>
                                                    <li><i class="fa fa-map-marker"></i><a  href="#">{{$event->location}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fl-wrap list-single-header-column">
                                                <div class="share-holder hid-share">
                                                    <div class="showshare"><span>Share </span><i class="fa fa-share"></i></div>
                                                    <div class="share-container  isShare"></div>
                                                </div>
                                                <span class="viewed-counter"><i class="fa fa-eye"></i> {{rand(80,200)}} </span>
                                                <a class="custom-scroll-link" href="#sec5"><i class="fa fa-hand-o-right"></i>Add Review </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--  section end -->
                    <div class="scroll-nav-wrapper fl-wrap">
                        <div class="container">
                            <nav class="scroll-nav scroll-init">
                                <ul>
                                    <li><a class="act-scrlink" href="#sec1">Top</a></li>
                                    <li><a href="#sec2">Details</a></li>
                                    <li><a href="#sec4">Reviews</a></li>
                                </ul>
                            </nav>
                            <a href="#" class="save-btn"> <i class="fa fa-heart"></i> Save </a>
                        </div>
                    </div>
                    <!--  section  -->
                    <section class="gray-section no-top-padding">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="list-single-main-wrapper fl-wrap" id="sec2">
{{--                                        <div class="breadcrumbs gradient-bg  fl-wrap"><a href="#">Home</a><a href="#">Listings</a><span>Listing Single</span></div>--}}
{{--                                        <div class="list-single-main-media fl-wrap">--}}
{{--                                            <img src="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/images/all/1.jpg" class="respimg" alt="">--}}
{{--                                            <a href="https://vimeo.com/70851162" class="promo-link gradient-bg image-popup"><i class="fa fa-play"></i><span>Promo Video</span></a>--}}
{{--                                        </div>--}}
                                        <div class="list-single-main-item fl-wrap">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Description Event</h3>
                                            </div>
                                            <p>{{$event->description}}</p>
{{--                                            <a href="#" class="btn transparent-btn float-btn">Download menu <i class="fa fa-file-pdf-o"></i></a>--}}
{{--                                            <span class="fw-separator"></span>--}}
{{--                                            <div class="list-single-main-item-title fl-wrap">--}}
{{--                                                <h3>Amenities</h3>--}}
{{--                                            </div>--}}
{{--                                            <div class="listing-features fl-wrap">--}}
{{--                                                <ul>--}}
{{--                                                    <li><i class="fa fa-rocket"></i> Elevator in building</li>--}}
{{--                                                    <li><i class="fa fa-wifi"></i> Free Wi Fi</li>--}}
{{--                                                    <li><i class="fa fa-motorcycle"></i> Free Parking</li>--}}
{{--                                                    <li><i class="fa fa-cloud"></i> Air Conditioned</li>--}}
{{--                                                    <li><i class="fa fa-shopping-cart"></i> Online Ordering</li>--}}
{{--                                                    <li><i class="fa fa-paw"></i> Pet Friendly</li>--}}
{{--                                                    <li><i class="fa fa-tree"></i> Outdoor Seating</li>--}}
{{--                                                    <li><i class="fa fa-wheelchair"></i> Wheelchair Friendly</li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                            <span class="fw-separator"></span>--}}
{{--                                            <div class="list-single-main-item-title fl-wrap">--}}
{{--                                                <h3>Tags</h3>--}}
{{--                                            </div>--}}
{{--                                            <div class="list-single-tags tags-stylwrap">--}}
{{--                                                <a href="#">Lunch</a>--}}
{{--                                                <a href="#">Friendly service</a>--}}
{{--                                                <a href="#">Wine</a>--}}
{{--                                                <a href="#">Sandwich</a>--}}
{{--                                                <a href="#">Food</a>--}}
{{--                                                <a href="#">Cocktails</a>--}}
{{--                                            </div>--}}
                                        </div>
{{--                                        <div class="accordion">--}}
{{--                                            <a class="toggle act-accordion" href="#"> Details option   <i class="fa fa-angle-down"></i></a>--}}
{{--                                            <div class="accordion-inner visible">--}}
{{--                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>--}}
{{--                                            </div>--}}
{{--                                            <a class="toggle" href="#"> Details option 2  <i class="fa fa-angle-down"></i></a>--}}
{{--                                            <div class="accordion-inner">--}}
{{--                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>--}}
{{--                                            </div>--}}
{{--                                            <a class="toggle" href="#"> Details option 3  <i class="fa fa-angle-down"></i></a>--}}
{{--                                            <div class="accordion-inner">--}}
{{--                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="list-single-facts fl-wrap gradient-bg">
                                            <!-- inline-facts -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i class="fa fa-male"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            <div class="num" data-content="0" data-num="154">0</div>
                                                        </div>
                                                    </div>
                                                    <h6>New Visiters Every Week</h6>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                            <!-- inline-facts  -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i class="fa fa-hand-peace-o"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            <div class="num" data-content="0" data-num="12168">0</div>
                                                        </div>
                                                    </div>
                                                    <h6>Happy customers every year</h6>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                            <!-- inline-facts  -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i class="fa fa-trophy"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            <div class="num" data-content="0" data-num="72">0</div>
                                                        </div>
                                                    </div>
                                                    <h6>Won Awards</h6>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                        </div>

                                        <!-- list-single-main-item end -->
                                        <!-- list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap" id="sec4">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Item Revies -  <span> 3 </span></h3>
                                            </div>
                                            <div class="reviews-comments-wrap">
                                                <!-- reviews-comments-item -->
                                                <div class="reviews-comments-item">
                                                    <div class="review-comments-avatar">
                                                        <img src="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/images/avatar/1.jpg" alt="">
                                                    </div>
                                                    <div class="reviews-comments-item-text">
                                                        <h4><a href="#">Jessie Manrty</a></h4>
                                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                                        <div class="clearfix"></div>
                                                        <p>" Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris. "</p>
                                                        <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>27 May 2018</span>
                                                    </div>
                                                </div>
                                                <!--reviews-comments-item end-->
                                                <!-- reviews-comments-item -->
                                                <div class="reviews-comments-item">
                                                    <div class="review-comments-avatar">
                                                        <img src="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/images/avatar/1.jpg" alt="">
                                                    </div>
                                                    <div class="reviews-comments-item-text">
                                                        <h4><a href="#">Mark Rose</a></h4>
                                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                                                        <div class="clearfix"></div>
                                                        <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                                                        <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>12 April 2018</span>
                                                    </div>
                                                </div>
                                                <!--reviews-comments-item end-->
                                                <!-- reviews-comments-item -->
                                                <div class="reviews-comments-item">
                                                    <div class="review-comments-avatar">
                                                        <img src="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/images/avatar/1.jpg" alt="">
                                                    </div>
                                                    <div class="reviews-comments-item-text">
                                                        <h4><a href="#">Adam Koncy</a></h4>
                                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                                        <div class="clearfix"></div>
                                                        <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>
                                                        <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>03 December 2017</span>
                                                    </div>
                                                </div>
                                                <!--reviews-comments-item end-->
                                            </div>
                                        </div>
                                        <!-- list-single-main-item end -->
                                        <!-- list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap" id="sec5">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Add Revies  & Rate iteam</h3>
                                            </div>
                                            <!-- Add Review Box -->
                                            <div id="add-review" class="add-review-box">
                                                <div class="leave-rating-wrap">
                                                    <span class="leave-rating-title">Your rating  for this listing : </span>
                                                    <div class="leave-rating">
                                                        <input type="radio" name="rating" id="rating-1" value="1"/>
                                                        <label for="rating-1" class="fa fa-star-o"></label>
                                                        <input type="radio" name="rating" id="rating-2" value="2"/>
                                                        <label for="rating-2" class="fa fa-star-o"></label>
                                                        <input type="radio" name="rating" id="rating-3" value="3"/>
                                                        <label for="rating-3" class="fa fa-star-o"></label>
                                                        <input type="radio" name="rating" id="rating-4" value="4"/>
                                                        <label for="rating-4" class="fa fa-star-o"></label>
                                                        <input type="radio" name="rating" id="rating-5" value="5"/>
                                                        <label for="rating-5" class="fa fa-star-o"></label>
                                                    </div>
                                                </div>
                                                <!-- Review Comment -->
                                                <form   class="add-comment custom-form">
                                                    <fieldset>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label><i class="fa fa-user-o"></i></label>
                                                                <input type="text" placeholder="Your Name *" value=""/>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label><i class="fa fa-envelope-o"></i>  </label>
                                                                <input type="text" placeholder="Email Address*" value=""/>
                                                            </div>
                                                        </div>
                                                        <textarea cols="40" rows="3" placeholder="Your Review:"></textarea>
                                                    </fieldset>
                                                    <button class="btn  big-btn  color-bg flat-btn">Submit Review <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                                </form>
                                            </div>
                                            <!-- Add Review Box / End -->
                                        </div>
                                        <!-- list-single-main-item end -->
                                    </div>
                                </div>
                                <!--box-widget-wrap -->
                                <div class="col-md-4">
                                    <div class="box-widget-wrap">
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">

                                            <div class="box-widget opening-hours">
{{--                                                <div class="box-widget-content">--}}
{{--                                                    <span class="current-status"><i class="fa fa-clock-o"></i> Now Open</span>--}}
{{--                                                    <ul>--}}
{{--                                                        <li><span class="opening-hours-day">Monday </span><span class="opening-hours-time">9 AM - 5 PM</span></li>--}}
{{--                                                        <li><span class="opening-hours-day">Tuesday </span><span class="opening-hours-time">9 AM - 5 PM</span></li>--}}
{{--                                                        <li><span class="opening-hours-day">Wednesday </span><span class="opening-hours-time">9 AM - 5 PM</span></li>--}}
{{--                                                        <li><span class="opening-hours-day">Thursday </span><span class="opening-hours-time">9 AM - 5 PM</span></li>--}}
{{--                                                        <li><span class="opening-hours-day">Friday </span><span class="opening-hours-time">9 AM - 5 PM</span></li>--}}
{{--                                                        <li><span class="opening-hours-day">Saturday </span><span class="opening-hours-time">9 AM - 3 PM</span></li>--}}
{{--                                                        <li><span class="opening-hours-day">Sunday </span><span class="opening-hours-time">Closed</span></li>--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
{{--                                            <div class="box-widget-item-header">--}}
{{--                                                <h3>Book a Table Online : </h3>--}}
{{--                                            </div>--}}
{{--                                            <div class="box-widget opening-hours">--}}
{{--                                                <div class="box-widget-content">--}}
{{--                                                    <form   class="add-comment custom-form">--}}
{{--                                                        <fieldset>--}}
{{--                                                            <label><i class="fa fa-user-o"></i></label>--}}
{{--                                                            <input type="text" placeholder="Your Name *" value=""/>--}}
{{--                                                            <div class="clearfix"></div>--}}
{{--                                                            <label><i class="fa fa-envelope-o"></i>  </label>--}}
{{--                                                            <input type="text" placeholder="Email Address*" value=""/>--}}
{{--                                                            <div class="quantity fl-wrap">--}}
{{--                                                                <span><i class="fa fa-user-plus"></i>Persons : </span>--}}
{{--                                                                <div class="quantity-item">--}}
{{--                                                                    <input type="button" value="-" class="minus">--}}
{{--                                                                    <input type="text"    name="quantity"   title="Qty" class="qty" min="1" max="3" step="1" value="1">--}}
{{--                                                                    <input type="button" value="+" class="plus">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-md-6">--}}
{{--                                                                    <label><i class="fa fa-calendar-check-o"></i>  </label>--}}
{{--                                                                    <input type="text" placeholder="Date" class="datepicker"   data-large-mode="true" data-large-default="true" value=""/>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-md-6">--}}
{{--                                                                    <label><i class="fa fa-clock-o"></i>  </label>--}}
{{--                                                                    <input type="text" placeholder="Time" class="timepicker" value="12:00 am"/>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <textarea cols="40" rows="3" placeholder="Additional Information:"></textarea>--}}
{{--                                                        </fieldset>--}}
{{--                                                        <button class="btn  big-btn  color-bg flat-btn book-btn">Book Now<i class="fa fa-angle-right"></i></button>--}}
{{--                                                    </form>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <!--box-widget-item end -->
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div class="box-widget-item-header">
                                                <h3>Contacts : </h3>
                                            </div>
                                            <div class="box-widget">
{{--                                                <div class="map-container">--}}
{{--                                                    <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" data-mapTitle="Out Location"></div>--}}
{{--                                                </div>--}}
                                                <div class="box-widget-content">
                                                    <div class="list-author-widget-contacts list-item-widget-contacts">
                                                        <ul>
                                                            <li><span><i class="fa fa-map-marker"></i> Adress :</span> <a href="#">USA 27TH Brooklyn NY</a></li>
                                                            <li><span><i class="fa fa-phone"></i> Phone :</span> <a href="#">+7(123)987654</a></li>
                                                            <li><span><i class="fa fa-envelope-o"></i> Mail :</span> <a href="#">AlisaNoory@domain.com</a></li>
                                                            <li><span><i class="fa fa-globe"></i> Website :</span> <a href="#">themeforest.net</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="list-widget-social">
                                                        <ul>
                                                            <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#" target="_blank" ><i class="fa fa-vk"></i></a></li>
                                                            <li><a href="#" target="_blank" ><i class="fa fa-whatsapp"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
{{--                                            <div class="box-widget-item-header">--}}
{{--                                                <h3>Hosted by : </h3>--}}
{{--                                            </div>--}}
{{--                                            <div class="box-widget list-author-widget">--}}
{{--                                                <div class="list-author-widget-header shapes-bg-small  color-bg fl-wrap">--}}
{{--                                                    <span class="list-author-widget-link"><a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/author-single.html">Alisa Noory</a></span>--}}
{{--                                                    <img src="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/images/avatar/1.jpg" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="box-widget-content">--}}
{{--                                                    <div class="list-author-widget-text">--}}
{{--                                                        <div class="list-author-widget-contacts">--}}
{{--                                                            <ul>--}}
{{--                                                                <li><span><i class="fa fa-phone"></i> Phone :</span> <a href="#">+7(123)987654</a></li>--}}
{{--                                                                <li><span><i class="fa fa-envelope-o"></i> Mail :</span> <a href="#">AlisaNoory@domain.com</a></li>--}}
{{--                                                                <li><span><i class="fa fa-globe"></i> Website :</span> <a href="#">themeforest.net</a></li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div>--}}
{{--                                                        <a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/author-single.html" class="btn transparent-btn">View Profile <i class="fa fa-eye"></i></a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
{{--                                            <div class="box-widget-item-header">--}}
{{--                                                <h3>More from this employer : </h3>--}}
{{--                                            </div>--}}
{{--                                            <div class="box-widget widget-posts">--}}
{{--                                                <div class="box-widget-content">--}}
{{--                                                    <ul>--}}
{{--                                                        <li class="clearfix">--}}
{{--                                                            <a href="#"  class="widget-posts-img"><img src="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/images/all/1.jpg" alt=""></a>--}}
{{--                                                            <div class="widget-posts-descr">--}}
{{--                                                                <a href="#" title="">Cafe "Lollipop"</a>--}}
{{--                                                                <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 21 Mar 2017 </span>--}}
{{--                                                            </div>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="clearfix">--}}
{{--                                                            <a href="#"  class="widget-posts-img"><img src="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/images/all/1.jpg" alt=""></a>--}}
{{--                                                            <div class="widget-posts-descr">--}}
{{--                                                                <a href="#" title=""> Apartment in the Center</a>--}}
{{--                                                                <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 2017 </span>--}}
{{--                                                            </div>--}}
{{--                                                        </li>--}}
{{--                                                        <li class="clearfix">--}}
{{--                                                            <a href="#"  class="widget-posts-img"><img src="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/images/all/1.jpg" alt=""></a>--}}
{{--                                                            <div class="widget-posts-descr">--}}
{{--                                                                <a href="#" title="">Event in City Mol</a>--}}
{{--                                                                <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 2017 </span>--}}
{{--                                                            </div>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <a class="widget-posts-link" href="#">See All Listing<span><i class="fa fa-angle-right"></i></span></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>
                                        <!--box-widget-item end -->
                                    </div>
                                </div>
                                <!--box-widget-wrap end -->
                            </div>
                        </div>
                    </section>
                    <!--  section end -->
                    <div class="limit-box fl-wrap"></div>
                    <!--  section  -->
                    <section class="gradient-bg">
                        <div class="cirle-bg">
                            <div class="bg" data-bg="images/bg/circle.png"></div>
                        </div>
                        <div class="container">
                            <div class="join-wrap fl-wrap">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Join our online community</h3>
                                        <p>Grow your marketing and be happy with your online business</p>
                                    </div>
                                    <div class="col-md-4"><a href="#" class="join-wrap-btn modal-open">Sign Up <i class="fa fa-sign-in"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--  section  end-->
                </div>
                <!--  content end  -->
            </div>
            <!-- wrapper end -->
            <!--footer -->
            <footer class="main-footer dark-footer  ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>About Us</h3>
                                <div class="footer-contacts-widget fl-wrap">
                                    <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam. </p>
                                    <ul  class="footer-contacts fl-wrap">
                                        <li><span><i class="fa fa-envelope-o"></i> Mail :</span><a href="#" target="_blank">yourmail@domain.com</a></li>
                                        <li> <span><i class="fa fa-map-marker"></i> Adress :</span><a href="#" target="_blank">USA 27TH Brooklyn NY</a></li>
                                        <li><span><i class="fa fa-phone"></i> Phone :</span><a href="#">+7(111)123456789</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>Our Last News</h3>
                                <div class="widget-posts fl-wrap">
                                    <ul>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/images/all/1.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Vivamus dapibus rutrum</a>
                                                <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 21 Mar 09.05 </span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/images/all/1.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title=""> In hac habitasse platea</a>
                                                <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 18.21 </span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/images/all/1.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Tortor tempor in porta</a>
                                                <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 16.42 </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>Our  Twitter</h3>
                                <div id="footer-twiit"></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget fl-wrap">
                                <h3>Subscribe</h3>
                                <div class="subscribe-widget fl-wrap">
                                    <p>Want to be notified when we launch a new template or an udpate. Just  send you a notification by email.</p>
                                    <div class="subcribe-form">
                                        <form id="subscribe">
                                            <input class="enteremail" name="email" id="subscribe-email" placeholder="Email" spellcheck="false" type="text">
                                            <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fa fa-rss"></i> Subscribe</button>
                                            <label for="subscribe-email" class="subscribe-message"></label>
                                        </form>
                                    </div>
                                </div>
                                <div class="footer-widget fl-wrap">
                                    <div class="footer-menu fl-wrap">
                                        <ul>
                                            <li><a href="#">Home </a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Listing</a></li>
                                            <li><a href="#">Contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-footer fl-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-widget">
                                    <img src="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/images/logo.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="copyright"> &#169; CityBook 2018 .  All rights reserved.</div>
                            </div>
                            <div class="col-md-4">
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#" target="_blank" ><i class="fa fa-facebook-official"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank" ><i class="fa fa-chrome"></i></a></li>
                                        <li><a href="#" target="_blank" ><i class="fa fa-vk"></i></a></li>
                                        <li><a href="#" target="_blank" ><i class="fa fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--footer end  -->
            <!--booking-modal-wrap -->
            <div class="booking-modal-wrap">
                <div class="booking-modal-container">
                    <div class="booking-modal-content fl-wrap">
                        <div class="booking-modal-info">
                            <div class="booking-modal-close color-bg"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <div class="bg"  data-bg="images/bg/1.jpg" ></div>
                            <div class="overlay"></div>
                            <div class="booking-modal-info_content fl-wrap">
                                <h4>Luxury Hotel Spa</h4>
                                <ul>
                                    <li>Date : <span>05.05.2020</span></li>
                                    <li>Persons : <span>2</span></li>
                                    <li>Price : <span>$120</span> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bookiing-form-wrap">
                            <ul id="progressbar">
                                <li class="active"><span>01.</span>Personal Info</li>
                                <li><span>02.</span>Billing Address</li>
                                <li><span>03.</span>Payment Method</li>
                                <li><span>04.</span>Confirm</li>
                            </ul>
                            <!--   list-single-main-item -->
                            <div class="list-single-main-item fl-wrap hidden-section tr-sec">
                                <div class="profile-edit-container">
                                    <div class="custom-form">
                                        <form>
                                            <fieldset class="fl-wrap">
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>Your personal Information</h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>First Name <i class="fa fa-user"></i></label>
                                                        <input type="text" placeholder="Your Name" value=""/>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Last Name <i class="fa fa-user"></i></label>
                                                        <input type="text" placeholder="Your Last Name" value=""/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>Email Address<i class="fa fa-envelope"></i>  </label>
                                                        <input type="text" placeholder="yourmail@domain.com" value=""/>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Phone<i class="fa fa-phone"></i>  </label>
                                                        <input type="text" placeholder="87945612233" value=""/>
                                                    </div>
                                                </div>
                                                <div class="log-massage">Existing Customer? <a href="#" class="modal-open">Click here to login</a></div>
                                                <div class="log-separator fl-wrap"><span>or</span></div>
                                                <div class="soc-log fl-wrap">
                                                    <p>For faster login or register use your social account.</p>
                                                    <a href="#" class="facebook-log"><i class="fa fa-facebook-f"></i>Connect with Facebook</a>
                                                </div>
                                                <div class="filter-tags">
                                                    <input id="check-ac" type="checkbox" name="check">
                                                    <label for="check-ac">By continuing, you agree to the<a href="#" target="_blank">Terms and Conditions</a>.</label>
                                                </div>
                                                <span class="fw-separator"></span>
                                                <a  href="#"  class="next-form back-form action-button btn  big-btn  color-bg flat-btn">Payment Step
                                                <i class="fa fa-angle-right"></i></a>
                                            </fieldset>
                                            <fieldset class="fl-wrap">
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>Billing Address</h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>City <i class="fa fa-globe"></i></label>
                                                        <input type="text" placeholder="Your city" value=""/>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Country </label>
                                                        <select data-placeholder="Your Country" class="chosen-select no-search-select" >
                                                            <option>United states</option>
                                                            <option>Asia</option>
                                                            <option>Australia</option>
                                                            <option>Europe</option>
                                                            <option>South America</option>
                                                            <option>Africa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label>Street <i class="fa fa-road"></i> </label>
                                                        <input type="text" placeholder="Your Street" value=""/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <label>State<i class="fa fa-street-view"></i></label>
                                                        <input type="text" placeholder="Your State" value=""/>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label>Postal code<i class="fa fa-barcode"></i> </label>
                                                        <input type="text" placeholder="123456" value=""/>
                                                    </div>
                                                </div>
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>Addtional Notes</h3>
                                                </div>
                                                <textarea cols="40" rows="3" placeholder="Notes"></textarea>
                                                <span class="fw-separator"></span>
                                                <a  href="#"  class="previous-form action-button back-form   color-bg"><i class="fa fa-angle-left"></i> Back</a>
                                                <a  href="#"  class="next-form back-form action-button btn  big-btn  color-bg flat-btn">Payment Step
                                                <i class="fa fa-angle-right"></i></a>
                                            </fieldset>
                                            <fieldset class="fl-wrap">
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>Payment method</h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>Cardholder's Name<i class="fa fa-user"></i></label>
                                                        <input type="text" placeholder="" value="Adam Kowalsky"/>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Card Number <i class="fa fa-credit-card"></i></label>
                                                        <input type="text" placeholder="xxxx-xxxx-xxxx-xxxx" value=""/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label>Expiry Month<i class="fa fa-calendar"></i></label>
                                                        <input type="text" placeholder="MM" value=""/>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label>Expiry Year<i class="fa fa-calendar"></i></label>
                                                        <input type="text" placeholder="YY" value=""/>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label>CVV / CVC *<i class="fa fa-credit-card"></i></label>
                                                        <input type="password" placeholder="***" value=""/>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <p style="padding-top:20px;">*3 digits number on the back of your card</p>
                                                    </div>
                                                </div>
                                                <div class="log-separator fl-wrap"><span>or</span></div>
                                                <div class="soc-log fl-wrap">
                                                    <p>Select Other Payment Method</p>
                                                    <a href="#" class="paypal-log"><i class="fa fa-paypal"></i>Pay With Paypal</a>
                                                </div>
                                                <span class="fw-separator"></span>
                                                <a  href="#"  class="previous-form  back-form action-button    color-bg"><i class="fa fa-angle-left"></i> Back</a>
                                                <a  href="#"  class="next-form back-form action-button btn  big-btn  color-bg flat-btn">Payment Step
                                                <i class="fa fa-angle-right"></i></a>
                                            </fieldset>
                                            <fieldset class="fl-wrap">
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>Confirmation</h3>
                                                </div>
                                                <div class="success-table-container">
                                                    <div class="success-table-header fl-wrap">
                                                        <i class="fa fa-check-circle decsth"></i>
                                                        <h4>Thank you. Your reservation has been received.</h4>
                                                        <div class="clearfix"></div>
                                                        <p>Your payment has been processed successfully.</p>
                                                        <a href="invoice.html" target="_blank" class="color-bg">View Invoice</a>
                                                    </div>
                                                </div>
                                                <span class="fw-separator"></span>
                                                <a  href="#"  class="previous-form action-button  back-form   color-bg"><i class="fa fa-angle-left"></i> Back</a>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--   list-single-main-item end -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="bmw-overlay"></div>
            <!--booking-modal-wrap end -->
            <!--register form -->
            <div class="main-register-wrap modal">
                <div class="main-overlay"></div>
                <div class="main-register-holder">
                    <div class="main-register fl-wrap">
                        <div class="close-reg"><i class="fa fa-times"></i></div>
                        <h3>Sign In <span>City<strong>Book</strong></span></h3>
                        <div class="soc-log fl-wrap">
                            <p>For faster login or register use your social account.</p>
                            <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                            <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                        </div>
                        <div class="log-separator fl-wrap"><span>or</span></div>
                        <div id="tabs-container">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1">Login</a></li>
                                <li><a href="#tab-2">Register</a></li>
                            </ul>
                            <div class="tab">
                                <div id="tab-1" class="tab-content">
                                    <div class="custom-form">
                                        <form method="post"  name="registerform">
                                            <label>Username or Email Address * </label>
                                            <input name="email" type="text"   onClick="this.select()" value="">
                                            <label >Password * </label>
                                            <input name="password" type="password"   onClick="this.select()" value="" >
                                            <button type="submit"  class="log-submit-btn"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a" type="checkbox" name="check">
                                                <label for="check-a">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <div class="custom-form">
                                            <form method="post"   name="registerform" class="main-register-form" id="main-register-form2">
                                                <label >First Name * </label>
                                                <input name="name" type="text"   onClick="this.select()" value="">
                                                <label>Second Name *</label>
                                                <input name="name2" type="text"  onClick="this.select()" value="">
                                                <label>Email Address *</label>
                                                <input name="email" type="text"  onClick="this.select()" value="">
                                                <label >Password *</label>
                                                <input name="password" type="password"   onClick="this.select()" value="" >
                                                <button type="submit"     class="log-submit-btn"  ><span>Register</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
            <a class="to-top"><i class="fa fa-angle-up"></i></a>
            <!--chat-widget -->
            <div class="chat-widget-button"><i class="fa fa-comments-o"></i><span>Chat With Owner</span></div>
            <div class="chat-widget_wrap not-vis-chat">
                <div class="chat-widget_header color-bg">
                    <h3>Chat with  <a href="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/author-single.html"> Alisa Noory</a></h3>
                    <div class="status st_online"><span></span>Online</div>
                </div>
                <div class="chat-body">
                    <!-- message-->
                    <div class="chat-message chat-message_guest fl-wrap">
                        <div class="dashboard-message-avatar">
                            <img src="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/images/avatar/1.jpg" alt="">
                        </div>
                        <span class="chat-message-user-name">Jessie</span>
                        <span class="massage-date">25 may 2018  <span>7.51 PM</span></span>
                        <p>Vivamus lobortis vel nibh nec maximus. Donec dolor erat, rutrum ut feugiat sed, ornare vitae nunc. </p>
                    </div>
                    <!-- message end-->
                    <!-- message-->
                    <div class="chat-message chat-message_user fl-wrap">
                        <div class="dashboard-message-avatar">
                            <img src="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/images/avatar/1.jpg" alt="">
                        </div>
                        <span class="chat-message-user-name">Alica</span>
                        <span class="massage-date">25 may 2018  <span>7.51 PM</span></span>
                        <p>Nulla eget erat consequat quam feugiat dapibus eget sed mauris.</p>
                    </div>
                    <!-- message end-->
                    <!-- message-->
                    <div class="chat-message chat-message_guest fl-wrap">
                        <div class="dashboard-message-avatar">
                            <img src="../../../../../../Users/User/Desktop/Новая%20папка%20(6)/citybook/images/avatar/1.jpg" alt="">
                        </div>
                        <span class="chat-message-user-name">Jessie</span>
                        <span class="massage-date">25 may 2018  <span>7.51 PM</span></span>
                        <p>Sed non neque faucibus, condimentum lectus at, accumsan enim. Fusce pretium egestas cursus..</p>
                    </div>
                    <!-- message end-->
                </div>
                <div class="chat-widget_input fl-wrap">
                    <textarea  placeholder="Type Message"></textarea>
                    <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                </div>
            </div>
            <!--chat-widget end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/plugins.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/scripts.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/map_infobox.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/markerclusterer.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/maps.js')}}"></script>
    </body>
</html>
