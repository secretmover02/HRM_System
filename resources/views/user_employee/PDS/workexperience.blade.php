<!DOCTYPE html>
<html lang="en">
  @include('user_employee.head', ['title' => 'Educational Background'])
  <style type="text/css">
    table tr th{
      text-align: center;
    }
    table tr td{
      font-size: 10pt!important;
    }
    input{
        border: 1px solid gray!important;
        margin-left: 10px;
        padding: 5px;
    }
    .dataTables_filter{
        float: right;
        margin-top: -40px;
        margin-bottom: 10px;
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
              <li class="breadcrumb-item active" aria-current="page">Work Experience</li>
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
                  <div class="card-body" style="overflow-x: auto" >
                    <h4 class="card-title">
                      <a href="" class="ml-4 btn btn-sm btn-primary" ><span class="fa fa-pencil-alt mr-1"> </span> <span class="update_label">Update</span></a>
                    </h4>
                    <table id="example" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th colspan="2" style="vertical-align: middle; font-weight: bold">INCLUSIVE DATES</th>
                                <th rowspan="2" style="vertical-align: middle; font-weight: bold">POSITION TITLE</th>
                                <th rowspan="2" style="vertical-align: middle; font-weight: bold">DEPARTMENT/AGENCY/OFFICE/COMPANY</th>
                                <th rowspan="2" style="vertical-align: middle; font-weight: bold">MONTHLY <br> SALARY</th>
                                <th rowspan="2" style="vertical-align: middle; font-weight: bold">SALARY <br> GRADE</th>
                                <th rowspan="2" style="vertical-align: middle; font-weight: bold">STEP</th>
                                <th rowspan="2" style="vertical-align: middle; font-weight: bold">WORK <br> STATUS</th>
                                <th rowspan="2" style="vertical-align: middle; font-weight: bold">-</th>
                            </tr>
                            <tr>
                                <th>from</th>
                                <th>to</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $exp as $xp)
                                <td class="text-uppercase">{{$xp->from}}</td>
                                <td class="text-uppercase">{{$xp->to}}</td>
                                <td class="text-uppercase">{{$xp->position_title}}</td>
                                <td class="text-uppercase">{{$xp->company}}</td>
                                <td class="text-uppercase">{{$xp->monthly_salary}}</td>
                                <td class="text-uppercase">{{$xp->salary_grade}}</td>
                                <td class="text-uppercase">{{$xp->salary_step}}</td>
                                <td class="text-uppercase">{{$xp->status_appointment}}</td>
                                <td ><a href="" class="btn btn-xs btn-success"><span class="fa fa-eye"></span></a></td>
                            @endforeach
                        </tbody>
                    </table>
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
  <script src="{{asset('public/datatables_cdn/jquery-3.5.1.js')}}"></script>
  <script src="{{asset('public/datatables_cdn/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false
    } );
} );
  </script>
</html>