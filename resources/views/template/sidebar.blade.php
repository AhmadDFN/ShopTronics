<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <a href="{{ url('/') }}" style="padding-left: 0px; padding-right:0px;">
        <div class="brand-logo"><img class="rounded-circle" src="{{ asset('assets/img/Logo.png') }}" alt="ShopTronics"
                style="width: 100px; height: 30px;margin-right: 10px;margin-top:-5px;"><span
                style="color: cyan">Shop</span>Tronics</div>
    </a>

    <a href="{{ url('/') }}" class="{{ $title == 'Dashboard' ? 'active' : '' }}">🏠 Dashboard</a>
    <a href="{{ url('transaksi') }}" class="{{ $title == 'Transaksi' ? 'active' : '' }}">💳 Transaksi</a>
    <a href="{{ url('/pelanggan') }}" class="{{ $title == 'Pelanggan' ? 'active' : '' }}"><i
            class="fa-solid fa-person me-2 ms-1"></i>Pelanggan</a>
    <a href="{{ url('/produk') }}" class="{{ $title == 'Produk' ? 'active' : '' }}"><i
            class="fa-solid fa-box me-2 ms-1"></i>Produk</a>
    <a href="{{ url('/pengadaan') }}" class="{{ $title == 'Pengadaan' ? 'active' : '' }}"><i
            class="fa-solid fa-boxes-stacked me-2 ms-1"></i>Pengadaan</a>
    <h4 class="ms-2 mt-4">📊 Analytics</h4>
    <a href="{{ url('/detailtransaksi') }}" class="{{ $title == 'Detail transaksi' ? 'active' : '' }}"
        target="blank_"><i class="fa fa-file me-2 ms-1"></i>Detail transaksi</a>
    <a href="{{ url('/detailhutang') }}" class="{{ $title == 'Detail hutang' ? 'active' : '' }}"><i
            class="fa-solid fa-file-lines me-2 ms-1"></i>Detail hutang</a>
    <h4 class="ms-2 mt-4">⚙️ Settings</h4>
    <a href="{{ url('akun') }}" class="{{ $title == 'Akun' ? 'active' : '' }}">👥 Users</a>
</div>
