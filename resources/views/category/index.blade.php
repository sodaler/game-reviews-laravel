@extends('layouts.main')
@section('content')

    <div class="nk-gap-1"></div>
    <!-- END: Breadcrumbs -->




    <div class="container">


        <div class="nk-gap-2"></div>

        <!-- START: Forums List -->
        <ul class="nk-forum">
            @foreach($categories as $category)
            <li>
                <div class="nk-forum-icon">
                    <span class="ion-ios-game-controller-b"></span>
                </div>
                <div class="nk-forum-title">
                    <h3><a href="{{ ($category->posts->count() > 0) ? route('category.post.index', $category->id) : '#' }}">{{ $category->title }}</a></h3>
                    <div class="nk-forum-title-sub">Количество постов: {{ $category->posts->count() }} </div>
                </div>
                <div class="nk-forum-activity-avatar">
                    <a href="forum-single-topic.html">

                        <img src="{{ $category->user->avatar !== null ? asset('storage/' . $category->user->avatar) : asset('storage/' . 'images/programmer.png') }}" alt="avatar">
                    </a>
                </div>
                <div class="nk-forum-activity">
                    <div class="nk-forum-activity-title text-danger" title="{{ $category->user->name }}">
                        <a href="#">{{ $category->user->name }}</a>
                    </div>
                    {{ \Carbon\Carbon::parse($category->created_at)->translatedFormat('F') }} {{ \Carbon\Carbon::parse($category->created_at)->day }}
                    , {{ \Carbon\Carbon::parse($category->created_at)->year }}
                </div>
            </li>
            @endforeach
        </ul>
        <!-- END: Forums List -->

        <div class="nk-gap-2"></div>

        <!-- START: Pagination -->
        <div class="row">
            <div class="col-md-9">
                <div class="nk-pagination nk-pagination-left">
                    {{ $categories->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>
        <!-- END: Pagination -->
    </div>

    <div class="nk-gap-2"></div>
@endsection
