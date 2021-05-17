</div><!-- #content -->
</div><!--container-->
<!--
TODO set all links and acessibility attributes
-->
<footer id="footer" class="footer natue-component">
	<div class="footer__row">
		<div class="row">
			<div class="column large-5 footer__contact footer__left">
				<div class="footer__wrapper">
					<div class="footer__title">atendimento</div>
					<ul class="no-bullet">
						<li><a href="tel:(11) 2388-8229"><i class="sprite icons attendance"></i>11 2388 8229</a></li>
						<li><a href="mailto:contato@natue.com.br"><i class="sprite icons mail"></i>contato@natue.com.br</a></li>
					</ul>
				</div>
			</div>
			<div class="column large-4 footer__payment footer__right">
				<div class="footer__wrapper">
					<div class="footer__title">Formas de pagamento</div>
					<ul class="no-bullet">
						<li><a class="icon visa" href="#"></a></li>
						<li><a class="icon mastercard" href="#"></a></li>
						<li><a class="icon amex" href="#"></a></li>
						<li><a class="icon dinersclub" href="#"></a></li>
						<li><a class="icon elo" href="#"></a></li>
						<li><a class="icon boleto" href="#"></a></li>
					</ul>
				</div>
			</div>
			<div class="column large-3 footer__social footer__right">
				<div class="footer__wrapper">
					<div class="footer__title">rede sociais</div>
					<ul class="no-bullet">
						<li><a class="icon facebook" target="_blank" href="https://www.facebook.com/NatueOficial"></a></li>
						<li><a class="icon twitter" target="_blank" href="https://twitter.com/natueoficial"></a></li>
						<li><a class="icon gplus" target="_blank" href="https://plus.google.com/u/0/109811592474014646325/posts"></a></li>
						<li><a class="icon youtube" target="_blank" href="https://www.youtube.com/user/NatueOficial"></a></li>
						<li><a class="icon instagram" target="_blank" href="https://www.instagram.com/natueoficial/"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
    <div class="footer__row footer__newsletter_line">
		<div class="row">

				<div class="footer__newsletter__column">
					<span></span>
				</div>
				<div class="footer__newsletter__column">
					<div class="newsletter-info">
						<strong>Cadastre-se e receba ofertas</strong> exclusivas, dicas e receitas <strong>para uma vida mais saudável e equilibrada :)</strong>
					</div>
                    <div class="newsletter-form">
                        <form class="newsletter__form clearfix" id="footerNatueLifeNewsletterForm" action="<?php bloginfo('template_url'); ?>/newsletter.php" method="post">
                            <ul class="componentFormList">
                                <li class="name">
                                    <div class="tooltip "></div>
                                    <label for="name" class="required active">Nome <span class="required">*</span></label>
                                    <input data-validation-required="1" data-validation-required-message="Nome deve ser especificado" placeholder="digite seu nome" class="textinput" required="required" tabindex="1" name="name" id="NewsletterForm_name" type="text">
                                </li>
                                <li class="email">
                                    <div class="tooltip "></div>
                                    <label for="email" class="required active">E-mail <span class="required">*</span></label>
                                    <input data-validation-required="1" data-validation-required-message="E-mail deve ser especificado" data-validation-pattern="@^.+\@.+\..+$@" data-validation-pattern-message="E-mail Formato errado" placeholder="digite seu e-mail" class="textinput" required="required" tabindex="1" name="email" id="NewsletterForm_email" type="text">
                                </li>
                            </ul>
                            <button type="submit" id="footerNatueLifeNewsletterBtn">
                                eu quero </button>
                            <small class="successMessage" id="newsletterForm--tooltip"></small>
                            <div class="clear"></div>
                        </form>
                    </div>
				</div>
				<div class="clear"></div>

        </div>

    </div>
	<div class="footer__row footer__navigation">
		<div class="row">
            <div class="footer__column large-2">
                <ul class="no-bullet">
                    <li><a href="https://www.natue.com.br/quem-somos">Sobre a Natue</a></li>
                    <li><a href="https://www.natue.com.br/carreira">Carreira</a></li>

                </ul>
            </div>
            <div class="footer__column large-2">
                <ul class="no-bullet">
                    <li><a href="https://www.natue.com.br/contato">Contato</a></li>
                    <li><a href="https://www.natue.com.br/duvidas-frequentes">FAQ</a></li>
                </ul>
            </div>
            <div class="footer__column large-2">
                <ul class="no-bullet">
                    <li><a href="https://www.natue.com.br/politica-de-privacidade">Política de privacidade</a></li>
                    <li><a href="https://www.natue.com.br/termos-e-condicoes">Termos e condições</a></li>
                </ul>
            </div>
            <div class="footer__column large-2">
                <ul class="no-bullet">
                    <li><a href="https://www.natue.com.br/natuelife/receitas/">Receitas</a></li>
                    <li><a href="https://www.natue.com.br/glossario">Glossário</a></li>

                </ul>
            </div>
            <div class="footer__column large-2">
                <ul class="no-bullet">
                    <li><a href="https://www.natue.com.br/natuelife/">Artigos</a></li>
                    <li><a href="https://www.natue.com.br/mais-paginas">Mais Páginas</a></li>
                </ul>
            </div>
            <div class="footer__column large-2">
                <ul class="no-bullet">
                    <li><a href="https://www.natue.com.br/politica-de-frete">Política de Frete</a></li>
                    <li><a href="https://www.natue.com.br/blog">Blog</a></li>
                </ul>
            </div>
        </div>
	</div>
	<div class="footer__row footer__info">
		<div class="row">
			<div class="footer__wrapper sfooter__center">
				<div class="footer__logo">
					<img src="<?php echo get_option('static_url'); ?>/images/icons/footer-logo.png" alt="">
				</div>
				<div class="footer__corpright">© <?php echo date('Y'); ?> Natue comércio e importação de cosméticos e produtos alimentícios em geral s/a - CNPJ: 17.018.091/0001-95. Todos os direitos reservados.</div>
				<div class="footer__informations">
					<p>* Frete grátis válido para compras acima de R$150 em produtos para a região Sudeste. Demais regiões, consultar nossa política de frete grátis <a href="https://www.natue.com.br/politica-de-frete">clique aqui</a>;</p>
				</div>
			</div>
			<div class="footer__certificates">
				<a href="https://www.ebit.com.br/natue" target="_blank">
						<img height="55" width="55" src="<?php echo get_option('static_url'); ?>/images/icons/ebit.png">
				</a>
			</div>
		</div>
	</div>
