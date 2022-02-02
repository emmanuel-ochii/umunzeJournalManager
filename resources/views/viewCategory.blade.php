@extends('layouts.landing')
@section('content')

    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-imageProfile">
            <div class="bg-black-25">
                <div class="content content-full">
                    <div class="py-5 text-center">
                        <h1 class="fw-bold my-2 text-white">{{ $category->category_name }}</h1>
                        <h2 class="h4 fw-bold text-white-75"> Below are list of journals related to this category </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-full content-boxed">
            <!-- Category Listing -->
            <h2 class="content-heading text-umunze-green">
                <i class="si si-book-open me-1 text-dark"></i> Latest Journals
            </h2>
            <div class="row items-push">
                @if (count($journals) > 0)
                    @foreach ($journals as $journal)
                        <div class="col-md-6 col-xl-4">
                            <!-- Category -->

                            <a class="block block-rounded bg-image h-100 mb-0"
                                style="background-image: url('/uploads/journals/img/{{ $journal->featured_img }}');"
                                href="{{ url('journal/' . Str::slug($journal->title) . '/' . $journal->id) }}">
                                <div class="block-content bg-black-50">
                                    <div class="mb-5 mb-sm-7 d-sm-flex justify-content-sm-between align-items-sm-center">
                                        <p>
                                            <span class="badge bg-primary fw-bold p-2 text-uppercase">
                                                {{ $category->category_name }}
                                            </span>
                                        </p>
                                    </div>
                                    <p class="fs-lg fw-bold text-white mb-1">
                                        {{ $journal->title }}
                                    </p>
                                    <p class="fw-medium text-white-75">
                                        {{ $journal->author_name }}
                                    </p>
                                </div>
                            </a>
                            <!-- END Category -->
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
            <!-- Pagination -->
            <div class="text-end">
                {!! $journals->links() !!}
            </div>

            <!-- End Pagination -->
            <!-- END Category Listing -->

        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->


@endsection
