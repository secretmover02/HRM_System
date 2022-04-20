<li class="nav-item nav-profile">
  <a href="#" class="nav-link">
    <div class="text-wrapper">
      <p class="profile-name">{{ Auth::user()->name}}</p>
      <p class="designation">Administrator</p>
    </div>
  </a>
</li>
<li class="nav-item nav-category">
  <span class="nav-link">Tools</span>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{route('home')}}">
    <span class="menu-title">Dashboard</span>
    <i class="icon-screen-desktop menu-icon"></i>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#pds" aria-expanded="false" aria-controls="pds">
    <span class="menu-title">Personal Data Sheet</span>
    <i class="icon-notebook menu-icon"></i>
  </a>
  <div class="collapse" id="pds">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item"> <a class="nav-link" href="{{ route('/PersonalInfo', ['ticket_id' => Auth::user()->name , 'index' => Auth::user()->id_number  ]) }}"> Personal Information </a></li>
      <li class="nav-item"> <a class="nav-link" href="{{ route('/FamilyBackground', ['ticket_id' => Auth::user()->name , 'index' => Auth::user()->id_number  ]) }}"> Family Background </a></li>
      <li class="nav-item"> <a class="nav-link" href="{{ route('/EducationalBackground', ['ticket_id' => Auth::user()->name , 'index' => Auth::user()->id_number  ]) }}"> Educational Background </a></li>
      <li class="nav-item"> <a class="nav-link" href="{{ route('/ELigibility', ['ticket_id' => Auth::user()->name , 'index' => Auth::user()->id_number  ]) }}"> ELigibility </a></li>
      <li class="nav-item"> <a class="nav-link" href="{{ route('/WorkExperience', ['ticket_id' => Auth::user()->name , 'index' => Auth::user()->id_number  ]) }}"> Work Experience </a></li>
      <li class="nav-item"> <a class="nav-link" href="{{ route('/Affiliation', ['ticket_id' => Auth::user()->name , 'index' => Auth::user()->id_number  ]) }}"> Affiliation / Involvement</a></li>
      <li class="nav-item"> <a class="nav-link" href="{{ route('/Training', ['ticket_id' => Auth::user()->name , 'index' => Auth::user()->id_number  ]) }}"> Learning &amp Development </a></li>
      <li class="nav-item"> <a class="nav-link" href=""> Other Information </a></li>
    </ul>
  </div>
</li>
<li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#my_file" aria-expanded="false" aria-controls="my_file">
    <span class="menu-title">My Files</span>
    <i class="icon-drawer menu-icon"></i>
  </a>
  <div class="collapse" id="my_file">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item"> <a class="nav-link" href=""> Personal</a> </li>
      <li class="nav-item"> <a class="nav-link" href=""> Office </a></li>
    </ul>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
    <span class="menu-title">Application</span>
    <i class="icon-layers menu-icon"></i>
  </a>
  <div class="collapse show" id="ui-basic">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item"> <a class="nav-link" href="">Leave</a></li>
      <li class="nav-item"> <a class="nav-link" href="">Retirement</a></li>
      <li class="nav-item"> <a class="nav-link" href="">Compensation</a></li>
    </ul>
  </div>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
    <span class="menu-title">Logout</span>
    <i class="icon-logout menu-icon"></i>
  </a>
</li>