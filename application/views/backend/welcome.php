<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('backend/head');?>
	<script type="text/javascript" src="<?php echo base_url();?>assets/tinymce-4.2.6/tinymce/tinymce.min.js"></script>
</head>
<body>
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
                    <h1 class="page-header">Settings</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button type="button" id="btnSaveWelcome" class="btn btn-default"><i class="fa fa-save fa-fw"></i> Save</button>
                        </div>
                        <div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Welcome</label>
                                            <div id="welcome"></div>
                                            <textarea class="form-control editor" rows="3" id="welcomes"></textarea>
                                        </div>
								</div>
							</div>
                            <!-- /.row (nested) -->
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
    <script src="<?php echo base_url()?>js/sbadmin2/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>js/sbadmin2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>js/sbadmin2/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>js/sbadmin2/dist/js/sb-admin-2.js"></script>
    <script type="text/javascript">
		(function($){

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
		}(jQuery))
    </script>
    

</body>
</html>
