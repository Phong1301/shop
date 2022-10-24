<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('template/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/admin/css/bootstrap.min.css') }}">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    

    <title>@yield('title')</title>
</head>
<body>
    
  @include('admin.sidebar')

    <section class="dashboard">

        @include('admin.header')

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-estate"></i>
                    <span class="text">@yield('title')</span>
                </div>

                @yield('content')
            </div>

            
        </div>
    </section>

    <script src="{{ asset('template/admin/js/script.js') }}"></script>
    <script src="{{ asset('template/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (Session('success'))
        <script>
            swal("Success", "{{ Session('success') }}", "success")
        </script>
    @endif
</body>
</html>
