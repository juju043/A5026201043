@extends('layout.happy')
@section('title', 'sandal')
@section('judulhalaman', 'sandal')

@section('konten')
	<h4 style="margin-left: 30px ; padding-top: 10px">Data'sandal
</h4>
	<a href="/sandal/tambah" style="margin-left: 30px"> + Tambah'sandal
     Baru</a>

	<br/>
    <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Merk</th>
              <th scope="col">Opsi</th>
          </tr>
      </thead>
      <tbody>
        @foreach('sandal
     as $k)
		<tr>
			<td>{{ $k->mer'sandal
         }}</td>
			<td>
                <a href="'sandal
            /detail/{{ $k->kod'sandal
             }}">Detail</a>
                |
				<a href="'sandal
            /edit/{{ $k->kod'sandal
            }}">Edit</a>
				|
				<a href="'sandal
            /hapus/{{ $k->kod'sandal
            }}">Hapus</a>
			</td>
		</tr>
		@endforeach
        </tbody>
        </table>
        <a style="margin-left: 12px ; ">Halaman : {{ 'sandal
        ->currentPage() }}</a> <br/>
	    <a style="margin-left: 12px ; ">Jumlah Data : {{ 'sandal
        ->total() }}</a> <br/>
	    <a style="margin-left: 12px ; ">Data Per Halaman : {{ 'sandal
        ->perPage() }}</a> <br/>
        <br>
        {{ 'sandal
    ->links() }}
    </div>
    @endsection
