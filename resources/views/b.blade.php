<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Hamza Zymawy
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131069376-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-131069376-1');
    </script>
    <!-- Styles -->
    <style>
        html, body {
            background-color: #21D4FD;
            background-image: -webkit-linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
            background-image: -moz-linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
            background-image: -o-linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
            background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
            color: #fff;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        @import url(https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700);*{font-family:Montserrat,sans-serif}

        /*! normalize.css v7.0.0 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}footer,header,nav,section{display:block}h1{font-size:2em;margin:.67em 0}figcaption,main{display:block}a{background-color:transparent;-webkit-text-decoration-skip:objects}b,strong{font-weight:inherit;font-weight:bolder}code{font-family:monospace,monospace;font-size:1em}dfn{font-style:italic}img{border-style:none}svg:not(:root){overflow:hidden}button,input{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}legend{-webkit-box-sizing:border-box;box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}[type=checkbox],[type=radio]{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}menu{display:block}canvas{display:inline-block}[hidden],template{display:none}html{-webkit-box-sizing:border-box;box-sizing:border-box;font-family:sans-serif}*,:after,:before{-webkit-box-sizing:inherit;box-sizing:inherit}dd,h1,h2,h3,p{margin:0}button{background:transparent;padding:0}button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color}ul{margin:0}[tabindex="-1"]:focus{outline:none!important}*,:after,:before{border:0 solid #dae1e7}img{border-style:solid}[type=button],[type=reset],[type=submit],button{border-radius:0}img{max-width:100%}button,input{font-family:inherit}input::-webkit-input-placeholder{color:inherit;opacity:.5}input:-ms-input-placeholder,input::-ms-input-placeholder{color:inherit;opacity:.5}input::placeholder{color:inherit;opacity:.5}[role=button],button{cursor:pointer}.container{width:100%}@media (min-width:576px){.container{max-width:576px}}@media (min-width:768px){.container{max-width:768px}}@media (min-width:992px){.container{max-width:992px}}@media (min-width:1200px){.container{max-width:1200px}}.appearance-none{-webkit-appearance:none;-moz-appearance:none;appearance:none}.bg-black{background-color:#22292f}.bg-grey-light{background-color:#dae1e7}.bg-white{background-color:#fff}.bg-red-lighter{background-color:#f9acaa}.bg-orange-lighter{background-color:#fcd9b6}.bg-green-lighter{background-color:#a2f5bf}.bg-blue-lighter{background-color:#bcdefa}.bg-indigo{background-color:#6574cd}.hover\:bg-indigo-light:hover{background-color:#7886d7}.border-grey-darker{border-color:#606f7b}.border-grey{border-color:#b8c2cc}.border-red{border-color:#e3342f}.border-orange{border-color:#f6993f}.border-green{border-color:#38c172}.border-blue{border-color:#3490dc}.border-indigo-dark{border-color:#5661b3}.border-indigo{border-color:#6574cd}.hover\:border-indigo:hover{border-color:#6574cd}.rounded{border-radius:.25rem}.rounded-full{border-radius:9999px}.border{border-width:1px}.border-b-4{border-bottom-width:4px}.border-l-8{border-left-width:8px}.border-b{border-bottom-width:1px}.block{display:block}.inline-block{display:inline-block}.table{display:table}.hidden{display:none}.flex{display:-webkit-box;display:-ms-flexbox;display:flex}.flex-wrap{-ms-flex-wrap:wrap;flex-wrap:wrap}.items-center{-webkit-box-align:center;-ms-flex-align:center;align-items:center}.items-stretch{-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch}.justify-end{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.justify-center{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.justify-between{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.flex-none{-webkit-box-flex:0;-ms-flex:none;flex:none}.font-light{font-weight:300}.font-semibold{font-weight:600}.font-bold{font-weight:700}.h-4{height:1rem}.h-12{height:3rem}.h-24{height:6rem}.h-32{height:8rem}.h-48{height:12rem}.h-128{height:32rem}.leading-tight{line-height:1.25}.leading-normal{line-height:1.5}.leading-loose{line-height:2}.my-1{margin-top:.25rem;margin-bottom:.25rem}.my-4{margin-top:1rem;margin-bottom:1rem}.my-6{margin-top:1.5rem;margin-bottom:1.5rem}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.my-8{margin-top:2rem;margin-bottom:2rem}.mx-auto{margin-left:auto;margin-right:auto}.mr-1{margin-right:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.mb-2{margin-bottom:.5rem}.ml-2{margin-left:.5rem}.mt-3{margin-top:.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.mb-6{margin-bottom:1.5rem}.mt-8{margin-top:2rem}.mb-8{margin-bottom:2rem}.mt-16{margin-top:4rem}.mb-16{margin-bottom:4rem}.mt-24{margin-top:6rem}.overflow-x-scroll{overflow-x:auto}.overflow-x-scroll{-ms-overflow-style:-ms-autohiding-scrollbar}.p-4{padding:1rem}.p-6{padding:1.5rem}.py-1{padding-top:.25rem;padding-bottom:.25rem}.px-1{padding-left:.25rem;padding-right:.25rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.px-2{padding-left:.5rem;padding-right:.5rem}.py-3{padding-top:.75rem;padding-bottom:.75rem}.px-4{padding-left:1rem;padding-right:1rem}.py-6{padding-top:1.5rem;padding-bottom:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-8{padding-top:2rem;padding-bottom:2rem}.absolute{position:absolute}.shadow{-webkit-box-shadow:0 2px 4px 0 rgba(0,0,0,.1);box-shadow:0 2px 4px 0 rgba(0,0,0,.1)}.shadow-lg{-webkit-box-shadow:0 15px 30px 0 rgba(0,0,0,.11),0 5px 15px 0 rgba(0,0,0,.08);box-shadow:0 15px 30px 0 rgba(0,0,0,.11),0 5px 15px 0 rgba(0,0,0,.08)}.text-center{text-align:center}.text-justify{text-align:justify}.text-black{color:#22292f}.text-grey-darkest{color:#3d4852}.text-grey-darker{color:#606f7b}.text-grey-dark{color:#8795a1}.text-white{color:#fff}.text-red{color:#e3342f}.text-xs{font-size:.75rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.text-2xl{font-size:1.5rem}.text-4xl{font-size:2.25rem}.text-5xl{font-size:3rem}.uppercase{text-transform:uppercase}.lowercase{text-transform:lowercase}.no-underline{text-decoration:none}.tracking-wide{letter-spacing:.05em}.align-middle{vertical-align:middle}.w-1\/3{width:33.33333%}.w-full{width:100%}.z-n10{z-index:-10}@media (min-width:768px){.md\:inline-block{display:inline-block}.md\:px-4{padding-left:1rem;padding-right:1rem}}@media (min-width:992px){.lg\:border-b-0{border-bottom-width:0}.lg\:border-r{border-right-width:1px}.lg\:border-l{border-left-width:1px}.lg\:inline-block{display:inline-block}.lg\:mt-0{margin-top:0}.lg\:p-8{padding:2rem}.lg\:pr-4{padding-right:1rem}.lg\:pl-4{padding-left:1rem}.lg\:w-1\/2{width:50%}.lg\:w-1\/3{width:33.33333%}.lg\:w-2\/3{width:66.66667%}}
    </style>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KRNHR2S');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KRNHR2S"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="w-full bg-white shadow-lg overflow-x-scroll"><div class="container mx-auto"><div class="flex items-center justify-between"><a href="//erik.cat" class="flex-none py-6 px-4 text-lg no-underline tracking-wide text-grey-darkest"><img class="h-4 mr-2 inline-block align-middle" src="//erik.cat/svg/039-man.svg"><span class="inline-block align-middle font-semibold">erik.cat</span><div class="hidden md:inline-block ml-2 bg-white rounded-full text-xs border border-indigo justify-center px-2 py-1"> erik.cat is under a new server </div></a><div class="flex justify-end"><a href="//erik.cat/projects" class="block py-6 px-1 md:px-4 text-sm no-underline tracking-wide text-grey-darkest"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-anchor h-4 mr-1 inline-block align-middle"><circle cx="12" cy="5" r="3"></circle><line x1="12" y1="22" x2="12" y2="8"></line><path d="M5 12H2a10 10 0 0 0 20 0h-3"></path></svg><span class="align-middle hidden md:inline-block">Projects</span></a><a href="//erik.cat/dashboard" class="block py-6 px-1 md:px-4 text-sm no-underline tracking-wide text-grey-darkest"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home h-4 mr-1 inline-block align-middle"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span class="align-middle hidden md:inline-block">My panel</span></a><a href="#" class="block py-6 px-1 md:px-4 text-sm no-underline tracking-wide text-grey-darkest" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out h-4 mr-1 inline-block align-middle"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg><span class="align-middle hidden md:inline-block">Logout</span></a></div></div></div></div>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            <img width="200"height="200" src="/images/my.jpg">
            {{--<div>--}}
            {{--Hamza Zymawy--}}
            {{--</div>--}}
        </div>

        <div class="links text-white">
            <p class="m-b-md h3">
                <i class="fa fa-twitter"></i>
                I'm <em>Hamza</em> highly motivated, goal oriented and self-education.
                I admire programming and I always want it to have the opportunity to improve my skills.
                <br>
                enthusiastic individual and a Software Engineer with years of experience in Programming. I'm passionate about technology, sports, music, traveling and Tea .

            </p>
            <a target="_blank" href="https://twitter.com/zymawy">
                <i class="fa fa-twitter"></i>
                Twitter
            </a>
            <a target="_blank" href="https://twitter.com/RttCy">
                <i class="fa fa-twitter"></i>
                Twitter
            </a>
            <a target="_blank" href="https://www.facebook.com/Hamza7Hz">
                <i class="fa fa-facebook"></i>
                Facebook
            </a>
            <a target="_blank" href="https://www.linkedin.com/in/zymawy-hamza-26453815a/">
                <i class="fa fa-linkedin"></i>
                LinkedIn
            </a>
            <a target="_blank" href="https://github.com/zymawy">
                <i class="fa fa-github"></i>
                GitHub
            </a>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
</body>
</body>
</html>
