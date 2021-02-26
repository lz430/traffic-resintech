<?php /*Template Name: Product Overview*/ ?>
<?php get_header(); ?>
<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 --><!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- Popper JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
 --><!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 --><!-- <script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=dp46ucdledpfc9xxfkqnqq" async="true"></script> -->
<!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 -->
<style>
   
</style>
<?php the_content(); ?>
<div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">
      <?php
         // Start the loop.
         //while ( have_posts() ) : the_post();
         
                         // Include the page content template.
                         //get_template_part( 'template-parts/content', 'page' );
                         ?>
      <!-- Products Section One start here-->
	   <!-- <div class="container">
	   <p class="bg-pro">
		   Home / Products
		   </p>
	   </div> -->
	   <section class="pro-one" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12">
            <h3>
              Products
            </h3>
            <p>
              Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
              
            </p>
            <div>
              
            </div>
          </div>
        </div>
        </div>
	   </section>


          <!-- Products Section One End here---->
      <?php
          $args = array(
            'post_type' => 'product',
            'posts_per_page' => 9
            );
          $loop = new WP_Query( $args );
         
              
            
    ?>


      <!-- Products Section Two start here--> 
      
	   <section class="pro-two">
    
	   <div class="container">
         
		   <div class="row"> 
       <?php  if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
			   <div class="col-md-4" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
			       <div class="img-rta"> 
				   <img src="<?php echo get_the_post_thumbnail_url(get_the_ID() ); ?>">
				   </div>
				   <h4>
					   <a href="#"><?php the_title(); ?></a>
				   </h4>
				   <p>
					   <?php the_content(); ?>
					  
				   </p>
				   
			   </div>
         <?php endwhile;
          } else {
            echo __( 'No products found' );
          }
          wp_reset_postdata(); ?>
			   <!-- <div class="col-md-4">
				   <img src="/wp-content/uploads/2021/01/rrtyrt.png">
				   <h4>
					   Granular Activated Carbons
				   </h4>
				   <p>
					   Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
					  
				   </p>
				   
			   </div> -->
			   <!-- <div class="col-md-4">
				   <img src="/wp-content/uploads/2021/01/rthr.png">
				   <h4> Specialty Media

				   </h4>
				   <p>
					   Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
					  
				   </p>
				   
			   </div> -->
			   <div>
				   
			   </div>
         
		   </div>
      
		   </div>
       
	   </section>
     
      <!-- Products Section Two end here-->
      <!-- Products Section Two start here--> 
	   <!-- <section class="pro-two">
	   <div class="container">
		   
		   <div class="row"> 
			   <div class="col-md-4">
				   <img src="/wp-content/uploads/2021/01/asasd.png">
				   <h4>
					  Filter Cartridges

				   </h4>
				   <p>
					   Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
					  
				   </p>
				   
			   </div>
			   <div class="col-md-4">
				   <img src="/wp-content/uploads/2021/01/csdfsd.png">
				   <h4>
					   POU Water Systems
				   </h4>
				   <p>
					   Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
					  
				   </p>
				   
			   </div>
			   <div class="col-md-4">
				   <img src="/wp-content/uploads/2021/01/csdfsd.png">
				   <h4> Closed Loop Wastewater Systems

				   </h4>
				   <p>
					   Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
					  
				   </p>
				   
			   </div>
			   <div>
				   
			   </div>
		   </div>
		   </div>
	   </section> -->
      <!-- Products Section Two end here-->
	   
	          <!-- Products Section One End here---->
     
			   <!-- <div class="col-md-4">
				   <img src="/wp-content/uploads/2021/01/rrtyrt.png">
				   <h4>
					   Granular Activated Carbons
				   </h4>
				   <p>
					   Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
					  
				   </p>
				   
			   </div> -->
			   <!-- <div class="col-md-4">
				   <img src="/wp-content/uploads/2021/01/rthr.png">
				   <h4> Specialty Media

				   </h4>
				   <p>
					   Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
					  
				   </p>
				   
			   </div> -->
			   <div>
				   
			   </div>
         
		   </div>
      
		   </div>
       
	   </section>
	   <!-- Products Section Two start here--> 
	   <!-- <section class="pro-two">
	   <div class="container">
		   
		   <div class="row"> 
			   <div class="col-md-4">
				   <img src="/wp-content/uploads/2021/01/we.png">
				   <h4>
					   ReStore Resin Cleaner
				   </h4>
				   <p>
					   Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
					  
				   </p>
				   
			   </div>
			   <div class="col-md-4">
				   <img src="/wp-content/uploads/2021/01/Rectangle-99v.png">
				   <h4>
					   Testing Kits
				   </h4>
				   <p>
					   Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
					  
				   </p>
				   
			   </div>
			   <div class="col-md-4">
				   <img src="/wp-content/uploads/2021/01/Rectangle-99.png">
				   <h4> IX Membranes

				   </h4>
				   <p>
					   Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
					  
				   </p>
				   
			   </div>
			   <div>
				   
			   </div>
		   </div>
		   </div>
	   </section> -->
      <!-- Products Section Two end here-->
	    <!-- Need help finding Products Section start here-->
	   <section class="pro-finder-cga" data-aos="fade-up"
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
	   </section>
        <!-- Need help finding Products Section end here-->
	
	   
      <?php
         // If comments are open or we have at least one comment, load up the comment template.
         if ( comments_open() || get_comments_number() ) {
         
                        comments_template();
         
         }
         
         // End of the loop.
       //endwhile;
         
         ?>
   </main>
   <!-- .site-main -->                    
   <?php get_sidebar( 'content-bottom' ); ?>
</div>
<!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>