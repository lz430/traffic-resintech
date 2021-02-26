<?php 

/* Template Name: news-event-page-template */ ?>



<?php get_header(); ?>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link rel="stylesheet" href='https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css'>

<link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=dp46ucdledpfc9xxfkqnqq" async="true"> -->
</script>



<style type="text/css">
a:hover {

    text-decoration: none !important;

}

section.ne-sect-one {

    padding: 60px 0px;

}
img.w-100.sec-img {
    height: 442px;
}
.ne-sect-one h1 {

    font-family: 'Lora';

    font-style: normal;

    font-weight: normal;

    font-size: 60px;

    line-height: 72px;

    text-align: center;

    letter-spacing: -0.02em;

    color: #111315;

}

.ne-sect-one p {

    font-family: 'NeueHaasGroteskText-Regular';

    font-style: normal;

    font-weight: bold;

    font-size: 20px;

    line-height: 32px;

    text-align: center;

    letter-spacing: 0.02em;

    color: #111315;

    margin: 0;

    max-width: 540px;

    margin: auto;

    width: 100%;

}

div.ne-tabs-div {

    border-bottom: 2px solid #DEE1E2;

}

div.ne-tabs-div a.nav-item.nav-link.active {

    font-family: 'NeueHaasGroteskText-Regular';

    font-style: normal;

    font-weight: bold;

    font-size: 17px;

    line-height: 27px;

    color: #111315;

    border: none;

    border-bottom: 3px solid #CD163F;

    padding: 0;

    margin: 0px 50px;

}
img.w-100.img-4 {
    cursor: pointer;
    width: 100%;
    height: 330px;
    transition: all .4s ease-in-out;
}
img.w-100.img-4:hover {
        transform: scale(1.1);
}

div.ne-tabs-div a.nav-item.nav-link {

    font-family: 'NeueHaasGroteskText-Regular';

    font-style: normal;

    font-weight: normal;

    font-size: 17px;

    line-height: 27px;

    color: #111315;

    border: none;

    border-bottom: 0px solid #CD163F;

    padding: 0;

    text-transform: capitalize;

    margin: 0px 50px;

}

.post-content-ne p.date-cat-ne {

    font-family: 'NeueHaasGroteskDisp-Bold';
    font-style: normal;
    font-weight: 700;
font-size: 15px;

    line-height: 21px;

    letter-spacing: 0.02em;

    color: #0F75BB;

}
p.date-cat-ne span {
    font-family: 'NeueHaasGroteskDisp-Bold';
    font-style: normal;
    font-weight: 700;
    padding-top: 20px;
    color: #0F75BB;
    font-size: 14px;
    padding-bottom: 20px;
    padding-left: 4px;
}
.post-content-ne h5 {
cursor: pointer;
    letter-spacing: 0px;
    font-family: 'NeueHaasGroteskDisp-Bold';
    font-style: normal;
    font-weight: 700;
    font-size: 31px;
    line-height: 40px;
    color: #111315;

}
.post-content-ne h5:hover {
    color: #cc163f;
}
.post-content-ne p {

    font-family: 'NeueHaasGroteskText-Regular';

    font-style: normal;

    font-weight: normal;

    font-size: 17px;

    line-height: 27px;

    color: #111315;

}

.post-content-ne {

    margin: 20px 0px;

}

.ne-post-col-set {

    padding: 0px 5px;

    margin-top: 25px;

}

.ne-all-post-row {

    margin: 40px 0px 0px;

}

section.service-ne-sec {

    background: url(/wp-content/uploads/2021/01/circle.png);

    width: 100%;

    background-position: center;

    background-size: cover;

    height: 360px;

}

.service-txt-div-ne {

    text-align: center;

    max-width: 651px;

    width: 100%;

    margin: auto;

    transform: translate(0%, 40%);

}

.service-txt-div-ne h1 {

    font-style: normal;

    font-weight: normal;

    font-size: 50px;

    line-height: 65px;

    text-align: center;

    letter-spacing: -0.02em;

    color: #FFFFFF;

}

.service-txt-div-ne p {

    font-style: normal;

    font-weight: normal;

    font-size: 20px;

    line-height: 32px;

    text-align: center;

    color: #FFFFFF;

}

.service-txt-div-ne a.ask-pdp-btn-ne {

    font-style: normal;

    font-weight: normal;

    font-size: 22px;

    line-height: 31px;

    letter-spacing: -0.02em;

    color: #FFFFFF;

    padding: 10px 0px;

    border-bottom: 1px solid red;

}

