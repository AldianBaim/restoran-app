@extends('layouts.app')

@section('content')

 <h2>Edit user</h2>

 <form action="">
     <div class="form-group">
         <label for="">Nama</label>
         <input type="text" name="nama" class="form-control" value="{{ $user->nama }}">
     </div>
     <div class="form-group">
         <label for="">Email</label>
         <input type="text" name="email" class="form-control" value="{{ $user->email }}">
     </div>
     <div class="form-group">
         <label for="">Password</label>
         <input type="password" name="password" class="form-control" value="{{ $user->password }}">
     </div>
     <div class="form-group">
         <label for="">No HP</label>
         <input type="text" name="no_hp" class="form-control" value="{{ $user->no_hp }}">
     </div>
     <div class="form-group">
         <label for="">Alamat</label>
         <input type="text" name="alamat" class="form-control" value="{{ $user->alamat }}">
     </div>
     <div class="form-group">
         <button type="submit" class="btn btn-primary">Update</button>
     </div>
 </form>

@endsection