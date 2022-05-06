<!DOCTYPE html>
<html lang="en">
  @include('user_employee.head', ['title' => 'Educational Background'])
  <style type="text/css">
    table tr th{
      text-align: center;
      padding: 10px;
      font-size: 11pt;
      font-family: Helvetica, Sans-Serif;
    }
    table tr td{
      font-size: 10pt!important;
      padding: 10px 7px;
      width: auto;
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
              <li class="breadcrumb-item active" aria-current="page">Educational Background</li>
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
                    <h4 class="card-title"> Educational Background
                    </h4>
                    <div style="overflow-x:auto;">
                    <table class=" table-hover table-bordered mt-4" width="100%">
                        <tr>
                          <th rowspan="2" class="th" style="vertical-align: middle; font-weight: bold"> LEVEL </th>
                          <th rowspan="2" class="th" style="vertical-align: middle; font-weight: bold"> NAME OF SCHOOL </th>
                          <th rowspan="2" class="th" style="vertical-align: middle; font-weight: bold;"> BASIC EDUCATION/<br>DEGREE/COURSE </th>
                          <th colspan="2" class="th" style="vertical-align: middle; font-weight: bold"> PERIOD OF ATTENDANCE </th>
                          <th rowspan="2" class="th" style="vertical-align: middle; font-weight: bold"> HIGHEST LEVEL<br>UNITS EARNED </th>
                          <th rowspan="2" style="vertical-align: middle; font-weight: bold"> YEAR <br>GRADUATED </th>
                          <th rowspan="2" style="vertical-align: middle; font-weight: bold"> <span class=" icon-wrench"></span> </th>
                        </tr>
                        <tr>
                          <th>from</th>
                          <th>to</th>
                        </tr>
                      <tbody>
                        @foreach($educational_background as $child)
                        <tr>
                          <td class="text-uppercase">{{$child->level}}</td>
                          <td class="text-uppercase"> {{$child->school_name}}</td>
                          <td class="text-uppercase" style="">{{$child->course_education}}</td>
                          <td>{{$child->from}}</td>
                          <td>{{$child->to}}</td>
                          <td>{{$child->unit_earned}}</td>
                          <td>{{$child->year_graduated}}</td>
                          <td class="text-center"><a href="" class="btn btn-xs btn-dark" data-toggle="tooltip" data-placement="top" title="Update"><span class=" icon-pencil"></span></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
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