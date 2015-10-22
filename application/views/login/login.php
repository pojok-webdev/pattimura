	<?php //$_SESSION['login'] = "0"; ?>
	<?php //echo $_SESSION['login']; ?>
    <h3 class="md-headline" style="color: #EF6C00; line-height: 5px;">LOGIN MEMBER</h3>
    <a style="font-size: 0.8em">Please login to access member area</a>
    <br><br>
    <md-divider></md-divider>
    <form name='input' action='<?php echo base_url();?>route' method='post'>
        <md-input-container >
            <label>Username</label>
            <input name="username" value="" >
            <div class='error'><?php //echo $userError ?></div>
        </md-input-container>
        <md-input-container >
            <label>Password</label>
            <input type="password" name="password">
            <div class='error'><?php //echo $passError ?></div>
        </md-input-container>
        <md-input-container >
			
            <input type="submit" value="Login" name="sub" style="background-color:#999999;color:#fff;padding:5px;" >
        </md-input-container>
        <input type="hidden" name="formsender" value="login" >
    </form>
        <!--<md-button style="float:right"class="md-raised md-primary">Submit</md-button>-->
    <br><br>
    <br><br>
