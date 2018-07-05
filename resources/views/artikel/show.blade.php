@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data
			  	<div class="panel-title pull-right"><a href="{{ route('artikel.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $art->judul }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Gambar</label>
						<input type="text" name="gambar" class="form-control" value="{{ $art->gambar }}"  readonly>
			  		</div>

                      <div class="form-group">
			  			<label class="control-label">Berita</label>
						<input type="text" name="berita" class="form-control" value="{{ $art->berita }}"  readonly>
			  		</div>

                      <div class="form-group">
			  			<label class="control-label">Tanggal</label>
						<input type="text" name="tanggal" class="form-control" value="{{ $art->tanggal }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">User</label>
						<input type="text" name="brain_id" class="form-control" value="{{ $art->Brain->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
                    <strong>Komentar</strong><br>@foreach($art->Komentar as $data){{ $data->komentar }} @endforeach
                    </div>

			  			</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection