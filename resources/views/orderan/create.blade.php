@extends('layouts.app')

@section('content')
<h2>Buat order</h2>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Menu makanan</th>
                        <th>Harga</th>
                        <th>Jenis</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menus as $menu)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $menu->nama_menu }}</td>
                        <td>Rp {{ $menu->harga }}</td>
                        <td>{{ $menu->jenis }}</td>
                        <td>
                            <img src="{{ asset('storage/images/' . $menu->gambar) }}" class="img-thumbnail " width="100"
                                alt="">
                        </td>
                        <td>
                            <form action="{{ url('orderan') }}" method="POST" class="d-inline">
                                @csrf
                                <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                                <button type="submit" class="btn btn-success"
                                    style="border: 0px;border-radius: 0;margin: 0 -5px">Tambah
                                    Order</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection