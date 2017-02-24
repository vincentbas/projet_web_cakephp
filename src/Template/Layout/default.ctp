
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    

    <title><?php echo $title_for_layout;?></title>
	<?php echo $this->Html->css('font-awesome');?>
    <?php echo $this->Html->css('bootstrap');?>
	<?php echo $this->Html->css('style');?>
	<?php echo $this->Html->css('style-responsive');?>
	<?php echo $this->fetch('css');?>

  </head>

  <body>

   <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              
            <!--logo start-->
            <a class="logo"><b>SportManager</b></a>
            <!--logo end-->
			
            <div class="nav notify-row">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">4 entraînments en cours</p>
                            </li>
                            <li>
                                <a>
                                    <div class="task-info">
                                        <div class="desc">Pompes</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <div class="task-info">
                                        <div class="desc">Distance Parcourue</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <div class="task-info">
                                        <div class="desc">Perte de poids</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <div class="task-info">
                                        <div class="desc">Séance corde à sauter</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">Voir Plus</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">3</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">3 nouveaux messages</p>
                            </li>
                            <li>
                                <a>
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">John Smith</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        Hey bro, on s'enjaille
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jessie Owen</span>
                                    <span class="time">40 mins</span>
                                    </span>
                                    <span class="message">
										Bon anniversaire ma petite caille
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ramirez Hernandez</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        On se retrouve sur les terrains, prêt à en découdre
                                    </span>
                                </a>
                            </li>
                            
                            <li>
                                <a>Voir tous les messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
			<div class="col-sm-3 col-md-3">
				<form class="navbar-form" role="search">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cerca" name="q">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					</div>
				</div>
				</form>
			</div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout">Connexion</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Maya Benguigui</h5>
              	  	
                  <li class="mt">
                      <a class="active">
                          <i class="fa fa-dashboard"></i>
                          <span>Accueil</span>
						  <ul class="sub">
							  <li><a>Présentation</a></li>
							  <li><a>&Eacute;quipe</a></li>
							  <li><a>Mode d'emploi</a></li>
						  </ul>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a>
                          <i class="fa fa-desktop"></i>
                          <span>Mon Profil</span>
						  <ul class="sub">
							  <li><a>Statistiques</a></li>
							  <li><a>Badges</a></li>
						  </ul>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a>
                          <i class="fa fa-cogs"></i>
                          <span>Mes Séances</span>
						  <ul class="sub">
							  <li><a>Calendrier</a></li>
							  <li><a>Entraînements</a></li>
						  </ul>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a >
                          <i class="fa fa-book"></i>
                          <span>Classement</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a>
                          <i class="fa fa-tasks"></i>
                          <span>Mes Objets Connectés</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
		<div class="container">
		  <?php echo $this->fetch("content");?>
		</div>
		<!-- /.container -->
   
	</section>
      <!--sidebar end-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <?php echo $this->Html->script('bootstrap');?>
	<?php echo $this->Html->script('default');?>
	<?php echo $this->fetch('script');?>
	
  </body>
=======
<?php $this->assign("title", "Projet Web"); ?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <h1><a href=""><?= $this->fetch('title') ?></a></h1>
        <nav class="top-bar expanded" data-topbar role="navigation">
                <ul class="right">
                    <li><a target="_blank" href="#">Connexion</a></li>
                    <li><a target="_blank" href="#">Inscription</a></li>
                </ul>
        </nav>
    </header>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
>>>>>>> ab202b3fa284dedcf010bdfd40aa482b03b8c1be
</html>
