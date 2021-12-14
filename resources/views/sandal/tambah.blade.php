@extends('layout.happy')
@section('title','sandal')
@section('judulhalaman', 'sandal')

@section('konten')
	<h4 style="margin-left: 30px; padding-top: 10px">Edit Data sandal</h4>

	<a href="/sandal" style="margin-left: 30px"> Kembali</a>

	<br/>
    <div class="card-body card-block">
        @foreach($sandal as $k)
        <form style="padding-left: 15px" action="/sandal/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $k->kodesandal }}">
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Merk sandal</label></div>
            <div class="col-12 col-md-9"><input type="text" required="required" name="merk" value="{{ $k->merksandal }}" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Stok sandal</label></div>
            <div class="col-12 col-md-9"><input type="number" required="required" name="stock" value="{{ $k->stocksandal }}" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Ketersediaan</label></div>
            <div class="col-12 col-md-9">
                <input type="radio" id="ada" name="tersedia" value="Y" @if($k->tersedia==='Y') checked="checked" @endif>
                <label for="ada">Tersedia</label><br>
                <input type="radio" id="tidak" name="tersedia" value="N" @if($k->tersedia==='N') checked="checked" @endif>
                <label for="tidak">Tidak Tersedia</label><br>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
        </form>
        @endforeach
    </div>
    @endsection
