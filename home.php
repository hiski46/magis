<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>SSO - Single Sign On Mandirigroup</title>
  <!-- CSS files -->
  <link href="./dist/css/tabler.min.css?1684106062" rel="stylesheet" />
  <link href="./dist/css/tabler-flags.min.css?1684106062" rel="stylesheet" />
  <link href="./dist/css/tabler-payments.min.css?1684106062" rel="stylesheet" />
  <link href="./dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet" />
  <link href="./dist/css/demo.min.css?1684106062" rel="stylesheet" />
  <style>
    [data-bs-theme=dark] .navbar-brand-autodark .navbar-brand-image {
      filter: none;
    }
  </style>
</head>

<body>
  <script src="./dist/js/demo-theme.min.js?1684106062"></script>
  <div class="page">
    <!-- Navbar -->
    <header class="navbar navbar-expand-md d-print-none">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
          aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
          <a href=".">
            <img style="" src="./static/logo/magis_icon.png" width="110" height="32" alt="Tabler"
              class="navbar-brand-image">
          </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
          <div class="d-none d-md-flex">
            <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" data-bs-toggle="tooltip"
              data-bs-placement="bottom" aria-label="Enable dark mode" data-bs-original-title="Enable dark mode">
              <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path>
              </svg>
            </a>
            <a href="?theme=light" class="nav-link px-0 hide-theme-light" data-bs-toggle="tooltip"
              data-bs-placement="bottom" aria-label="Enable light mode" data-bs-original-title="Enable light mode">
              <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7">
                </path>
              </svg>
            </a>
            <div class="nav-item dropdown d-none d-md-flex me-3">
              <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                  stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6">
                  </path>
                  <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                </svg>
                <span class="badge bg-red"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Last updates</h3>
                  </div>
                  <div class="list-group list-group-flush list-group-hoverable">
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                        <div class="col text-truncate">
                          <a href="#" class="text-body d-block">Example 1</a>
                          <div class="d-block text-muted text-truncate mt-n1">
                            Change deprecated html tags to text decoration classes (#29604)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="list-group-item-actions">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24"
                              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path
                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                              </path>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot d-block"></span></div>
                        <div class="col text-truncate">
                          <a href="#" class="text-body d-block">Example 2</a>
                          <div class="d-block text-muted text-truncate mt-n1">
                            justify-content:between ⇒ justify-content:space-between (#29734)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="list-group-item-actions show">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24"
                              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path
                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                              </path>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot d-block"></span></div>
                        <div class="col text-truncate">
                          <a href="#" class="text-body d-block">Example 3</a>
                          <div class="d-block text-muted text-truncate mt-n1">
                            Update change-version.js (#29736)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="list-group-item-actions">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24"
                              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path
                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                              </path>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span>
                        </div>
                        <div class="col text-truncate">
                          <a href="#" class="text-body d-block">Example 4</a>
                          <div class="d-block text-muted text-truncate mt-n1">
                            Regenerate package-lock.json (#29730)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="list-group-item-actions">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24"
                              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path
                                d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                              </path>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
              aria-label="Open user menu">
              <span class="avatar avatar-sm" style="background-image: url(./static/avatars/003m.jpg)"></span>
              <div class="d-none d-xl-block ps-2">
                <div>Andika Debi Putra</div>
                <div class="mt-1 small text-muted">Software Engineering</div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a href="#" class="dropdown-item">Status</a>
              <a href="./profile.html" class="dropdown-item">Profile</a>
              <a href="#" class="dropdown-item">Feedback</a>
              <div class="dropdown-divider"></div>
              <a href="./settings.html" class="dropdown-item">Settings</a>
              <a href="./sign-in.html" class="dropdown-item">Logout</a>
            </div>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="./#">
                  <span
                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                      </path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Dashboard
                  </span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown"
                  data-bs-auto-close="outside" role="button" aria-expanded="false">
                  <span
                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path
                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                      </path>
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Menu
                  </span>
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="./#">
                    First
                  </a>
                  <a class="dropdown-item" href="./#">
                    Second
                  </a>
                  <a class="dropdown-item" href="./#">
                    Third
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <div class="page-wrapper">
      <!-- Page header -->
      <div class="page-header d-print-none">
        <div class="container-xl">
          <div class="row g-2 align-items-center">
            <div class="col">
              <h2 class="page-title">
                SSO - Mandiri Group
              </h2>
            </div>
          </div>
        </div>
      </div>
      <!-- Page body -->
      <div class="page-body">
        <div class="container-xl">
          <div class="row">
            <div class="col-lg-3">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Personal Information</h3>
                </div>
                <div class="card-body">
                  <div class="datagrid">
                    <div class="datagrid-item">
                      <div class="datagrid-title">Employee ID (NIK)</div>
                      <div class="datagrid-content">3839</div>
                    </div>
                    <div class="datagrid-item">
                      <div class="datagrid-title">Name</div>
                      <div class="datagrid-content">Andika Debi Putra</div>
                    </div>
                    <div class="datagrid-item">
                      <div class="datagrid-title">Level</div>
                      <div class="datagrid-content">Supervisor</div>
                    </div>
                    <div class="datagrid-item">
                      <div class="datagrid-title">Position</div>
                      <div class="datagrid-content">Software Engineering Supervisor</div>
                    </div>
                    <div class="datagrid-item">
                      <div class="datagrid-title">Departement</div>
                      <div class="datagrid-content">Software Engineering</div>
                    </div>
                    <div class="datagrid-item">
                      <div class="datagrid-title">Divisi</div>
                      <div class="datagrid-content">ITE</div>
                    </div>
                    <div class="datagrid-item">
                      <div class="datagrid-title">Company</div>
                      <div class="datagrid-content">Mandiri Intiperkasa (MIP)</div>
                    </div>
                    <div class="datagrid-item">
                      <div class="datagrid-title">Date of Hire</div>
                      <div class="datagrid-content">25-01-2017</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Application </h3>
                </div>
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col-12">
                      <div class="card card-md">
                        <div class="card-stamp card-stamp-lg">
                          <div class="card-stamp-icon bg-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path
                                d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7">
                              </path>
                              <path d="M10 10l.01 0"></path>
                              <path d="M14 10l.01 0"></path>
                              <path d="M10 14a3.5 3.5 0 0 0 4 0"></path>
                            </svg>
                          </div>
                        </div>
                        <div class="card-body p-3">
                          <div class="row align-items-center">
                            <div class="col-10">
                              <div class="markdown text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, Lorem ipsum dolor sit amet,
                                consectetur adipisicing elitLorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Visit
                                <a href="https://tabler-icons.io" target="_blank" rel="noopener">tabler-icons.io</a>,
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 mb-3">
                      <a href="#" class="card card-link card-link-pop">
                        <div class="card">
                          <div class="row">
                            <div class="col-5">
                              <img src="./static/logo/bitrix_icon.png"
                                class="w-100 h-100 object-cover card-img-start p-3"
                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                            </div>
                            <div class="col-7 my-auto">
                              <div class="card-body ps-0">
                                <h3 class="card-title">BITRIX24</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-4 mb-3">
                      <a href="#" class="card card-link card-link-pop">
                        <div class="card">
                          <div class="row">
                            <div class="col-5">
                              <img src="./static/logo/payday.png" class="w-100 h-100 object-cover card-img-start p-3"
                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                            </div>
                            <div class="col-7 my-auto">
                              <div class="card-body ps-0">
                                <h3 class="card-title">PAYDAY <span class="badge badge-sm bg-green-lt">sso</span></h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-4 mb-3">
                      <a href="#" class="card card-link card-link-pop">
                        <div class="card">
                          <div class="row">
                            <div class="col-5">
                              <img src="./static/logo/medicoal_icon.png"
                                class="w-100 h-100 object-cover card-img-start p-3"
                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                            </div>
                            <div class="col-7 my-auto">
                              <div class="card-body ps-0">
                                <h3 class="card-title">MEDICOAL <span class="badge badge-sm bg-green-lt">sso</span></h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-4 mb-3">
                      <a href="#" class="card card-link card-link-pop">
                        <div class="card">
                          <div class="row">
                            <div class="col-5">
                              <img src="./static/logo/sisakty_icon.png"
                                class="w-100 h-100 object-cover card-img-start p-3"
                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                            </div>
                            <div class="col-7 my-auto">
                              <div class="card-body ps-0">
                                <h3 class="card-title">SISAKTY <span class="badge badge-sm bg-green-lt">sso</span></h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-4 mb-3">
                      <a href="#" class="card card-link card-link-pop">
                        <div class="card">
                          <div class="row">
                            <div class="col-5">
                              <img src="./static/logo/optimals_icon.png"
                                class="w-100 h-100 object-cover card-img-start p-3"
                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                            </div>
                            <div class="col-7 my-auto">
                              <div class="card-body ps-0">
                                <h3 class="card-title">OPTIMALS <span class="badge badge-sm bg-green-lt">sso</span></h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-4 mb-3">
                      <a href="#" class="card card-link card-link-pop">
                        <div class="card">
                          <div class="row">
                            <div class="col-5">
                              <img src="./static/logo/sipaling_icon.png"
                                class="w-100 h-100 object-cover card-img-start p-3"
                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                            </div>
                            <div class="col-7 my-auto">
                              <div class="card-body ps-0">
                                <h3 class="card-title">SIPALING</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-4 mb-3">
                      <a href="#" class="card card-link card-link-pop">
                        <div class="card">
                          <div class="row">
                            <div class="col-5">
                              <img src="./static/logo/siaga_icon.png"
                                class="w-100 h-100 object-cover card-img-start p-3"
                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                            </div>
                            <div class="col-7 my-auto">
                              <div class="card-body ps-0">
                                <h3 class="card-title">SIAGA</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-4 mb-3">
                      <a href="#" class="card card-link card-link-pop">
                        <div class="card">
                          <div class="row">
                            <div class="col-5">
                              <img src="./static/logo/syscoal_icon.png"
                                class="w-100 h-100 object-cover card-img-start p-3"
                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                            </div>
                            <div class="col-7 my-auto">
                              <div class="card-body ps-0">
                                <h3 class="card-title">SYSCOAL</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-4 mb-3">
                      <a href="#" class="card card-link card-link-pop">
                        <div class="card">
                          <div class="row">
                            <div class="col-5">
                              <img src="./static/logo/podema_iconx.png"
                                class="w-100 h-100 object-cover card-img-start p-3"
                                alt="Beautiful blonde woman relaxing with a can of coke on a tree stump by the beach">
                            </div>
                            <div class="col-7 my-auto">
                              <div class="card-body ps-0">
                                <h3 class="card-title">PODEMA</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-transparent d-print-none">
        <div class="container-xl">
          <div class="row text-center align-items-center flex-row-reverse">
            <div class="col-lg-auto ms-lg-auto">
              <ul class="list-inline list-inline-dots mb-0">
                <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank" class="link-secondary"
                    rel="noopener">Documentation</a></li>
                <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank"
                    class="link-secondary" rel="noopener">Source code</a></li>
                <li class="list-inline-item">
                  <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24"
                      height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                    </svg>
                    Sponsor
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
              <ul class="list-inline list-inline-dots mb-0">
                <li class="list-inline-item">
                  Copyright &copy; 2023
                  <a href="." class="link-secondary">Tabler</a>.
                  All rights reserved.
                </li>
                <li class="list-inline-item">
                  <a href="./changelog.html" class="link-secondary" rel="noopener">
                    v1.0.0-beta19
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Libs JS -->
  <!-- Tabler Core -->
  <script src="./dist/js/tabler.min.js?1684106062" defer></script>
  <script src="./dist/js/demo.min.js?1684106062" defer></script>
</body>

</html>