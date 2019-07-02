@extends('layouts.admin')
@section('content')	

<section class="panel">
    <header class="panel-heading">
        <div class="panel-title pull-left">
            <h2>Data Warna</h2> 
        </div>
        <div class="panel-title pull-right">
            <div class="row">
                <div class="col-sm-12">
                    <div class="mb-md">
                        <button id="addWarna" class="btn btn-primary" data-toggle="modal" data-target="#tambahWarna" href="#tambahWarna"> <i class="fa fa-plus"></i> Tambah Warna </button>
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
                    <th>Warna</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="gradeX">
                    <td>Merah</td>
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

<div class="modal fade" id="tambahWarna" tabindex="-1" role="dialog" aria-labelledby="tambahWarna">
				<div class="modal-dialog" role="document">
					  <div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <h4 class="modal-title" id="PromoModal">Tambah Warna</h4>
						</div>
						<form action="#" method="post" id="form-edit-modal">
							<div class="modal-body">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-4 col-form-label"><b>Warna</b></label>
									<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Nama Warna" >
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
	  
				var modal = document.getElementById('tambahWarna'); 
				  
				  
				window.onclick = function(event) { 
					if (event.target == modal) { 
						modal.style.display = "none"; 
					} 
				} 
			</script>
@endsection