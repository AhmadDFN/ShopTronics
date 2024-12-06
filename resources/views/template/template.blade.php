<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title>@yield('page-title') | ShopTronics</title>

    @include('template.sc_head')

</head>

<body>
    <div class="container-xxxl">

        <!-- Sidebar -->
        @include('template.sidebar')

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

        <!-- Content -->
        <div class="content" id="content">
            @include('template.navbar')

            <div class="container-fluid pt-4 px-4" style="min-height: 75vh;">
                <div class="row g-4">
                    @yield('content')
                </div>
            </div>

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4" style="padding-right: 50px !important;">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">ShopTronics</a>, inc.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end" style="padding-right: 50px !important;">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="#">ShopTronics</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
    </div>

    @include('template.sc_footer')
</body>

</html>
