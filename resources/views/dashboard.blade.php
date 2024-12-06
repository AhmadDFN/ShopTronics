@extends('template.template')

@section('title', $title)
@section('page-title', $page)

@section('content')
    <style>
        body {
            color: black
        }
    </style>
    <!-- Statistik -->
    <div class="row mt-5">
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
                <h5>Pertahun</h5>
                <h3>Rp {{ number_format($rev_year->total, '0', ',', '.') }}</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 text-center">
                <div class="card-icon">📆</div>
                <h5>Perbulan</h5>
                <h3>Rp {{ number_format($rev_month->total, '0', ',', '.') }}</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 text-center">
                <div class="card-icon">📅</div>
                <h5>Perminggu</h5>
                <h3>Rp {{ number_format($rev_week, '0', ',', '.') }}</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-4 text-center">
                <div class="card-icon">⏰</div>
                <h5>Perhari</h5>
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

@endsection
