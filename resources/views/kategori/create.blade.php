@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Kategori 
			  	<div class="panel-title pull-right"><a href="{{ route('kategori.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('kategori.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('news') ? ' has-error' : '' }}">
			  			<label class="control-label"> News </label>	
			  			<input type="text" name="news" class="form-control"  required>
			  			@if ($errors->has('news'))
                            <span class="help-block">
                                <strong>{{ $errors->first('news') }}</strong>
                            </span>
                        @endif
			  		</div>
                   <div class="form-group {{ $errors->has('infotainment') ? ' has-error' : '' }}">
			  			<label class="control-label"> Infotainment </label>	
			  			<input type="text" name="infotainment" class="form-control"  required>
			  			@if ($errors->has('infotainment'))
                            <span class="help-block">
                                <strong>{{ $errors->first('infotainment') }}</strong>
                            </span>
                        @endif
			  		</div>
                     <div class="form-group {{ $errors->has('sport') ? ' has-error' : '' }}">
			  			<label class="control-label"> Sport </label>	
			  			<input type="text" name="sport" class="form-control"  required>
			  			@if ($errors->has('sport'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sport') }}</strong>
                            </span>
                        @endif
			  		</div>
                   <div class="form-group {{ $errors->has('politik') ? ' has-error' : '' }}">
			  			<label class="control-label"> Politik </label>	
			  			<input type="text" name="politik" class="form-control"  required>
			  			@if ($errors->has('politik'))
                            <span class="help-block">
                                <strong>{{ $errors->first('politik') }}</strong>
                            </span>
                        @endif
			  		</div>
                      <div class="form-group {{ $errors->has('fashion') ? ' has-error' : '' }}">
			  			<label class="control-label"> Fashion </label>	
			  			<input type="text" name="fashion" class="form-control"  required>
			  			@if ($errors->has('fashion'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fashion') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('artikel_id') ? ' has-error' : '' }}">
			  			<label class="control-label"> Artikel </label>	
			  			<select name="artikel_id" class="form-control">
			  				@foreach($art as $data)
			  				<option value="{{ $data->id }}">{{ $data->judul }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('artikel_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('artikel_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection