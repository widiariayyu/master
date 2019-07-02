@extends('layouts.admin')
@section('content')	

<section class="panel">
    <header class="panel-heading">
        <div class="panel-title pull-left">
            <h2>Data Jenis Kendaraan</h2> 
        </div>
        <div class="panel-title pull-right">
            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-md">
                        <button id="addJenisKendaraan" class="btn btn-primary" data-toggle="modal" data-target="#tambahJenis" href="#tambahJenis"> <i class="fa fa-plus"></i> Tambah Jenis Kendaraan </button>
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
                    <th>Jenis Kendaraan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="gradeX">
                    <td>Bus</td>
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

<div class="modal fade" id="tambahJenis" tabindex="-1" role="dialog" aria-labelledby="tambahJenis">
			<div class="modal-dialog" role="document">
			  	<div class="modal-content">
					<div class="modal-header">
				 		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  		<h4 class="modal-title" id="jenKendaraan">Tambah Jenis Kendaraan</h4>
					</div>
					<form action="#" method="post" id="form-edit-modal">
						<div class="modal-body">
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-4 col-form-label">Jenis Kendaraan </label>
							</div>
							<div class="form-group row">
								<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Jenis Merk Kendaraan" >
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
  
			var modal = document.getElementById('tambahJenis'); 
			  
			  
			window.onclick = function(event) { 
				if (event.target == modal) { 
					modal.style.display = "none"; 
				} 
			} 
		</script>
@endsection