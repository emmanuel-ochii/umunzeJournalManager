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
      <!-- Search -->
      <div class="p-3 bg-body-extra-light rounded push">
        <form action="#" method="POST">
          <div class="input-group input-group-lg">
            <input type="text" class="form-control form-control-alt" placeholder="Search..">
            <span class="input-group-text border-0 bg-body">
              <i class="fa fa-fw fa-search"></i>
            </span>
          </div>
        </form>
      </div>
      <!-- END Search -->

      <!-- Results -->
      <div class="block block-rounded">

        <div class="block-content tab-content overflow-hidden">
          <!-- Classic -->
          <div class="tab-pane fade show active" id="search-classic" role="tabpanel" aria-labelledby="search-classic-tab">
            <div class="fs-3 fw-semibold pt-2 pb-4 mb-4 text-center border-bottom">
              <span class="text-primary fw-bold">Results found for</span>  <mark class="text-danger">examle</mark>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <h4 class="h5 mb-1">
                  <a href="javascript:void(0)">Bootstrap 4 UI Framework</a>
                </h4>
                <div class="fs-sm text-success mb-1">https://pixelcave.com/</div>
                <p class="fs-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
              </div>
              <div class="col-lg-6">
                <h4 class="h5 mb-1">
                  <a href="javascript:void(0)">Bootstrap 4 UI Framework</a>
                </h4>
                <div class="fs-sm text-success mb-1">https://pixelcave.com/</div>
                <p class="fs-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
              </div>
              <div class="col-lg-6">
                <h4 class="h5 mb-1">
                  <a href="javascript:void(0)">Bootstrap 4 UI Framework</a>
                </h4>
                <div class="fs-sm text-success mb-1">https://pixelcave.com/</div>
                <p class="fs-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
              </div>
              <div class="col-lg-6">
                <h4 class="h5 mb-1">
                  <a href="javascript:void(0)">Bootstrap 4 UI Framework</a>
                </h4>
                <div class="fs-sm text-success mb-1">https://pixelcave.com/</div>
                <p class="fs-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
              </div>
            </div>
            <!-- Pagination Begin -->
            <nav aria-label="Classic Search Navigation">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                    <span aria-hidden="true">
                      <i class="fa fa-angle-double-left"></i>
                    </span>
                    <span class="visually-hidden">Previous</span>
                  </a>
                </li>
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
                  <a class="page-link" href="javascript:void(0)" aria-label="Next">
                    <span aria-hidden="true">
                      <i class="fa fa-angle-double-right"></i>
                    </span>
                    <span class="visually-hidden">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- Pagination Begin -->
          </div>
          <!-- END Classic -->
        </div>
      </div>
      <!-- END Results -->
    </div>
    <!-- END Page Content -->
  </main>
  <!-- END Main Container -->

@endsection
