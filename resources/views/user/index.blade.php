@extends('layouts.app')

@section('content')

<h2>User</h2>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ url('users/create') }}" class="btn btn-success">Tambah user</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->no_hp }}</td>
                        <td>{{ $user->alamat }}</td>
                        <td>
                            <a href="{{ url('users') }}/{{ $user->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="{{ url('users/' . $user->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm(' Apakah anda yakin ingin menghapus?')" ;
                                    class="btn btn-danger">Delete</button>
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