<!DOCTYPE html>
<html lang="en">
  @include('user_employee.head', ['title' => 'Learning and Development'])
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
    /*input{
        border: 1px solid gray!important;
        margin-left: 10px;
        padding: 5px;
    }*/
    /*.dataTables_filter{
        float: right;
        margin-top: -40px;
        margin-bottom: 10px;
    }*/
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
              <li class="breadcrumb-item active" aria-current="page">Learning and Development</li>
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
                      <a href="" class=" btn btn-sm btn-primary" ><span class="icon-plus mr-1"> </span> <span class="update_label">Add</span></a>
                    </h4>
                    <div style="overflow-x: auto">
                      <table id="example" class="table-bordered table-hover" style="width:100%">
                          <thead>
                              <tr>
                                  <th rowspan="2" style="vertical-align: middle; font-weight: bold">TITLE OF LEARNING AND DEVELOPMENT<BR>INTERVENTION/TRINING PROGRAMS</th>
                                  <th colspan="2" style="vertical-align: middle; font-weight: bold">INCLUSIVE DATES</th>
                                  <th rowspan="2" style="vertical-align: middle; font-weight: bold"># OF <br>HOURS</th>
                                  <th rowspan="2" style="vertical-align: middle;"><strong> TYPE OF LD </strong><br>(MANAGERIAL/<BR>SUPERVISORY/TECHNICAL)</th>
                                  <th rowspan="2" style="vertical-align: middle; font-weight: bold">CONDUCTED/ <br> SPONSORED BY</th>
                          <th rowspan="2" style="vertical-align: middle; font-weight: bold"> <span class=" icon-wrench"></span> </th>
                              </tr>
                              <tr>
                                  <th>from</th>
                                  <th>to</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($training as $ld)
                            <tr>
                              <td class="text-uppercase">{{$ld->title}}</td>
                              <td class="text-uppercase text-center">{{$ld->from}}</td>
                              <td class="text-uppercase text-center">{{$ld->to}}</td>
                              <td class="text-uppercase text-center">{{$ld->number_hours}} HRS</td>
                              <td class="text-uppercase">{{$ld->type_ld}}</td>
                              <td class="text-uppercase">{{$ld->conducted_by}}</td>
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
 <!--  <script src="{{asset('public/datatables_cdn/jquery-3.5.1.js')}}"></script>
  <script src="{{asset('public/datatables_cdn/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false
    } );
} );
  </script> -->
</html>