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
                        <div class="address">
                            {{ $_profile->address }}
                        </div>
                    </div>
                    <div class="socials social-links">
                        @if ($_profile->facebook)
                            <a href="https://facebook.com/{{ $_profile->facebook }}" class="link facebook" target="_blank"><span></span></a>
                        @endif
                        @if ($_profile->instagram)
                            <a href="https://instagram.com/{{ $_profile->instagram }}" class="link instagram" target="_blank"><span></span></a>
                        @endif
                        @if ($_profile->twitter)
                            <a href="https://twitter.com/{{ $_profile->twitter }}" class="link twitter" target="_blank"><span></span></a>
                        @endif
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
