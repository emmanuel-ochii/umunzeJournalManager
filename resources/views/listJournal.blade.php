@extends('layouts.landing')

@section('content')


<!-- Main Container -->
<main id="main-container">

    <!-- Hero -->
    <div class="bg-imageHero">
        <div class="bg-umunzeBrown">
          <div class="content content-full content-top">
            <h1 class="py-5 text-white text-center">Welcome To Federal College of Education (Technical) Umunze Journal Manager</h1>
          </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content content-full content-boxed">
      <!-- Latest Friends -->
      <h2 class="content-heading text-umunze-green">
        <i class="si si-book-open me-1 text-dark"></i> All Journals Listing
      </h2>
       @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
      <div class="row items-push">
        @if(count($journals) > 0)
            @foreach ($journals as $journal)
                <div class="col-lg-4">
                    <!-- Story #15 -->
                    {{-- <a class="block block-rounded block-link-pop h-100 mb-0" href="{{route('journal.show'.'/'.Str::slug($journal->title).'/'.$journal->title)}}"> --}}
                    <a class="block block-rounded block-link-pop h-100 mb-0" href="{{url('journal/'.Str::slug($journal->title).'/'.$journal->id)}}">
                    <img class="img-fluid" src="/uploads/journals/img/{{$journal->featured_img}}" alt="JournalImage">
                    <div class="block-content">
                        <h4 class="mb-1">{{ $journal->title }}</h4>
                        <p class="fs-sm">
                        <span class="text-umunze-green mr-2">{{$journal->author}} </span>{{$journal->created_at}}
                        </p>
                        <p>
                        {{$journal->abstract}}
                        </p>
                    </div>
                    </a>
                    <!-- END Story #15 -->
                </div>
            @endforeach
        @else
            <div id="basic-alert" class="p-5">
                <div class="preview">
                    <div class="alert alert-dark show mb-2 text-center" role="alert">No Journal To Display</div>
                </div>
            </div>
        @endif
      </div>

      <!-- END Cover Link Stories -->
      <div class="text float-right">
        <span  class="">{!! $journals->links() !!} </span>
        {{-- <button type="button" class="btn btn-alt-primary">
          Check out more <i class="fa fa-arrow-right ms-1"></i>
        </button> --}}
        {{-- {{$journals->links('pagination::bootstrap-4')}} --}}

      </div>
      <!-- END Latest Friends -->
    </div>

    <!-- END Page Content -->
  </main>
  <!-- END Main Container -->


@endsection
