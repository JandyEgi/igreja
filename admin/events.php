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
  <link rel="stylesheet" href="res/admin/library-HCB/style/sidebar.css">

  <!-- Style  CSS -->
  <link rel="stylesheet" href="res/admin/library-HCB/style/style.css">

  <!-- Font-awesome  CSS -->
  <link rel="stylesheet" href="res/admin/library-HCB/font-awesome/css/font-awesome.min.css">

  <!-- Animate CSS -->
  <!--link rel="stylesheet" href="res/admin/library-HCB/animate/animate.min.css"-->

  <!-- MDB CSS -->
  <link rel="stylesheet" href="res/admin/library-HCB/mdb/css/mdb.min.css">

  <link rel="stylesheet" href="res/admin/library-HCB/datatables/css/dataTables.bootstrap4.css">


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

        <a href="#" class="ml-2" id="menu-toggle"><i class="fa fa-bars"></i></a>


        <br>
      </nav>


      <!-- content-wrapper --->

      <div class="content-wrapper">

        <div class="container-fluid">

          <div class="row py-5 px-3">
            <div class="col-lg-12 col-sm-12">
              <div class="cards  row  content-header">
                <div class="content-header-left col-lg-10 col-sm-10">
                  <span class="title">Bem-vindo à JandyEgi</span>
                  <span><b>Walaletéc</b> dashboard <b>app</b></span>
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
              <div class="cards cards-ds table-darks shadow">
                <div class="heading pb-3">
                  <span>Lista de Clientes</span>
                  <a href="clients/create" class="ml-5 btn btn-register">Cadastrar</a>

                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    success
                  </div>
                  
                </div>
                <div class="table-search table-pagination table-responsive">
                  <table id="table2" class="table align-items-center">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>Nome de Clientes</th>
                        <th>Data de Register</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody class="tbody-first">

                      
                      <tr>
                        <td>
                          <span>a}</span>
                        </td>
                        <th scope="row">
                          <div class="media m-0 align-items-center">
                            <a href="#" class="avatar rounded-circle mr-3">
                              <img alt="Image placeholder" src="res/site/images/clients/{$value.desphoto}">
                            </a>
                            <div class="media-body">
                              <span class="mb-0 text-sm">{function="utf8_encode($value.desclient)"}</span>
                            </div>
                          </div>
                        </th>

                        <td>
                          <span class="badge badge-dot mr-4">
                            <i class="bg-warning"></i> <strong>{$value.dtregister}</strong>
                          </span>
                        </td>


                        <td class="text-right" style="margin: 0 !important;">
                          <a style="box-shadow: none !important;" class="btn btn-default btn-sm" href="clients/{$value.idclient}">Actualizar</a>
                          <a style="box-shadow: none !important;" class="btn btn-danger btn-sm" href="clients/{$value.idclient}/delete" onclick="return confirm('Deseja realmente excluir este registro ?')">Eliminar</a>
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

  <script src="res/admin/library-HCB/datatables/js/jquery.dataTables.js"></script>

  <script src="res/admin/library-HCB/datatables/js/dataTables.bootstrap4.min.js"></script>

  <script type="text/javascript">
    new WOW().init();

    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

    $(function() {

      $('#table2').DataTable({

        "language": {
          "sInfo": "Mostrar Clientes _START_ à _END_ - Total de Clientes: _TOTAL_ ",
          "sInfoFiltered": "(filtered from _MAX_ total )",
          "sLengthMenu": "Mostrar Clientes _MENU_ ",
          "sSearch": "",
          "sSearchPlaceholder": "Procurar...",
          "sInfoEmpty": "Mostrando 0 à 0 de Clientes 0 ",
          "sZeroRecords": "Nenhum registro encontrado"
        }
      });
    });
  </script>
</body>

</html>