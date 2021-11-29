<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Argon Dashboard') }}</title>
    <!-- Favicon -->
    <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
           <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-laravel" />
    <!--  Social tags      -->
    <meta name="keywords" content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Argon - Free Dashboard for Bootstrap 4 by Creative Tim">
    <meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/96/original/opt_ad_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Argon - Free Dashboard for Bootstrap 4 by Creative Tim">
    <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/96/original/opt_ad_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Argon - Free Dashboard for Bootstrap 4 by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/argon-dashboard/index.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/96/original/opt_ad_thumbnail.jpg" />
    <meta property="og:description" content="Start your development with a Dashboard for Bootstrap 4." />
    <meta property="og:site_name" content="Creative Tim" />
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
    </script>
    <!-- End Google Tag Manager -->
</head>
<body class="clickup-chrome-ext_installed">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
        <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
<div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand pt-0" href="{{ route('home') }}">
        <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
    </a>
    <!-- User -->
    <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                    </span>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="{{ route('profile.edit') }}" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>My profile</span>
                </a>
                <a href="#" class="dropdown-item">
                    <i class="ni ni-settings-gear-65"></i>
                    <span>Settings</span>
                </a>
                <a href="#" class="dropdown-item">
                    <i class="ni ni-calendar-grid-58"></i>
                    <span>Activity</span>
                </a>
                <a href="#" class="dropdown-item">
                    <i class="ni ni-support-16"></i>
                    <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="ni ni-user-run"></i>
                    <span>Logout</span>
                </a>
            </div>
        </li>
    </ul>
</div>
</nav>                
    <div class="main-content">
        <!-- Top navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
