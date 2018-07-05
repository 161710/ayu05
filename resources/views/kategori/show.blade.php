@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data 
			  	<div class="panel-title pull-right"><a href="{{ route('kategori.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">News</label>	
			  			<input type="text" name="news" class="form-control" value="{{ $kategori->news }}"  readonly>
			  		</div>
                      <div class="form-group">
			  			<label class="control-label">Infotainment</label>	
			  			<input type="text" name="infotainment" class="form-control" value="{{ $kategori->infotainment }}"  readonly>
			  		</div>
                      <div class="form-group">
			  			<label class="control-label">Sport</label>	
			  			<input type="text" name="sport" class="form-control" value="{{ $kategori->sport }}"  readonly>
			  		</div>
                      <div class="form-group">
			  			<label class="control-label">Politik</label>	
			  			<input type="text" name="politik" class="form-control" value="{{ $kategori->politik }}"  readonly>
			  		</div>
                      <div class="form-group">
			  			<label class="control-label">Fashion</label>	
			  			<input type="text" name="fashion" class="form-control" value="{{ $kategori->fashion }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Artikel</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $kategori->Artikel->judul }}"  readonly>

			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection