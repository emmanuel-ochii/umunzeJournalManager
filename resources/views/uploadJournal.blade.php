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
    <div class="row g-0 flex-md-grow-1">
      <div class="col-md-4 col-lg-5 col-xl-3 order-md-1 bg-body-extra-light">
        <div class="content p-0">
          <!-- Toggle Settings -->
          <div class="d-md-none p-3">
            <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
            <button type="button" class="btn w-100 btn-alt-info" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
              Settings
            </button>
          </div>
          <!-- END Toggle Settings -->

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
                      <label class="col-sm-4 col-form-label" for="example-wp-visibility">Visibility</label>
                      <div class="col-sm-8">
                        <select class="form-select" id="example-wp-visibility" name="example-wp-visibility" disabled>
                          <option value="1" selected>Public</option>
                        </select>
                      </div>
                    </div>
                    <div class="row mb-4">
                      <label class="col-sm-4 col-form-label" for="example-wp-author">Author</label>
                      <div class="col-sm-8">
                        <select class="form-select" id="example-wp-author" name="example-wp-author" disabled>
                          <option value="1">Admin</option>
                        </select>
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
                        <input type="checkbox" class="form-check-input" id="example-wp-cat-1" name="example-wp-cat-1">
                        <label class="form-check-label" for="example-wp-cat-1">Finace</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="example-wp-cat-2" name="example-wp-cat-2">
                        <label class="form-check-label" for="example-wp-cat-2">Academic</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="example-wp-cat-3" name="example-wp-cat-3">
                        <label class="form-check-label" for="example-wp-cat-3">Industry</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="example-wp-cat-4" name="example-wp-cat-4">
                        <label class="form-check-label" for="example-wp-cat-4">Political</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="example-wp-cat-5" name="example-wp-cat-5">
                        <label class="form-check-label" for="example-wp-cat-5"> IT/Technology</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="example-wp-cat-7" name="example-wp-cat-7">
                        <label class="form-check-label" for="example-wp-cat-7">Others</label>
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
                    <form class="dropzone" action="be_forms_plugins.html"></form>
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
                <a class="btn btn-sm btn-alt-info" href="javascript:void(0)">Publish To Editor For Preview</a>
              </div>
            </div>
            <div class="block-content">
              <form action="" method="POST">
                <div class="mb-3">
                  <input type="text" class="form-control py-3" id="authorName" name="authorName" placeholder="Author Name...">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control py-3" id="authorEmail" name="authorEmail" placeholder="Email...">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control py-3" id="bookTitle" name="bookTitle" placeholder="Title...">
                </div>
                <div class="mb-3">
                  <!-- CKEditor (js-ckeditor id is initialized in Helpers.jsCkeditor()) -->
                  <textarea class="js-simplemde" id="simplemde" name="simplemde" placeholder="Enter Abstract Here..."></textarea>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="file" id="example-file-input">
                  </div>
                <div class="mb-3">
                    <input type="text" class="form-control py-3" id="instituition" name="instituition" placeholder="Instituition...">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control py-3" id="instituitionEmail" name="instituitionEmail" placeholder="Instituition Email...">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control py-3" id="affilation" name="affilation" placeholder="Affilation...">
                </div>
                <div class="mb-3">
                    <select class="form-select" id="example-select" name="example-select">
                      <option selected="" class="text-grey">Select Country</option>
                      <option value="1">Nigeria </option>
                      <option value="2">Others </option>
                    </select>
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control py-3" id="doi" name="doi" placeholder="DOI...">
                </div>

              </form>
            </div>
          </div>
        </div>
        <!-- END Main Content -->
      </div>
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

<!-- Page JS Helpers (CKEditor + Select2 plugins) -->
<script>
  Dashmix.onLoad(function () {
    CKEDITOR.config.height = '460';
    Dashmix.helpers(['js-ckeditor', 'jq-select2']);
  });
</script>

@endpush
