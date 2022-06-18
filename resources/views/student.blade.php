<html lang="en" class="desktop landscape rd-navbar-static-linked"><head>
    <meta charset="utf-8">
    <title>Best Industrial Training Company in Amritsar |Web Designing, Web Development, Digital Marketing, Graphic Designing </title>
    <meta name="description" content="Webcooks gives training for web designing in Amritsar. Here students can join php training in Amritsar and we also deal in android, digital marketing, web designing,  web development in amritsar.">
    <meta name="keywords" content="web designing institute in amritsar, social media marketing in amritsar, seo training in amritsar, android training in amritsar, php training in amritsar, computer training institutes near me, web developer summer internship, wordpress developer internship, web design internships, web development internship, web development institute in Amritsar, web developer internship, coding for kids, industrial training, courses ,best digital marketing institute in amritsar">
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/VZKEDW9wslPbEc9RmzMqaOAP/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-wyvEVSrAxo98MJGE0PuR2ri6k5qurqxA2/a+2Rdj2zI1XHJHSGLsoRS5ADozusAM"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-W0B7Q21LRN&amp;l=dataLayer&amp;cx=c"></script><script src="https://connect.facebook.net/signals/config/293098172609601?v=2.9.48&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="application/ld+json">
			{
			  "@context": "https://schema.org",
			  "@type": "Organization",
			  "url": "https://webcooks.in",
			  "name": "Training Institute",
			  "contactPoint": {
			    "@type": "ContactPoint",
			    "telephone": "+91 987 609 1236",
			    "contactType": "Customer service"
			  }
			}
		</script>
    <meta name="facebook-domain-verification" content="esy344hkj1ouz40sd2tae97b5txma3">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Webcooks - where theory meets practical">
    <meta property="og:url" content="https://webcooks.in">
    <meta property="og:description" content="We train young minds to develop dynamic websites and web apps. We are a team of committed, energetic professionals with talented web designers and experienced managers available to guide you through the flawless and timely execution of your assignments and project.">
    <meta property="og:image" content="https://webcooks.in/images/og-image.jpg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="100">
    <meta property="og:type" content="website">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <!--<link rel=icon href="images/logo.png" type="image/x-icon">-->

    <link rel="stylesheet" href="https://webcooks.in/css/bootstrap.css">
    <link rel="stylesheet" href="https://webcooks.in/css/fonts.css">
    <link rel="stylesheet" href="https://webcooks.in/css/cards.css">
    <link rel="stylesheet" href="https://webcooks.in/css/style.css">

    <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">WEBCOOKS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">Create Certificate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.certificate.list') }}">Certificate List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section id="contact" class="section-md bg-default decor-text">
        <div class="container">
            <div class="row row-50">
                <div class="col-md-12 col-lg-12">
                    <h4 class="heading-decorated">Enter Details For Certificate</h4>
                    <a href="{{ route('admin.certificate.list')  }}" target="_blank" class="btn btn-primary" >Certificate List</a>
                    <section class="mb-10">
                        <br>
                        <div class="row">
                            <div class="col-md-12 mb-md-0 mb-6">

                                <!-- Error messages -->
                                <!-- Contact Form -->

                                <form action="{{route('admin.save.form')}}" method="post">
                                    @csrf
                                    <div class="row" style="margin-top:0px">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="html">Certificate ID</label>
                                                <br>
                                                <input type="text" class="form-control" required name="certificate_id" placeholder="Certificate ID">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="html">Certificate Alotted Date</label><br>
                                                <input type="date" class="form-control" required name="certificate_generated_date" placeholder="Certificate Generated date" value="{{$ldate = date('Y-m-d')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:0px">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="html">Student Name</label><br>
                                                <input type="text" class="form-control" required name="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="html">Student Course</label><br>
                                                <input type="text" class="form-control" required name="subjects" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <label for="html">Course Months</label><br>
                                                <input type="text" class="form-control" required name="months" placeholder="Months">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:0px">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="html">Date of Admission</label><br>
                                                <input type="date" class="form-control" required name="admit_date" placeholder="Date of Admission">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="html">Date of Course Completion</label><br>
                                                <input type="date" class="form-control" required name="course_complete_date"  placeholder="Course Completion Date">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="html">Student Description</label><br>
                                                <textarea name="description" class="form-control" placeholder="Enter student description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" name="sent" value="Submit" class="btn btn-dark btn-block">
                                    </div>

                                </form>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
