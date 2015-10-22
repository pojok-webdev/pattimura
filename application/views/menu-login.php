<div layout="row" layout-padding>
        <div flex hide-gt-sm>
            <md-button style=" padding: 0px;margin: 0px;left: -20px;top: 10px; position: relative;"
                       hide-gt-sm ng-click="openLeftMenu()"
                       class="md-primary">
                MENU
            </md-button>
        </div>
        <div flex="30" flex-sm="80">
            <img src="<?php echo base_url();?>img/logo.png" width="100%">
        </div>
        <div flex="50" hide-md hide-sm>
        </div>
        <div flex="10" hide-sm style="text-align:left;">
            <a style="padding-right:10px;"href="http://www.eonetwork.org" target="_blank"><img src="<?php echo base_url();?>img/eo-link.jpg"/></a>
        </div>
        <div flex="10" hide-sm style="text-align:left;">
            <a href="https://www.facebook.com/groups/120808158061794/" target="_blank"><img src="<?php echo base_url();?>img/fb-logo.jpg"/></a> 
        </div>
</div>
<div layout="row" layout-padding style="margin-top:-20px;">
        <!--div flex="5" hide-md hide-sm>
        </div-->
        <?php
				$learning = "";
				$myeo = "";
				$membership = "";
				$marketplace = "";
				$contact = "";
				$login = "";
				$home = "";
			switch ($_GET['content']){
		
				case "events": 

					$learning = "active";

					break;

				case "events": 

					$learning = "active";

					break;

				case "upcoming": 

					$learning = "active";

					break;

				case "books": 

					$learning = "active";

					break;

				case "myeo": 

					$myeo = "active";

					break;

				case "membership": 

					$membership = "active";

					break;

				case "membership-form": 

					$membership = "active";

					break;

				case "marketplace": 

					$marketplace = "active";

					break;

				case "marketplace-form": 

					$marketplace = "active";

					break;

				case "marketplace-padinet": 

					$marketplace = "active";

					break;

				case "marketplace-infinys": 

					$marketplace = "active";

					break;

				case "marketplace-cheetah": 

					$marketplace = "active";

					break;

				case "partners": 

					$partners = "active";

					break;

				case "contact": 

					$contact = "active";

					break;

				case "login": 

					$login = "active";

					break;

				default :

					$home="active";

					$learning="";

					$myeo="";

					$membership="";

					$marketplace="";

					$partners="";

					$contact="";

					$login="";

					break;

				};

		?>

        <div flex hide-sm class="ddmenu">

            <ul id="drop-nav">

              <li class="<?php echo $home; ?>"><a href="<?php echo base_url();?>page?content=home">HOME</a></li>

              <!--<li class="<?php echo $learning; ?>"><a href="#">MASTERY</a>

                <ul>                  

                  <li><a href="page.php?content=upcoming">UPCOMING LEARNING</a></li>

                  <li><a href="page.php?content=events">PAST LEARNINGS</a></li>

                  <li><a href="page.php?content=myeo">MyEO</a></li> 

                  <li><a href="#">FORUM RESEOURCES</a></li>                 

                  <li><a href="page.php?content=books">BOOKS</a></li>

                  <li><a href="https://www.eonetwork.org/why-join/global-events/" target="_blank">GLOBAL EVENTS</a></li>

                  <li><a href="https://www.eonetwork.org/why-join/multi-chapter-events/" target="_blank">REGIONAL EVENTS</a></li>

                  <li><a href="https://www.eonetwork.org/why-join/executive-education/" target="_blank">EXECUTIVE EDUCATION</a></li>

                </ul>

              </li>-->
              <li class="<?php echo $membership; ?>"><a href="<?php echo base_url();?>page?content=membership">MEMBERSHIP</a></li>
              <li class="<?php echo $marketplace; ?>"><a href="<?php echo base_url();?>page?content=marketplace">MARKETPLACE</a>
              	<ul>                  
                  <li><a href="<?php echo base_url();?>page?content=partners">PARTNERS</a></li>
                </ul>
              </li>
              <li class="<?php echo $contact; ?>"><a href="<?php echo base_url();?>page?content=contact">CONTACT US</a></li>
              <li class="login"><a href="<?php echo base_url();?>page?content=login">LOGIN MEMBER</a></li>
            </ul>          
        </div>
    </div>
