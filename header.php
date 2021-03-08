<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
       
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>

    <script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=dp46ucdledpfc9xxfkqnqq" async="true"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script> -->

		<link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://kit.fontawesome.com/185b16c297.js" crossorigin="anonymous"></script>
		<?php wp_head(); ?>

	</head>
<style>
    ul.my_extra_menu_class li ul {
	    display: none;
		}
		ul.my_extra_menu_class li.open > ul {
	    display: block;
		}
		ul.my_extra_menu_class li > a:not(:last-child):after {
      content: '\f105';
      font-family: FontAwesome;
      font-weight: 300;
      font-style: normal;
      margin:0px 0px 0px 10px;
      text-decoration:none;        
		}

	
	
    @media only screen and (min-width: 600px) {
    #custom-menu .none{display:block;} 
    .nav-menu{overflow-y: scroll; overflow-x: hidden;}
    .my_extra_menu_class{margin-left: 0;}
    .menu-main-container{padding: 5px 0 5px 14px; margin: 0;}
    .menu_right_div{width: 23%; position: absolute; right: 15px; top: 0; border-left: 0px solid #d1d1d1; height:100%}
    #custom-menu .fa-times{position: absolute; left: 22%; top: 17px;}
    ul.my_extra_menu_class li.open > a:not(:last-child):after {margin: 0px 30px 0px 10px;}	


    .sub-menu .menu-item{padding-left: 12%;}
    /*	
    .sub-menu{bottom: 50px;-webkit-transition: .3s ease-in-out;	transition: .3s ease-in-out; opacity: 0; }
    .menu-item-has-children:hover > .sub-menu {display: block; bottom: 0px; opacity: 1; } 
    ul.my_extra_menu_class li.open > ul {display: none;}
    	
    	
    	.menu-item-has-children:hover > a:not(:last-child):after{content: '\f107';}
    .menu-item-has-children:hover > open:a:not(:last-child){color: red;}
    	*/
    	
    	.menu-item-has-children:hover > a:not(:last-child):after{content: '\f107';}
    .menu-item-has-children:hover > open:a:not(:last-child){color: red;}
    /* 	ul.my_extra_menu_class li.open:hover > a{color: red;} */
    	ul.my_extra_menu_class li > ul > .sub-menu{display:none;}	
    	
    	
    	ul.my_extra_menu_class li.open > a:not(:last-child){color: red;}
    	
    	

    .menu-item a{width:100%; display:block; color: black;}
    .menu-item a:hover{color:red; width:100%; display:block;}
    ul.my_extra_menu_class li > a:not(:last-child):after { float: right; margin-right:30px;}
    #first .sub-menu:before{display:block; height:50px; width:100px; content"red" font-size:20px; position:absolute: top:0; z-index:999;}
    .last-col{display:block;}
    /* .sub-menu:hover .my_extra_menu_class a{color:red !important; }	 */
    	}
</style>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		
    <div class="overlay">
      <div class="container-fluid show overlay-menu" id="nav">
        <div class="row">
          <div class="col-2 bg-white">
            <div class="row">
              <div class="col-9 d-flex justify-content-center align-items-center">
                <?php twentytwenty_site_logo(); ?>
              </div>
              <div class="col-2 d-flex justify-content-center align-items-center">
                <div id="custom-menu" class=""> 
                  <svg class="close-menu" width="25" height="25" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2265 0.773961C15.3138 0.861046 15.383 0.964501 15.4303 1.0784C15.4776 1.19229 15.5019 1.3144 15.5019 1.43771C15.5019 1.56102 15.4776 1.68313 15.4303 1.79702C15.383 1.91092 15.3138 2.01438 15.2265 2.10146L2.10146 15.2265C1.92542 15.4025 1.68666 15.5014 1.43771 15.5014C1.18875 15.5014 0.949995 15.4025 0.773957 15.2265C0.59792 15.0504 0.499023 14.8117 0.499023 14.5627C0.499023 14.3138 0.59792 14.075 0.773957 13.899L13.899 0.773961C13.986 0.686655 14.0895 0.617387 14.2034 0.570125C14.3173 0.522863 14.4394 0.498535 14.5627 0.498535C14.686 0.498535 14.8081 0.522863 14.922 0.570125C15.0359 0.617387 15.1394 0.686655 15.2265 0.773961Z" fill="#CD163F"/>
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M0.773961 0.773961C0.686655 0.861046 0.617387 0.964501 0.570125 1.0784C0.522863 1.19229 0.498535 1.3144 0.498535 1.43771C0.498535 1.56102 0.522863 1.68313 0.570125 1.79702C0.617387 1.91092 0.686655 2.01438 0.773961 2.10146L13.899 15.2265C14.075 15.4025 14.3138 15.5014 14.5627 15.5014C14.8117 15.5014 15.0504 15.4025 15.2265 15.2265C15.4025 15.0504 15.5014 14.8117 15.5014 14.5627C15.5014 14.3138 15.4025 14.075 15.2265 13.899L2.10146 0.773961C2.01438 0.686655 1.91092 0.617387 1.79702 0.570125C1.68313 0.522863 1.56102 0.498535 1.43771 0.498535C1.3144 0.498535 1.19229 0.522863 1.0784 0.570125C0.964501 0.617387 0.861046 0.686655 0.773961 0.773961Z" fill="#CD163F"/>
                   </svg>
                </div> <!--end custom-menu -->
              </div> <!--end col-1 -->
            </div> <!--end row -->
          </div><!--end col-3 --> 
        </div> <!--end row -->
       
        <div class="peak">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'my_extra_menu_class' ) );?>
          
          <div class="product-text">
            <hr>
            <p>News & Events</p>
            <p>Careers </p>
            <p>Locations</p>
            <p>Contact</p>
          </div>
          <div class="socialicons-list">
            <ul class="social-listing">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div> <!-- end peak-->
      </div> <!--end container-fluid -->
    </div> <!--end overlay -->

    <header class="container-fluid position-fixed no-scroll p-0 d-none d-lg-block">
      <div class="row">
        <div class="col-2 bg-white">
          <div class="row">
            <div class="col-9 d-flex justify-content-center align-items-center">
              <?php twentytwenty_site_logo(); ?>
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center">
              <div id="custom-menu" class=""> 
                <svg class="open-menu" width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="28" height="3" rx="1.5" fill="#CD163F"/>
                  <rect y="8" width="28" height="3" rx="1.5" fill="#CD163F"/>
                  <rect y="16" width="28" height="3" rx="1.5" fill="#CD163F"/>
                </svg>
              </div> <!--end custom-menu -->
            </div> <!--end col-1 -->
          </div> <!--end row -->
        </div><!--end col-3 -->

        <div class="col-10 bg-blue-200">
          <div class="row">
            <div class="col search">
              <!-- Search -->
              <div class="custom-search">
                <?php   echo do_shortcode ( ' [ivory-search id="420" title="main"] ' )?>
              </div>
            </div>

            <div class="col cart d-flex justify-content-center align-items-center">
              <!-- Cart -->
              <?php echo do_shortcode('[woo_cart_but]'); ?>
            </div>

            <div class="col lang d-flex justify-content-center align-items-center">
              <!-- Language selector -->
              <div class="lang-cart">
                <?php   echo do_shortcode( ' [language-switcher] ' ); ?>      
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </header>

    <!-- mobile header -->
    <header class="container-fluid position-fixed no-scroll p-0 d-lg-none bg-white">
      <div class="row">
        <div class="col-2 d-flex justify-content-center align-items-center">
            <div id="custom-menu" class=""> 
              <svg class="open-menu" width="28" height="19" viewBox="0 0 28 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="28" height="3" rx="1.5" fill="#CD163F"/>
                <rect y="8" width="28" height="3" rx="1.5" fill="#CD163F"/>
                <rect y="16" width="28" height="3" rx="1.5" fill="#CD163F"/>
              </svg>
            </div> <!--end custom-menu -->
        </div>
        <div class="col-8 d-flex justify-content-center align-items-center">
          <?php twentytwenty_site_logo(); ?>
        </div>
        <div class="col-2 search">
          <div class="custom-search">
            <?php   echo do_shortcode ( ' [ivory-search id="420" title="main"] ' )?>
          </div>
        </div>
      
      </div>
    </header>

<?php
  // Output the menu modal.
  get_template_part( 'template-parts/modal-menu' );
?>

