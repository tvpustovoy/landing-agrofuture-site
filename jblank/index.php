<?php
/**
 * J!Blank Template for Joomla by JBlank.pro (JBZoo.com)
 *
 * @package    JBlank
 * @author     SmetDenis <admin@jbzoo.com>
 * @copyright  Copyright (c) JBlank.pro
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link       http://jblank.pro/ JBlank project page
 */

defined('_JEXEC') or die;


// init $tpl helper
require dirname(__FILE__) . '/php/init.php';

// путь к шаблону
$app    = JFactory::getApplication();
$tempalte_path   = JURI::base(true).'/templates/'.$app->getTemplate().'/';

?><?php echo $tpl->renderHTML(); ?>
<!DOCTYPE html>
<head>
    <!-- jdoc:include type="head" / -->
    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?php echo $tempalte_path; ?>/favicon.png" >
	<!-- Bootstrap core CSS -->
    <link href="<?php echo $tempalte_path; ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?php echo $tempalte_path; ?>/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- vegas bg -->
    <link href="<?php echo $tempalte_path; ?>/css/jquery.vegas.min.css" rel="stylesheet">
    <!-- owl carousel css -->
    <link href="<?php echo $tempalte_path; ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo $tempalte_path; ?>/css/owl.theme.css" rel="stylesheet">
    <link href="<?php echo $tempalte_path; ?>/css/owl.transitions.css" rel="stylesheet">
    <!-- intro animations -->
    <link href="<?php echo $tempalte_path; ?>/css/animate.css" rel="stylesheet">
    <!-- font awesome -->
    <link href="<?php echo $tempalte_path; ?>/css/font-awesome.min.css" rel="stylesheet">
    <!-- lightbox -->
    <link href="<?php echo $tempalte_path; ?>/css/lightbox.css" rel="stylesheet">

    <!-- styles for this template -->
    <link href="<?php echo $tempalte_path; ?>/css/styles.css" rel="stylesheet">

    <!-- place your extra custom styles in this file -->
    <link href="<?php echo $tempalte_path; ?>/css/custom.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" %}"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js" %}"></script>
    <![endif]-->
	
</head>
<body class="<?php echo $tpl->getBodyClasses(); ?>" data-default-background-img="<?php echo $tempalte_path; ?>/images/bg5.jpg" data-overlay="true" data-overlay-opacity="0.35">

    <!--[if lt IE 7]><p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. </p><![endif]-->


<!-- Outer Container -->
    <div id="outer-container">

      <!-- Left Sidebar -->
      <section id="left-sidebar">
        
        <div class="logo">
          <a href="#intro" class="link-scroll"><img src="<?php echo $tempalte_path; ?>/images/logo_small.png" alt=""></a>
        </div><!-- .logo -->

        <!-- Menu Icon for smaller viewports -->
        <div id="mobile-menu-icon" class="visible-xs" onClick="toggle_main_menu();"><span class="glyphicon glyphicon-th"></span></div>

        <ul id="main-menu">
          <li id="menu-item-text" class="menu-item scroll"><a href="#text">О проекте</a></li>
          <li id="menu-item-carousel" class="menu-item scroll"><a href="#carousel">Кто мы</a></li>
          <li id="menu-item-grid" class="menu-item scroll"><a href="#featured">Партнеры</a></li>
          <li id="menu-item-contact" class="menu-item scroll"><a href="#contact">Свяжитесь с нами</a></li>
        </ul><!-- #main-menu -->

      </section><!-- #left-sidebar -->
      <!-- end: Left Sidebar -->

      <section id="main-content" class="clearfix">
        
        <article id="intro" class="section-wrapper clearfix" data-custom-background-img="<?php echo $tempalte_path; ?>/images/bg5.jpg">
          <div class="content-wrapper clearfix wow fadeInDown" data-wow-delay="0.3s">
            <div class="col-sm-10 col-md-9 pull-right">

                <section class="feature-text">

                  <h1><img src="<?php echo $tempalte_path; ?>/images/logo_ru_white.png" class="img-responsive"></h1>
                  <h5>Агробудущее россии: онлайн-образование в сельском хозяйстве</h5>
                  <p>Мы создаем первую общероссийскую онлайн-платформу по трансферу сельскохозяйственного образования в реальный сектор экономики</p>
                  <p>
                    <a href="#text" class="link-scroll btn btn-outline-inverse btn-lg">Подробнее...</a>
                    <a href="#contact" class="link-scroll btn btn-outline-inverse btn-lg">Стать партнером</a>
                  </p>
                </section>

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="text" class="section-wrapper clearfix" data-custom-background-img="<?php echo $tempalte_path; ?>/images/bg1.jpg">
          <div class="content-wrapper clearfix">
            <div class="col-sm-11 col-md-10">

                <h1>О проекте</h1>

                <h3> Агробудущее России - это</h3>
                
                <!-- grid -->
                <section class="grid row clearfix clearfix-for-2cols"  style="  background-color: rgba(51, 51, 51, 0.28);">

                  <p>&nbsp;</p>
<!-- grid item -->
<div class="grid-item col-md-12">
<div class="item-content clearfix">
<div class="icon fa fa-area-chart">&nbsp;</div>
<div class="text-content">
<h5>Образовательная онлайн-платформа</h5>
<p>Ресурс в сети Интернет, предназначенный для размещения на нём Массовых Открытых Онлайн Курсов (МООК)</p>
</div>
</div>
<!-- end: .item-content --></div>
<!-- end: .grid-item -->
<p>&nbsp;</p>
<!-- grid item -->
<div class="grid-item col-md-12">
<div class="item-content clearfix">
<div class="icon fa fa-certificate">&nbsp;</div>
<div class="text-content">
<h5>Лучшие МООКи по сельскому хозяйству на одном ресурсе</h5>
<p>МООКи сегодня - революционная технология быстрого донесения знаний от лучших специалистов области до десятков тысяч студентов одновременно</p>
</div>
</div>
<!-- end: .item-content --></div>
<!-- end: .grid-item -->
<p>&nbsp;</p>
<!-- grid item -->
<div class="grid-item col-md-12">
<div class="item-content clearfix">
<div class="icon fa fa-globe">&nbsp;</div>
<div class="text-content">
<h5>Доступ к бесплатному образованию на русском языке из любой точки мира</h5>
<p>МООКи преследуют идею открытого образования - для получения знаний студенту достаточно только выхода в Интернет, а ВУЗы получают экономию на издержках оплаты дорогих преподавателей, сложной организации открытых массовых лекций, продвижения своих курсов и др.</p>
</div>
</div>
<!-- end: .item-content --></div>
<!-- end: .grid-item -->
<p>&nbsp;</p>
<!-- grid item -->
<div class="grid-item col-md-12">
<div class="item-content clearfix">
<div class="icon fa fa-cloud">&nbsp;</div>
<div class="text-content">
<h5>Собственный онлайн-контент на собственной платформе</h5>
<p>Возможность выбирать темы и создавать последовательности курсов. Например, ориентируясь на актуальные запросы крупных и малых агропредприятий на новые технологии или специализированные кадры</p>
</div>
</div>
<!-- end: .item-content --></div>
<!-- end: .grid-item -->
<p>&nbsp;</p>
<!-- grid item -->
<div class="grid-item col-md-12">
<div class="item-content clearfix">
<div class="icon fa fa-thumbs-up">&nbsp;</div>
<div class="text-content">
<h5>Единая интернет-площадка для коммуникации лидеров в области сельского хозяйства</h5>
<p>Синергия от организационного, научно-академического и финансового участия лидеров агропромышленной отрасли и участников лиги приведёт к созданию лучшего по качеству контента на рынке онлайн-образования в сельском хозяйстве не только в России, но и в мире</p>
</div>
</div>
<!-- end: .item-content --></div>
<!-- end: .grid-item -->



                </section><!-- end: grid -->

            </div><!-- .col-sm-11 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="carousel" class="section-wrapper clearfix" data-custom-background-img="<?php echo $tempalte_path; ?>/images/bg6.jpg">
          <div class="content-wrapper clearfix">

              <div id="features-carousel" class="carousel slide with-title-indicators max-height" data-height-percent="70" data-ride="carousel">
                
                <!-- Indicators - slide navigation 
                <ol class="carousel-indicators title-indicators">
                  <li data-target="#features-carousel" data-slide-to="0" class="active">Lorem Ipsum</li>
                  <li data-target="#features-carousel" data-slide-to="1">Suspendisse</li>
                  <li data-target="#features-carousel" data-slide-to="2">Maecenas</li>
                  <li data-target="#features-carousel" data-slide-to="3">Scelerisque</li>
                </ol> -->

                <!-- Wrapper for slides -->
                <div class="carousel-inner">


                  <div class="item active">
                    <div class="carousel-text-content">
                      <img src="<?php echo $tempalte_path; ?>/images/transp-image7.png" class="icon" alt="Lorem Ipsum">
                      <h2 class="title">Кто мы</h2>
                      <p>Группа лидеров агропромышленной отрасли, в которую входят ВУЗы, подведомственные Министерству сельского хозяйства РФ, и cельскохозяйственные предприятия.</p>
<p>Участники Лиги инициативных аграриев России создадут первую в мире единую платформу по трансферу сельскохозяйственного образования в реальный сектор экономики.</p>

                      

                    </div>
                  </div><!-- .item -->

                </div><!-- .carousel-inner -->

                <!-- Controls
                <a class="left carousel-control" href="#features-carousel" data-slide="prev"></a>
                <a class="right carousel-control" href="#features-carousel" data-slide="next"></a> -->

              </div><!-- #about-carousel -->

          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

        <article id="featured" class="section-wrapper clearfix" data-custom-background-img="<?php echo $tempalte_path; ?>/images/bg3.jpg">
          <div class="content-wrapper clearfix">
            <div class="col-sm-11">

                <h1 class="section-title">Партнеры</h1>
              
                <!-- feature columns -->
                <section class="feature-columns row clearfix">

                  

                      <!-- feature 1 -->
                      <article class="feature-col col-md-4">
                        <a href="http://mipt.ru" target="_blank"  class="thumbnail linked">
                          <div class="image-container">
                            <img data-img-src="<?php echo $tempalte_path; ?>/images/partner_mipt.jpg" class="lazy item-thumbnail" >
                          </div>
                          <div class="caption">
                            <p>Московский Физико-Технический Институт </p>
                          </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                      </article>

                    
                  

                      <!-- feature 1 -->
                      <article class="feature-col col-md-4">
                        <a href="http://rosobrnauka.ru/" target="_blank"  class="thumbnail linked">
                          <div class="image-container">
                            <img data-img-src="<?php echo $tempalte_path; ?>/images/partner_rasno.jpg" class="lazy item-thumbnail" >
                          </div>
                          <div class="caption">
                            <p>Российская ассоциация студентов по развитию науки и образования</p>
                          </div><!-- .caption -->
                        </a><!-- .thumbnail -->
                      </article>

                    
                  


                </section><!-- end: .feature-columns -->

              <!-- End: Section content to edit -->

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

    

        <article id="contact" class="section-wrapper clearfix" data-custom-background-img="<?php echo $tempalte_path; ?>/images/bg4.jpg">
          <div class="content-wrapper clearfix">
            
              <h1 class="section-title">Свяжитесь с нами</h1>
              
                <!-- CONTACT DETAILS -->
                <div class="contact-details col-sm-5 col-md-3">
                  <p>info@agrofuture.org</p>
                </div>
                <!-- END: CONTACT DETAILS -->

                <!-- CONTACT FORM -->
                <div class="col-sm-7 col-md-9">
                  <!-- IMPORTANT: change the email address at the top of the assets/php/mail.php file to the email address that you want this form to send to -->
                  <form class="form-style validate-form clearfix" action="" method="POST" role="form">

                    <!-- form left col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="text-field form-control"  id="client_name" placeholder="Имя" name="client_name">
                      </div>  
                      <div class="form-group">
                        <input type="email" class="text-field form-control" id="client_email" placeholder="Email" name="client_email">
                      </div>
                      <div class="form-group">
                        <input type="tel" class="text-field form-control" id="client_company" placeholder="Организация" name="client_company">
                      </div>    
                                 
                    </div><!-- end: form left col -->

                    <!-- form right col -->
                    <div class="col-md-6">
                      <div class="form-group">
                        <textarea placeholder="Сообщение..." class="form-control" id="client_comment" name="client_comment"></textarea>
                      </div> 
                      <div class="form-group">
                        <img src="<?php echo $tempalte_path; ?>/images/loader-form.gif"  class="form-loader">
                        <button  id="sendOrderButton" type="submit" class="btn btn-sm btn-outline-inverse" >Отправить</button>
                      </div> 
                      <div id="order_status"></div>           
                    </div><!-- end: form right col -->

                  </form>
                </div><!-- end: CONTACT FORM -->

          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

      </section><!-- #main-content -->

      <!-- Footer -->
      <section id="footer">

        <!-- Go to Top -->
        <div id="go-to-top" onclick="scroll_to_top();"><span class="icon glyphicon glyphicon-chevron-up"></span></div>


        <!-- copyright text -->
        <div class="footer-text-line">© 2015 Лига инициативных аграриев России, info@agrofuture.org</div>

      </section>
      <!-- end: Footer -->      

    </div><!-- #outer-container -->
    <!-- end: Outer Container -->

    <!-- Modal -->
    <!-- DO NOT MOVE, EDIT OR REMOVE - this is needed in order for popup content to be populated in it -->
    <div class="modal fade" id="common-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="modal-body clearfix">
          </div><!-- .modal-body -->
        </div><!-- .modal-content -->
      </div><!-- .modal-dialog -->
    </div><!-- .modal -->








    <!-- Javascripts
    ================================================== -->

	<!-- Jquery and Bootstrap JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo $tempalte_path; ?>js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?php echo $tempalte_path; ?>js/bootstrap.min.js"></script>

    <!-- Easing - for transitions and effects -->
    <script src="<?php echo $tempalte_path; ?>js/jquery.easing.1.3.js"></script>

    <!-- background image strech script -->
    <script src="<?php echo $tempalte_path; ?>js/jquery.vegas.min.js"></script>

    <!-- detect mobile browsers -->
    <script src="<?php echo $tempalte_path; ?>js/detectmobilebrowser.js"></script>

    <!-- detect scrolling -->
    <script src="<?php echo $tempalte_path; ?>js/jquery.scrollstop.min.js"></script>

    <!-- owl carousel js -->
    <script src="<?php echo $tempalte_path; ?>js/owl.carousel.min.js"></script>

    <!-- lightbox js -->
    <script src="<?php echo $tempalte_path; ?>js/lightbox.min.js"></script>

    <!-- intro animations -->
    <script src="<?php echo $tempalte_path; ?>js/wow.min.js"></script>

    <!-- responsive videos -->
    <script src="<?php echo $tempalte_path; ?>js/jquery.fitvids.js"></script>

    <!-- Custom functions for this theme -->
    <script src="<?php echo $tempalte_path; ?>js/functions.js"></script>
    <script src="<?php echo $tempalte_path; ?>js/initialise-functions.js"></script>

    <!-- IE9 form fields placeholder fix -->
    <!--[if lt IE 9]>
    <script>contact_form_IE9_placeholder_fix();</script>
    <![endif]-->  

    <script src="<?php echo $tempalte_path; ?>js/main.js"></script>

</body></html>
