<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, maximum-scale=1">
   <title>
  <?php
    if( ! is_home() ):
      wp_title( '|', true, 'right' );
    endif;
    bloginfo( 'name' );
  ?>
</title>  
   
<!-- Bootstrap -->
                                                                                       
                                                               
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url');?>/style.css" />


<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>  

<style> 
.container {
	width: 1000px!important;
}
</style>

<script src="<?php bloginfo('template_url');?>/js/html5shiv.js"></script>
<script src="<?php bloginfo('template_url');?>/js/respond.js"></script>
<![endif]-->

<?php wp_head(); ?>    

<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/modernizr.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.cycle2.min.js"></script>   
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/custom.js"></script>

</head>
             

<body <?php body_class(); ?>>
 
<div id="wrap">

<!--<a href="<?php echo home_url( '/' ); ?>">Home Page</a>-->
<?php 

include('nav.php');

?>