a.view-more-btn-ne {

    font-family: 'Lora';

    font-weight: normal;

    font-size: 22px;

    line-height: 31px;

    letter-spacing: -0.02em;

    color: #111315;

    text-align: center !important;

    justify-content: center;

    margin: 50px auto;

    width: 100%;

    display: block;

    max-width: 106px;
    cursor: pointer;

}
a.view-more-btn-ne:hover {
    color: #cc163f;
} 

@media only screen and (min-width:320px) and (max-width:767px) {

    .ne-sect-one h1 {

        font-size: 43px;

        line-height: 53px;

    }

    .ne-sect-one p {

        font-size: 17px;

        line-height: 27px;

        max-width: 100%;

    }

    .service-txt-div-ne {

        text-align: center;

        max-width: 100%;

        width: 100%;

        margin: auto;

        transform: translate(0%, 0%);

        height: auto;

        padding: 50px 0px;

    }

    section.service-ne-sec {

        background-position: 0% 0%;

        height: auto;

    }

    .service-txt-div-ne h1 {

        margin-top: 0px;

        font-size: 36px;

        line-height: 43px;

    }

    div.ne-tabs-div a.nav-item.nav-link.active {

        font-size: 14px;

        line-height: 24px;

        margin: 0px 7px;

    }

    div.ne-tabs-div a.nav-item.nav-link {

        font-size: 14px;

        line-height: 24px;

        color: #111315;

        margin: 0px 7px;

    }

    .post-content-ne p.date-cat-ne {

        font-size: 12px !important;

        line-height: 17px;

    }

    .post-content-ne h5 {

        font-size: 21px;

        line-height: 30px;

    }

    .post-content-ne p {

        font-size: 15px;

        line-height: 24px;

        margin-top: 15px;

    }

    .ne-post-row-all {

        width: 100%;

        margin: auto;

    }

    a.view-more-btn-ne {

        font-size: 17px;

        line-height: 24px;

        margin: 40px auto;

        max-width: 82px;
       

    }

}
</style>



<section class="ne-sect-one">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-12" data-aos="fade-up"
    data-aos-offset="50"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">

                <h1>

                    News & Events

                </h1>

                <p>

                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cum sociis natoque penatibus
                    et magnis dis parturient montes, nascetur ridiculus mus.

                </p>

            </div>

        </div>

    </div>

</section>



