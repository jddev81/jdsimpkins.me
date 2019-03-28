<?php
	require_once "inc/header.php";
	require_once "inc/nav.php";
	require_once "inc/portfolio.php";
 ?>


<script>
	function changeNav() {
		$('a').removeClass('active');
	   	$("[href='index.php#portfolio']").addClass('active');
	   	//alert('changed');
	}
	changeNav();	
</script>


<div class="portfolio-page-container wow fadeInUp">


	<div class="container">

		<?php if(isset($error)) : ?>
			<h1><?php echo $errorTitle; ?></h1>
			<p><?php echo $errorMsg; ?></p>
		<?php else : ?>

		<h1><?php echo $projectTitle; ?></h1>

		<div class="row">

			<div class="col-sm-5">

				<img class="img-fluid" src="<?php echo $projectImg; ?>" alt="<?php echo $projectTitle; ?>">

				<div class="row links">
					<div class="col-lg-6"><a class="btn <?php echo (empty($projectLink)) ? 'disabled' : ''; ?>" href="<?php echo $projectLink; ?>" target="_blank"><i class="icon fas fa-external-link-alt"></i> View Project</a></div>
					<div class="col-lg-6"><a class="gh btn <?php echo (empty($githubLink)) ? 'disabled' : ''; ?>" href="<?php echo $githubLink; ?>" target="_blank"><i class="icon fab fa-github"></i> View On Github</a></div>
				</div>

				<h3 class="skills-head">Skills Used</h3>
				<ul class="skills">
					<?php 
						foreach($skills as $skill) {
							echo '<li>' . $skill . '</li>';
						}
					?>
				</ul>
				<div class="clear-fix" style="height:35px;"></div>
			</div>

			<div class="col-sm-7">

				<?php require_once $aboutProject; ?>

			</div>

		</div>

		<?php endif; ?>

	</div>


</div>





<?php require_once "inc/footer.php"; ?>