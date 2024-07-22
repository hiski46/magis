<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="row">
  <div class="col-lg-12 animate__animated animate__pulse">
    <div class="card">
      <div class="row g-2 p-4 align-items-center">
        <div class="col">
          <div class="page-pretitle">
            Master Data
          </div>
          <h2 class="page-title">
            Data Admin
          </h2>
        </div>
        <div class="col-auto ms-auto d-print-none">
          <div class="btn-list">
            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_add_admin" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal_add_admin">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
              Tambah
            </a>
            <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal_add_admin" aria-label="Create new report">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Card Body -->
      <div class="card-body animate__pulse">
        <div class="table-responsive">
          <table id="table_admin" class="table table-sm" style="width:100%">
            <thead>
              <tr>
                <th>Status</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Status</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Add Admin -->
<div class="modal modal-blur fade" id="modal_add_admin" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ubah Data Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Nama<span class="text-red">*</span></label>
          <input type="text" class="form-control" name="example-text-input" placeholder="Nama">
        </div>
        <div class="mb-3">
          <div>
            <label class="form-label">Deskripsi<span class="text-red">*</span></label>
            <textarea class="form-control" placeholder="Deskripsi" rows="5"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
          Batal
        </a>
        <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
          Simpan
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Admin -->
<div class="modal modal-blur fade" id="modal_edit_admin" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ubah Data Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Nama<span class="text-red">*</span></label>
          <input type="text" class="form-control" name="example-text-input" placeholder="Nama">
        </div>
        <div class="mb-3">
          <div>
            <label class="form-label">Deskripsi<span class="text-red">*</span></label>
            <textarea class="form-control" placeholder="Deskripsi" rows="5"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
          Batal
        </a>
        <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
          Simpan
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Modal View Admin -->
<div class="modal modal-blur fade" id="modal_view_admin" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detil Admin</h5>
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
                  <td>Nama</td>
                  <td class="text-muted">
                    Payday
                  </td>
                </tr>
                <tr>
                  <td>Deskripsi</td>
                  <td class="text-muted">
                    Payday adalah aplikasi lorem ipsum dolor amet
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
          Keluar
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Modal Confirm Status -->
<div class="modal modal-blur fade" id="modal_confirm_status" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status"></div>
      <div class="modal-body text-center py-4">
        <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-warning icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z" /><path d="M12 9v4" /><path d="M12 17h.01" /></svg>
        <h3>Ubah Status ?</h3>
        <div class="text-muted">Apakah anda yakin akan mengubah status ini ?</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal" onclick="errorAlert()">
              Batal
            </a></div>
            <div class="col"><a href="#" class="btn btn-primary w-100" data-bs-dismiss="modal" onclick="successAlert()">
              Simpan
            </a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // Success Alert
  function successAlert() {
    Swal.fire({
      icon: "success",
      title: "Berhasil!",
      showConfirmButton: false,
      timer: 2000
    });
  }
  // Error Alert
  function errorAlert() {
    Swal.fire({
      icon: "error",
      title: "Gagal!",
      showConfirmButton: false,
      timer: 2000
    });
  }
</script>

<!-- Custom Datatables -->
<script>
  $(document).ready(function() {
    new DataTable('#table_admin', {
      ajax: 'dataset/data_admin.txt',
      paging: true, // Aktifkan paging
      searching: true, // Aktifkan pencarian
      info: true, // Tampilkan informasi tentang data
      scrollX: true, // Aktifkan pengguliran horizontal jika diperlukan
      // scrollY: '950px', // Aktifkan pengguliran vertikal dengan tinggi 300px
      responsive: true, // Aktifkan responsif
      lengthMenu: [25, 50, 100], // Matikan menu panjang
      pageLength: 25, // Panjang halaman default
      autoWidth: true, // Aktifkan perhitungan lebar otomatis
      ordering: true, // Aktifkan penyortiran
      order: [[0, 'asc']], // Kolom pengurutan dan urutan default
      dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" + 
      "<'row'<'col-sm-12'tr>>" + 
           "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>", // Tata letak kustom
           language: {
            "emptyTable": "Tidak ada data",
            "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            "infoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
            "infoFiltered": "(Filter dari total _MAX_ data)",
            "infoPostFix": "",
            "thousands": ",",
            "loadingRecords": "Memuat...",
            "processing": "Memproses...",
            "search": "Cari:",
            "zeroRecords": "Tidak ada data yang cocok",
            "lengthMenu": "Menampilkan _MENU_ data",
            "paginate": {
              "first": "Awal",
              "last": "Akhir",
              "next": "Selanjutnya",
              "previous": "Sebelumnya"
            },
            "aria": {
              "sortAscending": ": Aktifkan untuk mengurutkan kolom secara ascending",
              "sortDescending": ": aktifkan untuk mengurutkan kolom secara descending"
            }
          }
        });
  });
</script>
