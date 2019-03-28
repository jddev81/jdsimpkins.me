<div id="nav" class="nav">

	<div class="container">

		<ul>

			<li class="pi" onclick="removeMenu();"><a href="index.php#home" class="active">Home</a></li>

			<li class="pi" onclick="removeMenu();"><a href="index.php#about">About</a></li>

			<li class="pi" onclick="removeMenu();"><a href="index.php#skills">Skills</a></li>

			<li class="pi" onclick="removeMenu();"><a href="index.php#xp">Experience</a></li>

			<li class="pi" onclick="removeMenu();"><a href="index.php#portfolio">Portfolio</a></li>

			<!-- <li><a href="#">Blog</a></li> -->

			<li class="pi" onclick="removeMenu();"><a href="index.php#contact">Contact</a></li>

			<li class="mobile-nav-icon"><a href="javascript:void(0);" onclick="toggleMenu()"><i class="fa fa-bars"></i></a></li>

		</ul>

	</div><!--container-->

</div><!--nav-->
<script>
	function toggleMenu() {
		$('.pi').toggleClass('shown');
	}
	function removeMenu() {
		$('.pi').removeClass('shown');
	}
</script>