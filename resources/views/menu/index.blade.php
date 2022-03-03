@extends('layouts.app')

@section('content')
<h2>Daftar menu</h2>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ url('menu/create') }}" class="btn btn-success">Tambah menu</a>
    </div>
    <div class="card-body">
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
                            <a href="{{ url('menu/'. $menu->id . '/edit') }}" class="btn btn-primary">Edit</a>
                            <form action="{{ url('menu/' . $menu->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Apakah anda yakin akan dihapus?')"
                                    class="btn btn-danger"
                                    style="border: 0px;border-radius: 0;margin: 0 -5px">Hapus</button>
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