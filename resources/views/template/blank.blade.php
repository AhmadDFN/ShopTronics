<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title>@yield('title') | ShopTronics</title>

    @include('template.sc_head')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

</head>

<body>
    <div class="container-xxxl position-relative bg-white d-flex p-0">
        @if (session('mess'))
            <div class="col-sm-4">
                <div class="d-flex align-items-center justify-content-between p-4">
                    {{-- Notif --}}
                    <div class="alert alert-{{ session('type') }} text-center" style="width: 300px;" role="alert">
                        {{ session('mess') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="container-fluid" style="min-height: 75vh">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>

    @include('template.sc_footer')
    <link rel="stylesheet" href="{{ asset('assets/js/custom.js') }}">
</body>

</html>
