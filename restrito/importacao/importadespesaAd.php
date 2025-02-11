<?php
include "../protect.php";
?>
    <!DOCTYPE html>
    <html lang="PT-BR">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="keywords" content="Portal Transparencia" />
        <meta name="description" property="og:description" content="Descrição" />
        <meta name="author" content="Victor Vinícius de Carvalho Marinho" />
        <meta name="robots" content="index,follow" />
        <meta property="og:image" content="#" />
        <link rel="icon" href="#" sizes="32x32">
        <title>Modelo</title>
        <!-- Bootstrap -->
        <link href="../../vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../../build/css/login.css" rel="stylesheet">
        <link href="../../build/css/custom.css" rel="stylesheet">
    </head>

    <body class="nav-md">

        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col menu_fixed">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;"> <a href="index.html" class="site_title"><span>Portal</span></a></div>
                        <div class="profile clearfix">
                            <div class="profile_pic"> <img src="../../img/perfil1.jpg" alt="Perfil" class="img-circle profile_img"> </div>
                            <div class="profile_info">
                                <span>Bem vindo</span>
                                <h2>Nome</h2>
                            </div>
                        </div>
                        <br/>
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>Menu</h3>
                                <ul class="nav side-menu">
                                    <li><a href="../home.php"><i class="fa fa-home"></i>Home<span class="label label-success pull-right">Beta</span></a>
                                    </li>
                                    <li><a><i class="fa fa-money"></i>Receita</a>
                                        <ul class="nav child_menu">
                                            <li><a href="../receita/receitaAd.php">Administração da tabela principal</a></li>
                                            <li><a href="../importacao/importareceitaAd.php">Importação de receita</a></li>

                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-suitcase"></i>Despesas</a>
                                        <ul class="nav child_menu">
                                            <li><a href="../despesa/despesaAd.php">Administração da tabela principal</a></li>
                                            <li><a href="importadespesaAd.php">Importação de despesa</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="../licitacao/licitacaoAd.php"><i class="fa fa-file-text"></i>Licitações</a></li>
                                    <li><a href="../cadastro/usuario.php"><i class="fa fa-group"></i>Lista de usuários</a></li>
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
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="modal" data-target="#myModal" aria-expanded="false"> <img src="../../img/perfil1.jpg" alt="Perfil 1">Sair</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="right_col" role="main">
                    <!-- top tiles -->
                    <!-- Banner
                <div class="row tile_count">
                    <img class="img-responsive" src="images/banner-todos-por-s%C3%A3o-luis.jpg" alt="Banner">
                </div>
                <!-- /top tiles -->
                    <section class="row">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h2>Zona de upload de aquivo csv Despesa</h2>
                                    </div>
                                    <div class="panel-body">
                                        <form action="cadastrodespesa.php" enctype="multipart/form-data" method="post">
                                            <div class="form-group">
                                                <label for="desc">Digite aqui os detalhes da importação de hoje<small> (Opcional) </small></label>
                                                <textarea id="desc" name="descricao" class="form-control" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label for="tipo">Selecione o tipo de separação do arquivo</label>
                                                    <select id="tipo" class="form-control">
                                                    <option value=";">;</option>
                                                    <option value="/t">TAB</option>
                                                    <option value="|">|</option>
                                                    <option value=",">,</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="dropzone">Arraste ou selecione o arquivo que deseja importar</label>
                                                <span class=" form-control fileUpload btn btn-default">
                                                    <span class="glyphicon glyphicon-upload"></span> Upload de arquivo
                                                <input class="form-control" id="uploadFile" type="file" name="arquivo" accept=".csv">
                                                </span>
                                                <input data-toggle="modal" data-target="#status" aria-expanded="false" id="enviar" class="btn btn-default" type="submit" value="Enviar">
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <p id="fileUploadError" class="text-danger hide"></p>
                                    <div class="list-group" id="files"></div>
                                    <script id="fileUploadItemTemplate" type="text/x-jquery-tmpl">
                                        <div id="fileNameU" class="list-group-item">
                                            <span class="glyphicon glyphicon-file"></span>
                                        </div>
                                    </script>
                                    <script id="fileUploadProgressTemplate" type="text/x-jquery-tmpl">
                                        <div class="list-group-item">
                                            <div class="progress progress-striped active">
                                                <div class="progress-bar progress-bar-info" style="width: 0%;"></div>
                                            </div>
                                        </div>
                                    </script>
                                    <div id="status" class="modal fade bs-example-modal-sm center" tabindex="-1" role="dialog" aria-labelledby="LoadLabel">
                                        <div class="modal-dialog modal-sm center" role="document">
                                            <img src='../../img/ring-alt.svg' alt='Enviando' />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <footer>
                <div class="pull-right"> Modelo Dashboard - Feito e administrado por <a href="#">Carvalho Multiserviços</a> </div>
                <div class="clearfix"></div>
            </footer>
        </div>
        <div class="container">
            <!-- todas as Modais aqui --->
            <div class="container">
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <form>
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title text-center">Deseja realmente sair?</h4>
                            </div>
                            <div class="modal-body">
                                <a href="../logout.php" class="btn btn-primary col-xs-12 col-md-12 col-sm-12 col-lg-12">Sim</a>
                                <button type="submit" value="entar" data-dismiss="modal" class="btn btn-danger col-xs-12 col-md-12 col-sm-12 col-lg-12" aria-label="Close">Não</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <script src="../../vendors/jquery/jquery-3.2.1.min.js"></script>
        <script src="../../vendors/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../vendors/jquery/jqueryupload.js"></script>
        <script src="../../build/js/custom.js"></script>
        <script type="text/javascript" language="javascript">
            /*
                                                                                    $(function($) {
                                                                                        $("#enviar").click(function() {
                                                                                            $("#status").html("<img src='../img/ring-alt.svg' alt='Enviando' />");
                                                                                        });
                                                                                    });
                                                                            */

        </script>

    </body>

    </html>
