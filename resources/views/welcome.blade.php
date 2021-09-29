@extends('layouts.landing')

@section('content')

      <!-- Main Container -->
      <main id="main-container">

        <!-- Hero -->
        <div class="bg-image">
            <div class="bg-umunzeBrown">
              <div class="content content-full content-top">
                <h1 class="py-5 text-white text-center">Welcome To Federal College of Education (Technical) Umunze Journal Manager</h1>
              </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
          <div class="row">
            <div class="col-xl-8">
              <!-- Story -->
              <div class="block block-rounded">
                <div class="block-content p-0 overflow-hidden">
                  <div class="row g-0">
                    <div class="col-md-4 col-lg-5 overflow-hidden d-flex align-items-center">
                      <a href="{{route('user.viewJournal')}}">
                        <img class="img-fluid img-link" src="{{asset('/media/photos/photo19.jpg')}}" alt="">
                      </a>
                    </div>
                    <div class="col-md-8 col-lg-7 d-flex align-items-center">
                      <div class="px-4 py-3">
                        <h4 class="mb-1">
                          <a class="text-dark" href="{{route('user.viewJournal')}}">An adventure of a lifetime</a>
                        </h4>
                        <div class="fs-sm mb-2">
                          <a href="be_pages_generic_profile.html">Laura Carr</a> on March 16, 2019 · <em class="text-muted">13 min</em>
                        </div>
                        <p class="mb-0">
                          Anam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus justo amet.. <a href="{{route('user.viewJournal')}}">Read on</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END Story -->

              <!-- Story -->
              <div class="block block-rounded">
                <div class="block-content p-0 overflow-hidden">
                  <div class="row g-0">
                    <div class="col-md-4 col-lg-5 overflow-hidden d-flex align-items-center">
                      <a href="{{route('user.viewJournal')}}">
                        <img class="img-fluid img-link" src="{{asset('/media/photos/photo22.jpg')}}" alt="">
                      </a>
                    </div>
                    <div class="col-md-8 col-lg-7 d-flex align-items-center">
                      <div class="px-4 py-3">
                        <h4 class="mb-1">
                          <a class="text-dark" href="{{route('user.viewJournal')}}">Learn to code</a>
                        </h4>
                        <div class="fs-sm mb-2">
                          <a href="be_pages_generic_profile.html">Ryan Flores</a> on March 13, 2019 · <em class="text-muted">12 min</em>
                        </div>
                        <p class="mb-0">
                          Anam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus justo amet.. <a href="{{route('user.viewJournal')}}">Read on</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END Story -->

              <!-- Story -->
              <div class="block block-rounded">
                <div class="block-content p-0 overflow-hidden">
                  <div class="row g-0">
                    <div class="col-md-4 col-lg-5 overflow-hidden d-flex align-items-center">
                      <a href="{{route('user.viewJournal')}}">
                        <img class="img-fluid img-link" src="{{asset('/media/photos/photo25.jpg')}}" alt="">
                      </a>
                    </div>
                    <div class="col-md-8 col-lg-7 d-flex align-items-center">
                      <div class="px-4 py-3">
                        <h4 class="mb-1">
                          <a class="text-dark" href="{{route('user.viewJournal')}}">Travel &amp; Work</a>
                        </h4>
                        <div class="fs-sm mb-2">
                          <a href="be_pages_generic_profile.html">Melissa Rice</a> on March 6, 2019 · <em class="text-muted">9 min</em>
                        </div>
                        <p class="mb-0">
                          Anam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus justo amet.. <a href="{{route('user.viewJournal')}}">Read on</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END Story -->



              <!-- Pagination -->
              <nav aria-label="Page navigation">
                <ul class="pagination push">
                  <li class="page-item active">
                    <a class="page-link" href="javascript:void(0)">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">4</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">5</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                      <span aria-hidden="true">
                        <i class="fa fa-angle-right"></i>
                      </span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
              <!-- END Pagination -->
            </div>

            <div class="col-xl-4">
              <!-- Search -->
              <div class="block block-rounded">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Search</h3>
                </div>
                <div class="block-content block-content-full">
                  <form action="{{route('user.search')}}" method="get">
                    <div class="input-group">
                      <input type="text" class="form-control form-control-alt" placeholder="Type and hit enter..">
                      <button type="button" class="btn btn-umunze-brown">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- END Search -->

              <!-- Quick Links -->
              <div class="block block-rounded block-link-shadow">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Quick Links</h3>
                </div>
                <div class="block-content bg-body-light w-100">
                    <div class="row text-center">
                        <div class="col">
                            <a  href="#" class="btn btn-outline-quick-links me-1 mb-3">
                                <i class="fa fa-fw fa-book-open me-1"></i> Archieves
                              </a>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <a  href="#" class="btn btn-outline-quick-links me-1 mb-3">
                                <i class="fa fa-fw fa-bullhorn me-1"></i> Announcement
                                </a>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <a  href="#" class="btn btn-outline-quick-links me-1 mb-3">
                                <i class="fa fa-fw fa-swatchbook me-1"></i> Journals Listing
                              </a>
                        </div>
                      </div>
                    <div class="row text-center">
                        <div class="col">
                            <a  href="{{route('user.uploadJournal')}}" class="btn btn-outline-quick-links me-1 mb-3">
                                <i class="fa fa-fw fa-edit me-1"></i> Make A Submission
                            </a>
                        </div>
                      </div>
                    <div class="row text-center">
                        <div class="col">
                            <a  href="#" class="btn btn-outline-quick-links me-1 mb-3">
                                <i class="fa fa-fw fa-book me-1"></i> Abstracting & Indexing
                            </a>
                        </div>
                    </div>
                </div>
              </div>
              <!-- END Quick Links -->

               <!-- Social -->
               <div class="block block-rounded">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Social</h3>
                </div>
                <div class="block-content block-content-full">
                  <a class="btn btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Follow us on Twitter">
                    <i class="fab fa-fw fa-twitter"></i>
                  </a>
                  <a class="btn btn-alt-secondary" href="javascript:void(0)" dat-bs-toggle="tooltip" title="Like our Facebook page">
                    <i class="fab fa-fw fa-facebook"></i>
                  </a>
                  <a class="btn btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Follow us on Dribbble">
                    <i class="fab fa-fw fa-dribbble"></i>
                  </a>
                  <a class="btn btn-alt-secondary" href="javascript:void(0)" data-bs-toggle="tooltip" title="Subscribe on Youtube">
                    <i class="fab fa-fw fa-youtube"></i>
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
