<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Candi.id</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
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
    <style type="text/css">
          body {
            background-image: ( #ffffff 30%);
          }
          * {
          box-sizing: border-box;
        }

        @media only screen and (min-width:1000px) {
            .destinations .wrap .wrap_float .section_content .box_image{
                width:15%; 
                float:left;
                padding:2%;
                text-align:center;
                margin:0px auto;
                
            }
            .destinations .wrap .wrap_float .section_content .box_image2{
               
                width:15%; 
                float:left;
                padding:2%;
                text-align:center;
                margin:0px auto;
            }
            .searching-menu{
                padding-left:5%;
            }
            .margin_title{
                margin-bottom:20%;
            }
           #rcorners1 {
              border-radius: 25px;
              background: #fff;
              padding: 15px; 
              width: 100%;
              height: 50px; 
              text-align: center;
              margin-top: 5em;
              margin-left: 1.5em;
            }
            .box_content_slide{
                font-family: 'Prata', serif;
                color: #fff;
                width: 100%;
                line-height: 1;
                position: absolute;
                bottom: 0;
                left: 0;
                padding-bottom: 140px;
            }
            .img_search_slide{
                float:left;
                width:7%;
            }
        }
         @media only screen and (max-width:1000px){
            .destinations .wrap .wrap_float .section_content .box_image{
                width:15%; 
                float:left;
                padding:2%;
                text-align:center;
                margin:0px auto;
                
            }
            .destinations .wrap .wrap_float .section_content .box_image2{
               
                width:15%; 
                float:left;
                padding:2%;
                text-align:center;
                margin:0px auto;
            }
            .searching-menu{
                padding-left:5%;
            }
            .margin_title{
                margin-bottom:0%;
            }
           #rcorners1 {
              border-radius: 25px;
              background: #fff;
              padding: 15px; 
              width: 100%;
              height: 50px; 
              text-align: center;
              margin-top: 5em;
              margin-left: 1.5em;
            }
            #rcorners1 ::placeholder-shown{
             color:#000;
            }
            .box_content_slide{
                font-family: 'Prata', serif;
                color: #fff;
                width: auto;
                line-height: 1;
                position: absolute;
                bottom: 0;
                left: 0;
                padding-bottom: 140px;
            }
            .img_search_slide{
                float:left;
               
            }
        }
        @media only screen  and (max-width: 640px){
            .destinations .wrap .wrap_float .section_content .box_image{
                width:30%; 
                float:left;
                padding:2%;
                text-align:center;
            }
            .destinations .wrap .wrap_float .section_content .box_image2{
                clear:both;
                width:30%; 
                float:left;
                padding:2%;
                text-align:center;
            }
            .searching-menu{
                padding-left:12%;
            }
             .margin_title{
                margin-bottom:auto;
            }
             #rcorners1 {
              border-radius: 25px;
              background: #fff;
              padding: 15px; 
              width: 100%;
              height: 50px; 
              text-align: center;
              margin-top: 2em;
              margin-left: 0em;
            }
            .box_content_slide{
                font-family: 'Prata', serif;
                color: #fff;
                width: auto;
                line-height: 1;
                
                position: absolute;
                bottom: 0;
                left: 0;
                padding-bottom: 200px;
            }
            .img_search_slide{
                float:left;
                
            }

        }

        /* navbar */
          .navbar-categories h2 {
            font-size: 1rem;
            color: white;
        }

        .akb-navbar {
            margin-left: 3.5em;
            margin-right: 3.5em;
        }

        #header-shopping-cart {
            padding-top: 1.8em;
        }

        #header-categories>a,
        #header-articles>a,
        #header-prakerja>a,
        #header-instruktur>a {
            color: #fff;
        }

        #header-shopping-cart>a {
            color: #fff;
            border-left: white solid 1px;
            padding-left: 1em;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #header-search-box {
            width: 35%;
        }

        #header-signup>a,
        #account-toggle {
            color: #00c5dd;
        }

        #category-image {
            width: 11%;
            margin-right: 0.3rem;
            padding-bottom: 3px;
        }

        #navbar-flag {
            width: 2rem;
            margin-right: 5rem;
            padding-top: 0.5rem;
        }

        .main_menu {
            margin-top: -1.5rem;
        }


        #categoryDropdown,
        #profileDropdown {
            color: white;
        }

        .form-control:focus {
            border-color: #CCC;
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        #dropdown-category-position {
            top: 75%;
        }

        #dropdown-signup-position {
            top: 75%;
            left: -6rem;
        }
        </style>
    </head>
    <body>
        @include('components.front.navbar')
        @yield('content')
        @include('components.front.footer')
    </body>
</html>