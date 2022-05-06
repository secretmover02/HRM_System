<!DOCTYPE html>
<html lang="en">
  @include('user_employee.head', ['title' => 'Personal Information'])

  <style type="text/css">
    label{
      color:gray;
    }
    .required{
      font-size: 8pt;
      color:#F55367;
    }
    .form-control{
      margin-top: -5px;
      margin-bottom: 5px;
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
              <li class="breadcrumb-item active" aria-current="page">Personal Information</li>
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
            <form method="post" action="{{url('/PersonalInfo')}} " enctype="multipart/form-data">
              <input type="hidden" name="id_number" value="{{ Auth::user()->id_number}}">
              {{ csrf_field() }}
              @if(Session::get('success'))
                <script>
                  Swal.fire({
                    icon: 'success',
                    text: '{{Session::get('success')}}'
                    // text: 'Something went wrong!'
                  })
                </script>
              @endif
              <div class="row">
                <div class="col-md-3 col-lg-3 col-xl-3 col-sm-12">
                  <div class="card" style="border-top: 3px solid gray;">
                    <div class="profile d-flex justify-content-center mb-3 mt-3">
                        <img src="{{Auth::user()->profile}}" class="profile_pic rounded-circle border" id="img" height="200px" width="200px">
                    </div>
                    <div class="form-group p-3">
                      <label>Upload Profile</label>
                      <input type="file" name="profile"  class="form-control form-control-sm" accept='.jpeg, .png, .jpg' onchange='preview(event)'>
                    </div>
                  </div>
                </div>
                <div class="col-md-9 col-lg-9 col-xl-9 col-sm-12 second_column">
                  <div class="card p-3" >
                    <div class="form-group">
                      @include('user_employee.PDS.reminder')
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                        <label>First name <span class="required">(required)</span></label>
                        <input type="text" name="fname" class="form-control form-control-sm" value="{{$account_info->fname}}" required>
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Middle name</label>
                        <input type="text" name="mname" class="form-control form-control-sm" value="{{$account_info->mname}}">
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Last name <span class="required">(required)</span></label>
                        <input type="text" name="lname" class="form-control form-control-sm" value="{{$account_info->lname}}" required>
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Extension name</label>
                        <input type="text" name="extension" class="form-control form-control-sm" value="{{$account_info->name_extension}}" >
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Date of Birth</label>
                        <input type="date" name="birth_date" class="form-control form-control-sm" value="{{$account_info->birth_date}}">
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Place of Birth</label>
                        <input type="text" name="place_birth" class="form-control form-control-sm" value="{{$account_info->place_birth}}">
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Gender</label>
                        <select name="sex" class="form-control form-control-sm">
                          <option value="{{$account_info->sex}}">{{$account_info->sex}}</option>
                          @if($account_info->sex == 'Male')
                            <option value="Female">Female</option>
                          @elseif($account_info->sex == 'Female')
                            <option value="Male">Male</option>
                          @else
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                          @endif
                        </select>
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Civil Status</label>
                        <select name="civil_status" class="form-control form-control-sm">
                          <option value="{{$account_info->civil_status}}">{{$account_info->civil_status}}</option>
                          @if($account_info->civil_status == 'Single')
                            <option value="Widowed">Widowed</option>
                            <option value="Married">Married</option>
                            <option value="Separated">Separated</option>
                          @elseif($account_info->civil_status == 'Widowed')
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Separated">Separated</option>
                          @elseif($account_info->civil_status == 'Married')
                            <option value="Single">Single</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Separated">Separated</option>
                          @elseif($account_info->civil_status == 'Separated')
                            <option value="Single">Single</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Married">Married</option>
                          @else
                            <option value="Single">Single</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Married">Married</option>
                            <option value="Separated">Separated</option>
                          @endif
                        </select>
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Citizenship</label>
                        <select  name="citizenship" class="form-control form-control-sm">
                              <option value="{{$account_info->citizenship}}">{{$account_info->citizenship}}</option>
                               <option value="Afganistan">Afghanistan</option>
                               <option value="Albania">Albania</option>
                               <option value="Algeria">Algeria</option>
                               <option value="American Samoa">American Samoa</option>
                               <option value="Andorra">Andorra</option>
                               <option value="Angola">Angola</option>
                               <option value="Anguilla">Anguilla</option>
                               <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                               <option value="Argentina">Argentina</option>
                               <option value="Armenia">Armenia</option>
                               <option value="Aruba">Aruba</option>
                               <option value="Australia">Australia</option>
                               <option value="Austria">Austria</option>
                               <option value="Azerbaijan">Azerbaijan</option>
                               <option value="Bahamas">Bahamas</option>
                               <option value="Bahrain">Bahrain</option>
                               <option value="Bangladesh">Bangladesh</option>
                               <option value="Barbados">Barbados</option>
                               <option value="Belarus">Belarus</option>
                               <option value="Belgium">Belgium</option>
                               <option value="Belize">Belize</option>
                               <option value="Benin">Benin</option>
                               <option value="Bermuda">Bermuda</option>
                               <option value="Bhutan">Bhutan</option>
                               <option value="Bolivia">Bolivia</option>
                               <option value="Bonaire">Bonaire</option>
                               <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                               <option value="Botswana">Botswana</option>
                               <option value="Brazil">Brazil</option>
                               <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                               <option value="Brunei">Brunei</option>
                               <option value="Bulgaria">Bulgaria</option>
                               <option value="Burkina Faso">Burkina Faso</option>
                               <option value="Burundi">Burundi</option>
                               <option value="Cambodia">Cambodia</option>
                               <option value="Cameroon">Cameroon</option>
                               <option value="Canada">Canada</option>
                               <option value="Canary Islands">Canary Islands</option>
                               <option value="Cape Verde">Cape Verde</option>
                               <option value="Cayman Islands">Cayman Islands</option>
                               <option value="Central African Republic">Central African Republic</option>
                               <option value="Chad">Chad</option>
                               <option value="Channel Islands">Channel Islands</option>
                               <option value="Chile">Chile</option>
                               <option value="China">China</option>
                               <option value="Christmas Island">Christmas Island</option>
                               <option value="Cocos Island">Cocos Island</option>
                               <option value="Colombia">Colombia</option>
                               <option value="Comoros">Comoros</option>
                               <option value="Congo">Congo</option>
                               <option value="Cook Islands">Cook Islands</option>
                               <option value="Costa Rica">Costa Rica</option>
                               <option value="Cote DIvoire">Cote DIvoire</option>
                               <option value="Croatia">Croatia</option>
                               <option value="Cuba">Cuba</option>
                               <option value="Curaco">Curacao</option>
                               <option value="Cyprus">Cyprus</option>
                               <option value="Czech Republic">Czech Republic</option>
                               <option value="Denmark">Denmark</option>
                               <option value="Djibouti">Djibouti</option>
                               <option value="Dominica">Dominica</option>
                               <option value="Dominican Republic">Dominican Republic</option>
                               <option value="East Timor">East Timor</option>
                               <option value="Ecuador">Ecuador</option>
                               <option value="Egypt">Egypt</option>
                               <option value="El Salvador">El Salvador</option>
                               <option value="Equatorial Guinea">Equatorial Guinea</option>
                               <option value="Eritrea">Eritrea</option>
                               <option value="Estonia">Estonia</option>
                               <option value="Ethiopia">Ethiopia</option>
                               <option value="Falkland Islands">Falkland Islands</option>
                               <option value="Faroe Islands">Faroe Islands</option>
                               <option value="Fiji">Fiji</option>
                               <option value="Finland">Finland</option>
                               <option value="France">France</option>
                               <option value="French Guiana">French Guiana</option>
                               <option value="French Polynesia">French Polynesia</option>
                               <option value="French Southern Ter">French Southern Ter</option>
                               <option value="Gabon">Gabon</option>
                               <option value="Gambia">Gambia</option>
                               <option value="Georgia">Georgia</option>
                               <option value="Germany">Germany</option>
                               <option value="Ghana">Ghana</option>
                               <option value="Gibraltar">Gibraltar</option>
                               <option value="Great Britain">Great Britain</option>
                               <option value="Greece">Greece</option>
                               <option value="Greenland">Greenland</option>
                               <option value="Grenada">Grenada</option>
                               <option value="Guadeloupe">Guadeloupe</option>
                               <option value="Guam">Guam</option>
                               <option value="Guatemala">Guatemala</option>
                               <option value="Guinea">Guinea</option>
                               <option value="Guyana">Guyana</option>
                               <option value="Haiti">Haiti</option>
                               <option value="Hawaii">Hawaii</option>
                               <option value="Honduras">Honduras</option>
                               <option value="Hong Kong">Hong Kong</option>
                               <option value="Hungary">Hungary</option>
                               <option value="Iceland">Iceland</option>
                               <option value="Indonesia">Indonesia</option>
                               <option value="India">India</option>
                               <option value="Iran">Iran</option>
                               <option value="Iraq">Iraq</option>
                               <option value="Ireland">Ireland</option>
                               <option value="Isle of Man">Isle of Man</option>
                               <option value="Israel">Israel</option>
                               <option value="Italy">Italy</option>
                               <option value="Jamaica">Jamaica</option>
                               <option value="Japan">Japan</option>
                               <option value="Jordan">Jordan</option>
                               <option value="Kazakhstan">Kazakhstan</option>
                               <option value="Kenya">Kenya</option>
                               <option value="Kiribati">Kiribati</option>
                               <option value="Korea North">Korea North</option>
                               <option value="Korea Sout">Korea South</option>
                               <option value="Kuwait">Kuwait</option>
                               <option value="Kyrgyzstan">Kyrgyzstan</option>
                               <option value="Laos">Laos</option>
                               <option value="Latvia">Latvia</option>
                               <option value="Lebanon">Lebanon</option>
                               <option value="Lesotho">Lesotho</option>
                               <option value="Liberia">Liberia</option>
                               <option value="Libya">Libya</option>
                               <option value="Liechtenstein">Liechtenstein</option>
                               <option value="Lithuania">Lithuania</option>
                               <option value="Luxembourg">Luxembourg</option>
                               <option value="Macau">Macau</option>
                               <option value="Macedonia">Macedonia</option>
                               <option value="Madagascar">Madagascar</option>
                               <option value="Malaysia">Malaysia</option>
                               <option value="Malawi">Malawi</option>
                               <option value="Maldives">Maldives</option>
                               <option value="Mali">Mali</option>
                               <option value="Malta">Malta</option>
                               <option value="Marshall Islands">Marshall Islands</option>
                               <option value="Martinique">Martinique</option>
                               <option value="Mauritania">Mauritania</option>
                               <option value="Mauritius">Mauritius</option>
                               <option value="Mayotte">Mayotte</option>
                               <option value="Mexico">Mexico</option>
                               <option value="Midway Islands">Midway Islands</option>
                               <option value="Moldova">Moldova</option>
                               <option value="Monaco">Monaco</option>
                               <option value="Mongolia">Mongolia</option>
                               <option value="Montserrat">Montserrat</option>
                               <option value="Morocco">Morocco</option>
                               <option value="Mozambique">Mozambique</option>
                               <option value="Myanmar">Myanmar</option>
                               <option value="Nambia">Nambia</option>
                               <option value="Nauru">Nauru</option>
                               <option value="Nepal">Nepal</option>
                               <option value="Netherland Antilles">Netherland Antilles</option>
                               <option value="Netherlands">Netherlands (Holland, Europe)</option>
                               <option value="Nevis">Nevis</option>
                               <option value="New Caledonia">New Caledonia</option>
                               <option value="New Zealand">New Zealand</option>
                               <option value="Nicaragua">Nicaragua</option>
                               <option value="Niger">Niger</option>
                               <option value="Nigeria">Nigeria</option>
                               <option value="Niue">Niue</option>
                               <option value="Norfolk Island">Norfolk Island</option>
                               <option value="Norway">Norway</option>
                               <option value="Oman">Oman</option>
                               <option value="Pakistan">Pakistan</option>
                               <option value="Palau Island">Palau Island</option>
                               <option value="Palestine">Palestine</option>
                               <option value="Panama">Panama</option>
                               <option value="Papua New Guinea">Papua New Guinea</option>
                               <option value="Paraguay">Paraguay</option>
                               <option value="Peru">Peru</option>
                               <option value="Phillipines">Philippines</option>
                               <option value="Pitcairn Island">Pitcairn Island</option>
                               <option value="Poland">Poland</option>
                               <option value="Portugal">Portugal</option>
                               <option value="Puerto Rico">Puerto Rico</option>
                               <option value="Qatar">Qatar</option>
                               <option value="Republic of Montenegro">Republic of Montenegro</option>
                               <option value="Republic of Serbia">Republic of Serbia</option>
                               <option value="Reunion">Reunion</option>
                               <option value="Romania">Romania</option>
                               <option value="Russia">Russia</option>
                               <option value="Rwanda">Rwanda</option>
                               <option value="St Barthelemy">St Barthelemy</option>
                               <option value="St Eustatius">St Eustatius</option>
                               <option value="St Helena">St Helena</option>
                               <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                               <option value="St Lucia">St Lucia</option>
                               <option value="St Maarten">St Maarten</option>
                               <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                               <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                               <option value="Saipan">Saipan</option>
                               <option value="Samoa">Samoa</option>
                               <option value="Samoa American">Samoa American</option>
                               <option value="San Marino">San Marino</option>
                               <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                               <option value="Saudi Arabia">Saudi Arabia</option>
                               <option value="Senegal">Senegal</option>
                               <option value="Seychelles">Seychelles</option>
                               <option value="Sierra Leone">Sierra Leone</option>
                               <option value="Singapore">Singapore</option>
                               <option value="Slovakia">Slovakia</option>
                               <option value="Slovenia">Slovenia</option>
                               <option value="Solomon Islands">Solomon Islands</option>
                               <option value="Somalia">Somalia</option>
                               <option value="South Africa">South Africa</option>
                               <option value="Spain">Spain</option>
                               <option value="Sri Lanka">Sri Lanka</option>
                               <option value="Sudan">Sudan</option>
                               <option value="Suriname">Suriname</option>
                               <option value="Swaziland">Swaziland</option>
                               <option value="Sweden">Sweden</option>
                               <option value="Switzerland">Switzerland</option>
                               <option value="Syria">Syria</option>
                               <option value="Tahiti">Tahiti</option>
                               <option value="Taiwan">Taiwan</option>
                               <option value="Tajikistan">Tajikistan</option>
                               <option value="Tanzania">Tanzania</option>
                               <option value="Thailand">Thailand</option>
                               <option value="Togo">Togo</option>
                               <option value="Tokelau">Tokelau</option>
                               <option value="Tonga">Tonga</option>
                               <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                               <option value="Tunisia">Tunisia</option>
                               <option value="Turkey">Turkey</option>
                               <option value="Turkmenistan">Turkmenistan</option>
                               <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                               <option value="Tuvalu">Tuvalu</option>
                               <option value="Uganda">Uganda</option>
                               <option value="United Kingdom">United Kingdom</option>
                               <option value="Ukraine">Ukraine</option>
                               <option value="United Arab Erimates">United Arab Emirates</option>
                               <option value="United States of America">United States of America</option>
                               <option value="Uraguay">Uruguay</option>
                               <option value="Uzbekistan">Uzbekistan</option>
                               <option value="Vanuatu">Vanuatu</option>
                               <option value="Vatican City State">Vatican City State</option>
                               <option value="Venezuela">Venezuela</option>
                               <option value="Vietnam">Vietnam</option>
                               <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                               <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                               <option value="Wake Island">Wake Island</option>
                               <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                               <option value="Yemen">Yemen</option>
                               <option value="Zaire">Zaire</option>
                               <option value="Zambia">Zambia</option>
                               <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Mobile Phone</label>
                        <input type="text" name="mobile_no" class="form-control form-control-sm" value="{{$account_info->mobile_no}}">
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Telephone Number</label>
                        <input type="text" name="telephone_no" class="form-control form-control-sm" value="{{$account_info->telephone_no}}">
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <div class="row">
                          <div class="col-6">
                            <label>Height</label>
                            <input type="number" name="height" class="form-control form-control-sm" value="{{$account_info->height}}">
                            <label style="font-weight: bold; margin-left: 40px; position: absolute; top: 37px; color: gray;" >(cm)</label>
                          </div>
                          <div class="col-6">
                            <label>Weight</label>
                            <input type="number" name="weight" class="form-control form-control-sm" value="{{$account_info->weight}}">
                            <label style="font-weight: bold; margin-left: 45px; position: absolute; top: 37px; color: gray;" >(Kg)</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>GSIS No.</label>
                        <input type="text" name="gsis_no" class="form-control form-control-sm" value="{{$account_info->gsis_no}}">
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Pag Ibig No.</label>
                        <input type="text" name="pag_ibig_no" class="form-control form-control-sm" value="{{$account_info->pag_ibig_no}}">
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Philhealth No.</label>
                        <input type="text" name="philhealth_no" class="form-control form-control-sm" value="{{$account_info->philhealth_no}}">
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>SSS No.</label>
                        <input type="text" name="sss_no" class="form-control form-control-sm" value="{{$account_info->sss_no}}">
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>TIN No.</label>
                        <input type="text" name="tin_no" class="form-control form-control-sm" value="{{$account_info->tin_no}}">
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Agency/Employee No.</label>
                        <input type="text" name="agency_employee_no" class="form-control form-control-sm" value="{{$account_info->agency_employee_no}}">
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Blood Type</label>
                        <select name="blood_type" class="form-control form-control-sm">
                          <option value="{{$account_info->blood_type}}">{{$account_info->blood_type}}</option>
                          <option value="A+">A+</option>
                          <option value="A-">A-</option>
                          <option value="B+">B+</option>
                          <option value="B-">B-</option>
                          <option value="O+">O+</option>
                          <option value="O-">O-</option>
                          <option value="AB+">AB+</option>
                          <option value="AB-">AB-</option>
                        </select>
                      </div>
                    </div>
                    <div class="mt-1 ml-1" style="border-left: 3px solid #B53432; border-top-left-radius: 5px;">
                      <H6 class="ml-2">Contact Person <label class="ml-1">( In case of Emergency )</label></H6>
                      <div class="pl-1 pr-1 row">
                        <div class="col-12 col-md-4 col-lg-4 col-xl-4 ">
                          <label>Full Name</label>
                          <input type="text" name="contact_person_name" class="form-control form-control-sm" value="{{$account_info->contact_person_name}}">
                        </div>
                        <div class="col-12 col-md-4 col-lg-4 col-xl-4 ">
                          <label>Address</label>
                          <input type="text" name="contact_person_address" class="form-control form-control-sm" value="{{$account_info->contact_person_address}}">
                        </div>
                        <div class="col-12 col-md-4 col-lg-4 col-xl-4 ">
                          <label>Address</label>
                          <input type="text" name="contact_person_number" class="form-control form-control-sm" value="{{$account_info->contact_person_number}}">
                        </div>
                      </div>
                    </div>
                    <H6 class="mt-3">Permanent Address <span class="required">(required)</span></H6>
                    <div class="row">
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>House / Block No. </label>
                        <input type="text" name="house_no1" id="house_no1" class="form-control form-control-sm" value="{{$address1->house_no}}">
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Street</label>
                        <input type="text" name="street1" id="street1" class="form-control form-control-sm" value="{{$address1->street}}">
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Subdivision / Village</label>
                          <input type="text" name="subdivision1" id="subdivision1" class="form-control form-control-sm" value="{{$address1->subdivision}}">
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Barangay</label>
                        <input type="text" name="brgy1" id="brgy1" class="form-control form-control-sm" value="{{$address1->brgy}}"  required>
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>City / Municipality</label>
                        <input type="text" name="city1" id="city1" class="form-control form-control-sm" value="{{$address1->city}}"  required>
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Province</label>
                        <input type="text" name="province1" id="province1" class="form-control form-control-sm" value="{{$address1->province}}"  required>
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Zipcode</label>
                        <input type="text" name="zipcode1" id="zipcode1" class="form-control form-control-sm" value="{{$address1->zipcode}}" required>
                      </div>
                    </div>

                    <div class="form-inline mt-2"><H6 class="mt-2">Present Address <span class="required">(required)</span></H6>
                      <label class="ml-2 text-dark">( <input type="checkbox" onchange='handleChange(this);' name="present_address" class="ml-1 mr-1">Same as Pemanent )</label>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>House / Block No.</label>
                        <input type="text" name="house_no2" id="house_no2" class="form-control form-control-sm" value="{{$address2->house_no}}">
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Street</label>
                        <input type="text" name="street2" id="street2" class="form-control form-control-sm" value="{{$address2->street}}">
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Subdivision / Village</label>
                        <input type="text" name="subdivision2" id="subdivision2" class="form-control form-control-sm" value="{{$address2->subdivision}}">
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Barangay</label>
                        <input type="text" name="brgy2" id="brgy2" class="form-control form-control-sm" value="{{$address2->brgy}}"  required>
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>City / Municipality</label>
                        <input type="text" name="city2" id="city2" class="form-control form-control-sm" value="{{$address2->city}}"  required>
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Province</label>
                        <input type="text" name="province2" id="province2" class="form-control form-control-sm" value="{{$address2->province}}"  required>
                      </div>
                      <div class="col-6 col-md-3 col-lg-3 col-xl-3 ">
                        <label>Zipcode</label>
                        <input type="text" name="zipcode2" id="zipcode2" class="form-control form-control-sm" value="{{$address2->zipcode}}" required>
                      </div>
                    </div>
                    <div class="mt-2">
                      <button type="submit" class="btn btn-sm btn-dark">Save</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          @include('user_employee.footer')
        </div>
      </div>
    @include('user_employee.script')
    <script type="text/javascript">
      //for same address checkbox
      function handleChange(checkbox) {
          if(checkbox.checked == true){
              document.getElementById("house_no2").value = document.getElementById("house_no1").value;
              document.getElementById("street2").value = document.getElementById("street1").value;
              document.getElementById("subdivision2").value = document.getElementById("subdivision1").value;
              document.getElementById("brgy2").value = document.getElementById("brgy1").value;
              document.getElementById("city2").value = document.getElementById("city1").value;
              document.getElementById("province2").value = document.getElementById("province1").value;
              document.getElementById("zipcode2").value = document.getElementById("zipcode1").value;
          }else{
              document.getElementById("house_no2").value = null;
              document.getElementById("street2").value = null;
              document.getElementById("subdivision2").value = null;
              document.getElementById("brgy2").value = null;
              document.getElementById("city2").value = null;
              document.getElementById("province2").value = null;
              document.getElementById("zipcode2").value = null;
         }
      }
      // ito ay sa preview ng image
       function preview(event){
        var input = event.target.files[0];
        var reader = new FileReader();
        reader.onload = function(){
          var result = reader.result;
          var img = document.getElementById('img');
          img.src = result;
        }
        reader.readAsDataURL(input);
       }
    </script>
  </body>
</html>