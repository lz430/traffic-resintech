<?php /* Template Name: application-detail-page-template */ ?>
<?php get_header(); ?>
<link rel="stylesheet" href='https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css'>
<?php
    if ( have_posts() ) {
        while ( have_posts() ) { the_post();

            ?>
            <section class="ad-banner-sect">
                <div class="ad-banner-img">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <h1 data-aos="fade-up"
                                data-aos-offset="90"
                                data-aos-delay="29"
                                data-aos-duration="1000"
                                data-aos-easing="ease-in-out"
                                data-aos-mirror="true"
                                data-aos-once="false"
                                data-aos-anchor-placement="top-center"><?php the_title(); ?></h1>
                                
                                <div id="pdp-topcircle" data-aos="slide-right"
                                    data-aos-offset="150"
                                    data-aos-delay="40"
                                    data-aos-duration="2000"
                                    data-aos-easing="ease-in-out"
                                    data-aos-mirror="true"
                                    data-aos-once="false"
                                    data-aos-anchor-placement="top">
                                </div>
                            </div>
                            <div class="col-md-8 ad-banner-tect-col" data-aos="fade-up"
                                data-aos-offset="90"
                                data-aos-delay="29"
                                data-aos-duration="2000"
                                data-aos-easing="ease-in-out"
                                data-aos-mirror="true"
                                data-aos-once="false"
                                data-aos-anchor-placement="top-center">
                                <?php the_content(); ?>
                                <!-- <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue.
                                </p> -->
                                <div id="pdp-bottomcircle" data-aos="slide-left"
                                    data-aos-offset="150"
                                    data-aos-delay="40"
                                    data-aos-duration="2000"
                                    data-aos-easing="ease-in-out"
                                    data-aos-mirror="true"
                                    data-aos-once="false"
                                    data-aos-anchor-placement="top-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="overview-menu-slider-ad pt-0 pb-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-slider-ad">
                                <div class="product-slider ">
                                    <div class="product-slider__slider overview-link-ad">
                                        <div class="product-slider__item overview-item-ad">
                                            <div class="overview-link-div">
                                                <a class="overview-mob-link-ad active" href="#overview"><h2 class="" style="color:black;">Overview</h2></a>
                                            </div>
                                        </div>
                                        <div class="product-slider__item overview-item-ad">
                                            <div class="overview-link-div-ad">
                                                <a class="overview-mob-link-ad" href="#products"><h2 class="" style="color:black;">Products</h2></a>
                                            </div>
                                        </div>
                                        <div class="product-slider__item overview-item-ad">
                                            <div class="overview-link-div-ad">
                                                <a class="overview-mob-link-ad" href="#Resources"><h2 class="" style="color:black;">Resources</h2></a>
                                            </div>
                                        </div>
                                        <div class="product-slider__item overview-item-ad">
                                            <div class="overview-link-div-ad">
                                                <a class="overview-mob-link-ad" href="#applications"><h2 class="" style="color:black;">Applications</h2></a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="mt-0 mb-0 mobile-tab-hr-ad">
            <section id="overview" class="product-tab-section-ad" data-aos="fade-up"
                data-aos-offset="100"
                data-aos-delay="20"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="false"
                data-aos-anchor-placement="top-center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-md-2 col-sm-12 col-12">
                                    <div class="main tabs-product-div-ad">
                                        <div class="left overview-menues-ad">
                                            <ul>
                                                <li class="active">
                                                    <a class="link1 active" href="#overview">Overview </a>
                                                </li>
                                                <li>
                                                    <a class="link2" href="#pricing">Products</a>
                                                </li>
                                                <li>
                                                    <a class="link3" href="#resources">Resources</a>
                                                </li>
                                                <li>
                                                    <a class="link3" href="#applications">Applications</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-12 col-12">
                                    <div class="main tabs-product-div-ad">
                                        <div class="right">
                                            <?php print_r(get_field('details', get_the_ID()))?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12 col-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="products" class="slider-sections-ad" data-aos="fade-up"
                data-aos-offset="100"
                data-aos-delay="20"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="false"
                data-aos-anchor-placement="top-center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <div class="related-slider-ad">
                                <div class="product-slider-ad">
                                    <h2 class="related-serv-heading-ad">Related Products <a class="view-all-ad" href="#">View all</a></h2>
                                    <div class="related-product-slider-ad">
                                        <?php foreach (get_field('related_products', get_the_ID()) as $key => $value): ?>
                                            <div class="product-slider__item related-item-ad">
                                                <div class="product-card-div-ad">
                                                    <a href="<?php echo get_the_permalink($value['product']->ID);?>">
                                                        <img class="product-img-ad" src="<?php echo get_the_post_thumbnail_url($value['product']->ID );?>">
                                                        <h4 class="product-head-ad"><?php echo get_the_title($value['product']->ID);?></h4>
                                                        <table class="card-table-ad">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="heading-prod-td-ad">Form</td>
                                                                    <td class="simple-prod-td-ad">Sodium</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="heading-prod-td-ad">Industry</td>
                                                                    <td class="simple-prod-td-ad">Commercial <br>Residential</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="heading-prod-td-ad">Application</td>
                                                                    <td class="simple-prod-td-ad">Softening <br>Deionization</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="resources" class="resources-sections-ad" data-aos="fade-up"
                data-aos-offset="100"
                data-aos-delay="20"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="false"
                data-aos-anchor-placement="top-center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-10">
                            <h2 class="related-serv-heading-ad">Resources</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8 ">
                            <div class="row applicat-main-row">
                                <?php foreach (get_field('resources', get_the_ID()) as $key => $value): ?>
                                    <div class="col-md-6">
                                        <div class="resource-div-ad">
                                            <a class="resource-btn-ad" href="<?php print_r(get_field( "file", $value['resource']->ID ));?>"><i class="fas fa-download download-icon-ad"></i><?php print_r($value['resource']->post_title);?></a>
                                        </div>                                        
                                    </div>
                                <?php endforeach ?>                                
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </div>
            </section>
            <section id="applications" class="slider-sections rel-serv-ad">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <div class="related-slider ad">
                                <div class="product-slider">
                                    <h2 class="related-serv-heading-ad">Related Applications </h2>
                                    <div class="product-slider__slider related ad">
                                        <?php foreach (get_field('applications', get_the_ID()) as $key => $value): 
                                            $img_id = "application_category_".$value->term_id;
                                            ?>
                                            <div class="product-slider__item related-item">
                                                <div class="rel-serv-div-ad" data-aos="fade-up"
                                                    data-aos-offset="100"
                                                    data-aos-delay="20"
                                                    data-aos-duration="1000"
                                                    data-aos-easing="ease-in-out"
                                                    data-aos-mirror="true"
                                                    data-aos-once="false"
                                                    data-aos-anchor-placement="top-center">
                                                    <div class="slide-img"><a href="/application-category/?tid=<?php echo base64_encode($value->term_id);?>"><img class=" m-0" src="<?php  echo get_field( 'image', $img_id );?>"></div>
                                                    <h2><?php echo $value->name; ?></h2></a>
                                                </div>
                                            </div>
                                        <?php endforeach ?>
                                        
                                        <!-- <div class="product-slider__item related-item">
                                            <div class="rel-serv-div-ad" data-aos="fade-up"
                                                data-aos-offset="100"
                                                data-aos-delay="20"
                                                data-aos-duration="1000"
                                                data-aos-easing="ease-in-out"
                                                data-aos-mirror="true"
                                                data-aos-once="false"
                                                data-aos-anchor-placement="top-center">
                                                <div class="slide-img"><img class=" m-0" src="/wp-content/uploads/2021/01/Rectangle-99-16.png"></div>
                                                <h2><a href="#">Industrial Water</a></h2>
                                            </div>
                                        </div>
                                        <div class="product-slider__item related-item">
                                            <div class="rel-serv-div-ad" data-aos="fade-up"
                                                data-aos-offset="100"
                                                data-aos-delay="20"
                                                data-aos-duration="1000"
                                                data-aos-easing="ease-in-out"
                                                data-aos-mirror="true"
                                                data-aos-once="false"
                                                data-aos-anchor-placement="top-center">
                                                <div class="slide-img"><img class=" m-0" src="/wp-content/uploads/2021/01/Rectangle-99-17.png"></div>
                                                <h2><a href="#">Residential & Commercial Water</a></h2>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="service-ad-sec" data-aos="fade-up"
                data-aos-offset="100"
                data-aos-delay="50"
                data-aos-duration="1500"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="false"
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
                                data-aos-once="false"
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
                                data-aos-once="false"
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
                                data-aos-once="false"
                                data-aos-anchor-placement="top-center">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
    }
?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
<!-- <script src="https://hydrolog.weblider24.pl/wp-content/themes/taco/js/js-sliderWithProgressbar.js"></script> -->
<script type="text/javascript">
jQuery(".product-slider__slider.overview-link-ad").slick({
infinite: false,
nextArrow: '<button type="button" class="slick-next">></button>',
prevArrow: '<button type="button" class="slick-prev"><</button>',
slidesToShow: 1.50,
slidesToScroll: 1,
swipeToSlide: true,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 1.50
}
},
{
breakpoint: 768,
settings: {
slidesToShow: 3.25
}
},
{
breakpoint: 650,
settings: {
slidesToShow: 3.25
}
},
{
breakpoint: 475,
settings: {
slidesToShow: 3.25
}
}
]
});
</script>
<script type="text/javascript">
jQuery(".related-product-slider-ad").slick({
infinite: false,
arrows: true,
nextArrow: '<button type="button" class="slick-next slick-arrows-btn"><i class="fas fa-chevron-right nxt-prev-btn"></i></button>',
prevArrow: '<button type="button" class="slick-prev slick-arrows-btn"><i class="fas fa-chevron-left nxt-prev-btn"></i></button>',
slidesToShow: 4.15,
arrows: true,
slidesToScroll: 1,
swipeToSlide: true,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 2.25
}
},
{
breakpoint: 768,
settings: {
arrows: false,
slidesToShow: 2.25
}
},
{
breakpoint: 650,
settings: {
arrows: false,
slidesToShow: 1.15
}
},
{
breakpoint: 475,
settings: {
arrows: false,
slidesToShow: 1.15
}
}
]
});
</script>
<script type="text/javascript">
jQuery(".product-slider__slider.related.ad").slick({
infinite: false,
arrows: true,
nextArrow: '<button type="button" class="slick-next slick-arrows-btn-serv"><i class="fas fa-chevron-right nxt-prev-btn"></i></button>',
prevArrow: '<button type="button" class="slick-prev slick-arrows-btn-serv"><i class="fas fa-chevron-left nxt-prev-btn"></i></button>',
slidesToShow: 2.50,
slidesToScroll: 1,
swipeToSlide: true,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 2.25
}
},
{
breakpoint: 768,
settings: {
arrows: false,
slidesToShow: 2.25
}
},
{
breakpoint: 650,
settings: {
arrows: false,
slidesToShow: 1.15
}
},
{
breakpoint: 475,
settings: {
arrows: false,
slidesToScroll: 1,
swipeToSlide: true,
slidesToShow: 1.15
}
}
]
});
</script>
<script type="text/javascript">
jQuery(document).ready(function() {
/******************************
BOTTOM SCROLL TOP BUTTON
******************************/

// declare variable
var scrollTop = jQuery(".scrollTop");

jQuery(window).scroll(function() {
// declare variable
var topPos = jQuery(this).scrollTop();

// if user scrolls down - show scroll to top button
if (topPos > 100) {
jQuery(scrollTop).css("opacity", "1");

} else {
jQuery(scrollTop).css("opacity", "0");
}

}); // scroll END

//Click event to scroll to top
jQuery(scrollTop).click(function() {
jQuery('html, body').animate({
scrollTop: 0
}, 800);
return false;

}); // click() scroll top EMD

/*************************************
LEFT MENU SMOOTH SCROLL ANIMATION
*************************************/
// declare variable
var h1 = jQuery("#h1").position();
var h2 = jQuery("#h2").position();
var h3 = jQuery("#h3").position();

jQuery('.link1').click(function() {
jQuery('html, body').animate({
scrollTop: h1.top
}, 500);
return false;

}); // left menu link2 click() scroll END

jQuery('.link2').click(function() {
jQuery('html, body').animate({
scrollTop: h2.top
}, 500);
return false;

}); // left menu link2 click() scroll END

jQuery('.link3').click(function() {
jQuery('html, body').animate({
scrollTop: h3.top
}, 500);
return false;

}); // left menu link3 click() scroll END

}); // ready() END
</script>
<?php get_footer(); ?>