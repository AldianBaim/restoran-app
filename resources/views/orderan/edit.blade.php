@extends('layouts.app')

@section('content')

<h2>edit menu</h2>

<form action="{{ url('menu/' . $menu->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @CSRF
    <div class="form-group">
        <label for="">Nama menu</label>
        <input type="text" name="nama_menu" value="{{ $menu->nama_menu }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Jenis</label>
        <select name="jenis" id="" class="form-control">
            <option value="makanan">Makanan</option>
            <option value="minuman">Minuman</option>
            <option value="cemilan">Cemilan</option>
        </select>
        {{-- <input type="text" name="jenis_id" class="form-control"> --}}
    </div>
    <div class="form-group">
        <label for="">Harga</label>
        <input type="number" name="harga" value="{{ $menu->harga }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>
    <div class="form-group">
        <img src="{{ url('storage/images/'.$menu->gambar) }}" class="img-thumbnail w-50" alt="">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection