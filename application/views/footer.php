<div class="footer">
        <a>Copyright &copy; 2015 Entrepreneurs' Organization Indonesia. All Rights Reserved.</a>
    </div>
    <br><br>




</div>


<md-sidenav md-component-id="left" class="md-sidenav-left">
    <ul id="accordion">
    <li><a href="index.php">HOME</a></li>
    <li style="border-top:1px solid #ccc"></li>
    <li><a>MASTERY</a>
        		<ul>                  
                  <li><a href="page.php?content=upcoming">UPCOMING LEARNING</a></li>
                  <li><a href="page.php?content=events">PAST LEARNINGS</a></li>
                  <li><a href="page.php?content=myeo">MyEO</a></li>                  
                  <li><a href="page.php?content=books">BOOKS</a></li>
                  <li><a href="https://www.eonetwork.org/why-join/global-events/" target="_blank">GLOBAL EVENTS</a></li>
                  <li><a href="https://www.eonetwork.org/why-join/multi-chapter-events/" target="_blank">REGIONAL EVENTS</a></li>
                  <li><a href="https://www.eonetwork.org/why-join/executive-education/" target="_blank">EXECUTIVE EDUCATION</a></li>
                </ul>
    </li>
    <li style="border-top:1px solid #ccc"></li>
    <li><a href="page.php?content=membership">MEMBERSHIP</a></li>
    <li style="border-top:1px solid #ccc"></li>
    <li><a href="page.php?content=marketplace">MARKETPLACE</a></li>
    <li style="border-top:1px solid #ccc"></li>
    <li><a href="page.php?content=partnership">PARTNERSHIP</a></li>
    <li style="border-top:1px solid #ccc"></li>
    <li><a href="page.php?content=contact">CONTACT US</a></li>
</ul>
<script>
	$("#accordion > li > a").click(function(){
	 
		if(false == $(this).next().is(':visible')) {
			$('#accordion ul').slideUp(300);
		}
		$(this).next().slideToggle(300);
	});

</script>
</md-sidenav>

</body>

</html>
