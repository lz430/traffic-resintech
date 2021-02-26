<?php /*Template Name: Product Finder Step-1*/ ?>
<?php get_header(); ?>
<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 --><!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 --><!-- Popper JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=dp46ucdledpfc9xxfkqnqq" async="true"></script>
 -->
 
<?php the_content(); ?>
<div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">
      
      <!-- Products catalog section One start here-->
<!-- 	   <div class="container">
	   <p class="bg-pro">
		   Home / Resources / Product Finder	   </p>
	   </div> -->
	   <!-----======== Product Finder start here-----=======------->
	   <section class="pro-find-vmc">
	   <div class="container">
		   
		   <div class="row">
			   <div class="col-md-12" data-aos="fade-up"
    data-aos-offset="50"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top">
			       <h5>Product Finder</h5>
			       <h6><a href="#">1</a> <a href="#">- 2</a> <a href="#"> - 3</a> </h6>
				  <h3>What you are trying to do?</h3>
				  <p> Commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		   </div>
		   </div>
	   </section>
      <!-----======== Product Finder start here-----=======------->
      <!-----======== Replace Product start here-----=======------->
      <section class="emer" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
          <div class="container">			 
				  <div class="row">
					  <div class="col-md-6"> 
						  <a href="/product-finder-step-2/?type=a">
							  <div class="replica">
								  <h3>Replace a product</h3>
								  <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nulla vitae elit libero, a pharetra augue.</p>
							  </div>
						  </a>
					  </div>
					  <div class="col-md-6">
						  <a href="/product-finder-step-2/?type=b">
							  <div class="replica-pro">
								  <h3>Remove a contaminent</h3>
								  <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nulla vitae elit libero, a pharetra augue.</p>
							  </div>
						  </a>
					  </div>
				  </div>
          </div>
      </section>
	   <!-----======== Replace Product end here-----=======------->
     
   </main>
   <!-- .site-main -->                    
   <?php get_sidebar( 'content-bottom' ); ?>
</div>
<!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>