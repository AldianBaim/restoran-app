@extends('layouts.app')

@section('content')
<h2>Orderan</h2>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ url('orderan/create') }}" class="btn btn-success">Buat orderan</a>
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
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orderans as $orderan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $orderan->menu->nama_menu }}</td>
                        <td>Rp {{ $orderan->menu->harga }}</td>
                        <td>{{ $orderan->menu->jenis }}</td>
                        <td>
                            <img src="{{ asset('storage/images/' . $orderan->menu->gambar) }}" class="img-thumbnail "
                                width="100" alt="">
                        </td>
                        <td>{{ $orderan->status }}</td>
                        <td>
                            <form action="{{ url('orderan/' . $orderan->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm(' Apakah anda yakin ingin menghapus? ')"
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