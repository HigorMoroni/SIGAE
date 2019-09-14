<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        require ("db.php");
        session_start(); if(!isset($_SESSION["autenticado"])){header("Location: login.php");}
        $rfAut = ($_SESSION['rf']);
        $senhaAut = ($_SESSION['senha']);
        $query = sprintf("SELECT rf, nome, cargo FROM aut WHERE rf='$rfAut' AND senha='$senhaAut'");
        $dados = mysqli_query($conn, $query) or die(mysqli_error());
        $linha = mysqli_fetch_assoc($dados);
    ?>
    <title>SIGAE - Sistema Integrado de Gestão da Administração Escolar</title>
    <?php include 'partes/headpadrao.php'; ?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php include 'partes/cabmobile.php'; ?>
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR-->
        <?php include 'partes/menulateral.php'; ?>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include 'partes/cabdesk.php'; ?>
            <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Area de Trabalho</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix" align="center">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>70</h2>
                                                <span>Funcionários</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix" align="center">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>388</h2>
                                                <span>items solid</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix" align="center"> 
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>this week</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix" align="center">
                                            <div class="icon">
                                                <i class="zmdi zmdi-book"></i>
                                            </div>
                                            <div class="text">
                                                <h2>805</h2>
                                                <span>Alunos</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="totalalunos"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 Higor Moroni. Todos os direitos reservados.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>
    <div class="modal fade" id="modalsenha" tabindex="-1" role="dialog" aria-labelledby="modalsenhaLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalsenhaLabel">Bem vindo ao SIGAE</h5>
                </div>
                <div class="modal-body">
                    <p>Olá <?=$linha['nome']?>, é um prazer te-lo conosco!</br>
                    Como esse é seu primeiro acesso ao SIGAE, pedimos que cadastre uma nova senha.</br></br></p>
                    <div class="login-form">
                        <form action="novasenha.php" method="post">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Registro Funcional</div>
                                    <input type="text" id="rfmodal" name="rfmodal" class="form-control" value="<?=$linha['rf']?>" readonly="true">
                                    <div class="input-group-addon">
                                        <i class="fa fa-asterisk"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Nova Senha</div>
                                    <input type="password" id="senhamodal" name="senhamodal" class="form-control">
                                    <div class="input-group-addon">
                                        <i class="fa fa-asterisk"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Repita a Senha</div>
                                    <input type="password" id="repsenhamodal" name="repsenhamodal" class="form-control">
                                    <div class="input-group-addon">
                                        <i class="fa fa-asterisk"></i>
                                    </div>
                                </div>
                            </div>
                            <?php $erro = ( isset($_GET['erro']) ) ? $_GET['erro'] : null;
                            if ($erro != null){?>
                            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
								<span class="badge badge-pill badge-danger">ERRO</span>
								Senha não alterada, tente novamente!
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
                            <?php } ?>
                            <p></br></p>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cadastrar Depois</button>
                                <button type="submit" class="btn btn-primary" onClick="validatePassword()">Salvar Alterações</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <!-- Script do Modal -->
    <?php
        if ($senhaAut == "123456") { ?>
            <script type="text/javascript"> 
                $(document).ready(function() {
                    $('#modalsenha').modal('show');
                })
            </script>
        <?php } ?>
    <!-- Script Validar Senha -->
    <script>
        var password = document.getElementById("senhamodal")
    , confirm_password = document.getElementById("repsenhamodal");

    function validatePassword(){
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Senhas diferentes, favor corrigir!");
        } else {
        confirm_password.setCustomValidity('');
        }
    }
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
    </script>


</body>

</html>
<!-- end document-->
