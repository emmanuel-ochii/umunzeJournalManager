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
        <form action="{{route('user.search','data')}}" method="get">
            {{ csrf_field() }}
          <div class="input-group input-group-lg">
            <input type="text" class="form-control form-control-alt" placeholder="Search.." name="search" required>
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
              <span class="text-primary fw-bold">Results found for you </span>
              <mark class="text-danger" style="text-transform: capitalize">{{$search}}</mark>
            </div>
            <div class="row">
                @if($data->isNotEmpty())
                    @foreach($data as $journal)
                        <div class="col-lg-6">
                            <h4 class="h5 mb-1"><a href="javascript:void(0)">{{$journal->title}}</a></h4>
                            <div class="fs-sm text-success mb-1">{{$journal->author}}</div>
                            <p class="fs-sm text-muted">{{$journal->abstract}}</p>
                        </div>
                    @endforeach
                @else
                    <div>
                        <div class="col-lg-6">
                            <h4 class="h5 mb-1">Sorry !!! Nothing found for your search</h4>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Pagination Begin -->
            <nav aria-label="Page navigation">
                <ul class="pagination push">
                    <li class="page-item">{{ $data->links() }}</li>
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
