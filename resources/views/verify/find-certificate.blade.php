<!DOCTYPE html>
<html class="wide wow-animation" lang=en>
<head>
    <meta charset=utf-8>
    <title>Trainee's Performance Report</title>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "https://www.webcooks.in/",
            "name": "Training Institute",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+91 987 609 1236",
                "contactType": "Customer service"
            }
        }

    </script>
    <style>
        th,
        td {
            padding: 16px;
        }

    </style>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta property=og:title content="WEB COOKS" />
    <meta property=og:url content="https://webcooks.in" />
    <meta property=og:description
        content="We train young minds to develop dynamic websites and web apps. We are a team of committed, energetic professionals with talented web designers and experienced managers available to guide you through the flawless and timely execution of your assignments and project.">
    <meta property=og:image content="https://webcooks.in/images/og-image.jpg">
    <meta property=og:image:width content=300 />
    <meta property=og:image:height content=100 />
    <meta property=og:type content=website />
    <meta name=format-detection content="telephone=no">
    <meta name=viewport
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta charset=utf-8>
    <link rel=icon href="images/logo.png" type="image/x-icon">
    <link rel=stylesheet type="text/css"
        href="http://fonts.googleapis.com/css?family=Fira+Sans:300,600,800,800i%7COpen+Sans:300,400,400i">
    <link rel=stylesheet href="{{ asset('css/bootstrap.css')}}">
    <link rel=stylesheet href="{{ asset('css/style.css')}}">
    <link rel=stylesheet href="{{ asset('css/fonts.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/404_font-awesome.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/404_style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>

<body>
    <div class=preloader>
        <div class=cssload-container>
            <svg class=filter version=1.1>
                <defs>
                    <filter id=gooeyness>
                        <fegaussianblur in=SourceGraphic stddeviation=10 result=blur></fegaussianblur>
                        <fecolormatrix in=blur values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 20 -10" result=gooeyness>
                        </fecolormatrix>
                        <fecomposite in=SourceGraphic in2=gooeyness operator=atop></fecomposite>
                    </filter>
                </defs>
            </svg>
            <div class=dots>
                <div class="dot mainDot"></div>
                <div class=dot></div>
                <div class=dot></div>
                <div class=dot></div>
                <div class=dot></div>
            </div>
            <p>Loading...</p>
        </div>
    </div>
    <div class=page>
        <header class=page-header>
            <div class=rd-navbar-wrap>
                <nav class="rd-navbar rd-navbar-default" data-layout=rd-navbar-fixed data-sm-layout=rd-navbar-fixed
                    data-sm-device-layout=rd-navbar-fixed data-md-layout=rd-navbar-fixed
                    data-md-device-layout=rd-navbar-fixed data-lg-device-layout=rd-navbar-static
                    data-lg-layout=rd-navbar-static data-xl-device-layout=rd-navbar-static
                    data-xl-layout=rd-navbar-static data-xxl-device-layout=rd-navbar-static
                    data-xxl-layout=rd-navbar-static data-stick-up-clone=false data-sm-stick-up=true
                    data-md-stick-up=true data-lg-stick-up=true data-md-stick-up-offset=115px
                    data-lg-stick-up-offset=35px>
                    <div class="rd-navbar-inner rd-navbar-search-wrap" style="max-height:100px;">
                        <div class="rd-navbar-panel rd-navbar-search-lg_collapsable" style="min-height:75px;">
                            <button class=rd-navbar-toggle data-rd-navbar-toggle=.rd-navbar-nav-wrap
                                style="margin-top:10px;"><span></span></button>
                            <div class=rd-navbar-brand><a class=brand-name href=https://webcooks.in/> <img
                                    src="{{ asset('images/logo.png') }}" alt="Webcook Logo" width=108 height=40
                                    srcset="{{ asset('images/logo.png') }} 2x" /></a></div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Verification of certificate -->
        <section style="margin-top: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div style="margin-top: 20px;">
                            <div class="row">
                                <div class="col-md-12 text-center mb-4">
                                    <h3>Verify your certificate</h3>
                                </div>
                                <div class="offset-3 col-md-6">
                                    <form action="{{ route('admin.student.verify.by-certificate') }}" method="POST">
                                        @csrf
                                        <label for="certificateID">Enter Certificate ID <span class="text-danger bold">*</span></label>
                                        <div class="form-group">
                                            <input type="text" name="certificateID" class="form-control"
                                                id="certificateID" required="true"/>
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-block" value="Verify" />
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br /><br />
        <footer class="footer-corporate bg-gray-darkest">
            <div class=container>
                <div class=footer-corporate__inner style="list-style-type:none;">
                    <p class=rights><span>webCooks</span><span>&nbsp;</span><span class=copyright-year></span>. All
                        Rights Reserved.
                        <ul style="display:flex;width: 100%;justify-content: center;">
                            <li style="padding: 0px 20px;">
                                <a class="icon icon-xxs icon-primary fa fa-facebook" target=_blank
                                    href="https://www.facebook.com/webcooks.in"></a>
                            </li>
                            <li style="padding: 0px 20px;">
                                <a class="icon icon-xxs icon-primary fa fa-instagram" target=_blank
                                    href="https://www.instagram.com/webcooks.in"></a>
                            </li>
                            <li style="padding: 0px 20px;">
                                <a class="icon icon-xxs icon-primary fa fa-github" target=_blank
                                    href="https://www.github.com/web-cooks"></a>
                            </li>
                        </ul>
                </div>
            </div>
        </footer>
    </div>
    <div class=snackbars id=form-output-global></div>
    <script src="{{ asset('js/core.min.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="{{ asset('js/rocket-loader.min.js') }}" defer></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151246646-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-151246646-1');

    </script>
</body>

</html>