<div class="container-fluid">
    <!-- Brand -->
    <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{ route('home') }}">Dashboard</a>
    <!-- Form -->
    <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
        <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
            </div>
        </div>
    </form>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-tv" style="color: #1078ef;"></i>
                <span class="text-muted text-nowrap">{{ __('Dashboard') }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-user-cog" style="color: #1078ef;"></i> 
                <span class="text-muted text-nowrap">{{ __('Admin Setting') }}</span>
                
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-users-cog" style="color: #1078ef;"></i>
                <span class="text-muted text-nowrap">{{ __('Manage Staff') }}</span>
            </a>
        </li>
        {{-- APPROVE FORM --}}
        <li class="nav-item">
            <a class="nav-link active" href="#navbar-approve-form" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-approve-form">
                <i class="fas fa-clipboard-list" style="color: #1078ef;"></i>
                <span class="nav-link-text text-muted" style="color: #939494;">{{ __('Approve Form') }}</span>
            </a>

            <div class="collapse" id="navbar-approve-form">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="{{ route('profile.edit') }}">
                            {{ __('Approve CIS Form') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">
                            {{ __('Approve QF Form') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">
                            {{ __('Approve ILRF Form') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">
                            {{ __('Approve Inspection') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">
                            {{ __('Approve Retainer') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">
                            {{ __('Approve SPV') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">
                            {{ __('Approve Closing') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">
                            {{ __('Approve Collateral') }}
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- GALLERY --}}
        <li class="nav-item">
            <a class="nav-link active" href="#navbar-gallery" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-images" style="color: #1078ef;"></i>
                <span class="nav-link-text text-muted" style="color: #939494;">{{ __('Gallery') }}</span>
            </a>

            <div class="collapse" id="navbar-gallery">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gallery.view') }}">
                            {{ __('Manage Gallery') }}
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- OUR PARTNERS --}}
        <li class="nav-item">
            <a class="nav-link active" href="#navbar-our-partners" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-handshake" style="color: #1078ef;"></i>
                <span class="nav-link-text text-muted" style="color: #939494;">{{ __('Our Partners') }}</span>
            </a>

            <div class="collapse" id="navbar-our-partners">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('our_partners.view') }}">
                            {{ __('Manage Partners') }}
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- OUR SERVICES --}}
        <li class="nav-item">
            <a class="nav-link active" href="#navbar-our-services" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-balance-scale" style="color: #1078ef;"></i>
                <span class="nav-link-text text-muted" style="color: #939494;">{{ __('Our Services') }}</span>
            </a>

            <div class="collapse" id="navbar-our-services">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('our_services.view') }}">
                            {{ __('Manage Services') }}
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- OUR PROJECTS --}}
        <li class="nav-item">
            <a class="nav-link active" href="#navbar-our-projects" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-project-diagram" style="color: #1078ef;"></i>
                <span class="nav-link-text text-muted" style="color: #939494;">{{ __('Our Projects') }}</span>
            </a>

            <div class="collapse" id="navbar-our-projects">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('our_projects.view') }}">
                            {{ __('Manage Projects') }}
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- MANAGE USERS --}}
        <li class="nav-item">
            <a class="nav-link active" href="#navbar-manage-users" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-users" style="color: #1078ef;"></i>
                <span class="nav-link-text text-muted" style="color: #939494;">{{ __('Manage Users') }}</span>
            </a>

            <div class="collapse" id="navbar-manage-users">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('manage_users.view') }}">
                            {{ __('All Users') }}
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- MANAGE CMS PAGES --}}
        <li class="nav-item">
            <a class="nav-link active" href="#navbar-manage-cms-pages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-columns" style="color: #1078ef;"></i>
                <span class="nav-link-text text-muted" style="color: #939494;">{{ __('Manage CMS Pages') }}</span>
            </a>

            <div class="collapse" id="navbar-manage-cms-pages">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cms_pages.view') }}">
                            {{ __('Manage Pages') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('investment_blocks.view') }}">
                            {{ __('Manage Investment Blocks') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('benefit_cars.view') }}">
                            {{ __('Agency Benefits Car') }}
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- MANAGE TESTIMONIALS --}}
        <li class="nav-item">
            <a class="nav-link active" href="#navbar-manage-testimonials" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-file-signature" style="color: #1078ef;"></i>
                <span class="nav-link-text text-muted" style="color: #939494;">{{ __('Manage Testimonials') }}</span>
            </a>

            <div class="collapse" id="navbar-manage-testimonials">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('testimonials.view') }}">
                            {{ __('Manage Testimonial') }}
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- MANAGE MEMBERSHIPS --}}
        <li class="nav-item">
            <a class="nav-link active" href="#navbar-manage-memberships" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-id-card" style="color: #1078ef;"></i>
                <span class="nav-link-text text-muted" style="color: #939494;">{{ __('Manage Memberships') }}</span>
            </a>

            <div class="collapse" id="navbar-manage-memberships">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('membership_plans.view') }}">
                            {{ __('Membership Plan(s)') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('membership_requests.view') }}">
                            {{ __('Membership Request(s)') }}
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- MEMBERSHIP USERS --}}
        <li class="nav-item">
            <a class="nav-link active" href="#navbar-membership-user" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-id-badge" style="color: #1078ef;"></i>
                <span class="nav-link-text text-muted" style="color: #939494;">{{ __('Membership User(s)') }}</span>
            </a>

            <div class="collapse" id="navbar-membership-user">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('membership_users.view') }}">
                            {{ __('Membership User') }}
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- PROJECT USERS --}}
        <li class="nav-item">
            <a class="nav-link active" href="#navbar-project-user" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-project-diagram" style="color: #1078ef;"></i>
                <span class="nav-link-text text-muted" style="color: #939494;">{{ __('Project User(s)') }}</span>
            </a>

            <div class="collapse" id="navbar-project-user">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('project_users.view') }}">
                            {{ __('Project User') }}
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- FREE CONSULTATION --}}
        <li class="nav-item">
            <a class="nav-link active" href="#navbar-free-consultation" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-comments" style="color: #1078ef;"></i>
                <span class="nav-link-text text-muted" style="color: #939494;">{{ __('Free Consultation') }}</span>
            </a>

            <div class="collapse" id="navbar-free-consultation">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('free_consultations.view') }}">
                            {{ __('Free Consultation') }}
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- CONTACT DETAILS --}}
        <li class="nav-item">
            <a class="nav-link active" href="#navbar-contact-details" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-id-card-alt" style="color: #1078ef;"></i>
                <span class="nav-link-text text-muted" style="color: #939494;">{{ __('Contact Detail(s)') }}</span>
            </a>

            <div class="collapse" id="navbar-contact-details">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact_details.view') }}">
                            {{ __('Contact Detail') }}
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- MANAGE ENQUIRY --}}
        <li class="nav-item">
            <a class="nav-link active" href="#navbar-manage-enquiry" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-file-invoice" style="color: #1078ef;"></i>
                <span class="nav-link-text text-muted" style="color: #939494;">{{ __('Manage Enquiry') }}</span>
            </a>

            <div class="collapse" id="navbar-manage-enquiry">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('enquiries.view') }}">
                            {{ __('Manage Enquiry') }}
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        {{-- GENERATE A-CODE --}}
        {{-- <li class="nav-item">
            <a class="nav-link active" href="#navbar-generate-a-code" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-plus-circle" style="color: #1078ef;"></i>
                <span class="nav-link-text text-muted" style="color: #939494;">{{ __('Generate A-Code') }}</span>
            </a>

            <div class="collapse" id="navbar-generate-a-code">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gen_a_code.view') }}">
                            {{ __('Generate A-Code') }}
                        </a>
                    </li>
                </ul>
            </div>
        </li> --}}
        {{-- MANAGE MEMBERID --}}
        {{-- <li class="nav-item">
            <a class="nav-link active" href="#navbar-manage-member-id" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-id-card" style="color: #1078ef;"></i>
                <span class="nav-link-text text-muted" style="color: #939494;">{{ __('Manage MemberId') }}</span>
            </a>

            <div class="collapse" id="navbar-manage-member-id">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('member_id.view') }}">
                            {{ __('Manage MemberId') }}
                        </a>
                    </li>
                </ul>
            </div>
        </li> --}}
        {{-- NEWSLETTER --}}
        <li class="nav-item">
            <a class="nav-link active" href="#navbar-newsletter" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="fas fa-newspaper" style="color: #1078ef;"></i>
                <span class="nav-link-text text-muted" style="color: #939494;">{{ __('Newsletter') }}</span>
            </a>

            <div class="collapse" id="navbar-newsletter">
                <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('newsletters.view') }}">
                            {{ __('Manage Newsletter') }}
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        
        <li class="nav-item">
            <a class="nav-link" href="{{ route('icons') }}">
                <i class="ni ni-planet text-blue"></i> {{ __('Icons') }}
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{ route('map') }}">
                <i class="ni ni-pin-3 text-orange"></i> {{ __('Maps') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('table') }}">
              <i class="ni ni-bullet-list-67 text-default"></i>
              <span class="nav-link-text">Tables</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="ni ni-circle-08 text-pink"></i> {{ __('Register') }}
            </a>
        </li>
        <li class="nav-item mb-5 mr-4 ml-4 pl-1 bg-danger" style="position: absolute; bottom: 0;">
            <a class="nav-link text-white" href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank">
                <i class="ni ni-cloud-download-95"></i> Upgrade to PRO
            </a>
        </li>
        </ul>
    <!-- User -->
    <ul class="navbar-nav align-items-center d-none d-md-flex">
        <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-4-800x800.jpg">
                    </span>
                    <div class="media-body ml-2 d-none d-lg-block">
                        <span class="mb-0 text-sm  font-weight-bold">Admin Admin</span>
                    </div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="{{ route('profile.edit') }}" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>My profile</span>
                </a>
                <a href="#" class="dropdown-item">
                    <i class="ni ni-settings-gear-65"></i>
                    <span>Settings</span>
                </a>
                <a href="#" class="dropdown-item">
                    <i class="ni ni-calendar-grid-58"></i>
                    <span>Activity</span>
                </a>
                <a href="#" class="dropdown-item">
                    <i class="ni ni-support-16"></i>
                    <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="ni ni-user-run"></i>
                    <span>Logout</span>
                </a>
            </div>
        </li>
    </ul>
