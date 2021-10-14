@extends('layouts.landing')

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
                <h4 class="fw-normal">Contact </h4>
                <p>Content slides in to the left..</p>
              </div>
            </div>
          </div>
          <!-- END Block Tabs Animated Slide Left -->
        </div>
      </div>
      <!-- END Block Tabs User Profile 1 -->

      <!-- Block Tabs User Profile 2 -->
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
                <form class="row row-cols-lg-auto g-3 align-items-center" action="be_pages_projects_edit.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                          <label class="form-label" for="dm-profile-edit-name">Full Name</label>
                          <input type="text" class="form-control" id="dm-profile-edit-name" name="dm-profile-edit-name" placeholder="Enter your name.." value="John Doe">
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="dm-profile-edit-email">Email Address</label>
                          <input type="email" class="form-control" id="dm-profile-edit-email" name="dm-profile-edit-email" value="john.doe@example.com" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
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
              <div class="tab-pane fade fade-left" id="Qualifications" role="tabpanel" aria-labelledby="btabs-animated-slideleft-profile-tab">
                <h4 class="fw-normal">Profile Content</h4>
                <p>Content slides in to the left..</p>
              </div>
              <div class="tab-pane fade fade-left" id="Appointments" role="tabpanel" aria-labelledby="btabs-animated-slideleft-profile-tab">
                <h4 class="fw-normal">Password Content</h4>
                <p>Content slides in to the left..</p>
              </div>
            </div>
          </div>
          <!-- END Block Tabs Animated Slide Left -->
        </div>
      </div>
      <!-- END Block Tabs User Profile 2 -->

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
                <form class="row row-cols-lg-auto g-3 align-items-center" action="be_pages_projects_edit.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                    <div class="col-lg-6 col-xl-6">
                        <div class="mb-4">
                          <label class="form-label" for="dm-profile-edit-name">Full Name</label>
                          <input type="text" class="form-control" id="dm-profile-edit-name" name="dm-profile-edit-name" placeholder="Enter your name.." value="John Doe">
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="dm-profile-edit-email">Email Address</label>
                          <input type="email" class="form-control" id="dm-profile-edit-email" name="dm-profile-edit-email" value="john.doe@example.com" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
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
              <div class="tab-pane fade fade-left" id="TeachingAndSupervision" role="tabpanel" aria-labelledby="btabs-animated-slideleft-profile-tab">
                <h4 class="fw-normal">Profile Content</h4>
                <p>Content slides in to the left..</p>
              </div>
              <div class="tab-pane fade fade-left" id="Publications" role="tabpanel" aria-labelledby="btabs-animated-slideleft-profile-tab">
                <h4 class="fw-normal">Password Content</h4>
                <p>Content slides in to the left..</p>
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
