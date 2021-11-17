@extends('admin.layout.admin')

@section('content')


    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center ribbon ribbon-success ribbon-bookmark">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">All Categories</h1>
                <span class="ribbon-box">#4 </span>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">

          <!-- Dynamic Table with Export Buttons -->
          <div class="block block-rounded">
            <div class="block-header block-header-default border-bottom">
              <h3 class="block-title">Category</h3>
            </div>

            <div class="block-content">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              <!-- Horizontal Layout -->
              <div class="row">
                <div class="col-lg-8 col-xl-5 offset-md-1">
                  <!-- Form Horizontal - Default Style -->
                  <form class="mb-5" action="{{route('category.store')}}" method="POST" >
                    @csrf
                    <div class="row mb-4">
                      <label class="col-sm-4 col-form-label" for="category_name">Category</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter Category Name..">
                      </div>
                    </div>
                    <div class="row mb-4">
                      <div class="col-sm-8 ms-auto">
                        <button type="submit" class="btn btn-primary">Add Category</button>
                      </div>
                    </div>
                  </form>
                  <!-- END Form Horizontal - Default Style -->
                </div>
              </div>
              <!-- END Horizontal Layout -->
            </div>
          </div>
          <!-- END Dynamic Table with Export Buttons -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->


@endsection
