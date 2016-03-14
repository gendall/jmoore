<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package jmoore
 */
?>

	</div> <!-- /.main-content-wrapper -->

	<footer>
		<div class="content">

			

			<ul class="footer-social-links">
				<li><a class="facebook-link" href="" target="_blank">Facebook</a></li>
				<li><a class="twitter-link" href="" target="_blank">Twitter</a></li>
				<li><a class="pinterest-link" href="" target="_blank">Pinterest</a></li>
				<li><a class="blogger-link" href="" target="_blank">Blogger</a></li>
				<li><a class="goodreads-link" href="" target="_blank">Goodreads</a></li>
			</ul> <!-- /.footer-social-links -->

			<ul class="footer-nav">
				<li><a href="">FAQ</a></li>
				<li><a href="">Connect</a></li>
			</ul> <!-- /.footer-nav -->

		</div> <!-- /.content -->
	</footer>

	<div class="overlay"></div>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/libs.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='https://www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X','auto');ga('send','pageview');
	</script>

</body>
</html>