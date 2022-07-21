@extends('layouts.main')
@section('content')
    <!-- START: Breadcrumbs -->
    <div class="nk-gap-1"></div>
    <div class="container">
        <ul class="nk-breadcrumbs">


            <li><a href="index.html">Домашняя</a></li>


            <li><span class="fa fa-angle-right"></span></li>

            <li><a href="#">Обзоры</a></li>


            <li><span class="fa fa-angle-right"></span></li>

            <li><span>{{ $post->title }}</span></li>

        </ul>
    </div>
    <div class="nk-gap-1"></div>
    <!-- END: Breadcrumbs -->
    <div class="container">
        <div class="row vertical-gap">
            <div class="col-lg-8">
                <!-- START: Post -->
                <div class="nk-blog-post nk-blog-post-single">
                    <!-- START: Post Text -->
                    <div class="nk-post-text mt-0">
                        <div class="nk-post-img">
                            <img src="{{ asset('storage/' . $post->preview_image) }}"
                                 alt="Grab your sword and fight the Horde">
                        </div>
                        <div class="nk-gap-1"></div>
                        <h1 class="nk-post-title h4">{{ $post->title }}</h1>
                        <div class="nk-post-by">
                            <img src="{{ asset('storage/' . $post->user->avatar) }}" alt="Witch Murder"
                                 class="rounded-circle" width="35">
                            by <a
                                href="#">{{ $post->user->name }}</a> {{ $date->translatedFormat('F') }} {{ $date->day }}
                            , {{ $date->year }}


                            <div class="nk-post-categories">
                                @foreach($tags as $tag)
                                    <span class="bg-main-1">{{ $tag->title }}</span>
                                @endforeach

                            </div>

                        </div>
                        <div class="nk-gap"></div>
                        <p>{{ preg_replace('/&nbsp;/', '', strip_tags($post->short_description)) }}</p>

                        <div class="nk-gap"></div>
                        <blockquote class="nk-blockquote">
                            <div class="nk-blockquote-icon"><span>"</span></div>
                            <div class="nk-blockquote-content">
                                {{ preg_replace('/&nbsp;/', '', strip_tags($post->quote)) }}
                            </div>
                            <div class="nk-blockquote-author"><span>{{ $post->author }}</span></div>
                        </blockquote>

                        <div class="nk-gap"></div>

                        <img class="mt-0 img-fluid" src="{{ asset('storage/' . $post->main_image) }}" alt="">
                        <h3 class="h4 mt-20">{{ $post->content_title }}</h3>

                        <p>{{ preg_replace('/&nbsp;/', '', strip_tags($post->content)) }}</p>

                        <div class="nk-gap"></div>
                        <div class="nk-plain-video" data-video="{{ $post->preview_url }}"></div>

                        <div class="nk-gap-2"></div>
                        <p>{{ preg_replace('/&nbsp;/', '', strip_tags($post->conclusion)) }}</p>
                        <div class="nk-gap"></div>
                        @auth()
                            <form action="{{ route('post.like.store', $post->id) }}" method="POST">
                                @csrf
                                <span class="text-white fa-lg">{{ $post->liked_users_count }}</span>
                                <button type="submit" class="border-0 bg-transparent cursor">
                                    @if(auth()->user()->likedPosts->contains($post->id))
                                        <i class="fas fa-heart text-danger text-danger fa-lg mb-1"></i>
                                    @else
                                        <i class="far fa-heart text-danger fa-lg mb-1"></i>
                                    @endif
                                </button>
                            </form>
                        @endauth
                        @guest()
                            <span>{{ $post->liked_users_count }}</span>
                            <i class="far fa-heart"></i>
                        @endguest

                        <div class="nk-gap"></div>
                        <div class="nk-post-share">
                            <span class="h5">Поделиться:</span>

                            <ul class="nk-social-links-2">
                                <li><span class="nk-social-facebook" title="Share page on Facebook"
                                          data-share="facebook"><span class="fab fa-facebook"></span></span></li>
                                <li><span class="nk-social-google-plus" title="Share page on Google+"
                                          data-share="google-plus"><span class="fab fa-google-plus"></span></span></li>
                                <li><span class="nk-social-twitter" title="Share page on Twitter"
                                          data-share="twitter"><span class="fab fa-twitter"></span></span></li>
                                <li><span class="nk-social-pinterest" title="Share page on Pinterest"
                                          data-share="pinterest"><span class="fab fa-pinterest-p"></span></span></li>

                            </ul>
                        </div>
                    </div>
                    <!-- END: Post Text -->

                    <!-- START: Similar Articles -->
                    <div class="nk-gap-2"></div>
                    @if($relatedPosts->count() > 0)
                    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">ПОХОЖИЕ</span> ПОСТЫ</span></h3>
                    <div class="nk-gap"></div>
                    <div class="row">
                        @foreach($relatedPosts as $relatedPost)
                        <div class="col-md-6">
                            <!-- START: Post -->
                            <div class="nk-blog-post">
                                <a href="{{ route('post.show', $relatedPost->id) }}" class="nk-post-img">
                                    <img src="{{ asset('storage/' . $relatedPost->preview_image) }}"
                                         alt="image">
                                    <span class="nk-post-comments-count">{{ $relatedPost->comments->count() }}</span>

                                    <span class="nk-post-categories">
                                    <span class="bg-main-1">{{ mb_strtoupper($relatedPost->category->title) }}</span>
                                </span>

                                </a>
                                <div class="nk-gap"></div>
                                <h2 class="nk-post-title h4"><a href="blog-article.html">{{ $relatedPost->title }}</a></h2>
                            </div>
                            <!-- END: Post -->
                        </div>
                        @endforeach


                    </div>
                    @endif
                    <!-- END: Similar Articles -->

                    <!-- START: Comments -->
                    <div id="comments"></div>
                    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">{{ $post->comments->count() }}</span> {{ Lang::choice('Комментарий|Комментария|Комментариев', $post->comments->count(), [], 'ru') }}</span></h3>
                    <div class="nk-gap"></div>
                    <div class="nk-comments">
                        <!-- START: Comment -->
                        @foreach($post->comments as $comment)
                        <div class="nk-comment">
                            <div class="nk-comment-meta">
                                <img src="{{ asset('storage/' . $comment->user->avatar) }}" alt="avatar"
                                     class="rounded-circle"
                                     width="35"> by <a href="#">{{ $comment->user->name }}</a> {{ $comment->dateAsCarbon->diffForHumans() }}
                            </div>
                            <div class="nk-comment-text">
                                <p>{{ $comment->message }}</p>
                            </div>
                        </div>
                        @endforeach
                        <!-- END: Comment -->

                    </div>
                    <!-- END: Comments -->

                    <!-- START: Reply -->
                    <div class="nk-gap-2"></div>
                    @auth()
                    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Оставить</span> Комментарий</span></h3>
                    <div class="nk-gap"></div>
                    <div class="nk-reply">
                        <form action="{{ route('post.comment.store', $post->id) }}" method="POST" class="nk-form" novalidate="novalidate">
                            @csrf
                            <div class="row sm-gap vertical-gap">
                            </div>
                            <div class="nk-gap-1"></div>
                            <textarea class="form-control required" name="message" rows="5" placeholder="Сообщение *"
                                      aria-required="true"></textarea>
                            <div class="nk-gap-1"></div>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
                            <button type="submit" class="nk-btn nk-btn-rounded nk-btn-color-main-1">Отправить</button>
                        </form>
                    </div>
                    @endauth
                    <!-- END: Reply -->
                </div>
                <!-- END: Post -->
            </div>
            <div class="col-lg-4">
                <!--
                    START: Sidebar

                    Additional Classes:
                        .nk-sidebar-left
                        .nk-sidebar-right
                        .nk-sidebar-sticky
                -->
            @include('includes.aside')
                <!-- END: Sidebar -->
            </div>
        </div>
    </div>
    <div class="nk-gap-2"></div>
@endsection



