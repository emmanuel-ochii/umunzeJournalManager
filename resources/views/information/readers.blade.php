@extends('layouts.landing')

@section('content')

    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-imageHero">
            <div class="bg-umunzeBrown">
                <div class="content content-full content-top d-flex flex-row">
                    <div class="p-2">
                        <img src="{{ asset('media/logo/logo.png') }}" width="150" />
                    </div>
                    <div class="">
                        <h1 class="text-dark text-center" style="font-size:30px;">Multidisciplinary Journal of Education,
                            Research and Development (MUJERD)</h1>
                    </div>
                </div>

            </div>
        </div>
        <!-- END Hero -->

        <!-- Navigation -->
        <div class="bg-sidebar-dark">
            <div class="content">
                <!-- Toggle Main Navigation -->
                <div class="d-lg-none push">
                    <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
                    <button type="button" class="btn w-100 btn-primary d-flex justify-content-between align-items-center"
                        data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                        Menu
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- END Toggle Main Navigation -->

                <!-- Main Navigation -->
                <div id="main-navigation" class="d-none d-lg-block push">
                    <ul class="nav-main nav-main-horizontal nav-main-hover nav-main-dark">
                        <li class="nav-main-item">
                            <a class="nav-main-link active" href="{{ route('welcome') }}">
                                <i class="nav-main-link-icon fa fa-chart-pie"></i>
                                <span class="nav-main-link-name">Home</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">Manage</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link " aria-haspopup="true" aria-expanded="false"
                                href="{{ route('journal.create') }}">
                                <i class="nav-main-link-icon fa fa-edit"></i>
                                <span class="nav-main-link-name">Make A Submission</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-sync-alt"></i>
                                <span class="nav-main-link-name">Quick Links</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="{{ route('user.listJournal') }}">
                                        <span class="nav-main-link-name">Journals Listing</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="">
                                        <span class="nav-main-link-name">Archieves</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="">
                                        <span class="nav-main-link-name">Announcement</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="">
                                        <span class="nav-main-link-name">Abstracting & Indexing</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-info"></i>
                                <span class="nav-main-link-name">Information</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="#">
                                        <span class="nav-main-link-name">For Readers</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="">
                                        <span class="nav-main-link-name">For Authors</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="">
                                        <span class="nav-main-link-name">For Librarians</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading">Account</li>
                        <li class="nav-main-item ms-lg-auto">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-globe"></i>
                                <span class="nav-main-link-name">Websites</span>
                            </a>
                            <ul class="nav-main-submenu nav-main-submenu-right">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" data-toggle="theme" data-theme="default"
                                        href="https://fcetujournals.com/joterd/">
                                        <i class="nav-main-link-icon fa fa-circle text-warning"></i>
                                        <span class="nav-main-link-name">Joterd</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" data-toggle="theme"
                                        data-theme="assets/css/themes/xwork.min.css"
                                        href="https://fcetujournals.com/jahed/">
                                        <i class="nav-main-link-icon fa fa-circle text-danger"></i>
                                        <span class="nav-main-link-name">Jahed</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" data-toggle="theme"
                                        data-theme="assets/css/themes/xwork.min.css"
                                        href="https://fcetujournals.com/mujerd/">
                                        <i class="nav-main-link-icon fa fa-circle text-success"></i>
                                        <span class="nav-main-link-name">Mujerd</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- END Main Navigation -->
            </div>
        </div>
        <!-- END Navigation -->

        <!-- Page Content -->
        <div class="content">
            <div class="row">
                <div class="col-xl-8">

                    <!-- Story -->
                    <div class="block block-rounded">
                        <div class="block-content p-0 overflow-hidden">
                            <div class="row">
                                <h3 class="px-4 mt-3">Information For Readers</h3>
                                <p class="px-4 py-3 pt-0 mb-0" style="text-align: justify">
                                    We encourage readers to <a href="{{route('login')}}">sign up</a> for the publishing notification service for this journal. Use the <a href="{{route('register')}}">Register</a> link at the top of the home page for the journal. This registration will result in the reader receiving the Table of Contents by email for each new issue of the journal. This list also allows the journal to claim a certain level of support or readership. See the journal's <a href="#">Privacy Statement</a>, which assures readers that their name and email address will not be used for other purposes.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- END Story -->

                </div>

                <div class="col-xl-4">
                    <!-- Search -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Search</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <form action="{{ route('user.search', 'data') }}" method="get">
                                {{-- <form action="" method="get"> --}}
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-alt"
                                        placeholder="Type and hit enter.." name="search">
                                    <button type="button" class="btn btn-umunze-brown">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Search -->

                    <!-- About Us -->
                    <div class="block block-rounded block-link-shadow">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">
                                <a href="#" class="text-dark">
                                    About the Journal </a>
                            </h3>
                        </div>
                        <div class="block-content bg-body-light w-100">
                            <div class="row">
                                <div class="col">
                                    <p class="text-muted">
                                        FCE Umunze Journal of Technical Education and Research Development (JOTERD) is an
                                        interdisciplinary academic Journal. It aims at linking research findings in Science
                                        and Technology as well as General Education to the improvement and development of
                                        Education in Nigeria and abroad.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END About Us -->

                    <!-- Category Links -->
                    {{-- <div class="block block-rounded block-link-shadow">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">
                                <a href="#" class="text-dark">
                                   All Journal Categories </a>
                            </h3>
                        </div>
                        <div class="block-content bg-body-light w-100">
                            <div class="row">
                                <div class="col">
                                    <ul style="list-style-type: none">
                                        @if (count($categories) > 0)
                                            @foreach ($categories as $category)
                                                <li>
                                                    <a href="{{url('category/'.Str::slug($category->category_name).'/'.$category->id)}}" class="mb-3 btn-outline-quick-links px-4 py-1">
                                                        <i class="fa fa-fw fa-check-double me-1"></i>
                                                        {{ $category->category_name }} </a>
                                                </li>
                                            @endforeach
                                        @else
                                            <div id="basic-alert" class="p-5">
                                                <div class="preview">
                                                    <div class="alert alert-dark show mb-2 text-center" role="alert">No
                                                        Category To Display</div>
                                                </div>
                                            </div>
                                        @endif
                                    </ul>

                                </div>
                            </div>

                        </div>
                    </div> --}}
                    <!-- END Category Links -->


                    <!-- Quick Links -->
                    {{-- <div class="block block-rounded block-link-shadow">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Quick Links</h3>
                        </div>
                        <div class="block-content bg-body-light w-100">
                            <div class="row text-center">
                                <div class="col">
                                    <a href="#" class="btn btn-outline-quick-links me-1 mb-3">
                                        <i class="fa fa-fw fa-book-open me-1"></i> Archieves
                                    </a>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col">
                                    <a href="#" class="btn btn-outline-quick-links me-1 mb-3">
                                        <i class="fa fa-fw fa-bullhorn me-1"></i> Announcement
                                    </a>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col">
                                    <a href="{{ route('user.listJournal') }}"
                                        class="btn btn-outline-quick-links me-1 mb-3">
                                        <i class="fa fa-fw fa-swatchbook me-1"></i> Journals Listing
                                    </a>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col">
                                    <a href="{{ route('journal.create') }}"
                                        class="btn btn-outline-quick-links me-1 mb-3">
                                        <i class="fa fa-fw fa-edit me-1"></i> Make A Submission
                                    </a>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col">
                                    <a href="#" class="btn btn-outline-quick-links me-1 mb-3">
                                        <i class="fa fa-fw fa-book me-1"></i> Abstracting & Indexing
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- END Quick Links -->

                    <!-- Social -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Partner</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <a href="https://tetfundserver.com/" data-bs-toggle="tooltip" title="Follow us on Twitter">
                                <img class="img-fluid img-link" src="{{ asset('media/logo/TETFund.jpeg') }}" width=""
                                    alt="" />
                            </a>

                        </div>
                    </div>
                    <!-- END Social -->
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

@endsection
