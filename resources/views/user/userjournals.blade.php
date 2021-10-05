@extends('layouts.landing')

@section('content')


<!-- Main Container -->
<main id="main-container">

    <!-- Hero -->
    <div class="bg-imageProfile">
      <div class="bg-black-25">
        <div class="content content-full">
          <div class="py-5 text-center">
            <a class="img-link" href="">
              <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{asset('/media/avatars/avatar10.jpg')}}" alt="">
            </a>
            <h1 class="fw-bold my-2 text-white">George Taylor</h1>
            <h2 class="h4 fw-bold text-white-75">
              Senior Lecturer
            </h2>
            <a href="">
                <button type="button" class="btn btn-umunze-brown m-1"><i class="fab fa-fw fa-linkedin-in opacity-50 me-1"></i> </button>
            </a>
            <a href="mailto:exampl@gmail.com">
                <button type="button" class="btn btn-secondary m-1"> <i class="fa fa-fw fa-envelope opacity-50 me-1"></i> Message </button>
            </a>
            <a href="">
                <button type="button" class="btn btn-primary m-1"><i class="fab fa-fw fa-twitter opacity-50 me-1"></i> </button>
            </a>
            <a href="tel:123445553">
                <button type="button" class="btn btn-umunze-green m-1"><i class="fa fa-fw fa-phone-alt opacity-50 me-1"></i> </button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content content-full content-boxed">
      <!-- Latest Friends -->
      <h2 class="content-heading text-umunze-green"> <i class="si si-book-open me-1 text-dark"></i> Published Journals(4) </h2>
      <div class="row items-push">
        <div class="col-md-6 col-xl-4">
          <!-- Story #9 -->
          <a class="block block-rounded bg-image h-100 mb-0" style="background-image: url({{asset('/media/photos/photo9.jpg')}});" href="javascript:void(0)">
            <div class="block-content bg-black-50">
              <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
                <p>
                  <span class="badge bg-primary fw-bold p-2 text-uppercase">
                    Travel
                  </span>
                </p>
              </div>
              <p class="fs-lg fw-bold text-white mb-1">
                Exploring the forest in the mist
              </p>
              <p class="fw-medium text-white-75">
                George Taylor
              </p>
            </div>
          </a>
          <!-- END Story #9 -->
        </div>
        <div class="col-md-6 col-xl-4">
          <!-- Story #10 -->
          <a class="block block-rounded bg-image h-100 mb-0" style="background-image: url({{asset('/media/photos/photo11.jpg')}});" href="javascript:void(0)">
            <div class="block-content bg-black-50">
              <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
                <p>
                  <span class="badge bg-danger fw-bold p-2 text-uppercase">
                    Inspiration
                  </span>
                </p>
              </div>
              <p class="fs-lg fw-bold text-white mb-1">
                Building successful web apps
              </p>
              <p class="fw-medium text-white-75">
                George Taylor
              </p>
            </div>
          </a>
          <!-- END Story #10 -->
        </div>
        <div class="col-md-6 col-xl-4">
          <!-- Story #11 -->
          <a class="block block-rounded bg-image h-100 mb-0" style="background-image: url({{asset('/media/photos/photo22.jpg')}});" href="javascript:void(0)">
            <div class="block-content bg-black-50">
              <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
                <p>
                  <span class="badge bg-success fw-bold p-2 text-uppercase">
                    Coding
                  </span>
                </p>
              </div>
              <p class="fs-lg fw-bold text-white mb-1">
                How to build your next project
              </p>
              <p class="fw-medium text-white-75">
                George Taylor
              </p>
            </div>
          </a>
          <!-- END Story #11 -->
        </div>
      </div>
      <!-- END Cover Link Stories -->
      <div class="text-end">
        <a href="{{route('user.listJournal')}}">
            <button type="button" class="btn btn-alt-primary">
                View All <i class="fa fa-arrow-right ms-1"></i>
            </button>
        </a>
      </div>
      <!-- END Latest Friends -->

      <!-- About Me -->
      <h2 class="content-heading text-umunze-green"> <i class="si si-note me-1 text-dark"></i> Unapproved Journals (12)</h2>
      <div class="col-lg-12 items-push">
        <div class="col-sm-6 col-md-4 col-xl-3 d-flex flex-column">
            <!-- Example File -->
            <div class="options-container w-100 flex-grow-1 rounded bg-body d-flex align-items-center">
              <!-- Example File Block -->
              <div class="options-item block block-rounded block-transparent mb-0 w-100">
                <div class="block-content text-center">
                  <p class="mb-2 overflow-hidden">
                    <img class="img-fluid" src="{{asset('media/photos/photo22.jpg')}}" alt="">
                  </p>
                  <p class="fw-semibold text-break mb-0">
                    background_1.jpg
                  </p>
                </div>
              </div>
              <!-- END Example File Block -->

              <!-- Example File Hover Options -->
              <div class="options-overlay rounded bg-primary-dark-op">
                <div class="options-overlay-content">
                  <div class="mb-3">
                    <a class="btn btn-primary" href="{{route('user.viewJournal')}}">
                      <i class="fa fa-eye opacity-50 me-1"></i> View
                    </a>
                  </div>
                  <div class="btn-group">
                    <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                      <i class="fa fa-download me-1"></i>
                    </a>
                    <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                      <i class="fa fa-trash me-1"></i>
                    </a>
                  </div>
                </div>
              </div>
              <!-- END Example File Hover Options -->
            </div>
            <!-- END Example File -->
          </div>
      </div>
      <!-- END About Me -->
    </div>
    <!-- END Page Content -->
  </main>
  <!-- END Main Container -->


@endsection
