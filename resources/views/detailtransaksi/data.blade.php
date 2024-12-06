<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Transaksi</title>
    <style>
        #header {
            position: relative;
            width: 100%;
        }

        #header img {
            width: 100px;
        }

        #header h2 {
            position: relative;
            margin: 0;
            padding: 0;
            font-size: 25px;
            font-family: "Arial";
        }

        #header p {
            position: relative;
            margin: 0;
            padding: 0;
            font-size: 16px;
            font-family: "Arial";
        }

        h3 {
            position: relative;
            text-align: center;
            border-top: 2px solid #000;
            border-bottom: 2px solid #000;
            margin: 5px 0;
            padding: 10px 0;
            font-family: "Arial";
            text-transform: uppercase;
        }

        #dtTrans {
            position: relative;
            border: 1px solid #000;
            width: 100%;
            border-collapse: collapse;
        }

        #dtTrans thead {
            background: pink;
        }

        #dtTrans thead th {
            padding: 10px;
            text-align: center;
            font-family: "Arial";
            border-collapse: collapse;
        }

        #dtTrans tbody td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
            font-family: "Arial";
            border-collapse: collapse;
        }

        #dtTrans tfoot td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
            font-size: 22px;
            font-family: "Arial";
            border-collapse: collapse;
        }

        /* CSS */
        .button-56 {
            align-items: center;
            background-color: #fee6e3;
            border: 2px solid #111;
            border-radius: 8px;
            box-sizing: border-box;
            color: #111;
            cursor: pointer;
            display: flex;
            font-family: Inter, sans-serif;
            font-size: 12px;
            height: 25px;
            justify-content: center;
            line-height: 24px;
            max-width: 100%;
            padding: 0 25px;
            position: relative;
            text-align: center;
            text-decoration: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-56:after {
            background-color: #111;
            border-radius: 8px;
            content: "";
            display: block;
            height: 25px;
            left: 0;
            width: 100%;
            position: absolute;
            top: -2px;
            transform: translate(8px, 8px);
            transition: transform .2s ease-out;
            z-index: -1;
        }

        .button-56:hover:after {
            transform: translate(0, 0);
        }

        .button-56:active {
            background-color: #ffdeda;
            outline: 0;
        }

        .button-56:hover {
            outline: 0;
        }

        @media (min-width: 768px) {
            .button-56 {
                padding: 0 40px;
            }
        }
    </style>
</head>

<body>
    <table id="header">
        <tr>
            <td width="5%"><img src="{{ asset('assets/img/Logo.png') }}" alt=""></td>
            <td>
                <h2>ShopTronics</h2>
                <p>JL in aja dulu no 1 Kota Semarang</p>
                <a href="{{ url('/') }}" style="text-decoration: none"><button class="button-56"
                        role="button">Home</button></a>
            </td>
        </tr>
    </table>
    <h3>Laporan Transaksi</h3>
    <table id="dtTrans" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nota</th>
                <th>Tanggal</th>
                <th>Pelanggan</th>
                <th>Pembayaran</th>
                <th>Ppn 11%</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dtTrans as $rsTrans)
                <tr>
                    <td>{{ $rsTrans->trans_nota }}</td>
                    <td>{{ $rsTrans->trans_tanggal }}</td>
                    <td>{{ $rsTrans->pelanggan_nama }}</td>
                    <td>{{ $rsTrans->pembayaran }}</td>
                    <td style="text-align: right;">{{ number_format($rsTrans->trans_ppn, 0, ',', '.') }}</td>
                    <td style="text-align: right;">{{ number_format($rsTrans->trans_gtotal, 0, ',', '.') }}</td>
                </tr>
                @php
                    $ppntotal += $rsTrans->trans_ppn;
                    $total += $rsTrans->trans_gtotal;
                @endphp
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4"><strong>Grand Total :</strong></td>
                <td style="text-align: right;">{{ number_format($ppntotal, 0, ',', '.') }}</td>
                <td style="text-align: right;">{{ number_format($total, 0, ',', '.') }}</td>
            </tr>
        </tfoot>
    </table>
</body>

</html>
