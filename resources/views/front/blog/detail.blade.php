@extends('layouts.front.index')
@section('content')

<div class="container-fluid px-0">
    <div class="breadcrumbs">
        <div class="wrap">
            <div class="wrap_float">
                <a href="#">Home</a>
                <span class="separator">/</span>
                <a href="{{ route('blog') }}">Blog</a>
                <span class="separator">/</span>
                <a href="#">Look at life with the eyes of a child</a>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="./css/blog/blogdetail.css">
    
    <div class="global-wrap">
        <div class="section-content-wrap">
            <article>
                <div class="section-featured is-featured-image">
                    <div class="featured-image" style="background-image: url(https://images.unsplash.com/photo-1524502974494-abe9b22351c5?ixlib=rb-0.3.5&amp;q=75&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=830&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjExNzczfQ&amp;s=99d928cca1254d88d37a9f2f1642c0d5)"></div>
                    <div class="featured-wrap flex">
                        <div class="featured-content">
                            <div class="tags-wrap">
                                <a class="post-tag global-tag" href="../tag/people/index.html">People</a>
                            </div>
                            <h1 class="white">Look at life with the eyes of a child</h1>
                            <div class="item-meta white">
                                <span>by</span>
                                <a href="../author/sean/index.html">Sean Hamilton</a>
                                <time datetime="2017-06-28">4 years ago</time>
                                <span class="reading-time">
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> 
                                        <path d="M10.1907692,24 C4.5625628,24 0,19.4374372 0,13.8092308 C0,8.18102433 4.5625628,3.61846154 10.1907692,3.61846154 C15.8189757,3.61846154 20.3815385,8.18102433 20.3815385,13.8092308 C20.3815385,19.4374372 15.8189757,24 10.1907692,24 Z M10.1907692,22 C14.7144062,22 18.3815385,18.3328677 18.3815385,13.8092308 C18.3815385,9.28559383 14.7144062,5.61846154 10.1907692,5.61846154 C5.6671323,5.61846154 2,9.28559383 2,13.8092308 C2,18.3328677 5.6671323,22 10.1907692,22 Z" id="Oval"></path><path d="M7.53230769,2.32923077 C6.98002294,2.32923077 6.53230769,1.88151552 6.53230769,1.32923077 C6.53230769,0.776946019 6.98002294,0.329230769 7.53230769,0.329230769 L12.9225711,0.329230769 C13.4748559,0.329230769 13.9225711,0.776946019 13.9225711,1.32923077 C13.9225711,1.88151552 13.4748559,2.32923077 12.9225711,2.32923077 L7.53230769,2.32923077 Z" id="Line-2"></path><path d="M13.2928932,9.29289322 C13.6834175,8.90236893 14.3165825,8.90236893 14.7071068,9.29289322 C15.0976311,9.68341751 15.0976311,10.3165825 14.7071068,10.7071068 L10.897876,14.5163376 C10.5073517,14.9068618 9.87418674,14.9068618 9.48366245,14.5163376 C9.09313816,14.1258133 9.09313816,13.4926483 9.48366245,13.102124 L13.2928932,9.29289322 Z" id="Line"></path>
                                    </svg> 2 min read
                                </span>
                            </div>
                        </div>
                    </div>
                </div>	
                <div class="container" id="postWrapper">
                    <div class="post-wrap ">
                        <!--kg-card-begin: markdown-->
                        <p>Sed ut iis bonis erigimur, quae expectamus, sic laetamur iis, quae recordamur. At hoc in eo M. Quid de Platone aut de Democrito loquar. Quae in controversiam veniunt, de iis, si placet, disseramus. Iam quae corporis sunt, ea nec auctoritatem cum animi partibus, comparandam et cognitionem habent faciliorem. Quam ob rem tandem, inquit, non satisfacit. Isto modo ne improbos quidem, si essent boni viri. Qui autem esse poteris, nisi te amor ipse ceperit. Utilitatis causa amicitia est quaesita.</p>
                        <p>Quae quo sunt excelsiores, eo dant clariora indicia naturae. Sed haec quidem liberius ab eo dicuntur et saepius. Et ille ridens: Video, inquit, quid agas; Tum ille timide vel potius verecunde: Facio, inquit. An hoc usque quaque, aliter in vita? Unum nescio, quo modo possit, si luxuriosus sit, finitas cupiditates habere. Aliter enim explicari, quod quaeritur, non potest. Sed haec quidem liberius ab eo dicuntur et saepius.</p>
                        <h4 id="utinamquidemdicerentaliumaliobeatioremiamruinasvideresnonautemhocigituraudioequidemphilosophivocemepicure">Utinam quidem dicerent alium alio beatiorem. Iam ruinas videres. Non autem hoc, igitur. Audio equidem philosophi vocem, Epicure.</h4>
                        <p>Sed quid tibi dicendum sit oblitus es. Haec et tu ita posuisti, et verba vestra sunt. Contemnit enim disserendi elegantiam, confuse loquitur. Bona autem corporis huic sunt, quod posterius posui, similiora. Quod cum ita sit, perspicuum est omnis rectas res atque laudabilis eo referri, ut cum voluptate vivatur.</p>
                        <p>Quasi vero aut concedatur in omnibus stultis aeque magna esse vitia, et eadem inbecillitate et inconstantia L. Levatio igitur vitiorum magna fit in iis, qui habent ad virtutem progressionis aliquantum. Tertium autem omnibus aut maximis rebus iis, quae secundum naturam sint, fruentem vivere. Materiam vero rerum et copiam apud hos exilem, apud illos uberrimam reperiemus. Atque his de rebus et splendida est eorum et illustris oratio.</p>
                        <ul>
                            <li>A quibus propter discendi cupiditatem esse peragratas.</li>
                            <li>Quod si ita est, omnes semper beatos esse sapientes</li>
                            <li>Hic Speusippus, hic Xenocrates</li>
                            <li>Sed id ne cogitari quidem potest quale sit, ut non repugnet ipsum sibi</li>
                            <li>Nihilne te delectat umquam te igitur, Torquate</li>
                        </ul>
                        
                        <p>Age, inquies, ista parva sunt. Ad eos igitur converte te, quaeso. Haec para/doca illi, nos admirabilia dicamus. Universa enim illorum ratione cum tota vestra confligendum puto.</p>
                        <p>Quos nisi redarguimus, omnis virtus, omne decus, omnis vera laus deserenda est. Sed eum qui audiebant, quoad poterant, defendebant sententiam suam. Fatebuntur Stoici haec omnia dicta esse praeclare, neque eam causam Zenoni desciscendi fuisse. Quis est autem dignus nomine hominis, qui unum diem totum velit esse in genere isto voluptatis. Ad eos igitur convert te, quaeso. Duo Reges: constructio interrete. An est aliquid per se ipsum flagitiosum, etiamsi nulla comitetur infamia. Quid ad utilitatem tantae pecuniae? Duo enim genera quae erant, fecit tria. Et quod est munus, quod opus sapientiae? Sed in rebus apertissimis nimium longi sumus.</p>
                        <!--kg-card-end: markdown-->
                    </div>

                    <div class="container flex">
                        <div class="section-post-authors post-authors flex  post-author-single first">
                            <div class="author-label">
                                <span>Read more posts by this author</span>
                            </div>
                            <div class="author-wrap flex">
                                <a href="../author/sean/index.html" class="item-link-overlay"></a>
                                <div class="author-profile-image" style="background-image: url(https://randomuser.me/api/portraits/women/84.jpg)"></div>
                                <div class="author-content">
                                    <h4 class="is-bio no-cover-image"><a href="../author/sean/index.html">Sean Hamilton</a></h4>
                                    <p>Respondeat totidem verbis. Utinam quidem dicerent alium alio beatiorem, Iam ruinas videres. Quamquam ab iis philosophiam et omnes ingenuas disciplinas habemus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="post-meta">
                        <div class="post-share">
                            <a class="twitter" href="https://twitter.com/intent/tweet?text=Look%20at%20life%20with%20the%20eyes%20of%20a%20child&amp;url=https://nurui.fueko.net/look-at-life-with-the-eyes-of-a-child/" target="_blank" rel="noopener">
                                <svg class="global-svg" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/>
                                </svg>
                            </a>
                            <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://nurui.fueko.net/look-at-life-with-the-eyes-of-a-child/" target="_blank" rel="noopener">
                                <svg class="global-svg" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"/>
                                </svg>
                            </a>
                            <a class="copy" id="copy" data-clipboard-target="#link-value">
                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.33 13.04h-4.155v4.154h-2.078v-4.155H9.942v-2.077h4.155V6.806h2.078v4.156h4.154v2.077zM8.902 18.58a6.582 6.582 0 0 1 0-13.162c.068 0 .135.007.202.009a8.874 8.874 0 0 0-.001 13.144c-.067 0-.133.009-.2.009zm6.194-15.484a8.876 8.876 0 0 0-3.087.56A8.904 8.904 0 0 0 0 12a8.903 8.903 0 0 0 8.903 8.905 8.893 8.893 0 0 0 3.103-.563 8.854 8.854 0 0 0 3.09.563A8.903 8.903 0 0 0 24 12a8.904 8.904 0 0 0-8.903-8.903z"/>
                                </svg>
                            </a>
                            <input type="text" value="https://nurui.fueko.net/look-at-life-with-the-eyes-of-a-child/" id="link-value">
                        </div>		
                    </div>
                    
                </div>
            </article>

            <div class="container-fluid px-0">
                <aside class="section-prev-next">
                    <div class="prev-next-wrap">
                        <a href="../architecture-belongs-to-culture-not-to-civilization/index.html" class="prev-post post tag-people tag-journey no-image ">
                            <section class="prev-next-title">
                                <h5>Newer Post</h5>
                                <h3>Architecture belongs to culture, not to civilization</h3>
                            </section>
                        </a>
                        <a href="../i-think-its-the-responsibility-of-a-designer-to-try-to-break-rules-and-barriers/index.html" class="next-post post tag-design featured is-image">
                            <div class="prev-next-image" style="background-image: url(https://images.unsplash.com/photo-1520032484190-e5ef81d87978?ixlib=rb-1.2.1&amp;q=75&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=830&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjExNzczfQ)"></div>
                            <section class="prev-next-title">
                                <h5>Older Post</h5>
                                <h3>I think it&#x27;s the responsibility of a designer to try to break rules and barriers</h3>
                            </section>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    {{-- <div class="page contacts-page full-width">
    </div> --}}
</div>
@include('components.front.pagefooter')
@endsection