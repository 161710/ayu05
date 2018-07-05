@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data 
			  	<div class="panel-title pull-right"><a href="{{ route('artikel.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('artikel.update',$art->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label"> Judul </label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $art->judul }}" required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>

                      <div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
			  			<label class="control-label"> Gambar </label>	
			  			<input type="text" name="gambar" class="form-control" value="{{ $art->gambar }}" required>
			  			@if ($errors->has('gambar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gambar') }}</strong>
                            </span>
                        @endif
			  		</div>

                      <div class="form-group {{ $errors->has('berita') ? ' has-error' : '' }}">
			  			<label class="control-label"> Berita </label>	
			  			<input type="text" name="berita" class="form-control" value="{{ $art->berita }}" required>
			  			@if ($errors->has('berita'))
                            <span class="help-block">
                                <strong>{{ $errors->first('berita') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal</label>	
			  			<input type="text" value="{{ $art->tanggal }}" name="tanggal" class="form-control"  required>
			  			@if ($errors->has('tanggal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('brain_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Dokter</label>	
			  			<select name="brain_id" class="form-control">
			  				@foreach($dokter as $data)
			  				<option value="{{ $data->id }}" {{ $selectedDokter == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('brain_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('brain_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('komentar') ? ' has-error' : '' }}">
			  			<label class="control-label"> Komentar </label>	
			  			<select name="komentar" class="form-control js-example-basic-multiple" multiple="multiple">
			  				@foreach($komentar as $data)
			  				<option value="{{ $data->id }}"{{ (in_array($data->id, $selected)) ? ' selected="selected"' : '' }}>{{ $data->komentar }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('komentar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('komentar') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection