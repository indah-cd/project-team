<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
	crossorigin="anonymous">
</head>
<body>

	<div class="container">
	<!-- @if(session('sukses'))
	<div class="alert alert-success" role="alert">
	  				{{session('sukses')}}
	</div>
	@endif -->
		<div class="row">
			<div class="col-6">
				<h1>Data Dosen Gabut University</h1>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
				  Tambah Data Dosen
				</button>
				
			</div>

			<table class="table table-hover ">
				<tr>
					<th>NIDN</th>
					<th>NAMA DOSEN</th>
					<th>JENIS KELAMIN</th>
					<th>AGAMA</th>
					<th>ALAMAT</th>
					<th>EMAIL</th>
					<th>FAKULTAS</th>
					<th>PROGRAM STUDI</th>
					<th>JADWAL</th>


				</tr>
				
				@foreach($data_dosen as $dosen)
				<tr>
					<td>{{$dosen->nidn}}</td>
					<td>{{$dosen->nama}}</td>
					<td>{{$dosen->jenis_kelamin}}</td>
					<td>{{$dosen->agama}}</td>
					<td>{{$dosen->alamat}}</td>
					<td>{{$dosen->email}}</td>
					<td>{{$dosen->fakultas}}</td>
					<td>{{$dosen->program_studi}}</td>
					<td>{{$dosen->jadwal}}</td>
					
				</tr>
				@endforeach
			</table>
			</div>
	</div>

	<!-- Modal 
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form action="/siswa/create" method="POST">
				        	{{csrf_field()}}

					  <div class="form-group">
					    <label for="exampleInputEmail1">NIDN</label>
					    <input name="nidn" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIDN">
					    </div>

					    <div class="form-group">
					     <label for="exampleInputEmail1">Nama Dosen</label>
					    <input name="nama_dosen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Dosen">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
					    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
					      <option value="L">Laki-Laki</option>
					      <option value="P">Perempuan</option>
					    </select>
					  </div>

					  <div class="form-group">
					     <label for="exampleInputEmail1">Agama</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
					  </div>

					  
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Alamat</label>
					    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					  </div>
					
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary">Submit</button>
				      </form>
				      </div>
				    </div>
				  </div>
				</div> --> 


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

