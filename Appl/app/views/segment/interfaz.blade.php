    <nav class="navbar navbar-top">
  <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"><span>Menu</span></button>

  <a href="#" class="pull-left menubutton hidden-xs"><i class="fa fa-bars"></i></a>

  <a href="index.php" class="navbar-brand">HR4BD<span class="bold"> Consultores</span></a>
  <ul class="nav navbar-nav pull-right">
          <li class="dropdown pull-right user-data">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <img src="images/admin.png"> <span class="bold">Admin</span> <b class="caret"></b>              
            </a>
            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-user"></i> Perfil</a></li>
              <li><a href="#"><i class="fa fa-cogs"></i> Configuracion</a></li>
              <li><a href="gestion.php"><i class="fa fa-users"></i> Gestion Usuarios</a></li>
              	<!--<li><a href="gestion.php"><i class="fa fa-users"></i> Gestion Usuarios</a></li>-->
           
              <li><a href="logout"><i class="fa fa-key"></i> Logout</a></li>
            </ul>
          </li>
          <!-- Upload to server link. Class "dropdown-big" creates big dropdown -->
          <li class="dropdown dropdown-big leftonmobile">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cloud-upload"></i></a>
            <!-- Dropdown -->
            <ul class="dropdown-menu">
              <li>
                <!-- Progress bar -->
                <p>Progreso Resilencia</p>
                <!-- Bootstrap progress bar -->
                <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="sr-only">40% Complete</span>
          </div>
          </div>

                <hr>

                <!-- Progress bar -->
                <p>Progreso Cie</p>
                <!-- Bootstrap progress bar -->
                <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
            <span class="sr-only">80% Complete</span>
          </div>
          </div> 

                <hr>             

                <!-- Dropdown menu footer -->
                <div class="drop-foot">
                  <a href="#">Ver Todo</a>
                </div>

              </li>
            </ul>
          </li>

          <!-- Sync to server link -->
          <li class="dropdown dropdown-big leftonmobile">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-refresh"></i></a>
            <!-- Dropdown -->
            <ul class="dropdown-menu">
              <li>
                <!-- Using "fa fa-spin" class to rotate icon. -->
                <p><span class="label label-info"><i class="fa fa-cloud"></i></span> Sincronizar con el servidor</p>
                <hr>
                <p><span class="label label-warning"><i class="fa fa-cloud"></i></span> Sincronizar con la nube</p>

                <hr>

                <!-- Dropdown menu footer -->
                <div class="drop-foot">
                  <a href="#">Ver Todo</a>
                </div>

              </li>
            </ul>
          </li>
          <li class="dropdown dropdown-big leftonmobile">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="fa fa-comments"></i><span class="label label-info">6</span> 
              </a>

                <ul class="dropdown-menu">
                  <li class="dropdown-header padless">
                    <!-- Heading - h5 -->
                    <h5><i class="fa fa-comments"></i> Chats</h5>
                    <!-- Use hr tag to add border -->                   
                  </li>
                  <li>
                    <hr>
                    <!-- List item heading h6 -->
                    <h6><a href="#">Hola :)</a> <span class="label label-warning pull-right">10:42</span></h6>
                    <div class="clearfix"></div>
                    <hr>
                  </li>
                  <li>
                    <h6><a href="#">Como estas?</a> <span class="label label-warning pull-right">20:42</span></h6>
                    <div class="clearfix"></div>
                    <hr>
                  </li>
                  <li>
                    <h6><a href="#">Que estas haciendo?</a> <span class="label label-warning pull-right">14:42</span></h6>
                    <div class="clearfix"></div>
                    <hr>
                  </li>                  
                  <li>
                    <div class="drop-foot">
                      <a href="#">Ver Todo</a>
                    </div>
                  </li>                                    
                </ul>
            </li>
            
            <!-- Message button with number of latest messages count-->
            <li class="dropdown dropdown-big messages-dd leftonmobile">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i> <span class="label label-primary">3</span> 
              </a>

                <ul class="dropdown-menu">
                  <li class="dropdown-header padless">
                    <!-- Heading - h5 -->
                    <h5><i class="fa fa-envelope-alt"></i> Mensajes</h5>
                    <!-- Use hr tag to add border -->
                    
                  </li>
                  <li>
                    <hr><!-- List item heading h6 -->
                    <h6><a href="#">Hola estas hay?</a></h6>
                    <!-- List item para -->
                    <p>Te llame pero no contestas, necesito que veamos los informes...</p>
                    <hr>
                  </li>
                  <li>
                    <h6><a href="#">El sistema esta terminado?</a></h6>
                    <p>cuanto es el tiempo estimado...</p>
                    <hr>
                  </li>
                  <li>
                    <div class="drop-foot">
                      <a href="#">Ver Todo</a>
                    </div>
                  </li>                                    
                </ul>
            </li>

            <!-- Members button with number of latest members count -->
            <li class="dropdown dropdown-big">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="fa fa-user"></i> <span class="label label-success">7</span> 
              </a>

                <ul class="dropdown-menu">
                  <li class="dropdown-header padless">
                    <!-- Heading - h5 -->
                    <h5><i class="fa fa-user"></i> Usuarios</h5>
                    <!-- Use hr tag to add border -->                    
                  </li>
                  <li>
                    <hr>
                    <!-- List item heading h6-->
                    <h6><a href="#">Carlos Mella</a> <span class="label label-warning pull-right">User</span></h6>
                    <div class="clearfix"></div>
                    <hr>
                  </li>
                  <li>
                    <h6><a href="#">Administrador</a> <span class="label label-important pull-right">Admin</span></h6>
                    <div class="clearfix"></div>
                    <hr>
                  </li>
                  <li>
                    <h6><a href="#">Invitado</a> <span class="label label-warning pull-right">User</span></h6>
                    <div class="clearfix"></div>
                    <hr>
                  </li>                  
                  <li>
                    <div class="drop-foot">
                      <a href="#">View All</a>
                    </div>
                  </li>                                    
                </ul>
            </li> 
        </ul>
</nav><!--Fin navbar-top-->