<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>{{$account_info->name}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('public/profile_libraries/jquery-1.10.2.min.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
        integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

    <link rel="shortcut icon" href="{{ asset('public/img/login.png')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">
</head>
<style type="text/css">
    .sub_label{
        margin-left: 37px;
        font-size: 7pt;
        font-style: italic;
        color: green;
        display: block;
        margin-top: -2px
    }
    .form-control{
        padding: 10px;
    }
</style>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-4 mb-5 mb-lg-0 wow fadeIn">
                <div class="card border-0 shadow">
                    <img src="{{ asset($account_info->profile)}}" alt="User Image">
                    <div class="card-body p-1-9 p-xl-5">
                        <div class="mb-4">
                            <h3 class="h4 mb-0">{{$account_info->name}}</h3>
                            <span class="text-primary">{{$account_info->position_title}}</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3"><a href="#!"><i
                                        class="far fa-envelope display-25 me-3 text-secondary"></i>{{$account_info->email}}</a>
                            </li>
                            <li class="mb-3"><a href="#!"><i
                                        class="fa fa-phone-alt display-25 me-3 text-secondary"></i>{{$account_info->mobile_no}}</a>
                            </li>
                        </ul>
                        <div class="">
                            <a href="login" class="btn btn-info form-control"><span class="fa fa-eye"></span> More Information</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="ps-lg-1-6 ps-xl-5">
                    <div class="mb-5 wow fadeIn">
                        <div class="text-start mb-1-6 wow fadeIn">
                            <h2 class="h4 mb-0 text-primary"><i class="fa fa-solid fa-id-card"></i> Personal Information</h2>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="form-control">
                                    <span class="fas fa-user-circle ms-3"></span>  <span>{{$account_info->fname}} {{$account_info->mname}} {{$account_info->lname}}</span>
                                    <span class="sub_label">Full Name</span>
                                </label>
                            </div>
                            <div class="col-12 mt-1">
                                <label class="form-control">
                                    <span class="fas fa-map-marker-alt ms-3"></span>  <span style="text-align: left;">{{$address1->house_no}} {{$address1->street}} {{$address1->subdivision}} {{$address1->brgy}} {{$address1->city}} {{$address1->province}} {{$address1->zipcode}}</span>
                                    <span class="sub_label">Residential Address</span>
                                </label>
                            </div>
                            <div class="col-12 mt-1">
                                <label class="form-control">
                                    <span class="fas fa-map-marker-alt ms-3"></span>  <span style="text-align: left;">{{$address2->house_no}} {{$address2->street}} {{$address2->subdivision}} {{$address2->brgy}} {{$address2->city}} {{$address2->province}} {{$address2->zipcode}}</span>
                                    <span class="sub_label">Permanent Address</span>
                                </label>
                            </div>
                            <div class="col-12 mt-1">
                                <label class="form-control">
                                    <span class="fas fa-calendar ms-3"></span>  <span>{{$account_info->birth_date}}</span>
                                    <span class="sub_label">Birth Date</span>
                                </label>
                            </div>
                            <div class="col-12 mt-1">
                                <label class="form-control">
                                    <span class="fas fa-user-tag ms-3"></span>  <span>{{$account_info->civil_status}}</span>
                                    <span class="sub_label">Civil Status</span>
                                </label>
                            </div>
                            <div class="col-12 mt-1">
                                <label class="form-control">
                                    <span class="fas fa-venus-mars ms-3"></span>  <span>{{$account_info->sex}}</span>
                                    <span class="sub_label">Gender</span>
                                </label>
                            </div>
                            <div class="col-12 mt-1">
                                <label class="form-control">
                                    <span class="fas fa-ruler-vertical ms-3"></span>  <span>{{$account_info->height}}</span>
                                    <span class="sub_label">Height</span>
                                </label>
                            </div>
                            <div class="col-12 mt-1">
                                <label class="form-control">
                                    <span class="fas fa-weight ms-3"></span>  <span>{{$account_info->weight}}</span>
                                    <span class="sub_label">Weight</span>
                                </label>
                            </div>
                            <div class="col-12 mt-1">
                                <label class="form-control">
                                    <span class="fas fa-adjust ms-3"></span>  <span>{{$account_info->sss_no}}</span>
                                    <span class="sub_label">SSS No.</span>
                                </label>
                            </div>
                            <div class="col-12 mt-1">
                                <label class="form-control">
                                    <span class="fa fa-bookmark ms-3"></span>  <span>{{$account_info->philhealth_no}}</span>
                                    <span class="sub_label">Philhealth No.</span>
                                </label>
                            </div>
                            <div class="col-12 mt-1">
                                <label class="form-control">
                                    <span class="fa fa-bookmark ms-3"></span>  <span>{{$account_info->pag_ibig_no}}</span>
                                    <span class="sub_label">Pag-Ibig No.</span>
                                </label>
                            </div>
                            <div class="col-12 mt-1">
                                <label class="form-control">
                                    <span class="fa fa-bookmark ms-3"></span>  <span>{{$account_info->gsis_no}}</span>
                                    <span class="sub_label">GSIS No.</span>
                                </label>
                            </div>
                            <div class="col-12 mt-1">
                                <label class="form-control">
                                    <span class="fa fa-bookmark ms-3"></span>  <span>{{$account_info->tin_no}}</span>
                                    <span class="sub_label">TIN No.</span>
                                </label>
                            </div>
                            <div class="col-12 mt-1">
                                <div class="text-center m-1 ">
                                    <label class="text-danger" style="font-size: 10pt; font-weight: bold">In case of emergency, please notify this person</label>
                                </div>
                                <label class="form-control">
                                    <span class="fas fa-user ms-3"></span>  <span>{{$account_info->contact_person_name}}</span>
                                    <span class="sub_label">Contact Person</span>
                                </label>
                                <label class="form-control">
                                    <span class="fas fa-search-location ms-3"></span>  <span>{{$account_info->contact_person_address}}</span>
                                    <span class="sub_label">Address</span>
                                </label>
                                <label class="form-control">
                                    <span class="fas fa-phone-alt ms-3"></span>  <span>{{$account_info->contact_person_number}}</span>
                                    <span class="sub_label">Contact No.</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5 wow fadeIn">
                        <div class="text-start mb-1-6 wow fadeIn">
                            <h2 class="h4 mb-0 text-primary"><span class="fas fa-briefcase"> </span> Work Status</h2>
                        </div>
                        <div class="row mt-n4">
                            <div class="col-sm-6 col-xl-4 mt-4">
                                <div class="card text-center border-0 rounded-3">
                                    <div class="card-body">
                                        <i class="fas fa-tools icon-box medium rounded-3 mb-4"></i>
                                        <h3 class="h5 mb-3">{{$account_info->position_title}}</h3>
                                        <p class="mb-0">Designation</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4 mt-4">
                                <div class="card text-center border-0 rounded-3">
                                    <div class="card-body">
                                        <i class="fas fa-wallet icon-box medium rounded-3 mb-4"></i>
                                        <h3 class="h5 mb-3">{{$account_info->salary_grade}}</h3>
                                        <p class="mb-0">Salary Grade
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4 mt-4">
                                <div class="card text-center border-0 rounded-3">
                                    <div class="card-body">
                                        <i class="fas fa-chevron-circle-up icon-box medium rounded-3 mb-4"></i>
                                        <h3 class="h5 mb-3">{{$account_info->salary_step}}</h3>
                                        <p class="mb-0">Step</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
               <h6> &copy; Department Of Education Region 4A CALABARZON </h6>
        </div>
  </footer>
    <style type="text/css">
        body {
            margin-top: 20px;
        }

        .icon-box.medium {
            font-size: 20px;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        .icon-box {
            font-size: 30px;
            margin-bottom: 33px;
            display: inline-block;
            color: #ffffff;
            height: 65px;
            width: 65px;
            line-height: 65px;
            background-color: #59b73f;
            text-align: center;
            border-radius: 0.3rem;
        }

        .social-icon-style2 li a {
            display: inline-block;
            font-size: 14px;
            text-align: center;
            color: #ffffff;
            background: #59b73f;
            height: 41px;
            line-height: 41px;
            width: 41px;
        }

        .rounded-3 {
            border-radius: 0.3rem !important;
        }

        .social-icon-style2 {
            margin-bottom: 0;
            display: inline-block;
            padding-left: 10px;
            list-style: none;
        }

        .social-icon-style2 li {
            vertical-align: middle;
            display: inline-block;
            margin-right: 5px;
        }

        a,
        a:active,
        a:focus {
            color: #616161;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }

        .text-secondary,
        .text-secondary-hover:hover {
            color: #59b73f !important;
        }

        .display-25 {
            font-size: 1.4rem;
        }

        .text-primary,
        .text-primary-hover:hover {
            color: #ff712a !important;
        }

        p {
            margin: 0 0 20px;
        }

        .mb-1-6,
        .my-1-6 {
            margin-bottom: 1.6rem;
        }
        .footer {
           position: fixed;
           left: 0;
           bottom: 0;
           width: 100%;
           background-color: #1F1A19;
           color: white;
           text-align: center;
           opacity: .5;
           height: 60px;
        }
        .footer-content h6{
            font-weight: 200;
            line-height: 3rem;
            padding: 10px;
        }
        @media screen and (max-width: 600px) {
          
            .footer-content h6{
                font-size: 10pt;
                line-height: 2rem;
            }
            .footer{
                height: 50px;
            }
        }
    </style>
</body>

</html>