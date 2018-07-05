@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data User
			  	<div class="panel-title pull-right"><a href="{{ route('brain.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama</th>
					  <th>Email</th>
					  <th>Judul</th>
                      <th>Berita</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($a as $data2)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data2->nama }}</td>
				    	<td>{{ $data2->email }}</td>
				    	<td>{{ $data2->judul }}</td>
				    	<td>{{ $data2->berita }}</td>
				    	
						
						<td>
							<a class="btn btn-warning" href="{{ route('brain.edit',$data2->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('brain.show',$data2->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('brain.destroy',$data2->id) }}">
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