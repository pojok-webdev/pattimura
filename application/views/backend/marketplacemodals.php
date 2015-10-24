<div class="modal fade" id="mdlAddMarketPlace" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="mdlAddMarketPlaceTitle">Add Marketplace</h4>
			</div>
			<div class="modal-body">
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form role="formx">
								<div class="form-group">
									<label>Title</label>
									<input id="txttitle" class="form-control" placeholder="Enter text">
								</div>
								<div class="form-group">
									<label>Preview</label>
									<textarea id="txtpreview" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label>Detail</label>
									<textarea id="txtdetail" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label>Logo</label>
									<img id="imgLogo" class="imgLogo"/>
									<input type="file" onchange="uploadImage(event)">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default closeModal" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary closeModal" id="btnSaveMarketplace">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<div class="modal fade" id="mdlInp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="mdlInpTitle">Modal title</h4>
			</div>
			<div class="modal-body">
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form role="formx">
								<div class="form-group">
									<label>Preview</label>
									<textarea id="txtInp" class="form-control"></textarea>
								</div>
							</form>
						</div>
					</div>
				</div>		
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default closeModal" data-dismiss="modal">Close</button>
				<button type="button" id="btnSaveArea" class="btn btn-primary closeModal">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<div class="modal fade" id="mdlInputText" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="mdlInputTextTitle">Modal title</h4>
			</div>
			<div class="modal-body">
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form role="formx">
								<div class="form-group">
									<label>Title</label>
									<input id="txtInpText" class="form-control" placeholder="Enter text">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default closeModal" data-dismiss="modal">Close</button>
				<button type="button" id="btnSaveText" class="btn btn-primary closeModal">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<div class="modal fade" id="mdlImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">
				<img id="imgMarketPlace" class="imgLogo" />
				<input type="file" id="inpFile" onchange="uploadImage(event)" />
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default closeModal" data-dismiss="modal">Close</button>
				<button type="button" id="btnSaveImg" class="btn btn-primary closeModal">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<div class="modal fade" id="mdlConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Removal Confirmation</h4>
			</div>
			<div class="modal-body">
				Are you sure want to remove the data ?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default closeModal" data-dismiss="modal">No</button>
				<button type="button" id="btnRemove" class="btn btn-primary closeModal">Yes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
