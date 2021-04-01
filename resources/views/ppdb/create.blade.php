@extends('layouts.main')
@section('content')
    <section class="container">
        <form action="/ppdb" method="POST">
            @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIS</label>
            <input type="text" name="nis" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NAMA</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">TEMPAT LAHIR</label>
            <input type="text" name="tempat_lahir" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">TANGGAL LAHIR</label>
            <input type="text" name="tanggal_lahir" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">ALAMAT</label>
            <textarea class="form-control" name="alamat" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ASAL SEKOLAH</label>
            <input type="text" name="asal_sekolah" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">KELAS</label>
            <input type="text" name="kelas" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">JURUSAN</label>
            <input type="text" name="jurusan" class="form-control">
        </div>
        <div>
            <button class="btn btn-success" type="sumbit">Submit</button>
        </div>
        </form>
    </section>
@endsection
