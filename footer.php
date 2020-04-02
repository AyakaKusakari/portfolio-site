<footer id="footer">
		<div class="inner">

			<div class="copy">Copyright Ayaka Kusakari All Right Reserved.</div>

		</div><!-- /inner -->
	</footer><!-- /footer -->

	<div class="floating">
		<a href="#"><i class="fas fa-chevron-up"></i></a>
	</div>

    <?php wp_footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

	<script>
		// drawer
        $(document).ready(function() {
            $('.drawer').drawer();
		});
		
		// SmoothScroll
		jQuery('a[href^="#"]').click(function () {
			var header = 0; // jQuery( '#header' ).height();
			var speed = 350;
			var id = jQuery(this).attr('href');
			var target = jQuery('#' == id ? 'html' : id);
			var position = jQuery(target).offset().top - header;
			if (0 > position) {
				position = 0;
			}
			jQuery('html, body').animate(
				{
					scrollTop: position
				},
				speed
			);
			return false;
		});

		// トップへ戻る
		jQuery(window).on('scroll', function ($) {
			if (100 < jQuery(this).scrollTop()) {
				jQuery('.floating').fadeIn();
			} else {
				jQuery('.floating').fadeOut();
			}
		});

		// WOW
		new WOW().init();

	</script>
</body>

</html>