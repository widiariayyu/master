@extends('layouts.admin')
@section('content')	

                    <!-- start: page -->
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="panel-title pull-left">
                                <h2>Data Kartu Pengawasan</h2> 
                            </div>
                            <div class="panel-title pull-right">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb-md">
                                            <button id="addKartuPengawasan" class="btn btn-primary" data-toggle="modal" data-target="#tambahKartuPengawasan" href="#tambahKartuPengawasan"> <i class="fa fa-plus"></i> Tambah Kartu Pengawasan </button>
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
										<th>No. Surat Kartu Pengawasan 1</th>
										<th>No. Surat Kartu Pengawasan 2 </th>
										<th>No. Surat Kartu Pengawasan 3</th>
										<th>Kadis </th>
                                        <th>Jabatan</th>
                                        <th>NIP </th>
                                        <th>Biaya</th>
                                        <th>Tahun Kendaraan </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeX">
										<td>551.21</td>
										<td>ASK.05</td>
										<td>DISPMPT</td>
										<td>I Gusti Ngurah Sudarsana, SH, MH</td>
										<td>Pembina Utama Muda (IV/c)</td>
										<td>19610901198910 1 002</td>
                                        <td>75000</td>
                                        <td>2017-07-01</td>
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
				</section>
			</div>

		<div class="modal fade" id="tambahKartuPengawasan" tabindex="-1" role="dialog" aria-labelledby="tambahKartuPengawasan">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="kartuPengawasan">Tambah Data Kartu Pengawasan </h4>
					</div>
					<form action="#" method="post" id="form-edit-modal">
						<div class="modal-body">
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-8 col-form-label"><b>No. Surat Pengawasan 1</b> </label>
							</div>
							<div class="form-group row">
								<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Nomor Surat Pengawasan 1" >
							</div>

							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-8 col-form-label"><b>No. Surat Pengawasan 2</b> </label>
							</div>
							<div class="form-group row">
								<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Nomor Surat Pengawasan 2" >
							</div>

							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-8 col-form-label"><b>No. Surat Pengawasan 3</b> </label>
							</div>
							<div class="form-group row">
								<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Nomor Surat Pengawasan 3" >
							</div>
	
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-8 col-form-label"><b>Nama Kadis</b> </label>
							</div>
							<div class="form-group row">
								<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Nama Kepala Dinas" >
							</div>
	
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-8 col-form-label"><b>Jabatan</b> </label>
							</div>
							<div class="form-group row">
								<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Jabatan" >
							</div>
	
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-8 col-form-label"><b>NIP</b> </label>
							</div>
							<div class="form-group row">
								<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="NIP" >
							</div>
	
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-8 col-form-label"><b>Biaya</b> </label>
							</div>
							<div class="form-group row">
								<input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Biaya" >
							</div>
	
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-8 col-form-label"><b>Tahun Kendaraan</b> </label>
							</div>
							<div class='input-group date' id='datetimepicker3'>
								<input type='date' class="form-control" />
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
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
	  
			var modal = document.getElementById('tambahKartuPengawasan'); 
				  
				  
			window.onclick = function(event) { 
				if (event.target == modal) { 
					modal.style.display = "none"; 
				} 
			} 
		</script>

		<script type="text/javascript">
			$(function () {
				$('#datetimepicker3').datetimepicker({
					format: 'LT'
				});
			});
		</script>
@endsection