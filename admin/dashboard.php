<!DOCTYPE html>

<html lang="pt-AO">

<head>

  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="author" content="Walalétec & JandyEgi.  Desenvolvido Por Herlander Bento">

  <title>JandyEgi - Prestação de serviços.</title>

  <link rel="shortcut icon" href="res/site/icon/JandyEgi/favicon.png" type="image/x-icon">

  <!-- Bootstrap  CSS -->
  <link rel="stylesheet" href="res/admin/library-HCB/Bootstrap v4.4.1/css/bootstrap.min.css">

  <!-- Simple-sidebar -->
  <link rel="stylesheet" href="res/admin/library-HCB/style/sidebar.css" >

  <!-- Style  CSS -->
  <link rel="stylesheet" href="res/admin/library-HCB/style/style.css">

  <!-- Font-awesome  CSS -->
  <link rel="stylesheet" href="res/admin/library-HCB/font-awesome/css/font-awesome.min.css">

  <!-- Animate CSS -->
  <!--link rel="stylesheet" href="res/admin/library-HCB/animate/animate.min.css"-->

  <!-- MDB CSS -->
  <link rel="stylesheet" href="res/admin/library-HCB/mdb/css/mdb.min.css">


  <link rel="stylesheet" href="res/admin/library-HCB/owl.carousel/assets/owl.carousel.min.css">


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
    <?
    require_once("./components/header-side.php")
    ?>
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
                <span class="badge bg-danger">0</span>
              </a>

              <ul class="dropdown-menu dropdown-message dropdown-menu-right wow flipInX">
                  <li class="header border-bottom"><span>Você tem 0 mensagens</span></li>

                  <li class="body dropdown-backdrop">
                   
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <span class="pull-left photo"><img alt="avatar" src="res/site/images/profile/user.jpg"></span>
                          <span class="subject">
                            <span class="from">00</span>
                            <span class="time">00</span>
                          </span>
                          <span class="message">
                            0
                          </span>
                        </a>
                      </li>
                    </ul>

                  </li>

                  <li class="footer border-top"><a href="#">Veja Todas as Mensagens</a></li>
              </ul>
          
            </li>

            <li class="nav-item dropdown message">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                <span class="icons"><i class="fa fa-bell-o"></i></span>
                <span class="badge bg-warning">0</span>
              </a>

              <ul class="dropdown-menu dropdown-message dropdown-menu-right wow flipInX">
                  <li class="header border-bottom"><span>Você tem 0 Notificações</span></li>

                  <li class="body dropdown-backdrop " >
                   
                    <ul class="menu">
                      
                      <li >
                        <a href='#'>
                          <span class="pull-left photo"><img alt="avatar" src="res/site/images/profile/user.jpg"></span>
                          <span class="subject">
                            <span class="from">0</span>
                            <!--span class="time">Agora Mesmo</span--->
                          </span>
                          <span class="message">
                            0
                          </span>
                        </a>
                      </li>
                      
                    </ul>

                  </li>

                  <li class="footer border-top"><a href="#">Veja Todas as Notificações</a></li>
              </ul>
          
            </li>


            <li id="user" class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                <span><img alt="avatar" src="res/site/images/profile/user.jpg"></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right dropdown-user wow flipInX border">
                <!-- <li class="dropdown-item"><a href='2019adminJE/profile/{function="getUserId()"}'><i class="fa fa-user"></i> Perfil</a></li> -->
                <li class="dropdown-item"><a href="home"><i class="fa fa-ellipsis-h"></i>Home</a></li>
                <li class="dropdown-item"><a href="home?#about"><i class="fa fa-ellipsis-h"></i>Sobre</a></li>
                <li class="dropdown-item"><a href="home?#services"><i class="fa fa-ellipsis-h"></i>Serviços</a></li>
                <li class="dropdown-item"><a href="home?#portfolios"><i class="fa fa-ellipsis-h"></i>Portfólios</a></li>
                <li class="dropdown-item"><a href="home?#clients"><i class="fa fa-ellipsis-h"></i>Clientes</a></li>
                <li class="dropdown-item"><a href="blog"><i class="fa fa-ellipsis-h"></i>Blog</a></li>
                <li class="dropdown-item"><a href="home?#contacts"><i class="fa fa-ellipsis-h"></i>contactos</a></li>
                <li class="dropdown-item border-top mt-1"><a href="2019adminJE/logout"><i class="fa fa-power-off"></i>Sair</a></li>
              </ul>
            </li>


          </ul>
        </div>
        <br>
      </nav>


      <!-- content-wrapper --->

      <div class="content-wrapper">
       
        <div class="container-fluid">

          <div class="row pt-5 pb-3 px-3">
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

          <div class="row  py-2">

            <div class="col-sm-3 my-2 col-lg-3">
              <div class="cards wow pulse">
                <div class="widgets row">
                  <div class="col-lg-6 col-sm-12 col-6  border-right">
                    <span class="icons icons-first"><i class="fa fa-users"></i></span>
                    <span class="title">Usuários</span>
                  </div>
                  <div class="col-lg-6 col-sm-12 col-6">
                    <span class="number">2</span>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-sm-3 my-2 col-lg-3">
              <div class="cards wow pulse">
                <div class="widgets row">
                  <div class="col-lg-6 col-sm-12 col-6 border-right">
                    <span class="icons icons-second"><i class="fa fa-camera-retro"></i></span>
                    <span class="title">Eventos</span>
                  </div>
                  <div class="col-lg-6 col-sm-12 col-6">
                    <span class="number">5</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3 my-2 col-lg-3">
              <div class="cards wow pulse">
                <div class="widgets row">
                  <div class="col-lg-6 col-sm-12 col-6 border-right">
                    <span class="icons icons-third"><i class="fa fa-edit"></i></span>
                    <span class="title">Galéria</span>
                  </div>
                  <div class="col-lg-6 col-sm-12 col-6">
                    <span class="number">3</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3 my-2 col-lg-3">
              <div class="cards wow pulse">
                <div class="widgets row">
                  <div class="col-lg-6 col-sm-12 col-6 border-right">
                    <span class="icons icons-fourth"><i class="fa fa-envelope"></i></span>
                    <span class="title">Cerimônia</span>
                  </div>
                  <div class="col-lg-6 col-sm-12 col-6">
                    <span class="number">7</span>
                  </div>
                </div>
              </div>
            </div>

            
          </div>



        </div>

      </div>

      <footer class="footer">
        <span>Copyright © 2020 <strong></strong> <a href="mailto:herlanderbento19@gmail.com">JandyEgi</a>. - Solucões Tecnológicas</span>
      </footer>

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="res/admin/library-HCB/jquery v3.4.1/jquery.min.js"></script>

  <!-- Bootstrap core JavaScript -->
  <script src="res/admin/library-HCB/Bootstrap v4.4.1/js/bootstrap.bundle.min.js"></script>

  <!-- MDB core JavaScript -->
  <script src="res/admin/library-HCB/mdb/mdb.js"></script>

  <!-- Popper core JavaScript -->
  <script src="res/admin/library-HCB/mdb/js/popper.min.js"></script>

  <script src="res/admin/library-HCB/chartjs/dist/Chart.min.js"></script>

  <script src="res/admin/library-HCB/chartjs/dist/utils.js"></script>

  <script src="res/admin/library-HCB/style/demo-charts.js"></script>

  <script src="res/admin/library-HCB/owl.carousel/owl.carousel.min.js"></script>

  <script type="text/javascript">

      new WOW().init();

    //  Projects
    $(document).ready(function(){
      $("#myInputProject").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTableProjects tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });

    // Menu Toggle Script 

      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });

      $(document).ready(function() {
          var owl = $('.owl-carousel');
          owl.owlCarousel({
          items: 1,
          loop: true,
          margin: 0,
          autoplay: true,
          autoplayTimeout: 4000,
          autoplayHoverPause: true
          });
          $('.play').on('click', function() {
              owl.trigger('play.owl.autoplay', [1000])
          })
          $('.stop').on('click', function() {
              owl.trigger('stop.owl.autoplay')
          })
        })

      
  </script>


</body>

</html>
