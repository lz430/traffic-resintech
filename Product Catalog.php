<?php /*Template Name: Product Catalog*/ ?>
<?php get_header(); ?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <!-- jQuery library
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 -->
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
<style type="text/css">
  /**
 * Required CSS 
 */
.accordion__title {
  cursor: pointer;
  margin: 0;
  position: relative;
}

.accordion__icon {
  position: absolute;
  top: 50%;
  right: 24px;
  transform: translateY(-50%);
}

.accordion__icon .line-01,
.accordion__icon .line-02 {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 16px;
  height: 2px;
  background-color: #272343;
  transition: 0.3s;
}

.accordion__icon .line-02 {
  transform: rotate(90deg);
}

.accordion__content {
  display: none;
}

.accordion--open > .accordion__title .line-02 {
  transform: rotate(0deg);
}
/* end Required CSS */

/**
 * Now let's make it look pretty! 
 */


h1 {
  text-align: center;
  margin: 0 0 40px;
}

.accordion {
  margin-top: -1px;
  border-top: 1px solid #272343;
  border-bottom: 1px solid #272343;
  width: 74%;
  margin-left: 12%;
}

.accordion__title {
  padding: 20px 16px;
  font-size: 16px;
  transition: 0.2s;
}

.accordion__content {
  padding: 24px 16px;
}

.accordion__content p {
  margin: 0 0 16px;
  color: #111315;
}

.accordion__title:hover {
  background-color: #433d6f;
  color: #fff;
}

.accordion__title:hover .line-01,
.accordion__title:hover .line-02 {
  background-color: #fff;
}

.accordion--open > .accordion__title {
  background-color: #272343;
  color: #fff;
}

.accordion--open > .accordion__title .line-01,
.accordion--open > .accordion__title .line-02 {
  background-color: #fff;
}

.accordion--nested .accordion__title {
  padding: 16px;
  font-size: 14px;
}

.accordion--nested .accordion__content {
  padding: 24px 16px 16px;
}

</style>
 
<?php the_content(); ?>
<div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">
   
      <!-- Products catalog section One start here-->
<!-- 	   <div class="container">
	   <p class="bg-pro">
		   Home / Resources / Product Catalog	   </p>
	   </div> -->
	   <section class="product-catalog">
	   <div class="container">
		   
		   <div class="row">
			   <div class="col-md-12">
				  <h3>Product Catalog</h3>
				  <p> A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</p>
		   </div>
		   </div>
	   </section>
          <?php $taxonomy = 'product_cat';

            // Get parent product categories
            $parent_cats = get_terms( $taxonomy, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) ); 
            // echo '<pre>';
            // print_r($parent_cats);
            $i = 0;
          ?>
      <!-- Products catalog Section One End here---->
      <!----================---Accordion start  here--=================----->
         <?php foreach ($parent_cats as $c) { 

            $terms = get_terms($taxonomy, array('parent' => $c->term_id, 'orderby' => 'slug', 'hide_empty' => false));
            
            
        ?>
        <div class="accordion">
            <h4 class="accordion__title"><?php echo $c->name; ?><i class="accordion__icon"><div class="line-01"></div><div class="line-02"></div></i>
            </h4><!-- end .accordion__title -->
            <div class="accordion__content">
               <?php foreach ($terms as  $t) { ?>
                  <?php 
                    $subcategory_products = new WP_Query( array( 'post_type' => 'product', 'product_cat' => $t->slug ) );
                    // echo '<pre>'; 
                    // print_r($subcategory_products);
                  ?>
              <div class="accordion accordion--nested">
               
                <h4 class="accordion__title">
                  <?php echo $t->name ?>
                  <i class="accordion__icon">
                    <div class="line-01"></div>
                    <div class="line-02"></div>
                  </i>
                </h4><!-- end .accordion__title -->
             
                <div class="accordion__content">
                  <div class="col-md-4">
                    <?php foreach ($subcategory_products as $key => $sub) { ?>
                        <?php //echo '<pre>';print_r($sub); ?>
                      <p><a href="#"><?php echo $sub->post_title; ?></a></p>    
                     <!--  <p><a href="#">ASM-10-HP</a></p>    
                      <p><a href="#">ASM-10-HP</a></p>    
                      <p><a href="#">ASM-10-HP</a></p>     -->
                    <?php } ?>

                  </div>
                </div><!-- end .accordion__content -->
                
              </div><!-- end .accordion nested 01 -->
              <?php } ?>
              <!-- <div class="accordion accordion--nested">
                <h4 class="accordion__title">
                  Accordion Nested Title 02
                  <i class="accordion__icon">
                    <div class="line-01"></div>
                    <div class="line-02"></div>
                  </i>
                </h4> --><!-- end .accordion__title -->
                <!-- <div class="accordion__content">
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio.</p>
                  <p>Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper
                    suscipit, posuere a, pede.</p>
                </div> --><!-- end .accordion__content -->
              <!-- </div> --><!-- end .accordion nested 02 -->
            </div><!-- end .accordion__content -->
        </div>
        <?php } ?>
	   <!--=====================--Accordion end here----==============--->
	   
     
         
   </main>
   <!-- .site-main -->                    
   <?php get_sidebar( 'content-bottom' ); ?>
</div>
<script type="text/javascript">
  // When any accordion title is clicked...
$(".accordion__title").click(function() {
  const $accordion_wrapper = $(this).parent();
  const $accordion_content = $(this).parent().find(".accordion__content").first();
  const $accordion_open = "accordion--open";

  // If this accordion is already open
  if ($accordion_wrapper.hasClass($accordion_open)) {
    $accordion_content.slideUp();                     // Close the content.
    $accordion_wrapper.removeClass($accordion_open);  // Remove the accordionm--open class.
  }
  // If this accordion is not already open
  else {
    $accordion_content.slideDown();                 // Show this accordion's content.
    $accordion_wrapper.addClass($accordion_open);   // Add the accordion--open class.
  }
});

</script>
<!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>