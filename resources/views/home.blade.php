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
    <meta property="og:url" content="http://benhuang.info">
    <meta property="og:image" content="{{ asset('images/ogimg.jpg') }}">
    <meta property="og:description" content="A introduction to Ben Huang. Hope you know me more :)" >

    <meta itemprop="name" content="About Ben Huang">
    <meta itemprop="image" content="{{ asset('images/ogimg.jpg') }}址">
    <meta itemprop="description" content="A introduction to Ben Huang.  Hope you know me more :)">

    <link rel="author" href="http://benhuang.info/articles/">
    <link rel="publisher" href="http://benhuang.info">

    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//s.w.org">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="alternate" hreflang="x" />

    <link rel="alternate" type="application/rss+xml" title="訂閱 Ben »" href="http://benhuang.info/feed/">
    <link rel="alternate" type="application/rss+xml" title="訂閱 Ben » 迴響" href="http://benhuang.info/comments/feed/">

    <link rel="canonical" href="http://benhuang.info/" rel="nofollow">
    <link rel="shortlink" href="http://benhuang.info/">


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
                    <a class="ui primary button no-scroll">Sign Up</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Sidebar Menu --}}
    <div class="ui vertical inverted sidebar menu left menu-list" style="">
        @foreach ($page_options as $key => $item)
            <a class='{{ $key == 0 ? 'active' : '' }} item' href="{{ '#'.strtolower($item['name']) }}">{{ $item['name'] }}</a>
        @endforeach
        {{-- <a class="item">Signup</a> --}}
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
                                <a class="ui inverted blue button no-scroll" href="#">Register</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- center text --}}
                <div class="ui text container">
                    <h1 class="ui inverted header">
                            Main
                        </h1>
                    <h2 style="color:white;">SECOND</h2>
                    <div id="main-go" class="ui huge primary button">Get Started <i class="right arrow icon"></i></div>
                </div>
            </div>
        </div>


        {{-- <test :items="d"></test> --}}


        <!-- intro section -->
        <intro img-src="{{ asset('images/background.jpg') }}"></intro>


        {{-- quote section --}}
            {{-- using inline template --}}
        <quote-section inline-template>
            <div class="ui inverted vertical stripe quote segment">
                <div class="ui equal width stackable internally celled grid">
                    <div class="center aligned row">
                        <div class="column">
                            <h3 v-text="quote"></h3>
                            <p>
                                <img src="{{ asset('images/ogimg.jpg') }}" class="ui avatar image" alt="quote"> <b>Ben</b> nerd
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </quote-section>


        {{-- my work section --}}
        <my-works fallback-img="{{ asset('images/background.jpg') }}"></my-works>


        <div class="ui inverted vertical stripe segment">
            <h4 class="ui horizontal divider header">
                <i class="users icon"></i>
                Team
            </h4>
            <div class="ui five column center aligned stackable grid container">
                <div class="column">
                    <img class="ui centered small circular image" src="{{ asset('images/ogimg.jpg') }}" alt="img">
                    <h1 class="ui header name-lbl">黃琮閔</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <div class="ui basic button">View details »</div>
                </div>
                <div class="column">
                    <img class="ui centered small circular image" src="{{ asset('images/ogimg.jpg') }}" alt="img">
                    <h1 class="ui header name-lbl">黃琮閔</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <div class="ui basic button">View details »</div>
                </div>
            </div>
        </div>


        <div class="ui vertical stripe quote segment">
            <div class="ui equal width stackable internally celled grid">
                <div class="center aligned row">
                    <div class="column">
                        <h3>123</h3>
                        <p>
                            <img src="{{ asset('images/ogimg.jpg') }}" class="ui avatar image" alt="ogimg"> <b>Ben</b> nerd
                        </p>
                    </div>
                </div>
            </div>
        </div>



        {{-- footer section --}}
        <div class="ui inverted vertical footer segment">
            <div class="ui container">
                <div class="ui stackable inverted divided equal height stackable grid">
                    <div class="three wide column">
                        <h4 class="ui inverted header">About</h4>
                        <div class="ui inverted link list">
                            <a href="#" class="item">Sitemap</a>
                        </div>
                    </div>
                    <div class="three wide column">
                        <h4 class="ui inverted header">Services</h4>
                        <div class="ui inverted link list">
                            <a href="#" class="item">Banana Pre-Order</a>
                        </div>
                    </div>
                    <div class="seven wide column">
                        <h4 class="ui inverted header">Footer Header</h4>
                        <p>123</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- <div id="lo-engage-ext-container">
        <div data-reactroot=""></div>
    </div> --}}

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
        });

        function vueScroll(e){
            e.preventDefault();
            let target = e.target.href.substring(e.target.href.lastIndexOf('#'));
            Vue.prototype.scrollTo(target);
        }

    </script>

</body>

</html>
