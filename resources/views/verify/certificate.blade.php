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
    <link rel=stylesheet href="{{ asset('css/bootstrap.css') }}">
    <link rel=stylesheet href="{{ asset('css/style.css') }}">
    <link rel=stylesheet href="{{ asset('css/fonts.css') }}">
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
                        <h3>
                            Trainee's Report
                        </h3>
                        <p>
                            The report includes the topics covered by the candidate during the training period and the
                            progress report.
                        </p>
                        <div style="margin-top: 20px;">
                            <table class="tableDesign" width="100%">
                                <tr>
                                    <td>
                                        <p><strong>Status:</strong></p>
                                    </td>
                                    <td>
                                        @if($student ? $student->status : null)
                                        <p id="certificateStatus" class="verified">
                                            <i class="fa fa-circle text-sucess" aria-hidden="true"
                                                style="display: inline;"></i>
                                            Verified
                                        </p>
                                        @else
                                        <p id="certificateStatus" class="verified">
                                            <i class="fa fa-circle text-dark" aria-hidden="true"
                                                style="display: inline;"></i>
                                            Not Verified
                                        </p>
                                        @endif

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><strong>Candidate Name:</strong></p>
                                    </td>
                                    <td>
                                        <p id="candidateName">{{ $student->stu_name ?? '' }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><strong>Course Name:</strong></p>
                                    </td>
                                    <td>
                                        <p id="courseName">{{ $student->stu_course ?? '' }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><strong>Certificate ID:</strong></p>
                                    </td>
                                    <td>
                                        <p id="candidateId">{{ $student->certificate_id ?? '' }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><strong>Training Period:</strong></p>
                                    </td>
                                    <td>
                                        @php
                                        $to = \Carbon\Carbon::parse($student->stu_admitted_date);
                                        $from = \Carbon\Carbon::parse($student->stu_course_completed_date);
                                        $diff_in_months = $to->diffInMonths($from);
                                        @endphp
                                        <p id="trainingPeriod">{{ $diff_in_months ?? '' }} Months</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2">
                                        <p><strong>Course Complete Date</strong></p>
                                    </td>
                                    <td>
                                        <p id="trainingPeriod">{{ $student->stu_course_completed_date }}</p>
                                    </td>
                                </tr>
                                <!--<tr>-->
                                <!--    <td>-->
                                <!--        <p><strong>Topics Covered:</strong></p>-->
                                <!--    </td>-->
                                <!--    <td>-->
                                <!--        <div class="inlineImages" id="skillIcons">-->
                                <!--            <img width="40px" class="inlineImages" src="verify/images/c++.png" title="Programming in C++" />-->
                                <!--            <img width="40px"class="inlineImages" src="verify/images/ds.png" title="Data Structures" />-->
                                <!--            <img width="40px"class="inlineImages" src="verify/images/git.png" title="GIT (VCS)" />-->
                                <!--        </div>-->
                                <!--    </td>-->
                                <!--</tr>-->
                            </table>
                            @if($student->description)
                            <p><strong>How was <span id="candidateNameInReport"
                                        class="star">{{ $student->stu_name ?? '' }}</span> as a trainee?</strong>
                                <ul>
                                    <li id="finalReport">
                                        {{ $student->description ?? '' }}
                                    </li>
                                </ul>
                            </p>
                            @endif
                            <p><strong>Overall Rating </strong>
                                <ul style="display: inline;">
                                    <li id="star1" style="display: inline;" class="star"><i class="fa fa-star"
                                            aria-hidden="true"></i></li>
                                    <li id="star2" style="display: inline;" class="star"><i class="fa fa-star"
                                            aria-hidden="true"></i></li>
                                    <li id="star3" style="display: inline;" class="star"><i class="fa fa-star"
                                            aria-hidden="true"></i></li>
                                    <li id="star4" style="display: inline;" class="star"><i class="fa fa-star"
                                            aria-hidden="true"></i></li>
                                    <li id="star5" style="display: inline;" class="dimStar"><i class="fa fa-star"
                                            aria-hidden="true"></i></li>
                                </ul>
                            </p>
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
