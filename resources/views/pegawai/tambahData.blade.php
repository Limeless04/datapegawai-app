@extends('layouts.main')


@section('title','Profile Pegawai')
@section('container')
<div class="container">


    <form method="post" action="/tambahData">
        @csrf
        <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukan nama" value="{{old('nama')}}">
        @error('nama')
        <div class="invalid-feedback">{{$message}}</div>    
        @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="email" name="email" placeholder="Masukan email" value="{{old('email')}}">
            @error('email')
            <div class="invalid-feedback">{{$message}}</div>    
            @enderror
        </div>
        <div class="form-group">
        <label for="jenis Kelamin">Jenis Kelamin</label>
            <Select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                <option value="">Pilih...</option>
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </Select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/pegawai" class="btn" style="text-decoration:none;">Kembali</a>
    </form>

</div>
@endsection