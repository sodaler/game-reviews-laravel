@extends('layouts.main')
@section('content')
    <!-- START: Breadcrumbs -->
    <div class="nk-gap-1"></div>
    <div class="container">
        <ul class="nk-breadcrumbs">


            <li><a href="{{ route('post.index') }}">Домашняя</a></li>


            <li><span class="fa fa-angle-right"></span></li>

            <li><a href="#">Игры</a></li>


            <li><span class="fa fa-angle-right"></span></li>

            <li><span>Лучшие бесплатные игры</span></li>

        </ul>
    </div>
    <div class="nk-gap-1"></div>
    <!-- END: Breadcrumbs -->
    <div class="container">
        <div class="row vertical-gap">
            <div class="col-lg-8">

                <!-- START: Posts List -->
                <div class="nk-blog-list">

                    @foreach($topGames as $game)
                    <!-- START: Post -->
                    <div class="nk-blog-post">
                        <div class="row vertical-gap">
                            <div class="col-md-5 col-lg-6">
                                <a href="{{ $game->game_url }}" class="nk-post-img">
                                    <img src="{{ $game->thumbnail }}"
                                         alt="Smell magic in the air. Or maybe barbecue">
                                    <span class="nk-post-comments-count">{{ $game->genre }}</span>
                                </a>
                            </div>
                            <div class="col-md-7 col-lg-6">
                                <h2 class="nk-post-title h4"><a href="{{ $game->game_url }}">{{ $game->title }}</a></h2>

                                <div class="nk-post-text">
                                    <p>{{ $game->short_description }}</p>
                                </div>

                                <div class="nk-post-by">
                                    <img src="{{ asset('storage/images/programmer.png') }}" alt="Hitman" class="rounded-circle"
                                         width="35"> by <a href="#">{{ $game->developer }}</a> {{ $game->release_date }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Post -->
                    @endforeach

                    <!-- START: Pagination -->
                    <div class="nk-pagination nk-pagination-center">


                            {{ $topGames->links('vendor.pagination.custom') }}


                    </div>
                    <!-- END: Pagination -->
                </div>
                <!-- END: Posts List -->

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
