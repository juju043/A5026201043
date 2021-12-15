@extends('layout.main')

@section('title', 'Tabel Karyawan')
@section('judulhalaman', 'Tabel Karyawan')

@section('konten')

    <div class="card">
        <div class="card-header d-flex">
          <h3 class="card-title">Tabel Karyawan</h3>
          <a href="/karyawan1/tambah" class="ml-auto d-inline-block btn btn-info"> + Tambah Karyawan Baru</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Pangkat</th>
                <th>Gaji</th>
            </tr>
            </thead>
            <tbody>
                @foreach($karyawan1 as $k)
                <tr>
                    <td>{{ $k->NIP }}</td>
                    <td>{{ $k->Nama }}</td>
                    <td>{{ $k->Pangkat }}</td>
                    <td>{{  number_format($k->Gaji, 0, ',', '.') }} </td>
                    <td>
                        <a href="/karyawan1/hapus/{{ $k->NIP }}" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i> Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>

        </div>

      </div>

@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
