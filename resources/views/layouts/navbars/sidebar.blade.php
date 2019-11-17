<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      {{-- <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}"> --}}
      
      {{-- modified --}}
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management' || true) ? ' active' : '' }}">
      
        {{-- <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true"> --}}
        
        {{-- modified--}}
        <a class="nav-link" data-toggle="collapse" href="#people" aria-expanded="false">
        
          {{-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> --}}
          <i class="material-icons">people</i>
          <p>{{ __('People') }}
            <b class="caret"></b>
          </p>
        </a>
        {{-- <div class="collapse show" id="laravelExample"> --}}
        <div class="collapse" id="people">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              {{-- <a class="nav-link" href="{{ route('profile.edit') }}"> --}}
              <a class="nav-link" href="{{ route('people.create') }}">
                {{-- <span class="sidebar-mini"> UP </span> --}}
				<i class="material-icons">note_add</i>
                <span class="sidebar-normal">{{ __('Register') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('people.index') }}">
                {{-- <span class="sidebar-mini"> UM </span> --}}
				<i class="material-icons">list</i>
                <span class="sidebar-normal"> {{ __('List') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      
	  <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#patient" aria-expanded="true">
          <i class="material-icons">pregnant_woman</i>
          <p>{{ __('Patient') }}
            <b class="caret"></b>
          </p>
        </a>
        {{-- <div class="collapse show" id="Patient"> --}}
        <div class="collapse" id="patient">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('patient.create') }}">
				<i class="material-icons">note_add</i>
                <span class="sidebar-normal">{{ __('Register') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('patient.index') }}">
				<i class="material-icons">list</i>
                <span class="sidebar-normal"> {{ __('List') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      
	  <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#doctor" aria-expanded="true">
          <i class="material-icons">next_week</i>
          <p>{{ __('Doctor') }}
            <b class="caret"></b>
          </p>
        </a>
        {{-- <div class="collapse show" id="Doctor"> --}}
        <div class="collapse" id="doctor">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('doctor.create') }}">
				<i class="material-icons">note_add</i>
                <span class="sidebar-normal">{{ __('Register') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('doctor.index') }}">
				<i class="material-icons">list</i>
                <span class="sidebar-normal"> {{ __('List') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      
	  <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#receptionist" aria-expanded="true">
          <i class="material-icons">create</i>
          <p>{{ __('Receptionist') }}
            <b class="caret"></b>
          </p>
        </a>
        {{-- <div class="collapse show" id="receptionist"> --}}
        <div class="collapse" id="receptionist">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('receptionist.create') }}">
				<i class="material-icons">note_add</i>
                <span class="sidebar-normal">{{ __('Register') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('receptionist.index') }}">
				<i class="material-icons">list</i>
                <span class="sidebar-normal"> {{ __('List') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      
      {{--
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>
      <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('upgrade') }}">
          <i class="material-icons">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li>
	  --}}
    </ul>
  </div>
</div>