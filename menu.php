<div class="header">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">

            <!-- Marca a alternância se agrupados para melhor visualização móvel -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Login</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class="glyphicon glyphicon-home"></i></a>
            </div>

            <!-- Coletar os links de navegação, formulários e outros conteúdos para alternar -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <!-- class="active" -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>  Estudantes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="inserir_registro.php">Novo Registro</a></li>
<!--                            <li class="divider"></li>
                            <li><a href="inserir.php">Cadastrar Novo</a></li>-->
                            <li class="divider"></li>
                            <li><a href="lista.php">Exibir Todos</a></li>
                        </ul>
                    </li>
                    <!--<li><a href="editar_tipo.php">Tipo</a></li>-->

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-wrench"></i> Opções<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <!--li><a href="editar_nome.php">Editar Nome</a></li>-->
                            <li><a href="tipo.php"><i class="glyphicon glyphicon-flag"></i> Tipo</a></li>
                            <li><a href="usuarios.php"><i class="glyphicon glyphicon-lock"></i> Usuário</a></li>
                            <li class="divider"></li>
                            <li><a href="cadastro.php"><i class="glyphicon glyphicon-user"></i> Novo Usuário</a></li>
                            <li class="divider"></li>
                            <li><a href="https://www.google.com/+RogerioRegis" target="_blank" >Site do Desenvolvedor</a></li>      
                        </ul>
                    </li>
                </ul>

                <!-- <form class="navbar-form navbar-left" role="Buscar">
                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="Buscar">
                         </div>
                         <button type="Buscar" class="btn btn-default">Buscar</button>
                     </form>-->
                <ul class="nav navbar-nav navbar-right">
                    <!--                            <li><a href="SICAES/index.php">SICAES</a></li>-->
                    <li class="dropdown">
                        <a href="cadastro.php" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-cog"></i><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <!--  <li><a href="cadastro.php">Administrador</a></li>
                            <li><a href="cadastro.php">Professor</a></li>-->
                            <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Sair</a></li>
                            <!--<li class="divider"></li>
                            <li><a href="logout.php">Sair</a></li>-->
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <h2>SICAES - Sistema de Cadastro de Estudantes</h2>
<!--<img src="image/logo_default.png">-->
</div>