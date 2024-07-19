<div class="row">
  <div class="col-lg-12 animate__animated animate__pulse">
    <div class="card">
      <div class="row g-2 p-4 align-items-center">
        <div class="col">
          <div class="page-pretitle">
            User
          </div>
          <h2 class="page-title">
            Manage User
          </h2>
        </div>
        <div class="col-auto ms-auto d-print-none">
          <div class="btn-list">
            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-add" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-refresh" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
              </svg>
              Synchronize
            </a>
            <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
            </a>
          </div>
        </div>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-sm" style="width:100%">
            <thead>
              <tr>
                <th>Status</th>
                <th>NIK</th>
                <th>Name</th>
                <th>Position</th>
                <th>Divisi</th>
                <th>Company</th>
                <th style="width: 15%;">Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Status</th>
                <th>NIK</th>
                <th>Name</th>
                <th>Position</th>
                <th>Divisi</th>
                <th>Company</th>
                <th style="width: 15%;">Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Custom Datatables -->
<script>
  $(document).ready(function() {
    $(document).ready(function() {
      new DataTable('#example', {
        ajax: 'dataset/user.txt',
        paging: true, // Enable paging
        searching: true, // Enable searching
        info: true, // Show information about data
        scrollX: true, // Enable horizontal scrolling if needed
        // scrollY: '950px', // Enable vertical scrolling with height 300px
        responsive: true, // Enable responsive
        lengthMenu: [25, 50, 100], // Disable length menu
        pageLength: 25, // Default page length
        autoWidth: true, // Enable automatic width calculation
        ordering: true, // Enable sorting
        order: [[0, 'asc']], // Default sorting column and order
        dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" + 
        "<'row'<'col-sm-12'tr>>" + 
             "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>", // Custom layout
             language: {
            // Set language to English
            "emptyTable": "No data available in table",
            "info": "Showing _START_ to _END_ of _TOTAL_ entries",
            "infoEmpty": "Showing 0 to 0 of 0 entries",
            "infoFiltered": "(filtered from _MAX_ total entries)",
            "infoPostFix": "",
            "thousands": ",",
            "loadingRecords": "Loading...",
            "processing": "Processing...",
            "search": "Search:",
            "zeroRecords": "No matching records found",
            "paginate": {
              "first": "First",
              "last": "Last",
              "next": "Next",
              "previous": "Previous"
            },
            "aria": {
              "sortAscending": ": activate to sort column ascending",
              "sortDescending": ": activate to sort column descending"
            }
          }
        });
    });
  });
</script>