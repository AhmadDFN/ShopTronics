<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard dengan Sidebar dan Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        :root {
            --pallete-satu: #e5e5e5;
            --pallete-dua: #172a49;
            --pallete-tiga: #541c4c;
            --pallete-empat: #920e50;
            --pallete-lima: #d00054;
        }

        body {
            background-color: var(--pallete-satu);
        }

        .navbar {
            background-color: var(--pallete-lima) !important;
            color: white;
        }

        .navbar .nav-link {
            color: white;
        }

        .navbar .nav-link:hover {
            color: var(--pallete-satu) !important;
        }

        .sidebar {
            width: 280px;
            height: 100vh;
            position: fixed;
            background-color: var(--pallete-dua);
            color: white;
            padding-top: 20px;
            transition: all 0.3s ease;
        }

        .sidebar.collapsed {
            width: 0;
            overflow: hidden;
        }

        .sidebar .brand-logo {
            text-align: center;
            padding: 20px;
            font-size: 1.5rem;
            font-weight: bold;
            background-color: var(--pallete-tiga);
            color: white;
            text-transform: uppercase;
        }

        .sidebar a {
            display: block;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            font-size: 1rem;
        }

        .sidebar a:hover {
            background-color: var(--pallete-empat);
        }

        .content {
            margin-left: 280px;
            padding: 20px;
            transition: all 0.3s ease;
        }

        .content.expanded {
            margin-left: 0;
        }

        .card {
            border: none;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-left: 5px solid var(--pallete-lima);
        }

        .card h5 {
            font-weight: bold;
            color: var(--pallete-dua);
        }

        .card .card-icon {
            font-size: 2rem;
            color: var(--pallete-lima);
        }

        .chart-container {
            position: relative;
            height: 400px;
        }

        .footer {
            text-align: center;
            padding: 15px;
            background-color: var(--pallete-dua);
            color: white;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="brand-logo">Dashboard</div>
        <a href="#home">🏠 Home</a>
        <a href="#analytics">📊 Analytics</a>
        <a href="#transactions">💳 Transactions</a>
        <a href="#users">👥 Users</a>
        <a href="#settings">⚙️ Settings</a>
        <a href="#logout">🚪 Logout</a>
    </div>

    <!-- Content -->
    <div class="content" id="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
            <div class="container-fluid">
                <button class="btn btn-danger" id="toggleSidebar">☰</button>
                <h4 class="ms-3 mb-0">ShopTronics</h4>
            </div>
        </nav>

        <div class="container mt-4">
            <h2 class="text-center mb-4">Dashboard Lengkap</h2>

            <!-- Statistik -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card p-4 text-center">
                        <div class="card-icon">👥</div>
                        <h5>Total Pelanggan</h5>
                        <h3>{{ $total_pelanggan }}</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-4 text-center">
                        <div class="card-icon">📦</div>
                        <h5>Total Produk</h5>
                        <h3>{{ $total_produk }}</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-4 text-center">
                        <div class="card-icon">💳</div>
                        <h5>Total Transaksi</h5>
                        <h3>{{ $total_transaksi }}</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-4 text-center">
                        <div class="card-icon">👤</div>
                        <h5>Total User</h5>
                        <h3>{{ $total_user }}</h3>
                    </div>
                </div>
            </div>

            <!-- Pendapatan -->
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="card p-4 text-center">
                        <div class="card-icon">💰</div>
                        <h5>Pendapatan Pertahun</h5>
                        <h3>Rp {{ number_format($rev_year->total, '0', ',', '.') }}</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-4 text-center">
                        <div class="card-icon">📆</div>
                        <h5>Pendapatan Perbulan</h5>
                        <h3>Rp {{ number_format($rev_month->total, '0', ',', '.') }}</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-4 text-center">
                        <div class="card-icon">📅</div>
                        <h5>Pendapatan Perminggu</h5>
                        <h3>Rp {{ number_format($rev_week, '0', ',', '.') }}</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-4 text-center">
                        <div class="card-icon">⏰</div>
                        <h5>Pendapatan Perhari</h5>
                        <h3>Rp {{ number_format($rev_day->total, '0', ',', '.') }}</h3>
                    </div>
                </div>
            </div>

            <!-- Piutang -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card p-4 text-center">
                        <div class="card-icon">🧾</div>
                        <h5>Total Piutang</h5>
                        <h3>Rp {{ number_format($hutang->total, '0', ',', '.') }}</h3>
                    </div>
                </div>
            </div>

            <!-- Chart -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card p-4">
                        <h5>Grafik Pendapatan Bulanan</h5>
                        <div class="chart-container">
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="footer">© 2024 Dashboard Lengkap. All Rights Reserved.</div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Sidebar toggle logic
        const sidebar = document.getElementById("sidebar");
        const content = document.getElementById("content");
        const toggleSidebar = document.getElementById("toggleSidebar");

        toggleSidebar.addEventListener("click", () => {
            sidebar.classList.toggle("collapsed");
            content.classList.toggle("expanded");
        });

        // Chart.js for revenue chart
        const ctx = document.getElementById("revenueChart").getContext("2d");
        const revenueChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
                datasets: [{
                    label: "Pendapatan (Rp)",
                    data: [
                        10000000, 12000000, 15000000, 13000000, 17000000, 18000000,
                        20000000, 22000000, 19000000, 25000000, 30000000, 35000000,
                    ],
                    backgroundColor: "rgba(208, 0, 84, 0.7)",
                    borderColor: "rgba(208, 0, 84, 1)",
                    borderWidth: 1,
                }, ],
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: "top",
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script>
</body>

</html>
