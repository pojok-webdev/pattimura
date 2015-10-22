<?php session_start(); ?>

<?php $_SESSION['login'] = "0"; ?>

<?php //if ($_SESSION['login'] === "1") {echo "sudah login";} 

		//else {echo "belum login";}

		?>

    <?php //echo $_SESSION['login']; ?> 

    <h3 class="md-headline" style="color: #EF6C00; line-height: 5px;">LOGIN MEMBER</h3>

    <a style="font-size: 1.5em"><strong>Sorry, login failed!</strong></a> <br><a>Please enter the correct username and password!</a>

    <br><br>

    <md-divider></md-divider>

    <form name='input' action='route.php' method='post'>



        <md-input-container >

            <label>Username</label>

            <input name="username" value="" >

            <div class='error'></div>

        </md-input-container>

        <md-input-container >

            <label>Password</label>

            <input type="password" name="password">

            <div class='error'></div>

        </md-input-container>

        <md-input-container >

			
            <input type="submit" value="Login" name="sub" style="background-color:#999999;color:#fff;padding:5px;" >


        </md-input-container>

       


<input type="hidden" name="formsender" value="login" >
    </form>

    <?php

	$users = array(

		"budi"=>"budi123",

		"yudi"=>"yudi123",

		"rudi"=>"rudi123",

		"dudi"=>"dudi123",

		"sudi"=>"sudi123",

	);

	$params = $_POST;

	if($users[$params['username']]===$params['password']){

		$_SESSION['login'] = "1"; header('location:index-member.php');

	}else{

		$_SESSION['login'] = "0"; 

		header('location:page.php?content=log');

	}

	?>

        <!--<md-button style="float:right"class="md-raised md-primary">Submit</md-button>-->

    <br><br>

    
