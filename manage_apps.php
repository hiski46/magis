<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>MAGIS - Mandiri Group Integrated System</title>
    <link href="./dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css?1684106062" rel="stylesheet"/>
    <link rel="icon" href="./static/logo/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
       --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
     }
     body {
       font-feature-settings: "cv03", "cv04", "cv11";
     }
   </style>
 </head>

 <body>
  <div class="page">

    <!-- Navbar -->
    <header class="navbar navbar-expand-md d-print-none">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3 animate__animated animate__rubberBand">
          <a href=".">
            <img style="" src="./static/logo/magis_icon.png" width="110" height="32" alt="Tabler" class="navbar-brand-image">
          </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
          <div class="d-none d-md-flex">
            <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable dark mode" data-bs-original-title="Enable dark mode">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path>
              </svg>
            </a>
            <a href="?theme=light" class="nav-link px-0 hide-theme-light" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable light mode" data-bs-original-title="Enable light mode">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7">
                </path>
              </svg>
            </a>
            <div class="nav-item dropdown d-none d-md-flex me-3">
              <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                    <h3 class="card-title mb-0">Last updates</h3>
                  </div>
                  <div class="list-group list-group-flush list-group-hoverable">
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                        <div class="col text-truncate">
                          <a href="#" class="text-body d-block">Notification #1</a>
                          <div class="d-block text-muted text-truncate mt-n1">
                            Change deprecated html tags to text decoration classes (#29604)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="list-group-item-actions">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
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
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
              <span class="avatar avatar-sm" style="background-image: url(./static/avatars/003m.jpg)"></span>
              <div class="d-none d-xl-block ps-2">
                <div>Andika Debi Putra</div>
                <div class="mt-1 small text-muted">Software Engineering</div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a href="./settings.html" class="dropdown-item">Settings</a>
              <a href="./sign-in.html" class="dropdown-item">Logout</a>
            </div>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="home.php">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l-2 0l9 -9l9 9l-2 0"></path><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path></svg>
                  </span>
                  <span class="nav-link-title">
                    Home
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="manage_apps.php">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path><path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path><path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path><path d="M14 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path></svg>
                  </span>
                  <span class="nav-link-title">
                    Manage Apps
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>


    <div class="page-wrapper">

      <!-- Page header -->
      <div class="page-header d-print-none animate__animated animate__flipInX">
        <div class="container-xl">
          <div class="row g-2 align-items-center">
            <div class="col">
              <h2 class="page-title">
               MAGIS - Mandiri Group Integrated System
             </h2>
           </div>
         </div>
       </div>
     </div>

     <!-- Page body -->
     <div class="page-body">
      <div class="container-xl">
        <div class="row">
          <div class="col-lg-12 animate__animated animate__pulse">
            <div class="card">
              <div class="row g-2 p-4 align-items-center">
                <div class="col">
                  <div class="page-pretitle">
                    Application
                  </div>
                  <h2 class="page-title">
                    Manage Apps
                  </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                  <div class="btn-list">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-add" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
                      Add Application
                    </a>
                    <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
                    </a>
                  </div>
                </div>
              </div>

              <div id="table-default" class="table-responsive mx-4 mb-5">
                <table class="table">
                  <thead>
                    <tr>
                      <th><button class="table-sort">Icon</button></th>
                      <th><button class="table-sort">Name</button></th>
                      <th><button class="table-sort">Description</button></th>
                      <th><button class="table-sort">Link Development</button></th>
                      <th><button class="table-sort">Link Production</button></th>
                      <th><button class="table-sort">Action</button></th>
                    </tr>
                  </thead>
                  <tbody class="table-tbody">
                    <tr>
                      <td class="sort-name"><img src="./static/logo/payday.png" style="width: 50px;"></td>
                      <td class="sort-city">Payday</td>
                      <td class="sort-type">Payday adalah aplikasi...</td>
                      <td class="sort-score text-muted">
                        <small><b>Link</b> : https://payday.mandiricoal.net/<br><b>Token</b> : JIYnuYUY98nJOiuy... <span class="badge bg-azure-lt">Copy</span></small>
                      </td>
                      <td class="sort-score text-muted">
                        <small><b>Link</b> : https://office.mandiricoal.co.id/<br><b>Token</b> : JIYnuYUY98nJOiuy... <span class="badge bg-azure-lt">Copy</span></small>
                      </td>
                      <td>
                        <div class="d-flex">
                          <div class="col-xl py-3 p-1">
                            <a href="#" class="btn btn-sm btn-outline-info w-100" data-bs-toggle="modal" data-bs-target="#modal-view">
                              View
                            </a>
                          </div>
                          <div class="col-xl py-3 p-1">
                            <a href="#" class="btn btn-sm btn-outline-success w-100" data-bs-toggle="modal" data-bs-target="#modal-edit">
                              Edit
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal modal-blur fade" id="modal-add" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">New report</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <div class="form-label">Icon<span class="text-red">*</span></div>
              <input type="file" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Name<span class="text-red">*</span></label>
              <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
            </div>
            <div class="mb-3">
              <div>
                <label class="form-label">Description<span class="text-red">*</span></label>
                <textarea class="form-control" rows="3" placeholder="Description"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Link Development<span class="text-red">*</span></label>
                  <div class="input-group input-group-flat">
                    <span class="input-group-text">
                      https://tabler.io/reports/
                    </span>
                    <input type="text" class="form-control ps-0"  value="report-01" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Link Production<span class="text-red">*</span></label>
                  <div class="input-group input-group-flat">
                    <span class="input-group-text">
                      https://tabler.io/reports/
                    </span>
                    <input type="text" class="form-control ps-0"  value="report-01" autocomplete="off">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
              Cancel
            </a>
            <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
              Save
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="modal modal-blur fade" id="modal-edit" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">New report</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <div class="form-label">Icon<span class="text-red">*</span></div>
              <input type="file" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Name<span class="text-red">*</span></label>
              <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
            </div>
            <div class="mb-3">
              <div>
                <label class="form-label">Description<span class="text-red">*</span></label>
                <textarea class="form-control" rows="3" placeholder="Description"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Link Development<span class="text-red">*</span></label>
                  <div class="input-group input-group-flat">
                    <span class="input-group-text">
                      https://tabler.io/reports/
                    </span>
                    <input type="text" class="form-control ps-0"  value="report-01" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Link Production<span class="text-red">*</span></label>
                  <div class="input-group input-group-flat">
                    <span class="input-group-text">
                      https://tabler.io/reports/
                    </span>
                    <input type="text" class="form-control ps-0"  value="report-01" autocomplete="off">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
              Cancel
            </a>
            <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
              Save
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="modal modal-blur fade" id="modal-view" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Large modal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <center class="mb-5">
              <span class="avatar avatar-lg rounded" style="background-image: url(./static/logo/payday.png)"></span>
            </center>
            <div class="card">
              <div class="table-responsive">
                <table class="table table-vcenter card-table">
                  <tbody>
                    <tr>
                      <td>Name</td>
                      <td class="text-muted">
                        Payday
                      </td>
                    </tr>
                    <tr>
                      <td>Description</td>
                      <td class="text-muted">
                        Payday adalah aplikasi lorem ipsum dolor amet
                      </td>
                    </tr>
                    <tr>
                      <td>Link Development</td>
                      <td class="text-muted">
                        https://payday.mandiricoal.net
                      </td>
                    </tr>
                    <tr>
                      <td>Link Production</td>
                      <td class="text-muted">
                        https://payday.mandiricoal.co.id
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
              Cancel
            </a>
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
                rel="noopener">Fueling the Bright Future</a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
              <ul class="list-inline list-inline-dots mb-0">
                <li class="list-inline-item">
                  Copyright mandiricoal.co.id &copy; 2024
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
  <script src="./dist/js/demo-theme.min.js?1684106062"></script>
  <script src="./dist/js/tabler.min.js?1684106062" defer></script>
  <script src="./dist/js/demo.min.js?1684106062" defer></script>
</body>
</html>