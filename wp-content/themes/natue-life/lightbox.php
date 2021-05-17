<div class="lightboxOverlay" id="lightboxOverlay">
</div>

<div id="lightbox" class="lightbox">
</div>
<input type="hidden" name="lightBoxTimer" id="lightBoxTimer" value="6000">
<div id="newsletterConfirmation" data-qa="lightboxNewsletterConfirmation" style="display : none;" class="newsletter-confirmation">
    <button type="button" class="closeLightbox newsletter-confirmation__close"></button>
    <div class="newsletter-confirmation__content">
        <div class="newsletter-confirmation__content__header">
            OBRIGADA POR
            <br> ESCOLHER A NATUE :)
        </div>
        Prepare-se para receber
        <br> descontos incríveis!

        <strong>Aqui está o seu cupom de</strong>
        <div class="newsletter-confirmation__content__desc">
            10% OFF
        </div>
        <input type="text" id="newsletterVoucher" class="static" value="BEMVINDO10%" readonly>
        <button onclick="newsletterCopyVoucherCms()">aproveitar agora</button>
        <script>
            function newsletterCopyVoucherCms() {
                window.Natue.Utils.copyToClipboard('newsletterVoucher');
                window.Natue.lightbox.hide();
                window.location.href = "/ofertas.html";
            }
        </script>
        <br>
        <div class="newsletter-confirmation__content__mini">*Insira o código acima na página de finalizar compra. Válido por 10 dias para compras acima de R$ 99,00. Uma utilização por CPF.</div>
    </div>
</div>
<div id="newsletterContent" class="newsletter-lightbox" data-qa="lightboxNewsletterForm">
    <button type="button" class="closeLightbox newsletter-lightbox__close"></button>
    <div class="newsletter-lightbox__content">
        <div class="newsletter">
            <form class="newsletter__form clearfix" id="popupNatueLifeNewsletterForm" action="<?php bloginfo('template_url'); ?>/newsletter.php" method="post">
                <div id="all-text">
                    <div class="intro">
                        Cadastre-se e <strong> receba orfertas <br>
                            exclusivas, </strong> dicas e receitas!
                    </div>
                    <div class="discount">
                        você ainda<br>
                        <strong>ganha 10%</strong>
                    </div>
                    <span class="mini">de desconto na primeira compra ;)</span>
                </div><ul class="componentFormList"><li class="name  "><div class="tooltip "></div><label for="NewsletterForm_name" class="required active">Nome <span class="required">*</span></label><input data-validation-required="1" data-validation-required-message="Nome deve ser especificado" placeholder="digite seu nome" class="textinput" required="required" tabindex="1" name="NewsletterForm[name]" id="NewsletterForm_name" type="text"></li><li class="email  "><div class="tooltip "></div><label for="NewsletterForm_email" class="required active">E-mail <span class="required">*</span></label><input data-validation-required="1" data-validation-required-message="E-mail deve ser especificado" data-validation-pattern="@^.+\@.+\..+$@" data-validation-pattern-message="E-mail Formato errado" placeholder="digite seu e-mail" class="textinput" required="required" tabindex="1" name="NewsletterForm[email]" id="NewsletterForm_email" type="text" value=""></li></ul>    <div class="clearfix"></div>
                <button type="submit" class="newsletter__button" id="popupNatueLifeNewsletterBtn">
                    <div id="natuelife-newsletter-submit">enviar</div>
                </button>
                <div class="clearfix"></div>
                <div id="rule-date">Válido por 30 dias para compras acima de R$100.
                    Limitado a uma compra por CPF.</div>    </form>
        </div>
    </div>
</div>
