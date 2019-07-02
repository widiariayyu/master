@extends('layouts.admin')
@section('content')	


<section class="panel">
    <header class="panel-heading">
        <div class="panel-title pull-left">
            <h2>Data Wilayah</h2> 
        </div>
        <div class="panel-title pull-right">
            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-md">
                        <button id="addWilayah" class="btn btn-primary" data-toggle="modal" data-target="#tambahWilayah" href="#tambahWilayah"> <i class="fa fa-plus"></i> Tambah Wilayah </button>
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
                    <th>Wilayah</th>
                    <th>Kota</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="wilayah">
                    <td>Badung</td>
                    <td>Mangupura</td>
                    <td class="actions">
                        <div class="col-sm-6">
                            <div class="mb-md">
                                <button id="editRow" class="btn btn-warning" ><i class="fa fa-pencil"></i>Edit </button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="wilayah">
                    <td>Denpasar</td>
                    <td>Denpasar</td>
                    <td class="actions">
                        <div class="col-sm-6">
                            <div class="mb-md">
                                <button id="editRow" class="btn btn-warning" ><i class="fa fa-pencil"></i>Edit </button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="wilayah">
                    <td>Klungkung</td>
                    <td>Semarapura</td>
                    <td class="actions">
                        <div class="col-sm-6">
                            <div class="mb-md">
                                <button id="editRow" class="btn btn-warning" ><i class="fa fa-pencil"></i>Edit </button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="wilayah">
                    <td>Karangasem</td>
                    <td>Amplapura</td>
                    <td class="actions">
                        <div class="col-sm-6">
                            <div class="mb-md">
                                <button id="editRow" class="btn btn-warning" ><i class="fa fa-pencil"></i>Edit </button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="wilayah">
                    <td>Tabanan</td>
                    <td>Tabanan</td>
                    <td class="actions">
                        <div class="col-sm-6">
                            <div class="mb-md">
                                <button id="editRow" class="btn btn-warning" ><i class="fa fa-pencil"></i>Edit </button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="wilayah">
                    <td>Bangli</td>
                    <td>Bangli</td>
                    <td class="actions">
                        <div class="col-sm-6">
                            <div class="mb-md">
                                <button id="editRow" class="btn btn-warning" ><i class="fa fa-pencil"></i>Edit </button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="wilayah">
                    <td>Gianyar</td>
                    <td>Gianyar</td>
                    <td class="actions">
                        <div class="col-sm-6">
                            <div class="mb-md">
                                <button id="editRow" class="btn btn-warning" ><i class="fa fa-pencil"></i>Edit </button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="wilayah">
                    <td>Buleleng</td>
                    <td>Singaraja</td>
                    <td class="actions">
                        <div class="col-sm-6">
                            <div class="mb-md">
                                <button id="editRow" class="btn btn-warning" ><i class="fa fa-pencil"></i>Edit </button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="wilayah">
                    <td>Negara</td>
                    <td>Jembrana</td>
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

<div class="modal fade" id="tambahWilayah" tabindex="-1" role="dialog" aria-labelledby="tambahWilayah">
				<div class="modal-dialog" role="document">
					  <div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <h4 class="modal-title" id="Wilayah">Tambah Wilayah</h4>
						</div>
						<form action="#" method="post" id="form-edit-modal">
							<div class="modal-body">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-4 col-form-label"><b>Wilayah</b></label>
									<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Nama Wilayah" >
								</div>
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-4 col-form-label"><b>Kota</b></label>
									<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Nama Kota dari Wilayah" >
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
	  
				var modal = document.getElementById('tambahWilayah'); 
				  
				  
				window.onclick = function(event) { 
					if (event.target == modal) { 
						modal.style.display = "none"; 
					} 
				} 
			</script>
@endsection