<?php
include_once "../repositorio/Master.php";
session_start();
$_SESSION['location']='despesa/despesa.php';
?>
    <!DOCTYPE html>
    <html lang="PT-BR">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="keywords" content="Portal Transparencia">
        <meta name="description" property="og:description" content="Descrição do site." />
        <meta name="author" content="Victor Vinícius de Carvalho Marinho">
        <meta name="robots" content="index,follow">
        <meta property="og:image" content="#">
        <link rel="icon" href="#" sizes="32x32">
        <title>Receitas</title>
        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="../build/css/custom.css" rel="stylesheet">
        <link href="../build/css/login.css" rel="stylesheet">
        <link href="../build/css/animate.css" rel="stylesheet">
        <link href="../vendors/jquery/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../vendors/DataTable/css/datatables.min.css">
        <link rel="stylesheet" href="../build/css/load.css">

    </head>

    <body class="nav-md">
        <?php
		unset($_SESSION['usuarioId'],
		      $_SESSION['usuarioNome'],
		      $_SESSION['usuarioNivel'],
		      $_SESSION['usuarioEmail'],
		      $_SESSION['usuarioSenha']);
	?>
            <div class="container body">
                <div class="main_container">
                    <div class="col-md-3 left_col menu_fixed">
                        <div class="left_col scroll-view">
                            <div class="navbar nav_title" style="border: 0;"> <a href="index.html" class="site_title"><span>Portal</span></a></div>
                            <!-- menu profile quick info -->
                            <div class="profile clearfix">
                                <div class="profile_pic"> <img src="../img/perfil1.jpg" alt="Perfil" class="img-circle profile_img"> </div>
                                <div class="profile_info">
                                    <span>Bem vindo</span>
                                    <h2>Nome</h2>
                                </div>
                            </div>
                            <!-- /menu profile quick info -->
                            <br />
                            <!-- sidebar menu -->
                            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                                <div class="menu_section">
                                    <h3>Menu</h3>
                                    <ul class="nav side-menu">
                                        <li><a href="../index.php"><i class="fa fa-home"></i>Home<span class="label label-success pull-right">Beta</span></a>
                                        </li>
                                        <li><a href="../receita/receita.php"><i class="fa fa-money"></i>Receita</a></li>
                                        <li><a href="despesa.php"><i class="fa fa-suitcase"></i>Despesas</a></li>
                                        <li><a href="../licitacao/licitacao.php"><i class="fa fa-file-text"></i>Licitações</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top_nav">
                        <div class="nav_menu">
                            <nav>
                                <div class="nav toggle"> <a id="menu_toggle"><i class="fa fa-bars"></i></a> </div>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="">
                                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="modal" data-target="#myModal" aria-expanded="false"> <img src="../img/perfil1.jpg" alt="Perfil 1">Usuário</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div id="conteudo" class="right_col" role="main">
                        <?php
                            if(isset($_SESSION['loginErro'])){
                                echo $_SESSION['loginErro'];
                                unset($_SESSION['loginErro']);
                            }
                        ?>
                            <!-- top tiles -->
                            <!-- Banner
                <div class="row tile_count">
                    <img class="img-responsive" src="images/banner-todos-por-s%C3%A3o-luis.jpg" alt="Banner">
                </div>
                <!-- /top tiles -->
                            <img style="height:200px;" id="load" src="../img/ring-alt.svg" class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                            <div id="result" class="row load">
                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 animated fadeInLeftBig">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="tab-content">
                                                <div id="table">
                                                    <table id="TabelaDespesa" class="table table-striped table-bordered">
                                                        <h1>
                                                            <caption>Despesa</caption>
                                                        </h1>
                                                        <thead>
                                                            <th>ID</th>
                                                            <th>Tipo</th>
                                                            <th>Função</th>
                                                            <th>Data</th>
                                                            <th>Valor</th>
                                                        </thead>
                                                        <tbody>
                                                            <?php if($result=$dbo->query("SELECT iddespesa,tipo_despesa_idtipo_despesa,funcao_idfuncao,data,valor FROM `despesa`")){ ?>
                                                            <?php if($result){ ?>
                                                            <?php while($row = $result->fetch_assoc()){ ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $row['iddespesa']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row['tipo_despesa_idtipo_despesa']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row['funcao_idfuncao']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo date("d/m/Y", strtotime($row['data'])); ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row['valor']; ?>
                                                                </td>

                                                            </tr>
                                                            <?php } ?>
                                                            <?php } ?>
                                                            <?php $result->close(); ?>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 animated fadeInLeftBig">
                                        <div class="panel panel-default">
                                            <div id="coluna"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInLeftBig">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div id="pizza"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInLeftBig">
                                        <div class="panel panel-default ">
                                            <div class="panel-body">
                                                <div id="pizza2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 animated fadeInLeftBig">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div id="pizza3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- /page content -->
                <!-- footer content -->
                <footer>
                    <div class="pull-right"> Modelo Dashboard - Feito e administrado por <a href="#">Carvalho Multiserviços</a> </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
            <div class="container">
                <!-- todas as Modais aqui --->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <form name="loginform" method="post" action="../logar.php">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Entre com os seus dados</h4>
                                </div>
                                <div class="modal-body">
                                    <img id="profile-img" class="profile-img-card" src="../img/avatar2.png" />

                                    <div class="form-signin">
                                        <p id="profile-name" class="profile-name-card">Nome depois de salvo</p>
                                        <span id="reauth-email" class="reauth-email"></span>
                                        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Endereço de Email" required autofocus>
                                        <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>
                                        <div id="remember" class="checkbox">
                                            <label>
                                        <input type="checkbox" value="relembre">Relembre me
                                    </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Esqueceu sua senha?</button>
                                    <button type="submit" onclick="hash()" value="entar" class="btn btn-primary">Entrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script src="../vendors/jquery/jquery-3.2.0.min.js"></script>
            <script src="../vendors/bootstrap/js/bootstrap.min.js"></script>
            <script src="../build/js/custom.js"></script>
            <script src="../vendors/HighCharts/highstock.js"></script>
            <script src="../vendors/HighCharts/highcharts.js"></script>
            <script src="../vendors/HighCharts/exporting.js"></script>
            <script src="despesa.js" type="text/javascript"></script>
            <script type="text/javascript" src="../vendors/DataTable/js/datatables.min.js"></script>
    </body>

    </html>
