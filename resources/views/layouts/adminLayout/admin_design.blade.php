<!DOCTYPE html>
<html lang="en">
<head>
<title>Lims Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/fullcalendar.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/matrix-media.css') }}" />
<<<<<<< HEAD
<link rel="stylesheet" href="{{ asset('css/backend_css/jquery.gritter.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/jquery.min.css') }}" />

=======
<link rel="stylesheet" href="{{ asset('css/backend_css/jquery.gritter.css') }}" /> 
<link rel="stylesheet" href="{{ asset ('fonts/backend_fonts/css/font-awesome.css') }}" />
<<<<<<< HEAD
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
=======
>>>>>>> 6e02b2c4f8c64b6707f55492a1ad5c57be4835a7
>>>>>>> 9cbaee1aefbee11888c51ac9349259dd440b3c95
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso18.css" /> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

  @include('layouts.adminLayout.admin_header')
  @include('layouts.adminLayout.admin_sidebar')

  @yield('content')

  @include('layouts.adminLayout.admin_footer')

<script src="{{ asset('js/backend_js/jquery.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('js/backend_js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.uniform.js') }}"></script> 
<script src="{{ asset('js/backend_js/select2.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.dataTables.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.validate.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.form_validation.js') }}"></script>
<script src="{{ asset('js/backend_js/matrix.tables.js') }}"></script>
</body>
</html>
