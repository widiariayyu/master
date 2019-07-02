@extends('layouts.admin')
@section('content')	


<section class="panel">
        <header class="panel-heading">
            <div class="panel-title pull-left">
                <h2>Data Angkutan Sewa Khusus</h2> 
            </div>
            <div class="panel-title pull-right">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-md">
                            <button id="addAngkutan" class="btn btn-primary" data-toggle="modal" data-target="#tambahAngkutan" href="#tambahAngkutan"> <i class="fa fa-plus"></i> Tambah Perusahaan </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped" id="datatable-editable">
                <thead>
                    <tr>
                        <th>ID </th>
                        <th>Kategori </th>
                        <th>Alamat</th>
                        <th>Wilayah </th>
                        <th>No. Telepon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="gradeX">
                        <td>1</td>
                        <td>Koperasi</td>
                        <td>Koperasi A</td>
                        <td>Jalan Raya ABC</td>
                        <td>Denpasar</td>
                        <td>089123456789</td>
                        <td class="actions">
                            <div class="col-sm-6">
                                <div class="mb-md">
                                    <button id="editRow" class="btn btn-warning" ><i class="fa fa-pencil"></i>Edit </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    
		<div class="modal fade" id="tambahAngkutan" tabindex="-1" role="dialog" aria-labelledby="tambahAngkutan">
			<div class="modal-dialog" role="document">
			  	<div class="modal-content">
					<div class="modal-header">
				 		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  		<h4 class="modal-title" id="angkutanSewa">Tambah Data Perusahaan </h4>
					</div>
					<form action="#" method="post" id="form-edit-modal">
						<div class="modal-body">
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-8 col-form-label"><b>Kategori Perusahaan</b> </label>
							</div>
							<div class="form-group row">
								<select class="col-sm-12 form-control" name="katperusahaan" id="katperusahaan" required style="width: 100%;"></select>
							</div>

							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-8 col-form-label"><b>Nama Perusahaan</b> </label>
							</div>
							<div class="form-group row">
								<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Nama Perusahaan" >
							</div>

							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-8 col-form-label"><b>Nama Pemimpin Perusahaan</b> </label>
							</div>
							<div class="form-group row">
								<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Jenis Merk Kendaraan" >
							</div>

							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-8 col-form-label"><b>Alamat Perusahaan</b> </label>
							</div>
							<div class="form-group row">
								<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Jenis Merk Kendaraan" >
							</div>

							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-8 col-form-label"><b>Wilayah</b> </label>
							</div>
							<div class="form-group row">
								<select class="form-control" name="wilayahPerusahaan" id="wilayahPerusahaan" required style="width: 100%;"></select>
							</div>

							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-8 col-form-label"><b>No. Badan Hukum</b> </label>
							</div>
							<div class="form-group row">
								<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Nomor Badan Hukum Perusahaan" >
							</div>

							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-8 col-form-label"><b>No. Telepon</b> </label>
							</div>
							<div class="form-group row">
								<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Nomor Telepon Perusahaan" >
							</div>
						</div>

						<div class="modal-footer">
					  		<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					  		<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</form>
			  	</div>
			</div>
		</div>

		<script> 
  
			var modal = document.getElementById('tambahAngkutan'); 
			  
			  
			window.onclick = function(event) { 
				if (event.target == modal) { 
					modal.style.display = "none"; 
				} 
			} 
		</script>
@endsection