<?php global $soms_redux; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- <link href="fontawesome/css/fontawesome.css" rel="stylesheet"> -->
    <!-- <link href="fontawesome/css/brands.css" rel="stylesheet"> -->
    <!-- <link href="fontawesome/css/solid.css" rel="stylesheet"> -->
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="shortcut icon" href="<?php echo $soms_redux['favicon-image']['url']; ?>" type="image/vnd.microsoft.icon" />	
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <style>
        .home-banner {
            height: 686px;
        }
        .owl-stage-outer {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
            padding-left: 0.5rem !important;
            padding-right: 2.5rem !important;
        }
    </style>
   
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<!--------------------- HEADER ----------------------->
    <!--Section HEADER-->
    <section id="header" class="page-header fixed showmenu">
        <div class="container">
            <nav class="navbar navbar-expand-lg">

                <a class="navbar-brand" href="<?php echo home_url('/'); ?>"></a>
                <!-- End of .navbar-brand -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="custom-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="custom-toggler-icon"></span>
                    <span class="custom-toggler-icon"></span>
                    <span class="custom-toggler-icon"></span>
                </button>
                <!-- End of .navbar-toggler -->

                <div class="collapse navbar-collapse" id="custom-navbar">
                    <ul class="navbar-nav ml-auto align-items-center dynamic-nav">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'first-menu',
                            'menu_class' => 'navbar-nav',
                            'menu_id' => 'menu',
                        ));
                        ?>
                        <li class="nav-item">
                            <a href="https://app.resellr.id/login" class="custom-btn btn-small success-btn">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://app.resellr.id/register'" class="custom-btn btn-small secondary-btn">Register</a>
                        </li>
                    </ul>
                </div>
                <!-- End of .navbar-nav -->
            </nav>
        </div>
        <!-- End of .container -->
    </section>


	

	