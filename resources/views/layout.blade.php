
<!DOCTYPE html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Mike Playing</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
<meta name="author" content="FreeHTML5.co" />
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="/favicon.ico">

<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

<!-- Animate.css -->
<link rel="stylesheet" href="/css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="/css/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="/css/bootstrap.css">
<!-- Flexslider  -->
<link rel="stylesheet" href="/css/flexslider.css">
<!-- Theme style  -->
<link rel="stylesheet" href="/css/style.css">
<!-- Modernizr JS -->
<script src="/js/modernizr-2.6.2.min.js"></script>


</head>
<body>
<div id="fh5co-page">
    <a href="/" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    <aside id="fh5co-aside" role="complementary" class="border js-fullheight">
        <h1 id="fh5co-logo"><a href="/">Home</a></h1>
        <nav id="fh5co-main-menu" role="navigation">
            <ul>
                <li class="{{ Request::path() === '/' ? 'fh5co-active' : ''}}"><a href="/">Home</a></li>
                <li class="{{ Request::path() === 'blog' ? 'fh5co-active' : ''}}"><a href="/blog">Blog</a></li>
                <li class=""><a href="/portfolio">Portfolio</a></li>
                <li class="{{ Request::path() === 'about' ? 'fh5co-active' : ''}}"><a href="/about">About</a></li>
                <li class=""><a href="/contact">Contact</a></li>
            </ul>
        </nav>

        <div class="fh5co-footer">
            <p><small>&copy; Mike Traves</small></p>
            <ul>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                <li><a href="#"><i class="icon-instagram"></i></a></li>
                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
            </ul>
        </div>

    </aside>
        @yield ('content')

<!-- jQuery -->
<script src="/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="/js/jquery.flexslider-min.js"></script>
<!-- MAIN JS -->
<script src="/js/main.js"></script>
    </body>
</html>