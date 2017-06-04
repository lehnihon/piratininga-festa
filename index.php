<?php
/**
 * @package site
 */

get_header(); ?>

<div id="topo" class="container-fluid">
	<div class="row">		
		<?php 
    	echo do_shortcode("[metaslider id=4]"); 
		?>
	</div>
</div>

<div id="fotos">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 fadeInUp wow">
				<h1>Festa Junina da Igreja Tenrikyo Piratininga</h1><br>
				<h5>Venha participar da nossa Festa Junina com várias atividades, atrações, comidas típicas e <br> também o nosso <strong>tradicional Bingo com prêmios sensacionais.</strong></h5>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4  fadeInUp wow">
				<img alt="bandeirinhas" class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/bandeirinhas.jpg"; ?>" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 fadeIn wow">
				<?php echo photo_gallery(3); ?>
			</div>
		</div>
	</div>
</div>

<div id="rifa">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 fadeInUp wow" >
				<h2>Sorteio da Rifa</h2><br>
				<h5>O sorteio da rifa será realizado durante a Festa Junina do Piratininga, cada rifa tem o valor de <strong>R$ 2,00.</strong></h5><br>
				<h5>Os ganhadores poderão retirar seus prêmios no local, caso não estejam presentes, serão comunicados através do telefone informado na rifa.</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3 fadeInUp wow text-center">
				<img alt="bandeirinhas" class="img-responsive e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/bandeirinhas2.png"; ?>" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 fadeInLeft wow">
				<img alt="premio1" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/premio1.png"; ?>" /><br><br>
				<p>Terceiro Prêmio <br><strong>Panela Elétrica</strong></p>
			</div>
			<div class="col-md-4 fadeInUp wow">
				<img alt="premio2" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/premio2.png"; ?>" /><br><br>
				<p>Segundo Prêmio <br><strong>iPad Mini</strong></p>
			</div>
			<div class="col-md-4 fadeInRight wow">
				<img alt="premio3" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/premio3.png"; ?>" /><br><br>
				<p>Primeiro Prêmio <br><strong>Smart TV 32 polegadas</strong></p>
			</div>
		</div>
	</div>
</div>

<div id="localizacao" class=" fadeIn wow" data-wow-delay="0.3s">
	<div class="container">
		<div class="row">
			<a target="_blank" href="https://www.google.com.br/maps/dir/''/igreja+tenrikyo+piratininga/@-23.5502433,-46.5963664,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x94ce5de2cbfc67ef:0xc956d29a09afe06c!2m2!1d-46.526326!2d-23.550259">
			<div class="col-md-6 col-md-offset-3 painel text-center  fadeInUp wow" data-wow-delay="0.3s">
					<img alt="pin" class="e-claro bandeira" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/bandeira.jpg"; ?>" /><br><br>
					<p>Festa Junina <br> Igreja Tenrikyo Piratininga</p><br>
					<p class="destaque">
						<strong>Rua Angical, 265 - Vila Nova Manchester <br> São Paulo - SP</strong>
					</p><br>
					<p class="destaque">
						11 2097-3537
					</p>
				
			</div>
			</a>
		</div>
	</div>
</div>

<div id="contato">
	<div class="container">
		<div class="col-md-12 animated fadeInUp wow">
			<?php echo do_shortcode('[contact-form-7 id="8" title="Formulário de contato 1"]'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
