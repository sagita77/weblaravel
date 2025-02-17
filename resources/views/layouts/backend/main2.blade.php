<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free Bootstrap Admin Template by Adminmart</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ asset("backend-asset/src") }}/assets/css/styles.min.css" />
  
</head>

<body>
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
data-sidebar-position="fixed" data-header-position="fixed">
@include('layouts.backend.navbar')
@include('layouts.backend.seatbar')

  @yield("content")x
 </div>
  <script src="{{ asset("backend-asset/src") }}/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset("backend-asset/src") }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset("backend-asset/src") }}/assets/js/sidebarmenu.js"></script>
  <script src="{{ asset("backend-asset/src") }}/assets/js/app.min.js"></script>
  <script src="{{ asset("backend-asset/src") }}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="{{ asset("backend-asset/src") }}/assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="{{ asset("backend-asset/src") }}/assets/js/dashboard.js"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>
</html>