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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
<link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=dp46ucdledpfc9xxfkqnqq" async="true">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>

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
            font-weight: bold;
            font-style: normal;
            margin:0px 0px 0px 10px;
            text-decoration:none;        
		}

		ul.my_extra_menu_class li.open > a:not(:last-child):after {
		    content: '\f107';
            font-family: FontAwesome;
            font-weight: bold;
            font-style: normal;
            margin:0px 0px 0px 10px;
            text-decoration:none; 
		}
	
	
@media only screen and (min-width: 600px) {
#custom-menu .none{display:block;} 
.nav-menu{overflow-y: scroll; overflow-x: hidden;}
.my_extra_menu_class{margin-left: 0;}
.menu-main-container{padding: 5px 0 5px 14px; margin: 0;}
.peak{position: relative; background: #F9FAFE; width: 25%; padding: 0 5px 10px 0;}
.peak img{ padding: 16px 0 15px 27px; max-width: 70%;}
.menu-main-container .sub-menu{position: absolute; left: 99%; margin: 0; top: 0; width:100%; border-right: 1px solid #d1d1d1;  border-left: 0px solid #d1d1d1;  height:100%;}
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

		<?php
		wp_body_open();
		?>
		<div class="custom-desktop">
	<div class="header-titles">

						<?php
							// Site title or logo.
							twentytwenty_site_logo();

							// Site description.
							twentytwenty_site_description();
						?>

		
            <div id="custom-menu"> 
              <i class="fa fa-bars" id="open" aria-hidden="true"></i>
            <i class="fas fa-times" id="close"></i>
            <div class="container-fluid nav-menu show" id="nav">
                
                <div class="peak">
                    <img src="/wp-content/uploads/2020/12/image-26.png">
                <ul id="first">
                	<?php
                		wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'my_extra_menu_class' ) );						
                	?>
                  <!--   <li id="home_drop">
                    
                        Products<i class="fas fa-angle-right" id="istangle"></i></li> 
                    <li id="second_drop">Services <i class="fas fa-angle-right"></i></li>
                    <li id="third_drop">Applications <i class="fas fa-angle-right"></i></li>
                    <li id="fourth_drop">Resources <i class="fas fa-angle-right"></i></li>
                    <li id="fifth_drop">Support <i class="fas fa-angle-right"></i></li>
                    <li id="sixth_drop">Comapany <i class="fas fa-angle-right"></i></li> -->
                    
                </ul>
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
					</div>
				<div class="menu_right_div">
					
					<div class="blue-box">
						<div class="last-col">
							<p>
								Quick Links
							</p>
							<div class="boxone">
								<p>Product Finder</p>
								<h4>
									Not sure which product you need 
								</h4>
							</div>
							<div class="boxtwo">
								<p>Product Catalog </p> 
								<h4>
									Search our entire inventory of products					</h4>
							</div>
						</div>
					</div>

					<div class="exchange">
						<h4>
							Ion Exchange Resins
						</h4>
						<p>
							Ion Excahnge are particulary well suited for the removal of ionic impurities for several reasons.
							</p>
							<h5><a href="#">View all</a></h5>
						
					</div>
				</div>
				
				  <!-- Need help finding Products Section start here-->
	  <!--  <section class="pro-finder-cga" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
		   <h3>
			   Need help finding a product?
		   </h3>
	   <div class="container"> 
		   
		   <div class="row">
			   <div class="col-md-6">
				   <div class="duct">
				   <p>Product Filter</p>
				   <h4>
					   Not Sure which product you need?
				   </h4>
			   </div>
				   </div>
			   <div class="col-md-6">
				   <div class="catalog">
					
					   <p>Product Catalog</p>
				   <h4>
					   Search our entire inventory of products.
					   </h4>
					   </div>
			   </div>
		   </div>
		   </div>
	   </section> -->
        <!-- Need help finding Products Section end here-->
	
				
				
				
				
				
				
				
				
				
				

                <div class="col-3">

                <div id="home_dropdown" class="drop_down">
                    <p>
                        All Products
                    </p>
                    <ul>
                    <li id="first_product">Ion Exchange Resins <i class="fas fa-angle-right" id="productoneangle"></i></li>
                    <li  id="second_product">Granular Activated Carbon <i class="fas fa-angle-right" id="producttwoangle"></i></li>
                    <li  id="third_product"> Specialty Media <i class="fas fa-angle-right" id="productthirdangle"></i></li>
                    <li  id="sixth_product"> Filter Catridges <i class="fas fa-angle-right" id="productsixthangle"></i></li>
                    <li  id="seven_product">  POU Water Systems <i class="fas fa-angle-right" id="productsevenangle"></i></li>
                    <li  id="eight_product"> Closed Loop Wastewater Systems <i class="fas fa-angle-right" id="producteightangle"></i></li>
                    <li  id="nine_product"> Testing Kits <i class="fas fa-angle-right"></i></li>
                     <li id="ten_product"> Restore Resin Cleaner <i class="fas fa-angle-right"id="producttenangle"></i></li>
						<li id="ele_product"> IX Membranes <i class="fas fa-angle-right"id="producttenangle"></i></li>
						<li id="twv_product"> PEDI Tank Kits <i class="fas fa-angle-right"id="producttenangle"></i></li>
						<li id="thr_product"> Packing Supplies <i class="fas fa-angle-right"id="producttenangle"></i></li>
                   <li id="for_product"> Polymer <i class="fas fa-angle-right"id="producttenangle"></i></li>
					</ul>
         
            </div>
            
            <div id="cta_dropdown" class="mga_down">
                <p>
                                    All Services
                                </p>
                                <ul>
                    <li>Lab Services <i class="fas fa-angle-right"></i></li>
                    <li>Resin Regeneration <i class="fas fa-angle-right"></i></li>
                    <li>RO Membrane Restoration </li>
              <li>Technical Consulting <i class="fas fa-angle-right"></i></li>
                <li>Custom Product Engineering <i class="fas fa-angle-right"></i></li>
                <li>Private Labeling </li>
            </ul>
            </div>
                <div id="ctamenufirst_dropdown" class="application_down">
                    <p>
                                    All Applications
                                </p>
                    <li>Municipal Water <i class="fas fa-angle-right"></i></li>
                    <li>Residential/Commercial Water <i class="fas fa-angle-right"></i></li>
                    <li>Ground Water & Wastewater <i class="fas fa-angle-right"></i></li>
                     <li>Power Generation <i class="fas fa-angle-right"></i></li>             
                    <li> Industrial Water <i class="fas fa-angle-right"></i></li>     
                    <li>Spot-Free Rinse <i class="fas fa-angle-right"></i></li>  
                    <li>Ultrapure Water <i class="fas fa-angle-right"></i></li>
                    <li>Aquarium & Aquaculture <i class="fas fa-angle-right"></i></li>
                    <li>Radwaste Treatment <i class="fas fa-angle-right"></i></li>
                    <li>Mining <i class="fas fa-angle-right"></i></li>
                    <li>Niche Applications <i class="fas fa-angle-right"></i></li>

            </div>
                <div id="ctamenusecond_dropdown" class="resources_down">
                    <p>
                                    All Resources
                                </p>
                    <li>Document Library <i class="fas fa-angle-right"></i></li>
                    <li>Tools & Calculator <i class="fas fa-angle-right"></i></li>
                    <li>Product Finder</li>
                    <li>Product Catalog</li>
              
            </div>
                            <div id="ctamenusupport_dropdown" class="support_down">
                                <p>
                                    Support
                                </p>
                    <li>Ask an Expert <i class="fas fa-angle-right"></i></li>
                    <li>Purchase Product <i class="fas fa-angle-right"></i></li>
                    <li>Check Order Status</li>
              
            </div>
                            <div id="ctamenucompany_dropdown" class="company_down">
                                <p>
                                    Company
                                </p>
                    <li>Our Story </li>
                    <li>Divisions? </li>
					<li>Offices </li>
					<li>Philanthropy </li>	
					<li>Careers </li>
					<li>News & Events <i class="fas fa-angle-right"></i></li>
                    <li>Certifications & licenses</li>
                    <li>Contact</li>
    
              
            </div>

            </div>
            <div class="col-3">

                <div id="product_1" class="product">
                   <p>Ion Exchange Resins
					   
					</p>
                    <ul>
                    <li id="first_product">Strong Acid Cation Resins</li>
                    <li  id="second_product">Weak Acid Cation Resins</li>
                    <li  id="third_product"> Strong Base Anion Resins</li>
                    <li  id="sixth_product"> Weak Base Anion Resins</li>
                    <li  id="seven_product"> Mixed Bed Resins</li>
                    <li  id="eight_product"> Chelation Resins</li>
                    </ul>
        
            </div>
				       
            
            <div id="product_2" class="product">
                
                    <li>Bituminous Coal Carbon </li>
                    <li>Coconut Shell Carbon </li>
                    <li>Catalytic Carbon </li>
              
            </div>
                <div id="product_3" class="product">
                    <p>
                                   Specialty Media
                                </p>
                    <li>Inert / Barrier Media </li>
                    <li>Hybrids, Catalysts & Selective Ion Exchangers </li>
                    <li>Support Bed & FilterMedia</li>
                    
            </div>
                <div id="product_4" class="product">
                   
                    <li>Pro Series</li>
                    <li>Inline Series</li>
                    <li>Carbon Block Series</li>
                    <li>Radial Flow Series</li>
					<li>Lab Series</li>
                    <li>OEM Cartridge Design</li>      
            </div>
                            <div id="product_6" class="product">
                               
                    <li>Drinking Water Systems </li>
                    <li>Commercial Systems </li>
                    <li>Reverse Osmosis Systems</li>
					<li>General Dionization</li>
					<li>Ultrapure Systems</li>
					<li>Parts & Consumables</li>			
              
            </div>
				
				    <div id="product_7" class="product">
                               
                    <li>Water Testing Kits</li>
                    <li>Column Test Kits </li>           
            </div>
				 <div id="product_8" class="product">
                               
                    <li>Fiberglass Tanks</li>
                    <li>Fittings</li>           
            </div>
                          

				
				 <div id="labservice_1" class="product">
                               
                    <li>Water Analysis</li>
                    <li>Resin Health Analysis</li>   
					 <li>Bench Scale Pilot Testing</li>
            </div>
				 <div id="labservice_2" class="product">
                               
                    <li>PEDI/ Service DI</li>
                    <li>Bulk Resin Regeneration</li>  
            </div>
				<div id="labservice_3" class="product">
                               
                    <li>MIST-X Effluent Modeling</li>
                    <li>Process Optimization</li> 
					<li>System Troubeshooting</li>
					<li>On-Site Plant Audit</li>
            </div>
				<div id="labservice_2" class="product">
                               
                    <li>IX Media Formulation</li>
                    <li>OEM Cartridge Design</li>  
            </div>
                    
				
            </div>

                    <!-- <div class="col-3 blue-box">
                        <div class="last-col">
							<p>
								Quick Links
							</p>
                <div class="box">
                    <p>Product Finder</p> <hr>
                    <h4>
						Not sure which product you need 
					</h4>
                </div>
                <div class="box">
                    <p>Product Catalog </p> <hr>
                    <h4>
                     Search our entire inventory of products					</h4>
                </div>
            </div> 

            <div class="last-col">
                <div class="box">
                <li>Link 1</li>
                <li>Link 2</li>
                <li>Link 3</li>
            </div>
            <div class="box">
                <li>Link 1</li>
                <li>Link 2</li>
                <li>Link 3</li>
            </div>
        </div> 
        <div class="last-col">
            <div class="box">
            <li>Link 1</li>
            <li>Link 2</li>
            <li>Link 3</li>
        </div>
        <div class="box">
            <li>Link 1</li>
            <li>Link 2</li>
            <li>Link 3</li>
        </div>
    </div> 

            </div> -->
				</div>
		</div>
		<div class="custom-search">

			<?php 	echo do_shortcode ( ' [ivory-search id="420" title="main"] ' )?>
			
		</div>
		<div class="shop-cart">
			<i class="fa fa-shopping-cart"></i>	 
		</div>
		<div class="lang-cart">
	<?php 	echo do_shortcode( ' [language-switcher] ' ); ?>			
		</div>
					</div><!-- .header-titles -->
		</div> 
        <div class="clear">
            
        </div>
<!-----------------------Mobile Header start here------------->
		<div class="mb-header">
			<div class="custom-header container-fluid">
	<div class="header-titles">
		<div id="custom-menu"> 
          <i class="fa fa-bars open" id="open" aria-hidden="true"></i>
        <i class="fas fa-times" id="close"></i>
        <div class="container-fluid nav-menu show" id="nav">
			
            <div class="col-3 peak">
				<img src="/wp-content/uploads/2020/12/image-26.png">
            <ul id="first">
                <li id="home_drop">
					Products<i class="fas fa-angle-right" id="istangle"></i></li> 
                <li id="second_drop">Services <i class="fas fa-angle-right"></i></li>
                <li id="third_drop">Applications <i class="fas fa-angle-right"></i></li>
                <li id="fourth_drop">Resources <i class="fas fa-angle-right"></i></li>
                <li id="fifth_drop">Support <i class="fas fa-angle-right"></i></li>
				<li id="sixth_drop">Comapany <i class="fas fa-angle-right"></i></li>
				
            </ul>
				
            </div>
            <div id="home_dropdown" class="drop_down">
				<p>
					All Products
				</p>
                <li id="first_product">Ion Exchange Resins <i class="fas fa-angle-right" id="productoneangle"></i></li>
                <li  id="second_product">Granular Activated Carbon <i class="fas fa-angle-right" id="producttwoangle"></i></li>
                <li  id="third_product"> Specialty Media <i class="fas fa-angle-right" id="productthirdangle"></i></li>
          <li  id="fourth_product"> Specialty Media <i class="fas fa-angle-right" id="productfourthangle"></i></li>
				<li  id="fifth_product"> Specialty Media <i class="fas fa-angle-right" id="productfifthangle"></i></li>
				<li  id="sixth_product"> Filter Catridges <i class="fas fa-angle-right" id="productsixthangle"></i></li>
				<li  id="seven_product">  POU Water Systems <i class="fas fa-angle-right" id="productsevenangle"></i></li>
				<li  id="eight_product"> Closed Loop Wastewater Systems <i class="fas fa-angle-right" id="producteightangle"></i></li>
				<li  id="nine_product"> Testing Kits <i class="fas fa-angle-right" id="productnineangle"></i></li>
 				<li id="ten_product"> Restore Resin Cleaner <i class="fas fa-angle-right"id="producttenangle"></i></li>

        </div>
		
		<div id="cta_dropdown" class="mga_down">
			<p>
								All Services
							</p>
                <li>Lab Services <i class="fas fa-angle-right"></i></li>
                <li>Resin Regeneration <i class="fas fa-angle-right"></i></li>
                <li>RO Membrane Restoration <i class="fas fa-angle-right"></i></li>
          <li>Technical Consulting <i class="fas fa-angle-right"></i></li>
			<li>Custom Product Solutions <i class="fas fa-angle-right"></i></li>
			<li>White Labeled Solutions <i class="fas fa-angle-right"></i></li>
			
        </div>
			<div id="ctamenufirst_dropdown" class="application_down">
				<p>
								All Applications
							</p>
                <li>Municipal Water <i class="fas fa-angle-right"></i></li>
                <li>Residential & Commercial Water <i class="fas fa-angle-right"></i></li>
                <li>Groud Water & Waste Water <i class="fas fa-angle-right"></i></li>
                 <li>Power Generation <i class="fas fa-angle-right"></i></li>             
				<li> Industrial Water <i class="fas fa-angle-right"></i></li>     
				<li>Spot-Free Rinse <i class="fas fa-angle-right"></i></li>  
				<li>Ultrapure Water <i class="fas fa-angle-right"></i></li>
				<li>Aquarium & Aquaculture <i class="fas fa-angle-right"></i></li>
        </div>
			<div id="ctamenusecond_dropdown" class="resources_down">
				<p>
								All Resources
							</p>
                <li>Document Library <i class="fas fa-angle-right"></i></li>
                <li>Tools & Calculator <i class="fas fa-angle-right"></i></li>
                <li>Product Finder</li>
				<li>Product Catalog</li>
          
        </div>
						<div id="ctamenusupport_dropdown" class="support_down">
							<p>
								Support
							</p>
                <li>Ask an Expert <i class="fas fa-angle-right"></i></li>
                <li>Purchase Product <i class="fas fa-angle-right"></i></li>
                <li>Check Order Status</li>
          
        </div>
						<div id="ctamenucompany_dropdown" class="company_down">
							<p>
								Company
							</p>
                <li>Company <i class="fas fa-angle-right"></i></li>
                <li>News & 	Events <i class="fas fa-angle-right"></i></li>
                <li>Certifications & licenses</li>
				<li>Contact</li>

          
        </div>
			</div>
    </div>
		</div>
		<?php
							// Site title or logo.
							twentytwenty_site_logo();

							// Site description.
							twentytwenty_site_description();
						?>
		
<!-- 		<div class="custom-search">

			<?php 	echo do_shortcode ( ' [ivory-search id="420" title="main"] ' )?>
			
		</div> -->
		</div>
		</div>
        <section class="crumb">
        <div class="container">
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
<?php
if(function_exists('bcn_display'))
{
bcn_display();
}?>
 </div>
</div>
</section>
		<!-----------------------Mobile Header end here------------->
		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
		

