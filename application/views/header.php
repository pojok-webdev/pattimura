<?php
/*	switch($_GET['content']){
		case 'myeo':
			if ($_SESSION['login'] === "0"){
				$_SESSION['pendingpage'] = "mpage.php?content=myeo";
				if($_GET['content']!=='login'){
					header('location:page.php?content=login');
				}
			}
		break;
		default:
		break;
	}*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="<?php echo base_url();?>css/angular-material.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/index.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url();?>css/jquery.bxslider.css" type="text/css">
</head>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url();?>js/node_modules/angular/angular.js"></script>
<script src="<?php echo base_url();?>js/node_modules/angular-aria/angular-aria.js"></script>
<script src="<?php echo base_url();?>js/node_modules/angular-animate/angular-animate.js"></script>
<script src="<?php echo base_url();?>js/node_modules/angular-material/angular-material.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.bxslider').bxSlider({
            auto		: true,
            controls	: true,
            pager		: false,
			captions	: true,
			adaptiveHeight: true,
            mode		: 'fade'
            });
    });
</script>
<script src="<?php echo base_url();?>js/app.js"></script>
<body ng-app="EoApp">
<div class="container-web" ng-controller="AppCtrl">
