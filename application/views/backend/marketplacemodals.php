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
<div class="modal fade" id="mdlTemplate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default closeModal" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary closeModal">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
