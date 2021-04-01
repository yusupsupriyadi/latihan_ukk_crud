@extends('layouts.master')
@section('content')
    <section class="container">
      <a href="/ppdb/create" class="btn btn-primary">Create</a>
        <table class="table table-bordered pt-5">
  <thead>
    <tr>
      <th scope="col">NIS</th>
      <th scope="col">NAMA</th>
      <th scope="col">JENIS KELAMIN</th>
      <th scope="col">TEMPAT LAHIR</th>
      <th scope="col">TANGGAL LAHIR</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">ASAL SEKOLAH</th>
      <th scope="col">KELAS</th>
      <th scope="col">JURUSAN</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($ppdbs as $ppdb)
        <tr>
      <td>{{$ppdb->nis}}</td>
      <td>{{$ppdb->nama}}</td>
      <td>{{$ppdb->jenis_kelamin}}</td>
      <td>{{$ppdb->tempat_lahir}}</td>
      <td>{{$ppdb->tanggal_lahir}}</td>
      <td>{{$ppdb->alamat}}</td>
      <td>{{$ppdb->asal_sekolah}}</td>
      <td>{{$ppdb->kelas}}</td>
      <td>{{$ppdb->jurusan}}</td>
      <td>
          <a class="btn btn-warning" href="/ppdb/{{$ppdb->id}}/edit">Edit</a>
          <form action="/ppdb/{{$ppdb->id}}" method="POST">
            @method('DELETE')
            @csrf
            <input type="submit" value="Delete">
          </form>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
    </section>
@endsection