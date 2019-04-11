<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 

         <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    
          <?php if (is_search()) { ?>
             <meta name="robots" content="noindex, nofollow" /> 
          <?php } ?>

        <title>TLACUACHE BLUE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
        
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

        <?php wp_head(); ?>

    <script src="https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>

    <script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.js"></script>

        <link rel="stylesheet" type="text/css" href="http://tlacuacheblue.com/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="http://tlacuacheblue.com/css/style1.css" />

        <link rel="stylesheet" href="http://tlacuacheblue.com/css/format_blog.css" type="text/css" />
        <link rel="stylesheet" href="http://tlacuacheblue.com/css/layout_blog.css" type="text/css" />
        <link rel="stylesheet" href="http://tlacuacheblue.com/css/mobile_blog.css" type="text/css" />


        <link rel="stylesheet" href="http://tlacuacheblue.com/css/format.css" type="text/css" /> 
        <link rel="stylesheet" href="http://tlacuacheblue.com/css/layout.css" type="text/css" /> 
        <link rel="stylesheet" href="http://tlacuacheblue.com/css/mobile.css" type="text/css" /> 




        <link rel="stylesheet" type="text/css" href="http://tlacuacheblue.com/css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="http://tlacuacheblue.com/css/slick-theme.css"/>
    <script src="//use.typekit.net/ksx5bci.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
</head>

<body class="home white">

    <div id="wrapper">

         <div id="head" class="default">

            <h1> <a id="logo" href="index.html">index</a></h1>
             <div id="main-menu">
                    <ul>
                        <li><a href="quienes-somos.html">¿QUIÉNES SOMOS?</a></li>
                        <li><a href="que-hacemos.html">¿QUÉ HACEMOS?</a></li>
                        <li><a href="urban-energies.html">URBAN ENERGIES</a></li>
                        <li><a href="purple.html">PURPLE</a></li>
                        
                        <li><a href="contacto.html">CONTACTO</a></li>
                    </ul>
            </div>
        </div>


<div id="container" class="clearfix">

          

    <div id="slider-container">
           <div id="slides">           


           

            <div class="slide Suno">
              <div class="contenidoSlide">
                    <h2>Bienvenidos a<br>
                    <strong>tlacuache blue</strong></h2>
                        <p>Creemos en el poder del pensamiento alternativo,
                      de hacer las cosas diferentes y de ser honestos con
                      lo que somos</p>
              </div>
            </div>

            <div class="slide Sdos">
              <div class="contenidoSlide">
                    <h2>Somos un <strong>laboratorio de</strong><br>
                    <strong>inspiración urbana</strong></h2>
                        <p>especializados en <strong>investigación, tendencias culturales y branding</strong></p>
              </div>

            </div>

            
    </div>

</div>


    </div>
 
   
        <h2 class="title">NEWS FEED</h2>
      </div>

<div id="containerBlog">
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

    <h2>Not Found</h2>

  <?php endif; ?>
  </div>
<?php get_sidebar(); ?>
       <script>

$(document).ready(function() {

  $('.entry img:not(:nth-of-type(1))').remove()


    var $grid = $('#containerBlog').isotope({
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

   
        
  <script src="http://tlacuacheblue.com/js/jquery.slides.min.js"></script>

<script>

if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 
$('.Stres').remove()
  $('#main-menu').after('<div id="menuMobile" class="inactive"><span></span></div>')

  $('#main-menu li:nth-of-type(5)').after('<li id="data"> <a href="aviso-de-privacidad.html">AVISO DE PRIVACIDAD</a> <br><a>+52 (55) 6821 2036</a></div>')

        
 
 
}




    $(function() {

   
         $('#main-menu').after('<div id="menuMobile" class="inactive"><span></span></div>')

       var alto = $(window).height();

       $('.slide').height(alto)
       $('html .slidesjs-container').height(alto)

      $('#slides').slidesjs({
        play: {
          active: true,
          auto: true,
          interval: 4000,
          effect: "fade"
        },
        navigation: {
          effect: "fade"
        }, pagination: {
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 400
          }
        }
      });
    });
$(window).load(function() {


   jQuery.fn.mover = function () {
    $(this).animate({
        marginLeft: 130},400)
  }

  jQuery.fn.regresar = function () {
    $(this).animate({
        marginLeft: 0},400)
  }

  $('#menuMobile ').click(function(){
   
    if ($(this).hasClass('inactive')){
        $(this).addClass('active');
        $(this).removeClass('inactive');
        $('#logo').mover()
        $(this).mover()
        $('#main-menu').animate({
        marginLeft: 0},400)
    } else {
        $(this).addClass('inactive');
        $(this).removeClass('active');
        $('#logo').regresar()
        $(this).regresar()
        $('#main-menu').animate({
        marginLeft: -130},400)
    }

   });

  

    var menu = $('#slider-container')


    pos = menu.offset();


    $(window).scroll(function(){
            if($(this).scrollTop() > 50 && ($('#head').hasClass('default'))){
                $('#head').fadeOut('fast', function(){
                    $('#head').removeClass('default').addClass('fixed').fadeIn('fast');
                });
            } else if($(this).scrollTop() <= pos.top && ($('#head').hasClass('fixed'))){
                $('#head').fadeOut('fast', function(){
                    $('#head').removeClass('fixed').addClass('default').fadeIn('fast');
                });}
            })

   

});$(function() {
    // Get the form.
    var form = $('#ajax-contact');

    // Get the messages div.
    var formMessages = $('#form-messages');

    // Set up an event listener for the contact form.
$(form).submit(function(event) {
    // Stop the browser from submitting the form.
    event.preventDefault();

    var formData = $(form).serialize();

            $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
            .done(function(response) {
            // Make sure that the formMessages div has the 'success' class.
            $(formMessages).removeClass('error');
            $(formMessages).addClass('success');

            // Set the message text.
            $(formMessages).text(response);

            // Clear the form.
            $('#name').val('');
            $('#email').val('');
            $('#message').val('');
        })

            .fail(function(data) {
    // Make sure that the formMessages div has the 'error' class.
    $(formMessages).removeClass('success');
    $(formMessages).addClass('error');
    $('#ajax-contact').slideToggle('slow')

    // Set the message text.
    if (data.responseText !== '') {
        $(formMessages).text(data.responseText);
        $('#ajax-contact').slideToggle('slow')
    } else {
        $(formMessages).text('Oops! An error occured and your message could not be sent.');
    }
});
    });
});
  </script>

<?php if ( function_exists( 'pgntn_display_pagination' ) ) pgntn_display_pagination( 'posts' ); ?>
<?php get_footer(); ?>

