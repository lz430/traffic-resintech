<?php /*Template Name: Services Overview*/ ?>
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
<link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=dp46ucdledpfc9xxfkqnqq" async="true">
    </script>
    <style>
    </style>
    <?php the_content(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <!-- Services Section One start here-->
            <!-- <div class="container">
                <p class="bg-app">
                    Home / Services
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
                            Services
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
            <!-- Services  Section One End here---->
            <!-- Services Section start here-->
            <section class="services-section" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
                <div class="container">
                    <div class="row">
                        <?php
                            $taxonomies = array( 
                                'services_category'
                            );              
                            $args = array(
                            	'post_type' => 'services',
                            	'post_per_page' => -1,
                                'orderby'    => 'ID', 
                                'order'      => 'DESC',
                                'hide_empty' => false
                            );
                            $terms = get_terms($taxonomies, $args);
                            //print_r($terms);exit;                            
                        ?>
                        <?php foreach ($terms as $key => $term): 
                            $img_id = "services_category_".$term->term_id;
                            $t_id = base64_encode($term->term_id);
						if($term->term_id != '1'){
                            ?>
                            <div class="col-md-4 resin">                                
                                <a href="/service-category/?tid=<?php echo $t_id;?>">
									<div class="resin"></del><img src="<?php  echo get_field( 'image', $img_id );?>"></div>
                                    <h5><?php echo $term->name; ?></h5>
                                </a>
                                <P><?php echo substr($term->description, 0, 200); ?></P>
                            </div>
                        <?php } endforeach ?>
                        <!-- <div class="col-md-4">
                            <img src="/wp-content/uploads/2020/12/Rectangle-99-1.png">
                            <h5>Resin Regeneration</h5>
                            <P>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</P>
                        </div>
                        <div class="col-md-4">
                            <img src="/wp-content/uploads/2020/12/Rectangle-99-2.png">
                            <h5>RO Membrane Restoration</h5>
                            <P>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</P>
                        </div> -->
                    </div>
                </div>
            </section>
            <!-- Services Section end here-->
            <!-- Services Duplicate Section start here-->
            <!-- <section class="services-section">
                <div class="container">
                            <div class="row">
                                        
                        <div class="col-md-4">
                            <img src="/wp-content/uploads/2020/12/Rectangle-99.png">
                            <h5>Technical Consulting</h5>
                            <P>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</P>
                        </div>
                        <div class="col-md-4">
                            <img src="/wp-content/uploads/2020/12/Rectangle-99-3.png">
                            <h5>Custom Product Engineering</h5>
                            <P>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</P>
                        </div>
                        <div class="col-md-4">
                            <img src="/wp-content/uploads/2020/12/Rectangle-99-4.png">
                            <h5>Private Labeling</h5>
                            <P>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</P>
                        </div>
                    </div>
                </div>
                    </div>
        </section> -->
        <!-- Services Duplicate Section end here-->
        <!-- EXPERT Section start here-->
       <!--  <section class="svc-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 svc">
                        <h4>
                        Get Expert Advise
                        </h4>
                        <p>
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        </p>
                        <p class="ex-text"> Ask an expert</p>
                    <img src="/wp-content/uploads/2020/12/Rectangle-124.png"> </div>
                </div>
            </div>
        </section>-->
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