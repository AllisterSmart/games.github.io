  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.dashboard')}}">
          <i class="bi bi-house-door"></i>
          <span>Dashboard</span>
        </a>
        
        <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('banner')}}">
          <i class="bi-person-plus-fill"></i>
          <span>Banner</span>
        </a>
      </li><!-- End Players Page Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('userlist')}}">
          <i class="bi bi-people"></i>
          <span>Users</span>
        </a> 
      </li><!-- End Profile Page Nav -->

      </li><!-- End Dashboard Nav -->
      <!-- <li class="nav-heading">Tournament App</li> -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Tournament</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('tournaments')}}">
              <i class="bi bi-circle"></i><span>Add New Tournament</span>
            </a>
          </li>
          <li>
            <a href="{{route('ongoingtournament')}}">
              <i class="bi bi-circle"></i><span>Ongoing Tournaments</span>
            </a>
          </li>
          <li>
            <a href="{{route('tournamentresult')}}">
              <i class="bi bi-circle"></i><span>Tournament Results</span>
            </a>
          </li>
          <li>
            <a href="{{route('upcomingtournament')}}">
              <i class="bi bi-circle"></i><span>Upcoming Tournaments</span>
            </a>
          </li>
          <li>
            <a href="{{route('oflinepayment')}}">
              <i class="bi bi-circle"></i><span>Ofline Payments</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-joystick"></i><span>Games</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('creategames')}}">
              <i class="bi bi-circle"></i><span>Add New Game</span>
            </a>
          </li>
          <li>
            <a href="{{route('games')}}">
              <i class="bi bi-circle"></i><span>Games List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('category')}}">
          <i class="bi-tags"></i>
          <span>Category</span>
        </a>
      </li><!-- End Categirt Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('players')}}">
          <i class="bi-person-plus-fill"></i>
          <span>Players</span>
        </a>
      </li><!-- End Players Page Nav -->

<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Locations</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('createloction')}}">
              <i class="bi bi-circle"></i><span>Add Location</span>
            </a>
          </li>
          <li>
            <a href="{{route('loction')}}">
              <i class="bi bi-circle"></i><span>Location List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('withdrawrequest')}}">
          <i class="bi bi-credit-card"></i>
          <span>Withdraw Requests</span>
        </a>
      </li><!-- End Withdraw Requests Page Nav -->

       <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('transactions')}}">
          <i class="bi bi-credit-card"></i>
          <span>User Transactions</span>
        </a>
      </li><!-- End User Transactions Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#notification" data-bs-toggle="collapse" href="#">
          <i class="bi-bell-fill"></i><span>Send Notification</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="notification" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('createnotification')}}">
              <i class="bi bi-circle"></i><span>Send Notification</span>
            </a>
          </li>
          <li>
            <a href="{{route('notification')}}">
              <i class="bi bi-circle"></i><span>Notification List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Notification Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('maindata')}}">
          <i class="bi bi-database"></i>
          <span>Main Data</span>
        </a>
      </li><!-- End Main Data Page Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('team')}}">
          <i class="bi bi-people"></i>
          <span>Our Team</span>
        </a>
      </li><!-- End Main Data Page Nav -->
  </aside><!-- End Sidebar-->