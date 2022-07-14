@extends('layouts.main')
@section('content')
    <!-- START: Breadcrumbs -->
    <div class="nk-gap-1"></div>
    <div class="container">
        <ul class="nk-breadcrumbs">


            <li><a href="index.html">Home</a></li>


            <li><span class="fa fa-angle-right"></span></li>

            <li><a href="#">Blog</a></li>


            <li><span class="fa fa-angle-right"></span></li>

            <li><span>{{ $category->title }}</span></li>

        </ul>
    </div>
    <div class="nk-gap-1"></div>
    <!-- END: Breadcrumbs -->
    <div class="container">
        <div class="row vertical-gap">
            <div class="col-lg-8">

                <!-- START: Posts List -->
                <div class="nk-blog-list">

                @foreach($posts as $post)
                    <!-- START: Post -->
                        <div class="nk-blog-post nk-gallery-item-box">
                            <div class="nk-popup-gallery">
                                <div class="row vertical-gap">
                                    <div class="col-md-9 col-lg-10 nk-gallery-item-box">
                                        <a href="{{ asset('storage/' . $post->main_image) }}"
                                           class="nk-post-img nk-gallery-item" data-size="1016x572">
                                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                            <img src="{{ asset('storage/' . $post->preview_image) }}"
                                                 alt="Smell magic in the air. Or maybe barbecue">
                                        </a>
                                        <div class="nk-gallery-item-description">
                                            <h4>{{ $post->title }}</h4>
                                            {{ preg_replace('/&nbsp;/', '', strip_tags($post->short_description)) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Post -->
                @endforeach

                <!-- START: Pagination -->
                    <div class="nk-pagination nk-pagination-left">


                        {{ $posts->links('vendor.pagination.custom') }}


                    </div>
                    <!-- END: Pagination -->
                </div>
                <!-- END: Posts List -->

                <div class="nk-gap-2"></div>
                <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Video</span> Galleries</span></h2>
                <div class="nk-gap"></div>
                <div class="row vertical-gap">
                    @foreach($posts as $videoPost)
                        @if($videoPost->preview_url)
                            <div class="col-md-6">
                                <h4>{{ $videoPost->title }}</h4>
                                <div class="nk-plain-video" data-video="{{ $videoPost->preview_url }}"></div>
                            </div>
                        @endif
                    @endforeach
                </div>

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








