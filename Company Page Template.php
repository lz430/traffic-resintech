<?php /*Template Name: Company*/ ?>
<?php get_header(); 
$page_heading           = get_field('page_heading', get_the_ID());
$company_section        = get_field('company_section', get_the_ID());
$mission_statement      = get_field('mission_statement', get_the_ID());
$philantrophy           = get_field('philantrophy', get_the_ID());
$careers_section        = get_field('careers_section', get_the_ID());
$careers_section_2nd    = get_field('careers_section_2nd', get_the_ID());
$news_section           = get_field('news_section', get_the_ID());
$certifications         = get_field('certifications_&_licenses', get_the_ID());
//echo "<pre>";print_r($certifications);exit;
?>
<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
--><!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
--><!-- Popper JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
--><!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
--><!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=dp46ucdledpfc9xxfkqnqq" async="true"></script> -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        // Start the loop.
        // while ( have_posts() ) : the_post();
        
        // Include the page content template.
        //get_template_part( 'template-parts/content', 'page' );
        ?>
        <!-- Company Banner Section start here-->
        <section class="banner-section">
            <div class="container">
                <!--               <p>
                        Home / Company
                </p> -->
                <h3 data-aos="fade-up" data-aos-offset="105" data-aos-delay="29" data-aos-duration="2000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
                <?php echo $page_heading;?>
                </h3>
            </div>
        </section>
        <!-- Company Banner Section end here---->
        <!-- Company business Section start here-->
        <section class="mp">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo $company_section['image'];?>">
                    </div>
                    <div class="col-md-6 company" data-aos="fade-up"
                        data-aos-offset="150"
                        data-aos-delay="20"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="true"
                        data-aos-anchor-placement="top-center">
                        <span>
                            <?php echo $company_section['caption'];?>
                        </span>
                        <h5>
                            <?php echo $company_section['heading'];?>
                        </h5>
                        <?php echo $company_section['details'];?>
                        <!-- <p>
                            Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                        </p> -->
                        <div class="line-company">
                            <h6>
                            <a href="<?php echo $company_section['link']['url'];?>"><?php echo $company_section['link']['title'];?></a>
                            </h6>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </section>
        <!-- Company business end here-->
        <!-- Mission Section start here-->
        <section class="mission" data-aos="fade-up" data-aos-offset="105" data-aos-delay="19" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="true" data-aos-anchor-placement="top-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"><p>
                        
                        
                    </p>
                </div>
                <div class="col-md-8">
                    <?php echo $mission_statement;?>
                    <!-- <p>
                        Mission Statement
                    </p>
                    <h3>
                    Provide industry-leading products and solutions, along with world-class technical support, to enusre people and businesses get the greatest benefit from the water they rely on every day.
                    </h3> -->
                </div>
                <div class="col-md-2"><p>
                    
                </p>
            </div>
        </div>
    </div>
</section>
<!--- Mission Section end here---->
<!-- Community Section start here-->
<section class="cty">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $philantrophy['image'];?>">
            </div>
            <div class="col-md-6 company" id="mik" data-aos="fade-up"
                data-aos-offset="156"
                data-aos-delay="20"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="true"
                data-aos-anchor-placement="top-center">
                <span>
                    <?php echo $philantrophy['caption'];?>
                </span>
                <h5>
                    <?php echo $philantrophy['heading'];?>
                </h5>
                <?php echo $philantrophy['details'];?>
                <!-- <p>
                    Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                </p> -->
                <div class="line-cga">
                    <h6>
                    <a href="<?php echo $philantrophy['link']['url'];?>"><?php echo $philantrophy['link']['title'];?></a>
                    </h6>
                </div>
            </div>
        </div>
        
        
    </div>
</section>
<!-- Community Section end here--->
<!-- Gallery Mobile Section start here-->
<section class="mb-sec-gallery" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 gal">
                <span>
                    <?php echo $careers_section['caption'];?>
                </span>
                <h5>
                    <?php echo $careers_section['heading'];?>
                </h5>
                <?php echo $careers_section['details'];?>
                <!-- <p>
                    Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                </p> -->
                <div class="line-open">
                    <h6>
                        <a href="<?php echo $careers_section['link']['url'];?>"><?php echo $careers_section['link']['title'];?></a>
                    </h6>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo $careers_section['image'];?>" class="mb-gal-imgone">
                
            </div>
            
            
        </div>
        
    </div>
