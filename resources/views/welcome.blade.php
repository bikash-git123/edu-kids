<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>School &amp; College Academy - Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="School, College, Academy, Education, Learning" name="keywords">
    <meta content="School & College Management Portal and Academy" name="description">

    <!-- Favicon -->
    <link href="{{ asset('kider/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('kider/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('kider/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('kider/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('kider/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="{{ url('/') }}" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Edu Kids</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About Us</a>
                    <a href="#classes" class="nav-item nav-link">Courses &amp; Classes</a>
                    <a href="#teachers" class="nav-item nav-link">Faculty</a>
                    <a href="#gallery" class="nav-item nav-link">Event Gallery</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="#contact" class="btn btn-primary rounded-pill px-4 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-2"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('kider/img/carousel-1.jpg') }}" alt="Academy Campus">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .3);">
                        <div class="container-fluid px-4 px-lg-5">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Empowering Minds, Shaping Brighter Futures</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Welcome to School &amp; College Academy. Providing world-class education, innovative science labs, and comprehensive student development programs.</p>
                                    <a href="#classes" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Explore Classes</a>
                                    <a href="#about" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('kider/img/carousel-2.jpg') }}" alt="School Activities">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .3);">
                        <div class="container-fluid px-4 px-lg-5">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Excellence in Academics &amp; Sports</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Nurturing talent, fostering creativity, and building leadership for tomorrow's challenges.</p>
                                    <a href="#about" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a>
                                    <a href="#gallery" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Event Gallery</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Facilities Start -->
        <div class="container-fluid py-5">
            <div class="container-fluid px-4 px-lg-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Campus Facilities</h1>
                    <p>State-of-the-art infrastructure designed to foster academic growth and extra-curricular excellence.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            <div class="facility-icon bg-primary">
                                <span class="bg-primary"></span>
                                <i class="fa fa-bus-alt fa-3x text-primary"></i>
                                <span class="bg-primary"></span>
                            </div>
                            <div class="facility-text bg-primary">
                                <h3 class="text-primary mb-3">Campus Transport</h3>
                                <p class="mb-0">Safe and comfortable bus routes covering all major city points.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item">
                            <div class="facility-icon bg-success">
                                <span class="bg-success"></span>
                                <i class="fa fa-futbol fa-3x text-success"></i>
                                <span class="bg-success"></span>
                            </div>
                            <div class="facility-text bg-success">
                                <h3 class="text-success mb-3">Sports Ground</h3>
                                <p class="mb-0">Spacious athletic tracks, football field, and indoor sports arena.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facility-item">
                            <div class="facility-icon bg-warning">
                                <span class="bg-warning"></span>
                                <i class="fa fa-flask fa-3x text-warning"></i>
                                <span class="bg-warning"></span>
                            </div>
                            <div class="facility-text bg-warning">
                                <h3 class="text-warning mb-3">Science &amp; AI Labs</h3>
                                <p class="mb-0">Advanced robotics, computer, physics, and chemistry laboratories.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facility-item">
                            <div class="facility-icon bg-info">
                                <span class="bg-info"></span>
                                <i class="fa fa-chalkboard-teacher fa-3x text-info"></i>
                                <span class="bg-info"></span>
                            </div>
                            <div class="facility-text bg-info">
                                <h3 class="text-info mb-3">Expert Faculty</h3>
                                <p class="mb-0">Highly qualified professors and educators dedicated to student success.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facilities End -->


        <!-- About Start -->
        <div class="container-fluid py-5" id="about">
            <div class="container-fluid px-4 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">Welcome to Our School &amp; College Academy</h1>
                        <p>We believe education is the key to unlocking human potential. Our holistic curriculum combines rigorous academic instruction with cultural activities, sports, and modern technology integration.</p>
                        <p class="mb-4">With experienced faculty, personalized mentorship, and state-of-the-art campus facilities, we prepare students to excel in competitive environments and become responsible global leaders.</p>
                        <div class="row g-4 align-items-center">
                            <div class="col-sm-6">
                                <a class="btn btn-primary rounded-pill py-3 px-5" href="#classes">Explore Classes</a>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="{{ asset('kider/img/user.jpg') }}" alt="Principal" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="text-primary mb-1">Dr. Robert Miller</h6>
                                        <small>Principal &amp; Dean</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src="{{ asset('kider/img/about-1.jpg') }}" alt="About Image 1">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{ asset('kider/img/about-2.jpg') }}" alt="About Image 2">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{ asset('kider/img/about-3.jpg') }}" alt="About Image 3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Dynamic Courses / Classes Start -->
        <div class="container-fluid py-5" id="classes">
            <div class="container-fluid px-4 px-lg-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Academic Courses &amp; Classes</h1>
                    <p>Explore our academic programs offered across Computer Science, Business, Engineering, and Humanities.</p>
                </div>
                <div class="row g-4">
                    @forelse($courses ?? [] as $index => $course)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 * ($index + 1) }}s">
                            <div class="classes-item">
                                <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                    <img class="img-fluid rounded-circle" src="{{ asset('kider/img/classes-' . (($index % 6) + 1) . '.jpg') }}" alt="{{ $course->name }}">
                                </div>
                                <div class="bg-light rounded p-4 pt-5 mt-n5">
                                    <a class="d-block text-center h3 mt-3 mb-2 text-dark" href="#">{{ $course->name }}</a>
                                    <p class="text-center text-muted fs-7 mb-3">Code: <code>{{ $course->code }}</code> | {{ $course->department }}</p>
                                    
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-user-tie text-primary me-2"></i>
                                            <div>
                                                <h6 class="text-primary mb-0 fs-7">{{ $course->teacher->name ?? 'Faculty Member' }}</h6>
                                                <small class="text-muted fs-8">Instructor</small>
                                            </div>
                                        </div>
                                        <span class="bg-primary text-white rounded-pill py-1 px-3 fs-7">{{ $course->credits }} Credits</span>
                                    </div>
                                    <div class="row g-1">
                                        <div class="col-6">
                                            <div class="border-top border-3 border-primary pt-2 text-center">
                                                <h6 class="text-primary mb-1 fs-7">Department</h6>
                                                <small>{{ $course->department }}</small>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="border-top border-3 border-success pt-2 text-center">
                                                <h6 class="text-success mb-1 fs-7">Status</h6>
                                                <small class="text-uppercase">{{ $course->status }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center text-muted">Academic courses list updating soon.</div>
                    @endforelse
                </div>
            </div>
        </div>
        <!-- Classes End -->


        <!-- Popular Faculty / Teachers Start -->
        <div class="container-fluid py-5" id="teachers">
            <div class="container-fluid px-4 px-lg-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Our Distinguished Faculty</h1>
                    <p>Meet our experienced professors and educators dedicated to student growth.</p>
                </div>
                <div class="row g-4">
                    @forelse($teachers ?? [] as $index => $teacher)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 * ($index + 1) }}s">
                            <div class="team-item position-relative shadow-sm rounded overflow-hidden">
                                <div class="team-text text-center p-4 bg-light">
                                    <div class="avatar avatar-xl mx-auto mb-3">
                                        <span class="avatar-title rounded-circle bg-primary text-white fs-2 fw-bold d-inline-block p-3">
                                            {{ substr($teacher->name, 0, 1) }}
                                        </span>
                                    </div>
                                    <h4 class="mb-1 fw-bold">{{ $teacher->name }}</h4>
                                    <p class="text-primary mb-1">{{ $teacher->designation }}</p>
                                    <span class="badge bg-info mb-2">{{ $teacher->department }}</span>
                                    <p class="text-muted fs-7 mb-0">{{ $teacher->qualification }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center text-muted">Faculty directory loading...</div>
                    @endforelse
                </div>
            </div>
        </div>
        <!-- Teachers End -->


        <!-- Event Gallery Showcase Start -->
        <div class="container-fluid py-5" id="gallery">
            <div class="container-fluid px-4 px-lg-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Campus Event Gallery</h1>
                    <p>Highlights from Independence Day Celebrations, Sports Gala, and Science Exhibitions.</p>
                </div>
                <div class="row g-4">
                    @forelse($galleries ?? [] as $gallery)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="card border rounded h-100 shadow-sm overflow-hidden">
                                @if($gallery->images->count() > 0)
                                    <img src="{{ asset($gallery->images->first()->image_path) }}" class="card-img-top" style="height: 220px; object-fit: cover;" alt="{{ $gallery->title }}">
                                @else
                                    <div class="bg-secondary text-white d-flex align-items-center justify-content-center" style="height: 220px;">
                                        <i class="fas fa-images fa-3x"></i>
                                    </div>
                                @endif
                                <div class="card-body">
                                    <span class="badge bg-primary mb-2"><i class="fas fa-camera me-1"></i> {{ $gallery->images->count() }} Photos</span>
                                    <h5 class="fw-bold text-dark mb-2">{{ $gallery->title }}</h5>
                                    <p class="text-muted fs-7 mb-0">{{ Str::limit($gallery->description, 90) }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center text-muted">Event gallery updating...</div>
                    @endforelse
                </div>
            </div>
        </div>
        <!-- Event Gallery End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" id="contact">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <h3 class="text-white mb-4">School &amp; College Academy</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Academic Campus Way, City</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+1 (555) 100-2000</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@school.edu</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h3 class="text-white mb-4">Quick Navigation</h3>
                        <a class="btn btn-link text-white-50" href="#about">About Us</a>
                        <a class="btn btn-link text-white-50" href="#classes">Courses &amp; Classes</a>
                        <a class="btn btn-link text-white-50" href="#teachers">Faculty Directory</a>
                        <a class="btn btn-link text-white-50" href="#gallery">Event Gallery</a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h3 class="text-white mb-4">Newsletter</h3>
                        <p>Subscribe to our newsletter to receive campus news and event updates.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5 text-white border-white" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; {{ date('Y') }} School &amp; College Academy. Powered by Kider &amp; Kaiadmin Lite.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('kider/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('kider/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('kider/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('kider/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('kider/js/main.js') }}"></script>
</body>

</html>
