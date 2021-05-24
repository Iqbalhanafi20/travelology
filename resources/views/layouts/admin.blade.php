<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Travelology Admin</title>
        @include('includes.admin.style')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

    </head>
    <body class="sb-nav-fixed">
        
        @include('includes.admin.navbar')

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('includes.admin.sidebar')
            </div>
            <div id="layoutSidenav_content">
                
                @yield('content')


                @include('includes.admin.footer')

            </div>
        </div>
        
        @include('includes.admin.script')

    </body>
</html>
