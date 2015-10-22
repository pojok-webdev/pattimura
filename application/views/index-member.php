<?php session_start(); ?>
<?php //if ($_SESSION['login'] === "1") {echo "sudah login";} 
		//else {echo "belum login";}
		?>
<?php $page = "mpage"; ?>
<?php require 'header.php'; ?>
<?php include 'menu-member.php'; ?>
<?php include 'content.php'; ?><!-- #content -->
<?php require 'footer-member.php'; ?>
