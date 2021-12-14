@extends('layout.happy')
@section('title', 'sandal')
@section('judulhalaman', 'sandal')

@section('konten')
	<h4 style="margin-left: 30px ; padding-top: 10px">Detail sandal</h4>
	<a href="/sandal/tambah" style="margin-left: 30px"> + Tambah sandal Baru</a>

	<br/>
    @foreach($sandal as $k)
    <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Merk sandal</th>
              <th scope="col">Stock sandal</th>
              <th scope="col">Tersedia (Y/N)</th>
              <th scope="col">Opsi</th>
          </tr>
      </thead>
      <tbody>

		<tr>
			<td><input value="{{ $k->merksandal }}" readonly type="text" id="merk" required="required" name="merk" class="form-control"></td>
			<td><input value="{{ $k->stocksandal }}" readonly type="text" id="stock" required="required" name="stock" class="form-control"></td>
            <td><input value="{{ $k->tersedia }}" readonly type="text" id="tersedia" required="required" name="tersedia" class="form-control"></td>
			<td>
				<a href="/sandal/edit/{{ $k->kodesandal}}">Edit</a>
				|
				<a href="/sandal/hapus/{{ $k->kodesandal}}">Hapus</a>
			</td>
		</tr>
        <a href="/sandal" class="btn btn-primary"> Kembali</a>
		@endforeach
        </tbody>
        </table>
    </div>
    @endsection
