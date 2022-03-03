@extends('layouts.app')

@section('content')

<h2>transaksi</h2>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No transaksi</th>
                        <th>Tanggal</th>
                        <th>Nama Customer</th>
                        <th>No Meja</th>
                        <th>Total Harga</th>
                        <th>Bayar</th>
                        <th>Kembalian</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transaksis as $transaksi)
                    <tr>
                        <td>{{ $transaksi->id }}</td>
                        <td>{{ $transaksi->tanggal }}</td>
                        <td>{{ $transaksi->nama_customer }}</td>
                        <td>{{ $transaksi->no_meja }}</td>
                        <td>{{ $transaksi->total_harga }}</td>
                        <td>{{ $transaksi->bayar }}</td>
                        <td>{{ $transaksi->kembalian }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection