@extends('layouts.admin')
@section('content')	

                    <!-- start: page -->
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-title pull-left">
                                <h2>Data Pasal Peraturan Mentri</h2> 
                            </div>
                            <div class="panel-title pull-right">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb-md">
                                            <button id="addPasal" class="btn btn-primary" data-toggle="modal" data-target="#tambahPasalPermen" href="#tambahPasalPermen"> <i class="fa fa-plus"></i> Tambah Pasal Permen </button>
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
                                        <th>Pasal Permen</th>
                                        <th>No. Permen</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="Permen">
                                        <td>Pasal 39 ayat (1)</td>
                                        <td>108 Tahun 2017 </td>
                                        <td class="actions">
                                            <div class="col-sm-6">
                                                <div class="mb-md">
                                                    <button id="editRow" class="btn btn-warning" ><i class="fa fa-pencil"></i>Edit </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="Permen">
                                        <td>Pasal 48 ayat (1) huruf (i)</td>
                                        <td>108 Tahun 2017</td>
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
					<!-- end: page -->
			</div>

		<div class="modal fade" id="tambahPasalPermen" tabindex="-1" role="dialog" aria-labelledby="tambahPasalPermen">
			<div class="modal-dialog" role="document">
					<div class="modal-content">
					<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="pasal">Tambah Pasal Peraturan Mentri</h4>
					</div>
					<form action="#" method="post" id="form-edit-modal">
						<div class="modal-body">
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-4 col-form-label"><b>Pasal Peraturan Mentri</b></label>
								<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Pasal Peraturan Mentri" >
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-4 col-form-label"><b>No. Peraturan Mentri</b></label>
								<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Nomor Peraturan Mentri" >
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
	
			var modal = document.getElementById('tambahPasalPermen'); 
				
				
			window.onclick = function(event) { 
				if (event.target == modal) { 
					modal.style.display = "none"; 
				} 
			} 
        </script>
@endsection
