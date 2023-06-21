@extends('layouts.main')
@section('content')

    <div class="nk-main">

        <!-- START: Breadcrumbs -->
        <div class="nk-gap-1"></div>
        <div class="container">
            <ul class="nk-breadcrumbs">


                <li><a href="{{ route('post.index') }}">Домашняя</a></li>


                <li><span class="fa fa-angle-right"></span></li>

                <li><span>Галлерея</span></li>

            </ul>
        </div>
        <div class="nk-gap-1"></div>
        <!-- END: Breadcrumbs -->


        <div class="container">

            <div class="nk-gap-2"></div>
            <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Выберите</span> категорию</span></h2>
            <div class="nk-gap"></div>
            <div class="row vertical-gap">
                @foreach($categories as $category)
                    <div class="col-md-6">
                        <div class="nk-gallery-item-group">
                            <a href="{{ route('gallery.post.index', $category->id) }}" class="nk-gallery-item">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="{{ $category->preview_image }}" alt="">
                            </a>
                            <div class="nk-gallery-item-description">
                                <h4 class="nk-gallery-item-description-title h5">{{ $category->title }}</h4>
                                <div class="nk-gallery-item-description-info">
                                    <span class="far fa-image"></span>
                                    <span>{{ $category->posts->count() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="nk-gap-2"></div>

            <!-- START: Pagination -->
            <div class="row">
                <div class="col-md-9">
                    <div class="nk-pagination nk-pagination-left">
                        {{ $categories->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>

            <div class="nk-gap-2"></div>

            <div class="row vertical-gap">
                <div class="col-lg-8">
                    <!-- START: Latest Pictures -->
                    <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Все</span> Изображения</span></h2>
                    <div class="nk-gap"></div>
                    <div class="nk-popup-gallery">
                        <div class="row vertical-gap">
                            @foreach($posts as $post)
                            <div class="col-lg-12 col-md-12">
                                <div class="nk-gallery-item-box">
                                    <a href="{{ asset('storage/' . $post->main_image) }}" class="nk-gallery-item" data-size="1016x572">
                                        <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                        <img src="{{ asset('storage/' . $post->main_image) }}" alt="">
                                    </a>
                                    <div class="nk-gallery-item-description">
                                        <h4>{{ $post->title }}</h4>
                                        {{ preg_replace('/&nbsp;/', '', strip_tags($post->short_description)) }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="nk-gap-2"></div>

                    <!-- START: Pagination -->
                    <div class="row">
                        <div class="col-md-9">
                            <div class="nk-pagination nk-pagination-left">
                                {{ $posts->links('vendor.pagination.custom') }}
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-lg-4">

                   @include('includes.aside')
                    <!-- END: Sidebar -->
                </div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
@endsection
