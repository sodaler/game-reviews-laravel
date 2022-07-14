@extends('layouts.main')
@section('content')

    <div class="nk-gap-1"></div>
    <!-- END: Breadcrumbs -->




    <div class="container">
        <div class="row vertical-gap">
            <div class="col-lg-8">

                <!-- START: Tabs  -->
                <div class="nk-tabs">
                    <!--
                        Additional Classes:
                            .nav-tabs-fill
                    -->
                    <div class="tab-content">



                            <div class="nk-gap"></div>
                            <!-- START: Action Tab -->

                            @foreach($posts as $post)
                            <div class="nk-blog-post nk-blog-post-border-bottom mt-5">
                                <a href="{{ route('post.show', $post->id) }}" class="nk-post-img">
                                    <img src="{{ asset('storage/' . $post->preview_image) }}" alt="Grab your sword and fight the Horde">

                                    <span class="nk-post-categories">
                                        <span class="bg-main-1">{{ $post->category->title  }}</span>
                                    </span>

                                </a>
                                <div class="nk-gap-1"></div>
                                <h2 class="nk-post-title h4"><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h2>
                                <div class="nk-post-date mt-10 mb-10">
                                    <span class="fa fa-calendar"></span> {{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('F') }} {{ \Carbon\Carbon::parse($post->created_at)->day }}
                                    , {{ \Carbon\Carbon::parse($post->created_at)->year }}
                                    <span class="fa fa-comments"></span> {{ $post->comments->count() }}
                                </div>
                                <div class="nk-post-text">
                                    <p>{{ preg_replace('/&nbsp;/', '', strip_tags($post->short_description)) }}</p>
                                </div>
                            </div>
                            @endforeach


                            <!-- END: Action Tab -->
                            <div class="nk-gap"></div>

                            <div class="nk-blog-grid">
                                <div class="row">
                                    <div class="nk-pagination nk-pagination-center">
                                        <div class="">{{ $posts->links('vendor.pagination.custom') }}</div>
                                    </div>
                                </div>

                                <!-- START: Pagination -->
                                <!-- END: Pagination -->
                            </div>
                            <!-- END: Posts Grid -->

                    </div>
                </div>
                <!-- END: Tabs -->


                <!-- START: Posts Grid -->


            </div>
            <div class="col-lg-4">
                <!--
                    START: Sidebar
                -->
                @include('includes.aside')
                <!-- END: Sidebar -->
            </div>
        </div>
    </div>
@endsection
