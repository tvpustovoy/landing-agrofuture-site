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
<head>
    <jdoc:include type="head" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" %}"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js" %}"></script>
    <![endif]-->
	
</head>
<body class="<?php echo $tpl->getBodyClasses(); ?>" data-default-background-img="/templates/jblank/images/bg5.jpg" data-overlay="true" data-overlay-opacity="0.35">

    <!--[if lt IE 7]><p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. </p><![endif]-->


<!-- Outer Container -->
    <div id="outer-container">

      <!-- Left Sidebar -->
      <section id="left-sidebar">
        <jdoc:include type="modules" name="left-sidebar" />
      </section><!-- #left-sidebar -->
      <!-- end: Left Sidebar -->

      <section id="main-content" class="clearfix">
        
        <article id="intro" class="section-wrapper clearfix" data-custom-background-img="/templates/jblank/images/bg5.jpg">
          <jdoc:include type="modules" name="main-intro" />
        </article><!-- .section-wrapper -->

        <article id="text" class="section-wrapper clearfix" data-custom-background-img="/templates/jblank/images/bg1.jpg">
          <jdoc:include type="modules" name="main-project" />
        </article><!-- .section-wrapper -->

        <article id="carousel" class="section-wrapper clearfix" data-custom-background-img="/templates/jblank/images/bg6.jpg">
          <jdoc:include type="modules" name="main-about-us" />
        </article><!-- .section-wrapper -->

        <article id="featured" class="section-wrapper clearfix" data-custom-background-img="/templates/jblank/images/bg3.jpg">
          <jdoc:include type="modules" name="main-partners" />
        </article><!-- .section-wrapper -->

        <article id="contact" class="section-wrapper clearfix" data-custom-background-img="/templates/jblank/images/bg4.jpg">
          <jdoc:include type="modules" name="main-contacts" />
        </article><!-- .section-wrapper -->

      </section><!-- #main-content -->

      <!-- Footer -->
      <section id="footer">
        <jdoc:include type="modules" name="footer" />
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
