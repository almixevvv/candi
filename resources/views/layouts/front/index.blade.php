<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Candi.id</title>
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
    <style type="text/css">
          body {
            background-image: ( #ffffff 30%);
          }
          * {
          box-sizing: border-box;
        }
       
         /*----------------------------- start grid blog and directory */
        .gridywrap div[class*=gridy] {
          background: #eee;
          box-shadow: inset 0 0 0 1px #ddd;
          padding: 15px; float: left;
          position: relative;
        }
        .gridywrap .gridy-1,
        .gridywrap .gridy-2,
        .gridywrap .gridy-3 {width: 320px;
          overflow: hidden;}

        .gridywrap .gridy-1 {width: 100%;}
        .gridywrap .gridy-2 {width: 100%;}
        .gridywrap .gridy-3 {width: 100%;}
        .gridywrap .gridy-4 {width: 100%;}

        .gridywrap .gridyhe-1 {height: 320px;}
        .gridywrap .gridyhe-2 {height: 320px;}
        .gridywrap .gridyhe-3 {height: 50%;}

        @media screen and (min-width: 640px) {
          .gridywrap .gridyhe-2 {height: 320px;}
          .gridywrap {
            width: 100%;
          }
          .gridywrap .gridy-1 {width: 50%;}
          .gridywrap .gridy-2 {width: 50%;}
          .gridywrap .gridy-3 {width: 100%;}
          .gridywrap .gridy-4 {width: 25%;}
        }
        @media screen and (min-width: 1024px) {
          .gridywrap .gridy-1 {width: 33.3%;}
          .gridywrap .gridy-2 {width: 66.6%;}
          .gridywrap .gridy-3 {width: 100%;}
          .gridywrap .gridy-4 {width: 25%;}
          .gridywrap .gridyhe-2 {height: 640px;}
        }
        /*styling*/
        .gridywrap .gridimg {
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          overflow: hidden;
          background-position: center center;
          background-size: cover;
        }
        .gridywrap .gridimg img {
          width: 100%;
        }
        .gridywrap .gridinfo {
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
          background: rgba(0,0,0,0.4);
          text-align: center;
          transition: all 0.8s;
        }
        .gridywrap .gridinfo h3 {
          font-size: 24px;
          color: #fff;
          font-weight: bold;
          text-transform: uppercase;
          margin: 130px 0 20px;
          position: relative;
        }
        .gridywrap .gridinfo h3:after {
          content: '';
          width: 25px;
          border-top: 4px solid #fff;
          display: block;
          margin: 0 auto;
          margin-top: 25px;
        }
        .gridywrap .gridinfo .gridmeta {
          transition-delay: 0.25s;
        }
        .gridywrap .gridinfo .gridmeta p {
          display: inline-block;
          font-size: 13px;
          color: #fff;
          margin-bottom: 15px;
        }
        .gridywrap .gridinfo .gridmeta p i {
          margin-right: 5px;
        }
        .gridywrap .gridinfo .gridmeta p.gridwho {
          margin-left: 25px;
        }
        .gridywrap .gridinfo p.gridexerpt {
          width: 60%;
          margin: 0 auto;
          line-height: 22px;
          margin-bottom: 25px;
          color: #fff;
          transition-delay: 0.5s;
        }

        .gridywrap .gridinfo * {
          opacity: 0;
          transition: all 0.8s;
        }
        .gridywrap .gridinfo h3 {
          opacity: 1;
        }
        .gridywrap .gridinfo .grid-btn {
          color: #fff;
          text-decoration: none;
          margin: 0 auto;
          width: 35px;
          height: 35px;
          line-height: 35px;
          border-radius: 25px;
          border: 1px solid #fff; 
          display: block;
          overflow: hidden;
        }
        .gridywrap .gridinfo .grid-btn:hover {
          width: 75px;
          background: rgba(0,0,0,0.3);
        }
        .gridywrap .gridinfo .grid-btn span {
          opacity: 0;
          display: none;
          transition: opacity 0.8s;
        }
        .gridywrap .gridinfo .grid-btn:hover span {
          opacity: 1;
          display: inline;
        }
        .gridywrap .gridinfo .grid-btn:hover i {
          opacity: 0;
          display: none;
        }

        .gridywrap .gridinfo:hover * {
          opacity: 0.7;
        }
        .gridywrap .gridinfo:hover p {
          opacity: 1;
        }
        .gridywrap .gridinfo:hover {
          background: rgba(158, 12, 73, 0.7);
        }
        .gridywrap .gridinfo:hover h3 {
          margin-top: 70px;
          opacity: 1;
        }

        .intro {
          text-align: center;
          padding: 25px;
          background: #111;
          color: #ddd;
        }
        .title_grid {
          font-size: 48px;
          font-weight: 300;
          padding: 15px 0;
        }
        .intro p {
          opacity: 0.5;
          font-size: 12px;
        }
        .intro p a {
          color: #FA8CD3;
        }
        /*----------------------------- end grid blog and directory */
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