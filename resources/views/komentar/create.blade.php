@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Post 
			  	<div class="panel-title pull-right"><a href="{{ route('komentar.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('komentar.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('komentar') ? ' has-error' : '' }}">
			  			<label class="control-label">Komentar</label>	
			  			<input type="text" name="komentar" class="form-control"  required>
			  			@if ($errors->has('komentar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('komentar') }}</strong>
                            </span>
                        @endif

                     <div class="form-group {{ $errors->has('tanggal') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal</label>	
			  			<input type="date" name="tanggal" class="form-control"  required>
			  			@if ($errors->has('tanggal'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal') }}</strong>
                            </span>
                        @endif

			  		</div>
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