<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage wet-boew-intra
 * @since wet-boew 4.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 9]><html class="no-js lt-ie9" lang="<?php _e("<!--:en-->en<!--:--><!--:fr-->fr<!--:-->"); ?>"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="<?php _e("<!--:en-->en<!--:--><!--:fr-->fr<!--:-->"); ?>">
<!--<![endif]-->

<head>

<meta charset="utf-8" />

<title><?php bloginfo('name'); ?></title>

<meta content="width=device-width, initial-scale=1" name="viewport" />

<meta name="description" content="English description / Description en anglais" />

<meta name="dcterms.creator" content="English name of the content author / Nom en anglais de l'auteur du contenu" />

<meta name="dcterms.title" content="<?php bloginfo('name'); ?>" />

<meta name="dcterms.issued" title="W3CDTF" content="<<?php the_time('Y-m-d') ?>" />

<meta name="dcterms.modified" title="W3CDTF" content="<?php the_modified_time('Y-m-d') ?>" />

<meta name="dcterms.subject" title="scheme" content="English subject terms / Termes de sujet en anglais" />

<meta name="dcterms.language" title="ISO639-2" content="<?php _e("<!--:en-->eng<!--:--><!--:fr-->fra<!--:-->"); ?>" />

<!--[if gte IE 9 | !IE ]><!-->
    <link href="<?php bloginfo('template_directory'); ?>/wet-boew/assets/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/wet-boew/css/wet-boew.min.css" />
    <!--<![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/wet-boew/css/theme.min.css" />
    <!--[if lt IE 9]>
        <link href="<?php bloginfo('template_directory'); ?>/wet-boew/assets/favicon.ico" rel="shortcut icon"/>
    	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/wet-boew/css/ie8-wet-boew.min.css"/>
    	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    	<script src="<?php bloginfo('template_directory'); ?>/wet-boew/js/ie8-wet-boew.min.js"></script
    <![endif]-->
    <noscript>
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/wet-boew/css/noscript.min.css" />
    </noscript>

<!-- WordPress Begins -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>

<!-- WordPress Ends -->

</head>

<body vocab="http://schema.org/" typeof="WebPage" <?php body_class(); ?>>

<ul id="wb-tphp">
        <li class="wb-slc"> <a class="wb-sl" href="#wb-cont"><?php _e("<!--:en-->Skip to main content<!--:--><!--:fr-->Passer au contenu principal<!--:-->"); ?></a> 
        </li>
        <li class="wb-slc visible-md visible-lg"> <a class="wb-sl" href="#wb-info"><?php _e("<!--:en-->Skip to site information<!--:--><!--:fr-->Passer aux informations sur le site<!--:-->"); ?></a> 
        </li>
        <?php if ($clf_col_num=='1') {
		} else {
	_e("<!--:en--><li class=\"wb-slc visible-md visible-lg\"> <a class=\"wb-sl\" href=\"#wb-sec\">Skip to secondary menu</a></li><!--:--><!--:fr--><li class=\"wb-slc visible-md visible-lg\"> <a class=\"wb-sl\" href=\"#wb-sec\">Passer au menu secondaire</a></li><!--:-->");

} ?>
</ul>

<!-- HeaderStart -->

<header role="banner">
   <div id="wb-bnr" class="container">
      <section id="wb-lng" class="visible-md visible-lg text-right">
         <h2 class="wb-inv">Language selection</h2>
         <div class="row">
            <div class="col-md-12">
               <ul class="list-inline margin-bottom-none">
                  <li><a href="<?php _e("<!--:en-->" . qtrans_convertURL($url, 'fr') . "<!--:--><!--:fr-->" . qtrans_convertURL($url, 'en') . "<!--:-->"); ?>" lang="<?php _e("<!--:en-->fr<!--:--><!--:fr-->en<!--:-->"); ?>"><?php _e("<!--:en-->Français<!--:--><!--:fr-->English<!--:-->"); ?></a></li>
               </ul>
            </div>
         </div>
      </section>
      <div class="row">
         <div class="brand col-xs-8 col-sm-9 col-md-6">
            <a href="https://www.canada.ca/en.html"><img src="<?php bloginfo('template_directory'); ?>/wet-boew/assets/sig-blk-en.svg" alt=""><span class="wb-inv"> Government of Canada / <span lang="fr">Gouvernement du Canada</span></span></a>
         </div>
         <section class="wb-mb-links col-xs-12 visible-sm visible-xs" id="wb-glb-mn">
            <h2>Search and menus</h2>
            <ul class="pnl-btn list-inline text-right">
               <li><a href="#mb-pnl" title="Search and menus" aria-controls="mb-pnl" class="overlay-lnk btn btn-sm btn-default" role="button"><span class="glyphicon glyphicon-search"><span class="glyphicon glyphicon-th-list"><span class="wb-inv">Search and menus</span></span></span></a></li>
             </ul>
             <div id="mb-pnl"></div>
         </section>
         <section id="wb-srch" class="col-xs-6 text-right visible-md visible-lg">
            <h2>Search</h2>
            <form action="#" method="post" name="cse-search-box" role="search" class="form-inline">
               <div class="form-group">
                  <label for="wb-srch-q" class="wb-inv">Search website</label>
                  <input id="wb-srch-q" list="wb-srch-q-ac" class="wb-srch-q form-control" name="q" value="" size="27" maxlength="150" placeholder="Search Canada.ca" type="search">
                  <datalist id="wb-srch-q-ac">
<!--[if lte IE 9]><select><![endif]-->
<!--[if lte IE 9]></select><![endif]-->
</datalist>
               </div>
               <div class="form-group submit">
                  <button type="submit" id="wb-srch-sub" class="btn btn-primary btn-small" name="wb-srch-sub"><span class="glyphicon-search glyphicon"></span><span class="wb-inv">Search</span></button>
               </div>
            </form>
         </section>
      </div>
   </div>
        <nav role="navigation" id="wb-sm" data-ajax-fetch="<?php bloginfo('template_directory'); ?>/wet-boew/ajax/sitemenu-<?php _e("<!--:en-->en<!--:--><!--:fr-->fr<!--:-->"); ?>.html" data-trgt="mb-pnl" class="wb-menu visible-md visible-lg" typeof="SiteNavigationElement"></nav>
   <nav role="navigation" id="wb-bc" property="breadcrumb">
   <h2><?php _e("<!--:en-->You are here:<!--:--><!--:fr-->Vous êtes dans :<!--:-->"); ?></h2>
            <div class="container">
                <div class="row">
                    <?php the_breadcrumb($post); ?>
                </div>
            </div>
   </nav>
</header>
