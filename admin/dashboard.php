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
                <span class="badge bg-danger">{$totalcontacts}</span>
              </a>

              <ul class="dropdown-menu dropdown-message dropdown-menu-right wow flipInX">
                  <li class="header border-bottom"><span>Você tem {$totalcontacts} mensagens</span></li>

                  <li class="body dropdown-backdrop">
                   
                    <ul class="menu">
                      {loop="$contacts2"}
                      <li>
                        <a href="2019adminJE/post-office-box">
                          <span class="pull-left photo"><img alt="avatar" src="res/site/images/profile/user.jpg"></span>
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

                  <li class="footer border-top"><a href="2019adminJE/post-office-box">Veja Todas as Mensagens</a></li>
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
                        <a href='2019adminJE/posts/{function="utf8_encode($value.desurl)"}/shows?#comments-area'>
                          <span class="pull-left photo"><img alt="avatar" src="res/site/images/profile/{$value.photos}"></span>
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

                  <li class="footer border-top"><a href="2019adminJE/notifications">Veja Todas as Notificações</a></li>
              </ul>
          
            </li>

            <!--li class="nav-item dropdown notification">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                <span class="icons"><i class="fa fa-bell-o"></i></span>
                <span class="badge bg-warning">3</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right dropdown-menu-arrow dropdown-notification wow flipInX">
                <li class="header"><span>Você tem 3 Notificações</span></li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <span class="noti-info">
                            <a href="#"> Servidor #1 sobrecarregou.</a>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <span class="noti-info">
                            <a href="#"> Servidor #2 sobrecarregou.</a>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <span class="noti-info">
                            <a href="#"> Servidor #3 sobrecarregou.</a>
                        </span>
                    </div>
                </li>

              </ul>
            </li-->

            <li id="user" class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                <!--span class="username"><i class="fa fa-caret-down mr-1"></i>Herlander Bento</span-->
                <span><img src='res/site/images/profile/{function="getUserPhoto()"}' alt=""></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right dropdown-user wow flipInX border">
                <li class="dropdown-item"><a href='2019adminJE/profile/{function="getUserId()"}'><i class="fa fa-user"></i> Perfil</a></li>
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
                    <span class="number">{$totalUsers}</span>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-sm-3 my-2 col-lg-3">
              <div class="cards wow pulse">
                <div class="widgets row">
                  <div class="col-lg-6 col-sm-12 col-6 border-right">
                    <span class="icons icons-second"><i class="fa fa-camera-retro"></i></span>
                    <span class="title">Portfólios</span>
                  </div>
                  <div class="col-lg-6 col-sm-12 col-6">
                    <span class="number">{$totalportfolios}</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3 my-2 col-lg-3">
              <div class="cards wow pulse">
                <div class="widgets row">
                  <div class="col-lg-6 col-sm-12 col-6 border-right">
                    <span class="icons icons-third"><i class="fa fa-edit"></i></span>
                    <span class="title">Postes</span>
                  </div>
                  <div class="col-lg-6 col-sm-12 col-6">
                    <span class="number">{$totalposts}</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3 my-2 col-lg-3">
              <div class="cards wow pulse">
                <div class="widgets row">
                  <div class="col-lg-6 col-sm-12 col-6 border-right">
                    <span class="icons icons-fourth"><i class="fa fa-envelope"></i></span>
                    <span class="title">Mensagens</span>
                  </div>
                  <div class="col-lg-6 col-sm-12 col-6">
                    <span class="number">{$totalcontacts}</span>
                  </div>
                </div>
              </div>
            </div>

            
          </div>

          <div class="row align-items-cente py-2">
            
            <div class="col-lg-4 py-lg-0 py-sm-3 d-flex my-2 col-sm-6 order-lg-0 order-sm-1">
              <div class="dash-perfil">
               <div class="perfil-photos">
                 <div class="photos">
                   <img src='res/site/images/profile/{function="getUserPhoto()"}' alt="">
                 </div>
                 <div class="description pb-3 text-center px-5">
                   <span class="user mb-2">{function="utf8_encode(getUserName())"}</span>
                   <span class="function">{function="getUserFunction()"}</span>
                 </div>
               </div>
               <div class="perfil-description">
                <ul class="nav px-4 flex-column">
                  <li class="nav-item border-bottom"><a class="nav-link" href="2019adminJE/users"><i class="fa-users fa mr-3"></i>Usuários</a></li>
                 
                  <li class="nav-item border-bottom "><a class="nav-link" href="2019adminJE/post-office-box"><i class="fa-envelope-o fa mr-3"></i>Mensagens</a></li>
                  <!--li class="nav-item border-bottom "><a class="nav-link" href="2019adminJE/comments"><i class="fa-comments fa mr-3"></i>Comentários</a></li-->
                  <li class="nav-item border-bottom "><a class="nav-link" href="2019adminJE/clients"><i class="fa-users fa mr-3"></i>Clientes</a></li>
                  <li class="nav-item border-bottom "><a class="nav-link" href="2019adminJE/portfolios"><i class="fa-camera-retro fa mr-3"></i>Portfólios</a></li>
                  <li class="nav-item border-bottom "><a class="nav-link" href='2019adminJE/profile/{function="getUserId()"}'><i class="fa-user fa mr-3"></i>Perfil</a></li>
                  <li class="nav-item"><a class="nav-link" href="2019adminJE/logout"><i class="fa-power-off fa mr-3"></i>Sair</a></li>
                </ul>
               </div>
              </div>
            </div>

            <div class="col-lg-8 my-2 col-sm-12 order-lg-1 order-sm-0">
              <div class="row">
                <div class="col-lg-12  d-sm-none d-none d-lg-block d-md-block">
                  <div class="charts cards">
                    <div class="heading">
                      <span>Sales Reporter</span>
                    </div>
                    <div class="body" >
                      <canvas class="chart-canvas" id="chart-report"></canvas>
                    </div>
                  </div>
                </div>

                {loop="$user"}
                <div class="col-lg-6 col-sm-6 mt-5">
                  <div class="cards d-flex dash-perfil-items">
                    <div class="photos">
                      <img src="res/site/images/profile/{$value.desphoto}" alt="">
                    </div>
                    <div class="description">
                      <span>{function="utf8_encode($value.desperson)"}</span>
                      <a href="gmailto:{$value.desemail}">{$value.desemail}</a>
                    </div>
                  </div>
                </div>
                {/loop}
                
              </div>
            </div>

            <div class="col-lg-4 py-3 col-sm-6 my-2 order-2">

              <div class="cards last-message  cards-ds">
                <div class="heading">
                  <span>Últimos Comentários</span>
                </div>

                <div class="body pb-3">
                  <ul class="nav last-message-items px-1 flex-column">
                    {loop="$comments"}
                    <li class="nav-item  border-bottom">

                      <a href='2019adminJE/posts/{function="utf8_encode($value.desurl)"}/shows'>
                        <span class="pull-left photo"><img alt="avatar" src="res/site/images/profile/{$value.photos}"></span>
                        <span class="subject">
                          <span class="from">{function="utf8_encode($value.desperson)"}</span>
                         
                        </span>
                        <span class="message">
                          {function="limitText(utf8_encode($value.descomment), $limit=35)"}
                        </span>
                      </a>

                    </li>
                    {/loop}
                  </ul>
                </div>
              </div>

            </div>

            <div class="col-lg-4 py-3 col-sm-6 my-2 order-3">

              <div class="cards recent-activity  cards-ds">
                <div class="heading">
                  <span>Últimas Mensagens</span>
                </div>

                <div class="body pb-3">
                  <ul class="nav recent-activity-items px-1 flex-column">
                    {loop="$contacts2"}
                    <li class="nav-item">

                      <a href="2019adminJE/post-office-box" class="nav-link">
                          <span class="date">{function="utf8_encode($value.desperson)"}</span>
                          <p>{function="limitText(utf8_encode($value.desmessages), $limit=40)"}</p>
                      </a>

                    </li>
                    {/loop}
                    
                  </ul>
                </div>
              </div>

            </div>

            <div class="col-lg-4 py-3 col-sm-6 my-2 order-4">

              <div class="cards social-source cards-ds">
                <div class="heading">
                  <span>Fonte social</span>
                </div>

                <div class="body  my-3">
                  <div class="row justify-content-center owl-carousel">
                    <div class="social-source-items text-center  col-12">
                      <div class="social-source-items-header">
                        <span class="icons facebook"><i class="fa fa-facebook"></i></span>
                        <span class="title pt-5">Facebook - 120 Like</span>
                      </div>
                      <div class="social-source-items-body">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum officia error aliquam omnis libero ducimus eaque.</p>
                      <a href="#">Ler nais</a>
                      </div>
                    </div>

                    <div class="social-source-items text-center col-12">
                      <div class="social-source-items-header">
                        <span class="icons twitter"><i class="fa fa-twitter"></i></span>
                        <span class="title pt-5">Twitter - 1,120 Like</span>
                      </div>
                      <div class="social-source-items-body">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum officia error aliquam omnis libero ducimus eaque.</p>
                      <a href="#">Ler nais</a>
                      </div>
                    </div>

                    <div class="social-source-items text-center col-12">
                      <div class="social-source-items-header">
                        <span class="icons instagram"><i class="fa fa-instagram"></i></span>
                        <span class="title pt-5">Instagram - 13,020 Seguidores</span>
                      </div>
                      <div class="social-source-items-body">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum officia error aliquam omnis libero ducimus eaque.</p>
                      <a href="#">Ler nais</a>
                      </div>
                    </div>

                  </div>
                  <!--div class="buttons">
                    <a class="btn secondary play">Play</a> 
                    <a class="btn secondary stop">Stop</a> 
                  </div-->
                  <div class="footer">
                    <div class="row my-4 menu-social">
                      <div class="col-4">
                        <a href="#" class="">
                          <span class="icons facebook"><i class="fa fa-facebook"></i></span>
                          <span class="subtitle">120 Like</span>
                          <span class="title">Facebook</span>
                        </a>
                      </div>

                      <div class="col-4">
                        <a href="#" class="">
                          <span class="icons twitter"><i class="fa fa-twitter"></i></span>
                          <span class="subtitle">120 Like</span>
                          <span class="title">Twitter</span>
                        </a>
                      </div>

                      <div class="col-4">
                        <a href="#" class="">
                          <span class="icons instagram"><i class="fa fa-instagram"></i></span>
                          <span class="subtitle">120 Like</span>
                          <span class="title">instagram</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>

          <div class="row pt-2 pb-5">
            <div class="col-lg-12">
              <div class="cards cards-ds table-white shadow">
                <div class="heading pb-3">
                  <span>Últimos Postes</span>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center">
                    <thead class="thead-light">
                      <tr>
                        <th>Título do post</th>
                        <th>Post</th>
                        <th>Mostrar</th>
                        <th>Data de Register</th>
                        <th style="width: 30px !important;"></th>
                      </tr>
                    </thead>
                    <tbody class="tbody-first">
                      {loop="$post"}
                      <tr>
                       
                        <th scope="row">
                          <div class="media m-0 align-items-center">
                              <a href="#" class="avatar rounded-circle mr-3">
                                <img alt="Image placeholder" src="res/site/images/posts/{$value.desphoto}">
                              </a>
                              <div class="media-body">
                                <span class="mb-0 text-sm">{function="limitText(utf8_encode($value.destitle) ,$limit=50)"}</span>
                              </div>
                          </div>
                        </th>
                        
                        <td>
                          <span class="badge badge-dot mr-4">
                              <i class="bg-warning"></i> <strong>{function="limitText(utf8_encode($value.description) ,$limit=30)"}</strong>
                          </span>
                        </td>
                        
                        <td class="text-center">
                          {if="$value.toshow != 0"} 
                          <form action="2019adminJE/{$value.idpost}/toshow" method="get">
                            <input type="hidden" name="toshow" value="0">
                            <button type="submit" class="btn btn-default" style="box-shadow: none !important; margin: 0 !important; padding: 5px 10px !important; text-transform: capitalize;" ><i class="fa fa-eye"></i></button>
                          </form>
                          {else}
                          <form action="2019adminJE/{$value.idpost}/toshow" method="get">
                            <input type="hidden" name="toshow" value="1">
                            <button type="submit" class="btn btn-danger" style="box-shadow: none !important; margin: 0 !important; padding: 5px 10px !important; text-transform: capitalize;" ><i class="fa fa-eye-slash"></i></button>
                          </form>
                          {/if}
                        </td>
                        <td>
                          <span class="badge badge-dot mr-4">
                              <i class="bg-warning"></i> <strong>{$value.dtregister}</strong>
                          </span>
                        </td>
                        
                        <td class="text-right">
                          <div class="dropdown action">
                              <a href="#" class="btn btn-action  dropdown-toggle-split" data-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <div class="dropdown-menu">
                                <!--a class="dropdown-item" href="admin/posts/{$value.idpost}/shows">Visualizar</a-->
                                <a class="dropdown-item" href="2019adminJE/posts/{$value.idpost}">Actualizar</a>
                                <a class="dropdown-item" onclick="return confirm('Deseja realmente excluir este post ?')" href="2019adminJE/{$value.idpost}/delete">Eliminar</a>
                              </div>
                          </div>
                        </td>
                      </tr>
                      {/loop}

                    </tbody>
                  </table>
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
