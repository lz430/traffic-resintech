<?php /*Template Name: Application Overview*/ ?>
<?php get_header(); ?>
<!-- Latest compiled and minified CSS -->
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
	<style>
	
	</style>
	<?php //the_content(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			// Start the loop.
			//while ( have_posts() ) : the_post();
			
			// Include the page content template.
			//get_template_part( 'template-parts/content', 'page' );
			?>
			<!-- Products Section One start here-->
			<!-- 	   <div class="container">
				<p class="bg-app">
						Home / Products
					</p>
			</div> -->
			<section class="application-one" data-aos="fade-up"
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
							Applications
							</h3>
							<p>
								<?php $pid = get_the_ID(); echo get_field( 'short_description', $pid );?>
							</p>
							<div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Products Section One End here---->
			<!-- Products Section Two start here-->
			<section class="application-second">
				<div class="container">
					
					<div class="row">
						<?php
						    $taxonomies = array( 
						        'application_category'
						    );              
						    $args = array(
						        'orderby'    => 'ID', 
						        'order'      => 'DESC',
						        'hide_empty' => false
						    );
						    $terms = get_terms($taxonomies, $args);
						    //print_r($terms);exit;                            
						?>
						<?php foreach ($terms as $key => $term): 
						    $img_id = "application_category_".$term->term_id;
						    $t_id = base64_encode($term->term_id);
						if($term->term_id != '1'){
						    ?>
						    <div class="col-md-4" data-aos="fade-up"
						    	data-aos-offset="100"
						    	data-aos-delay="20"
						    	data-aos-duration="1000"
						    	data-aos-easing="ease-in-out"
						    	data-aos-mirror="true"
						    	data-aos-once="true"
						    	data-aos-anchor-placement="top-center">
						    	<a href="/application-category/?tid=<?php echo $t_id;?>">
							    	<div class="app-img">
							    		<img src="<?php  echo get_field( 'image', $img_id );?>">
							    	</div>						    	
						    		<h4><?php echo $term->name; ?></h4>
						    	</a>
						    	<p>
						    		<?php echo substr($term->description, 0, 200); ?>
						    	</p>
						    </div>						    
						<?php } endforeach ?>

						
						<!-- <div class="col-md-4">
								<img src="/wp-content/uploads/2021/01/Rectangle-99-12.png">
								<h4>
									Residential & Commercial Water
								</h4>
								<p>
										Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
										
								</p>
								
						</div>
						<div class="col-md-4">
								<img src="/wp-content/uploads/2021/01/Rectangle-99-10.png">
								<h4> Ground Water & Wastewater
								</h4>
								<p>
										Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
										
								</p>
								
						</div> -->
						<!-- <div> -->
						
						<!-- </div> -->
					</div>
				</div>
			</section>
			<!-- Products Section Two end here-->
			<!-- Products Section Two start here-->
			<!-- <section class="application-second">
				<div class="container">
						
						<div class="row">
								<div class="col-md-4">
										<img src="/wp-content/uploads/2021/01/Rectangle-99-9.png">
										<h4>
											Fower Generation
										</h4>
										<p>
												Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
												
										</p>
										
								</div>
								<div class="col-md-4">
										<img src="/wp-content/uploads/2021/01/Rectangle-99-8.png">
										<h4>
											Industrial Water
										</h4>
										<p>
												Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
												
										</p>
										
								</div>
								<div class="col-md-4">
										<img src="/wp-content/uploads/2021/01/Rectangle-99-7.png">
										<h4> Spot-Free Rinse
										</h4>
										<p>
												Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
												
										</p>
										
								</div>
								<div>
										
							 </div> -->
						</div>
					</div>
					<!-- </section> -->
					<!-- Products Section Two end here-->
					
					
					<!-- Products Section Third start here-->
					<!-- <section class="application-second">
						<div class="container">
								
								<div class="row">
										<div class="col-md-4">
												<img src="/wp-content/uploads/2021/01/Rectangle-99-6.png">
												<h4>
													Ultrapure Water
												</h4>
												<p>
														Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
														
												</p>
												
										</div>
										<div class="col-md-4">
												<img src="/wp-content/uploads/2021/01/Rectangle-99-5.png">
												<h4>
													Aquarium & Aquaculture
												</h4>
												<p>
														Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
														
												</p>
												
										</div>
										<div class="col-md-4">
												<img src="/wp-content/uploads/2021/01/Rectangle-99-4.png">
												<h4> Badwaste Treatment
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
					<!-- Products Section Third end here
					 Products Section Fourth start here-->
					<!-- <section class="application-second">
						<div class="container">
								
								<div class="row">
										<div class="col-md-4">
												<img src="/wp-content/uploads/2021/01/Rectangle-99-13.png">
												<h4>
													Mining
												</h4>
												<p>
														Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
														
												</p>
												
										</div>
										<div class="col-md-4">
												<img src="/wp-content/uploads/2021/01/Rectangle-99-14.png">
												<h4>
													Niche Applications
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
					<!-- Products Section Fourth end here-->
					
					<!-- Need help finding Products Section start here-->
					<!-- <section class="pro-find" data-aos="fade-up"
						data-aos-offset="100"
						data-aos-delay="20"
						data-aos-duration="1000"
						data-aos-easing="ease-in-out"
						data-aos-mirror="true"
						data-aos-once="false"
						data-aos-anchor-placement="top-center">
						<h3>
						Are you trying to remove <br> a specific contaminent?
						</h3>
						<p>
							<a href="#"> Search Contaminents</a>
						</p>
						
					</section>-->
					<!-- Need help finding Products Section end here-->
					<section class="service-ad-section" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1500"
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

                <div class="service-servicetxt-div-ad">

                    <h1 class="mb-3">Are you trying to remove a<br> specific contaminent</h1>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

                    <a class="ask-pdp-btn-ad" href="#">Search Contaminents</a>

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
					
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					//  if ( comments_open() || get_comments_number() ) {
					
					//                 comments_template();
					
					//  }
					
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