<?php 
/* Template Name: resources-overview-page-template */ ?>
 
<?php get_header(); ?>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href='https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css'>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=dp46ucdledpfc9xxfkqnqq" async="true"></script> -->

<style>
    .p-find-div-2-ro {
        background: #0D2C6C;
        color: white;
        padding: 60px 50px;
    }
    .p-find-div-1-ro {
        background: #004A80;
        color: white;
        padding: 60px 50px;
    }
    .p-find-div-1-ro p, .p-find-div-2-ro p{
        font-family: 'NeueHaasGroteskText-Regular';
        font-style: normal;
        font-weight: bold;
        font-size: 15px;
        line-height: 21px;
        letter-spacing: 0.02em;
        color: #FFFFFF;
        margin-bottom: 20px;
    }
    .p-find-div-1-ro p:after , .p-find-div-2-ro p:after{
        content: '';
        width: 300px;
        height: 1px;
        background: white;
        position: absolute;
        right: 50px;
        margin: auto;
        display: block;
        top: 71px;
    }
    .p-find-div-1-ro h3, .p-find-div-2-ro h3 {
        font-family: 'Lora';
        font-style: normal;
        font-weight: normal;
        font-size: 43px;
        line-height: 65px;
        letter-spacing: -0.02em;
        color: #FFFFFF;
    }
    .product-finding-ro h2 {
        font-family: 'Lora';
        font-style: normal;
        font-weight: normal;
        font-size: 60px;
        line-height: 72px;
        letter-spacing: -0.02em;
        color: #111315;
        text-align: center;
        margin-bottom: 40px;
    }
    h1.resources-heading-ro {
        font-family: 'Lora';
        font-weight: normal;
        font-size: 60px;
        line-height: 72px;
        letter-spacing: -0.02em;
        color: #111315;
        text-align: center;
        margin: 60px 0px;
    }
    h3.resources-doc-heading {
        font-family: 'Lora';
        font-style: normal;
        font-weight: normal;
        font-size: 41px;
        line-height: 57px;
        letter-spacing: -0.02em;
        color: #111315;
        border-bottom: 2px solid #0F75BB;
        padding-bottom: 12px
        /* max-width: 600px; */
    }
    .resources-o-a-div a {
        font-family: 'NeueHaasGroteskDisp-Bold';
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 32px;
        color: #111315;
        display: block;
        margin-bottom:15px;
    }
    .resources-o-a-div {
        margin-top: 40px;
    }
    section.resources-doc-sect {
        margin-bottom: 50px;
    }
    @media only screen and (min-width:320px) and (max-width:767px){
        .p-find-div-2-ro {
            margin-top:30px;
        }
        .product-name-sect-one h1 {
            font-size: 44px;
            line-height: 53px;
        }
        p.reoduct-srch-result-ro span {
            color: #0F75BB;
            display: block;
        }
        p.reoduct-srch-result-ro {
            font-size: 15px;
            line-height: 24px;
            display: block;
            text-align: center;
        }
        .product-finding-ro h2 {
            font-size: 36px;
            line-height: 43px;
        }
        .p-find-div-1-ro, .p-find-div-2-ro {
            padding: 40px 25px;
            position: relative;
        }
        .p-find-div-1-ro p, .p-find-div-2-ro p {
            font-family: 'NeueHaasGroteskText-Regular';
            font-style: normal;
            font-weight: bold;
            font-size: 13px;
            line-height: 18px;
            letter-spacing: 0.02em;
            color: #FFFFFF;
            margin-bottom: 20px;
        }
        .p-find-div-1-ro p:after, .p-find-div-2-ro p:after {
            content: '';
            width: 140px;
            right: 15px;
            top: 50px;
        }
        h1.resources-heading-ro {
            font-size: 44px;
            line-height: 53px;
            margin: 60px 0px;
        }
        h3.resources-doc-heading {
            font-size: 29px;
            line-height: 41px;
        }
        .resources-o-a-div a {
            font-size: 17px;
            line-height: 27px;
        }
        .resources-o-a-div {
            margin-bottom: 40px;
        }
        .p-find-div-1-ro h3, .p-find-div-2-ro h3 {
            font-size: 36px;
            line-height: 43px;
        }
    }
</style>


<section class="resources-doc-sect">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-aos="fade-up"
    data-aos-offset="90"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
                <h1 class="resources-heading-ro">
                    Resources
                </h1>
            </div>
        </div>
        <div class="row">
        	<?php 
	        	$taxonomies = array( 
        		    'resource_category'
        		);              
        		$args = array(
        		    'orderby'    => 'ID', 
        		    'order'      => 'ASC',
        		    'hide_empty' => false
        		);
	        	$terms = get_terms($taxonomies, $args);
	        	//print_r($terms);exit;
        	?>
        	<?php foreach ($terms as $key => $term): 
        		$args = array(
        		'post_type' => 'resource',
        		'tax_query' => array(
        		    array(
	        		    'taxonomy' => 'resource_category',
	        		    'field' => 'term_id',
	        		    'terms' => $term->term_id
        		    )
        		  )
        		);
        		$query = new WP_Query( $args );
        		?>
        		<div class="col-md-6 resource" data-aos="fade-up"
    data-aos-offset="90"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
        		    <h3 class="resources-doc-heading">
        		        <?php echo $term->name; ?>
        		    </h3>
        		    <div class="resources-o-a-div">
        		    	<?php
        		    		if ( $query->have_posts() ):
        		    		    while ( $query->have_posts() ): $query->the_post();
        		    		    	?>
        		    		    	<a target="_blank" href="<?php echo get_field( "file", get_the_ID() );?>"><?php the_title();?></a>
        		    		    	<?php
        		    		    endwhile; wp_reset_postdata(); 
        		    		endif; 
        		    	?>
        		    </div>
        		</div>
        	<?php endforeach ?>            
            <!-- <div class="col-md-6">
                <h3 class="resources-doc-heading">
                    Document Library
                </h3>
                <div class="resources-o-a-div">
                    <a href="#">Application Bulletins</a>
                    <a href="#">Case Studies</a>
                    <a href="#">Presentations</a>
                    <a href="#">White Papers</a>
                    <a href="#">Brochures</a>
                </div>
            </div> -->
        </div>
        <!-- <div class="row mt-5">
            <div class="col-md-6">
                <h3 class="resources-doc-heading">
                    Tools & Calculators
                </h3>
                <div class="resources-o-a-div">
                    <a href="#">Periodic Table</a>
                    <a href="#">Unit Conversion</a>
                    <a href="#">Throughput Calculator</a>
                </div>
            </div>
        </div> -->
    </div>
</section>


<section class="product-finding-ro" data-aos="fade-up"
    data-aos-offset="90"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
    <div class="container">
        <h2>Need help finding a product?</h2>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
				<a href="/product-finder/">
					<div class="p-find-div-1-ro">
						<p>Product Finder</p>
						<h3>Not sure which product you need?</h3>
					</div>
				</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="p-find-div-2-ro">
                    <p>Product Catalog</p>
                    <h3>Search our entire inventory of products.</h3>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script> -->

<?php get_footer(); ?>