</section>
<!-- Gallery mobile Section end here-->
<!-- Gallery Section start here-->
<section class="sec-gallery">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 gal"  data-aos="fade-up"
                data-aos-offset="200"
                data-aos-delay="20"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="true"
                data-aos-anchor-placement="top-center">
                <span>
                    <?php echo $careers_section['caption'];?>
                </span>
                <h5>
                    <?php echo $careers_section['heading'];?>
                </h5>
                    <?php echo $careers_section['details'];?>
                <!-- <p>
                    Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                </p> -->
                <div class="line-open">
                    <h6><a href="<?php echo $careers_section['link']['url'];?>"> <?php echo $careers_section['link']['title'];?></a>
                    </h6>
                </div>
            </div>
            <div class="col-md-3">
                <img src="<?php echo $careers_section['image'];?>" class="gal-imgone">
                <img src="<?php echo $careers_section['image_02'];?>" class="gal-imgtwo">
            </div>
            <div class="col-md-3 mda">
                <img src="<?php echo $careers_section['image_03'];?>" class="gal-imgthird">
            </div>
            
        </div>
        
    </div>
</section>
<!-- Gallery Mobile Section end here-->
<!------------ RVM Section start here- --->
<section class="vector" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
                
                <?php   echo do_shortcode ( ' [rvm_map mapid="536"] ' )?>
                
            </div>
            <div class="col-md-6 rvm">
                <span>
                    <?php echo $careers_section_2nd['caption'];?>
                </span>
                <h5>
                    <?php echo $careers_section_2nd['heading'];?>
                </h5>
                <?php echo $careers_section_2nd['details'];?>
                <!-- <p>
                    Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                </p> -->
                <div class="locate">
                    <div class="fromLeft">
                        
                    </div>
                    <h6>
                    <a href="<?php echo $careers_section_2nd['link']['url'];?>"><?php echo $careers_section_2nd['link']['title'];?></a>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!----------- RVM Section end here------>

<!-- Blog Section start here-->
<section class="blog" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
    <div class="container-fluid">
        <div class="row kth">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <div class="site-bg">
                    <h6>
                        News
                    </h6>
                    <h4 id="happ">
                    <?php echo $news_section['heading'];?>
                    </h4>
                    <div class="newsall">
                        <div class="fromNews"></div>
                        <a href="<?php echo $news_section['link']['url'];?>">
                            <p><?php echo $news_section['link']['title'];?>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row kite">
            <div class="col-md-6 meta">
                <div id="animate" data-aos="slide-right"
                    data-aos-offset="70"
                    data-aos-delay="50"
                    data-aos-duration="2000"
                    data-aos-easing="ease-in-out"
                    data-aos-mirror="true"
                    data-aos-once="true"
                    data-aos-anchor-placement="top-center">
                    
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php foreach ($news_section['slider'] as $key => $value): ?>
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo $value['image'];?>" alt="First slide">
                            </div>
                        <?php endforeach ?>
                        
                        <!-- <div class="carousel-item">
                            <img class="d-block w-100" src="/wp-content/uploads/2020/12/Rectangle-95-5.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/wp-content/uploads/2021/02/Rectangle-95-7.png" alt="Third slide">
                        </div> -->
                    </div>
                    <div id="nown" data-aos="slide-right"
                        data-aos-offset="70"
                        data-aos-delay="50"
                        data-aos-duration="2000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="true"
                    data-aos-anchor-placement="top-center"></div>
                    
                </div>
                <!--  <img src="/wp-content/uploads/2021/02/Rectangle-95-7.png"> -->
                <!--<div class="home-cirlce">-->
                <!--</div>-->
                <!--  <div id="animate"></div>
                <div id="nown"></div> -->
            </div>
            <div class="col-md-6 posts">
                <?php
                                    $args = array(
                            'post_type' => 'news',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 3,
                            'order' => 'ASC',
                            );
                            $posts = new WP_Query( $args );
                                    while ( $posts->have_posts() ) : $posts->the_post();
                ?>
                <div class="home-post">
                    <span><?php echo get_the_date( 'd.m.y', get_the_ID() ); ?> |
                    <?php echo get_the_category(get_the_ID())[0]->name; ?></span>
                    <a href="<?php the_permalink() ?>">
                        <h5><?php the_title(); ?></h5>
                    </a>
                    <p>
                        <?php the_content(); ?>
                    </p>
                    <hr class="post-line">
                </div>
                <?php
                                    endwhile;
                                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section end here-->
<!-- Tools and Calculator Section start here-->
<!-- Certificates Section start here-->
<section class="cert">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ctf" data-aos="fade-up"
                data-aos-offset="100"
                data-aos-delay="20"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="true"
                data-aos-anchor-placement="top-center">
                <span>
                    <?php echo $certifications['caption'];?>
                </span>
                <h5>
                    <?php echo $certifications['heading'];?>
                </h5>
                <?php echo $certifications['details'];?>
                <!-- <p>
                    Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                </p> -->
                <div class="line-view">
                    <h6>
                    <a href="<?php echo $certifications['link']['url'];?>"> <?php echo $certifications['link']['title'];?></a>
                    </h6>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo $certifications['image'];?>">
            </div>
            <div>
                
            </div>
        </div>
    </div>
</section>

<!-- Certificate Section end here-->

</main>
<!-- .site-main -->
<?php get_sidebar( 'content-bottom' ); ?>
</div>
<!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>