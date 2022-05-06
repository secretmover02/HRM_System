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
            <div class="col-12 grid-margin stretch-car">
              <div class="card">
                <div class="card-body">
                    <a href="" class="ml-4 btn btn-sm btn-primary" style="float:right;"><span class="fa fa-pencil-alt mr-1"> </span> <span class="update_label">Update</span></a>
                    <div class="d-flex justify-content-center mt-5">
                      <div class="col-md-7 col-lg-7 col-xl-7 col-sm-12 border-top pt-2">

                        <div class="row">
                          <div class="col-5">
                            <p class="text-right">Spouse Name :</p>
                          </div>
                          <div class="col-7">
                            <p class="text-uppercase"><strong>{{ $family_background->spouse_fname}} {{ $family_background->spouse_mname}} {{ $family_background->spouse_lname}} 
                              @if ($family_background->spouse_extension != 'NA' || $family_background->spouse_extension != '')
                                  {{$family_background->spouse_extension}}
                              @endif</strong></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-5">
                            <p class="text-right">Spouse Occupation :</p>
                          </div>
                          <div class="col-7">
                            <p class="text-uppercase"><strong>{{ $family_background->occupation}} </strong></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-5">
                            <p class="text-right">Employer/Business Name :</p>
                          </div>
                          <div class="col-7">
                            <p class="text-uppercase"><strong>{{ $family_background->business_name}} </strong></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-5">
                            <p class="text-right"> Business Address :</p>
                          </div>
                          <div class="col-7">
                            <p class="text-uppercase"><strong>{{ $family_background->business_address}} </strong></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-5">
                            <p class="text-right"> Tel No :</p>
                          </div>
                          <div class="col-7">
                            <p class="text-uppercase"><strong>{{ $family_background->telephone_no}} </strong></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-5">
                            <p class="text-right"> Father's Name :</p>
                          </div>
                          <div class="col-7">
                            <p class="text-uppercase"><strong>{{ $family_background->father_fname}} {{ $family_background->father_mname}} {{ $family_background->father_lname}} 
                              @if ($family_background->father_extension != 'NA' || $family_background->father_extension != '')
                                  {{$family_background->father_extension}}
                              @endif</strong></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-5">
                            <p class="text-right">  Mother's Maiden Name :</p>
                          </div>
                          <div class="col-7">
                            <p class="text-uppercase"><strong>{{$family_background->mother_maiden_name}}</strong></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-5">
                            <p class="text-right"> Mother's Name :</p>
                          </div>
                          <div class="col-7">
                            <p class="text-uppercase"><strong>{{ $family_background->mother_fname}} {{ $family_background->mother_mname}} {{ $family_background->mother_lname}} 
                              @if ($family_background->mother_extension != 'NA' || $family_background->mother_extension != '')
                                  {{$family_background->mother_extension}}
                              @endif</strong></p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <p class="text-center text-muted" style="font-size: 11pt; font-weight: bold">Name of Children</p>
                            @if( $child_count == 0)
                              <p class="text-center " style="font-size: 9pt;">-- No Record(s) entry -- </p>
                            @endif
                          </div>
                          @foreach( $children_name as $children)
                          <div class="col-6">
                            <p class="text-right">{{ $children->child_name}}</p>
                          </div>
                          <div class="col-6">
                            <p class="text-uppercase"><strong>{{$children->child_birth_date}}</strong></p>
                          </div>
                          @endforeach
                        </div>

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