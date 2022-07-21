@extends('layouts.main')
@section('content')
    <!-- START: Breadcrumbs -->
    <div class="nk-gap-1"></div>
    <div class="container">
        <ul class="nk-breadcrumbs">


            <li><a href="#">Домашняя</a></li>

            <li><span class="fa fa-angle-right"></span></li>

            <li><a href="{{ route('post.index') }}"><span>Обзоры игр</span></a></li>

        </ul>
    </div>
    <div class="nk-gap-1"></div>
    <!-- END: Breadcrumbs -->

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
                                    <a href="{{ route('post.show', $post->id) }}" class="nk-post-img">
                                        <img src="{{ asset('storage/' . $post->preview_image) }}"
                                             alt="game post">
                                        <span class="nk-post-comments-count">{{ $post->comments->count() }}</span>
                                    </a>
                                    <span class="nk-post-categories">
                                        @if($post->category)
                                            <span class="bg-main-1">{{ mb_strtoupper($post->category->title) }}</span>
                                        @endif
                                        </span>
                                    <div class="mt-8">
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
                                    </div>

                                    <div class="nk-gap"></div>
                                    <h2 class="nk-post-title h4"><a
                                            href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h2>
                                    <div class="nk-post-by">
                                        <img src="{{ asset('storage/' . $post->user->avatar) }}" alt="Hitman"
                                             class="rounded-circle"
                                             width="35"><a
                                            href="#">{{ $post->user->name }}</a> {{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('F') }} {{ \Carbon\Carbon::parse($post->created_at)->day }}
                                        , {{ \Carbon\Carbon::parse($post->created_at)->year }}
                                    </div>
                                    <div class="nk-gap"></div>

                                    <div class="nk-gap"></div>
                                    <div class="nk-post-text">
                                        <p>{{ preg_replace('/&nbsp;/', '', strip_tags($post->short_description)) }}</p>
                                    </div>
                                    <div class="nk-gap"></div>
                                    <a href="{{ route('post.show', $post->id) }}"
                                       class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Подробнее</a>
                                </div>
                                <!-- END: Post -->
                            </div>
                        @endforeach
                    </div>

                    <!-- START: Pagination -->
                    <div class="nk-pagination nk-pagination-center">
                        <div class="">{{ $posts->links('vendor.pagination.custom') }}</div>

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
                @include('includes.aside')
                <!-- END: Sidebar -->
            </div>
        </div>
    </div>


@endsection
