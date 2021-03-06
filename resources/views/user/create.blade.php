@extends('layouts.app')

@section('content')

<h2>tambah user</h2>

<form action="{{ url('users') }}" method="POST">
    @CSRF
    <div class="form-group">
        <label for="">Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="">No HP</label>
        <input type="text" name="no_hp" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Level</label>
        <select name="level" id="" class="form-control">
            <option value="manager">Manager</option>
            <option value="kasir">Kasir</option>
            <option value="admin">Admin</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Alamat</label>
        <input type="text" name="alamat" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection