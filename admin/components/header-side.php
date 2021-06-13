<aside class="bg-white border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <a href="2019adminJE">
          <img style="margin-left: -43px;" src="res/site/icon/JandyEgi/logo_50x50.png" alt="">
          <span class="logo-text">JandyEgi</span>
        </a>
      </div>

      <div class="sidebar-user d-flex border-top border-bottom mx-2">
        <div class="photo">
          <img src='res/site/images/profile/{function="getUserPhoto()"}' alt="" srcset="">
        </div>
        <div class="description">
          <span class="user">Nome</span>
          <span class="function"></span>
        </div>
      </div>

      <ul class="list-group mt-3 list-group-flush">

        <div class="group-dasboard">

          <li class="list-group-item dashboard">

            <a href="2019adminJE" class="active">
              <i class="fa fa-dashboard mr-1"></i>
              Dashboard
            </a>
  
          </li>

        </div>

        <li class="list-group-item">
          <a href="#layoutSubmenu" data-toggle="collapse">
            <i class="fa fa-angle-down mr-2"></i>
            <i class="fa fa-users mr-1"></i>
            Usuários
          </a>

          <ul class="collapse list-unstyled"  data-parent="#sidebar-wrapper" id="layoutSubmenu">
            <li>
              <a href="2019adminJE/users/create"><i class="fa  fa-ellipsis-h "></i><span>Cadastrar Usuários</span></a>
            </li>
            <li>
              <a href="2019adminJE/users"><i class="fa  fa-ellipsis-h "></i><span>Lista de Usuários</span></a>
            </li>
          </ul>

        </li>

        <li class="list-group-item ">
          <a href="#clientsSubmenu" data-toggle="collapse">
            <i class="fa fa-angle-down mr-2"></i>
            <i class="fa fa-users mr-1"></i>
            Eventos
          </a>

          <ul class="collapse list-unstyled"  data-parent="#sidebar-wrapper" id="clientsSubmenu">
            <li>
              <a href="events-create.php"><i class="fa  fa-ellipsis-h "></i><span>Cadastrar Eventos</span></a>
            </li>
            <li>
                <a href="2019adminJE/clients"><i class="fa  fa-ellipsis-h "></i><span>Lista de Eventos</span></a>
            </li>
          </ul>
        </li>

        <li class="list-group-item">
          <a href="#elementsSubmenu" data-toggle="collapse">
            <i class="fa fa-angle-down mr-2"></i>
            <i class="fa fa-camera-retro mr-1"></i>
            Galéria
          </a>

          <ul class="collapse list-unstyled"  data-parent="#sidebar-wrapper" id="elementsSubmenu">
            <li>
              <a href="2019adminJE/portfolios/create"><i class="fa  fa-ellipsis-h "></i><span>Cadastrar</span></a>
            </li>
            <li>
                <a href="2019adminJE/portfolios"><i class="fa  fa-ellipsis-h "></i><span>Lista de Galéria</span></a>
            </li>
          </ul>

        </li>

        <li class="list-group-item">
          <a href="#categoryPortfolioSubmenu" data-toggle="collapse">
            <i class="fa fa-angle-down mr-2"></i>
            <i class="fa fa fa-sitemap mr-1"></i>
            Cerimônia
          </a>

          <ul class="collapse list-unstyled"  data-parent="#sidebar-wrapper" id="categoryPortfolioSubmenu">
            <li>
              <a href="2019adminJE/category-portfolios/create"><i class="fa  fa-ellipsis-h "></i><span>Cadastrar Cerimônia</span></a>
            </li>
            <li>
                <a href="2019adminJE/category-portfolios"><i class="fa  fa-ellipsis-h "></i><span>Lista de Cerimônia</span></a>
            </li>

          </ul>

        </li>


        <li class="list-group-item">
          <a href="#pages" data-toggle="collapse">
            <i class="fa fa-angle-down mr-1"></i>
            <i class="fa fa fa-link mr-1"></i>
            Páginas
          </a>

          <ul class="collapse list-unstyled"  data-parent="#sidebar-wrapper" id="pages">
            <li>
              <a href="home?#home"><i class="fa  fa-ellipsis-h "></i><span>Home</span></a>
            </li>

            <li>
              <a href="home?#about"><i class="fa  fa-ellipsis-h "></i><span>Sobre</span></a>
            </li>

            <li>
              <a href="home?#services"><i class="fa  fa-ellipsis-h "></i><span>Serviços</span></a>
            </li>

            <li>
              <a href="home?#portfolios"><i class="fa  fa-ellipsis-h "></i><span>Portfólios</span></a>
            </li>

            <li>
              <a href="home?#clients"><i class="fa  fa-ellipsis-h "></i><span>Clientes</span></a>
            </li>
           
            <li>
                <a href="blog"><i class="fa  fa-ellipsis-h "></i><span>Blog</span></a>
            </li>

            <li>
              <a href="home?#contacts"><i class="fa  fa-ellipsis-h "></i><span>Contactos</span></a>
            </li>

          </ul>

        </li>
        

        <li class="list-group-item">
          <a href="2019adminJE/logout">
            <i class="fa fa-power-off ml-3 mr-1"></i>
            Sair
          </a>

        </li>
        

      </ul>
    </aside>