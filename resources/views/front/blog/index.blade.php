@extends('layouts.front.index')
@section('content')

<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="./css/blog/blogmain.css">

<div class="container-fluid px-0">
    <div class="breadcrumbs">
        <div class="wrap">
            <div class="wrap_float">
                <a href="{{ route('home') }}">Home</a>
                <span class="separator">/</span>
                <a href="#">{{ ucfirst(request()->path()) }}</a>
            </div>
        </div>
    </div>
    <div class="page contacts-page full-width">
        <div id="slider" class="section-scrollable" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false, "wrapAround": true }'>	            
            @foreach($featuredBlogs as $featuredBlog)
                <div class="section-featured is-featured-image">
                    <div class="featured-image" style="background-image: url({{ $featuredBlog->image->image_url }})"></div>
                    <div class="featured-wrap flex">
                        <article class="featured-content">
                            <span class="featured-label global-tag">
                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.9712403,8.05987765 L16.2291373,8.05987765 L12.796794,0.459688839 C12.5516266,-0.153229613 11.4483734,-0.153229613 11.0806223,0.459688839 L7.64827899,8.05987765 L0.906176009,8.05987765 C0.538424938,8.05987765 0.170673866,8.30504503 0.0480901758,8.6727961 C-0.0744935148,9.04054717 0.0480901758,9.40829825 0.293257557,9.65346563 L5.31918887,14.3116459 L3.11268244,22.4021694 C2.99009875,22.7699205 3.11268244,23.1376716 3.48043351,23.382839 C3.72560089,23.6280063 4.21593565,23.6280063 4.46110303,23.5054227 L11.9387082,19.2149935 L19.4163133,23.5054227 C19.538897,23.6280063 19.6614807,23.6280063 19.906648,23.6280063 C20.1518154,23.6280063 20.2743991,23.5054227 20.5195665,23.382839 C20.7647339,23.1376716 20.8873176,22.7699205 20.8873176,22.4021694 L18.6808111,14.3116459 L23.7067424,9.65346563 C23.9519098,9.40829825 24.0744935,9.04054717 23.9519098,8.6727961 C23.7067424,8.30504503 23.3389914,8.05987765 22.9712403,8.05987765 Z"/>
                                </svg> Featured
                            </span>
                            <h2>
                                <a href="{{ route('blog.detail', ['blog' => 1]) }}">
                                    {{ $featuredBlog->title }}
                                </a>
                                <span class="featured-dot"></span>
                            </h2>
                            <div class="item-meta white">
                                <time datetime="2017-05-30">{{ $featuredBlog->created_at->diffForHumans() }}</time>
                            </div>
                        </article>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div id="next" class="scrollable-nav">
      <span class="next"></span>
    </div>

    <div class="page blog-list-page full-width">
      <div id="loop" class="section-loop blog-wrap" style="margin-top: 0">
          <div class="items-wrap flex loop-first">
              @foreach($blogCategories as $blogCategory)
                @if (count($blogCategory->blogs))
                  <div class="item-wrap flex post tag-story tag-hash-orange tag-hash-post-orange tag-hash-cta-violet no-image ">
                      <article>
                          <a href="{{ route('blog.detail', ['blog' => $blogCategory->blogs[0]]) }}" class="item-link-overlay" aria-label="The future of architecture is culture"></a>
                          <div class="item-image" style="background-image: url({{ $blogCategory->blogs[0]->image->image_url }})"></div>
                          <h2><a href="{{ route('blog.detail', ['blog' => $blogCategory->blogs[0]]) }}" class="white">{{ $blogCategory->blogs[0]->title }}</a></h2>
                          <div class="item-meta white is-primary-tag is-members-label">
                              <span>by</span>
                              <a href="#">Patricia Jenkins</a>
                              <time datetime="2018-05-17">{{ $blogCategory->blogs[0]->created_at->diffForHumans() }}</time>
                          </div>
                          <a class="primary-tag global-tag white" href="#">{{ $blogCategory->name }}</a>
                      </article>
                  </div>
                @endif
              @endforeach
          </div>
      </div>
    </div>
    
</div>
@endsection
