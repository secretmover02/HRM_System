<!DOCTYPE html>
<html lang="en">
@include ('user_employee.head', ['title' => 'Log In'])
<style type="text/css">
  @media screen and (max-width: 600px) {
  .auth-form-light{
    padding: 25px !important;
  }
  h4{
    font-size: 12pt;
  }
}
</style>
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
                  <h4>Please Log In to continue ..</h4>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="email" class="form-control " name="email" placeholder="Email" value="{{old('email')}}">
                     @if ($errors->has('email'))
                    <span class="text-danger" style="font-size: 10pt;">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control " name="password" placeholder="Password" value="{{old('password')}}">
                     @if ($errors->has('password'))
                    <span class="text-danger" style="font-size: 10pt;">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Log In</button>
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