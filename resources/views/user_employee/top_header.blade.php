<ul class="navbar-nav navbar-nav-right ml-auto">
  <li class="nav-item dropdown">
    <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
      <i class="icon-speech"></i>
      <span class="count">7</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
      <a class="dropdown-item py-3">
        <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
        <span class="badge badge-pill badge-primary float-right">View all</span>
      </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item preview-item">
        <div class="preview-thumbnail">
          <img src="../../images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
        </div>
        <div class="preview-item-content flex-grow py-2">
          <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
          <p class="font-weight-light small-text"> The meeting is cancelled </p>
        </div>
      </a>
      <a class="dropdown-item preview-item">
        <div class="preview-thumbnail">
          <img src="../../images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
        </div>
        <div class="preview-item-content flex-grow py-2">
          <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
          <p class="font-weight-light small-text"> The meeting is cancelled </p>
        </div>
      </a>
      <a class="dropdown-item preview-item">
        <div class="preview-thumbnail">
          <img src="../../images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
        </div>
        <div class="preview-item-content flex-grow py-2">
          <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
          @if(Auth::user()->name == 'Melvin D. Punzalan')
             <p class="font-weight-light small-text"> This is Melvin</p>
          @else
            <p class="font-weight-light small-text"> The meeting is cancelled </p>
          @endif
        </div>
      </a>
    </div>
  </li>
  <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
      <img class="img-xs rounded-circle ml-2" src="{{ asset(Auth::user()->profile)}}" height="50px" width="50px" alt="Profile image"> <span class="font-weight-normal"> {{ Auth::user()->name}} </span></a>
    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
      <div class="dropdown-header text-center">
        <img class="img-md rounded-circle" src="{{ asset(Auth::user()->profile)}}" height="105px" width="100px" alt="Profile image">
        <p class="mb-1 mt-3">{{ Auth::user()->name}}</p>
        <p class="font-weight-light text-muted mb-0">{{ Auth::user()->email}}</p>
      </div>
      <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
      <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
      <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
      <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
      <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
      </form>
    </div>
  </li>
</ul>