<div class="tab-bar-bg"></div>
<nav class="tab-bar header--nav green-header">
    <div class="top-white-bar">
        <div class="wrapper">
            <div class="section-right">
                <a href="/politica-de-frete/">Frete Grátis acima de R$ 150. <span class="marked">Ver regras</span></a>
            </div>
        </div>
    </div>
    <div class="middle-green-bar">
        <div class="wrapper">
            <section class="left-small">
                <a class="left-off-canvas-toggle menu-icon" href="#j-container"><span></span></a>
            </section>
            <div class="natue-logo">
                <a href="https://www.natue.com.br/" title="Suplementos, cosméticos, vitaminas e alimentos - Natue">
                    <div class="logo"></div>
                </a>
            </div>
            <div class="search-bar">
                <form id="search_mini_form" class="searchForm chaordicSearch" action="https://www.natue.com.br/catalog" method="get" data-min-char-message="Por favor, insira mais de 1 letra para gerar uma busca automática">
                    <div class="container">
                        <input type="hidden" name="re" value="0">
                        <div class="sprite icons search-header"></div>
                        <div>
                            <input id="search" class="search" type="search" name="q" value="" placeholder="O que você procura ?" autocomplete="off" nm-autocomplete="off">
                        </div>
                        <button type="submit">buscar</button>
                    </div>
                </form>
                <div class="searchForm--overlay"></div>
            </div>
            <div class="wrapper-right">
                <div class="profile-container hide-if-logged invisible">
                    <a href="https://www.natue.com.br/customer/index/index/"><i class="sprite icons people"></i></a>
                    <div class="profile-info">
                        <a href="/customer/orders/index/#!/authentication" title="Entrar" data-qa="profileMenuLogIn" rel="follow">
                            <b>Entre</b>
                        </a><br> ou
                        <a href="/customer/orders/index/#!/authentication" title="Minha conta" data-qa="profileMenuLogIn" rel="follow" "="">
                            <b>Cadastre-se</b>
                        </a>
                    </div>
                </div>

                <div class="profile-container show-if-logged profile-container--avatar hide">
                    <div class="customer--avatar">
                        <figure class="customer--avatar--figure"><img src="/customer-area/images/avatar.jpg" alt="Avatar" width="100" height="100"></figure>
                        <div class="customer--avatar--name">Oi,<br> <span>Fulano</span></div>
                    </div>
                    <div class="customer--nav">
                        <ul class="clearfix">
                            <li><a class="customer__ico customer__ico--minhanatue" href="/customer/orders/index/#!/" ng-class="{'is-active': location.path() == '/'}">Meus produtos</a></li>
                            <li><a class="customer__ico customer__ico--meuspedidos" href="/customer/orders/index/#!/meus-pedidos" ng-class="{'is-active': location.path() == '/meus-pedidos'}">Meus pedidos</a></li>
                            <li><a class="customer__ico customer__ico--meusdados" href="/customer/orders/index/#!/meus-dados" ng-class="{'is-active': location.path() == '/meus-dados'}">Meus dados</a></li>
                            <li><a class="customer__ico customer__ico--meusenderecos" href="/customer/orders/index/#!/meus-enderecos" ng-class="{'is-active': location.path() == '/meus-enderecos'}">Meus endereços</a></li>
                            <li><a class="customer__ico customer__ico--meuspagamentos" href="/customer/orders/index/#!/meus-pagamentos" ng-class="{'is-active': location.path() == '/meus-pagamentos'}">Meus pagamentos</a></li>
                            <li><a class="customer__ico customer__ico--sair" href="/customer/index/logout/">Sair</a></li>
                        </ul>
                    </div>
                </div>
                <a href="https://www.natue.com.br/customer/account/index/" class="show-if-logged hide">
                    <div class="my-natue-container">
                        <i class="sprite icons heart"></i>
                        <div class="my-natue-info">
                            <b>Meus&nbsp;produtos</b>
                        </div>
                    </div>
                </a>

                <a class="hide-mobile" href="https://www.natue.com.br/cart/index/index/">
                    <div class="checkout-container" data-qa="headerCart" rel="follow">
                        <i class="sprite icons checkout-cart"></i>
                        <div class="badge " data-value="0"></div>
                    </div>
                </a>
                <div class="hidden show-mobile">
                    <div class="checkout-container" data-qa="headerCart" rel="follow">
                        <i class="sprite icons checkout-cart"></i>
                        <div class="badge " data-value="0"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>