<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta charset="utf-8" />
    <title>{{ $pageName ?? 'Candi' }} | Candi Content Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/css/cms/custom.css" rel="stylesheet" type="text/css" />
    <script src="/js/app.js"></script>

    @livewireStyles
    @stack('extra-css')
    
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            @include('components.cms.sidebar')
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('components.cms.navbar')
                @yield('content')
                @include('components.cms.footer')
            </div>
            <!--end::Wrapper-->
        </div>
    </div>

    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="/plugins/global/plugins.bundle.js"></script>
    <script src="/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="/js/custom/widgets.js"></script>
    <script src="/js/custom/apps/chat/chat.js"></script>
    <script src="/js/custom/modals/create-app.js"></script>
    <script src="/js/custom/modals/upgrade-plan.js"></script>
    <!--end::Page Custom Javascript-->

    <script>
        const BASE_URL = "{!! url('/') !!}";
        const CSRF_TOKEN = "{{ csrf_token() }}";
        /*
            2. Features & Cuisines Tag
        */
    
       let featureTag = document.querySelector("#kt_tagify_features");
       let cuisineTag = document.querySelector("#kt_tagify_cuisines");

       // Initialize Tagify script on the above inputs
        new Tagify(featureTag, {
            whitelist: ["Ada", "Adenine", "Agda", "Agilent VEE"],
            maxTags: 10,
            dropdown: {
                maxItems: 20,           // <- mixumum allowed rendered suggestions
                classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
                enabled: 0,             // <- show suggestions on focus
                closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
            }
        });

        new Tagify(cuisineTag, {
            whitelist: ["Ada", "Adenine", "Agda", "Agilent VEE"],
            maxTags: 10,
            dropdown: {
                maxItems: 20,           // <- mixumum allowed rendered suggestions
                classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
                enabled: 0,             // <- show suggestions on focus
                closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
            }
        });


        /* 
            1. Prices Slider
        */
        let $vMin   = $('#kt_slider_basic_min');
        let $vMax   = $('#kt_slider_basic_max');
        const slider = document.querySelector("#kt_slider_basic");

        var formatter = new Intl.NumberFormat('id', {
            style: 'currency',
            currency: 'IDR',
            // These options are needed to round to whole numbers if that's what you want.
            //minimumFractionDigits: 0, // (this suffices for whole numbers, but will print 2500.10 as $2,500.1)
            //maximumFractionDigits: 0, // (causes 2500.99 to be printed as $2,501)
        });
        

        noUiSlider.create(slider, {
            start: [50000, 1000000],
            connect: true,
            // tooltips: [false, wNumb({decimals: 1}), true],
            range: {
                "min": 100000,
                "max": 1000000
            },
            pips: {
                mode: "values",
                values: [100000, 1000000],
                density: 2
            }
        });

        slider.noUiSlider.on('update', function(values, handle) {
            if(handle) {
                $($vMax).html(formatter.format(values[handle]));
                // console.log('MAX Value: ' + values[handle]);
            } else {
                $($vMin).html(formatter.format(values[handle]));
                // console.log('MIN Value: ' + values[handle]);
            }
        });
    </script>
    <script>
    </script>
    <!--end::Javascript-->
    @livewireScripts
    @stack('extra-js')
</body>

</html>
