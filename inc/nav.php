<div id="nav" class="nav">

	<div class="container">

		<ul>

			<li class="pi" onclick="removeMenu();"><a href="#home" class="active">Home</a></li>

			<li class="pi" onclick="removeMenu();"><a href="#about">About</a></li>

			<li class="pi" onclick="removeMenu();"><a href="#skills">Skills</a></li>

			<li class="pi" onclick="removeMenu();"><a href="#xp">Experience</a></li>

			<li class="pi" onclick="removeMenu();"><a href="#portfolio">Portfolio</a></li>

			<!-- <li><a href="#">Blog</a></li> -->

			<li class="pi" onclick="removeMenu();"><a href="#contact">Contact</a></li>

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