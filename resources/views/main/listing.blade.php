<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Citybook -Directory Listing Template</title>
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
        <link rel="shortcut icon" href="images/favicon.ico">

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
                        <a href="index.blade.php"><img src="" alt=""></a>
                    </div>

                    <!-- nav-button-wrap-->
                    <div class="nav-button-wrap color-bg">
                        <div class="nav-button">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <!-- nav-button-wrap end-->
                    <!--  navigation -->


                    <!-- navigation  end -->
                </div>
            </header>

            <!--  header end -->
            <!-- wrapper -->
            <div id="wrapper">
              <!-- Map -->
                    <div class="content">
                    <div class="map-container column-map right-pos-map">
                        <div id="map-main"></div>
                        <ul class="mapnavigation">
                            <li><a href="#" class="prevmap-nav">Prev</a></li>
                            <li><a href="#" class="nextmap-nav">Next</a></li>
                        </ul>
						<div class="scrollContorl mapnavbtn" title="Enable Scrolling"><span><i class="fa fa-lock"></i></span></div>
                    </div>
                    <!-- Map end -->
                    <!--col-list-wrap -->
                    <div class="col-list-wrap left-list">
                        <div class="listsearch-options fl-wrap" id="lisfw" >
                            <div class="container">
                                <div class="listsearch-header fl-wrap">
                                    <div class="listing-view-layout">
                                        <ul>
                                            <li><a class="grid active" href="#"><i class="fa fa-th-large"></i></a></li>
                                            <li><a class="list" href="#"><i class="fa fa-list-ul"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- listsearch-input-wrap  -->
                                <form method="post" action="{{route('main.search')}}">
                                    @csrf
                                <div class="listsearch-input-wrap fl-wrap">
                                    <div class="listsearch-input-item">
                                        <i class="mbri-key single-i"></i>
                                        <input type="text" placeholder="Enter event name" name="query" value=""/>
                                    </div>
                                    <div class="listsearch-input-item">
                                        <select data-placeholder="All Categories" name="category_id" class="chosen-select" >
                                            <option>All Categories</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- hidden-listing-filter -->
                                    <div class="hidden-listing-filter fl-wrap">
                                        <div class="distance-input fl-wrap">
                                            <div class="distance-title"> Radius around selected destination <span></span> km</div>
                                            <div class="distance-radius-wrap fl-wrap">
                                                <input class="distance-radius rangeslider--horizontal" type="range" min="1" max="100" step="1" value="1" data-title="Radius around selected destination">
                                            </div>
                                        </div>
                                        <!-- Checkboxes -->
                                        <div class=" fl-wrap filter-tags">
                                            <h4>Filter by Tags</h4>
                                            <input id="check-aa" type="checkbox" name="check">
                                            <label for="check-aa">Elevator in building</label>
                                            <input id="check-b" type="checkbox" name="check">
                                            <label for="check-b">Friendly workspace</label>
                                            <input id="check-c" type="checkbox" name="check">
                                            <label for="check-c">Instant Book</label>
                                            <input id="check-d" type="checkbox" name="check">
                                            <label for="check-d">Wireless Internet</label>
                                        </div>
                                    </div>
                                    <!-- hidden-listing-filter end -->
                                    <button style="margin-top: 30px; margin-right: 190px;" class="button fs-map-btn">Search</button>
                                    </form>
                                </div>
                                <!-- listsearch-input-wrap end -->
                            </div>
                        </div>
                        <!-- list-main-wrap-->
                        <div class="list-main-wrap fl-wrap card-listing">
                            <a class="custom-scroll-link back-to-filters btf-l" href="#lisfw"><i class="fa fa-angle-double-up"></i><span>Back to Filters</span></a>
                            <div class="container">
                                <!-- listing-item -->
                                @foreach($events as $key => $event)
                                <div class="listing-item">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img" >
                                            <img src="{{asset('storage/' . $event->image)}}"   alt="">
                                            <div class="overlay"></div>
                                            <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                        </div>
                                        <div class="geodir-category-content fl-wrap">
                                            <a class="listing-geodir-category" href="listing.html">{{$event->category->title}}</a>
                                            <div class="listing-avatar"><a href="author-single.html"></a>

                                            </div>
                                            <h3><a href="{{route('main.show', $event->id)}}">{{$event->title}}</a></h3>
                                            <p>{{$event->description}}</p>
                                            <div class="geodir-category-options fl-wrap">
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                    <span>{{rand(2,100)}}</span>
                                                </div>
                                                <div class="geodir-category-location"><a  href="#{{$key}}" class="map-item"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$event->location}}</a></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                @endforeach
                                <!-- listing-item end-->
                                <!-- listing-item -->

                                <!-- listing-item end-->
                            </div>

                        </div>
                        <!-- list-main-wrap end-->
                    </div>
                    <!--col-list-wrap -->
                    <div class="limit-box fl-wrap"></div>
                    <!--section -->
                    <section class="gradient-bg">
                        <div class="cirle-bg">
                            <div class="bg" data-bg=""></div>
                        </div>
                        <div class="container">
                            <div class="join-wrap fl-wrap">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Join our online community</h3>
                                        <p>Grow your marketing and be happy with your online business</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    <!--section end -->
                </div>
                <!--content end -->
            </div>
            <!-- wrapper end -->
            <div id="map_canvas" style="width:500px; height:300px"></div>
            <!--footer -->
        <footer class="main-footer dark-footer  ">

            <div class="sub-footer fl-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="about-widget">
                                <img src="images/logo.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="copyright"> &#169; Speech 2017 .  All rights reserved.</div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script>
                let markerUrl = "{{asset('assets/images/marker.png')}}"
                let imagesUrl = "{{asset('assets/images/')}}"


                let settingLoc = {!! json_encode($settings) !!};
                {{--let mapEvents = "{{json_encode($events)}}"--}}
                const mapEvents = {!! json_encode($events) !!};

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&callback=initialize&key=AIzaSyA8lfYZcB-K2UFBzJ0hvEj2sSNLanD0hpE"></script>
        <script type="text/javascript" src="{{asset('assets/js/plugins.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/scripts.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/map_infobox.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/markerclusterer.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/maps.js')}}"></script>
        <script> </script>
    </body>
</html>
