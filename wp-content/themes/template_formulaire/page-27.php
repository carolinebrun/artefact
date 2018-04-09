<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Souscrire à une offre</title>
        <link rel="icon" href="favicon.ico" />
        <html lang="en">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style_biocoop.css">
        <link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300i,400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

        <style>


        span.wpcf7-form-control.wpcf7-radio.p-radio {
            color:transparent;
        }

        span.wpcf7-form-control.wpcf7-radio.p-radio input[type="radio"] {
            margin-right:0px;
        }
        span.wpcf7-form-control.wpcf7-radio.p-radio input[type="radio"]:checked + span {
            color:transparent;
        }

        .pack span.wpcf7-form-control.wpcf7-radio {
            width:100%;
            margin-top:0 !important;
            margin-left:0 !important;
        }

        .p-radio.wpcf7-list-item span {
            display:none;
        }
        #checkbox-newsletter {
            width:100%;
            margin-top:0 !important;
            margin-left:0 !important;
            justify-content: left;
        }

        #checkbox-newsletter span.wpcf7-list-item {
            width:auto;
        }
        .p-radio {
            position:absolute;
        }

        .row {
            margin-top:100px !important;
        }

        .column_globale.row {
            margin-top:0px !important;
        }

        

        #six-magasins span.wpcf7-form-control.wpcf7-radio {
            width:632px;
        }
      
        .wpcf7-radio {
            display:flex!important;
            flex-direction:row!important;
            flex-wrap:wrap;
        }
        span.wpcf7-form-control.wpcf7-radio {
            margin-left:113px !important;
            width:618px;
            margin-top:55px !important;
        }
        span.wpcf7-list-item {
            width:103px;
            margin-bottom:22px;
            display:flex !important;
            justify-content: center !important;
        }

        
      
        .wpcf7 {
            width:600px !important;
        }

         
        span.wpcf7-form-control-wrap.menu-nb-magasins {
            margin-left:15px;
        }

        .nombre_magasins {
            display:flex;
            align-items:center;
        }

        span.wpcf7-form-control.wpcf7-radio.radio-un-mag {
            display:block !important;
        }

        .wpcf7 {
            width:100% !important;
        }

        

        a {
            color:#004994;
        }
        

    </style>
    </head>

    <body>
        <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
             <div class="header" style="display:flex; background-color:#6372a4; justify-content:space-around; align-items:center; padding:25px 0px 25px 0px; margin:0; height:140px;"><a href="http://carolinebrun.fr/biocoop"><img class="logo_biocoop" src="<?php bloginfo('template_directory'); ?>/img/logo_biocoop.svg"></a><h1>Gestion et animations digitales<br><small>S<span style="text-transform: lowercase">ouscrire à une de nos offres</span></small></h1></div>
            
            <div class="display_on_larger_screen"><h2>Merci d'utiliser un écran de résolution supérieure afin de découvrir nos offres de gestion et d'animations digitales.</h2></div>
            <div class="content">
                <?php the_content(); ?>
                
            </div>


        <?php endwhile; ?>
        <?php endif; ?>   

 <?php wp_footer(); ?>
    </body>
</html>