<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center animated fadeInUp wow">
					<div class="menu-footer clearfix">
						<div class="menu-op"><a href="#page">início</a></div>
						<div class="menu-op"><a href="#fotos">fotos</a></div>
						<div class="menu-op"><a href="#rifa">rifa</a></div>
						<div class="menu-op"><a href="#localizacao">localização</a></div>
						<div class="menu-op"><a href="#contato">fale conosco</a></div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12 text-center animated fadeInUp wow">
					<div id="redes_footer">
						<ul class="redes_sociais_footer">
			              <li class="youtube"><a target="_blank" href="https://www.google.com.br/maps/dir/''/igreja+tenrikyo+piratininga/@-23.5502433,-46.5963664,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x94ce5de2cbfc67ef:0xc956d29a09afe06c!2m2!1d-46.526326!2d-23.550259"></a></li>
			              <li class="instagram"><a target="_blank" href="https://www.instagram.com/piratiningakyokai/"></a></li>
			              <li class="twitter"><a target="_blank" href="https://www.facebook.com/igrejatenrikyopiratininga/"></a></li>
						</ul>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center text-footer fadeInUp wow">
					&copy; Copyright <?php echo date('Y') ?> - Festa Junina da Igreja Tenrikyo Piratininga
				</div>
				<div class="col-md-1 col-md-offset-2 text-right">
					<a target="_blank" href="http://seimidigital.com.br">
					<img alt="seimi" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-small.png"; ?>" />
					</a>
				</div>
			</div>
		</div>
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
