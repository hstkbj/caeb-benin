<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AEB - Admin</title>

    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.7.2/css/all.css"
    >

    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-thin.css"
    >

    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-solid.css"
    >

    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-regular.css"
    >

    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-duotone-light.css"
    >

    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-thin.css"
    >

    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-solid.css"
    >

    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-regular.css"
    >

    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.7.2/css/sharp-light.css"
    >

    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-thin.css"
    >

    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-regular.css"
    >

    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.7.2/css/duotone-light.css"
    >

    <!-- Vector Maps css -->
    <link href="{{asset('admin/assets/plugins/jsvectormap/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="{{asset('admin/assets/js/config.js')}}"></script>
    <script src="{{asset('admin/demo.js')}}"></script>

    <!-- Datatables css -->
    <link href="{{asset('admin/assets/plugins/datatables/responsive.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Vendor css -->
    <link href="{{asset('admin/assets/css/vendors.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link id="app-style" href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    @vite(['resources/css/app.css','resources/js/app_admin.js'])

</head>
<body>
    <div class="wrapper">
        <div id="app"></div>
    </div>

    <!-- Vendor js -->
    <script src="{{asset('admin/assets/js/vendors.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('admin/assets/js/app.js')}}"></script>


    <!-- Apex Chart js -->
    <script src="{{asset('admin/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Vector Map Js -->
    <script src="{{asset('admin/assets/plugins/jsvectormap/jsvectormap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/maps/world-merc.js')}}"></script>
    <script src="{{asset('admin/assets/js/maps/world.js')}}"></script>

    <script src="{{asset('admin/assets/plugins/datatables/dataTables.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/responsive.bootstrap5.min.js')}}"></script>
     <!-- Page js -->
     <script src="{{asset('admin/assets/js/pages/datatables-basic.js')}}"></script>

    <!-- Custom table -->
    <script src="{{asset('admin/assets/js/pages/custom-table.js')}}"></script>

    <!-- Dashboard js -->
    <script src="{{asset('admin/assets/js/pages/dashboard-ecommerce.js')}}"></script>

</body>
</html>