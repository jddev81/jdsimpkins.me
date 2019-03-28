<?php
	require_once "inc/header.php";
	require_once "inc/nav.php";
	require_once "inc/portfolio.php";
 ?>


<script>
	function changeNav() {
		$('a').removeClass('active');
	   	$("[href='#portfolio']").addClass('active');
	   	//alert('changed');
	}
	changeNav();	
</script>


<div class="portfolio-page-container">


	<div class="container">

		<h1>The Hand Car Wash</h1>

		<div class="row">

			<div class="col-sm-5">

				<img class="img-fluid" src="img/portfolio/theHandCarWash.PNG" alt="The Hand Car Wash">

			</div>

			<div class="col-sm-7">

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</div>

		</div>

	</div>


</div>





<?php require_once "inc/footer.php"; ?>