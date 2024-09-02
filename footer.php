		</div>

		<footer id="footer" class="group">

			<?php

				if ( is_page_template('template-home.php') )
					dynamic_sidebar( 'Footer Widgets' );

			?>

			<p id="copyright" class="source-org vcard copyright"><small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>. All rights reserved. Designed and developed by <a href="http://www.dicimitech.com">DicimiTech</a>.</small></p>

		</footer>

	</div>

	<?php wp_footer(); ?>

<script src="<?php bloginfo('template_directory'); ?>/-/js/functions.js"></script>

<!--

	Asynchronous google analytics; this is the official snippet.
	Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.

	<script>

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>

-->

</body>

</html>