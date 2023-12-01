<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="{{ route('property')}}">
              <i class="mdi mdi-flag menu-icon"></i>
              <span class="menu-title">Properties</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="{{ route('leads')}}">
              <i class="mdi mdi-eye menu-icon"></i>
              <span class="menu-title">Lead Account</span>
            </a>
          </li> -->
          <li class="nav-item"> 
            <a class="nav-link" href="{{ route('reservation.list')}}">
              <i class="mdi mdi-flag menu-icon"></i>
              <span class="menu-title">Reservation</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('appointments.list')}}">
              <i class="mdi mdi-calendar menu-icon"></i>
              <span class="menu-title">Appointments</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact-us.list')}}">
              <i class="mdi mdi-message menu-icon"></i>
              <span class="menu-title">Contacts</span>
            </a>
          </li>



        </ul>
      </nav>






      <!-- ?  dropdown

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">Categories</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>



       -->