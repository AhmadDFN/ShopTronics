<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <title>{{ $page }} | ShopTronics</title>

    <!-- Favicon -->
    <link href="{{ asset('assets/img/Logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        /* styles.css */
        body {
            margin: 0;
            padding: 0;
            font-family: "Arial", sans-serif;
            background-color: #e5e5e5;
            /* Warna latar belakang yang netral */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            background-color: #172a49;
            /* Warna utama */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .brand-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #d00054;
            /* Warna brand */
            margin-bottom: 20px;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-group {
            position: relative;
        }

        input {
            width: 100%;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-right: 10px;
            border: 1px solid #541c4c;
            /* Aksen */
            border-radius: 8px;
            background-color: #920e50;
            /* Warna latar input */
            color: #e5e5e5;
            font-size: 1rem;
        }

        input::placeholder {
            color: #e5e5e5;
            /* Placeholder netral */
        }

        input:focus {
            outline: none;
            border-color: #d00054;
            /* Fokus */
            box-shadow: 0 0 5px #d00054;
        }

        .submit-btn {
            background-color: #d00054;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #920e50;
        }

        .signup-link {
            font-size: 0.9rem;
            color: #e5e5e5;
            margin-top: 10px;
        }

        .signup-link a {
            color: #d00054;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <div class="card">
            <a href="{{ url('auth/login') }}" class="">
                <h1 class="brand-title">
                    <img class="rounded-circle" src="{{ asset('assets/img/Logo.png') }}" alt="ShopTronics"
                        style="
              width: 100px;
              height: 60px;
              margin-right: 10px;
              margin-top: -5px;
            " />Shop
                    Tronics
                </h1>
            </a>
            <form class="login-form" action="{{ url('auth/login') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" placeholder="username" autocomplete="chrome-off" name="username"
                        class="form-control @error('email') is-invalid @enderror" required />
                </div>
                <div class="form-group">
                    <input type="password" id="password" placeholder="Password" autocomplete="chrome-off"
                        name="password" class="form-control @error('password') is-invalid @enderror" required />
                </div>
                <button type="submit" class="submit-btn">Login</button>
                <p class="signup-link">
                    New employe to Shop Tronics? - Hubungi admin
                </p>
            </form>
        </div>
    </div>

    <!-- JavaScript Libraries -->

    {{--  NPM  --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    {{--  Lib  --}}
    <script src="{{ asset('assets/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        function showToast(message) {
            var toast = $('<div class="toast">' + message + '</div>');
            $('#toast-container').append(toast);
            setTimeout(function() {
                toast.addClass('show');
            }, 100);
            setTimeout(function() {
                toast.removeClass('show');
                setTimeout(function() {
                    toast.remove();
                }, 300);
            }, 3000); // Sesuaikan durasi tampilan pesan di sini
        }

        // Contoh pemanggilan
        showToast('Login gagal. Username Atau Password Kamu Mungkin salah !!!.');
    </script>
</body>

</html>
