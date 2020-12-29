@extends('layouts.main')


@section('title','Edit Profile Pegawai')
@section('container')
<div class="container">

    <form method="post" action="/detail/{{$pegawai->id}}">
        @method('patch')
        @csrf
        <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukan nama" value="{{$pegawai->nama}}">
        @error('nama')
        <div class="invalid-feedback">{{$message}}</div>    
        @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan email" value="{{$pegawai->email}}">
            @error('email')
            <div class="invalid-feedback">{{$message}}</div>    
            @enderror
        </div>
        <div class="form-group">
        <label for="jenis Kelamin">Jenis Kelamin</label>
            <Select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                <option value="{{$pegawai->jenis_kelamin}}">{{$pegawai->jenis_kelamin}}</option>
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </Select>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Ubah Data</button>
        <a href="/pegawai" class="btn btn-primary" style="text-decoration:none;">Kembali</a>
    </form>

</div>
@endsection