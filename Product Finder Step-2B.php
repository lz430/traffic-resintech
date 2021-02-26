<?php /*Template Name: Product Finder Step-2B*/ ?>

<?php get_header(); ?>

<!-- Latest compiled and minified CSS --> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library --> 

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

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=dp46ucdledpfc9xxfkqnqq" async="true"></script> 

<?php the_content(); ?>

<div id="primary" class="content-area">

<main id="main" class="site-main" role="main">

   <?php // Start the loop. while ( have_posts() ) : the_post(); // Include the page content template. get_template_part( 'template-parts/content', 'page' ); ?>

   <!-- Products catalog section One start here-->

<!--    <div class="container">

      <p class="bg-pro"> Home / Resources / Product Finder	   </p>

   </div> -->

   <!-----======== Product Finder start here-----=======-------> 

   <section class="pro-find-set">

      <div class="container">

         <div class="row">

            <div class="col-md-12">

               <h5>Product Finder</h5>

               <h6><a href="#">1</a> <a href="#">- 2</a> <a href="#"> - 3</a> </h6>

               <h3>What contaminent are you <br>trying to remove?</h3>

               <p> Commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

               <p class="set-text">Not sure what the product number or name is? Contact tech support and they’ll be happy to help.</p>
               <form class="subscribe_form">
            <div class="input-group-form">
               <input type="text" class="form-control" name="email" placeholder="Search here">
               <span class="input-group-btn">
                    <button class="btn btn-form" type="button">Search</button>
               </span>
            </div>
          </form>

            </div>

         </div>

   </section>

   <!-----======== Product Finder start here-----=======-------> <?php // If comments are open or we have at least one comment, load up the comment template. if ( comments_open() || get_comments_number() ) { comments_template(); } // End of the loop. endwhile; ?> 

</main>

<!-- .site-main --> 

<?php get_sidebar( 'content-bottom' ); ?> 

</div> <!-- .content-area --> 

<?php get_sidebar(); ?>

<?php get_footer(); ?>