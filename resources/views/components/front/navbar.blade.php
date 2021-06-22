<header class="header_area">
    <div class="top_panel inversion">
        <div class="wrap">
            <div class="wrap_float">
                <div class="left">
                    <div class="search_btn"></div>
                    <a href="/home" class="logo">
                        @if (strlen($request->path()) > 1 && $request->path() != 'home')
                            <img src="/images/logo_horizontal_2.svg" alt="Candi Alt Logo">
                        @elseif ($request->path() == '/home')
                            <img src="/images/logo_horizontal.svg" alt="Candi Logo Original">
                        @else
                            <img src="/images/logo_horizontal.svg" alt="Candi Logo Original">
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
                                        <select>
                                            <option value="usd">usd</option>
                                            <option value="rub">rub</option>
                                            <option value="eur">eur</option>
                                        </select>
                                        <p>
                                            Chosen currency
                                        </p>
                                    </div>
                                    <div class="tel">
                                        <a href="tel:+0034411345777">+ 00 344 113 457 77</a>
                                        <p>Round the clock support</p>
                                    </div>
                                    <div class="social">
                                        <a href="#" class="link facebook"><span></span></a>
                                        <a href="#" class="link instagram"><span></span></a>
                                        <a href="#" class="link pinterest"><span></span></a>
                                        <a href="#" class="link twitter"><span></span></a>
                                        <a href="#" class="link youtube"><span></span></a>
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