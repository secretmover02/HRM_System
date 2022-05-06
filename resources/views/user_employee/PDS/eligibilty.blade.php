<!DOCTYPE html>
<html lang="en">
  @include('user_employee.head', ['title' => 'Educational Background'])
  <style type="text/css">
    table tr th{
      text-align: center;
    }
    table tr td{
      font-size: 11pt!important;
      width: auto;
      padding: 5px;
      vertical-align: text-top;
    }
  </style>
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
              <li class="breadcrumb-item active" aria-current="page">Civil Service Eligibilty</li>
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
            
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body" >
                    <h4 class="card-title"> Licenses
                      <a href="" class=" btn btn-sm btn-primary" style="float: right"><span class="icon-plus mr-1"> </span> <span class="update_label">Add</span></a>
                      </h4>
                      <div class="row">
                        @foreach($license as $csc)
                        <div class="col-lg-4 col-md-4 col-xl-4 col-sm-12 col-xs-12">
                          <div class="card border mt-5" style=" border-radius: 5px;">
                            <div class="card-header">
                              @if($csc->type == 'csc')
                                <img src="{{asset('public/img/civil_service.png')}}" width="100%" >
                              @elseif($csc->type == 'driver_license')
                                <img src="{{asset('public/img/lto.png')}}" width="100%" class="rounded-circle">
                              @elseif($csc->type == 'prc')
                                <img src="{{asset('public/img/prc.png')}}" width="100%" class="rounded-circle">
                              @elseif($csc->type == 'bar')
                                <img src="{{asset('public/img/supreme_court.png')}}" width="100%" class="rounded-circle">
                              @else
                                <img src="{{asset('public/img/republica.png')}}" width="100%" class="rounded-circle">
                              @endif()
                            </div>
                            <div class="card-body row">
                              <table>
                                <tr>
                                  <td>Title</td>
                                  <td><strong>: {{$csc->license_title}} </strong></td>
                                </tr>
                                <tr>
                                  <td>Rating</td>
                                  <td><strong>: {{$csc->rating}} </strong></td>
                                </tr>
                                <tr>
                                  <td>Exam Date</td>
                                  <td><strong>: {{$csc->date_examination}}  </strong></td>
                                </tr>
                                <tr>
                                  <td>Place</td>
                                  <td><strong>: {{$csc->place_examination}}  </strong></td>
                                </tr>
                                <tr>
                                  <td>Number</td>
                                  <td><strong>: {{$csc->license_number}}  </strong></td>
                                </tr>
                                <tr>
                                  <td>Validity</td>
                                  <td><strong>: {{$csc->date_validity}}  </strong></td>
                                </tr>
                              </table>
                              <a href="" class="btn btn-sm btn-danger btn-block"><span class="fa fa-pencil-alt"></span> UPDATE</a>
                            </div>
                          </div>
                        </div>
                        @endforeach
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