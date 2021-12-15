@extends('layout.main')

@section('title', 'Tambah Karyawan')
@section('judulhalaman', 'Tambah Karyawan')

@section('konten')

<div class="container">
    <form  action="/karyawan1/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="NIP">NIP</label>
          <input type="text" class="form-control" name="NIP" id="NIP" placeholder="NIP" required="required">
        </div>
        <div class="form-group">
            <label for="Nama">Nama</label>
            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" required="required">
        </div>
        <div class="form-group">
          <label for="Pangkat">Pangkat</label>
          <input type="text" class="form-control" name="Pangkat" id="Pangkat" placeholder="Pangkat" required="required">
        </div>
        <div class="form-group">
          <label for="Gaji">Gaji</label>
          <input type='number' class="form-control" name="Gaji" id="Gaji" placeholder="Gaji" required="required">
        </div>
        <div class="form-group d-flex justify-content-between">
            <a href="karyawan1" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data </button>
        </div>
      </form>
</div>

@endsection
