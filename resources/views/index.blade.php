<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DepEdEmployee_Profile</title>
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
                <div class="brand-logo">
                  <img src="{{ asset('public/img/login.png')}}">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Please enter ID Number to continue.</h6>
                <form class="pt-3" action="{{url('/profile')}}" method="POST">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" name="id_number" class="form-control form-control-lg" id="exampleInputEmail1" value="{{old('id_number')}}" placeholder="123456789">
                    @if ($errors->has('id_number'))
                    <span class="text-danger" style="font-size: 10pt;">{{ $errors->first('id_number') }}</span>
                    @endif

                    @if(Session::get('failed'))
                        <span class="text-danger" style="font-size: 10pt;">{{Session::get('failed')}}</span>
                    @endif
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Validate</button>
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