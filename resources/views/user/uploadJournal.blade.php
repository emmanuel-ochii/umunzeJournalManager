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
    <div class="row g-0 flex-md-grow-1">
      <div class="col-md-4 col-lg-5 col-xl-3 order-md-1 bg-body-extra-light">
        <div class="content p-0">
          <!-- Toggle Journal Sidebar For mobile-->
          <div class="d-md-none p-3">
            <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
            <button type="button" class="btn w-100 btn-alt-info" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
              Journal Sidebar
            </button>
          </div>
          <!-- END Toggle Journal Sidebar For mobile-->
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


          <form action="{{ route('journal.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <!-- Settings -->
          <div id="side-content" class="d-none d-md-block push">
            <div id="settings-accordion" role="tablist" aria-multiselectable="true" class="mt-4">
              <div class="block mb-0">
                <div class="block-header bg-body p-0" role="tab" id="settings-accordion_h1">
                  <a class="fw-semibold d-block w-100 p-3" data-bs-toggle="collapse" data-bs-parent="#settings-accordion" href="#settings-accordion_s1" aria-expanded="true" aria-controls="settings-accordion_s1">Status &amp; Visibility</a>
                </div>
                <div id="settings-accordion_s1" class="collapse show" role="tabpanel" aria-labelledby="settings-accordion_h1" data-bs-parent="#settings-accordion">
                  <div class="block-content">
                    <div class="row mb-4">
                      <label class="col-sm-4 col-form-label" for="visibility">Visibility</label>
                      <div class="col-sm-8">
                        <select class="form-select" id="visibility" name="visibily" disabled>
                          <option value="Public" selected>Public</option>
                        </select>
                      </div>
                    </div>
                    <div class="row mb-4">
                      <label class="col-sm-4 col-form-label" for="author">Uploaded by</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control py-3" name="uploaded_by" value="{{ !empty(Auth::user()->name) ? Auth::user()->name:'' }}" readonly>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block mb-0">
                <div class="block-header bg-body border-top p-0" role="tab" id="settings-accordion_h2">
                  <a class="fw-semibold d-block w-100 p-3" data-bs-toggle="collapse" data-bs-parent="#settings-accordion" href="#settings-accordion_s2" aria-expanded="true" aria-controls="settings-accordion_s2">Categories</a>
                </div>
                <div id="settings-accordion_s2" class="collapse" role="tabpanel" aria-labelledby="settings-accordion_h2" data-bs-parent="#settings-accordion">
                  <div class="block-content block-content-full">
                    <div class="mb-4">
                        <div class="form-check">
                            <select class="form-select" name="category">
                                @if(count($categories) > 0)
                                    @foreach ($categories as $category)
                                                <option value="{{$category->id }}">{{$category->category_name}}</option>
                                                {{-- <option value="{{$category->category_name }}">{{$category->category_name}}</option> --}}
                                                @endforeach
                                    @else
                                    <div id="basic-alert" class="p-5">
                                        <div class="preview">
                                            <div class="alert alert-dark show mb-2 text-center" role="alert">No Category To Select. <span class="text-danger">Please Contact Admin.</span></div>
                                        </div>
                                    </div>
                                @endif
                            </select>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block mb-0">
                <div class="block-header bg-body border-top p-0" role="tab" id="settings-accordion_h4">
                  <a class="fw-semibold d-block w-100 p-3" data-bs-toggle="collapse" data-bs-parent="#settings-accordion" href="#settings-accordion_s4" aria-expanded="true" aria-controls="settings-accordion_s4">Featured Image</a>
                </div>
                <div id="settings-accordion_s4" class="collapse" role="tabpanel" aria-labelledby="settings-accordion_h4" data-bs-parent="#settings-accordion">
                  <div class="block-content block-content-full">
                    <!-- Dropzone (functionality is auto initialized by the plugin itself in js/plugins/dropzone/dropzone.min.js) -->
                    <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
                    {{-- <form class="dropzone" action="be_forms_plugins.html"></form> --}}
                    <input class="form-control" type="file" name="featured_img" id="featured_img">

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Settings -->
        </div>
      </div>
      <div class="col-md-8 col-lg-7 col-xl-9 order-md-0 bg-body-dark">
        <!-- Main Content -->
        <div class="content">
          <div class="block block-rounded">
            <div class="block-content block-content-full d-flex justify-content-between border-bottom">
              <div>
                <button type="button" class="btn btn-sm btn-alt-secondary">
                  <i class="fa fa-plus"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-secondary">
                  <i class="fa fa-undo"></i>
                </button>
                <button type="button" class="btn btn-sm btn-alt-secondary">
                  <i class="fa fa-redo"></i>
                </button>
              </div>
              <div>
                <button type="submit" class="btn btn-sm btn-alt-info">Publish To Editor For Review</button>
              </div>
            </div>
            <div class="block-content">

                <div class="mb-3">
                  <input type="text" class="form-control py-3" id="author_name" name="author_name" placeholder="Author Name">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control py-3" name="author_email" value="{{ !empty(Auth::user()->email) ? Auth::user()->email:'' }}" readonly>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control py-3" id="title" name="title" placeholder="Title...">
                </div>
                <div class="mb-3">
                  <!-- CKEditor (js-ckeditor id is initialized in Helpers.jsCkeditor()) -->
                  <textarea class="js-simplemde" id="abstract" name="abstract" placeholder="Enter Abstract Here..."></textarea>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="file" name="journal" id="journal">
                  </div>
                <div class="mb-3">
                    <input type="text" class="form-control py-3" id="institution" name="institution" placeholder="Instituition...">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control py-3" id="institution_email" name="institution_email" placeholder="Instituition Email...">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control py-3" id="affiliation" name="affiliation" placeholder="Affilation...">
                </div>
                <div class="mb-3">
                    <select class="form-select" id="example-select" name="country">
                      <option selected="" class="text-grey">Select Country</option>
                      <option value="Nigeria">Nigeria </option>
                      <option value="Others">Others </option>
                    </select>
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control py-3" id="doi" name="doi" placeholder="DOI...">
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control py-3" id="issn" name="issn" placeholder="ISSN...">
                </div>


            </div>
          </div>

        </div>
        <!-- END Main Content -->
      </div>
    </form>
    </div>
    <!-- END Page Content -->
  </main>
  <!-- END Main Container -->

@endsection

@push('scripts')

<!-- jQuery (required for Select2 Plugin) -->
<script src="{{asset('/js/lib/jquery.min.js')}}"></script>

<!-- Page JS Plugins -->
<script src="{{asset('/js/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('/js/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('/js/plugins/dropzone/min/dropzone.min.js')}}"></script>
<script src="{{asset('/js/plugins/simplemde/simplemde.min.js')}}"></script>
<script src="{{asset('/js/plugins/ckeditor/ckeditor.js')}}"></script>

<!-- Page JS Helpers (SimpleMDE + CKEditor plugins) -->
<script>Dashmix.helpersOnLoad(['js-ckeditor', 'js-simplemde']);</script>

<!-- jQuery (required for BS Notify plugin) -->
<script src="{{asset('/js/lib/jquery.min.js')}}"></script>

<!-- Page JS Plugins -->
<script src="{{asset('/js/plugins/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

<!-- Page JS Helpers (BS Notify Plugin) -->
<script>Dashmix.helpersOnLoad(['jq-notify']);</script>

<!-- Page JS Helpers (CKEditor + Select2 plugins) -->
<script>
  Dashmix.onLoad(function () {
    CKEDITOR.config.height = '460';
    Dashmix.helpers(['js-ckeditor', 'jq-select2']);
  });
</script>

@endpush
