<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="generator" content="Ben Huang">
    <meta name="author" content="Ben Huang">
    <meta name="copyright" content="黃琮閔">
    <meta name="description" content="A introduction to Ben Huang. Hope you know me more :)">

    <meta property="og:title" content="Ben Huang" >
    <meta property="og:url" content="https://me.benhuang.info">
    <meta property="og:image" content="{{ asset('images/ogimg.jpg') }}">
    <meta property="og:description" content="A introduction to Ben Huang. Hope you know me more :)" >

    <meta itemprop="name" content="About Ben Huang">
    <meta itemprop="image" content="{{ asset('images/ogimg.jpg') }}">
    <meta itemprop="description" content="A introduction to Ben Huang.  Hope you know me more :)">

    <link rel="author" href="https://benhuang.info/articles/">
    <link rel="publisher" href="https://benhuang.info">

    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://s.w.org">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="alternate" hreflang="x" />

    <link rel="alternate" type="application/rss+xml" title="訂閱 Ben »" href="https://benhuang.info/feed/">
    <link rel="alternate" type="application/rss+xml" title="訂閱 Ben » 迴響" href="https://benhuang.info/comments/feed/">

    <link rel="canonical" href="https://me.benhuang.info" rel="nofollow">
    <link rel="shortlink" href="https://me.benhuang.info" rel="nofollow">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/index.css') }}" rel="stylesheet">
    <!-- Styles -->
    <style>
        .landing {
            background: url('{{ asset('images/background.jpg') }}') #103d50 70% 30% no-repeat !important;
            background-size: cover !important;
        }
    </style>
</head>

<body class="pushable">

    {{-- Following Menu --}}
    <div class="ui inverted large top fixed menu transition hidden">
        <div class="ui container menu-list">
            @foreach ($page_options as $key => $item)
                <a class='{{ $key == 0 ? 'active' : '' }} item' href="{{ '#'.strtolower($item['name']) }}">{{ $item['name'] }}</a>
            @endforeach
            <div class="right menu">
                <div class="item">
                    <a class="ui primary button" href="#play">Let's play</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Sidebar Menu --}}
    <div class="ui vertical inverted sidebar menu left menu-list">
        @foreach ($page_options as $key => $item)
            <a class='{{ $key == 0 ? 'active' : '' }} item' href="{{ '#'.strtolower($item['name']) }}">{{ $item['name'] }}</a>
        @endforeach
    </div>


    {{-- Page Contents --}}
    <div class="pusher" id="app">

        {{-- slider section --}}
        <div id="home" class="ui landing vertical masthead center aligned segment" style="background-color: #8e6f6f;">
            <div class="ladning-dimmer">
                <div class="header-dimmer">
                    <div class="ui container">
                        <div class="ui large secondary inverted pointing menu menu-list" style="border-width:0">
                            <a class="toc item no-scroll">
                                <i class="sidebar icon"></i>
                            </a>
                            {{-- <a class="item" v-for="item in menu_items" v-text="item.name" :href="href(item)"></a> --}}
                            @foreach ($page_options as $key => $item)
                                <a class='{{ $key == 0 ? 'active' : '' }} item' href="{{ '#'.strtolower($item['name']) }}">{{ $item['name'] }}</a>
                            @endforeach
                            <div class="right item">
                                <a class="ui inverted blue button" href="#play">Let's play</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- center text --}}
                <div class="ui text container">
                    <h1 class="ui inverted header">
                        <img class="ui circular image" src="{{ asset('images/head.jpg') }}"><br>
                        {{ $ssr['name'] }}
                    </h1>
                    <h2 style="color:white;">Ben Huang</h2>
                </div>
            </div>
        </div>


        <!-- intro section -->
        <intro img-src="{{ asset('images/me3.jpg') }}" :info-data="infoData"></intro>


        {{-- quote section --}}
            {{-- using inline template --}}
        <quote-section inline-template>
            <div class="ui inverted vertical stripe quote segment">
                <div class="ui equal width stackable internally celled grid">
                    <div class="center aligned row">
                        <div class="column">
                            <h3 v-text="quote"></h3>
                            <p>
                                <img src="{{ asset('images/Kaisa.jpg') }}" class="ui avatar image" alt="quote">
                                <b v-text="from"></b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </quote-section>

        {{-- my work section --}}
        <my-works fallback-img="{{ asset('images/background.jpg') }}" :info-data="infoData"></my-works>


        {{-- skills section --}}
        <skills :info-data="infoData"></skills>


        <div id="play" class="ui vertical stripe quote segment">
            <top-triangle></top-triangle>
            <div class="ui equal width stackable internally celled grid">
                <div class="center aligned row">
                    <div class="column">
                        <h3>Play with this simple CNN model?</h3>
                        <p>
                            <img src="{{ asset('images/head.jpg') }}" class="ui avatar image" alt="ogimg">
                            <b></b>Follow the tip, and draw the number on the canvas.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <paint-panel></paint-panel>

        {{-- footer section --}}
        <div class="ui inverted vertical footer segment">
            <div class="ui container">
                <div class="ui stackable inverted divided equal height stackable grid">
                    <div class="two wide column">

                    </div>
                    <div class="six wide column">
                        <h2 class="ui inverted header">Contact Info</h2>
                        <div class="ui inverted selection list">
                            <a class="item">
                                <div class="ui red horizontal label">Phone</div>
                                0981241328
                            </a>
                            <a class="item">
                                <div class="ui red horizontal label">E-mail</div>
                                huang831206@gmail.com
                            </a>
                            <a class="item">
                                <div class="ui red horizontal label">School</div>
                                @{{infoData.school}}
                            </a>
                            <a class="item">
                                <div class="ui red horizontal label">Department</div>
                                @{{infoData.degree}}
                            </a>
                        </div>
                    </div>
                    <div class="six wide column">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3616.8808916340954!2d121.19103151670802!3d24.97016675014809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDU4JzEyLjkiTiAxMjHCsDExJzM1LjMiRQ!5e0!3m2!1szh-TW!2stw!4v1528245804726" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="two wide column">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/vendor.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // fix menu when passed
            $('.masthead').visibility({
                once: false,
                onBottomPassed: function() {
                    $('.fixed.menu').transition('fade in');
                },
                onBottomPassedReverse: function() {
                    $('.fixed.menu').transition('fade out');
                }
            });

            $('.menu-list a:not(.no-scroll)').click(function (e) {
                vueScroll(e);
            });

            // create sidebar and attach to menu open
            $('.ui.sidebar').sidebar('attach events', '.toc.item');
            $('.ui.dropdown').dropdown();

            $('.special.cards .image').dimmer({
                on: 'hover'
            });
        });

        function vueScroll(e){
            e.preventDefault();
            let target = e.target.href.substring(e.target.href.lastIndexOf('#'));
            Vue.prototype.scrollTo(target);
        }

    </script>

</body>

</html>
