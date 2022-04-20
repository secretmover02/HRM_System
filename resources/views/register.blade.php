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
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                @if(Session::get('success'))
                    <div class="alert alert-success">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{Session::get('success')}}
                    </div>
                @endif
                 @if(Session::get('failed'))
                    <div class="alert alert-danger">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{Session::get('failed')}}
                    </div>
                @endif
                <div class="brand-logo">
                  <img src="{{ asset('public/img/login.png')}}">
                </div>
                  <h4>Register New User</h4>
                <form class="pt-3" action="store" method="POST">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="fname" placeholder="First Name" value="{{old('fname')}}">
                     @if ($errors->has('fname'))
                    <span class="text-danger">{{ $errors->first('fname') }}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="mname" placeholder="Middle Name" value="{{old('mname')}}">
                     @if ($errors->has('mname'))
                    <span class="text-danger">{{ $errors->first('mname') }}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="lname" placeholder="Last Name" value="{{old('lname')}}">
                     @if ($errors->has('lname'))
                    <span class="text-danger">{{ $errors->first('lname') }}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="id_number" placeholder="ID Number" value="{{old('id_number')}}">
                     @if ($errors->has('id_number'))
                    <span class="text-danger">{{ $errors->first('id_number') }}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Email Address" value="{{old('email')}}">
                     @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" value="{{old('password')}}">
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
    <script src="{{ asset('public/dashboard/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('public/dashboard/js/off-canvas.js')}}"></script>
    <script src="{{ asset('public/dashboard/js/misc.js')}}"></script>
  </body>
</html>