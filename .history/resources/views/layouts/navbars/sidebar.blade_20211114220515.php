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
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Admin Setting') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Manage Staff') }}
                    </a>
                </li>
                {{-- APPROVE FORM --}}
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-approve-form" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #1065a4;"></i>
                        <span class="nav-link-text" style="color: #939494;">{{ __('Approve Form') }}</span>
                    </a>

                    <div class="collapse" id="navbar-approve-form">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
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
                        <i class="fab fa-laravel" style="color: #1065a4;"></i>
                        <span class="nav-link-text" style="color: #939494;">{{ __('Gallery') }}</span>
                    </a>

                    <div class="collapse" id="navbar-gallery">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Manage Gallery') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- OUR PARTNERS --}}
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-our-partners" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #1065a4;"></i>
                        <span class="nav-link-text" style="color: #939494;">{{ __('Our Partners') }}</span>
                    </a>

                    <div class="collapse" id="navbar-our-partners">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Manage Partners') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- OUR SERVICES --}}
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-our-services" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #1065a4;"></i>
                        <span class="nav-link-text" style="color: #939494;">{{ __('Our Services') }}</span>
                    </a>

                    <div class="collapse" id="navbar-our-services">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Manage Services') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- OUR PROJECTS --}}
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-our-projects" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #1065a4;"></i>
                        <span class="nav-link-text" style="color: #939494;">{{ __('Our Projects') }}</span>
                    </a>

                    <div class="collapse" id="navbar-our-projects">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Manage Projects') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- MANAGE USERS --}}
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-manage-users" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #1065a4;"></i>
                        <span class="nav-link-text" style="color: #939494;">{{ __('Manage Users') }}</span>
                    </a>

                    <div class="collapse" id="navbar-manage-users">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('All Users') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- MANAGE CMS PAGES --}}
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-manage-cms-pages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #1065a4;"></i>
                        <span class="nav-link-text" style="color: #939494;">{{ __('Manage CMS Pages') }}</span>
                    </a>

                    <div class="collapse" id="navbar-manage-cms-pages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Manage Pages') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Manage Investment Blocks') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Agency Benefits Car') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- MANAGE TESTIMONIALS --}}
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-manage-testimonials" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #1065a4;"></i>
                        <span class="nav-link-text" style="color: #1065a4;">{{ __('Manage Testimonials') }}</span>
                    </a>

                    <div class="collapse" id="navbar-manage-testimonials">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Manage Testimonial') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- MANAGE MEMBERSHIPS --}}
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-manage-memberships" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #1065a4;"></i>
                        <span class="nav-link-text" style="color: #1065a4;">{{ __('Manage Memberships') }}</span>
                    </a>

                    <div class="collapse" id="navbar-manage-memberships">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Membership Plan(s)') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Membership Request(s)') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- MEMBERSHIP USERS --}}
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-membership-user" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #1065a4;"></i>
                        <span class="nav-link-text" style="color: #1065a4;">{{ __('Membership User(s)') }}</span>
                    </a>

                    <div class="collapse" id="navbar-membership-user">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Membership User') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- PROJECT USERS --}}
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-project-user" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #1065a4;"></i>
                        <span class="nav-link-text" style="color: #1065a4;">{{ __('Project User(s)') }}</span>
                    </a>

                    <div class="collapse" id="navbar-project-user">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Project User') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- FREE CONSULTATION --}}
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-free-consultation" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #1065a4;"></i>
                        <span class="nav-link-text" style="color: #1065a4;">{{ __('Free Consultation') }}</span>
                    </a>

                    <div class="collapse" id="navbar-free-consultation">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Free Consultation') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- CONTACT DETAILS --}}
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-contact-details" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #1065a4;"></i>
                        <span class="nav-link-text" style="color: #1065a4;">{{ __('Contact Detail(s)') }}</span>
                    </a>

                    <div class="collapse" id="navbar-contact-details">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Contact Detail') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- MANAGE ENQUIRY --}}
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-manage-enquiry" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #1065a4;"></i>
                        <span class="nav-link-text" style="color: #1065a4;">{{ __('Manage Enquiry') }}</span>
                    </a>

                    <div class="collapse" id="navbar-manage-enquiry">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Manage Enquiry') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- GENERATE A-CODE --}}
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-generate-a-code" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #1065a4;"></i>
                        <span class="nav-link-text" style="color: #1065a4;">{{ __('Generate A-Code') }}</span>
                    </a>

                    <div class="collapse" id="navbar-generate-a-code">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Generate A-Code') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- MANAGE MEMBERID --}}
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-manage-member-id" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #1065a4;"></i>
                        <span class="nav-link-text" style="color: #1065a4;">{{ __('Manage MemberId') }}</span>
                    </a>

                    <div class="collapse" id="navbar-manage-member-id">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Manage MemberId') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- NEWSLETTER --}}
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-newsletter" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                        <i class="fab fa-laravel" style="color: #1065a4;"></i>
                        <span class="nav-link-text" style="color: #1065a4;">{{ __('Newsletter') }}</span>
                    </a>

                    <div class="collapse" id="navbar-newsletter">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.edit') }}">
                                    {{ __('Manage Newsletter') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- <li class="nav-item">
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
                </li> --}}
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">Documentation</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/docs/getting-started/overview.html">
                        <i class="ni ni-spaceship"></i> Getting started
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/docs/foundation/colors.html">
                        <i class="ni ni-palette"></i> Foundation
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://argon-dashboard-laravel.creative-tim.com/docs/components/alerts.html">
                        <i class="ni ni-ui-04"></i> Components
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
