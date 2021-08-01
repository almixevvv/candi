<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $title ?? "Candi.id" }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/mainstyle.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/logo.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/logo.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/logo.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/logo.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/logo.svg">
    <link rel="icon" type="image/png" href="/images/favicons/logo.svg" sizes="32x32">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/logo.svg">

    <meta name="msapplication-TileColor" content="#151515">
    <meta name="theme-color" content="#151515">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/mainTheme.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?version={{ config('app.version') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css">

    @livewireStyles
    @stack('extra-css')
</head>

<body>
    <div id="search-box">
        <livewire:search-box id="search-box"/>
    </div>
    @include('components.front.navbar')
    @yield('content')
    @include('components.front.footer')
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="/js/lightgallery.js"></script>
    <script src="/js/jquery.mousewheel.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/hammer.js"></script>
    <script src="/js/scripts.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>
    <script>
        
        function getId(url) {
            var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
            var match = url.match(regExp);

            if (match && match[2].length == 11) {
                return `https://youtube.com/embed/${match[2]}`;
            } else {
                return 'error';
            }
        }

        function convertFigureToIframe() {
            let medias = document.querySelectorAll('figure.media');
            for (let i = 0 ; i < medias.length; i++) {
                const url = medias[0].children[0].attributes[0].value
                let newUrl = getId(url);

                if (newUrl == 'error') {
                    newUrl = medias[0].children[0].attributes[0].value
                }

                const iFrame = document.createElement('iframe')
                iFrame.width = "100%"
                iFrame.height = "600"
                iFrame.src = newUrl

                medias[i].replaceWith(iFrame)
            }
        }
        convertFigureToIframe()

        $('#search-button, #box-search').on('click', function() {
            console.log("triggered")
            $('#search-box').addClass('is-active')
        });

        $('#close-search-button').on('click', function() {
            console.log("closing")
            $('#search-box').removeClass('is-active')
        });
    </script>

    @livewireScripts
    @stack('extra-js')
</body>

</html>
