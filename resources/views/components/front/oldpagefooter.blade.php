<div class="footer">
    <div class="wrap">
        <div class="wrap_float">
            <div class="footer_top">
                <div class="left">
                    <div class="col">
                        <div class="_title m_title">Bantuan</div>
                        <ul>
                            <li><a href="#">Cara Pemesanan</a></li>
                            <li><a href="#">Hubungi Kami</a></li>
                            <li><a href="#">Kebijakan Privasi</a></li>
                            <li><a href="#">Syarat dan Ketentuan</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <div class="_title m_title">Perusahaan</div>
                        <ul>
                            <li><a href="{{ route('whoweare') }}">Who We Are</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            <li><a href="{{ route('directory') }}">Directory</a></li>
                            <li><a href="{{ route('promo') }}">Promo</a></li>
                            <li><a href="{{ route('advertise') }}">Advertise With Us</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <div class="_title m_title">Latest Blog</div>
                        <ul>
                            @foreach ($latest_blog as $blog)
                                <li><a href="{{ route('blog.detail', ['blog' => $blog]) }}">{{$blog->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <div class="_title">Contacts</div>
                    <div class="contacts_info">
                        <div class="tel">
                            {{-- <a href="tel:+1500383">+ 1500383</a> --}}
                            <a href="https://api.whatsapp.com/send?phone=+6289525022809" target="_blank">+ 1500383</a>
                            <p>Round the clock support</p>
                        </div>
                        <div class="email">
                            {{-- <a href="mailto:info@hellodigi.ru">info@candi.id</a> --}}
                            <a href="mailto:wisan.maulana@gmail.com?subject=test" target="_blank">info@candi.id</a>
                            <p>For any questions</p>
                        </div>
                        <div class="address">
                            1355 Digistrict St, Suite 909 San, Francisco, CA 10001 <br> United States
                        </div>
                    </div>
                    <div class="socials social-links">
                        <a href="https://www.facebook.com/Arfadia.PT/" class="link facebook"><span></span></a>
                        <a href="https://www.instagram.com/arfadia/" class="link instagram"><span></span></a>
                        <a href="#" class="link pinterest"><span></span></a>
                        <a href="https://twitter.com/arfadia?lang=en" class="link twitter"><span></span></a>
                        <a href="#" class="link youtube"><span></span></a>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="left">
                    Copyright © 2021 by Candi
                </div>
                <div class="right">
                    <a href="#" style="color: white; ">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</div>