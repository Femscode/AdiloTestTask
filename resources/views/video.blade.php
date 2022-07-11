<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <title>Adilo</title>
    
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Webestica.com">
        <meta name="description" content="Adilo">
    
        <!-- Favicon -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">
    
        <!-- Plugins CSS -->
        <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">
        <link rel="stylesheet" type="text/css" href="assets/vendor/overlay-scrollbar/css/OverlayScrollbars.min.css">
    
        <!-- Theme CSS -->
        <link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">
    
    </head>
<body class=''>
    
   
    <div id="app">

        <pelvideo></pelvideo>

    </div>

    <script src="{{ mix('/js/app.js') }}"></script>
</body>

    
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/choices/js/choices.min.js"></script>
<script src="assets/vendor/overlay-scrollbar/js/OverlayScrollbars.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>
<script src="assets/jquery.js"></script>
<script src="assets/sweetalert.js"></script>

</html>