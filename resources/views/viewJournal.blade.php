@extends('layouts.viewJournal')
@section('title', $journal->title)
@section('viewJournal')

    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-imageHero">
            <div class="bg-black-75">
                <div class="content content-top content-full text-center">
                    <h1 class="fw-bold text-white mt-5 mb-3">
                        {{ $journal->title }}
                    </h1>
                    <h2 class="h3 fw-normal text-white-75 mb-2">{{ Str::limit($journal->abstract, 50) }}</h2>
                    <h2 class="h3 fw-normal text-white-75 mb-3">{{ $journal->category}}</h2>
                    <p>
                        <a href="{{ route('user.viewProfile') }}">
                            <span class="badge rounded-pill bg-primary fs-base px-3 py-2 me-2 m-1">
                                <i class="fa fa-user-circle me-1"></i> {{ $journal->author_name }}
                            </span>
                        </a>
                        {{-- <a href="/uploads/journals/pdf/{{$journal->journal}}"> --}}
                        <a href="{{ url('/download', $journal->journal) }}">
                            <span class="badge rounded-pill bg-primary fs-base px-3 py-2 m-1">
                                <i class="fa fa-download me-1"></i> Download Journal
                            </span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-full">
            <div class="row justify-content-center">
                <div class="col-sm-8 py-5">
                    <!-- Story -->
                    <!-- Magnific Popup (.js-gallery class is initialized in Helpers.jqMagnific()) -->
                    <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                    <article class="js-gallery story">

                        <div class="row g-sm items-push push img-fluid-100">
                            <div class="col-md-4 offset-md-3 animated fadeIn">
                                <a class="img-link img-link-simple img-link-zoom-in img-lightbox"
                                    href="/uploads/journals/img/{{ $journal->featured_img }}">
                                    <img class="img-fluid" src="/uploads/journals/img/{{ $journal->featured_img }}"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <p style="text-align:justify">{{ $journal->abstract }}</p>
                        {{-- Frame for the journal preview
                        <iframe src="/uploads/journals/pdf/{{ $journal->journal }}"></iframe> --}}
                    </article>
                    <!-- END Story -->

                    <!-- Actions -->
                    <div class="mt-5 d-flex justify-content-between push">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-alt-secondary" data-bs-toggle="tooltip" title="Like Story">
                                <i class="fa fa-thumbs-up text-primary"></i>
                            </button>
                            <button type="button" class="btn btn-alt-secondary" data-bs-toggle="tooltip" title="Recommend">
                                <i class="fa fa-heart text-danger"></i>
                            </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-alt-secondary dropdown-toggle" id="dropdown-blog-story"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-share-alt opacity-50 me-1"></i> Share
                            </button>
                            <div class="dropdown-menu dropdown-menu-end fs-sm" aria-labelledby="dropdown-blog-story">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fab fa-fw fa-facebook me-1"></i> Facebook
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fab fa-fw fa-twitter me-1"></i> Twitter
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fab fa-fw fa-linkedin me-1"></i> LinkedIn
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END Actions -->

                    <!-- Comments -->
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="px-4 pt-4 rounded bg-body-extra-light">
                        <div class="row">
                            <div class="col-md-8" style="padding-top: 14px">
                                <p class="fs-sm ">
                                    <i class="fa fa-thumbs-up text-  "></i>
                                    <i class="fa fa-heart text-danger"></i>
                                    <a class="fw-semibold" href="javascript:void(0)">Jesse Fisher</a>,
                                    <a class="fw-semibold" href="javascript:void(0)">Carol Ray</a>,
                                    <a class="fw-semibold" href="javascript:void(0)">and 72 others</a>
                                </p>
                            </div>
                            <div class="col-md-2 ms-auto ribbon ribbon-primary">
                                <div class="ribbon-box"
                                    style="background-color: rgb(48, 156, 144) !important; margin-right: -11px">
                                    <i class="fa fa-comments me-1"></i> {{ count($journal->comments) }}
                                </div>
                            </div>
                        </div>
                        <form action="{{ url('storeComment/' . Str::slug($journal->title) . '/' . $journal->id) }}"
                            method="POST">
                            @csrf
                            <input type="text" class="form-control form-control-alt" name="comment"
                                placeholder="Write a comment..">
                        </form>
                        <div class="pt-3 fs-sm">
                            @if ($journal->comments)
                                @foreach ($journal->comments as $comment)
                                    <div class="d-flex">
                                        <a class="flex-shrink-0 img-link me-2 mb-2" href="javascript:void(0)">
                                            <img class="img-avatar img-avatar32 img-avatar-thumb"
                                                src="/media/avatars/avatar1.jpg" alt="">
                                        </a>
                                        <div class="flex-grow-1">
                                            <p class="mb-1">
                                                <a class="fw-semibold" href="javascript:void(0)">{{$comment->user->name}}</a>
                                                {{ $comment->comment }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            {{-- <div class="d-flex">
                                <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
                                    <img class="img-avatar img-avatar32 img-avatar-thumb" src="/media/avatars/avatar10.jpg"
                                        alt="">
                                </a>
                                <div class="flex-grow-1">
                                    <p class="mb-1">
                                        <a class="fw-semibold" href="javascript:void(0)">Jesse Fisher</a>
                                        Leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed
                                        dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam
                                        egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida
                                        sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis
                                        scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales!
                                        Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices.
                                    </p>
                                    <p>
                                        <a class="me-1" href="javascript:void(0)">Like</a>
                                        <a href="javascript:void(0)">Comment</a>
                                    </p>
                                    <div class="d-flex">
                                        <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)">
                                            <img class="img-avatar img-avatar32 img-avatar-thumb"
                                                src="/media/avatars/avatar15.jpg" alt="">
                                        </a>
                                        <div class="flex-grow-1">
                                            <p class="mb-1">
                                                <a class="fw-semibold" href="javascript:void(0)">Justin Hunt</a>
                                                Odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
                                                nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                            </p>
                                            <p>
                                                <a class="me-1" href="javascript:void(0)">Like</a>
                                                <a href="javascript:void(0)">Comment</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <!-- END Comments -->

                    <!-- Next Journal -->
                    {{-- <div class="block block-rounded">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Similar Jobs</h3>
                </div>
                <div class="block-content">
                  <div class="row">
                    <div class="col-md-6">
                      <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                          <div class="me-3">
                            <p class="fs-lg fw-semibold mb-0">
                              Dribbble
                            </p>
                            <p class="text-muted mb-0">
                              Designer
                            </p>
                          </div>
                          <div class="item item-rounded bg-body-light">
                            <i class="fab fa-dribbble fa-2x text-xsmooth text-primary"></i>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-6">
                      <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                          <div class="me-3">
                            <p class="fs-lg fw-semibold mb-0">
                              Facebook
                            </p>
                            <p class="text-muted mb-0">
                              Developer
                            </p>
                          </div>
                          <div class="item item-rounded bg-body-light">
                            <i class="fab fa-facebook-f fa-2x text-xmodern text-primary"></i>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div> --}}
                    <!-- Next Journal -->
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

@endsection
