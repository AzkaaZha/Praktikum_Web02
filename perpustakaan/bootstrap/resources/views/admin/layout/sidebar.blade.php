<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile">
          <a href="#" class="nav-link">
            <div class="nav-profile-image">
              <img src="{{ asset('admin/assets/images/faces/face1.jpg') }}" alt="profile">
              <span class="login-status online"></span>
              <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex flex-column">
              <span class="font-weight-bold mb-2">Azka Zharari</span>
              <span class="text-secondary text-small">Project Manager</span>
            </div>
            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/dashboard')}}">
            <span class="menu-title">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/daftar_buku')}}">
            <span class="menu-title">Daftar Buku</span>
            <i class="mdi mdi-book-open-page-variant menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/daftar_anggota')}}">
            <span class="menu-title">Daftar Anggota</span>
            <i class="mdi mdi-folder-account menu-icon"></i>
          </a>
        </li>
 
      </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">