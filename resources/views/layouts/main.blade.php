<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Обзоры игр и не только</title>

    <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
    <meta name="author" content="_nK">

    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700ref=" rel="stylesheet"
          type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- FontAwesome -->
    <script defer src="{{ asset('assets/vendor/fontawesome-free/js/all.js') }}"></script>
    <script defer src="{{ asset('assets/vendor/fontawesome-free/js/v4-shims.js') }}"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/ionicons/css/ionicons.min.css') }}">

    <!-- Flickity -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/flickity/dist/flickity.min.css') }}">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/photoswipe/dist/photoswipe.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/photoswipe/dist/default-skin/default-skin.css') }}">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css') }}">

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/summernote/dist/summernote-bs4.css') }}">

    <!-- GoodGames -->
    <link rel="stylesheet" href="{{ asset('assets/css/goodgames.css') }}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>


</head>


<!--
    Additional Classes:
        .nk-page-boxed
-->
<body>


<!--
    Additional Classes:
        .nk-header-opaque
-->
<header class="nk-header nk-header-opaque">

    <!-- START: Top Contacts -->
    <div class="nk-contacts-top">
        <div class="container">
            <div class="nk-contacts-left">
                <ul class="nk-social-links">
                    <li><a class="nk-social-twitch" href="https://www.twitch.tv/" target="_blank"><span class="fab fa-twitch"></span></a></li>
                    <li><a class="nk-social-steam" href="https://store.steampowered.com/" target="_blank"><span class="fab fa-steam"></span></a></li>
                    <li><a class="nk-social-facebook" href="https://www.facebook.com/" target="_blank"><span class="fab fa-facebook"></span></a></li>
                    <li><a class="nk-social-google-plus" href="https://play.google.com/" target="_blank"><span class="fab fa-google-play"></span></a></li>
                    <li><a class="nk-social-twitter" href="https://www.twitter.com/" target="_blank"><span
                                class="fab fa-twitter"></span></a></li>
                    <li><a class="nk-social-pinterest" href="https://www.pinterest.ru/" target="_blank"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a class="nk-social-github" href="https://github.com/sodaler" target="_blank"><span class="fab fa-github"></span></a></li>
                </ul>
            </div>
            <div class="nk-contacts-right">
                <ul class="nk-contacts-icons">
                    <li>
                        <a href="{{ route('post.index') }}">
                            <span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('personal.main.index') }}">
                            <span class="fa fa-user"></span>
                        </a>
                    </li>
                    @auth()
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input type="submit" value="Выйти" class="btn btn-outline-danger">
                        </form>
                    </li>
                    @endauth
                    @guest()
                        <li>
                            <a class="btn btn-outline-light" href="{{ route('login') }}">Войти</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Top Contacts -->

    <!--
        START: Navbar

        Additional Classes:
            .nk-navbar-sticky
            .nk-navbar-transparent
            .nk-navbar-autohide
    -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">

                <a href="{{ route('post.index') }}" class="nk-nav-logo">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="GoodGames" width="199">
                </a>

                <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">

                    <li class="">
                        <a href="{{ route('post.index') }}">
                            Обзоры
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('game.index') }}">
                            Игры
                        </a>
                    <li>
                        <a href="{{ route('category.index') }}">
                            Категории
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gallery.index') }}">
                            Галлерея
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('personal.main.index') }}">
                            Кабинет
                        </a>
                    </li>
                </ul>
                <ul class="nk-nav nk-nav-right nk-nav-icons">

                    <li class="single-icon d-lg-none">
                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->

</header>


<!--
START: Navbar Mobile

Additional Classes:
.nk-navbar-left-side
.nk-navbar-right-side
.nk-navbar-lg
.nk-navbar-overlay-content
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index.html" class="nk-nav-logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="" width="120">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->


