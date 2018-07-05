@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data 
			  	<div class="panel-title pull-right"><a href="{{ route('komentar.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Komentar</label>	
			  			<input type="text" name="komentar" class="form-control" value="{{ $komentar->komentar }}"  readonly>
			  		</div>

                      <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Tanggal</label>	
			  			<input type="date" name="tanggal" class="form-control" value="{{ $komentar->tanggal }}"  readonly>
			  		</div>

			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection