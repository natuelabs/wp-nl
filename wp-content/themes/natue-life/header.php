<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
<?php wp_title(''); ?>
<?php if(wp_title('', false)) { echo ' - '; } ?>
<?php bloginfo('name'); ?>
</title>

<meta property="fb:pages" content="166201173520325"/>
<meta property="fb:app_id" content="1190743384380182" />

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- favicon block -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php bloginfo('template_url'); ?>/images/favicon/manifest.json">
<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/images/favicon/safari-pinned-tab.svg" color="#4E988B">

<meta name="theme-color" content="#4E988B">
<!-- /favicon block -->
<script async defer src="//static.chaordicsystems.com/static/loader.js" data-apikey="natue"></script>
<?php wp_head(); ?>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
	(adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-4554084810528185",
		enable_page_level_ads: true
	});
</script>

</head>

<body <?php body_class(); ?>>
<div id="j-container"  class="<?php echo ot_get_option('layout'); ?> ">

	<?php do_action( 'before' ); ?>

	<div class="natue-component off-canvas-wrap" data-offCanvas>
		<?php require 'lightbox.php'; ?>
        <?php require 'natue-header.php'; ?>
        <?php require 'natue-navigation.php'; ?>

        <a class="exit-off-canvas">
            <button class="header--icon--close" type="button">FECHAR</button>
        </a>
	</div>

	<div id="content" class="site-content">
		<nav class="natue-life__nav natue-component">
			<div class="row">
				<a class="nav-logo" href="<?php bloginfo('url') ?>" title="Natue Life">
					<img class="lazy" src="<?php bloginfo('template_url'); ?>/images/natuelife_novo.svg" alt="Natue Life">
				</a>
				<ul class="hide-mobile">
					<li><a href="/natuelife/saude/">SAÚDE</a></li>
					<li><a href="/natuelife/alimentacao/">ALIMENTAÇÃO</a></li>
					<li><a href="/natuelife/dietas/">DIETAS</a></li>
					<li><a href="/natuelife/fitness/">FITNESS</a></li>
					<li><a href="/natuelife/beleza-e-bem-estar/">BELEZA E BEM-ESTAR</a></li>
					<li><a href="/natuelife/receitas/">RECEITAS</a></li>
					<li><a href="/natuelife/historias-de-sucesso/">HISTÓRIAS DE SUCESSO</a></li>
				</ul>
				<div class="clear"></div>
			<div>
		</nav>
