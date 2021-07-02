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
                            <li><a href="{{ route('blog.detail') }}">The future of architecture</a></li>
                            <li><a href="{{ route('blog.detail') }}">Look at life with the eyes of a child</a></li>
                            <li><a href="{{ route('blog.detail') }}">Pop culture is a reflection</a></li>
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <div class="_title">Contacts</div>
                    <div class="contacts_info">
                        <div class="tel">
                            <a href="tel:{{ $_profile->phone_number }}">{{ $_profile->phone_number }}</a>
                            <p>Round the clock support</p>
                        </div>
                        <div class="email">
                            <a href="mailto:{{ $_profile->email }}">{{ $_profile->email }}</a>
                            <p>For any questions</p>
                        </div>
                        <div class="address">
                            {{ $_profile->address }}
                        </div>
                    </div>
                    <div class="socials social-links">
                        <a href="{{ $_profile->facebook }}" class="link facebook"><span></span></a>
                        <a href="{{ $_profile->instagram }}" class="link instagram"><span></span></a>
                        <a href="{{ $_profile->youtube }}" class="link youtube"><span></span></a>
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
