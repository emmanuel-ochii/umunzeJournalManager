@extends('layouts.landing')

@push('links')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/js/plugins/dropzone/min/dropzone.min.css">

@endpush

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
            <h1 class="fw-bold my-2 text-white"> {{ Auth::user()->name }}</h1>
            <h2 class="h4 fw-bold text-white-75"> Senior Lecturer </h2>
            <a href="">
                <button type="button" class="btn btn-umunze-brown m-1"><i class="fab fa-fw fa-linkedin-in opacity-50 me-1"></i> </button>
            </a>
            <a href="mailto:exampl@gmail.com">
                <button type="button" class="btn btn-secondary m-1"> <i class="fa fa-fw fa-envelope opacity-50 me-1"></i> Message </button>
            </a>
            <a href="">
                <button type="button" class="btn btn-umunze-green m-1"><i class="fab fa-fw fa-twitter opacity-50 me-1"></i> </button>
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
      <!-- User Profile -->
      <h2 class="content-heading text-umunze-green">
        <i class="fa fa-fw fa-user-circle text-muted me-1"></i> User Profile
      </h2>
      <!-- END User Profile -->

      <!-- Block Tabs User Profile 1 -->
      <div class="row">
        <div class="col-lg-12 push">
          <!-- Block Tabs Animated Slide Left -->
          <div class="block block-rounded">
            <ul class="nav nav-tabs nav-tabs-block" role="tablist">
              <li class="nav-item">
                <button class="nav-link active" id="btabs-animated-slideleft-home-tab" data-bs-toggle="tab" data-bs-target="#vitalInfo" role="tab" aria-controls="btabs-animated-slideleft-home" aria-selected="true">Account’s vital info</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" id="btabs-animated-slideleft-profile-tab" data-bs-toggle="tab" data-bs-target="#socialMedia" role="tab" aria-controls="btabs-animated-slideleft-profile" aria-selected="false">Social media info</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" id="btabs-animated-slideleft-profile-tab" data-bs-toggle="tab" data-bs-target="#password" role="tab" aria-controls="btabs-animated-slideleft-profile" aria-selected="false">Change password</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" id="btabs-animated-slideleft-profile-tab" data-bs-toggle="tab" data-bs-target="#contact" role="tab" aria-controls="btabs-animated-slideleft-profile" aria-selected="false"> Contact</button>
              </li>
              <li class="nav-item ms-auto">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle" style="padding-right:20px;padding-top:10px"></button>
              </li>
            </ul>
            <div class="block-content tab-content overflow-hidden">
              <div class="tab-pane fade fade-left show active" id="vitalInfo" role="tabpanel" aria-labelledby="btabs-animated-slideleft-home-tab">
                <form class="row row-cols-lg-auto g-3 align-items-center" action="" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                          <label class="form-label" for="dm-profile-edit-name">First Name</label>
                          <input type="text" class="form-control" id="dm-profile-edit-name" name="dm-profile-edit-name" placeholder="Enter your name.." value="John Doe">
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="dm-profile-edit-name">Middle Name</label>
                          <input type="text" class="form-control" id="dm-profile-edit-name" name="dm-profile-edit-name" placeholder="Enter your name.." value="John Doe">
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="dm-profile-edit-name">Instituition Name</label>
                          <input type="text" class="form-control" id="dm-profile-edit-name" name="dm-profile-edit-name" placeholder="Enter your name.." value="John Doe">
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="dm-profile-edit-email">Email Address</label>
                          <input type="email" class="form-control" id="dm-profile-edit-email" name="dm-profile-edit-email" value="john.doe@example.com" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                            <label class="form-label" for="dm-profile-edit-name">Last Name</label>
                            <input type="text" class="form-control" id="dm-profile-edit-name" name="dm-profile-edit-name" placeholder="Enter your name.." value="John Doe">
                          </div>
                          <div class="mb-4">
                            <label class="form-label" for="dm-profile-edit-name">Instituition Email</label>
                            <input type="text" class="form-control" id="dm-profile-edit-name" name="dm-profile-edit-name" placeholder="Enter your name.." value="John Doe">
                          </div>
                        <div class="mb-4">
                            <label class="form-label" for="dm-profile-edit-job-title">Job Title</label>
                            <input type="text" class="form-control" id="dm-profile-edit-job-title" name="dm-profile-edit-job-title" placeholder="Add your job title.." value="Senior Lecturer">
                          </div>
                          <div class="mb-4">
                            <label class="form-label" for="dm-profile-edit-avatar">Upload profile image</label>
                            <input class="form-control" type="file" id="dm-profile-edit-avatar">
                          </div>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-umunze-green">Login</button>
                    </div>
                </form>
              </div>

              <div class="tab-pane fade fade-left" id="socialMedia" role="tabpanel" aria-labelledby="btabs-animated-slideleft-profile-tab">
                <form class="row row-cols-lg-auto g-3 align-items-center" action="" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                          <label class="form-label" for="linkedin">LinkedIn</label>
                          <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Enter your link.." value=" ">
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="facebook">Facebook Name</label>
                          <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Enter your link.." value=" ">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                            <label class="form-label" for="twitter">Twitter Name</label>
                            <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Enter your link.." value=" ">
                          </div>
                          <div class="mb-4">
                            <label class="form-label" for="instagram">Instagram</label>
                            <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Enter your link.." value=" ">
                          </div>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-umunze-green">Update</button>
                    </div>
                </form>
              </div>

              <div class="tab-pane fade fade-left" id="password" role="tabpanel" aria-labelledby="btabs-animated-slideleft-profile-tab">
                <form class="row row-cols-lg-auto g-3 align-items-center" action="be_pages_projects_edit.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                          <label class="form-label" for="password"> Current Password</label>
                          <input type="password" class="form-control" id="password" name="password" placeholder="Enter Current Password">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="updatepass"></label>
                        <button type="submit" class="form-control btn btn-umunze-green">Update Password</button>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                          <label class="form-label" for="newPass"> New Password</label>
                          <input type="password" class="form-control" id="newPass" name="newPass" >
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="confirmPass">Confirm New Password</label>
                            <input type="text" class="form-control" id="confirmPass" name="confirmPass">
                        </div>
                    </div>
                </form>
              </div>
              <div class="tab-pane fade fade-left" id="contact" role="tabpanel" aria-labelledby="btabs-animated-slideleft-profile-tab">
                <form class="row row-cols-lg-auto g-3 align-items-center" action="" method="POST" onsubmit="return false;">
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                          <label class="form-label" for="mobile_number">Mobile Phone Number</label>
                          <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter your mobile number.." value=" ">
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="home_address">Home Address</label>
                          <textarea class="form-control" id="home_address" name="home_address" placeholder="Enter your address.." value=" "></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                            <label class="form-label" for="office_number">Office Number</label>
                            <input type="text" class="form-control" id="office_number" name="office_number" placeholder="Enter your office number.." value=" ">
                          </div>
                          <div class="mb-4">
                            <label class="form-label" for="office_address">Office Address</label>
                            <textarea class="form-control" id="office_address" name="office_address" placeholder="Enter your office address.." value=" "></textarea>
                          </div>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-umunze-green">Update</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
          <!-- END Block Tabs Animated Slide Left -->
        </div>
      </div>
      <!-- END Block Tabs User Profile 1 -->

      <!-- Block Tabs User Biography -->
      <div class="row">
        <div class="col-lg-12 push">
          <!-- Block Tabs Animated Slide Left -->
          <div class="block block-rounded">
            <ul class="nav nav-tabs nav-tabs-block" role="tablist">
              <li class="nav-item">
                <button class="nav-link active" id="btabs-animated-slideleft-home-tab" data-bs-toggle="tab" data-bs-target="#Biography" role="tab" aria-controls="btabs-animated-slideleft-home" aria-selected="true">Biography</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" id="btabs-animated-slideleft-profile-tab" data-bs-toggle="tab" data-bs-target="#Qualifications" role="tab" aria-controls="btabs-animated-slideleft-profile" aria-selected="false">Qualifications</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" id="btabs-animated-slideleft-profile-tab" data-bs-toggle="tab" data-bs-target="#Appointments" role="tab" aria-controls="btabs-animated-slideleft-profile" aria-selected="false">Appointments</button>
              </li>
              <li class="nav-item ms-auto">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle" style="padding-right:20px;padding-top:10px"></button>
              </li>
            </ul>
            <div class="block-content tab-content overflow-hidden">
              <div class="tab-pane fade fade-left show active" id="Biography" role="tabpanel" aria-labelledby="btabs-animated-slideleft-home-tab">
                <form class="row row-cols-lg-auto g-3 align-items-center" action="" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                    <div class="col-lg-8 col-xl-8">
                        <div class="mb-4">
                          <label class="form-label" for="biography">Biography</label>
                          <textarea class="form-control" id="biography" name="biography" rows="4" placeholder="Enter your link.." value=" "></textarea>
                        </div>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-umunze-green">Update</button>
                    </div>
                </form>
              </div>
              <div class="tab-pane fade fade-left" id="Qualifications" role="tabpanel" aria-labelledby="btabs-animated-slideleft-profile-tab">
                <form class="row row-cols-lg-auto g-3 align-items-center" action="" method="POST" onsubmit="return false;">
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                          <label class="form-label" for="qualification_1">Qualification 1</label>
                          <input type="text" class="form-control" id="qualification_1" name="qualification_1" value=" ">
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="qualification_2">  Qualification 2</label>
                          <textarea class="form-control" id="qualification_2" name="qualification_2" value=" "></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                            <label class="form-label" for="qualification_3">Qualification 3</label>
                            <input type="text" class="form-control" id="qualification_3" name="qualification_3" value=" ">
                          </div>
                          <div class="mb-4">
                            <label class="form-label" for="qualification_4"> Qualification 4</label>
                            <textarea class="form-control" id="qualification_4" name="qualification_4" value=" "></textarea>
                          </div>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-umunze-green">Update</button>
                    </div>
                </form>
              </div>
              <div class="tab-pane fade fade-left" id="Appointments" role="tabpanel" aria-labelledby="btabs-animated-slideleft-profile-tab">
                <form class="row row-cols-lg-auto g-3 align-items-center" action="" method="POST" onsubmit="return false;">
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                          <label class="form-label" for="institution_1">Instituition</label>
                          <input type="text" class="form-control" id="institution_1" name="institution_1" value=" ">
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="appointment_1">  Appointment </label>
                          <input type="text" class="form-control" id="appointment_1" name="appointment_1" value=" "/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                            <label class="form-label" for="institution_2">Institution </label>
                            <input type="text" class="form-control" id="institution_2" name="institution_2" value=" ">
                          </div>
                          <div class="mb-4">
                            <label class="form-label" for="appointment_2"> Appointment </label>
                            <input type="text" class="form-control" id="appointment_2" name="appointment_2" value=" "/>
                          </div>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-umunze-green">Update</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
          <!-- END Block Tabs Animated Slide Left -->
        </div>
      </div>
      <!-- END Block Tabs User Biography -->

      <!-- Block Tabs User Profile 3 -->
      <div class="row">
        <div class="col-lg-12 push">
          <!-- Block Tabs Animated Slide Left -->
          <div class="block block-rounded">
            <ul class="nav nav-tabs nav-tabs-block" role="tablist">
              <li class="nav-item">
                <button class="nav-link active" id="btabs-animated-slideleft-home-tab" data-bs-toggle="tab" data-bs-target="#researchInterests" role="tab" aria-controls="btabs-animated-slideleft-home" aria-selected="true">Research interests</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" id="btabs-animated-slideleft-profile-tab" data-bs-toggle="tab" data-bs-target="#TeachingAndSupervision" role="tab" aria-controls="btabs-animated-slideleft-profile" aria-selected="false">Teaching and supervision</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" id="btabs-animated-slideleft-profile-tab" data-bs-toggle="tab" data-bs-target="#Publications" role="tab" aria-controls="btabs-animated-slideleft-profile" aria-selected="false">Publications</button>
              </li>
              <li class="nav-item ms-auto">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle" style="padding-right:20px;padding-top:10px"></button>
              </li>
            </ul>
            <div class="block-content tab-content overflow-hidden">
              <div class="tab-pane fade fade-left show active" id="researchInterests" role="tabpanel" aria-labelledby="btabs-animated-slideleft-home-tab">
                <form class="row row-cols-lg-auto g-3 align-items-center" action="" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                    <div class="col-lg-8 col-xl-8">
                        <div class="mb-4">
                            <label class="form-label" for="interests">Select Your Intrest(s)</label>
                            <select class="js-select2 form-select" id="interests" name="interests" style="width: 100%;" data-placeholder="Choose many.." multiple>
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="Technology" selected>Technology</option>
                                <option value="Nature">Nature</option>
                                <option value="Human Genelogy">Human Genelogy</option>
                                <option value="Healthy Life">Healthy Life</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                            <button type="submit" class="btn btn-umunze-green">Update</button>
                        </div>
                    </div>
                </form>
              </div>
              <div class="tab-pane fade fade-left" id="TeachingAndSupervision" role="tabpanel" aria-labelledby="btabs-animated-slideleft-profile-tab">
                <form class="row row-cols-lg-auto g-3 align-items-center" action="" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                          <label class="form-label" for="ctr_1">Current Teaching Responsibilities </label>
                          <input type="text" class="form-control" id="ctr_1" name="ctr_1">
                        </div>
                        <div class="mb-4">
                          <input type="text" class="form-control" id="ctr_2" name="ctr_2">
                        </div>
                        <div class="mb-4">
                          <input type="text" class="form-control" id="ctr_3" name="ctr_3">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                            <label class="form-label" for="ctr_4">Current Teaching Responsibilities</label>
                            <input type="text" class="form-control" id="ctr_4" name="ctr_4">
                          </div>
                          <div class="mb-4">
                            <input type="text" class="form-control" id="ctr_5" name="ctr_5">
                          </div>
                        <div class="mb-4">
                            <input type="text" class="form-control" id="ctr_6" name="ctr_6">
                          </div>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-umunze-green">Update</button>
                    </div>
                </form>
              </div>
              <div class="tab-pane fade fade-left" id="Publications" role="tabpanel" aria-labelledby="btabs-animated-slideleft-profile-tab">
                <form class="row row-cols-lg-auto g-3 align-items-center" action="" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                          <label class="form-label" for="publication_1">Publications </label>
                          <textarea class="form-control" id="publication_1" name="publication_1"></textarea>
                        </div>
                        <div class="mb-4">
                          <textarea class="form-control" id="publication_2" name="publication_2"></textarea>
                        </div>
                        <div class="mb-4">
                          <textarea class="form-control" id="publication_3" name="publication_3"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                            <label class="form-label" for="publication_4">Publications</label>
                            <textarea class="form-control" id="publication_4" name="publication_4"></textarea>
                          </div>
                          <div class="mb-4">
                            <textarea class="form-control" id="publication_5" name="publication_5"></textarea>
                          </div>
                        <div class="mb-4">
                            <textarea class="form-control" id="publication_6" name="publication_6"></textarea>
                          </div>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-umunze-green">Update</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
          <!-- END Block Tabs Animated Slide Left -->
        </div>
      </div>
      <!-- END Block Tabs User Profile 3 -->


    </div>
    <!-- END Page Content -->
  </main>
  <!-- END Main Container -->


@endsection


@push('scripts')
<!-- jQuery (required for BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider + Password Strength Meter plugins) -->
<script src="/js/lib/jquery.min.js"></script>

<!-- Page JS Plugins -->
    <script src="/js/plugins/select2/js/select2.full.min.js"></script>

    <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Ion Range Slider + Masked Inputs + Password Strength Meter plugins) -->
    <script>Dashmix.helpersOnLoad(['jq-select2',]);</script>

@endpush
