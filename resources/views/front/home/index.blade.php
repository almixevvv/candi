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
                    <a href="{{  route('directory.detail', ['directory' => 3 ]) }}" class="destinations_item" style="background-image: url(data:image/jpeg;base64,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)">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content">
                                    <div class="_content">
                                        <h3 class="_title">Nourish Cafe</h3>
                                        <p class="_info">45 tours | 62 hotels</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shadow js-shadow"></div>
                    </a>

                    <a href="{{  route('directory.detail', ['directory' => 3 ]) }}" class="destinations_item" style="background-image: url(https://images.unsplash.com/photo-1481833761820-0509d3217039?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FmZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60)">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content">
                                    <div class="_content">
                                        <h3 class="_title">Asep Cafe</h3>
                                        <p class="_info">45 tours | 62 hotels</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shadow js-shadow"></div>
                    </a>

                    <a href="{{  route('directory.detail', ['directory' => 3 ]) }}" class="destinations_item" style="background-image: url(https://1.bp.blogspot.com/-VZ3uTgwvAfU/XzTiL2ZXg9I/AAAAAAAB08Q/MSLIunQhIdYLNgFgdXgASf6t9ecaWd0zACLcBGAsYHQ/s1080/Resep%2BAyam%2BBakar%2BKecap.jpeg)">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content">
                                    <div class="_content">
                                        <h3 class="_title">Ayam Bakar Bu Yanti</h3>
                                        <p class="_info">45 tours | 62 hotels</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shadow js-shadow"></div>
                    </a>

                    <a href="{{  route('directory.detail', ['directory' => 3 ]) }}" class="destinations_item" style="background-image: url(https://www.unileverfoodsolutions.co.id/dam/global-ufs/mcos/SEA/calcmenu/recipes/ID-recipes/rice-dishes/nasi-kuning/main-header.jpg)">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content">
                                    <div class="_content">
                                        <h3 class="_title">Nasi Kuning Komplit</h3>
                                        <p class="_info">45 tours | 62 hotels</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shadow js-shadow"></div>
                    </a>

                    <a href="{{  route('directory.detail', ['directory' => 3 ]) }}" class="destinations_item" style="background-image: url(https://akcdn.detik.net.id/community/media/visual/2019/08/02/c688a5f4-adc7-4734-84a7-2b757db02f62.jpeg?w=700&q=90)">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content">
                                    <div class="_content">
                                        <h3 class="_title">Sambal Pedas</h3>
                                        <p class="_info">45 tours | 62 hotels</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shadow js-shadow"></div>
                    </a>

                    <a href="{{  route('directory.detail', ['directory' => 3 ]) }}" class="destinations_item" style="background-image: url(https://ik.imagekit.io/tvlk/cul-asset/guys1L+Yyer9kzI3sp-pb0CG1j2bhflZGFUZOoIf1YOBAm37kEUOKR41ieUZm7ZJ/tvlk-prod-cul-assets/culinary/asset/REST_cen-1080x720-FIT_AND_TRIM-a6c35b8ae7660c790174c903b921a19b.jpeg?tr=q-40,c-at_max,w-1080,h-1920&amp;_src=imagekit)">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content">
                                    <div class="_content">
                                        <h3 class="_title">Sop Konco</h3>
                                        <p class="_info">45 tours | 62 hotels</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shadow js-shadow"></div>
                    </a>

                    <a href="{{  route('directory.detail', ['directory' => 3 ]) }}" class="destinations_item" style="background-image: url(https://assets-pergikuliner.com/E-oUHL_lTuLK72r5eKG6sd2inIg=/385x290/smart/https://assets-pergikuliner.com/uploads/image/picture/1544282/picture-1566278812.jpg)">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content">
                                    <div class="_content">
                                        <h3 class="_title">Es Buntin</h3>
                                        <p class="_info">45 tours | 62 hotels</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shadow js-shadow"></div>
                    </a>

                    <a href="{{ route('directory') }}" class="destinations_item" style="background-image: url(https://images.unsplash.com/photo-1568909344668-6f14a07b56a0?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8anVpY2V8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60)">
                        <div class="sq_parent">
                            <div class="sq_wrap">
                                <div class="sq_content">
                                    <div class="_content">
                                        <h3 class="_title">Es Kode</h3>
                                        <p class="_info">45 tours | 62 hotels</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shadow js-shadow"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

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

                    <div class="input_wrap" style="border-radius:40px; text-align:center;">
                        <input type="email" class="input" placeholder="Put your email here">
                    </div>
                    <button class="submit button"><span style="color: black;">Subscribe Now</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
