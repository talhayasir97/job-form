<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />
  <title>Admin Panel</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css" />
  <link rel="stylesheet" href="assets/bundles/morris/morris.css" />

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/components.css" />
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css" />
  <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png" /> -->
  <link rel="stylesheet" href="[path/to/css/feathericon.min.css" />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline">
          <ul class="navbar-nav">
            <li>
              <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
                <i data-feather="align-justify"></i></a>
            </li>
            <li>
              <a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a>
            </li>
            <li>
                <form class="form-inline mr-auto">
                  <div class="search-element">
                    <input
                      class="form-control"
                      type="search"
                      placeholder="Search"
                      aria-label="Search"
                      data-width="200"
                    />
                    <button class="btn" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </form>
              </li>
          </ul>
        </div>
        <div class="mx-auto">
          <span class="brand-name">Job Form Admin Panel</span>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="assets/img/user.png" class="user-img-radious-style" />
              <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Job Form Admin Panel</div>
              <a href="profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="timeline.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i>
                Activities
              </a>
              <a href="./profile.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="./login.html" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <!------------------------------------------- Main Side bar ------------------------------------------>

      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">
              <!-- <img alt="image" src="assets/img/logo.png" class="header-logo" /> -->
              <span class="logo-name">Admin</span>
            </a>
          </div>

          <!----------------------------------------- Dashboard -------------------------------------------->

          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <!------------------------------------- Student Management System ------------------------------>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>Students</span></a>
              <ul class="dropdown-menu">
                <li>
                  <a class="nav-link" href="">Student List</a>
                </li>
                <li>
                  <a class="nav-link" href="">Student Add</a>
                </li>
              </ul>
            </li>

            <!------------------------------------- Teacher Management System ------------------------------>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>Teachers</span></a>
              <ul class="dropdown-menu">
                <li>
                  <a class="nav-link" href="">Teacher List</a>
                </li>
                <li>
                  <a class="nav-link" href="">Teacher Add</a>
                </li>
              </ul>
            </li>

            <!------------------------------------- Attendence Management System --------------------------->

            <li class="menu-header">Attendence</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="users"></i><span>Student
                  Attendence</span></a>
              <ul class="dropdown-menu">
                <li>
                  <a class="nav-link" href="./allClassesAttendence.html">
                    All Classes</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a class=" " href="./timetable.html"><i data-feather="grid"></i><span>Timetable</span></a>
            </li>

            <!------------------------------------- Fee Management System ---------------------------------->

            <li class="menu-header">Fee Management</li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="dollar-sign"></i><span>Fee
                  Management</span></a>
              <ul class="dropdown-menu">
                <li>
                  <a class="nav-link" href="./allStudentFee.html">All Student Fee</a>
                </li>
                <li>
                  <a class="nav-link" href="./invoice.html"> Student Fee</a>
                </li>
              </ul>
            </li>

            <!------------------------------------- Fee Management System ---------------------------------->

            <li class="menu-header">Announcement</li>

            <li class="dropdown">
              <a class=" " href="./announcement.html"><i data-feather="clipboard"></i><span>Announcement</span></a>
            </li>
          </ul>
        </aside>
      </div>

    </div>
  </div>
  </section>
  
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/morris/morris.min.js"></script>
  <script src="assets/bundles/morris/raphael-min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/chart-morris.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/chart-apexcharts.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>
</html>