<section class="ne-blog-sect" id='posts-data'>

    <div class="row">

        <div class="col-md-12" data-aos="fade-up"
    data-aos-offset="50"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">

            <div class="ne-tabs">

                <nav>

                    <div class="nav nav-tabs justify-content-center ne-tabs-div" id="nav-tab" role="tablist">

                        <a class="nav-item nav-link active" id="nav-all-tab" data-toggle="tab" href="#ne-all" role="tab"
                            aria-controls="nav-all" aria-selected="true">

                            All

                        </a>

                        <a class="nav-item nav-link" id="ne-blog-tab" data-toggle="tab" href="#ne-blog" role="tab"
                            aria-controls="ne-blog" aria-selected="false">

                            Blogs

                        </a>

                        <a class="nav-item nav-link" id="ne-press-tab" data-toggle="tab" href="#ne-press" role="tab"
                            aria-controls="ne-press" aria-selected="false">

                            Press Releases

                        </a>

                        <a class="nav-item nav-link" id="ne-trade-tab" data-toggle="tab" href="#ne-trade" role="tab"
                            aria-controls="ne-trade" aria-selected="false">

                            Trade Shows

                        </a>

                    </div>

                </nav>

                <div class="tab-content" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="ne-all" role="tabpanel" aria-labelledby="nav-all-tab">

                        <div class="container">

                            <div class="row ne-all-post-row" id='all-news-post'>
                                <?php
									$args = array(  
									'post_type' => 'news',
									'post_status' => 'publish',
									'posts_per_page' => 5,
									'order' => 'DESC', 
									
									);
									$i=1;
									$posts = new WP_Query( $args ); 
										while ( $posts->have_posts() ) : $posts->the_post(); 
								?>
                                <?php if($i==1 || $i==2){ ?>
                                <div class="col-md-6 ne-post-col-set" data-aos="fade-up"
    data-aos-offset="50"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">

                                    <div class="ne-post-div">

                                       <img class="w-100 sec-img"
                                            src="<?php echo get_the_post_thumbnail_url(get_the_ID() );?>">

                                        <div class="post-content-ne">

                                            <p class="date-cat-ne"><?php echo get_the_date( 'd.m.y', get_the_ID() ); ?>
                                                |<span><?php echo get_the_category(get_the_ID())[0]->name; ?></span></p>
                                            <a href="<?php the_permalink() ?>">
                                                <a href="<?php the_permalink() ?>">
                                                    <h5><?php the_title(); ?></h5>
                                                </a>

                                                <p><?php the_content(); ?></p>

                                        </div>

                                    </div>

                                </div>
                                <?php }else{ ?>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set" data-aos="fade-up"
    data-aos-offset="50"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">

                                    <div class="ne-post-div">
 <div class="events-img">
                                        <img class="w-100 img-4"
                                            src="<?php echo get_the_post_thumbnail_url(get_the_ID() );?>"></div>

                                        <div class="post-content-ne">

                                            <p class="date-cat-ne"><?php echo get_the_date( 'd.m.y', get_the_ID() ); ?>
                                                |<span> <?php echo get_the_category(get_the_ID())[0]->name; ?></span>
                                            </p>

                                            <a href="<?php the_permalink() ?>">
                                                <a href="<?php the_permalink() ?>">
                                                    <h5><?php the_title(); ?></h5>
                                                </a>


                                        </div>

                                    </div>

                                </div>
                                <?php }?>
                                <?php
									$i++;
									endwhile;
									wp_reset_postdata(); 
								?>
                                <!-- <div class="col-md-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Press Release</span></p>

                          	                <h5>Peter Myers is awarded the IWC Merit award</h5>

                          	                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                  	                    </div>

                  	                </div>

                  	            </div> -->

                            </div>

                            <div class="row ne-post-row-all">
                                <?php
									// $args = array(  
									// 'post_type' => 'news',
									// 'post_status' => 'publish',
									// 'posts_per_page' => 7,
									// 'order' => 'DESC', 
									// );
									// $i=1;
									// $posts = new WP_Query( $args ); 
									// 	while ( $posts->have_posts() ) : $posts->the_post(); 
								?>
                                <?php //if($i==1 || $i==2){ ?>
                                <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="<?php //echo get_the_post_thumbnail_url(get_the_ID() );?>">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne"><?php //echo get_the_date( 'd.m.y', get_the_ID() ); ?> |<span> <?php //echo get_the_category(get_the_ID())[0]->name; ?></span></p>

                          	                <a href="<?php //the_permalink() ?>">
                          	                	<a href="<?php //the_permalink() ?>">
                          	                	<h5><?php //the_title(); ?></h5>
											</a>
											

                  	                    </div>

                  	                </div>

                  	            </div> -->
                                <?php //}else{ ?>

                                <?php//} ?>
                                <?php
									// endwhile;
									// wp_reset_postdata(); 
								?>
                                <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Press Release</span></p>

                          	                <h5>Peter Myers is awarded the IWC Merit award</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Trade Show</span></p>

                          	                <h5>ResinTech inc.’s 32nd annual Fun Run</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Blog</span></p>

                          	                <h5>MTV Cribs Business: ResinTech making water magic at brand new Camden building</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Press Release</span></p>

                          	                <h5>Peter Myers is awarded the IWC Merit award</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Trade Show</span></p>

                          	                <h5>ResinTech inc.’s 32nd annual Fun Run</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Blog</span></p>

                          	                <h5>MTV Cribs Business: ResinTech making water magic at brand new Camden building</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Press Release</span></p>

                          	                <h5>Peter Myers is awarded the IWC Merit award</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Trade Show</span></p>

                          	                <h5>ResinTech inc.’s 32nd annual Fun Run</h5>

                  	                    </div>

                  	                </div>

                  	            </div> -->

                            </div>

                            <a class="view-more-btn-ne" id="more_news_post">View more</a>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="ne-blog" role="tabpanel" aria-labelledby="ne-blog-tab">

                        <div class="container">

                            <div class="row ne-all-post-row" id="n-blogs">
                                <?php
									$arg = array(  
									'post_type' => 'news',
									'post_status' => 'publish',
									'category_name' => 'blog',
									'posts_per_page' => 5,
									'order' => 'DESC', 
									);
									$i = 1;
									$posts = new WP_Query( $arg ); 
										while ( $posts->have_posts() ) : $posts->the_post(); 
										
								?>
                                <?php if($i === 1 || $i === 2){ ?>
                                <div class="col-md-6 ne-post-col-set">

                                    <div class="ne-post-div">

                                        <img class="w-100 sec-imges"
                                            src="<?php echo get_the_post_thumbnail_url(get_the_ID() );?>">

                                        <div class="post-content-ne">

                                            <p class="date-cat-ne"><?php echo get_the_date( 'd.m.y', get_the_ID() ); ?>
                                                |<span> <?php echo get_the_category(get_the_ID())[0]->name; ?></span>
                                            </p>

                                            <a href="<?php the_permalink() ?>">
                                                <a href="<?php the_permalink() ?>">
                                                    <h5><?php the_title(); ?></h5>
                                                </a>


                                                <p><?php the_content(); ?></p>

                                        </div>

                                    </div>

                                </div>
                                <?php }else{ ?>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                                    <div class="ne-post-div">

                                        <img class="w-100 imges-4"
                                            src="<?php echo get_the_post_thumbnail_url(get_the_ID() );?>">

                                        <div class="post-content-ne">

                                            <p class="date-cat-ne"><?php echo get_the_date( 'd.m.y', get_the_ID() ); ?>
                                                |<span> <?php echo get_the_category(get_the_ID())[0]->name; ?></span>
                                            </p>

                                            <a href="<?php the_permalink() ?>">
                                                <h5><?php the_title(); ?></h5>
                                            </a>

                                        </div>

                                    </div>

                                </div>
                                <?php  } ?>
                                <?php
								$i++;
									endwhile;
									wp_reset_postdata(); 
								?>
                                <!-- <div class="col-md-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Press Release</span></p>

                          	                <h5>Peter Myers is awarded the IWC Merit award</h5>

                          	                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                  	                    </div>

                  	                </div>

                  	            </div> -->

                            </div>

                            <div class="row ne-post-row-all">
                                <?php
									// $args = array(  
									// 'post_type' => 'news',
									// 'post_status' => 'publish',
									// 'posts_per_page' => 3,
									// 'category_name' => 'blog',
									// 'order' => 'DESC', 
									
									// );
									// $posts = new WP_Query( $args ); 
									// 	while ( $posts->have_posts() ) : $posts->the_post(); 
								?>
                                <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="<?php //echo get_the_post_thumbnail_url(get_the_ID() );?>">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne"><?php //echo get_the_date( 'd.m.y', get_the_ID() ); ?> |<span> <?php //echo get_the_category(get_the_ID())[0]->name; ?></span></p>

                          	                <a href="<?php //the_permalink() ?>">
                          	                	<h5><?php //the_title(); ?></h5>
											</a>

                  	                    </div>

                  	                </div>

                  	            </div> -->
                                <?php
									// endwhile;
									// wp_reset_postdata(); 
								?>
                                <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Press Release</span></p>

                          	                <h5>Peter Myers is awarded the IWC Merit award</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Trade Show</span></p>

                          	                <h5>ResinTech inc.’s 32nd annual Fun Run</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Blog</span></p>

                          	                <h5>MTV Cribs Business: ResinTech making water magic at brand new Camden building</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Press Release</span></p>

                          	                <h5>Peter Myers is awarded the IWC Merit award</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Trade Show</span></p>

                          	                <h5>ResinTech inc.’s 32nd annual Fun Run</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Blog</span></p>

                          	                <h5>MTV Cribs Business: ResinTech making water magic at brand new Camden building</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Press Release</span></p>

                          	                <h5>Peter Myers is awarded the IWC Merit award</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Trade Show</span></p>

                          	                <h5>ResinTech inc.’s 32nd annual Fun Run</h5>

                  	                    </div>

                  	                </div>

                  	            </div> -->

                            </div>

                            <a class="view-more-btn-ne" id="n_blogs">View more</a>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="ne-press" role="tabpanel" aria-labelledby="ne-press-tab">

                        <div class="container">

                            <div class="row ne-all-post-row" id="p-blogs">
                                <?php
									$data = array(  
									'post_type' => 'news',
									'post_status' => 'publish',
									'posts_per_page' => 5,
									'category_name' => 'press_releases',
									'order' => 'DESC', 
									);
									$i=1;
									$posts = new WP_Query( $data ); 
										while ( $posts->have_posts() ) : $posts->the_post(); 
								?>
                                <?php if($i==1 || $i==2){ ?>
                                <div class="col-md-6 ne-post-col-set">

                                    <div class="ne-post-div">
                               
                                        <img class="w-100 section-img"
                                            src="<?php echo get_the_post_thumbnail_url(get_the_ID() );?>">
                                    
                                        <div class="post-content-ne">

                                            <p class="date-cat-ne"><?php echo get_the_date( 'd.m.y', get_the_ID() ); ?>
                                                |<span> <?php echo get_the_category(get_the_ID())[0]->name; ?></span>
                                            </p>

                                            <a href="<?php the_permalink() ?>">
                                                <h5><?php the_title(); ?></h5>
                                            </a>

                                            <p><?php the_content(); ?></p>

                                        </div>

                                    </div>

                                </div>
                                <?php }else{?>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                                    <div class="ne-post-div">

                                        <img class="w-100 img-5"
                                            src="<?php echo get_the_post_thumbnail_url(get_the_ID() );?>">

                                        <div class="post-content-ne">

                                            <p class="date-cat-ne"><?php echo get_the_date( 'd.m.y', get_the_ID() ); ?>
                                                |<span> <?php echo get_the_category(get_the_ID())[0]->name; ?></span>
                                            </p>

                                            <a href="<?php the_permalink() ?>">
                                                <h5><?php the_title(); ?></h5>
                                            </a>

                                        </div>

                                    </div>

                                </div>
                                <?php }?>
                                <?php
								  $i++;
									endwhile;
									wp_reset_postdata(); 
								?>
                                <!-- <div class="col-md-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Press Release</span></p>

                          	                <h5>Peter Myers is awarded the IWC Merit award</h5>

                          	                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                  	                    </div>

                  	                </div>

                  	            </div> -->

                            </div>

                            <div class="row ne-post-row-all">
                                <?php
									// $args = array(  
									// 'post_type' => 'news',
									// 'post_status' => 'publish',
									// 'posts_per_page' => 9,
									// 'category_name' => 'press_releases',
									// 'order' => 'DESC', 
									// 'offset' => 2
									// );
									// $posts = new WP_Query( $args ); 
									// 	while ( $posts->have_posts() ) : $posts->the_post(); 
								?>

                                <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="<?php //echo get_the_post_thumbnail_url(get_the_ID() );?>">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne"><?php //echo get_the_date( 'd.m.y', get_the_ID() ); ?> |<span> <?php //echo get_the_category(get_the_ID())[0]->name; ?></span></p>

                          	                <a href="<?php //the_permalink() ?>">
                          	                	<h5><?php //the_title(); ?></h5>
											</a>

                  	                    </div>

                  	                </div>

                  	            </div> -->
                                <?php
									// endwhile;
									// wp_reset_postdata(); 
								?>
                                <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Press Release</span></p>

                          	                <h5>Peter Myers is awarded the IWC Merit award</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Trade Show</span></p>

                          	                <h5>ResinTech inc.’s 32nd annual Fun Run</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Blog</span></p>

                          	                <h5>MTV Cribs Business: ResinTech making water magic at brand new Camden building</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Press Release</span></p>

                          	                <h5>Peter Myers is awarded the IWC Merit award</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Trade Show</span></p>

                          	                <h5>ResinTech inc.’s 32nd annual Fun Run</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Blog</span></p>

                          	                <h5>MTV Cribs Business: ResinTech making water magic at brand new Camden building</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Press Release</span></p>

                          	                <h5>Peter Myers is awarded the IWC Merit award</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Trade Show</span></p>

                          	                <h5>ResinTech inc.’s 32nd annual Fun Run</h5>

                  	                    </div>

                  	                </div>

                  	            </div> -->

                            </div>

                            <a class="view-more-btn-ne" id="p_blog">View more</a>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="ne-trade" role="tabpanel" aria-labelledby="ne-trade-tab">

                        <div class="container">

                            <div class="row ne-all-post-row" id='t-blogs'>
                                <?php
									$val = array(  
									'post_type' => 'news',
									'post_status' => 'publish',
									'posts_per_page' => 5,
									'category_name' => 'trade-shows',
									'order' => 'DESC', 
									);
									$i=1;
									$posts = new WP_Query( $val ); 
										while ( $posts->have_posts() ) : $posts->the_post(); 
								?>
                                <?php if($i==1 || $i==2){ ?>
                                <div class="col-md-6 ne-post-col-set">

                                    <div class="ne-post-div">

                                        <img class="w-100 sec-img"
                                            src="<?php echo get_the_post_thumbnail_url(get_the_ID() );?>">

                                        <div class="post-content-ne">

                                            <p class="date-cat-ne"><?php echo get_the_date( 'd.m.y', get_the_ID() ); ?>
                                                |<span> <?php echo get_the_category(get_the_ID())[0]->name; ?></span>
                                            </p>

                                            <a href="<?php the_permalink() ?>">
                                                <h5><?php the_title(); ?></h5>
                                            </a>

                                            <p><?php the_content(); ?></p>

                                        </div>

                                    </div>

                                </div>
                                <?php } else{?>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                                    <div class="ne-post-div">
 <div class="events-img">
                                        <img class="w-100 img-4"
                                            src="<?php echo get_the_post_thumbnail_url(get_the_ID() );?>"></div>

                                        <div class="post-content-ne">

                                            <p class="date-cat-ne"><?php echo get_the_date( 'd.m.y', get_the_ID() ); ?>
                                                |<span> <?php echo get_the_category(get_the_ID())[0]->name; ?></span>
                                            </p>

                                            <a href="<?php the_permalink() ?>">
                                                <h5><?php the_title(); ?></h5>
                                            </a>

                                        </div>

                                    </div>

                                </div>
                                <?php } ?>
                                <?php
								  $i++;
									endwhile;
									wp_reset_postdata(); 
								?>
                                <!-- <div class="col-md-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Press Release</span></p>

                          	                <h5>Peter Myers is awarded the IWC Merit award</h5>

                          	                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                  	                    </div>

                  	                </div>

                  	            </div> -->

                            </div>

                            <div class="row ne-post-row-all">
                                <?php
									// $args = array(  
									// 'post_type' => 'news',
									// 'post_status' => 'publish',
									// 'posts_per_page' => 9,
									// 'category_name' => 'trade-shows',
									// 'order' => 'DESC', 
									// 'offset' => 2
									// );
									// $posts = new WP_Query( $args ); 
									// 	while ( $posts->have_posts() ) : $posts->the_post(); 
								?>
                                <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="<?php //echo get_the_post_thumbnail_url(get_the_ID() );?>">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne"><?php //echo get_the_date( 'd.m.y', get_the_ID() ); ?> |<span> <?php //echo get_the_category(get_the_ID())[0]->name; ?></span></p>

                          	                <a href="<?php //the_permalink() ?>">
                          	                	<h5><?php //the_title(); ?></h5>
											</a>

                  	                    </div>

                  	                </div>

                  	            </div> -->
                                <?php
									// endwhile;
									// wp_reset_postdata(); 
								?>
                                <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Press Release</span></p>

                          	                <h5>Peter Myers is awarded the IWC Merit award</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Trade Show</span></p>

                          	                <h5>ResinTech inc.’s 32nd annual Fun Run</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Blog</span></p>

                          	                <h5>MTV Cribs Business: ResinTech making water magic at brand new Camden building</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Press Release</span></p>

                          	                <h5>Peter Myers is awarded the IWC Merit award</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Trade Show</span></p>

                          	                <h5>ResinTech inc.’s 32nd annual Fun Run</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Blog</span></p>

                          	                <h5>MTV Cribs Business: ResinTech making water magic at brand new Camden building</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Press Release</span></p>

                          	                <h5>Peter Myers is awarded the IWC Merit award</h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set">

                  	                <div class="ne-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-ne">

                  	                        <p class="date-cat-ne">9.14.20 |<span> Trade Show</span></p>

                          	                <h5>ResinTech inc.’s 32nd annual Fun Run</h5>

                  	                    </div>

                  	                </div>

                  	            </div> -->

                            </div>

                            <a class="view-more-btn-ne" id="t_blogs">View more</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- <section class="service-ne-sec">

    <div class="container m-auto">

        <div class="row">

            <div class="col-md-12">

                <div class="service-txt-div-ne">

                    <h1 class="mb-3">Get expert advise</h1>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

                    <a class="ask-pdp-btn-ne" href="#">Ask an expert</a>

                </div>

            </div>

        </div>

    </div>

</section> -->
<section class="service-ad-sec" data-aos="fade-up"
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









<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>



<?php get_footer(); ?>