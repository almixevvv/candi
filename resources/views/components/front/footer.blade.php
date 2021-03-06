<div class="footer">
    <div class="wrap">
        <div class="wrap_float">
            <div class="footer_top">
                <div class="left">
                    @if ($_footerMenu->count())
                        <div class="col">
                            <div class="_title m_title">Bantuan</div>
                            <ul>
                                @foreach($_footerMenu as $menu)
                                    <li><a href="{{ route('page.show', $menu->page) }}">{{ $menu->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col">
                        <div class="_title m_title"><img src="/images/logo_horizontal.svg" alt="Candi Logo Original" width="50%"></div>
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
                        @if(count($latest_blog))
                            <div class="_title m_title">Latest Blog</div>
                            <ul>
                                @foreach ($latest_blog as $blog)
                                    <li><a href="{{ route('blog.detail', ['slug' => $blog->slug]) }}">{{$blog->title}}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="right">
                    <div class="_title">Contacts</div>
                    <div class="contacts_info">
                        <div class="tel">
                            <a href="https://api.whatsapp.com/send?phone={{ $_profile->phone_number }}" target="_blank">{{ Str::phoneFormat($_profile->phone_number) }}</a>
                            <p>Round the clock support</p>
                        </div>
                        <div class="email">
                            <a href="mailto:{{ $_profile->email }}">{{ $_profile->email }}</a>
                            <p>For any questions</p>
                        </div>
                        <div>&nbsp;</div>
                    </div>
                    <div class="socials social-links">
                        @if ($_profile->email)
                            <a href="mailto:{{ $_profile->email }}" class="link" target="_blank"><i class="fas fa-2x fa-envelope"></i></a>
                        @endif
                        @if ($_profile->phone_number)
                            <a href="https://api.whatsapp.com/send?phone={{ $_profile->phone_number }}" class="link" target="_blank"><i class="fab fa-2x fa-whatsapp"></i></a>
                        @endif
                        @if ($_profile->facebook)
                            <a href="{{ $_profile->facebook }}" class="link" target="_blank"><i class="fab fa-2x fa-facebook"></i></a>
                        @endif
                        @if ($_profile->instagram)
                            <a href="{{ $_profile->instagram }}" class="link" target="_blank"><i class="fab fa-2x fa-instagram"></i></a>
                        @endif
                        @if ($_profile->twitter)
                            <a href="{{ $_profile->twitter }}" class="link" target="_blank"><i class="fab fa-2x fa-twitter"></i></a>
                        @endif
                        @if ($_profile->tik_tok)
                            <a href="{{ $_profile->tik_tok }}" class="link" target="_blank"><i class="fab fa-2x fa-tiktok"></i></a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="left">
                    Copyright ?? 2021 by Candi
                </div>
                <div class="right">
                    <a href="#" style="color: white; ">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</div>
