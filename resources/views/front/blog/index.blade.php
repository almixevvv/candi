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
                <a href="#">{{ ucfirst($request->path()) }}</a>
            </div>
        </div>
    </div>
    <div class="page contacts-page full-width">
        <div id="slider" class="section-scrollable" data-flickity='{ "cellAlign": "left", "contain": true, "pageDots": false, "wrapAround": true }'>
          <div class="section-featured is-featured-image">
            <div class="featured-image" style="background-image: url(https://images.unsplash.com/photo-1524222717473-730000096953?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjExNzczfQ&amp;s=8b1938d0d4ef26e336db84568708980a)"></div>
            <div class="featured-wrap flex">
              <article class="featured-content">
                <span class="featured-label global-tag">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.9712403,8.05987765 L16.2291373,8.05987765 L12.796794,0.459688839 C12.5516266,-0.153229613 11.4483734,-0.153229613 11.0806223,0.459688839 L7.64827899,8.05987765 L0.906176009,8.05987765 C0.538424938,8.05987765 0.170673866,8.30504503 0.0480901758,8.6727961 C-0.0744935148,9.04054717 0.0480901758,9.40829825 0.293257557,9.65346563 L5.31918887,14.3116459 L3.11268244,22.4021694 C2.99009875,22.7699205 3.11268244,23.1376716 3.48043351,23.382839 C3.72560089,23.6280063 4.21593565,23.6280063 4.46110303,23.5054227 L11.9387082,19.2149935 L19.4163133,23.5054227 C19.538897,23.6280063 19.6614807,23.6280063 19.906648,23.6280063 C20.1518154,23.6280063 20.2743991,23.5054227 20.5195665,23.382839 C20.7647339,23.1376716 20.8873176,22.7699205 20.8873176,22.4021694 L18.6808111,14.3116459 L23.7067424,9.65346563 C23.9519098,9.40829825 24.0744935,9.04054717 23.9519098,8.6727961 C23.7067424,8.30504503 23.3389914,8.05987765 22.9712403,8.05987765 Z"/>
                    </svg> 
                    Featured
                </span>
                <h2>
                    <a href="{{ route('blog.detail', ['blog' => 1]) }}">I&#x27;m passionate about food, the tradition of it, cooking it, sharing it</a><span class="featured-dot"></span>
                </h2>
                <div class="item-meta white">
                    <span>by</span>
                    <a href="#">Sean Hamilton</a>, <a href="#">Patricia Jenkins</a>, <a href="#">James Bryant</a>
                    <time datetime="2018-02-15">3 years ago</time>
                </div>
              </article>
            </div>
          </div>	
            
          <div class="section-featured is-featured-image">
              <div class="featured-image" style="background-image: url(https://images.unsplash.com/photo-1520032484190-e5ef81d87978?ixlib=rb-1.2.1&amp;q=75&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=830&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjExNzczfQ)"></div>
              <div class="featured-wrap flex">
                  <article class="featured-content">
                      <span class="featured-label global-tag">
                          <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path d="M22.9712403,8.05987765 L16.2291373,8.05987765 L12.796794,0.459688839 C12.5516266,-0.153229613 11.4483734,-0.153229613 11.0806223,0.459688839 L7.64827899,8.05987765 L0.906176009,8.05987765 C0.538424938,8.05987765 0.170673866,8.30504503 0.0480901758,8.6727961 C-0.0744935148,9.04054717 0.0480901758,9.40829825 0.293257557,9.65346563 L5.31918887,14.3116459 L3.11268244,22.4021694 C2.99009875,22.7699205 3.11268244,23.1376716 3.48043351,23.382839 C3.72560089,23.6280063 4.21593565,23.6280063 4.46110303,23.5054227 L11.9387082,19.2149935 L19.4163133,23.5054227 C19.538897,23.6280063 19.6614807,23.6280063 19.906648,23.6280063 C20.1518154,23.6280063 20.2743991,23.5054227 20.5195665,23.382839 C20.7647339,23.1376716 20.8873176,22.7699205 20.8873176,22.4021694 L18.6808111,14.3116459 L23.7067424,9.65346563 C23.9519098,9.40829825 24.0744935,9.04054717 23.9519098,8.6727961 C23.7067424,8.30504503 23.3389914,8.05987765 22.9712403,8.05987765 Z"/>
                          </svg> Featured
                      </span>
                      <h2><a href="{{ route('blog.detail', ['blog' => 1]) }}">I think it&#x27;s the responsibility of a designer to try to break rules and barriers</a><span class="featured-dot"></span></h2>
                      <div class="item-meta white">
                          <span>by</span>
                          <a href="#">Janet Robertson</a>, <a href="#">James Bryant</a>, <a href="#">Marcos Duran</a>
                          <time datetime="2017-05-30">4 years ago</time>
                      </div>
                  </article>
              </div>
          </div>	
                
          <div class="section-featured is-featured-image">
              <div class="featured-image" style="background-image: url(https://images.unsplash.com/photo-1512414584153-b9a3e3484950?ixlib=rb-0.3.5&amp;q=75&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=830&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjExNzczfQ&amp;s=f61f1a56fd7ab2e18df900258feb8b4c)"></div>
              <div class="featured-wrap flex">
                  <article class="featured-content">
                      <span class="featured-label global-tag">
                          <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path d="M22.9712403,8.05987765 L16.2291373,8.05987765 L12.796794,0.459688839 C12.5516266,-0.153229613 11.4483734,-0.153229613 11.0806223,0.459688839 L7.64827899,8.05987765 L0.906176009,8.05987765 C0.538424938,8.05987765 0.170673866,8.30504503 0.0480901758,8.6727961 C-0.0744935148,9.04054717 0.0480901758,9.40829825 0.293257557,9.65346563 L5.31918887,14.3116459 L3.11268244,22.4021694 C2.99009875,22.7699205 3.11268244,23.1376716 3.48043351,23.382839 C3.72560089,23.6280063 4.21593565,23.6280063 4.46110303,23.5054227 L11.9387082,19.2149935 L19.4163133,23.5054227 C19.538897,23.6280063 19.6614807,23.6280063 19.906648,23.6280063 C20.1518154,23.6280063 20.2743991,23.5054227 20.5195665,23.382839 C20.7647339,23.1376716 20.8873176,22.7699205 20.8873176,22.4021694 L18.6808111,14.3116459 L23.7067424,9.65346563 C23.9519098,9.40829825 24.0744935,9.04054717 23.9519098,8.6727961 C23.7067424,8.30504503 23.3389914,8.05987765 22.9712403,8.05987765 Z"/>
                          </svg> Featured
                      </span>
                      <h2><a href="{{ route('blog.detail', ['blog' => 1]) }}">The creation of beauty is art</a><span class="featured-dot"></span></h2>
                          <div class="item-meta white">
                              <span>by</span>
                              <a href="#">Margaret Robertson</a> <span>&</span> <a href="#">James Bryant</a>
                              <time datetime="2016-12-06">5 years ago</time>
                          </div>
                  </article>
              </div>
          </div>
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
              
              {{-- <div class="item-wrap flex post tag-lifestyle tag-hash-large featured is-image">
                  <article>
                      <a href="{{ route('blog.detail')  }}" class="item-link-overlay" aria-label="I&#x27;m passionate about food, the tradition of it, cooking it, sharing it"></a>
                      <div class="item-image" style="background-image: url(https://images.unsplash.com/photo-1524222717473-730000096953?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjExNzczfQ&amp;s=8b1938d0d4ef26e336db84568708980a)"></div>
                      <h2><a href="{{ route('blog.detail')  }}" class="white">I&#x27;m passionate about food, the tradition of it, cooking it, sharing it</a></h2>
                      <div class="item-meta white is-primary-tag ">
                          <span>by</span>
                          <a href="#">Sean Hamilton</a>
                          <span>and others</span>
                              <time datetime="2018-02-15">3 years ago</time>
                      </div>
                      <a class="primary-tag global-tag white" href="#">Lifestyle</a>
                  </article>
              </div>
              
              <div class="item-wrap flex post tag-people tag-journey no-image ">
                  <article>
                      <a href="{{ route('blog.detail')  }}" class="item-link-overlay" aria-label="Architecture belongs to culture, not to civilization"></a>
                      <h2><a href="{{ route('blog.detail')  }}" class="white">Architecture belongs to culture, not to civilization</a></h2>
                      <div class="item-meta white is-primary-tag ">
                      <span>by</span>
                          <a href="#">Patricia Jenkins</a>
                          <time datetime="2017-10-11">4 years ago</time>
                      </div>
                      <a class="primary-tag global-tag white" href="#">People</a>
                  </article>
              </div>	
              
              <div class="item-wrap flex post tag-people is-image">
                  <article>
                      <a href="{{ route('blog.detail') }}" class="item-link-overlay" aria-label="Look at life with the eyes of a child"></a>
                      <div class="item-image" style="background-image: url(https://images.unsplash.com/photo-1524502974494-abe9b22351c5?ixlib=rb-0.3.5&amp;q=75&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=830&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjExNzczfQ&amp;s=99d928cca1254d88d37a9f2f1642c0d5)"></div>
                      <h2><a href="{{ route('blog.detail') }}" class="white">Look at life with the eyes of a child</a></h2>
                      <div class="item-meta white is-primary-tag ">
                          <span>by</span>
                          <a href="#">Sean Hamilton</a>
                          <time datetime="2017-06-28">4 years ago</time>
                      </div>
                      <a class="primary-tag global-tag white" href="#">People</a>
                  </article>
              </div>		
              
              <div class="item-wrap flex post tag-design featured is-image">
                  <article>
                      <a href="{{  route('blog.detail') }} " class="item-link-overlay" aria-label="I think it&#x27;s the responsibility of a designer to try to break rules and barriers"></a>
                      <div class="item-image" style="background-image: url(https://images.unsplash.com/photo-1520032484190-e5ef81d87978?ixlib=rb-1.2.1&amp;q=75&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=830&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjExNzczfQ)"></div>
                      <h2><a href="{{  route('blog.detail') }} " class="white">I think it&#x27;s the responsibility of a designer to try to break rules and barriers</a></h2>
                      <div class="item-meta white is-primary-tag ">
                          <span>by</span>
                          <a href="#">Janet Robertson</a>
                          <span>and others</span>
                          <time datetime="2017-05-30">4 years ago</time>
                      </div>
                      <a class="primary-tag global-tag white" href="#">Design</a>
                  </article>
              </div>		
              
              <div class="item-wrap flex post tag-education is-image">
                  <article>
                      <a href="{{  route('blog.detail') }} " class="item-link-overlay" aria-label="Every day, in every city and town across the country"></a>
                      <div class="item-image" style="background-image: url(https://images.unsplash.com/photo-1515106426117-7483c8b91e9b?ixlib=rb-0.3.5&amp;q=75&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=830&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjExNzczfQ&amp;s=e7f2a64b9c3918b1714161e88bb1d00c)"></div>
                      <h2><a href="{{  route('blog.detail') }} " class="white">Every day, in every city and town across the country</a></h2>
                      <div class="item-meta white is-primary-tag ">
                          <span>by</span>
                          <a href="#">Margaret Robertson</a>
                          <time datetime="2017-05-16">4 years ago</time>
                      </div>
                      <a class="primary-tag global-tag white" href="#">Education</a>
                  </article>
              </div>	
              
              <div class="item-wrap flex post tag-education tag-hash-red no-image ">
                  <article>
                      <a href="{{ route('blog.detail') }}" class="item-link-overlay" aria-label="Education is the transmission of civilization"></a>
                      <h2><a href="{{ route('blog.detail') }}" class="white">Education is the transmission of civilization</a></h2>
                      <div class="item-meta white is-primary-tag ">
                          <span>by</span>
                          <a href="#">Margaret Robertson</a>
                          <time datetime="2017-01-23">4 years ago</time>
                      </div>
                      <a class="primary-tag global-tag white" href="#">Education</a>
                  </article>
              </div>		
              
              <div class="item-wrap flex post tag-culture is-image">
                  <article>
                      <a href="#" class="item-link-overlay" aria-label="Pop culture is a reflection"></a>
                      <div class="item-image" style="background-image: url(https://images.unsplash.com/photo-1518382473172-c5b406fe7efd?ixlib=rb-0.3.5&amp;q=75&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=830&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjExNzczfQ&amp;s=598e5f569f9994edf8ccc9b9b4903e51)"></div>
                      <h2><a href="#" class="white">Pop culture is a reflection</a></h2>
                      <div class="item-meta white is-primary-tag is-members-label">
                          <span>by</span>
                          <a href="#">Marcos Duran</a>
                          <time datetime="2017-01-14">4 years ago</time>
                      </div>
                      <a class="primary-tag global-tag white" ##">Culture</a>
                  </article>
              </div> --}}
          </div>
      </div>
    </div>
    
</div>
@endsection
