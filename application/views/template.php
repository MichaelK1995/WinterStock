<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	// Add stylesheet
	$this->template->stylesheet->add('http://twitter.github.com/bootstrap/assets/css/bootstrap.css');

?><!doctype html>
<html>
	<head>
		<title><?php echo $this->template->title ?> - WinterStock</title>

		<meta charset="utf-8">
		<meta name="description" content="<?php echo $this->template->description; ?>">
		<meta name="author" content="">
		<?php echo $this->template->meta; ?>

		<?php echo $this->template->stylesheet; ?>
	</head>

	<body>
		<!-- Navbar -->
		<div class="navbar navbar-fixed-top navbar-inverse">
			<div class="navbar-inner">
				<div class="container ">
					<a class="brand" href="#">WinterStock</a>
					<ul class="nav"><?
						// nav list
						$list = array(
							array('orders', 'Pending'),
						);

						if(logged_in()) {
							$list[] = array('access/logout', 'Logout');
						} else {
							$list[] = array('access/login', 'Login');
						}

						foreach($list as $link) {
							echo '<li';
							if($link[0] == $this->template->active) echo ' class="active"'; 
							echo '>';
							echo anchor($link[0], $link[1]);
							echo '</li>';
						}
					?></ul>
				</div>
			</div>
		</div>
		
		<div class="container" style="margin-top: 48px">
			<!-- title -->
			<h2><? echo $this->template->title; ?></h2>

			<!-- content -->
			<?php
				// This is the main content partial
				echo $this->template->content;
			?>

			<hr>

			<!-- footer -->
			<footer>
				<p><?= $this->template->footer->prepend("&copy; " . anchor('http://github.com/spaceemotion/WinterStock', 'Winterstock') . " - 2013"); ?></p>
			</footer>
		</div>

		<!-- Javascript -->
		<script src="//code.jquery.com/jquery-latest.min.js"></script>
		<?php echo $this->template->javascript; ?>
	</body>
</html>