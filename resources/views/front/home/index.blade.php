@extends('layouts.front.index')
@section('content')
<div class="main_slider js_height">
    <div class="slider_wrap" id="main_slider_wrap">
        <div class="slide">
            <div class="bg-img" style="background-image: url('/images/bali.jpg')"></div>
            <div class="wrap">
                <div class="wrap_float js_height">
                    <div class="slide_content">
                        <div class="title_wrap" style="margin-top: -25em;">
                            <p class="slide_title" style="font-size:36pt; text-align:center;">Time to start a journey</p>
                            <div id="rcorners1" class="searching-menu">
                                <img src="/images/search-hover.svg" style="float:left;width:1.25em;"></img>
                                <label style="float:left;">&nbsp; What are you looking for?</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-directory-categories />

@if ($topDestinations->count())
<div class="destinations">
    <div class="wrap">
        <div class="wrap_float">
            <div class="title_wrap">
                <h2 class="title">Top Destinations</h2>
                <p class="subtitle">
                    Find out detailed information in a place that you want to know more about.
                </p>

            </div>
            <div class="section_content mt-2">
                <div class="scroll">
                    @foreach($topDestinations as $topDestination)
                        <a href="{{  route('directory.detail', ['directory' => $topDestination->id ]) }}" class="destinations_item" style="background-image: url({{ $topDestination->image->image_url }})">
                            <div class="sq_parent">
                                <div class="sq_wrap">
                                    <div class="sq_content">
                                        <div class="_content">
                                            <h3 class="_title">{{ $topDestination->title }}</h3>
                                            <p class="_info">{{ $topDestination->tags->map(fn($tag) => $tag->name)->join(", ") }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shadow js-shadow"></div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<div class="blog slick232">
    <div class="wrap">
        <div class="wrap_float">
            <div class="title_wrap">
                <h2 class="title">Discover Our Journey Stories</h2>
                <p class="subtitle">
                    Let's take a look at the best recommended places to visit and reviews about them
                </p>
            </div>
            <div class="section_content mt-2">
                @foreach($blogCategories as $blogCategory)
                    @if (count($blogCategory->blogs))
                        <a href="{{ route('blog.detail', ['blog' => $blogCategory->blogs[0]]) }}" class="blog_item">
                            <div class="blog_item_top" style="background-image: url({{ $blogCategory->blogs[0]->image->image_thumbnail }});">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="tags">
                                                <div class="tag red">{{ $blogCategory->name }}</div>
                                            </div>
                                            <h3 class="_title">
                                                {{ $blogCategory->blogs[0]->title }}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow js-shadow" style="background-image: url(https://images.unsplash.com/photo-1524222717473-730000096953?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjExNzczfQ&amp;s=8b1938d0d4ef26e336db84568708980a);"></div>
                            </div>
                            <div class="blog_item_bottom">
                            </div>
                        </a>
                    @endif
                @endforeach


            </div>
        </div>
        <div style="text-align: center; margin-top: 10px;">
            <a href="{{ route('blog') }}" class="link"><label>Load More</label></a>
        </div>
    </div>
</div>

<div class="subscribe_section">
    <div class="wrap">
        <div class="wrap_float">
            <div class="subscribe_block" style="background-image: url(/images/asia.jpg)">
                <div class="left">
                    <h2 class="_title">Stay in touch</h2>

                </div>
                <div class="right" style="background-color: #fff;padding-left:2%;padding-right:2%;padding-top:5%;padding-bottom:5%; text-align:center;border-radius:20px;">
                    <label for="">Get a variety of information about your favorite places</label>
                    <br> <br>

                    <form method="POST" action="{{ route('subscriptions.subscribe') }}">
                        @csrf
                        <div class="input_wrap" style="border-radius:40px; text-align:center;">
                            <input type="email" name="email" class="input" placeholder="Put your email here">
                            @if ($errors->has('email'))
                                <i style="color: red">{{ $errors->first('email') }}</i>
                            @endif
                        </div>
                        <button class="submit button"><span style="color: black;">Subscribe Now</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
