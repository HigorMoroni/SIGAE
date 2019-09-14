<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" name="busca" placeholder="Buscar no sistema" />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="header-button">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="http://www.praiagrande.sp.gov.br/pontoeletronico/fotos/0<?=$linha['rf']?>.jpg" alt="usuario" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn"><?=$linha['nome']?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a><img src="http://www.praiagrande.sp.gov.br/pontoeletronico/fotos/0<?=$linha['rf']?>.jpg?>.jpg" alt="usuario" /></a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name"><a><?=$linha['nome']?></a></h5>
                                        <h6><span class="cargo"><?=$linha['cargo']?></span></br>
                                        <span class="registo">RF: <?=$linha['rf']?></span></h6>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#"><i class="zmdi zmdi-settings"></i>Configurações da Conta</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="logout.php">
                                        <i class="zmdi zmdi-power"></i>Sair</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>