</div>
</nav>    
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
<div class="container-fluid">
</div>
</div>
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Gallery</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('gallery.add') }}" class="btn btn-sm btn-primary">Add Gallery</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Chinese Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gallery as $gal)
                            <tr>
                                <td>{{ $gal->id             }}</td>
                                <td>{{ $gal->title          }}</td>
                                <td>{{ $gal->chinese_title }}</td>
                                <td><img src={{ asset('images/'.$gal->image) }} alt="No Image!" style="width:50px; height:50px;" class="rounded-circle"></td>
                                @if($gal->status == 1)
                                <td>
                                    <label class="custom-toggle">
                                        <input type="checkbox" checked>
                                        <span class="custom-toggle-slider rounded-circle"></span>
                                    </label>
                                </td>
                                @elseif($gal->status == 0)
                                <td>
                                    <label class="custom-toggle">
                                        <input type="checkbox">
                                        <span class="custom-toggle-slider rounded-circle"></span>
                                    </label>
                                </td>
                                @endif
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
        
    <footer class="footer">
<div class="row align-items-center justify-content-xl-between">
<div class="col-xl-6">
    <div class="copyright text-center text-xl-left text-muted">
        © 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a> &amp;
        <a href="https://www.updivision.com" class="font-weight-bold ml-1" target="_blank">Updivision</a>
    </div>
</div>
<div class="col-xl-6">
    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
        <li class="nav-item">
            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
        </li>
        <li class="nav-item">
            <a href="https://www.updivision.com" class="nav-link" target="_blank">Updivision</a>
        </li>
        <li class="nav-item">
            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
        </li>
        <li class="nav-item">
            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
        </li>
        <li class="nav-item">
            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
        </li>
    </ul>
</div>
</div></footer>    </div>
    </div>

    
    <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    
            
    <!-- Argon JS -->
    <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
</body></html>
