<!-- Favicon -->
<link href="{{ asset('assets/img/Logo.png') }}" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- DataTable -->
<link href="{{ asset('assets/css/datatables.min.css') }}" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="{{ asset('fontawesome/css/fontawesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

<style>
    #toast-container {
        position: fixed;
        top: 50px;
        /* Atur posisi vertikal sesuai kebutuhan */
        left: 50%;
        /* Pusatkan secara horizontal */
        transform: translateX(-50%);
        z-index: 1000;
    }

    .toast {
        background-color: #28a745;
        /* Warna latar hijau */
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        margin-bottom: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        position: relative;
        opacity: 0;
        transition: opacity 0.3s ease-out;
    }

    .toast.show {
        opacity: 1;
        transition: opacity 0.3s ease-in;
    }
</style>
