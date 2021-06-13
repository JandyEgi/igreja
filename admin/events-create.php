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

  <link rel="stylesheet" href="res/admin/library-HCB/adminHCB/admin-files.css">


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
        <br>
      </nav>


      <!-- content-wrapper --->

      <div class="content-wrapper">
       
        <div class="container-fluid pb-4">

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
                </div.-->
              </div>
            </div>
          </div>

          <div class="row  pb-5">
            <div class="col-lg-12">
                <div class="cards cards-ds  shadow">
                    <div class="heading pb-3">
                        <span>Cadastrar Eventos</span>
                    </div>
                    
                     <div class="alert alert-danger  alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      error
                     </div>
                    
                    
                        <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          success
                        </div>
                    
                    <div class="body px-3 form-register">
                        <form action="create" method="POST" enctype="multipart/form-data">
                        
                            <div class="form-group">
                                <label for="desclient">Nome do Eventos:</label>
                                <input type="text" class="form-control" name="name" value="" placeholder="Digite o título" id="desclient">
                            </div>

                            <div class="form-group">
                                <label for="desclient">Descrição do Eventos:</label>
                                <textarea type="text" class="form-control" name="description" value="" id="desclient">
                                
                                </textarea>
                            </div>
                            
                            <div class="form-group">
                              <label for="file"> Fotos:</label>
                              <input type="file" id="file" name="image" data-role="file" data-mode="drop">
                              <div class="images-file">
                                <img class="img-responsive" width="200" id="image-preview" src="">
                              </div>
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
  <!-- jQuery -->
  <script src="res/admin/library-HCB/jquery v3.4.1/jquery.min.js"></script>

  <!-- Bootstrap core JavaScript -->
  <script src="res/admin/library-HCB/Bootstrap v4.4.1/js/bootstrap.bundle.min.js"></script>

  <!-- MDB core JavaScript -->
  <script src="res/admin/library-HCB/mdb/mdb.js"></script>

  <!-- Popper core JavaScript -->
  <script src="res/admin/library-HCB/mdb/js/popper.min.js"></script>

  

  <script src="res/admin/library-HCB/adminHCB/adminHCB.js"></script>



  <script type="text/javascript">

        // Inicializar wow
        new WOW().init();

        // Menu toggler

        $("#menu-toggle").click(function(e) {
             e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });


        // Mostrar Imagens

        document.querySelector('#file').addEventListener('change', function(){
    
            var file = new FileReader();
          
            file.onload = function() {
              
              document.querySelector('#image-preview').src = file.result;
          
            }
  
        file.readAsDataURL(this.files[0]);
  
        });

  </script>

<script>
 
  </script>

</body>

</html>
