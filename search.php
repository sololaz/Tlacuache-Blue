<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
    
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    
    <?php if (is_search()) { ?>
       <meta name="robots" content="noindex, nofollow" /> 
    <?php } ?>

    <title>
           <?php
              if (function_exists('is_tag') && is_tag()) {
                 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
              elseif (is_archive()) {
                 wp_title(''); echo ' Archive - '; }
              elseif (is_search()) {
                 echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
              elseif (!(is_404()) && (is_single()) || (is_page())) {
                 wp_title(''); echo ' - '; }
              elseif (is_404()) {
                 echo 'Not Found - '; }
              if (is_home()) {
                 bloginfo('name'); echo ' - '; bloginfo('description'); }
              else {
                  bloginfo('name'); }
              if ($paged>1) {
                 echo ' - page '. $paged; }
           ?>
    </title>

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>

    <script src="https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>

    <script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.js"></script>
 <link rel="stylesheet" href="http://tlacuacheblue.com/css/format_blog.css" type="text/css" />
        <link rel="stylesheet" href="http://tlacuacheblue.com/css/layout_blog.css" type="text/css" />
        <link rel="stylesheet" href="http://tlacuacheblue.com/css/mobile_blog.css" type="text/css" />


     
</head>

<body class="archive white">
    
   <!-- wrapper -->
        <div id="wrapper">

            <!-- header -->
            <div id="header">
            <div id="head" class="default">

            <h1> <a id="logo" href="http://tlacuacheblue.com">index</a></h1>
             <div id="main-menu">
                    <ul>
                       <li><a href="quienes-somos.html">¿QUIÉNES SOMOS?</a></li>
                        <li><a href="que-hacemos.html">¿QUÉ HACEMOS?</a></li>
                        <li><a href="urban-energies.html">URBAN ENERGIES</a></li>
                        <li><a href="purple.html">PURPLE</a></li>
                        <li><a href="index.php">BLOG</a></li>
                        <li><a href="contacto.html">CONTACTO</a></li>
                    </ul>
            </div>



  <h2 class="title">RESULTADOS</h2>

        </div>
      </div>
            <!-- /header -->


<div id="container">


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			

			<div class="entry">
				<div class="metatop">
				<a href="<?php the_permalink() ?>">
					<h2><?php the_title(); ?></h2>
</div>


			<?php the_post_thumbnail('full'); ?>
        

        	<div class="text"><?php  the_excerpt(); ?></div>
        	</a>

			<div class="postmetadata">
				<?php the_tags(''); ?>
			</div>

			</div>
		</div>

	<?php endwhile; ?>


	<?php else : ?>

  <div id="container">

    <div class="post">

		<h2>No se encontraron resultados</h2>
    </div>
  </div>
	<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<script>

$(document).ready(function() {

	$('.entry img:not(:nth-of-type(1))').remove()


		var $grid = $('#container').isotope({
		  itemSelector: '.post',
		  percentPosition: true,
		  masonry: {
		    columnWidth: '.post'
		  }
		});
		// layout Isotope after each image loads
		$grid.imagesLoaded().progress( function() {
		  $grid.isotope('layout');
		});  


});

</script>

<?php if ( function_exists( 'pgntn_display_pagination' ) ) pgntn_display_pagination( 'posts' ); ?>
<?php get_footer(); ?>




