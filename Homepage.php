<?php /*Template Name: Homepage*/ ?>
<?php get_header(); ?>
<?php 
    //the_content(); 
    $our_story_section = get_field('our_story_section', get_the_ID());
    $service_section_heading = get_field('service_section_heading', get_the_ID());
    $news_section = get_field('news_section', get_the_ID());
    $section_before_footer = get_field('section_before_footer', get_the_ID());
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        // Start the loop.
        // while ( have_posts() ) : the_post();
        
        //                 // Include the page content template.
        //                 get_template_part( 'template-parts/content', 'page' );
        ?>

        <section class="company-section min-vh-100">
           <div id="carouselExampleFade" class="carousel slide carousel-fade min-vh-100" data-ride="carousel">
             <div class="carousel-inner min-vh-100">
                <?php 
                    if( have_rows('home_slider') ):
                        $i = 1; 
                        ?>                        
                        <div id="carousel-home" class="min-vh-100 carousel slide" data-ride="carousel">
                            <div class="carousel-inner min-vh-100">';
                        
                                <?php
                                while ( have_rows('home_slider') ) : the_row();
                                    $background_image = get_sub_field('background_image');
                                    $headline = get_sub_field('headline');
                                    $subheading = get_sub_field('subheading');
                                    $link_text = get_sub_field('link_text');
                                    $link_url = get_sub_field('link_url');
                                ?>
                                
                                 <div class="carousel-item d-flex min-vh-100 <?php if($i == 1) echo 'active';?>" style="background-image: url('<?php echo $background_image; ?>')">
                                    <div class="d-flex">
                                        <h1><?php echo $headline; ?></h1>
                                        <h3><?php echo $subheading; ?></h3> 
                                        <a class="line-slide" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
                                    </div>
                                </div>
                                              
                                <?php   $i++; // Increment the increment variable
                                    endwhile; 
                                ?>
                                
                            </div>
                            <div class="carousel-control-container d-flex">
                                 <a class="carousel-control-prev" href="#carousel-home" role="button" data-slide="prev">
                                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.106 14.811C7.232 14.937 7.379 15 7.526 15C7.694 15 7.862 14.937 7.967 14.811C8.177 14.58 8.177 14.223 7.967 13.992L1.709 7.692L7.967 1.413C8.177 1.161 8.177 0.782999 7.967 0.531C7.736 0.299999 7.337 0.320999 7.106 0.531L0.47 7.251L0.449 7.272L0.386 7.335C0.365 7.356 0.344 7.398 0.323 7.44C0.302 7.503 0.281 7.545 0.281 7.587C0.26 7.65 0.26 7.713 0.281 7.776C0.281 7.818 0.281 7.839 0.302 7.881C0.302 7.902 0.302 7.923 0.323 7.944C0.323 7.944 0.323 7.965 0.344 7.986C0.365 8.028 0.407 8.07 0.449 8.112L0.47 8.133L7.106 14.811Z" fill="black"/>
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carousel-home" role="button" data-slide="next">
                                    <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.079 14.811C1.205 14.937 1.352 15 1.52 15C1.667 15 1.835 14.937 1.94 14.811L8.576 8.133L8.597 8.112C8.618 8.091 8.639 8.091 8.639 8.07C8.723 7.965 8.765 7.818 8.765 7.692C8.765 7.545 8.702 7.377 8.597 7.272L8.576 7.251L1.94 0.531C1.709 0.320999 1.31 0.299999 1.079 0.531C0.869 0.782999 0.869 1.161 1.079 1.413L7.337 7.692L1.079 13.992C0.869 14.223 0.869 14.58 1.079 14.811Z" fill="black"/>
                                    </svg>
                                    <span class="sr-only">Next</span>
                                  </a>
                            </div> 
                        </div>

                    <?php 
                        else :
                    endif;
                ?>
             </div>
           </div>
        </section>







        <!-- Company Section start here-->
        <section class="company-section">
            <div class="row">
                <div class="col-md-6">
                    <div class="bg-img">
                        <img src="/wp-content/uploads/2020/12/Ellipse-33-1.png" class="sta-img">
                    </div>
                    <img src="<?php echo $our_story_section['image'];?>" class="mta-img">
                    <img src="/wp-content/uploads/2020/12/Ellipse-33-1.png" class="bta-img">
                </div>
                <div class="col-md-6 vga" data-aos="fade-up"
                    data-aos-offset="200"
                    data-aos-delay="20"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out"
                    data-aos-mirror="true"
                    data-aos-once="true"
                    data-aos-anchor-placement="top-center">
                    <span>
                        <?php echo $our_story_section['caption'];?>
                    </span>
                    <h5>
                        <?php echo $our_story_section['heading'];?>
                    </h5>
                        <?php echo $our_story_section['details'];?>
                   
                    <div class="line">
                        <h6>
                            <a href="<?php echo $our_story_section['link']['url'];?>"><?php echo $our_story_section['link']['title'];?></a>
                        </h6>
                    </div>
                    
                    
                </div>
            </div>
        </section> 
        <!-- Company Section end here-->
        <!-- <div class="test">hi tesetr</div>
        <h2>Scroll down</h2>
        <h1>This will jump</h1> -->
        <!-- Services Section start here-->


       <!--  <section class="services ">
            <div class="container">
                <p class="text-space">Services</p>
                <h2>
                <?php echo $service_section_heading;?>
                </h2>
                <div class="row animate-img">
                    <?php
                                            $args = array(
                                            'post_type' => 'services',
                                            'post_status' => 'publish',
                                            'posts_per_page' => 9,
                                            'order' => 'DESC',
                                            
                                                                    );
                                            $posts = new WP_Query( $args );
                                                while ( $posts->have_posts() ) : $posts->the_post();
                    ?>
                    <div class="col-md-4 svc">
                        <div class="porta=-animate" data-aos="fade-up"
                            data-aos-offset="100"
                            data-aos-delay="15"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out"
                            data-aos-mirror="true"
                            data-aos-once="true"
                            data-aos-anchor-placement="top-center">
                            <div class="get-img">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID() );?>">
                            </div>
                            <a href="<?php echo the_permalink(get_the_ID());?>"> <h5><?php the_title(); ?></h5></a>
                            <P><?php the_content(); ?></P>
                        </div>
                    </div>
                    <?php
                                    endwhile;
                                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section> -->


        <!-- Services Section end here-->
        <!-- Services Duplicate Section start here-->
        <!-- <section class="services">
            <div class="container">
                        <div class="row animate-imgone">
                                    
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
    <!-- Blog Section start here-->
    <section class="blog" ata-aos="fade-up"
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
                            data-aos-offset="100"
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
    <section class="cbx" ata-aos="fade-up"
        data-aos-offset="0"
        data-aos-delay="20"
        data-aos-duration="1000"
        data-aos-easing="ease-in-out"
        data-aos-mirror="true"
        data-aos-once="true"
        data-aos-anchor-placement="top">
        <div class="container">
            <div class="row">
                <?php foreach ($section_before_footer as $key => $value): ?>
                    <div class="col-md-4">
                        <div class="vcg">
                            <h4>
                            <?php echo $value['heading'];?>
                            </h4>
                            <?php echo $value['description'];?>
                            <!-- <p>
                                Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur
                                purus sit amet fermentum.
                            </p> -->
                            <h6>
                            <a href="<?php echo $value['link']['url'];?>"><?php echo $value['link']['title'];?></a>
                            </h6>
                            <!--            <img src="wp-content/uploads/2020/12/Rectangle-124.png"> -->
                        </div>
                    </div>
                <?php endforeach ?>
                
                <!-- <div class="col-md-4">
                    <div class="vcg">
                        <h4>
                        Document library
                        </h4>
                        <p>
                            Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur
                            purus sit amet fermentum.
                        </p>
                        <h6>
                        <a href="#">View Library</a>
                        </h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cbx-text-one">
                        <h4>
                        Expert advise
                        </h4>
                        <p>
                            Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur
                            purus sit amet fermentum.
                        </p>
                        <h6>
                        <a href="#">Ask an Expert</a>
                        </h6>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Tools and Calculator Section end here-->
    
    
</main>
<!-- .site-main -->
<?php get_sidebar( 'content-bottom' ); ?>
</div>
<!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>