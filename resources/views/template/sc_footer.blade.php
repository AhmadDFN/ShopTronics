<!-- JavaScript Libraries -->

{{--  NPM  --}}
<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>


{{--  Lib  --}}
<script src="{{ asset('assets/lib/chart/chart.min.js') }}"></script>
<script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<script src="{{ asset('assets/js/datatables.min.js') }}"></script>
<!-- Template Javascript -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    function showToast(message, isSuccess) {
        var toastClass = isSuccess ? 'success' : 'error';
        var toast = $('<div class="toast ' + toastClass + '">' + message + '</div>');
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
    showToast('Login Berhasil !! - Selamat Datang di ShopTronics', true); // Untuk notifikasi berhasil
    // showToast('Login gagal. Kata sandi yang Anda masukkan salah.', false); // Untuk notifikasi gagal
</script>
