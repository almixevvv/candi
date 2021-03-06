@extends('layouts.front.index', ['title' => $blog->metadata?->title])

@push('extra-css')
<link rel="stylesheet" href="{{ asset('css/blog/blogdetail.css') }}?version={{ config('app.version') }}">
@endpush

@section('content')

@once
@push('metadata')
    @if ($blog->metadata)
        @include('front.meta', ["metadata" => $blog->metadata])
    @endif
@endpush
@endonce

<div class="container-fluid px-0">
    <div class="breadcrumbs">
    </div>

    <div class="global-wrap">
        <div class="section-content-wrap">
            <article>
                <div class="section-featured is-featured-image">
                    <div class="featured-image" style="background-image: url('{{ $blog->image->image_url }}')"></div>
                    <div class="featured-wrap flex">
                        <div class="featured-content">
                            <div class="tags-wrap">
                                <a class="post-tag global-tag" style="background-color: #50e7e0;color: white;font-weight: bold;" href="../tag/people/index.html">{{ optional($blog->category)->name }}</a>
                            </div>
                            <h1 class="white">{{$blog->title}}</h1>
                            <div class="item-meta white">
                                <time datetime="2017-06-28">{{ $blog->created_at->diffForHumans() }}</time>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" id="postWrapper">
                    <div class="post-wrap ">

                        <div class="markdown">
                            {!! $blog->content !!}
                        </div>

                    </div>
            </article>

            <div class="container-fluid px-0">
                <aside class="section-prev-next">
                    <div class="prev-next-wrap">
                        @if ($newer)
                        <a href="{{ route('blog.detail', ['slug' => $newer->slug]) }}" class="prev-post post tag-people tag-journey is-image ">
                            <div class="prev-next-image" style="background-image: url('{{ $newer->image->image_url }}')"></div>
                            <section class="prev-next-title">
                                <h5>Newer Post</h5>
                                <h3>{{ $newer->title }}</h3>
                            </section>
                        </a>
                        @endif
                        @if ($older)
                        <a href="{{ route('blog.detail', ['slug' => $older->slug]) }}" class="next-post post tag-design featured is-image">
                            <div class="prev-next-image" style="background-image: url('{{ $older->image->image_url }}')"></div>
                            <section class="prev-next-title">
                                <h5>Older Post</h5>
                                <h3>{{ $older->title }}</h3>
                            </section>
                        </a>
                        @endif
                    </div>
                </aside>
            </div>
        </div>
    </div>
    {{-- <div class="page contacts-page full-width">
    </div> --}}
</div>
@endsection
