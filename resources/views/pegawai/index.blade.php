@extends('layouts.main')

@section('title','Daftar Pegawai')
@section('container')
<div class="container">
  <br>
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
    <h3 style="text-align: center;padding:10px 10px 10px 10px;">Daftar Pegawai</h3>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($pegawai as $p)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$p->nama}}</td>
            <td>{{$p->jenis_kelamin}}</td>
            <td>{{$p->email}}</td>
            <td><a href="/detail/{{$p->id}}" style="text-decoration: none;" class="badge rounded-pill bg-info">Detail</a>
          </tr>
          @endforeach
        </tbody>
      </table>
      <a href="/tambahData" style="text-decoration: none;" class="btn btn-primary">Tambah Data</a>
</div>

@endsection