@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data 
			  	<div class="panel-title pull-right"><a href="{{ route('brain.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama User</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $a->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Email</label>	
			  			<input type="text" name="email" class="form-control" value="{{ $a->email}}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $a->judul }}"  readonly>

                      <div class="form-group">
			  			<label class="control-label">Berita</label>	
			  			<input type="text" name="berita" class="form-control" value="{{ $a->berita }}"  readonly>
			  			 
			  		<div class="form-group">
			  			<label class="control-label">Artikel</label>	
			  			<textarea rows="10" class="form-control" readonly>@foreach($a->Artikel as $data)
			  				-{{ $data->judul }}
			  				@endforeach
			  			</textarea> 
			  		</div>
                      </div>

			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection