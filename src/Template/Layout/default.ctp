<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <?= $this->Html->charset() ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://use.fontawesome.com/2f9c124d19.js"></script>
    <title>
      SportManager
    </title>
    <?php echo $this->Html->css('font-awesome');?>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('bootstrap-datetimepicker.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('style-responsive.css') ?>
    <?= $this->Html->css('table-responsive.css') ?>
    <?= $this->Html->css('to-do.css') ?>
    <?= $this->Html->css('zabuto_calendar.css') ?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <style>
      #map{
        height:620px;
        width:100%;
      }
    </style>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

  </head>

  <body>

   <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">

            <!--logo start-->
            <div style="display: flex; align-items: center;">
              <a class="logo"><b>SportManager</b></a>
              <li class="sub-menu">
                      <?= $this->Html->link('<i class="fa fa-home"></i><span><a class="logo"><b></b></a></span>', ['controller' => 'Index', 'action' => 'view'], ['escape'=>false]) ?>
                  </li>
              <!--logo end-->

              <div class="nav notify-row">
                  <!--  notification start -->
                  <ul class="nav top-menu">
                      <!-- settings start -->
                      <li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle notifs" href="index.html#">
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
                                      <!--<span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>-->
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
                                      <!--<span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>-->
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
                                     <!-- <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>-->
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
        <form class="navbar-form" role="search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Recherche" name="q">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
          </div>
        </div>
        </form>
      </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><?= $this->Html->link('Deconnexion', ['controller' => 'Members', 'action' => 'logout','class' => 'logout']);?></li>
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

                  <!--<p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>-->
                  <li class="sub-menu">
                      <?= $this->Html->link('<i class="fa fa-desktop"></i><span>Mon Profil</span>', ['controller' => 'Accounts', 'action' => 'profil'], ['escape'=>false]) ?>
                  </li>

                  <li class="sub-menu" >
                      <?= $this->Html->link('<i class="fa fa-tasks"></i><span>Mes Séances</span>', ['controller' => 'Accounts', 'action' => 'seances'], ['escape'=>false]) ?>

                  </li>
                   <li class="sub-menu">
                      <?= $this->Html->link('<i class="fa fa-soccer-ball-o"></i><span>Compétitions</span>', ['controller' => 'Accounts', 'action' => 'competitions'], ['escape'=>false]) ?>
                  </li>
                  <li class="sub-menu">
                      <?= $this->Html->link('<i class="fa fa-book"></i><span>Classement</span>', ['controller' => 'Accounts', 'action' => 'classement'], ['escape'=>false]) ?>
                  </li>
                  <li class="sub-menu">
                      <?= $this->Html->link('<i class="fa fa-laptop"></i><span>Mes Objets Connectés</span>', ['controller' => 'Accounts', 'action' => 'objetsco'], ['escape'=>false]) ?>
                  </li>
                  <li class="sub-menu">
                      <?= $this->Html->link('<i class="fa fa-map-marker"></i><span>Localisation</span>', ['controller' => 'Accounts', 'action' => 'Localisation'], ['escape'=>false]) ?>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>

      <section id="main-content">
          <section class="wrapper">

              <div class="col-lg-12">
                  <div class="col-lg-12 main-chart">
                      <div class="col-lg-12">
                      </div><!-- /row -->

                      <div class="col-lg-12">
                      </div><!-- /row -->

                      <div class="col-lg-12">
                      </div><!-- /row -->

                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
              </div>

    <div class="container clearfix">
      <?php echo $this->fetch("content");?>
    </div>

  </section>
  <footer class="site-footer">
    <div class="row">
      <div class="col-lg-1">

      </div>
      <div class="col-lg-2">
        <div class="copyright">© 2017, @SportManager
        </div>
      </div>
      <div class="col-lg-4">
        <div class="copyright">OC-11-CF : ARNAUD - BAS - CAZADE - GEOFFROY ; Options C et F
        </div>
      </div>
      <div class="col-lg-4">
        <div class="design">
          <?php $v="sportmanager@gmail.com"; echo $this->Html->link($v,'mailto:'.$v,array('target' => '_blank'));?> | <?= $this->Html->link('&Eacute;quipe', ['controller' => 'Accounts', 'action' => 'equipe'], ['escape'=>false]) ?> | <?= $this->Html->link('Mentions Légales', ['controller' => 'Accounts', 'action' => 'mentions'], ['escape'=>false]) ?> | <?= $this->Html->link('FAQ', ['controller' => 'Accounts', 'action' => 'faq'], ['escape'=>false]) ?></div>
      </div>
      <div class="col-lg-1">

      </div>
    </div>
</footer>


    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->

  <?= $this->Html->script('bootstrap');?>
  <?= $this->fetch('script');?>
  <?= $this->fetch('jquery'); ?>
  <?= $this->fetch('bootstrap.min'); ?>
  <?= $this->Html->script('bootstrap-datetimepicker.min');?>
  <?= $this->Html->script('script_propre');?>
  </body>
<?php $this->assign("title", "Projet Web"); ?>
</html>
