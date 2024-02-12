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
              <th><button class="table-sort">Status</button></th>
              <th><button class="table-sort">Name</button></th>
              <th><button class="table-sort">Description</button></th>
              <th><button class="table-sort">Link Development</button></th>
              <th><button class="table-sort">Link Production</button></th>
              <th><button class="table-sort">Action</button></th>
            </tr>
          </thead>
          <tbody class="table-tbody">
            <tr>
              <td>
                <label class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" checked="">
                  <span class="form-check-label">Active</span>
                </label>
              </td>
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
            <tr>
              <td>
                <label class="form-check form-switch">
                  <input class="form-check-input" type="checkbox">
                  <span class="form-check-label">Inactive</span>
                </label>
              </td>
              <td class="sort-city">Sisakty</td>
              <td class="sort-type">Sisakty adalah aplikasi...</td>
              <td class="sort-score text-muted">
                <small><b>Link</b> : https://sisakty.mandiricoal.net/<br><b>Token</b> : JIYnuYUY98nJOiuy... <span class="badge bg-azure-lt">Copy</span></small>
              </td>
              <td class="sort-score text-muted">
                <small><b>Link</b> : https://sisakty.mandiricoal.co.id/<br><b>Token</b> : JIYnuYUY98nJOiuy... <span class="badge bg-azure-lt">Copy</span></small>
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