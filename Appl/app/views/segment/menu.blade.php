<!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>
        <!-- Search form -->
        <form class="navbar-form confirm" role="search" id="bsc-rut" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Buscar" id="busca-rut" name="busca-rut">
            <button class="btn search-button" type="submit"><i class="fa fa-search"></i></button>
          </div>
        </form>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav" style="">
          <!-- Main menu with font awesome icon -->

          <!-- Interfaz menu izquierdo -->
          <li><a href="index.php" class="open"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
          
          <!-- Interfaz Beneficiario -->
          <li class="has_sub"><a href="#" class=""><i class="fa fa-users"></i> <span>Beneficiario</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="registro_beneficiario.php">Registro Beneficiario</a></li>
                            
            </ul>
          </li><!--Fin Beneficiario-->
          
          <li class="has_sub"><a href="#" class=""><i class="fa fa-plus"></i> <span>Salud</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="cie.php">Cie 10 Mental</a></li>
              <li><a href="ado.php">Dep ADO</a></li>
              <li><a href="resilencia">Resiliencia</a></li>
              
            </ul>
          </li><!--Fin Salud-->

          <li class="has_sub"><a href="#" class=""><i class="fa fa-book"></i> <span>Educacion</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="caracterizacion_educacional.php">Caracterización educacional</a></li>
              <li><a href="d_civiles.php">Bevta</a></li>
              <li><a href="#">Cobertura</a></li>
              <li><a href="#">Puntaje SIMCE</a></li>
              <li><a href="#">Nivel de educacion de adultos responsables</a></li>

            </ul>
          </li><!--Fin Educacion -->
          
          <li class="has_sub"><a href="#" class=""><i class="fa fa-flask"></i> <span>Supervivencia y Drllo</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="#">Habitabilidad De la vivienda</a></li>
              <li><a href="#">Habitabilidad Comunitaria</a></li>
              <li><a href="#">Igresos Familiares</a></li>
              <li><a href="#">Indice de Pobreza familiar</a></li>
              <li><a href="#">VIF</a></li>
              <li><a href="competencias_parentales.php">Competencias parentales</a></li> 
                           
            </ul>
          </li><!--Fin Supervivencia y Desarrollo -->

          <li class="has_sub"><a href="#" class=""><i class="fa fa-table"></i> <span>Entorno significativo</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="#">Violencia social</a></li>
              
            </ul>
          </li><!--Fin Entorno significativo-->  

          <li class="has_sub"><a href="#" class=""><i class="fa fa-briefcase"></i> <span>Habilitación Socio Laboral Parental</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="empleo1.php">Caracterización socio laboral</a></li>
              <li><a href="#">Competencias básicas padre y/o madre</a></li>
              <li><a href="#">Competencias laborales padre y/o madre</a></li>
              <li><a href="#">Emprendimiento y autoempleo</a></li>
              <li><a href="#">Competencias básicas otros significantes</a></li>
              <li><a href="#">Competencias laborales otros significantes</a></li>              
            </ul>
          </li><!--Fin Habilitación Socio Laboral Parental-->

          <li class="has_sub"><a href="#" class=""><i class="fa fa-magic"></i> <span>Participación</span> <span class="pull-right"><i class="fa fa-chevron-left"></i></span></a>
            <ul>
              <li><a href="#">D° mas Respetados</a></li>
              <li><a href="#">D° menos Respetados</a></li>
            </ul>
          </li><!--Fin Participación-->

                    
         </li>
        </ul>
    </div>
    <!-- Sidebar ends -->