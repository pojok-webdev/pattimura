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
					$("#imgLogo").attr("src",uri);
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
                                        <tr class="odd gradeX">
                                            <td><?php echo $marketplace->title;?></td>
                                            <td><?php echo $marketplace->preview;?></td>
                                            <td><?php echo $marketplace->detail;?></td>
                                            <td class="center"><img src="<?php echo $marketplace->img;?>"></td>
                                            <td class="center">
												<button type="button" class="btn btn-default btnEdit"><i class="fa fa-edit fa-fw"></i> Edit</button>
												<button type="button" class="btn btn-default btnRemove"><i class="fa fa-remove fa-fw"></i> Remove</button>
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

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/startbootstrap-sb-admin-2-1.0.7/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/startbootstrap-sb-admin-2-1.0.7/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/startbootstrap-sb-admin-2-1.0.7/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>assets/startbootstrap-sb-admin-2-1.0.7/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/startbootstrap-sb-admin-2-1.0.7/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/startbootstrap-sb-admin-2-1.0.7/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
        $("#btnAddMarketPlace").click(function(){
			$("#mdlAddMarketPlace").modal();
		});
		tinymce.init({
			selector: "textarea",
			theme: "modern",
			plugins: [
				"advlist autolink lists link image charmap print preview hr anchor pagebreak",
				"searchreplace wordcount visualblocks visualchars code fullscreen",
				"insertdatetime media nonbreaking save table contextmenu directionality",
				"emoticons template paste textcolor colorpicker textpattern imagetools"
			],
			toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
			toolbar2: "print preview media | forecolor backcolor emoticons",
			image_advtab: true,
			templates: [
				{title: 'Test template 1', content: 'Test 1'},
				{title: 'Test template 2', content: 'Test 2'}
			]
		});
		$('#btnSaveMarketplace').click(function(){
			$.ajax({
				url:thisdomain+'marketplaces/save',
				data:{
					title:$('#txttitle').val(),
					preview:$('#txtpreview').val(),
					detail:$('#txtdetail').val(),
					img:$('#imgLogo').attr('src')
					},
				type:'post',
				success:function(data){
					console.log('data',data);
				},
				error:function(err){
					console.log('err',err);
				}
			});
		});
		$('#tMarketPlace').on('click','.btnEdit',function(){
			$("#mdlAddMarketPlace").modal();
		});
		$('#tMarketPlace').dataTable();
    });
    </script>

</body>

</html>
