@extends('layouts.main')
@section('content')

    <div class="container">
        <div class="row vertical-gap">
            <div class="col-lg-8">

                <!-- START: Posts Grid -->
                <div class="nk-blog-grid">
                    <div class="row">

                        @foreach($posts as $post)
                            <div class="col-md-6">
                                <!-- START: Post -->
                                <div class="nk-blog-post">
                                    <a href="blog-article.html" class="nk-post-img">
                                        <img src="{{ 'storage/' . $post->preview_image }}"
                                             alt="game post">
                                        <span class="nk-post-comments-count">4</span>
                                    </a>
                                    <div class="nk-gap"></div>
                                    <h2 class="nk-post-title h4"><a href="blog-article.html">{{ $post->title }}</a></h2>
                                    <div class="nk-post-by">
                                        <img src="assets/images/avatar-1.jpg" alt="Hitman" class="rounded-circle"
                                             width="35"> by <a href="#">Hitman</a> in Sep 18, 2018
                                    </div>
                                    <div class="nk-gap"></div>
                                    <div class="nk-post-text">
                                        <p>{{ $post->content }}</p>
                                    </div>
                                    <div class="nk-gap"></div>
                                    <a href="blog-article.html"
                                       class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read
                                        More</a>
                                </div>
                                <!-- END: Post -->
                            </div>
                        @endforeach
                    </div>

                    <!-- START: Pagination -->
                    <div class="nk-pagination nk-pagination-center">
                        <a href="#" class="nk-pagination-prev">
                            <span class="ion-ios-arrow-back"></span>
                        </a>
                        <nav>
                            <a class="nk-pagination-current" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <span>...</span>
                            <a href="#">14</a>
                        </nav>
                        <a href="#" class="nk-pagination-next">
                            <span class="ion-ios-arrow-forward"></span>
                        </a>
                    </div>
                    <!-- END: Pagination -->
                </div>
                <!-- END: Posts Grid -->

            </div>
            <div class="col-lg-4">
                <!--
                    START: Sidebar

                    Additional Classes:
                        .nk-sidebar-left
                        .nk-sidebar-right
                        .nk-sidebar-sticky
                -->
                <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                    <div class="nk-widget">
                        <div class="nk-widget-content">
                            <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type something...">
                                    <button class="nk-btn nk-btn-color-main-1"><span class="ion-search"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="nk-widget nk-widget-highlighted">
                        <h4 class="nk-widget-title"><span><span class="text-main-1">We</span> Are Social</span></h4>
                        <div class="nk-widget-content">
                            <ul class="nk-social-links-3 nk-social-links-cols-4">
                                <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                                <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a>
                                </li>
                                <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a>
                                </li>
                                <li><a class="nk-social-google-plus" href="#"><span
                                            class="fab fa-google-plus"></span></a></li>
                                <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                                <li><a class="nk-social-twitter" href="#" target="_blank"><span
                                            class="fab fa-twitter"></span></a></li>
                                <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a>
                                </li>
                                <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="nk-widget nk-widget-highlighted">
                        <h4 class="nk-widget-title"><span><span class="text-main-1">Latest</span> Video</span></h4>
                        <div class="nk-widget-content">
                            <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=vXy8UBazlO8"></div>
                        </div>
                    </div>
                    <div class="nk-widget nk-widget-highlighted">
                        <h4 class="nk-widget-title"><span><span class="text-main-1">Top 3</span> Recent</span></h4>
                        <div class="nk-widget-content">

                            <div class="nk-widget-post">
                                <a href="blog-article.html" class="nk-post-image">
                                    <img src="assets/images/post-1-sm.jpg" alt="">
                                </a>
                                <h3 class="nk-post-title"><a href="blog-article.html">Smell magic in the air. Or maybe
                                        barbecue</a></h3>
                                <div class="nk-post-date"><span class="fa fa-calendar"></span> Sep 18, 2018</div>
                            </div>

                            <div class="nk-widget-post">
                                <a href="blog-article.html" class="nk-post-image">
                                    <img src="assets/images/post-2-sm.jpg" alt="">
                                </a>
                                <h3 class="nk-post-title"><a href="blog-article.html">Grab your sword and fight the
                                        Horde</a></h3>
                                <div class="nk-post-date"><span class="fa fa-calendar"></span> Sep 5, 2018</div>
                            </div>

                            <div class="nk-widget-post">
                                <a href="blog-article.html" class="nk-post-image">
                                    <img src="assets/images/post-3-sm.jpg" alt="">
                                </a>
                                <h3 class="nk-post-title"><a href="blog-article.html">We found a witch! May we burn
                                        her?</a></h3>
                                <div class="nk-post-date"><span class="fa fa-calendar"></span> Aug 27, 2018</div>
                            </div>

                        </div>
                    </div>
                    <div class="nk-widget nk-widget-highlighted">
                        <h4 class="nk-widget-title"><span><span class="text-main-1">Latest</span> Screenshots</span>
                        </h4>
                        <div class="nk-widget-content">
                            <div class="nk-popup-gallery">
                                <div class="row sm-gap vertical-gap">
                                    <div class="col-sm-6">
                                        <div class="nk-gallery-item-box">
                                            <a href="assets/images/gallery-1.jpg" class="nk-gallery-item"
                                               data-size="1016x572">
                                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                                <img src="assets/images/gallery-1-thumb.jpg" alt="">
                                            </a>
                                            <div class="nk-gallery-item-description">
                                                <h4>Called Let</h4>
                                                Divided thing, land it evening earth winged whose great after. Were
                                                grass night. To Air itself saw bring fly fowl. Fly years behold spirit
                                                day greater of wherein winged and form. Seed open don't thing midst
                                                created dry every greater divided of, be man is. Second Bring stars
                                                fourth gathering he hath face morning fill. Living so second darkness.
                                                Moveth were male. May creepeth. Be tree fourth.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="nk-gallery-item-box">
                                            <a href="assets/images/gallery-2.jpg" class="nk-gallery-item"
                                               data-size="1188x594">
                                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                                <img src="assets/images/gallery-2-thumb.jpg" alt="">
                                            </a>
                                            <div class="nk-gallery-item-description">
                                                Seed open don't thing midst created dry every greater divided of, be man
                                                is. Second Bring stars fourth gathering he hath face morning fill.
                                                Living so second darkness. Moveth were male. May creepeth. Be tree
                                                fourth.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="nk-gallery-item-box">
                                            <a href="assets/images/gallery-3.jpg" class="nk-gallery-item"
                                               data-size="625x350">
                                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                                <img src="assets/images/gallery-3-thumb.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="nk-gallery-item-box">
                                            <a href="assets/images/gallery-4.jpg" class="nk-gallery-item"
                                               data-size="873x567">
                                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                                <img src="assets/images/gallery-4-thumb.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="nk-gallery-item-box">
                                            <a href="assets/images/gallery-5.jpg" class="nk-gallery-item"
                                               data-size="471x269">
                                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                                <img src="assets/images/gallery-5-thumb.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="nk-gallery-item-box">
                                            <a href="assets/images/gallery-6.jpg" class="nk-gallery-item"
                                               data-size="472x438">
                                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                                <img src="assets/images/gallery-6-thumb.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-widget nk-widget-highlighted">
                        <h4 class="nk-widget-title"><span><span class="text-main-1">Next</span> Matches</span></h4>
                        <div class="nk-widget-content">
                            <div class="nk-widget-match">
                                <a href="#">
                <span class="nk-widget-match-left">
                    <span class="nk-widget-match-teams">
                        <span class="nk-widget-match-team-logo">
                            <img src="assets/images/team-1.jpg" alt="">
                        </span>
                        <span class="nk-widget-match-vs">VS</span>
                        <span class="nk-widget-match-team-logo">
                            <img src="assets/images/team-2.jpg" alt="">
                        </span>
                    </span>
                    <span class="nk-widget-match-date">CS:GO - Apr 28, 2018 8:00 pm</span>
                </span>
                                    <span class="nk-widget-match-right">
                    <span class="nk-match-score">
                        Upcoming
                    </span>
                </span>
                                </a>
                            </div>

                            <div class="nk-widget-match">
                                <a href="#">
                <span class="nk-widget-match-left">
                    <span class="nk-widget-match-teams">
                        <span class="nk-widget-match-team-logo">
                            <img src="assets/images/team-3.jpg" alt="">
                        </span>
                        <span class="nk-widget-match-vs">VS</span>
                        <span class="nk-widget-match-team-logo">
                            <img src="assets/images/team-2.jpg" alt="">
                        </span>
                    </span>
                    <span class="nk-widget-match-date">LoL - Apr 24, 2018 7:20 pm</span>
                </span>
                                    <span class="nk-widget-match-right">
                    <span class="nk-match-score">
                        Upcoming
                    </span>
                </span>
                                </a>
                            </div>

                            <div class="nk-widget-match">
                                <a href="#">
                <span class="nk-widget-match-left">
                    <span class="nk-widget-match-teams">
                        <span class="nk-widget-match-team-logo">
                            <img src="assets/images/team-1.jpg" alt="">
                        </span>
                        <span class="nk-widget-match-vs">VS</span>
                        <span class="nk-widget-match-team-logo">
                            <img src="assets/images/team-4.jpg" alt="">
                        </span>
                    </span>
                    <span class="nk-widget-match-date">Dota 2 - Apr 12, 2018 6:40 pm</span>
                </span>
                                    <span class="nk-widget-match-right">
                    <span class="nk-match-score bg-dark-1">
                        0 : 0
                    </span>
                </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="nk-widget nk-widget-highlighted">
                        <h4 class="nk-widget-title"><span><span class="text-main-1">Most</span> Popular</span></h4>
                        <div class="nk-widget-content">

                            <div class="nk-widget-post">
                                <a href="store-product.html" class="nk-post-image">
                                    <img src="assets/images/product-1-xs.jpg" alt="So saying he unbuckled">
                                </a>
                                <h3 class="nk-post-title"><a href="store-product.html">So saying he unbuckled</a></h3>
                                <div class="nk-product-rating" data-rating="4"><i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="far fa-star"></i></div>
                                <div class="nk-product-price">€ 23.00</div>
                            </div>

                            <div class="nk-widget-post">
                                <a href="store-product.html" class="nk-post-image">
                                    <img src="assets/images/product-2-xs.jpg" alt="However, I have reason">
                                </a>
                                <h3 class="nk-post-title"><a href="store-product.html">However, I have reason</a></h3>
                                <div class="nk-product-rating" data-rating="2.5"><i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i
                                        class="far fa-star"></i> <i class="far fa-star"></i></div>
                                <div class="nk-product-price">€ 32.00</div>
                            </div>

                            <div class="nk-widget-post">
                                <a href="store-product.html" class="nk-post-image">
                                    <img src="assets/images/product-3-xs.jpg" alt="It was some time before">
                                </a>
                                <h3 class="nk-post-title"><a href="store-product.html">It was some time before</a></h3>
                                <div class="nk-product-rating" data-rating="5"><i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i></div>
                                <div class="nk-product-price">€ 14.00</div>
                            </div>

                        </div>
                    </div>

                </aside>
                <!-- END: Sidebar -->
            </div>
        </div>
    </div>
@endsection
