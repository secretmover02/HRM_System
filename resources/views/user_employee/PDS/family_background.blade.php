<!DOCTYPE html>
<html lang="en">
  @include('user_employee.head', ['title' => 'Family Background'])
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="">
            <img src="{{ asset('public/img/login.png')}}" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href=""><img src="{{ asset('public/img/login.png')}}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <div aria-label="breadcrumb" class="mt-4 breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="#">PDS</a></li>
              <li class="breadcrumb-item active" aria-current="page">Family Background</li>
            </ol>
          </div>
          @include('user_employee.top_header')
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            @include('user_employee.navigation')
          </ul>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="card" style="border-top: 3px solid gray;">
              <div class="row p-3">
                <div class="mt-1 ml-1 col-12" style="border-left: 3px solid #126303; border-top-left-radius: 5px;">
                  <H6>Spouse Information</H6>
                  <div class="row">
                    <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                      <label>First Name</label>
                      <input type="text" name="spouse_fname" class="form-control form-control-sm" value="{{$family_background->spouse_fname}}" >
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                      <label>Middle Name</label>
                      <input type="text" name="spouse_mname" class="form-control form-control-sm" value="{{$family_background->spouse_mname}}" >
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                      <label>Last Name</label>
                      <input type="text" name="spouse_lname" class="form-control form-control-sm" value="{{$family_background->spouse_lname}}" >
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                      <label>Extension Name</label>
                      <input type="text" name="spouse_extension" class="form-control form-control-sm" value="{{$family_background->spouse_extension}}" >
                    </div>
                    <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                      <label>Occupation</label>
                      <input type="text" name="occupation" class="form-control form-control-sm" value="{{$family_background->occupation}}" >
                    </div>
                    <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                      <label>Employer / Business Name</label>
                      <input type="text" name="business_name" class="form-control form-control-sm" value="{{$family_background->business_name}}" >
                    </div>
                    <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                      <label>Business Address</label>
                      <input type="text" name="business_address" class="form-control form-control-sm" value="{{$family_background->business_address}}" >
                    </div>
                    <div class="col-12 col-md-3 col-lg-3 col-xl-3">
                      <label>Telephone No</label>
                      <input type="text" name="telephone_no" class="form-control form-control-sm" value="{{$family_background->telephone_no}}" >
                    </div>
                  </div>
                </div>
                <div class="mt-2 ml-1 pt-2 pb-2 col-12" style="background-color: #F2F9F1">
                  <H6>Father's Information</H6>
                  <div class="row">
                    <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                      <label>First Name</label>
                      <input type="text" name="father_fname" class="form-control form-control-sm" value="{{$family_background->father_fname}}" >
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                      <label>Middle Name</label>
                      <input type="text" name="father_mname" class="form-control form-control-sm" value="{{$family_background->father_mname}}" >
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                      <label>Last Name</label>
                      <input type="text" name="father_lname" class="form-control form-control-sm" value="{{$family_background->father_lname}}" >
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                      <label>Extension Name</label>
                      <input type="text" name="father_extension" class="form-control form-control-sm" value="{{$family_background->father_extension}}" >
                    </div>
                  </div>
                </div>
                <div class="mt-2 ml-1 pt-2 pb-2 col-12" style="background-color: #F2F9F1">
                  <H6>Mothers's Information</H6>
                  <div class="row">
                    <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                      <label>First Name</label>
                      <input type="text" name="mother_fname" class="form-control form-control-sm" value="{{$family_background->mother_fname}}" >
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                      <label>Middle Name</label>
                      <input type="text" name="mother_mname" class="form-control form-control-sm" value="{{$family_background->mother_mname}}" >
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                      <label>Last Name</label>
                      <input type="text" name="mother_lname" class="form-control form-control-sm" value="{{$family_background->mother_lname}}" >
                    </div>
                    <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                      <label>Extension Name</label>
                      <input type="text" name="mother_extension" class="form-control form-control-sm" value="{{$family_background->mother_extension}}" >
                    </div>
                  </div>
                </div>
                <div class="mt-2 ml-2 col-12">
                  <H6>List of Children's</H6>
                  <div class="col-12 col-md-4 col-lg-4 col-xl-4 pl-4" style="border-left: 2px dotted gray">
                    <label>Complete Name</label>
                    <input type="text" name="mother_mname" class="form-control form-control-sm" value="{{$family_background->mother_mname}}" >
                    <label>Birth Date</label>
                    <input type="text" name="mother_mname" class="form-control form-control-sm" value="{{$family_background->mother_mname}}" >
                    <div class="">
                      <span class="fa fa-minus-circle fa-1x" style="position: absolute; top: -10px; left: -18px;"></span>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>        
           @include('user_employee.footer')
        </div>
      </div>
    </div>
    @include('user_employee.script')
  </body>
</html>