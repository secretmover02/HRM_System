<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('public/dashboard/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('public/dashboard/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/dashboard/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('public/dashboard/css/style.css')}}" ><!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('public/img/login.png')}}" />
    <script src="{{ asset('public/js/sweetalert.js') }}"></script>
    <style type="text/css">
      .to_uppercase{
        text-transform: uppercase;
      }
      input, span{
        font-size: 10pt!important;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                @if(Session::get('success'))
                    <script>
                      Swal.fire({
                        icon: 'success',
                        text: '{{Session::get('success')}}'
                        // text: 'Something went wrong!'
                      })
                    </script>
                @endif
                 @if(Session::get('failed'))
                    <script>
                      Swal.fire({
                        icon: 'error',
                        text: '{{Session::get('failed')}}'
                        // text: 'Something went wrong!'
                      })
                    </script>
                @endif
                <div class="brand-logo">
                  <img src="{{ asset('public/img/login.png')}}">
                </div>
                  <h4>Register New User</h4>
                <form class="pt-3" action="store" method="POST">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" class="form-control form-control-sm to_uppercase" name="fname" placeholder="First Name" value="{{old('fname')}}">
                     @if ($errors->has('fname'))
                    <span class="text-danger">{{ $errors->first('fname') }}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-sm to_uppercase" name="mname" placeholder="Middle Name" value="{{old('mname')}}">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-sm to_uppercase" name="lname" placeholder="Last Name" value="{{old('lname')}}">
                     @if ($errors->has('lname'))
                    <span class="text-danger">{{ $errors->first('lname') }}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <select class="form-control form-control-sm to_uppercase" name="division_code" style="color:black!important" required>
                      <option value="">Functional Division</option>
                      <option value="ORD">Office of the Regional Director</option>
                      <option value="OARD">Office of the Assistant Regional Director</option>
                      <option value="ICTU">Information and Communications Technology</option>
                      <option value="Legal">Legal Unit</option>
                      <option value="PAU">Public Affairs Unit</option>
                      <option value="CLMD">Curriculum Learning Management Division</option>
                      <option value="LRMD">Learning Resource and Management Division</option>
                      <option value="QAD">Quality Assurance Division</option>
                      <option value="FTAD">Field Technical Assistance Division</option>
                      <option value="HRDD">Human Resource and Development Division</option>
                      <option value="NEAP">National Educator's Academeny of the Philippines</option>
                      <option value="PPRD">Policy, Planning, and Research Division</option>
                      <option value="ESSD">Education Support Services Division</option>
                      <option value="Finance">Finance Division</option>
                      <option value="Accounting">Accounting Unit</option>
                      <option value="Budget">Budget Section</option>
                      <option value="COA">Commission on Audit</option>
                      <option value="Admin">Administrative Division</option>
                      <option value="Personnel">Personnel Unit</option>
                      <option value="AMS">Assets Management Services</option>
                      <option value="Records">Records Section</option>
                      <option value="GSU">General Services Unit</option>
                      <option value="Cashier">Cashier Section</option>
                      <option value="BAC">Bids and Awards Committee</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-sm" name="id_number" placeholder="ID Number" value="{{old('id_number')}}">
                     @if ($errors->has('id_number'))
                    <span class="text-danger">{{ $errors->first('id_number') }}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-sm" name="email" placeholder="Email Address" value="{{old('email')}}">
                     @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <input type="password" id="show_password" class="form-control form-control-sm" name="password" placeholder="Password" value="{{old('password')}}">
                    <div class="ml-2 mt-3">
                      <input type="checkbox" onclick="myFunction()"><label class="ml-1 mt-1">Show Password</label>
                    </div>
                     @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Register</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      function myFunction() {
        var x = document.getElementById("show_password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
    </script>
    <script src="{{ asset('public/dashboard/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('public/dashboard/js/off-canvas.js')}}"></script>
    <script src="{{ asset('public/dashboard/js/misc.js')}}"></script>
  </body>
</html>