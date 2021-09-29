@extends('admin.layout.admin')

@section('content')

      <!-- Main Container -->
      <main id="main-container">

        <!-- Page Content -->
        <div class="content">
          <!-- Quick Menu -->
          <div class="pt-4 px-4 bg-body-dark rounded push">
            <div class="row items-push">
              <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded block-link-pop text-center d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
                  <div class="block-content">
                    <p class="mb-2 d-none d-sm-block text-primary">
                      <i class="fa fa-book opacity-50 fa-2x"></i>
                    </p>
                    <p class="fw-semibold fs-sm text-uppercase">Journal</p>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded block-link-pop text-center d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
                  <div class="block-content">
                    <p class="mb-2 d-none d-sm-block text-primary">
                      <i class="fa fa-pencil-alt opacity-50 fa-2x"></i>
                    </p>
                    <p class="fw-semibold fs-sm text-uppercase">Profile</p>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded block-link-pop text-center d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
                  <div class="block-content">
                    <p class="mb-2 d-none d-sm-block text-primary">
                      <i class="fa fa-wrench opacity-50 fa-2x"></i>
                    </p>
                    <p class="fw-semibold fs-sm text-uppercase">Settings</p>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded block-link-pop text-center d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
                  <div class="block-content">
                    <p class="mb-2 d-none d-sm-block text-primary">
                      <i class="fa fa-plus-circle opacity-50 fa-2x"></i>
                    </p>
                    <p class="fw-semibold fs-sm text-uppercase">Add Journal</p>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4 col-xl-2">
                <a class="block block-rounded block-link-pop text-center d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
                  <div class="block-content">
                    <p class="mb-2 d-none d-sm-block text-primary">
                      <i class="fa fa-plus-circle opacity-50 fa-2x"></i>
                    </p>
                    <p class="fw-semibold fs-sm text-uppercase">Add Editors</p>
                  </div>
                </a>
              </div>

            </div>
          </div>

          <!-- END Quick Menu -->

          <!-- Overview -->
          <div class="row">
            <div class="col-md-4">
              <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="py-4 text-center">
                    <div class="mb-3">
                      <i class="fa fa-book-open fa-3x text-xinspire"></i>
                    </div>
                    <div class="fs-4 fw-semibold">120 Journal</div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="py-4 text-center">
                    <div class="mb-3">
                      <i class="fa fa-user fa-3x text-xsmooth"></i>
                    </div>
                    <div class="fs-4 fw-semibold">150 Editors</div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- END Overview -->


        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

@endsection
