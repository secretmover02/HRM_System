<!DOCTYPE html>
<html lang="en">
  @include('user_employee.head', ['title' => 'Personal Information'])
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
              <li class="breadcrumb-item active" aria-current="page">Personal Information</li>
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

            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Personal Information
                        <a href="{{ route('/Update_PersonalInfo', ['ticket_id' => Auth::user()->name , 'index' => Auth::user()->id_number  ])}}" class="ml-4 btn btn-sm btn-primary" style="float:right;"><span class="fa fa-pencil-alt mr-1"> </span> <span class="update_label">Update Information</span></a>
                      </h4>
                    <form class="">
                      <div class="profile d-flex justify-content-center mb-3 mt-3">
                          <img src="{{Auth::user()->profile}}" class="profile_pic rounded-circle border" height="200px" width="200px">
                      </div>
                      <div class="form-group">
                        <label >Complete Name</label>
                        <p class="form control form-control-sm border">{{$account_info->fname}} {{$account_info->mname}} {{$account_info->lname}} {{$account_info->name_extension}}</p>
                      </div>
                      <div class="row">
                        <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                          <label >Birth Date </label>
                          <p class="form control form-control-sm border">{{$account_info->birth_date}}</p>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                          <label >Gender</label>
                          <p class="form control form-control-sm border">{{$account_info->sex}}</p>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                          <label >Civil Status</label>
                          <p class="form control form-control-sm border">{{$account_info->civil_status}}</p>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                          <label >Citizenship</label>
                          <p class="form control form-control-sm border">{{$account_info->citizenship}}</p>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                          <label >Height (m)</label>
                          <p class="form control form-control-sm border">{{$account_info->height}}</p>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                          <label >Weight (kg)</label>
                          <p class="form control form-control-sm border">{{$account_info->weight}}</p>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                          <label >Telephone Number</label>
                          <p class="form control form-control-sm border">{{$account_info->telephone_no}}</p>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                          <label >Mobile Number</label>
                          <p class="form control form-control-sm border">{{$account_info->mobile_no}}</p>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                          <label >SSS Number</label>
                          <p class="form control form-control-sm border">{{$account_info->sss_no}}</p>
                        </div>
                        <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                          <label >GSIS Number</label>
                          <p class="form control form-control-sm border">{{$account_info->gsis_no}}</p>
                        </div>    
                        <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                          <label >Pag Ibig Number</label>
                          <p class="form control form-control-sm border">{{$account_info->pag_ibig_no}}</p>
                        </div> 
                        <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                          <label >Philhealth Number</label>
                          <p class="form control form-control-sm border">{{$account_info->philhealth_no}}</p>
                        </div>
                        <div class="form-group col-sm-6 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                          <label >Tin Number</label>
                          <p class="form control form-control-sm border">{{$account_info->tin_no}}</p>
                        </div> 
                        <div class="form-group col-sm-6 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                          <label >Agency Employee Number</label>
                          <p class="form control form-control-sm border">{{$account_info->agency_employee_no}}</p>
                        </div>                  
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Address Table</h4>
                    <form class="forms-sample">
                      <fieldset class="border border-secondary pl-3 pr-3">
                        <legend style="padding: 15px 0px 0px 20px;"><p><i>Permanent Address</i></p></legend>
                        <div class="row">
                          <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 " >
                            <label>House No. </label>
                            <p class="form control form-control-sm border">{{$address1->house_no}}</p>
                          </div>
                          <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                            <label >Street </label>
                            <p class="form control form-control-sm border">{{$address1->street}}</p>
                          </div>
                          <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                            <label >Subdivision / Village</label>
                            <p class="form control form-control-sm border">{{$address1->subdivision}}</p>
                          </div> 
                          <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                            <label >Barangay</label>
                            <p class="form control form-control-sm border">{{$address1->brgy}}</p>
                          </div>
                          <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                            <label >City / Municipality</label>
                            <p class="form control form-control-sm border">{{$address1->city}}</p>
                          </div>
                          <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                            <label >Province</label>
                            <p class="form control form-control-sm border">{{$address1->province}}</p>
                          </div>  
                          <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                            <label >Zip Code</label>
                            <p class="form control form-control-sm border">{{$address1->zipcode}}</p>
                          </div>               
                        </div>
                      </fieldset>
                      <fieldset class="border border-secondary pl-3 pr-3">
                        <legend style="padding: 15px 0px 0px 20px;"><p><i>Residential Address</i></p></legend>
                        <div class="row">
                          <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6" >
                            <label>House No. </label>
                            <p class="form control form-control-sm border">{{$address2->house_no}}</p>
                          </div>
                          <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                            <label >Street </label>
                            <p class="form control form-control-sm border">{{$address2->street}}</p>
                          </div>
                          <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                            <label >Subdivision / Village</label>
                            <p class="form control form-control-sm border">{{$address2->subdivision}}</p>
                          </div> 
                          <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                            <label >Barangay</label>
                            <p class="form control form-control-sm border">{{$address2->brgy}}</p>
                          </div>
                          <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                            <label >City / Municipality</label>
                            <p class="form control form-control-sm border">{{$address2->city}}</p>
                          </div>
                          <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                            <label >Province</label>
                            <p class="form control form-control-sm border">{{$address2->province}}</p>
                          </div>  
                          <div class="form-group col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 ">
                            <label >Zip Code</label>
                            <p class="form control form-control-sm border">{{$address2->zipcode}}</p>
                          </div>               
                        </div>
                      </fieldset>
                    </form>
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