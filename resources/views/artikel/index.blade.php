@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Artikel
			  	<div class="panel-title pull-right"><a href="{{ route('artikel.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Judul </th>
					  <th>Gambar</th>
					  <th>Berita</th>
                      <th>Tanggal</th>
                      <th>User</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($art as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->judul }}</td>
				    	<td><p>{{ $data->gambar }}</p></td>
				    	<td><p>{{ $data->berita }}</p></td>
				    	<td><p>{{ $data->tanggal }}</p></td>
				    	<td><p>{{ $data->Brain->nama }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('artikel.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('artikel.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('artikel.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection