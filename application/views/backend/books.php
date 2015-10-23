<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('backend/head');?>
	<script type="text/javascript" src="<?php echo base_url();?>assets/tinymce-4.2.6/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
		function uploadImage(evt){
		  var input = evt.target;
		  var fileReader = new FileReader();
		  fileReader.onloadend = function(){
			  $("body").css("cursor","wait");
				resizeImage2(fileReader.result,300,function(uri){
					$(".imgLogo").attr("src",uri);
					$("body").css("cursor","default");
				});
		  }
		  fileReader.readAsDataURL(input.files[0]);
		}	
	</script>
</head>
<body>
	<?php $this->load->view('backend/marketplacemodals');?>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<?php $this->load->view('backend/left-top-menu');?>
            <!-- /.navbar-header -->
            <?php $this->load->view('backend/navigator');?>
            <!-- /.navbar-top-links -->
			<?php $this->load->view('backend/leftmenu');?>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Market Places</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button type="button" id="btnAddMarketPlace" class="btn btn-default"><i class="fa fa-plus fa-fw"></i> Add</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="tMarketPlace">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Preview</th>
                                            <th>Detail</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php foreach($marketplaces as $marketplace){?>
                                        <tr class="odd gradeX" trid="<?php echo $marketplace->id;?>">
                                            <td class="mptitle"><?php echo $marketplace->title;?></td>
                                            <td class="mppreview"><?php echo $marketplace->preview;?></td>
                                            <td class="mpdetail"><?php echo $marketplace->detail;?></td>
                                            <td class="center mpimg"><img src="<?php echo $marketplace->img;?>"></td>
                                            <td class="center">
												<button type="button" class="btn btn-default btnEditTitle">
													<i class="fa fa-edit fa-fw"></i> Edit Title
												</button>
												<button type="button" class="btn btn-default btnEditPreview">
													<i class="fa fa-edit fa-fw"></i> Edit Preview
												</button>
												<button type="button" class="btn btn-default btnEditDetail">
													<i class="fa fa-edit fa-fw"></i> Edit Detail
												</button>
												<button type="button" class="btn btn-default btnEditImage">
													<i class="fa fa-edit fa-fw"></i> Edit Image
												</button>
												<button type="button" class="btn btn-default btnRemove">
													<i class="fa fa-remove fa-fw"></i> Remove
												</button>
											</td>
                                        </tr>
                                        <?php }?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script src="<?php echo base_url();?>assets/startbootstrap-sb-admin-2-1.0.7/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/startbootstrap-sb-admin-2-1.0.7/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/startbootstrap-sb-admin-2-1.0.7/metisMenu/dist/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>assets/startbootstrap-sb-admin-2-1.0.7/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/startbootstrap-sb-admin-2-1.0.7/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/startbootstrap-sb-admin-2-1.0.7/dist/js/sb-admin-2.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/marketplaces/marketplaces.js">

    </script>

</body>

</html>
