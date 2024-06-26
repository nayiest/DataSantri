<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical Navbar - Mazer Admin Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('template/dist') }}/assets/compiled/svg/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">
    <link rel="stylesheet" href="{{ asset('template/dist') }}/assets/compiled/css/app.css">
    <script src="https://kit.fontawesome.com/14732ec0b9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('template/dist') }}/assets/compiled/css/app-dark.css">
</head>

<body>
    <script src="{{ asset('template/dist/assets') }}/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center" >
                        <div class="logo">
                            <a href=" {{ route('santri') }}">IB Data</a>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                role="img" class="iconify iconify--system-uicons" width="20" height="20"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item ">
                            <a href="{{ route('dashboard') }}" class='sidebar-link '>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('santri') }}" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Data Santri</span>
                            </a>            
                        </li>
                        <li class="sidebar-item ">
                            <a href="{{ route('pelanggaran') }}" class='sidebar-link'>
                                <i class="bi bi-exclamation-triangle"></i>
                                <span>Pelanggaran</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="{{ route('prestasi') }}" class='sidebar-link'>
                                <i class="bi bi-trophy"></i>
                            <span>prestasi</span>
                            </a>
                        </li>
                        <li class="sidebar-item ">
                            <a href="{{ route('mutabaah') }}" class='sidebar-link'>
                                <i class="bi bi-calendar"></i>
                            <span>Mutabaah Santri</span>
                            </a>
                        </li>
                        <li class="sidebar-item active">
                            <a href="{{ route('nilai') }}" class='sidebar-link'>
                                <i class="bi bi-award"></i>
                            <span>Nilai Santri</span>
                            </a>
                        </li>   
                    </ul>
                </div>
            </div>
        </div>
        <div id="main" class='layout-navbar navbar-fixed'>
            <header>
                <nav class="navbar navbar-expand navbar-light navbar-top">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-lg-0">
                                <li class="nav-item dropdown me-1">
                                    <a class="nav-link active dropdown-toggle text-gray-600" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class='bi bi-envelope bi-sub fs-4'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Mail</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">No new mail</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown me-3">
                                    <a class="nav-link active dropdown-toggle text-gray-600" href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                        <i class='bi bi-bell bi-sub fs-4'></i>
                                        <span class="badge badge-notification bg-danger">7</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end notification-dropdown" aria-labelledby="dropdownMenuButton">
                                        <li class="dropdown-header">
                                            <h6>Notifications</h6>
                                        </li>
                                        <li class="dropdown-item notification-item">
                                            <a class="d-flex align-items-center" href="#">
                                                <div class="notification-icon bg-primary">
                                                    <i class="bi bi-cart-check"></i>
                                                </div>
                                                <div class="notification-text ms-4">
                                                    <p class="notification-title font-bold">Successfully check out</p>
                                                    <p class="notification-subtitle font-thin text-sm">Order ID #256</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dropdown-item notification-item">
                                            <a class="d-flex align-items-center" href="#">
                                                <div class="notification-icon bg-success">
                                                    <i class="bi bi-file-earmark-check"></i>
                                                </div>
                                                <div class="notification-text ms-4">
                                                    <p class="notification-title font-bold">Homework submitted</p>
                                                    <p class="notification-subtitle font-thin text-sm">Algebra math homework</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <p class="text-center py-2 mb-0"><a href="#">See all notification</a></p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class=" mt-2" style="margin-right: 20px">
                                
                                <div class="dropdown">
                                        <button class="btn dropdown-toggle me-15" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                             <i class="fa-regular fa-address-book fs-4"></i>
                                        </button>
                                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton" >
                                            
                                            
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#tambahsantri">Tambah Santri</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#tambahpelanggaran">Tambah Pelanggaran</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#tambahprestasi">Tambah Prestasi</a>
                                        </div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600">John Ducky</h6>
                                            <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('template/dist') }}/assets/compiled/jpg/1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem;">
                                    <li>
                                        <h6 class="dropdown-header">Hello, John!</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                            Profile</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                            Settings</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i>
                                            Wallet</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="main-content">     
                
                
                      {{-- MODAL TAMBAH SANTRI --}}
                      <div class="modal fade text-left modal-borderless" id="tambahsantri" tabindex="-1"
                      role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title">Masukkan Data Santri</h5>
                                  <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                      aria-label="Close">
                                      <i data-feather="x"></i>
                                  </button>
                              </div>
                              <form method="post" action="{{ route('storetambah') }}" enctype="multipart/form-data">
                                  @csrf                                          
                                              <div class="card">
                                                  <div class="card-content">
                                                      <div class="card-body">
                                                          <form class="form form-horizontal">
                                                              <div class="form-body">
                                                                  <div class="row">
                                                                      <div class="col-md-4">
                                                                          <label for="nama_santri">Nama Lengkap</label>
                                                                      </div>
                                                                      <div class="col-md-8 form-group">
                                                                                  <input type="text" id="nama_santri" class="form-control"
                                                                                      placeholder="Nama Lengkap" name="nama_santri">
                                                                      </div>
                                                                      <div class="col-md-4">
                                                                          <label for="domisili_santri">Domisili</label>
                                                                      </div>
                                                                      <div class="col-md-8 form-group">
                                                                                  <input type="text" id="domisili_santri" class="form-control" placeholder="Domisili"
                                                                                      name="domisili_santri">
                                                                      </div>
                                                                      <div class="col-md-4">
                                                                          <label for="alamat_santri">Alamat Lengkap</label>
                                                                      </div>
                                                                      <div class="col-md-8 form-group">
                                                                          <input type="text" id="company-column" class="form-control"
                                                                                      name="alamat_santri" placeholder="Alamat Lengkap">
                                                                      </div>
                                                                      <div class="col-md-4">
                                                                          <label for="angkatan_santri">Angkatan</label>
                                                                      </div>
                                                                      <div class="col-md-8 form-group">
                                                                          <select class="form-select" id="inputGroupSelect01" name="angkatan_santri">
                                                                              <option selected>Pilih...</option>
                                                                              <option>Mustawa 1</option>
                                                                              <option>Mustawa 2</option>
                                                                              <option>Mustawa 3</option>
                                                                          </select>
                                                                      
                                                                      </div>
                                                                      <div class="col-md-4">
                                                                          <label for=" tgllahir_santri">Tanggal Lahir</label>
                                                                      </div>
                                                                      <div class="col-md-8 form-group">
                                                                          <input name="tgllahir_santri" id="tgllahir_santri" type="date" class="form-control flatpickr-no-config" placeholder="Select date..">                                                                
                                                                          
                                                                      </div>
                                                                      <div class="col-md-4">
                                                                          <label for="photo_santri">Photo Santri</label>
                                                                      </div>
                                                                      <div class="col-md-8 form-group">
                                                                              <input class="form-control" name="photo_santri" type="file" id="formFile">
                                                                      </div>
                                                                      <div class="col-md-4">
                                                                          <label for=" jk_santri">Jenis Kelamin</label>
                                                                      </div>
                                                                      <div class="col-md-8 form-group">
                                                                          <div class="form-check">
                                                                              <input class="form-check-input" type="radio" name="jk_santri" id="flexRadioDefault1" value="Ikhwan">
                                                                              <label class="form-check-label" for="flexRadioDefault1">
                                                                                  Ikhwan
                                                                              </label>
                                                                          </div>
                                                                          <div class="form-check">
                                                                              <input class="form-check-input" type="radio" name="jk_santri" id="flexRadioDefault1" value="Akhwat">
                                                                              <label class="form-check-label" for="flexRadioDefault1">
                                                                                  Akhwat
                                                                              </label>
                                                                          </div>  
                                                                      </div>
                                                                      
                                                                      <br>
                                                                     
                                                                  </div>
                                                              </div>
                                                          </form>
                                                      </div>
                                                      <div class="modal-footer">
                                                          <button type="button" class="btn btn-light-secondary"
                                                              data-bs-dismiss="modal">
                                                              <i class="bx bx-x d-block d-sm-none"></i>
                                                              <span class="d-none d-sm-block">Close</span>
                                                          </button>
                                                          <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                      </div>
                                                  </div>
                                              </div>        
                                                  
              
                              </form>
                              
                          </div>
                      </div>
                  </div>




                  {{-- MODAL PRESTASI --}}
                  <div class="modal fade text-left modal-borderless" id="tambahpelanggaran" tabindex="-1"
                      role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title">Masukkan Data Pelanggaran</h5>
                                  <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                      aria-label="Close">
                                      <i data-feather="x"></i>
                                  </button>
                              </div>
                              <form method="post" action="{{ route('storepelanggaran') }}" enctype="multipart/form-data">

                                  @csrf       
                                          {{-- <section id="multiple-column-form">
                                              <div class="row match-height">
                                                  <div class="col-12">
                                                      <div class="card">
                                                          <div class="card-content">
                                                              <div class="card-body">
                                                                  <form class="form">
                                                                      <div class="row">
                                                                         
                                                                          <div class="col-md-6 col-12">
                                                                              <div class="mb-3">
                                                                                  <label for="first-name-column">nama_santri</label>
                                                                                  <input type="text" id="first-name-column" class="form-control"
                                                                                      placeholder="Nama santri" name="nama_santri">
                                                                              </div>
                                                                          </div> 
              
                                                                          <div class="col-md-6 col-12">
                                                                              <div class="mb-3">
                                                                                  <label for="first-name-column">Jenis Pelanggaran</label>
                                                                                  <input type="text" id="first-name-column" class="form-control"
                                                                                      placeholder="Nama pelanggaran" name="nama_pelanggaran">
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-md-6 col-12">
                                                                              <div class="mb-3">
                                                                                  <label for="first-name-column">Kategori Pelanggaran</label>
                                                                                  <input type="text" id="first-name-column" class="form-control"
                                                                                      placeholder="Kategori pelanggaran" name="kategori_pelanggaran">
                                                                              </div>
                                                                          </div>
                                                                          
                                                                          
                                                                          <div class="col-12 d-flex justify-content-end">
                                                                              <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                                              
                                                                          </div>
                                                                      </div>
                                                                  </form>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </section> --}}
                                                          
                                          <div class="card">
                                              <div class="card-content">
                                                  <div class="card-body">
                                                      <form class="form form-horizontal">
                                                          <div class="form-body">
                                                              <div class="row">
                                                                  <div class="col-md-4">
                                                                      <label for="nama_santri">Nama Santri</label>
                                                                  </div>
                                                                  <div class="col-md-8 form-group">
                                                                              <input type="text" id="nama_santri" class="form-control"
                                                                                  placeholder="Nama Santri" name="nama_santri">
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <label for="nama_pelanggaran">Pelanggaran</label>
                                                                  </div>
                                                                  <div class="col-md-8 form-group">
                                                                              <input type="text" id="nama_pelanggaran" class="form-control"
                                                                                  placeholder="Nama pelanggaran" name="nama_pelanggaran">
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <label for="kategori_pelanggaran">Jenis</label>
                                                                  </div>
                                                                  <div class="col-md-8 form-group">
                                                                          <select class="form-select" id="inputGroupSelect01" name="kategori_pelanggaran">
                                                                              <option selected>Pilih...</option>
                                                                              <option>Ringan</option>
                                                                              <option>Sedang</option>
                                                                              <option>Berat</option>
                                                                          </select>
                                                                      
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <label for="deskripsi_pelanggaran">Deskripsi</label>
                                                                  </div>
                                                                  <div class="col-md-8 form-group">
                                                                      
                                                                      <textarea class="form-control" id="deskripsi_pelanggaran" class="form-control"
                                                                      placeholder="Deskripsi Pelanggaran" name="deskripsi_pelanggaran" rows="3"></textarea>
                                                                  </div>
                                                                  
                                                                  
                                                                  <br>
                                                                  
                                                              </div>
                                                          </div>
                                                      </form>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-light-secondary"
                                                          data-bs-dismiss="modal">
                                                          <i class="bx bx-x d-block d-sm-none"></i>
                                                          <span class="d-none d-sm-block">Close</span>
                                                      </button>
                                                      <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                  </div>
                                              </div>
                                          </div>
                                                  
              
                              </form>
                              
                          </div>
                      </div>
                  </div>

                  <div class="modal fade text-left modal-borderless" id="tambahprestasi" tabindex="-1"
                      role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title">Masukkan Data Prestasi</h5>
                                  <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                      aria-label="Close">
                                      <i data-feather="x"></i>
                                  </button>
                              </div>
                              <form method="post" action="{{ route('storeprestasi') }}" enctype="multipart/form-data">

                                  @csrf                               
                                                  
                                          {{-- <section id="multiple-column-form">
                                              <div class="row match-height">
                                                  <div class="col-12">
                                                      <div class="card">
                                                          <div class="card-content">
                                                              <div class="card-body">
                                                                  <form class="form">
                                                                      <div class="row">
                                                                          <div class="col-md-6 col-12">
                                                                              <div class="form-group">
                                                                                  <label for="first-name-column">Nama Lengkap</label>
                                                                                  <input type="text" id="first-name-column" class="form-control"
                                                                                      placeholder="Nama lengkap" name="nama_santri">
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-md-6 col-12">
                                                                              <div class="form-group">
                                                                                  <label for="first-name-column">Kategori Prestasi </label>
                                                                                  <input type="text" id="first-name-column" class="form-control"
                                                                                      placeholder="kategori prestasi" name="kategori_prestasi">
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-md-6 col-12">
                                                                              <div class="form-group">
                                                                                  <label for="first-name-column">Keterangan Prestasi</label>
                                                                                  <input type="text" id="first-name-column" class="form-control"
                                                                                      placeholder="keterangan prestasi" name="keterangan_prestasi">
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-12 d-flex justify-content-end">
                                                                              <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                                              
                                                                          </div>
                                                                      </div>
                                                                  </form>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </section> --}}
                                                          
                                                  
                                          <div class="card">
                                              <div class="card-content">
                                                  <div class="card-body">
                                                      <form class="form form-horizontal">
                                                          <div class="form-body">
                                                              <div class="row">
                                                                  <div class="col-md-4">
                                                                      <label for="nama_santri">Nama Santri</label>
                                                                  </div>
                                                                  <div class="col-md-8 form-group">
                                                                              <input type="text" id="nama_santri" class="form-control"
                                                                                  placeholder="Nama Santri" name="nama_santri">
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <label for="nama_santri">Nama Prestasi</label>
                                                                  </div>
                                                                  <div class="col-md-8 form-group">
                                                                              <input type="text" id="nama_prestasi" class="form-control"
                                                                                  placeholder="Nama Prestasi" name="nama_prestasi">
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <label for="kategori_prestasi">Kategori</label>
                                                                  </div>
                                                                  <div class="col-md-8 form-group">
                                                                      <input type="text" id="first-name-column" class="form-control"
                                                                      placeholder="kategori prestasi" name="kategori_prestasi">
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                      <label for="keterangan_prestasi">Deskripsi</label>
                                                                  </div>
                                                                  <div class="col-md-8 form-group">
                                                                      
                                                                      <textarea class="form-control" id="keterangan_prestasi" class="form-control"
                                                                      placeholder="Deskripsi Prestasi" name="keterangan_prestasi" rows="3"></textarea>
                                                                  </div>
                                                                   
                                                                  
                                                                  <br>
                                                                  
                                                              </div>
                                                          </div>
                                                      </form>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-light-secondary"
                                                          data-bs-dismiss="modal">
                                                          <i class="bx bx-x d-block d-sm-none"></i>
                                                          <span class="d-none d-sm-block">Close</span>
                                                      </button>
                                                      <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                  </div>
                                              </div>
                                          </div>
                                          
              
                              </form>
                              
                          </div>
                      </div>
                  </div>

       {{-- Modal End --}}
                  @yield('nilai')
                
            </div>
        </div>
    </div>
    <script src="{{ asset('template/dist/assets') }}/static/js/components/dark.js"></script>
    <script src="{{ asset('template/dist/assets') }}/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    
    <script src="{{ asset('template/dist/assets') }}/compiled/js/app.js"></script>




</style>
    
    
</body>

</html>
