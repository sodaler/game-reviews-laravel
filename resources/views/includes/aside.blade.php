<aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">

    <div class="nk-widget nk-widget-highlighted">
        <h4 class="nk-widget-title"><span><span class="text-main-1">Последнее</span> Видео</span></h4>
        <div class="nk-widget-content">
            @if($lastUrl)
                <div class="nk-plain-video" data-video="{{ $lastUrl->preview_url }}"></div>
            @endif
        </div>
    </div>

    <div class="nk-widget nk-widget-highlighted">
        <h4 class="nk-widget-title"><span><span class="text-main-1">Топ</span> Обзоров</span></h4>
        <div class="nk-widget-content">
            @foreach($likedPosts as $post)
                <div class="nk-widget-post">
                    <a href="{{ route('post.show', $post->id) }}" class="nk-post-image">
                        <img src="{{ asset('storage/' . $post->preview_image) }}" alt="">
                    </a>

                    <h3 class="nk-post-title"><a
                            href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h3>
                    @auth()
                        <form action="{{ route('post.like.store', $post->id) }}" method="POST">
                            @csrf
                            <span class="text-white">{{ $post->liked_users_count }}</span>
                            <button type="submit" class="border-0 bg-transparent cursor">
                                @if(auth()->user()->likedPosts->contains($post->id))
                                    <i class="fas fa-heart text-danger"></i>
                                @else
                                    <i class="far fa-heart text-danger"></i>
                                @endif
                            </button>
                            <span class="text-white">{{ $post->comments->count() }}
                                                <i class="fas fa-comment text-white ml-5"></i>
                                                </span>
                        </form>
                    @endauth
                    @guest()
                        <span>{{ $post->liked_users_count }}</span>
                        <i class="far fa-heart"></i>
                        <span class="text-white">{{ $post->comments->count() }}
                                                <i class="fas fa-comment text-white ml-5"></i>
                                                </span>
                    @endguest
                    <div class="nk-post-date"><span
                            class="fa fa-calendar"></span>{{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('F') }} {{ \Carbon\Carbon::parse($post->created_at)->day }}
                        , {{ \Carbon\Carbon::parse($post->created_at)->year }}</div>
                </div>
            @endforeach

        </div>
    </div>


    <div class="nk-widget nk-widget-highlighted">
        <h4 class="nk-widget-title"><span><span class="text-main-1">Последние</span> скриншоты</span>
        </h4>
        <div class="nk-widget-content">
            <div class="nk-popup-gallery">
                <div class="row sm-gap vertical-gap">
                    @foreach($lastImgs as $imgPost)
                        <div class="col-sm-12">
                            <div class="nk-gallery-item-box">
                                <a href="{{ asset('storage/' . $imgPost->main_image)  }}"
                                   class="nk-gallery-item"
                                   data-size="1016x572">
                                    <div class="nk-gallery-item-overlay"><span class="ion-eye"></span>
                                    </div>
                                    <img src="{{ asset('storage/' . $imgPost->main_image) }}" alt="">
                                </a>
                                <div class="nk-gallery-item-description">
                                    <h4>{{ $imgPost->title }}</h4>
                                    {{ preg_replace('/&nbsp;/', '', strip_tags($imgPost->short_description)) }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>
    <div class="nk-widget nk-widget-highlighted">
        <h4 class="nk-widget-title"><span><span class="text-main-1">Случайные</span> Посты</span></h4>
        <div class="nk-widget-content">

            @foreach($randomPosts as $post)
                <div class="nk-widget-post">
                    <a href="{{ route('post.show', $post->id) }}" class="nk-post-image">
                        <img src="{{ asset('storage/' . $post->preview_image) }}" alt="">
                    </a>

                    <h3 class="nk-post-title"><a
                            href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h3>
                    @auth()
                        <form action="{{ route('post.like.store', $post->id) }}" method="POST">
                            @csrf
                            <span class="text-white">{{ $post->liked_users_count }}</span>
                            <button type="submit" class="border-0 bg-transparent cursor">
                                @if(auth()->user()->likedPosts->contains($post->id))
                                    <i class="fas fa-heart text-danger"></i>
                                @else
                                    <i class="far fa-heart text-danger"></i>
                                @endif
                            </button>
                            <span class="text-white">{{ $post->comments->count() }}
                                                <i class="fas fa-comment text-white ml-5"></i>
                                                </span>
                        </form>
                    @endauth
                    @guest()
                        <span>{{ $post->liked_users_count }}</span>
                        <i class="far fa-heart"></i>
                        <span class="text-white">{{ $post->comments->count() }}
                                                <i class="fas fa-comment text-white ml-5"></i>
                                                </span>
                    @endguest
                    <div class="nk-post-date"><span
                            class="fa fa-calendar"></span>{{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('F') }} {{ \Carbon\Carbon::parse($post->created_at)->day }}
                        , {{ \Carbon\Carbon::parse($post->created_at)->year }}</div>
                </div>
            @endforeach


        </div>
    </div>
    <div class="nk-widget nk-widget-highlighted">
        <h4 class="nk-widget-title"><span><span class="text-main-1">Мы </span> в соц сетях</span></h4>
        <div class="nk-widget-content">
            <ul class="nk-social-links-3 nk-social-links-cols-4">
                <li><a class="nk-social-twitch" href="https://www.twitch.tv/" target="_blank"><span class="fab fa-twitch"></span></a></li>
                <li><a class="nk-social-steam" href="https://store.steampowered.com/" target="_blank"><span class="fab fa-steam"></span></a></li>
                <li><a class="nk-social-facebook" href="https://www.facebook.com/" target="_blank"><span class="fab fa-facebook"></span></a></li>
                <li><a class="nk-social-youtube" href="https://www.youtube.com/"><span class="fab fa-youtube"></span></a></li>
                <li><a class="nk-social-google-plus" href="https://play.google.com/" target="_blank"><span class="fab fa-google-play"></span></a></li>
                <li><a class="nk-social-twitter" href="https://www.twitter.com/" target="_blank"><span
                            class="fab fa-twitter"></span></a></li>
                <li><a class="nk-social-pinterest" href="https://www.pinterest.ru/" target="_blank"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a class="nk-social-github" href="https://github.com/sodaler" target="_blank"><span class="fab fa-github"></span></a></li>
            </ul>
        </div>
    </div>
</aside>
