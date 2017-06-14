<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- codigo -->
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto+Condensed:100'>
    <link rel="icon" href="imgs/icone.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/css/stylel.css'?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- fim do codigo -->
</head>
    
<body>
        
        <div class="">
        <div class="single-page">
            <div class="close">
                <a href="javascript:history.back()"><i class="fa fa-close"></i></a>
            </div>
    
        <div class="projet01">
        
        <div class="singlew">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <br>
        </div>
        
        <div class="container main-container">   
        <div class="text_run">
            <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                    <?php while ( have_posts() ) : the_post() ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div><!-- .entry-content -->

                        </article><!-- #post-## -->

                    <?php endwhile; ?>

                    </main><!-- #main -->
                </div><!-- #primary -->
            <a href="javascript:history.back()" class="button">Back</a>
        </div>
        
        </div>
        </div>
        </div>
            
        </div>
</body>

<?php
get_footer();