</footer>

<?php
/**
* FACEBOOK
*/
?>
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
  FB.init({
    appId            : '1190743384380182',
    autoLogAppEvents : false,
    xfbml            : true,
    version          : 'v2.9'
  });
  FB.AppEvents.logPageView();
};

(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId=1190743384380182";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- NatueLabs -->
<?php
/**
 * TWITTER
 */
?>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<?php
/**
 * GOOGLE
 */
?>
<script type="text/javascript">
// google+ button
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
po.src = 'https://apis.google.com/js/plusone.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();

// tagmanager
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WBMJZD');

// general
(function($) {
	"use strict";
	/**
	 * Image scroll animations
	 */
	 $("a[href='#top']").click(function() {
		$("body").animate({ scrollTop: 0 }, "slow");
		return false;
	});
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('.footer-back-top').fadeIn();
		} else {
			$('.footer-back-top').fadeOut();
		}
	});
	$('.block-style-3-others img,.flickr_badge_image img,#wp-calendar tbody a, .widget-item-comments img, .author-icon i, .more-from-author, .cat-rss-link, .more-from-cat').tooltipster();
	$('.gallery a').magnificPopup({
		type: 'image',
		gallery:{
			enabled:true
		}
	});
	$('.popup-photo').magnificPopup({
		type: 'image',

	});
	$('.j-block-image, .featured-post-item, .carousel-post-image, .videos-post-image').hover(function() {
			$(this).find('.cool-hover').fadeTo("fast" , 0.6);
		}, function() {
			$(this).find('.cool-hover').hide();
		});

	$(".j-content, .widget-area").fitVids();
		$('input[type="text"]').not('.static').on({
					focus: function () {
							var $jthis = $(this);
							if ($jthis.val() === $jthis[0].defaultValue) $jthis.val('');
					},
					blur: function () {
							var $jthis = $(this);
							if ($jthis.val() === '') $jthis.val($jthis[0].defaultValue);
					}
			});
			$( ".search-submit" ).click(function() {
				$( "#j-search-form" ).submit();
		});
		$( ".widget-search-submit" ).click(function() {
				$( "#search_form_widget" ).submit();
		});

	$('.j-main-menu li, .j-top-menu li, .j-mobile-menu li').has('ul').children('a').append('&nbsp;&nbsp;<i class="fa fa-caret-down"></i>');
	$('.search-popup-button').click(function() {
		$('.j-search-form li ul').fadeToggle();
		return false;
	});

	$('.mobile-menu-button').click(function(){
	$('.mobile-menu-content').slideToggle('slow');
});
})(jQuery);
</script>
<script type="text/javascript">
		var OneSignal = window.OneSignal || [];

		//Webpush
		OneSignal.push([
				"sendTags",
				{
						ip: "<?php echo $_SERVER['REMOTE_ADDR']; ?>",
						url: "<?php echo $_SERVER['REQUEST_URI']; ?>"
				}
		]);
</script>
<?php wp_footer(); ?>
</body>
</html>
