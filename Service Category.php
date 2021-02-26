<?php /*Template Name: Services Category*/ ?>
<?php get_header(); ?>
<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 --><!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 --><!-- Popper JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 --><!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 --> 
<!--  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 -->
<style>
  

</style>
<?php the_content(); ?>
<div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">
     
      <!-- Services Section One start here-->
      <section class="svc-category">
         <div class="container" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center">
		   <?php 
		   $tid = base64_decode($_GET['tid']);
		   $term = get_term( $tid );
		   $img_id = "services_category_".$tid;
		   ?>
	   <p class="bg-app">
		   Home / Services / <?php echo $term->name;?>
		   </p>
	   </div>
   </section>
	   <section class="category-one">
	  
		   
		   <div class="row">
			   <div class="col-md-6 lib">
				   <h3>
					    <?php echo $term->name;?>
				   </h3>
				   <p>
					 <?php echo $term->description;?>
				   </p>
				  
			   </div>
			   <div class="col-md-6">
				    <img src="<?php  echo get_field( 'image', $img_id );?>">
				  
			   </div>
		   </div>
		 
	   </section>
      <!-- Services  Section One End here---->

<!-- Services Section start here-->
      <section class="cat-section" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center">
         <div class="container">
            <div class="row">
            	<?php
            	$args = array(
            	    'post_type' => 'services',
            	    'post_status' => 'publish',
            	    'posts_per_page' => -1,
            	    'order' => 'DESC',
            	    'tax_query' => [
        	            [
        	                'taxonomy' => 'services_category',
        	                'terms' => $tid,
        	                'include_children' => false // Remove if you need posts from term 7 child terms
        	            ],
        	        ],
            	);
            	$posts = new WP_Query( $args );
            	while ( $posts->have_posts() ) : $posts->the_post();
            	    ?>
            	    <div class="col-md-4 pia">
            	        <a href="<?php the_permalink() ?>">
            	        	<div class="label-img"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID() );?>"></div>
            	            <h5><?php the_title(); ?></h5>
            	        </a>
            	        <P><?php the_content(); ?></P>
            	    </div>
            	    <?php
            	endwhile; wp_reset_postdata();
            	?>
               <!-- <div class="col-md-4">
                  <img src="/wp-content/uploads/2021/01/Rectangle-99-19.png">
                  <h5>Water Analysis</h5>
                  <P>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</P>
               </div>
               <div class="col-md-4">
                  <img src="/wp-content/uploads/2021/01/shadow.png">
                  <h5>Resin Health Analysis</h5>
                  <P>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</P>
               </div>
               <div class="col-md-4">
                  <img src="/wp-content/uploads/2021/01/Rectangle-99-18.png">
                  <h5>Bensh Scale Pilot Testing</h5>
                  <P>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</P>
               </div> -->
            </div>
         </div>
      </section>
      <!-- Services Section end here-->
	   
	 <!-- EXPERT Section start here-->
<!-- 	<section class="category-img">
		<div class="container">
			<div class="row">
<div class="col-md-12 category">
<h4>
	Get Expert Advise
	</h4>	
	<p>
		Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.

	</p>
	<p class="ex-text"> Ask an expert</p>

	<img src="/wp-content/uploads/2020/12/Rectangle-124.png">
				</div>				
			</div>
			
		</div>
	
	</section> -->
	<!-- EXPERT Section end here-->
    <section class="service-ad-sec" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">

    <div class="container m-auto">

        <div class="row">
<div class="col-md-3">
    <div id="bottom-circle" data-aos="slide-right"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="2000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
        
    </div>
</div>
            <div class="col-md-6">

                <div class="service-txt-div-ad">

                    <h1 class="mb-3">Get expert advise</h1>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

                    <a class="ask-pdp-btn-ad" href="#">Ask an expert</a>

                </div>
<div id="center-circle" data-aos="fade-up"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="2000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="center">
    
</div>
            </div>
            <div class="col-md-3">
                <div id="left-circle" data-aos="slide-left"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="2000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
        
    </div>
</div>

        </div>

    </div>

</section>
	   
	   
     
	   
   </main>
   <!-- .site-main -->                    
   <?php get_sidebar( 'content-bottom' ); ?>
</div>
<!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>