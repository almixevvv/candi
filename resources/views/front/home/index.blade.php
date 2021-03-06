@extends('layouts.front.index')
@section('content')
<div class="main_slider js_height">
    <div class="slider_wrap" id="main_slider_wrap">
        @foreach($banners as $banner)
            <div class="slide">
                <div class="bg-img" style="background-image: url('{{ $banner->image->image_url }}')"></div>
                <div class="wrap">
                    <div class="wrap_float js_height">
                        <div class="slide_content">
                            <div class="title_wrap home">
                                <p class="slide_title" style="font-size:36pt; width: 100%;">{!! $banner->title !!}</p>
                                <div style="margin-top: 5em;">
                                    <div style="position: relative">
                                        <div style="position: relative">
                                            @if ($banner->has_search)
                                                <input
                                                    type="text"
                                                    class="search-box"
                                                    placeholder="What are you looking for?"
                                                    id="box-search"
                                                    readonly
                                                />
                                                <span style="position: absolute; top: 0.70em; bottom: 0px; left: 0.75em;">
                                                    <i class="fas fa-search"></i>
                                                </span>
                                            @elseif ($banner->button_url)
                                                <div class="banner-button">
                                                    <a href="{{ $banner->button_url }}" class="btn btn-primary-candi banner-button">
                                                        {{ $banner->button_text }}
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<x-directory-categories />

@if ($topDestinations->count())
<div class="destinations">
    <div class="wrap">
        <div class="wrap_float">
            <div class="title_wrap">
                <h2 class="title">{{ $homeData ? $homeData->top_destination : "Top Destinations" }}</h2>
                <p class="subtitle">
                    {{ $homeData ? $homeData->sub_top_destination : "Find out detailed information in a place that you want to know more about." }}
                </p>

            </div>
            <div class="section_content mt-2">
                <div class="scroll">
                    @foreach($topDestinations as $topDestination)
                        <a href="{{  route('directory.detail', ['slug' => $topDestination->slug ]) }}" class="destinations_item" style="background-image: url('{{ $topDestination->image->image_url }}')">
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
                <h2 class="title">{{ $homeData ? $homeData->featured_blog : "Discover Our Journey Stories" }}</h2>
                <p class="subtitle">
                    {{ $homeData ? $homeData->sub_featured_blog : "Let's take a look at the best recommended places to visit and reviews about them" }}
                </p>
            </div>
            <div class="section_content mt-2">
                @foreach($blogCategories as $blogCategory)
                    @if ($blogCategory->blogs->count())
                        @php $blog = $blogCategory->blogs->first(); @endphp
                        <a href="{{ route('blog.detail', ['slug' => $blog->slug]) }}" class="blog_item">
                            <div class="blog_item_top" style="background-image: url('{{ $blog->image ? $blog->image->image_url : "/images/logo_biru.svg" }}');">
                                <div class="sq_parent">
                                    <div class="sq_wrap">
                                        <div class="sq_content">
                                            <div class="tags">
                                                <div class="tag red">{{ $blogCategory->name }}</div>
                                            </div>
                                            <h3 class="_title">
                                                {{ $blog->title }}
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
        @if ($blogCategories->count() > 4)
            <div style="text-align: center; margin-top: 10px;">
                <a href="{{ route('blog') }}" class="link"><label>Load More</label></a>
            </div>
        @endif
    </div>
</div>

<div class="blog slick232">
    <div class="wrap">
        <div class="title_wrap">
            <h2 class="title">{{ $homeData ? $homeData->instagram_head : "Our Instagram Posts" }}</h2>
            <p class="subtitle">
                {{ $homeData ? $homeData->sub_instagram_head : "Let's take a look at our latest instagram posts." }}
            </p>
        </div>
        <div class="wrap_float">
            <div class="section_content mt-2">
                <!-- LightWidget WIDGET -->
                <script src="{{ asset('js/lightwidget.js') }}"></script>
                <div class='embedsocial-stories' data-ref="695d7ac3976d820ed7d7f4d99b44a2ddd4d1f46e" ><a class="stories-powered-by-es" href="https://embedsocial.com/stories/" target="_blank" title="Powered by EmbedSocial">by <span>EmbedSocial</span></a></div><script>(function(d, s, id){var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/embedscript/st.js"; d.getElementsByTagName("head")[0].appendChild(js);}(document, "script", "EmbedSocialStoriesScript"));</script>
            </div>
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
                <div class="right subscription-box">
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
