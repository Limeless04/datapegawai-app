@extends('layouts.main')

@section('title','Profil Pegawai')
@section('container')
<div class="container">
        <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="{{$pegawai->nama}}" disabled>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="{{$pegawai->email}}" disabled>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" placeholder="{{$pegawai->jenis_kelamin}}" disabled>
        </div>
        <br>
        <form action="{{$pegawai->id}}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn bg-danger" style="color: white" >Hapus</button>
        </form>
        <a href="{{$pegawai->id}}/edit" style="text-decoration: none; color:white;"class="btn btn-info">Edit</a>
        <a href="/pegawai" class="btn btn-primary" style="text-decoration:none;">Kembali</a>
</div>
@endsection