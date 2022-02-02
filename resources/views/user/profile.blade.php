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
            <h1 class="fw-bold my-2 text-white">{{ Auth::user()->name }}</h1>
            {{-- <h1 class="fw-bold my-2 text-white">{{ $users->name }}</h1> --}}
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
      <h2 class="content-heading text-umunze-green">
        <i class="si si-book-open me-1 text-dark"></i> Latest Journals
      </h2>
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
                {{ Auth::user()->name }}
              </p>
            </div>
          </a>
          <!-- END Story #9 -->
        </div>
        <div class="col-md-6 col-xl-4">
          <!-- Story #10 -->
          <a class="block block-rounded bg-image h-100 mb-0" style="background-image: url('/media/photos/photo11.jpg');" href="javascript:void(0)">
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
          <a class="block block-rounded bg-image h-100 mb-0" style="background-image: url('/media/photos/photo22.jpg');" href="javascript:void(0)">
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
        {{-- <a href="{{route('user.listJournal')}}"> This should be active when individual user journals has been created--}}
        <a href="{{route('journal.index')}}">
            <button type="button" class="btn btn-alt-primary">
                Manage Journals <i class="fa fa-arrow-right ms-1"></i>
            </button>
        </a>
      </div>
      <!-- END Latest Friends -->

      <!-- About Me -->
      <h2 class="content-heading text-umunze-green">
        <i class="si si-note me-1 text-dark"></i> About  Me
      </h2>
      <div class="col-lg-12 push">
        <div id="accordion" role="tablist" aria-multiselectable="true">
          <div class="block block-rounded block-link-shadow mb-3">
            <div class="block-header block-header-default" role="tab" id="accordion_h1">
              <a class="fw-semibold text-umunze-brown" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#accordion_q1" aria-expanded="true" aria-controls="accordion_q1"><i class="si si-user me-1 text-primary"></i> Profile</a>
            </div>
            <div id="accordion_q1" class="collapse show" role="tabpanel" aria-labelledby="accordion_h1" data-bs-parent="#accordion">
              <div class="block-content">
                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
              </div>
            </div>
          </div>
          <div class="block block-rounded mb-1">
            <div class="block-header block-header-default" role="tab" id="accordion_h2">
              <a class="fw-semibold text-umunze-brown" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#accordion_q2" aria-expanded="true" aria-controls="accordion_q2"><i class="si si-badge me-1 text-primary"></i> Certifications</a>
            </div>
            <div id="accordion_q2" class="collapse" role="tabpanel" aria-labelledby="accordion_h2" data-bs-parent="#accordion">
              <div class="block-content">
                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
              </div>
            </div>
          </div>
          <div class="block block-rounded mb-1">
            <div class="block-header block-header-default" role="tab" id="accordion_h3">
              <a class="fw-semibold text-umunze-brown" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#accordion_q3" aria-expanded="true" aria-controls="accordion_q3"><i class="si si-book-open me-1 text-primary"></i> Publication</a>
            </div>
            <div id="accordion_q3" class="collapse" role="tabpanel" aria-labelledby="accordion_h3" data-bs-parent="#accordion">
              <div class="block-content">
                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
              </div>
            </div>
          </div>
          <div class="block block-rounded mb-1">
            <div class="block-header block-header-default" role="tab" id="accordion_h4">
              <a class="fw-semibold text-umunze-brown" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#accordion_q4" aria-expanded="true" aria-controls="accordion_q4"><i class="fab fa-researchgate me-1 text-primary"></i> Research and professional activities</a>
            </div>
            <div id="accordion_q4" class="collapse" role="tabpanel" aria-labelledby="accordion_h4" data-bs-parent="#accordion">
              <div class="block-content">
                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
              </div>
            </div>
          </div>
          <div class="block block-rounded mb-1">
            <div class="block-header block-header-default" role="tab" id="accordion_h5">
              <a class="fw-semibold text-umunze-brown" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#accordion_q5" aria-expanded="true" aria-controls="accordion_q5"><i class="si si-printer me-1 text-primary"></i> Contact</a>
            </div>
            <div id="accordion_q5" class="collapse" role="tabpanel" aria-labelledby="accordion_h5" data-bs-parent="#accordion">
              <div class="block-content">
                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END About Me -->
    </div>
    <!-- END Page Content -->
  </main>
  <!-- END Main Container -->


@endsection
