<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edu Kids - Premier Preschool &amp; Early Childhood Academy (7 Campuses)</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Edu Kids, Preschool, Kindergarten, Playgroup, Nursery, LKG, UKG, Daycare, Early Childhood Education, 7 Branches" name="keywords">
    <meta content="Edu Kids - Premier Preschool Network with 7 Campuses. Offering Playgroup, Nursery, LKG, UKG, and Daycare with sensory play and safe environment." name="description">

    <!-- Favicon -->
    <link href="{{ asset('kider/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Inter:wght@600;700&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('kider/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('kider/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('kider/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('kider/css/style.css') }}" rel="stylesheet">

    <style>
        .nav-tabs .nav-link.active {
            background-color: var(--primary) !important;
            color: #ffffff !important;
            border-color: var(--primary) !important;
        }
        .branch-card {
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }
        .branch-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(254, 93, 55, 0.15) !important;
        }
        .founder-box {
            background: linear-gradient(135deg, #FFF5F3 0%, #ffffff 100%);
            border-left: 5px solid var(--primary);
        }
        .step-number {
            width: 45px;
            height: 45px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
        }
        .prospectus-banner {
            background: linear-gradient(135deg, #103741 0%, #1a5260 100%);
            color: white;
            border-radius: 16px;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading Edu Kids...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Top Header Bar -->
        <div class="bg-dark text-white px-4 py-2 d-none d-lg-block">
            <div class="container-fluid d-flex justify-content-between align-items-center fs-7">
                <div>
                    <span class="me-3"><i class="fas fa-map-marker-alt text-primary me-1"></i> 7 Premier Preschool Campuses</span>
                    <span class="me-3"><i class="fas fa-phone-alt text-primary me-1"></i> Preschool Helpline: +1 (555) 800-KIDS</span>
                    <span><i class="fas fa-envelope text-primary me-1"></i> admissions@edukids.edu</span>
                </div>
                <div>
                    <a href="#prospectus" class="text-white me-3 text-decoration-none"><i class="fas fa-file-pdf me-1 text-warning"></i> Download Prospectus 2026</a>
                    <a href="#branches" class="text-white text-decoration-none"><i class="fas fa-building me-1 text-info"></i> Branch Locator</a>
                </div>
            </div>
        </div>

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0 shadow-sm">
            <a href="{{ url('/') }}" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Edu Kids</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>

                    <!-- About Us Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#about" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="#about" class="dropdown-item"><i class="fas fa-university text-primary me-2"></i>Preschool Vision</a>
                            <a href="#founder" class="dropdown-item"><i class="fas fa-user-tie text-info me-2"></i>Founder's Message</a>
                            <a href="#achievements" class="dropdown-item"><i class="fas fa-trophy text-warning me-2"></i>Awards &amp; Recognition</a>
                        </div>
                    </div>

                    <!-- 7 Branches Link -->
                    <a href="#branches" class="nav-item nav-link"><i class="fas fa-building text-primary me-1"></i>7 Campuses</a>

                    <!-- Preschool Programs Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#programs" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Preschool Programs</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="#programs" class="dropdown-item"><i class="fas fa-shapes text-success me-2"></i>Playgroup &amp; Toddlers</a>
                            <a href="#programs" class="dropdown-item"><i class="fas fa-child text-info me-2"></i>Nursery &amp; Kindergarten</a>
                            <a href="#facilities" class="dropdown-item"><i class="fas fa-icons text-warning me-2"></i>Preschool Facilities</a>
                            <a href="#teachers" class="dropdown-item"><i class="fas fa-chalkboard-teacher text-primary me-2"></i>Preschool Teachers</a>
                        </div>
                    </div>

                    <!-- Admissions Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#admissions" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Admissions</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="#admissions" class="dropdown-item"><i class="fas fa-route text-info me-2"></i>4-Step Admission Guide</a>
                            <a href="#admissions" class="dropdown-item"><i class="fas fa-file-alt text-success me-2"></i>Document Checklist</a>
                            <a href="#admissions" class="dropdown-item"><i class="fas fa-paper-plane text-primary me-2"></i>Online Enquiry Form</a>
                            <a href="#prospectus" class="dropdown-item"><i class="fas fa-file-pdf text-danger me-2"></i>Download Prospectus 2026</a>
                        </div>
                    </div>

                    <!-- Campus Life Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#gallery" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Preschool Life</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="#gallery" class="dropdown-item"><i class="fas fa-camera text-primary me-2"></i>Activity &amp; Event Gallery</a>
                            <a href="#achievements" class="dropdown-item"><i class="fas fa-star text-warning me-2"></i>Parent Reviews</a>
                        </div>
                    </div>

                    <a href="#contact" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="#admissions" class="btn btn-primary rounded-pill px-4 d-none d-lg-block">
                    Enroll Now <i class="fa fa-arrow-right ms-2"></i>
                </a>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('kider/img/carousel-1.jpg') }}" alt="Edu Kids Preschool">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .35);">
                        <div class="container-fluid px-4 px-lg-5">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <span class="badge bg-primary px-3 py-2 fs-6 mb-3 rounded-pill text-uppercase">Preschool Admissions Open 2026 - 2027</span>
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Nurturing Early Years With Love, Play &amp; Discovery</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Providing a safe, joy-filled environment across our 7 modern preschool branches with sensory play, smart rooms, and caring educators.</p>
                                    <a href="#programs" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">View Programs</a>
                                    <a href="#branches" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Find Nearest Branch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('kider/img/carousel-2.jpg') }}" alt="Preschool Activities">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .35);">
                        <div class="container-fluid px-4 px-lg-5">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <span class="badge bg-warning text-dark px-3 py-2 fs-6 mb-3 rounded-pill text-uppercase">Playgroup, Nursery, LKG &amp; UKG</span>
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Where Every Little Step Leads To Big Dreams</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">From toddlers to kindergarten, Edu Kids fosters early language, motor skills, social confidence, and creative expression.</p>
                                    <a href="#prospectus" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Download Brochure</a>
                                    <a href="#admissions" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Admission Guide</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- 1. School Introduction, Vision & Mission -->
        <div class="container-fluid py-5" id="about">
            <div class="container-fluid px-4 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <span class="text-primary fw-bold text-uppercase fs-6">About Edu Kids Preschool Network</span>
                        <h1 class="mb-4">The Best Start For Your Child's Bright Future</h1>
                        <p class="lead text-secondary">Edu Kids is a premier network of 7 dedicated preschool campuses providing high-quality early childhood education, play-based learning, and kindergarten readiness.</p>
                        <p class="mb-4">We combine child-first pedagogy, Montessori activity corners, phonics, motor skills development, and nutritious care to ensure your child blossoms in a warm, secure environment.</p>

                        <div class="row g-4 mt-2">
                            <!-- Vision Card -->
                            <div class="col-md-6">
                                <div class="card border-0 shadow-sm rounded-3 p-3 bg-light border-start border-primary border-4">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-eye fa-2x text-primary me-3"></i>
                                        <h5 class="fw-bold mb-0">Our Vision</h5>
                                    </div>
                                    <p class="fs-7 text-muted mb-0">To be the most trusted preschool network nurturing curious, joyful, and emotionally secure young learners.</p>
                                </div>
                            </div>

                            <!-- Mission Card -->
                            <div class="col-md-6">
                                <div class="card border-0 shadow-sm rounded-3 p-3 bg-light border-start border-success border-4">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-bullseye fa-2x text-success me-3"></i>
                                        <h5 class="fw-bold mb-0">Our Mission</h5>
                                    </div>
                                    <p class="fs-7 text-muted mb-0">To deliver child-centered preschool education with loving teachers, safe play zones, and active parent involvement.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src="{{ asset('kider/img/about-1.jpg') }}" alt="Edu Kids Preschool Campus">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{ asset('kider/img/about-2.jpg') }}" alt="Preschool Learning">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{ asset('kider/img/about-3.jpg') }}" alt="Kids Play Zone">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Founder & Director Message Section -->
        <div class="container-fluid py-5 bg-light" id="founder">
            <div class="container-fluid px-4 px-lg-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <span class="text-primary fw-bold text-uppercase fs-6">Leadership Guidance</span>
                    <h1 class="mb-3">Message From Our Founder &amp; Director</h1>
                    <p>Dedicated to providing the happiest early years education for every toddler and child.</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card border-0 shadow rounded-4 p-4 p-md-5 founder-box bg-white">
                            <div class="row align-items-center g-4">
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('kider/img/user.jpg') }}" class="img-fluid rounded-circle shadow p-2 bg-white" style="width: 200px; height: 200px; object-fit: cover;" alt="Dr. Robert Miller">
                                    <h4 class="fw-bold mt-3 mb-1 text-dark">Dr. Robert Miller</h4>
                                    <p class="text-primary fw-bold mb-1">Founder &amp; Preschool Director</p>
                                    <span class="badge bg-secondary fs-8">Ph.D. in Early Childhood Education</span>
                                </div>
                                <div class="col-md-8">
                                    <i class="fas fa-quote-left fa-3x text-primary opacity-25 mb-3 d-block"></i>
                                    <h4 class="fw-bold text-dark mb-3">"Early childhood is the foundation upon which all future learning is built."</h4>
                                    <p class="text-secondary lead fs-6" style="line-height: 1.8;">
                                        "Welcome to Edu Kids Preschool Network. We believe that the early years of a child's life are precious. Our mission across all our 7 branches is to foster curiosity, kindness, and self-confidence through joyful play and guided learning.
                                    </p>
                                    <p class="text-secondary mb-3">
                                        Our passionate teachers create a second home for your little ones where they explore music, arts, storytelling, and foundational concepts. We invite parents to visit our campuses and experience the magic of Edu Kids."
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <div class="me-4">
                                            <h6 class="fw-bold mb-0">Dr. Robert Miller</h6>
                                            <small class="text-muted">Founder &amp; Director, Edu Kids Group</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Details of All 7 Branches (Name, Address, Contact, Google Maps) -->
        <div class="container-fluid py-5" id="branches">
            <div class="container-fluid px-4 px-lg-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <span class="text-primary fw-bold text-uppercase fs-6">Preschool Locations</span>
                    <h1 class="mb-3">Our 7 Preschool Branches</h1>
                    <p>Edu Kids operates 7 child-friendly preschool campuses equipped with colorful classrooms, splash pools, play parks, and 24/7 CCTV.</p>
                </div>

                <div class="row g-4">
                    @php
                        $branchList = [
                            [
                                'id' => 1,
                                'name' => '1. Central City Main Preschool',
                                'code' => 'Branch 01 (Headquarters)',
                                'address' => '123 Academic Way, Central City Sector 4',
                                'phone' => '+1 (555) 100-2001',
                                'email' => 'central@edukids.edu',
                                'head' => 'Sarah Jenkins (Preschool Head)',
                                'classes' => 'Playgroup, Nursery, LKG, UKG & Daycare',
                                'map' => 'https://maps.google.com/maps?q=Central%20City&t=&z=13&ie=UTF8&iwloc=&output=embed'
                            ],
                            [
                                'id' => 2,
                                'name' => '2. Sunrise Heights Branch',
                                'code' => 'Branch 02 (Springfield)',
                                'address' => '456 Sunrise Avenue, Springfield East',
                                'phone' => '+1 (555) 100-2002',
                                'email' => 'springfield@edukids.edu',
                                'head' => 'Jane Anderson (Branch Supervisor)',
                                'classes' => 'Playgroup, Nursery, LKG & UKG',
                                'map' => 'https://maps.google.com/maps?q=Springfield&t=&z=13&ie=UTF8&iwloc=&output=embed'
                            ],
                            [
                                'id' => 3,
                                'name' => '3. Green Valley Branch',
                                'code' => 'Branch 03 (Metropolis)',
                                'address' => '789 Park Lane, Metropolis West',
                                'phone' => '+1 (555) 100-2003',
                                'email' => 'metropolis@edukids.edu',
                                'head' => 'Emily Watson (Preschool Principal)',
                                'classes' => 'Playgroup, Nursery, LKG, UKG & Activity Club',
                                'map' => 'https://maps.google.com/maps?q=Metropolis&t=&z=13&ie=UTF8&iwloc=&output=embed'
                            ],
                            [
                                'id' => 4,
                                'name' => '4. Royal Oaks Branch',
                                'code' => 'Branch 04 (Gotham)',
                                'address' => '321 Oak Boulevard, Gotham North',
                                'phone' => '+1 (555) 100-2004',
                                'email' => 'gotham@edukids.edu',
                                'head' => 'Michael Chang (Branch Coordinator)',
                                'classes' => 'Playgroup, Nursery, LKG & UKG',
                                'map' => 'https://maps.google.com/maps?q=Gotham&t=&z=13&ie=UTF8&iwloc=&output=embed'
                            ],
                            [
                                'id' => 5,
                                'name' => '5. Lakeside Branch',
                                'code' => 'Branch 05 (Star City)',
                                'address' => '654 Lake View Drive, Star City South',
                                'phone' => '+1 (555) 100-2005',
                                'email' => 'starcity@edukids.edu',
                                'head' => 'Laura Vance (Head Teacher)',
                                'classes' => 'Playgroup, Nursery & Daycare',
                                'map' => 'https://maps.google.com/maps?q=Star%20City&t=&z=13&ie=UTF8&iwloc=&output=embed'
                            ],
                            [
                                'id' => 6,
                                'name' => '6. Tech Park Kids Branch',
                                'code' => 'Branch 06 (Keystone)',
                                'address' => '987 Innovation Way, Keystone IT Hub',
                                'phone' => '+1 (555) 100-2006',
                                'email' => 'keystone@edukids.edu',
                                'head' => 'David Miller (Branch Head)',
                                'classes' => 'Playgroup, Nursery, LKG & STEAM Pre-K',
                                'map' => 'https://maps.google.com/maps?q=Keystone&t=&z=13&ie=UTF8&iwloc=&output=embed'
                            ],
                            [
                                'id' => 7,
                                'name' => '7. Northridge Branch',
                                'code' => 'Branch 07 (Midway City)',
                                'address' => '159 Northridge Road, Midway City Sector 2',
                                'phone' => '+1 (555) 100-2007',
                                'email' => 'midway@edukids.edu',
                                'head' => 'Amanda Collins (Preschool Head)',
                                'classes' => 'Playgroup, Nursery, LKG & UKG',
                                'map' => 'https://maps.google.com/maps?q=Midway%20City&t=&z=13&ie=UTF8&iwloc=&output=embed'
                            ]
                        ];
                    @endphp

                    @foreach($branchList as $b)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="card h-100 shadow-sm branch-card rounded-4 overflow-hidden">
                                <div class="card-header bg-primary text-white p-3">
                                    <span class="badge bg-white text-primary fw-bold mb-1">{{ $b['code'] }}</span>
                                    <h5 class="fw-bold text-white mb-0">{{ $b['name'] }}</h5>
                                </div>
                                <div class="card-body p-4">
                                    <p class="fs-7 text-muted mb-2"><i class="fas fa-child text-primary me-2"></i><strong>Programs:</strong> {{ $b['classes'] }}</p>
                                    <p class="fs-7 text-muted mb-2"><i class="fas fa-user-tie text-info me-2"></i><strong>Branch Head:</strong> {{ $b['head'] }}</p>
                                    <p class="fs-7 text-muted mb-2"><i class="fas fa-map-marker-alt text-danger me-2"></i><strong>Address:</strong> {{ $b['address'] }}</p>
                                    <p class="fs-7 text-muted mb-2"><i class="fas fa-phone-alt text-success me-2"></i><strong>Phone:</strong> {{ $b['phone'] }}</p>
                                    <p class="fs-7 text-muted mb-3"><i class="fas fa-envelope text-warning me-2"></i><strong>Email:</strong> {{ $b['email'] }}</p>
                                    
                                    <!-- Google Maps Embedded -->
                                    <div class="ratio ratio-16x9 rounded overflow-hidden mt-3 border">
                                        <iframe src="{{ $b['map'] }}" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- 4. Preschool Programs Offered + Age Groups -->
        <div class="container-fluid py-5 bg-light" id="programs">
            <div class="container-fluid px-4 px-lg-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <span class="text-primary fw-bold text-uppercase fs-6">Preschool Offerings</span>
                    <h1 class="mb-3">Programs &amp; Age Criteria</h1>
                    <p>Specially curated early learning programs designed for toddlers and kindergarten children.</p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item h-100">
                            <div class="bg-white rounded-circle w-75 mx-auto p-3 shadow-sm">
                                <img class="img-fluid rounded-circle" src="{{ asset('kider/img/classes-1.jpg') }}" alt="Playgroup">
                            </div>
                            <div class="bg-white rounded p-4 pt-5 mt-n5 shadow-sm border">
                                <span class="badge bg-warning text-dark me-2">Early Years</span>
                                <a class="d-block h3 mt-2 mb-2 text-dark text-decoration-none" href="#">Playgroup &amp; Toddlers</a>
                                <p class="text-muted fs-7 mb-3">Sensory play, rhythm &amp; movement, social interaction, and motor skill building.</p>
                                
                                <div class="row g-2 pt-2 border-top">
                                    <div class="col-6">
                                        <small class="text-primary fw-bold d-block"><i class="fas fa-child me-1"></i> Age Group:</small>
                                        <span class="fs-7 text-dark fw-semibold">1.5 - 2.5 Years</span>
                                    </div>
                                    <div class="col-6">
                                        <small class="text-success fw-bold d-block"><i class="fas fa-clock me-1"></i> Timing:</small>
                                        <span class="fs-7 text-dark fw-semibold">9:00 AM - 11:30 AM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="classes-item h-100">
                            <div class="bg-white rounded-circle w-75 mx-auto p-3 shadow-sm">
                                <img class="img-fluid rounded-circle" src="{{ asset('kider/img/classes-2.jpg') }}" alt="Nursery">
                            </div>
                            <div class="bg-white rounded p-4 pt-5 mt-n5 shadow-sm border">
                                <span class="badge bg-info text-white me-2">Pre-Nursery</span>
                                <a class="d-block h3 mt-2 mb-2 text-dark text-decoration-none" href="#">Nursery Program</a>
                                <p class="text-muted fs-7 mb-3">Phonics, letter recognition, number fun, storytelling, and art expression.</p>
                                
                                <div class="row g-2 pt-2 border-top">
                                    <div class="col-6">
                                        <small class="text-primary fw-bold d-block"><i class="fas fa-child me-1"></i> Age Group:</small>
                                        <span class="fs-7 text-dark fw-semibold">2.5 - 3.5 Years</span>
                                    </div>
                                    <div class="col-6">
                                        <small class="text-success fw-bold d-block"><i class="fas fa-clock me-1"></i> Timing:</small>
                                        <span class="fs-7 text-dark fw-semibold">8:30 AM - 12:00 PM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="classes-item h-100">
                            <div class="bg-white rounded-circle w-75 mx-auto p-3 shadow-sm">
                                <img class="img-fluid rounded-circle" src="{{ asset('kider/img/classes-3.jpg') }}" alt="LKG">
                            </div>
                            <div class="bg-white rounded p-4 pt-5 mt-n5 shadow-sm border">
                                <span class="badge bg-primary me-2">Kindergarten 1</span>
                                <a class="d-block h3 mt-2 mb-2 text-dark text-decoration-none" href="#">LKG (Lower Kindergarten)</a>
                                <p class="text-muted fs-7 mb-3">Vocabulary building, math concepts, nature exploration, and hand-eye coordination.</p>
                                
                                <div class="row g-2 pt-2 border-top">
                                    <div class="col-6">
                                        <small class="text-primary fw-bold d-block"><i class="fas fa-child me-1"></i> Age Group:</small>
                                        <span class="fs-7 text-dark fw-semibold">3.5 - 4.5 Years</span>
                                    </div>
                                    <div class="col-6">
                                        <small class="text-success fw-bold d-block"><i class="fas fa-clock me-1"></i> Timing:</small>
                                        <span class="fs-7 text-dark fw-semibold">8:30 AM - 12:30 PM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="classes-item h-100">
                            <div class="bg-white rounded-circle w-75 mx-auto p-3 shadow-sm">
                                <img class="img-fluid rounded-circle" src="{{ asset('kider/img/classes-4.jpg') }}" alt="UKG">
                            </div>
                            <div class="bg-white rounded p-4 pt-5 mt-n5 shadow-sm border">
                                <span class="badge bg-success me-2">Kindergarten 2</span>
                                <a class="d-block h3 mt-2 mb-2 text-dark text-decoration-none" href="#">UKG (Upper Kindergarten)</a>
                                <p class="text-muted fs-7 mb-3">Reading readiness, elementary science, logical puzzles, and primary school transition.</p>
                                
                                <div class="row g-2 pt-2 border-top">
                                    <div class="col-6">
                                        <small class="text-primary fw-bold d-block"><i class="fas fa-child me-1"></i> Age Group:</small>
                                        <span class="fs-7 text-dark fw-semibold">4.5 - 5.5 Years</span>
                                    </div>
                                    <div class="col-6">
                                        <small class="text-success fw-bold d-block"><i class="fas fa-clock me-1"></i> Timing:</small>
                                        <span class="fs-7 text-dark fw-semibold">8:00 AM - 1:00 PM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="classes-item h-100">
                            <div class="bg-white rounded-circle w-75 mx-auto p-3 shadow-sm">
                                <img class="img-fluid rounded-circle" src="{{ asset('kider/img/classes-5.jpg') }}" alt="Daycare">
                            </div>
                            <div class="bg-white rounded p-4 pt-5 mt-n5 shadow-sm border">
                                <span class="badge bg-secondary me-2">Childcare</span>
                                <a class="d-block h3 mt-2 mb-2 text-dark text-decoration-none" href="#">Daycare &amp; After-School Care</a>
                                <p class="text-muted fs-7 mb-3">Hygienic nap rooms, supervised meals, storytelling, and guided evening play.</p>
                                
                                <div class="row g-2 pt-2 border-top">
                                    <div class="col-6">
                                        <small class="text-primary fw-bold d-block"><i class="fas fa-child me-1"></i> Age Group:</small>
                                        <span class="fs-7 text-dark fw-semibold">2.0 - 6.0 Years</span>
                                    </div>
                                    <div class="col-6">
                                        <small class="text-success fw-bold d-block"><i class="fas fa-clock me-1"></i> Timing:</small>
                                        <span class="fs-7 text-dark fw-semibold">8:00 AM - 6:00 PM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="classes-item h-100">
                            <div class="bg-white rounded-circle w-75 mx-auto p-3 shadow-sm">
                                <img class="img-fluid rounded-circle" src="{{ asset('kider/img/classes-6.jpg') }}" alt="STEAM Pre-K">
                            </div>
                            <div class="bg-white rounded p-4 pt-5 mt-n5 shadow-sm border">
                                <span class="badge bg-danger me-2">Enrichment</span>
                                <a class="d-block h3 mt-2 mb-2 text-dark text-decoration-none" href="#">Pre-K STEAM &amp; Activity Club</a>
                                <p class="text-muted fs-7 mb-3">Little scientists STEAM experiments, clay modeling, music, and dance sessions.</p>
                                
                                <div class="row g-2 pt-2 border-top">
                                    <div class="col-6">
                                        <small class="text-primary fw-bold d-block"><i class="fas fa-child me-1"></i> Age Group:</small>
                                        <span class="fs-7 text-dark fw-semibold">3.0 - 6.0 Years</span>
                                    </div>
                                    <div class="col-6">
                                        <small class="text-success fw-bold d-block"><i class="fas fa-clock me-1"></i> Timing:</small>
                                        <span class="fs-7 text-dark fw-semibold">2:00 PM - 5:00 PM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5. Main Preschool Facilities & Special Features -->
        <div class="container-fluid py-5" id="facilities">
            <div class="container-fluid px-4 px-lg-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <span class="text-primary fw-bold text-uppercase fs-6">Preschool Infrastructure</span>
                    <h1 class="mb-3">What Makes Edu Kids Special</h1>
                    <p>Designed specifically for toddler safety, fun play, sensory development, and active learning.</p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item h-100">
                            <div class="facility-icon bg-primary">
                                <span class="bg-primary"></span>
                                <i class="fa fa-shapes fa-3x text-primary"></i>
                                <span class="bg-primary"></span>
                            </div>
                            <div class="facility-text bg-primary">
                                <h3 class="text-primary mb-3">Sensory Play Zone</h3>
                                <p class="mb-0">Soft play areas, sand pits, water splash tables, and tactile learning kits.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item h-100">
                            <div class="facility-icon bg-success">
                                <span class="bg-success"></span>
                                <i class="fa fa-tv fa-3x text-success"></i>
                                <span class="bg-success"></span>
                            </div>
                            <div class="facility-text bg-success">
                                <h3 class="text-success mb-3">Smart Rhyme Rooms</h3>
                                <p class="mb-0">Interactive Touch boards, animated phonics, and audio-visual story sessions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facility-item h-100">
                            <div class="facility-icon bg-warning">
                                <span class="bg-warning"></span>
                                <i class="fa fa-video fa-3x text-warning"></i>
                                <span class="bg-warning"></span>
                            </div>
                            <div class="facility-text bg-warning">
                                <h3 class="text-warning mb-3">Live CCTV App Access</h3>
                                <p class="mb-0">24/7 CCTV surveillance with live smartphone app view for parents.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facility-item h-100">
                            <div class="facility-icon bg-info">
                                <span class="bg-info"></span>
                                <i class="fa fa-apple-alt fa-3x text-info"></i>
                                <span class="bg-info"></span>
                            </div>
                            <div class="facility-text bg-info">
                                <h3 class="text-info mb-3">Organic Kids Kitchen</h3>
                                <p class="mb-0">Freshly prepared, pediatrician-approved meals and fruit snacks daily.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6. Admission Information (Age Criteria, Process, Required Docs, Enquiry Form) -->
        <div class="container-fluid py-5 bg-light" id="admissions">
            <div class="container-fluid px-4 px-lg-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <span class="text-primary fw-bold text-uppercase fs-6">Enrollment Guide</span>
                    <h1 class="mb-3">Preschool Admission Process</h1>
                    <p>Transparent, hassle-free 4-step admission process for session 2026-2027.</p>
                </div>

                <!-- 4 Steps Stepper -->
                <div class="row g-4 mb-5">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card border-0 shadow-sm p-4 text-center rounded-4 h-100">
                            <div class="step-number mx-auto mb-3">1</div>
                            <h5 class="fw-bold text-dark">Online Enquiry</h5>
                            <p class="fs-7 text-muted mb-0">Fill out the admission form below or visit any of our 7 branch offices.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card border-0 shadow-sm p-4 text-center rounded-4 h-100">
                            <div class="step-number mx-auto mb-3">2</div>
                            <h5 class="fw-bold text-dark">Campus Tour</h5>
                            <p class="fs-7 text-muted mb-0">Visit our play zones and enjoy a child interaction session with counselors.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card border-0 shadow-sm p-4 text-center rounded-4 h-100">
                            <div class="step-number mx-auto mb-3">3</div>
                            <h5 class="fw-bold text-dark">Document Review</h5>
                            <p class="fs-7 text-muted mb-0">Submit child's birth certificate and passport photographs.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card border-0 shadow-sm p-4 text-center rounded-4 h-100">
                            <div class="step-number mx-auto mb-3">4</div>
                            <h5 class="fw-bold text-dark">Welcome Kit &amp; Join</h5>
                            <p class="fs-7 text-muted mb-0">Receive student bag, activity kit, and welcome book!</p>
                        </div>
                    </div>
                </div>

                <div class="row g-5">
                    <!-- Required Documents -->
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card border-0 shadow rounded-4 p-4 h-100">
                            <h4 class="fw-bold text-primary mb-4"><i class="fas fa-file-alt me-2"></i>Required Documents Checklist</h4>
                            <ul class="list-group list-group-flush fs-6">
                                <li class="list-group-item bg-transparent px-0 py-3"><i class="fas fa-check-circle text-success me-2"></i> Child Birth Certificate (Original &amp; Photocopy)</li>
                                <li class="list-group-item bg-transparent px-0 py-3"><i class="fas fa-check-circle text-success me-2"></i> 6 Passport Size Recent Photographs of Child</li>
                                <li class="list-group-item bg-transparent px-0 py-3"><i class="fas fa-check-circle text-success me-2"></i> Passport Size Photographs of Parents / Guardians</li>
                                <li class="list-group-item bg-transparent px-0 py-3"><i class="fas fa-check-circle text-success me-2"></i> Parent ID Proof (Aadhaar / Passport / Driving License)</li>
                                <li class="list-group-item bg-transparent px-0 py-3"><i class="fas fa-check-circle text-success me-2"></i> Child Immunization &amp; Vaccination Card</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Admission Form -->
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border-0 shadow rounded-4 p-4 p-md-5">
                            <h4 class="fw-bold text-dark mb-4"><i class="fas fa-paper-plane me-2 text-primary"></i>Online Preschool Admission Enquiry Form</h4>
                            <form action="{{ url('/') }}" method="GET" onsubmit="alert('Thank you! Your preschool admission enquiry has been submitted. Our branch counselor will contact you shortly.'); return false;">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold">Parent Name *</label>
                                        <input type="text" class="form-control" placeholder="Enter full name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold">Phone Number *</label>
                                        <input type="tel" class="form-control" placeholder="+1 (555) 000-0000" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold">Child Name *</label>
                                        <input type="text" class="form-control" placeholder="Child name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold">Seeking Program *</label>
                                        <select class="form-select" required>
                                            <option value="">-- Select Program --</option>
                                            <option>Playgroup &amp; Toddlers (1.5 - 2.5 Yrs)</option>
                                            <option>Nursery (2.5 - 3.5 Yrs)</option>
                                            <option>Lower Kindergarten - LKG (3.5 - 4.5 Yrs)</option>
                                            <option>Upper Kindergarten - UKG (4.5 - 5.5 Yrs)</option>
                                            <option>Daycare &amp; After-School Care</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label fw-bold">Preferred Campus Branch *</label>
                                        <select class="form-select" required>
                                            <option value="">-- Select Preferred Branch --</option>
                                            <option>Branch 01 - Central City Main Preschool</option>
                                            <option>Branch 02 - Sunrise Heights Branch (Springfield)</option>
                                            <option>Branch 03 - Green Valley Branch (Metropolis)</option>
                                            <option>Branch 04 - Royal Oaks Branch (Gotham)</option>
                                            <option>Branch 05 - Lakeside Branch (Star City)</option>
                                            <option>Branch 06 - Tech Park Kids Branch (Keystone)</option>
                                            <option>Branch 07 - Northridge Branch (Midway City)</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-bold">Message / Questions</label>
                                        <textarea class="form-control" rows="3" placeholder="Any specific requirements..."></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100 py-3 fw-bold"><i class="fas fa-paper-plane me-2"></i> Submit Preschool Enquiry</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 7. School / Branch Photos & Videos Gallery -->
        <div class="container-fluid py-5" id="gallery">
            <div class="container-fluid px-4 px-lg-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <span class="text-primary fw-bold text-uppercase fs-6">Preschool Life</span>
                    <h1 class="mb-3">Preschool Photo Gallery</h1>
                    <p>Glance into toddler play sessions, rhyme celebrations, sports day, and art festivals across our 7 branches.</p>
                </div>

                <div class="row g-4">
                    @forelse($galleries ?? [] as $gallery)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="card border rounded-4 h-100 shadow-sm overflow-hidden">
                                @if($gallery->images->count() > 0)
                                    <img src="{{ asset($gallery->images->first()->image_path) }}" class="card-img-top" style="height: 240px; object-fit: cover;" alt="{{ $gallery->title }}">
                                @else
                                    <div class="bg-secondary text-white d-flex align-items-center justify-content-center" style="height: 240px;">
                                        <i class="fas fa-images fa-3x"></i>
                                    </div>
                                @endif
                                <div class="card-body p-4">
                                    <span class="badge bg-primary mb-2"><i class="fas fa-camera me-1"></i> {{ $gallery->images->count() }} Photos</span>
                                    <h5 class="fw-bold text-dark mb-2">{{ $gallery->title }}</h5>
                                    <p class="text-muted fs-7 mb-0">{{ Str::limit($gallery->description, 100) }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center text-muted">Preschool gallery photos updating...</div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- 8. Achievements, Awards & Parent Testimonials -->
        <div class="container-fluid py-5 bg-light" id="achievements">
            <div class="container-fluid px-4 px-lg-5">
                <!-- Achievements Row -->
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <span class="text-primary fw-bold text-uppercase fs-6">Excellence &amp; Recognition</span>
                    <h1 class="mb-3">Our Achievements &amp; Awards</h1>
                    <p>Proud milestones achieved by Edu Kids in early childhood pedagogy and preschool safety.</p>
                </div>

                <div class="row g-4 mb-5">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm p-4 text-center rounded-4 h-100 bg-white">
                            <div class="display-4 text-warning mb-2"><i class="fas fa-trophy"></i></div>
                            <h4 class="fw-bold">Best Preschool Chain 2025</h4>
                            <p class="fs-7 text-muted mb-0">Awarded for Excellence in Early Childhood Pedagogy &amp; Play Equipment by National Education Forum.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm p-4 text-center rounded-4 h-100 bg-white">
                            <div class="display-4 text-primary mb-2"><i class="fas fa-award"></i></div>
                            <h4 class="fw-bold">100% Kindergarten Readiness</h4>
                            <p class="fs-7 text-muted mb-0">Our graduates excel in reading fluency and social confidence upon entering primary school.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm p-4 text-center rounded-4 h-100 bg-white">
                            <div class="display-4 text-success mb-2"><i class="fas fa-shield-alt"></i></div>
                            <h4 class="fw-bold">Safe School Campus Award</h4>
                            <p class="fs-7 text-muted mb-0">Certified 5-star child safety standards with 24/7 CCTV and verified staff.</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonials Row -->
                <div class="text-center mx-auto mb-4 pt-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <span class="text-primary fw-bold text-uppercase fs-6">What Parents Say</span>
                    <h2 class="mb-3">Parent Reviews &amp; Testimonials</h2>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm p-4 rounded-4 bg-white h-100">
                            <div class="text-warning mb-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="text-secondary fs-7 italic mb-3">"Edu Kids Central Branch has transformed my son's confidence. The teachers are deeply caring and the play-based learning methods are fantastic!"</p>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('kider/img/testimonial-1.jpg') }}" class="rounded-circle me-3" style="width: 45px; height: 45px; object-fit: cover;" alt="Parent">
                                <div>
                                    <h6 class="fw-bold mb-0">Mrs. Claire Peterson</h6>
                                    <small class="text-muted">Parent of LKG Student</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm p-4 rounded-4 bg-white h-100">
                            <div class="text-warning mb-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="text-secondary fs-7 italic mb-3">"The sensory play area and live CCTV app access give us total peace of mind. My daughter loves going to school every morning!"</p>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('kider/img/testimonial-2.jpg') }}" class="rounded-circle me-3" style="width: 45px; height: 45px; object-fit: cover;" alt="Parent">
                                <div>
                                    <h6 class="fw-bold mb-0">Mr. David Harrison</h6>
                                    <small class="text-muted">Parent of Nursery Student</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm p-4 rounded-4 bg-white h-100">
                            <div class="text-warning mb-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="text-secondary fs-7 italic mb-3">"From playgroup to UKG, the personal warmth and affection each teacher provides is incredible. Truly the best preschool network!"</p>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('kider/img/testimonial-3.jpg') }}" class="rounded-circle me-3" style="width: 45px; height: 45px; object-fit: cover;" alt="Parent">
                                <div>
                                    <h6 class="fw-bold mb-0">Mrs. Sophia Martinez</h6>
                                    <small class="text-muted">Parent of Playgroup Student</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 9. Prospectus / Brochure 2026 Section -->
        <div class="container-fluid py-5" id="prospectus">
            <div class="container-fluid px-4 px-lg-5">
                <div class="prospectus-banner p-4 p-md-5 text-white">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-8">
                            <span class="badge bg-warning text-dark px-3 py-2 fs-7 mb-3 fw-bold">PRESCHOOL ADMISSIONS 2026 - 2027</span>
                            <h1 class="text-white display-5 fw-bold mb-3">Download Official Preschool Prospectus</h1>
                            <p class="lead mb-0 text-white-75">Get complete details on fee structure, branch wise play facilities, curriculum schedule, transport routes, and admission policy in our official brochure.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end text-center">
                            <a href="{{ asset('kider/img/preschool-website-template.jpg') }}" download="Edu_Kids_Preschool_Prospectus_2026.jpg" class="btn btn-warning btn-lg rounded-pill px-5 py-3 fw-bold text-dark shadow">
                                <i class="fas fa-file-download me-2"></i> Download Prospectus (PDF)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 10. Branch-Wise Teachers Name & Photos -->
        <div class="container-fluid py-5 bg-light" id="teachers">
            <div class="container-fluid px-4 px-lg-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <span class="text-primary fw-bold text-uppercase fs-6">Our Educators</span>
                    <h1 class="mb-3">Branch-Wise Preschool Teachers</h1>
                    <p>Meet our certified early childhood educators and Montessori-trained teachers leading our 7 branches.</p>
                </div>

                <div class="row g-4">
                    @forelse($teachers ?? [] as $index => $teacher)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 * ($index + 1) }}s">
                            <div class="team-item position-relative shadow-sm rounded-4 overflow-hidden bg-white">
                                <div class="team-text text-center p-4">
                                    <div class="avatar avatar-xl mx-auto mb-3">
                                        <span class="avatar-title rounded-circle bg-primary text-white fs-2 fw-bold d-inline-block p-3" style="width: 80px; height: 80px; line-height: 50px;">
                                            {{ substr($teacher->name, 0, 1) }}
                                        </span>
                                    </div>
                                    <span class="badge bg-secondary mb-2">Branch {{ ($index % 7) + 1 }}</span>
                                    <h4 class="mb-1 fw-bold text-dark">{{ $teacher->name }}</h4>
                                    <p class="text-primary fw-semibold mb-1">{{ $teacher->designation }}</p>
                                    <span class="badge bg-info mb-2">Early Childhood Education</span>
                                    <p class="text-muted fs-7 mb-0">{{ $teacher->qualification }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center text-muted">Preschool faculty directory loading...</div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" id="contact">
            <div class="container-fluid px-4 px-lg-5 py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <h3 class="text-white mb-4">Edu Kids Preschool Network</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3 text-primary"></i>7 Preschool Campuses across Central City, Springfield, Metropolis &amp; Gotham</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3 text-primary"></i>+1 (555) 800-KIDS</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3 text-primary"></i>admissions@edukids.edu</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social me-2" href="#"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <h3 class="text-white mb-4">Quick Links</h3>
                        <div class="d-flex flex-column">
                            <a class="btn btn-link text-white-50 text-start" href="#about">Preschool Vision</a>
                            <a class="btn btn-link text-white-50 text-start" href="#founder">Founder Message</a>
                            <a class="btn btn-link text-white-50 text-start" href="#branches">7 Branch Locations</a>
                            <a class="btn btn-link text-white-50 text-start" href="#programs">Preschool Programs &amp; Ages</a>
                            <a class="btn btn-link text-white-50 text-start" href="#admissions">Admission Guide &amp; Form</a>
                            <a class="btn btn-link text-white-50 text-start" href="#prospectus">Download Prospectus 2026</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <h3 class="text-white mb-4">Newsletter</h3>
                        <p>Subscribe to receive official preschool event updates, holiday notices, and parenting tips.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5 text-white border-white" type="email" placeholder="Enter your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid px-4 px-lg-5 border-top border-secondary py-3">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; {{ date('Y') }} Edu Kids Preschool Network. All Rights Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end fs-7">
                        <a href="{{ route('login') }}" class="text-white-50 text-decoration-none me-3"><i class="fas fa-lock me-1"></i> Staff Login</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('kider/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('kider/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('kider/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('kider/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('kider/js/main.js') }}"></script>
</body>

</html>
