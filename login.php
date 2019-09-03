<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        require ("db.php");
        session_start(); if(!isset($_SESSION["autenticado"])){header("Location: logout.php");}
        $rfAut = ($_SESSION['rf']);
        $senhaAut = ($_SESSION['senha']);
        $query = sprintf("SELECT rf, nome, cargo FROM aut WHERE rf='$rfAut' AND senha='$senhaAut'");
        $dados = mysqli_query($conn, $query) or die(mysqli_error());
        $linha = mysqli_fetch_assoc($dados);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <title>Login</title>
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="css/theme.css" rel="stylesheet" media="all">
</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/logoSIGAE.png" alt="SIGAE">
                            </a>
                        </div>
                            <?php $erro = ( isset($_GET['erro']) ) ? $_GET['erro'] : null;
                            if ($erro != null){?>
                            <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
								<span class="badge badge-pill badge-danger">ERRO</span>
								Dados incorretos, tente novamente!
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
                            <?php } ?>
                        <div class="login-form">
                            <form action="autenticar.php" method="post">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Registro Funcional</div>
                                        <input type="text" id="rf" name="rf" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-archive"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Senha</div>
                                        <input type="password" id="senha" name="senha" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-asterisk"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <a href="#">Esqueceu sua senha?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Entrar</button>
                            </form>
                            <div class="register-link">
                                <p>Funcionário novo? Procure o Diretor da Escola</p>
                            </div>
                        </div>
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

</body>

</html>
<!-- end document-->