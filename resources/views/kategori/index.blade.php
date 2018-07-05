@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Orang Tua
			  	<div class="panel-title pull-right"><a href="{{ route('kategori.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>News</th>
                      <th>Infotainment</th>
                      <th>Sport</th>
                      <th>Politik</th>
                      <th>Fashion</th>
					  <th>Artikel</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($kategori as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->news }}</td>
                        <td>{{ $data->infotainment }}</td>
                        <td>{{ $data->sport }}</td>
                        <td>{{ $data->politik }}</td>
                        <td>{{ $data->fashion }}</td>
				    	<td><p>{{ $data->Artikel->judul }}</p></td>
<td>
	<a class="btn btn-warning" href="{{ route('kategori.edit',$data->id) }}">Edit</a>
</td>
<td>
	<a href="{{ route('kategori.show',$data->id) }}" class="btn btn-success">Show</a>
</td>
<td>
	<form method="post" action="{{ route('kategori.destroy',$data->id) }}">
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