<div class="nk-main">



    @yield('content')


    <div class="nk-gap-2"></div>


    <!-- START: Footer -->
    <footer class="nk-footer">

        <div class="container">
            <div class="nk-gap-3"></div>
            <h4 class=""><span class="text-main-1">Обсуждаемые</span> посты</h4>
            <div class="row vertical-gap">
                @foreach($mostComments as $post)
                <div class="col-md-4">
                    <div class="nk-widget">
                        <div class="nk-widget-content">
                            <div class="row vertical-gap sm-gap">
                                <div class="col-lg-6">
                                    <div class="nk-widget-post-3">
                                        <a href="{{ route('post.show', $post->id) }}" class="nk-post-image">
                                            <img src="{{ asset('storage/' . $post->preview_image) }}" alt="" width="208px" height="117px">
                                        </a>
                                        <div class="nk-post-title mt-2"><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></div>
                                        <span class="fa fa-comments nk-post-date"></span> <span class="nk-post-date">{{ $post->comments->count() }}</span>
                                        <div class="nk-post-date">
                                            <span class="fa fa-calendar"></span> {{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('F') }} {{ \Carbon\Carbon::parse($post->created_at)->day }}
                                            , {{ \Carbon\Carbon::parse($post->created_at)->year }}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="nk-gap-3"></div>
        </div>

        <div class="nk-copyright">
            <div class="container">
                <div class="nk-copyright-left">
                    <a target="_blank" href="https://github.com/sodaler">My GitHub</a>
                </div>
                <div class="nk-copyright-right">
                    <ul class="nk-social-links-2">
                        <li><a class="nk-social-twitch" href="https://www.twitch.tv/" target="_blank"><span class="fab fa-twitch"></span></a></li>
                        <li><a class="nk-social-steam" href="https://store.steampowered.com/" target="_blank"><span class="fab fa-steam"></span></a></li>
                        <li><a class="nk-social-facebook" href="https://www.facebook.com/" target="_blank"><span class="fab fa-facebook"></span></a></li>
                        <li><a class="nk-social-google-plus" href="https://play.google.com/" target="_blank"><span class="fab fa-google-play"></span></a></li>
                        <li><a class="nk-social-twitter" href="https://www.twitter.com/" target="_blank"><span
                                    class="fab fa-twitter"></span></a></li>
                        <li><a class="nk-social-pinterest" href="https://www.pinterest.ru/" target="_blank"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a class="nk-social-github" href="https://github.com/sodaler" target="_blank"><span class="fab fa-github"></span></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- END: Footer -->


</div>


<!-- START: Page Background -->

<img class="nk-page-background-top" src="{{ asset('assets/images/bg-top-2.png') }}" alt="">
<img class="nk-page-background-bottom" src="{{ asset('assets/images/bg-bottom.png') }}" alt="">

<!-- END: Page Background -->



<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="{{ asset('assets/vendor/object-fit-images/dist/ofi.min.js') }}"></script>

<!-- GSAP -->
<script src="{{ asset('assets/vendor/gsap/src/minified/TweenMax.min.js') }}"></script>
<script src="{{ asset('assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js') }}"></script>

<!-- Popper -->
<script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Sticky Kit -->
<script src="{{ asset('assets/vendor/sticky-kit/dist/sticky-kit.min.js') }}"></script>

<!-- Jarallax -->
<script src="{{ asset('assets/vendor/jarallax/dist/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jarallax/dist/jarallax-video.min.js') }}"></script>

<!-- imagesLoaded -->
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>

<!-- Flickity -->
<script src="{{ asset('assets/vendor/flickity/dist/flickity.pkgd.min.js') }}"></script>

<!-- Photoswipe -->
<script src="{{ asset('assets/vendor/photoswipe/dist/photoswipe.min.js') }}"></script>
<script src="{{ asset('assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js') }}"></script>

<!-- Jquery Validation -->
<script src="{{ asset('assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>

<!-- Jquery Countdown + Moment -->
<script src="{{ asset('assets/vendor/jquery-countdown/dist/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/vendor/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js') }}"></script>

<!-- Hammer.js -->
<script src="{{ asset('assets/vendor/hammerjs/hammer.min.js') }}"></script>

<!-- NanoSroller -->
<script src="{{ asset('assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js') }}"></script>

<!-- SoundManager2 -->
<script src="{{ asset('assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js') }}"></script>

<!-- Seiyria Bootstrap Slider -->
<script src="{{ asset('assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js') }}"></script>

<!-- Summernote -->
<script src="{{ asset('assets/vendor/summernote/dist/summernote-bs4.min.js') }}"></script>

<!-- nK Share -->
<script src="{{ asset('assets/plugins/nk-share/nk-share.js') }}"></script>

<!-- GoodGames -->
<script src="{{ asset('assets/js/goodgames.min.js') }}"></script>
<script src="{{ asset('assets/js/goodgames-init.js') }}"></script>
<!-- END: Scripts -->


</body>
</html>
