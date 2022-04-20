  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{ asset('public/dashboard/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('public/dashboard/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/dashboard/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('public/dashboard/css/style.css')}}" ><!-- End layout styles -->
    <link rel="stylesheet" href="{{ asset('public/fontawesome-free/css/all.min.css')}}" >
    <link rel="shortcut icon" href="{{ asset('public/img/login.png')}}" />
    <style type="text/css">
    label{
      font-size: 10pt!important;
    }
    .form-control-sm{
        font-weight: bold;
        text-transform: uppercase;
    }
    @media only screen and (max-width: 600px) {
      .breadcrumb {
        display: none;
      }
      .update_label{
        display: none;
      }
      .content-wrapper{
        width: 100%!important;
        padding: 5px!important;
      }
      .profile_pic{
        width: 150px;
        height: 150px;
      }
      .signout{
        display: block;
        background-color: white;
      }
    }
  </style>
  </head>