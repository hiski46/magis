<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>MAGIS - Mandiri Group Integrated System</title>
    <link href="/dist/css/tabler.min.css?1684106062" rel="stylesheet" />
    <link href="/dist/css/tabler-flags.min.css?1684106062" rel="stylesheet" />
    <link href="/dist/css/tabler-payments.min.css?1684106062" rel="stylesheet" />
    <link href="/dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet" />
    <link href="/dist/css/demo.min.css?1684106062" rel="stylesheet" />
    <link rel="icon" href="/static/logo/favicon.png" type="image/x-icon">
    <!-- Annimation CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Tambahkan link CSS untuk Bootstrap -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <!-- Tambahkan link CSS untuk DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="/dist/js/demo.min.js?1684106062" defer></script>
    <!-- Tambahkan link untuk jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <!-- Tambahkan link untuk DataTables -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <!-- Tambahkan link untuk DataTables Bootstrap 5 integration -->
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }

        div.dataTables_wrapper div.dataTables_length select {
            width: 50px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="page">
        <!-- Navbar -->
        @include('dashboard.layout.header')
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
                    @yield('content')
                </div>
            </div>
            @include('dashboard.layout.footer')
        </div>
    </div>

    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="/dist/js/demo-theme.min.js?1684106062"></script>
    <script src="/dist/js/tabler.min.js?1684106062" defer></script>

</body>

</html>
