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

        $queryrm = sprintf("SELECT MAX(rm) as rm FROM aluno");
        $dadosrm = mysqli_query($conn, $queryrm) or die(mysqli_error());
        $linharm = mysqli_fetch_assoc($dadosrm);
        $proximorm = $linharm['rm']+1;
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
                <div class="row d-flex justify-content-center"">
                    <div class="card">
                        <div class="card-header" align="center">
                            <strong>Matricular Aluno</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">RM</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <p class="form-control-static"><?=$proximorm?></p>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Text Input</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                                        <small class="form-text text-muted">This is a help text</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email-input" class=" form-control-label">Email Input</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="email-input" name="email-input" placeholder="Enter Email" class="form-control">
                                        <small class="help-block form-text">Please enter your email</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="password-input" class=" form-control-label">Password</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="password" id="password-input" name="password-input" placeholder="Password" class="form-control">
                                        <small class="help-block form-text">Please enter a complex password</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="disabled-input" class=" form-control-label">Disabled Input</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="disabled-input" name="disabled-input" placeholder="Disabled" disabled="" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Textarea</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Select</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="select" id="select" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="selectLg" class=" form-control-label">Select Large</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="selectLg" id="selectLg" class="form-control-lg form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="selectSm" class=" form-control-label">Select Small</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                            <option value="4">Option #4</option>
                                            <option value="5">Option #5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="disabledSelect" class=" form-control-label">Disabled Select</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="disabledSelect" id="disabledSelect" disabled="" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="multiple-select" class=" form-control-label">Multiple select</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <select name="multiple-select" id="multiple-select" multiple="" class="form-control">
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>
                                            <option value="4">Option #4</option>
                                            <option value="5">Option #5</option>
                                            <option value="6">Option #6</option>
                                            <option value="7">Option #7</option>
                                            <option value="8">Option #8</option>
                                            <option value="9">Option #9</option>
                                            <option value="10">Option #10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Radios</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="form-check">
                                            <div class="radio">
                                                <label for="radio1" class="form-check-label ">
                                                    <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Option 1
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio2" class="form-check-label ">
                                                    <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Option 2
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio3" class="form-check-label ">
                                                    <input type="radio" id="radio3" name="radios" value="option3" class="form-check-input">Option 3
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Inline Radios</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="form-check-inline form-check">
                                            <label for="inline-radio1" class="form-check-label ">
                                                <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">One
                                            </label>
                                            <label for="inline-radio2" class="form-check-label ">
                                                <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Two
                                            </label>
                                            <label for="inline-radio3" class="form-check-label ">
                                                <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Three
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Checkboxes</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <label for="checkbox1" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Option 1
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox2" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> Option 2
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Option 3
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Inline Checkboxes</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="form-check-inline form-check">
                                            <label for="inline-checkbox1" class="form-check-label ">
                                                <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1" class="form-check-input">One
                                            </label>
                                            <label for="inline-checkbox2" class="form-check-label ">
                                                <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2" class="form-check-input">Two
                                            </label>
                                            <label for="inline-checkbox3" class="form-check-label ">
                                                <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3" class="form-check-input">Three
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">File input</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input" name="file-input" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-multiple-input" class=" form-control-label">Multiple File input</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
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
