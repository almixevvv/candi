<header class="header_area">
    <div class="top_panel inversion" id="top-panel">
        <div class="wrap">
            <div class="wrap_float">
                <div class="left">
                    <div id="search-button">
                        <i class="fas fa-lg fa-search" style="position: absolute;top: 17px;left: 13px;"></i>
                    </div>
                    <a href="/home" class="logo">
                        @if (strlen(request()->path()) > 1 && request()->path() != 'home')
                            <img src="/images/logo_horizontal_2.svg" alt="Candi Alt Logo">
                        @elseif (request()->path() == '/home')
                            <img src="/images/logo_horizontal_2.svg" alt="Candi Logo Original">
                        @else
                            <img src="/images/logo_horizontal_2.svg" alt="Candi Logo Original">
                        @endif
                    </a>
                </div>
                <div class="menu_wrap" id="menu_wrap">
                    <div class="scroll">
                        <div class="center">
                            <div class="menu" id="menu_mobile_content">
                                <ul>
                                    <li><a href="{{ route('whoweare') }}"><span>Who We Are</span></a></li>
                                    <li><a href="{{ route('blog') }}"><span>Blog</span></a></li>
                                    <li><a href="{{ route('contact') }}"><span>Contact Us</span></a></li>
                                    <li><a href="{{ route('directory') }}"><span>Directory</span></a></li>
                                    <li><a href="{{ route('promo') }}"><span>Promo</span></a></li>
                                    <li><a href="{{ route('advertise') }}"><span>Advertise with Us</span></a></li>
                                </ul>
                                <div class="mobile_content">
                                    <div class="currency_mob">
                                    </div>
                                    <div class="social">
                                        @if ($_profile->phone_number)
                                            <a href="https://api.whatsapp.com/send?phone={{ $_profile->phone_number }}" class="link" target="_blank"><i style="color: white;" class="fab fa-2x fa-whatsapp"></i></a>
                                        @endif
                                        @if ($_profile->facebook)
                                            <a href="{{ $_profile->facebook }}" class="link" target="_blank"><i style="color: white;" class="fab fa-2x fa-facebook"></i></a>
                                        @endif
                                        @if ($_profile->instagram)
                                            <a href="{{ $_profile->instagram }}" class="link" target="_blank"><i style="color: white;" class="fab fa-2x fa-instagram"></i></a>
                                        @endif
                                        @if ($_profile->twitter)
                                            <a href="{{ $_profile->twitter }}" class="link" target="_blank"><i style="color: white;" class="fab fa-2x fa-twitter"></i></a>
                                        @endif
                                        @if ($_profile->tik_tok)
                                            <a href="{{ $_profile->tik_tok }}" class="link" target="_blank"><i style="color: white;" class="fab fa-2x fa-tiktok"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="close" id="menu-close">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="mobile_btn" id="mobile_btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>
