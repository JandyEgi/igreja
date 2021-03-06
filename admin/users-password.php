<!DOCTYPE html>

<html lang="pt-AO">

<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Walalétec & JandyEgi.  Desenvolvido Por Herlander Bento">

    <title>JandyEgi - Prestação de serviços.</title>

    <link rel="shortcut icon" href="../../../res/site/icon/JandyEgi/favicon.png" type="image/x-icon">

    <!-- Bootstrap  CSS -->
    <link rel="stylesheet" href="../../../res/admin/library-HCB/Bootstrap v4.4.1/css/bootstrap.min.css">

    <!-- Simple-sidebar -->
    <link rel="stylesheet" href="../../../res/admin/library-HCB/style/sidebar.css" >
  
    <!-- Style  CSS -->
    <link rel="stylesheet" href="../../../res/admin/library-HCB/style/style.css">
  
    <!-- Font-awesome  CSS -->
    <link rel="stylesheet" href="../../../res/admin/library-HCB/font-awesome/css/font-awesome.min.css">
  
    <!-- Animate CSS -->
    <!--link rel="stylesheet" href="../../res/admin/library-HCB/animate/animate.min.css"-->
  
    <!-- MDB CSS -->
    <link rel="stylesheet" href="../../../res/admin/library-HCB/mdb/css/mdb.min.css">
  

   <!--
    *
    * Equipa  : Walalétec - Soluções Tecnológicas
    * Membros : António Gabriel, Aziel António, Filipe Gomes, Herlander Bento, Kelvín Domingos, Neiri Miúdo,  Paulo Estevão.
    * Desenvolvido por : Herlander Bento.
    * Data: 17/12/2019.
    * Nota: III João 01:11
    * " Amado, não siga o mal, mas o bem. Quem faz o bem é de Deus;
    *   mas quem faz o mal não tem visto Deus  ".
    *
  -->


</head>

<body>
  
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <aside class="bg-white border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <a href="../../../2019adminJE">
          <img style="margin-left: -43px;" src="../../../res/site/icon/JandyEgi/logo_50x50.png" alt="">
          <span class="logo-text">JandyEgi</span>
        </a>
      </div>

      <div class="sidebar-user d-flex border-top border-bottom mx-2">
        <div class="photo">
          <img src='../../../res/site/images/profile/{function="getUserPhoto()"}' alt="" srcset="">
        </div>
        <div class="description">
          <span class="user">{function="utf8_encode(getUserName())"}</span>
          <span class="function">{function="getUserFunction()"}</span>
        </div>
      </div>

      <ul class="list-group mt-3 list-group-flush">

        <div class="group-dasboard">

          <li class="list-group-item dashboard">

            <a href="../../../2019adminJE" class="active">
              <i class="fa fa-dashboard mr-1"></i>
              Dashboard
            </a>
  
          </li>

        </div>

        <li class="list-group-item">
          <a class="blue-text" href="#layoutSubmenu" data-toggle="collapse">
            <i class="fa fa-angle-down mr-2"></i>
            <i class="fa fa-users mr-1"></i>
            Usuários
          </a>

          <ul class="collapse show list-unstyled" data-parent="#sidebar-wrapper" id="layoutSubmenu">
            <li>
              <a href="../../users/create"><i class="fa  fa-ellipsis-h "></i><span>Cadastrar Usuários</span></a>
            </li>
            <li>
              <a href="../../users"><i class="fa  fa-ellipsis-h "></i><span>Lista de Usuários</span></a>
            </li>
          </ul>

        </li>

        <li class="list-group-item ">
          <a href="#clientsSubmenu" data-toggle="collapse">
            <i class="fa fa-angle-down mr-2"></i>
            <i class="fa fa-users mr-1"></i>
            Clientes
          </a>

          <ul class="collapse list-unstyled" data-parent="#sidebar-wrapper" id="clientsSubmenu">
            <li>
              <a href="../../clients/create"><i class="fa  fa-ellipsis-h "></i><span>Cadastrar</span></a>
            </li>
            <li>
                <a href="../../clients"><i class="fa  fa-ellipsis-h "></i><span>Lista de Clientes</span></a>
            </li>
          </ul>
        </li>

        <li class="list-group-item">
          <a href="#elementsSubmenu" data-toggle="collapse">
            <i class="fa fa-angle-down mr-2"></i>
            <i class="fa fa-camera-retro mr-1"></i>
            Portfólios
          </a>

          <ul class="collapse list-unstyled" data-parent="#sidebar-wrapper" id="elementsSubmenu">
            <li>
              <a href="../../portfolios/create"><i class="fa  fa-ellipsis-h "></i><span>Cadastrar</span></a>
            </li>
            <li>
                <a href="../../portfolios"><i class="fa  fa-ellipsis-h "></i><span>Lista de Portfólios</span></a>
            </li>
          </ul>

        </li>

        <li class="list-group-item">
          <a href="#categoryPortfolioSubmenu" data-toggle="collapse">
            <i class="fa fa-angle-down mr-2"></i>
            <i class="fa fa fa-sitemap mr-1"></i>
            Categ. Portfólios
          </a>

          <ul class="collapse list-unstyled" data-parent="#sidebar-wrapper" id="categoryPortfolioSubmenu">
            <li>
              <a href="../../category-portfolios/create"><i class="fa  fa-ellipsis-h "></i><span>Cadastrar Categorias</span></a>
            </li>
            <li>
                <a href="../../category-portfolios"><i class="fa  fa-ellipsis-h "></i><span>Lista de Categorias</span></a>
            </li>

          </ul>

        </li>
        <li class="list-group-item">
          <a href="#formSubmenu" data-toggle="collapse">
            <i class="fa fa-angle-down mr-2"></i>
            <i class="fa fa-edit mr-1"></i>
            Posts
          </a>

          <ul class="collapse list-unstyled" data-parent="#sidebar-wrapper" id="formSubmenu">
            <li>
              <a href="../../posts/create"><i class="fa  fa-ellipsis-h "></i><span>Cadastrar Posts</span></a>
            </li>
            <li>
                <a href="../../posts"><i class="fa  fa-ellipsis-h "></i><span>Lista de Posts</span></a>
            </li>

          </ul>

        </li>

        <li class="list-group-item">
          <a href="#categoryPostsSubmenu" data-toggle="collapse">
            <i class="fa fa-angle-down mr-2"></i>
            <i class="fa fa fa-sitemap mr-1"></i>
            Categ. Posts
          </a>

          <ul class="collapse list-unstyled" data-parent="#sidebar-wrapper" id="categoryPostsSubmenu">
            <li>
              <a href="../../category-posts/create"><i class="fa  fa-ellipsis-h "></i><span>Cadastrar Categorias</span></a>
            </li>
            <li>
                <a href="../../category-posts"><i class="fa  fa-ellipsis-h "></i><span>Lista de Categorias</span></a>
            </li>

          </ul>

        </li>

        <li class="list-group-item">
          <a href="#pages" data-toggle="collapse">
            <i class="fa fa-angle-down mr-1"></i>
            <i class="fa fa fa-link mr-1"></i>
            Páginas
          </a>

          <ul class="collapse list-unstyled" data-parent="#sidebar-wrapper" id="pages">
            <li>
              <a href="../../../home?#home"><i class="fa  fa-ellipsis-h "></i><span>Home</span></a>
            </li>
            <li>
              <a href="../../../home?#about"><i class="fa  fa-ellipsis-h "></i><span>Sobre</span></a>
            </li>
            <li>
              <a href="../../../home?#services"><i class="fa  fa-ellipsis-h "></i><span>Serviços</span></a>
            </li>
            <li>
              <a href="../../../home?#portfolios"><i class="fa  fa-ellipsis-h "></i><span>Portfólios</span></a>
            </li>
            <li>
              <a href="../../../home?#clients"><i class="fa  fa-ellipsis-h "></i><span>Clientes</span></a>
            </li>
            <li>
                <a href="../../../blog"><i class="fa  fa-ellipsis-h "></i><span>Blog</span></a>
            </li>
            <li>
              <a href="../../../home?#contacts"><i class="fa  fa-ellipsis-h "></i><span>Contactos</span></a>
            </li>

          </ul>

        </li>
        
        <li class="list-group-item">
          <a href="../../post-office-box">
            <i class="fa fa-envelope ml-3 mr-1"></i>
            Caixa postal
          </a>

        </li>

        <li class="list-group-item">
          <a  href="../../notifications">
            <i class="fa fa-bell-o ml-3 mr-1"></i>
            Notificações
          </a>

        </li>

        <li class="list-group-item">
          <a href="../../counters">
            <i class="fa fa-calendar-plus-o ml-3 mr-1"></i>
            Counters
          </a>

        </li>

        
        <li class="list-group-item">
          <a href='../../profile/{function="getUserId()"}'>
            <i class="fa fa-user ml-3 mr-1"></i>
            Perfil
          </a>

        </li>

        <li class="list-group-item">
          <a href="../../logout">
            <i class="fa fa-power-off ml-3 mr-1"></i>
            Sair
          </a>

        </li>
        

      </ul>
    </aside>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg  navbar-default">

            <a href="#"  class="ml-2" id="menu-toggle"><i class="fa fa-bars"></i></a>
    
    
            <div id="navbar-content">
              <ul class="menu-container nav ml-auto mt-2 mt-lg-0">
    
                <li class="nav-item dropdown message">
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                    <span class="icons"><i class="fa fa-envelope-o"></i></span>
                    <span class="badge bg-danger">{$totalcontacts}</span>
                  </a>
    
                  <ul class="dropdown-menu dropdown-message dropdown-menu-right wow flipInX">
                      <li class="header border-bottom"><span>Você tem {$totalcontacts} mensagens</span></li>
    
                      <li class="body dropdown-backdrop">
                       
                        <ul class="menu">
                          {loop="$contacts2"}
                          <li>
                            <a href="../../post-office-box">
                              <span class="pull-left photo"><img alt="avatar" src="../../../res/site/images/profile/user.jpg"></span>
                              <span class="subject">
                                <span class="from">{function="limitText(utf8_encode($value.desperson), $limit=35)"}</span>
                                <span class="time">{$value.desdate}</span>
                              </span>
                              <span class="message">
                                {function="limitText(utf8_encode($value.desmessages), $limit=35)"}
                              </span>
                            </a>
                          </li>
                          {/loop}
                        </ul>
    
                      </li>
    
                      <li class="footer border-top"><a href="../../post-office-box">Veja Todas as Mensagens</a></li>
                  </ul>
              
                </li>
    
                <li class="nav-item dropdown message">
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                    <span class="icons"><i class="fa fa-bell-o"></i></span>
                    <span class="badge bg-warning">{$totalcomments}</span>
                  </a>
    
                  <ul class="dropdown-menu dropdown-message dropdown-menu-right wow flipInX">
                      <li class="header border-bottom"><span>Você tem {$totalcomments} Notificações</span></li>
    
                      <li class="body dropdown-backdrop " >
                       
                        <ul class="menu">
                          {loop="$comments"}
                          <li >
                            <a href='../../posts/{function="utf8_encode($value.desurl)"}/shows?#comments-area'>
                              <span class="pull-left photo"><img alt="avatar" src="../../../res/site/images/profile/{$value.photos}"></span>
                              <span class="subject">
                                <span class="from">{function="utf8_encode($value.desperson)"}</span>
                                <!--span class="time">Agora Mesmo</span--->
                              </span>
                              <span class="message">
                                {function="limitText(utf8_encode($value.descomment), $limit=35)"}
                              </span>
                            </a>
                          </li>
                          {/loop}
                        </ul>
    
                      </li>
    
                      <li class="footer border-top"><a href="../../notifications">Veja Todas as Notificações</a></li>
                  </ul>
              
                </li>
    
                <li id="user" class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                    <!--span class="username"><i class="fa fa-caret-down mr-1"></i>Herlander Bento</span-->
                    <span><img src='../../../res/site/images/profile/{function="getUserPhoto()"}' alt=""></span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-right dropdown-user wow flipInX border">
                    <li class="dropdown-item"><a href='../../profile/{function="getUserId()"}'><i class="fa fa-user"></i> Perfil</a></li>
                    <li class="dropdown-item"><a href="../../../home?#home"><i class="fa fa-ellipsis-h"></i>Home</a></li>
                    <li class="dropdown-item"><a href="../../../home?#about"><i class="fa fa-ellipsis-h"></i>Sobre</a></li>
                    <li class="dropdown-item"><a href="../../../home?#services"><i class="fa fa-ellipsis-h"></i>Serviços</a></li>
                    <li class="dropdown-item"><a href="../../../home?#portfolios"><i class="fa fa-ellipsis-h"></i>Portfólios</a></li>
                    <li class="dropdown-item"><a href="../../../home?#clients"><i class="fa fa-ellipsis-h"></i>Clientes</a></li>
                    <li class="dropdown-item"><a href="../../../blog"><i class="fa fa-ellipsis-h"></i>Blog</a></li>
                    <li class="dropdown-item"><a href="../../../home?#contacts"><i class="fa fa-ellipsis-h"></i>contactos</a></li>
                    <li class="dropdown-item border-top mt-1"><a href="../../logout"><i class="fa fa-power-off"></i>Sair</a></li>
                  </ul>
                </li>
    
    
              </ul>
            </div>
            <br>
        </nav>


      <!-- content-wrapper --->

      <div class="content-wrapper">
       
        <div class="container-fluid pb-5">

          <div class="row py-5 px-3">
            <div class="col-lg-12 col-sm-12">
              <div class="cards  row  content-header">
                <div class="content-header-left col-lg-10 col-sm-10">
                  <span class="title">Bem-vindo à JandyEgi</span>
                  <span><b>Walaletéc</b> dashboard  <b>app</b></span>
                </div>
                <!--div class="content-header-right col-lg-1 col-sm-1 ml-auto">
                  <div class="dropdown">
                    <button type="button" class="btn" data-toggle="dropdown">
                      <i class="fa  fa-th"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-item"><a href="#"><i class="fa fa-user mr-2"></i>Perfil</a></li>
                      <li class="dropdown-item active"><a href="#"><i class="fa fa-dashboard mr-2"></i>Dashboard</a></li>
                      <li class="dropdown-item"><a href="#"><i class="fa fa-power-off mr-2"></i>Sair</a></li>
                    </div>
                  </div>
                </div-->
              </div>
            </div>
          </div>

          <div class="row  pb-5">
            <div class="col-lg-12">
                <div class="cards cards-ds  shadow">
                    <div class="heading pb-3">
                        <span>Alterar senha de usuários</span>
                    </div>
                    {if="$error != ''"}
                     <div class="alert alert-danger  alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      {$error}
                     </div>
                    {/if}
                    {if="$success != ''"}
                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      {$success}
                    </div>
                    {/if}
                    <div class="body px-3 form-register">
                        <form action="../../users/{$users.iduser}/password" method="POST">
                        
                            <div class="form-group">
                                <label for="username">Nome do Usuário:</label>
                                <input type="text"  readonly class="form-control"  value="{$users.desperson}" id="username">
                            </div>

                            <div class="form-group">
                                <label for="pwd">Senha:</label>
                                <input type="password" name="despassword" class="form-control" placeholder="Digite a senha" id="myInput" value="">
                            </div>

                            <div class="form-group form-check custom-control custom-switch">
                                <label class="form-check-label mr-5">
                                    <input class="form-check-input" type="checkbox" onclick="myFunction()"> Mostrar Senha
                                </label>
                            </div>


                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>

                    </div>
                </div>
            </div>
          </div>



        </div>

      </div>

      <footer class="footer">
        <span>Copyright © 2020 <strong>Walaletéc</strong> & <a href="mailto:herlanderbento19@gmail.com">Herlander Bento</a>. - Solucões Tecnológicas</span>
      </footer>

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="../../../res/admin/library-HCB/jquery v3.4.1/jquery.min.js"></script>

  <!-- Bootstrap core JavaScript -->
  <script src="../../../res/admin/library-HCB/Bootstrap v4.4.1/js/bootstrap.bundle.min.js"></script>

  <!-- MDB core JavaScript -->
  <script src="../../../res/admin/library-HCB/mdb/mdb.js"></script>

  <!-- Popper core JavaScript -->
  <script src="../../../res/admin/library-HCB/mdb/js/popper.min.js"></script>

  <script type="text/javascript">

        // Inicializar wow
        new WOW().init();

        // Menu toggler

        $("#menu-toggle").click(function(e) {
             e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        // Mostrar Senha
        function myFunction() {
            var passwordShow = document.getElementById("myInput");
            if (passwordShow.type === "password") {
                passwordShow.type = "text";
            } else {
                passwordShow.type = "password";
            }
        }

  </script>

</body>

</html>
