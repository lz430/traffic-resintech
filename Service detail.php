<?php 

/* Template Name: service-detail-page-template */ ?>

 

<?php get_header(); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link rel="stylesheet" href='https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css'>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=dp46ucdledpfc9xxfkqnqq" async="true"></script>



<style>

    a:hover{

        text-decoration:none!important;

    }

   

    /*.product-slider__slider.related.product .product-slider__item.related-item{*/

    /*    width: auto!important;*/

    /*} */

    h2.related-serv-heading-sd {

        font-style: normal;

        font-weight: normal;

        font-size: 41px;

        line-height: 27px;

        letter-spacing: -0.02em;

        color: #111315;

        border-bottom: 2px solid #0F75BB;

        padding-bottom: 20px;

        font-family: 'Lora';

        max-width:80%;

        width:100%;

        margin:unset;

    }

    .rel-serv-div-sd h2{

        font-style: normal;

        font-weight: normal;

        font-size: 33px;

        line-height: 40px;

        letter-spacing: -0.02em;

        color: #111315;

        margin: 15px 0px;

    }

    .rel-serv-div-sd img{

        padding-right:15px;

        margin-top:30px!important;

    }

    .product-card-div-sd {

        border: 1px solid #808284;

        border-radius: 5px;

        box-sizing: border-box;

        padding: 20px;

        margin-top: 30px!important;

        margin-right: 15px;

    }

    h4.product-head-sd {

        font-style: normal;

        font-weight: normal;

        font-size: 22px;

        line-height: 31px;

        letter-spacing: -0.02em;

        color: #111315;

        text-transform: uppercase;

        border-bottom: 1px solid #0F75BB;

        margin: 0;

        padding: 15px 0px;

        font-family: 'Lora';

    }

    

    a.resource-btn-sd {

        font-style: normal;

        font-weight: bold;

        font-size: 20px;

        line-height: 32px;

        color: #111315;

        text-align: left;

        font-family:'NeueHaasGroteskText-Regular';

    }

    i.download-icon-sd {

        color: #CD163F;

        font-style: normal;

        font-weight: bold;

        font-size: 20px;

        line-height: 32px;

        padding-right: 15px;

    }

    .resource-div-sd {

        margin: 10px 0px;

    }

    

    

 

    .main.tabs-product-div-sd {

      width: 100%;

      margin: 0 auto;

    }

    .left.overview-menues-sd ul li a {

        font-style: normal;

        font-weight: normal;

        font-size: 18px;

        line-height: 22px;

        color: #111315;

        text-align: left;

        text-decoration: none;

        padding-left: 30px;

        font-family: 'Lora';

    }

    .left.overview-menues-sd ul li a.active {

        font-style: normal;

        font-weight: normal;

        font-size: 18px;

        line-height: 22px;

        color: #ce153f;

        text-align: left;

        text-decoration: none;

        padding-left: 30px;

    }

    .left.overview-menues-sd ul {

        list-style: none;

        margin: 0;

        position:relative;

    }

    .left.overview-menues-sd ul li.active:before {

        content: '';

        width: 30px;

        height: 2px;

        padding: a;

        left: 0;

        position: absolute;

        top: 17px;

        background: #ce153f;

    }

    .left.overview-menues-sd ul li:before {

        content: '';

        width: 30px;

        height: 2px;

        padding: a;

        left: 0;

        position: absolute;

        top: 17px;

        background: transparent;

    }

    .left.overview-menues-sd ul li {

        padding: 6px 0px;

    }

    

    section.service-sd-sec {

        background: url(/wp-content/uploads/2021/01/circle.png);

        width: 100%;

        background-position: center;

        background-size: cover;

        height: 360px;

    }

    .service-txt-div-sd {

        text-align: center;

        max-width:651px;

        width:100%;

        margin:auto;

        transform: translate(0% , 40%);

    }

    .service-txt-div-sd h1 {

        font-style: normal;

        font-weight: normal;

        font-size: 50px;

        line-height: 65px;

        text-align: center;

        letter-spacing: -0.02em;

        color: #FFFFFF;

    }

    .service-txt-div-sd p{

        font-style: normal;

        font-weight: normal;

        font-size: 20px;

        line-height: 32px;

        text-align: center;

        color: #FFFFFF;

    }

    .service-txt-div-sd a.ask-pdp-btn-sd {

        font-style: normal;

        font-weight: normal;

        font-size: 22px;

        line-height: 31px;

        letter-spacing: -0.02em;

        color: #FFFFFF;

        padding: 10px 0px;

        border-bottom: 1px solid red;

    }

    p.overvie-sm-slider-txt-sd {

        font-style: normal;

        font-weight: normal;

        font-size: 20px;

        line-height: 32px;

        color: #111315;

        margin: 10px 0px;

        max-width:830px;

        width:100%;

        font-family: 'NeueHaasGroteskText-Regular';

    }

    .nxt-prev-btn {

        color: #CD163F;

        font-style: normal;

        font-weight: bold;

        font-size: 21px;

        line-height: 26px;

        letter-spacing: 0.02em;

        text-transform: uppercase;

    }

    

    a.overview-mob-link-sd.active h2{

        font-family: Lora;

        font-style: normal;

        font-weight: normal;

        font-size: 18px;

        line-height: 22px;

        color: #CD163F!important;

        border-bottom: 3px solid #CD163F;

        width: 75px;

        padding-bottom: 7px;

        margin-bottom: 0;

    }

    a.overview-mob-link-sd h2{

        font-family: Lora;

        font-style: normal;

        font-weight: normal;

        font-size: 18px;

        line-height: 22px;

        color: #111315!important;

        margin-bottom: 0;

        width: 100px;

    }

    .overview-menu-slider-sd{

        display:none;

    }

    .mobile-tab-hr-sd{

        display:none;

    }

    .left.overview-menues-sd {

        display: block;

    }

    a.view-all-sd {

        font-family: 'NeueHaasGroteskText-Regular';

        font-style: normal;

        font-weight: bold;

        font-size: 15px;

        line-height: 21px;

        letter-spacing: 0.02em;

        color: #CD163F;

        float: right;

        margin-top: 10px;

    }

    section.product-tab-section-sd, section.resources-sections-sd, section.slider-sections-sd, section.slider-sections.rel-serv-sd {

        padding: 60px 0px 0px;

    }

    section.service-sd-sec {

        margin: 60px 0px 0px;

    }

    .sd-banner-img {

        background: url('/wp-content/uploads/2021/02/blue-bgcat.png');

        width: 100%;

        height: 520px;

        background-size: cover;

        background-position: center;

        padding: 100px 0px;
        overflow: hidden;
        margin-top: -88px;

    }

    .sd-banner-img h1 {

        font-family: 'Lora';

        font-weight: normal;

        font-size: 60px;

        line-height: 72px;

        letter-spacing: -0.02em;

        color: #FFFFFF;
padding-top: 100px;
    }

    .sd-banner-img p {
            padding-top: 110px;

        font-family: 'NeueHaasGroteskText-Regular';

        font-style: normal;

        font-weight: normal;

        font-size: 20px;
            padding-right: 80px;

        line-height: 160%;

        color: #FFFFFF;

        text-align: justify;

    }

    .sd-banner-img .ad-banner-tect-col {

        max-width: 600px;

        width: 100%;

        margin-left: auto;

    }

    td.price-data-sd {

        text-align: right;

        font-family: 'NeueHaasGroteskText-Regular';

        font-style: normal;

        font-weight: normal;

        font-size: 20px;

        line-height: 32px;

        color: #111315;

        /*border: 0px!important;*/

        border-color: transparent;

        border-bottom: 1px solid #DEE1E2;

    }

    td.service-name-sd {

        font-family: 'NeueHaasGroteskText-Regular';

        font-style: normal;

        font-weight: 600;

        font-size: 20px;

        line-height: 32px;

        color: #111315;

        border-color: transparent;

        /*border: 0px!important;*/

        border-bottom: 1px solid #DEE1E2;

    }

    tr.pricing-row-sd {

        border-bottom: 1px solid #DEE1E2;

        border: none;

    }

    .sd-overview-ul li {

        font-family: 'NeueHaasGroteskText-Regular';

        font-style: normal;

        font-weight: 500;

        font-size: 20px;

        line-height: 32px;

        color: #111315;

        margin-top: 0;

    }

    ul.sd-overview-ul {

        margin: 30px;

    }

    .sd-overview-img{

        max-width:830px;

        width:100%;

    }

    /* @media quirires   */

    @media only screen and (min-width:320px) and (max-width:767px){

        h2.related-serv-heading-sd {

            font-style: normal;

            font-weight: normal;

            font-size: 29px;

            line-height: 41px;

            letter-spacing: -0.02em;

            color: #111315;

            border-bottom: 2px solid #0F75BB;

            padding-bottom: 10px;

            font-family: 'Lora';

            max-width: 100%;

        }

        .service-txt-div-sd {

            text-align: center;

            max-width: 100%;

            width: 100%;

            margin: auto;

            transform: translate(0%, 0%);

            height: auto;

            padding: 50px 0px;

        }

        section.service-sd-sec {

            background-position: 0% 0%;

            height: auto; 

        }

        .service-txt-div-sd h1 {

            margin-top: 0px;

            font-size: 36px;

            line-height: 43px;

        }

        .overview-menu-slider-sd{

            display:block;

            margin-top: 20px;

        }

        .mobile-tab-hr-sd{

            display:block;

        }

        .left.overview-menues-sd {

            display: none;

        }

        h2.producy-name-heading-sd {

            font-size: 44px;

            line-height: 53px;

            letter-spacing: -0.02em;

        }

        a.resource-btn-sd {

            font-size: 17px;

            line-height: 27px;

        }

        i.download-icon-sd {

            font-size: 17px;

            line-height: 27px;

        }

        .rel-serv-div-sd h2 {

            font-size: 25px;

            line-height: 30px;

        }

        .service-txt-div-sd p {

            font-size: 17px;

            line-height: 27px;

            margin-bottom: 20px;

        }

        .sd-banner-img h1 {

            color: #FFFFFF;

            font-size: 44px;

            line-height: 53px;

            margin-bottom: 20px;

        }

        .sd-banner-img p {

            font-size: 17px;

            line-height: 27px;

        }

        .sd-banner-img .ad-banner-tect-col {

            max-width: 100%;

            width: 100%;

            margin-left: auto;

        }

        p.overvie-sm-slider-txt-sd {

            font-style: normal;

            font-weight: normal;

            font-size: 17px;

            margin-top:0px;

        }

        ul.sd-overview-ul {

            margin: 10px;

        }

        .sd-overview-ul li {

            font-size: 17px;

            line-height: 27px;

        }

        td.service-name-sd {

            font-size: 17px;

            line-height: 27px;

        }

        td.price-data-sd {

            font-size: 17px;

            line-height: 27px;

        }

        .sd-overview-img{

            max-width:100%;

            width:100%;

        }

    }

    

</style>



<section class="sd-banner-sect">

    <div class="sd-banner-img">

        <div class="container">

            <div class="row">

                <div class="col-md-5">
                    <div id="detail-top-circle" data-aos="fade-up"
    data-aos-offset="150"
    data-aos-delay="40"
    data-aos-duration="2000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="bottom">
        
    </div>

                    <h1>Water Analysis</h1>
<div id="detail-topbottomcircle" data-aos="slide-right"
    data-aos-offset="150"
    data-aos-delay="40"
    data-aos-duration="2000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top">
        
    </div>
                </div>

                <div class="col-md-7 sd-banner-tect-col">

                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue.</p>
<div id="detail-bottomcircle" data-aos="slide-left"
    data-aos-offset="150"
    data-aos-delay="40"
    data-aos-duration="2000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top">

    </div>
                </div>

            </div>

        </div>

    </div>

</section>



<section class="overview-menu-slider-sd pt-0 pb-0">

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12">

                <div class="overview-slider-sd">

                    <div class="product-slider ">

                        <div class="product-slider__slider overview-link-sd">

                            <div class="product-slider__item overview-item-sd">

                                <div class="overview-link-div">

                                    <a class="overview-mob-link-sd active" href="#"><h2 class="" style="color:black;">Overview</h2></a>

                                </div>

                            </div>

                            <div class="product-slider__item overview-item-sd">

                                <div class="overview-link-div-sd">

                                    <a class="overview-mob-link-sd" href="#"><h2 class="" style="color:black;">Products</h2></a>

                                </div>

                            </div>

                            <div class="product-slider__item overview-item-sd">

                                <div class="overview-link-div-sd">

                                    <a class="overview-mob-link-sd" href="#"><h2 class="" style="color:black;">Resources</h2></a>

                                </div>

                            </div>

                            <div class="product-slider__item overview-item-sd">

                                <div class="overview-link-div-sd">

                                    <a class="overview-mob-link-sd" href="#"><h2 class="" style="color:black;">Applications</h2></a>

                                    

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>    

</section>

<hr class="mt-0 mb-0 mobile-tab-hr-sd">



<section class="product-tab-section-sd" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1500"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">

    <div class="container-fluid">

       <div class="row">

           <div class="col-md-12 col-sm-12 col-12">

               <div class="row">

                   <div class="col-md-2 col-sm-12 col-12">

                       <div class="main tabs-product-div-sd">

                            <div class="left overview-menues-sd">

                                <ul>

                                    <li class="active">

                                        <a class="link1 active" href="">Overview </a>

                                    </li>

                                    <li>

                                        <a class="link2" href="">Products</a>

                                    </li>

                                    <li>

                                        <a class="link3" href="">Resources</a>

                                    </li>

                                    <li>

                                        <a class="link3" href="">Applications</a>

                                    </li>

                                </ul>

                            </div>

                        </div>

                   </div>

                   <div class="col-md-10 col-sm-12 col-12">

                       <div class="main tabs-product-div-sd">

                            <div class="right-sd">

                                <img class="w-100 sd-overview-img mb-5" src="/wp-content/uploads/2021/01/Rectangle-95-2.png" >

                                <p class="overvie-sm-slider-txt-sd">

                                    Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>



                                <p class="overvie-sm-slider-txt-sd">

                                        One of the most sophisticated laboratories in the world for understanding and addressing your water challenges.</p>

                                <p class="overvie-sm-slider-txt-sd">        

                                        ResinTech® Lab Services can perform a complete analysis of your water sample. Our professional staff and state-of-the-art laboratory can provide a detailed report on your water’s composition including key metrics for:

                                </p>

                                

                                <ul class="sd-overview-ul">

                                    <li>

                                        Physical Characteristics

                                    </li>

                                    <li>

                                        Metals & Minerals

                                    </li>

                                    <li>

                                        Inorganics

                                    </li>

                                    <li>

                                        Radioactivity

                                    </li>

                                    <li>

                                        Perfluorinated Compounds (PFCs)

                                    </li>

                                    <li>

                                        Volatile Organic Compounds (VOCs)

                                    </li>

                                </ul>

                                <p class="overvie-sm-slider-txt-sd mt-5">

                                        If you desire, we can make recommendations about the most efficient and cost-effective media solution. We can even analyze influent used in membrane applications.

                                </p>

                            </div>

                        </div>

                   </div>

                   <div class="col-md-2 col-sm-12 col-12"></div>

               </div>

           </div>

       </div> 

    </div>

</section>



<section class="slider-sections rel-serv-sd" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-2"></div>

            <div class="col-md-10">

                <div class="related-slider sd">

                    <div class="product-slider">

                        <div class="product-slider__slider related sd">

                            <div class="product-slider__item related-item">

                                <div class="rel-serv-div-sd">

                                    <img class=" m-0" src="/wp-content/uploads/2021/01/Rectangle-99-15.png">

                                </div>

                            </div>

                            <div class="product-slider__item related-item">

                                <div class="rel-serv-div-sd">

                                    <img class=" m-0" src="/wp-content/uploads/2021/01/Rectangle-99-16.png">

                                </div>

                            </div>

                            <div class="product-slider__item related-item">

                                <div class="rel-serv-div-sd">

                                    <img class=" m-0" src="/wp-content/uploads/2021/01/Rectangle-99-17.png">

                                </div>

                            </div>

                        </div>

                    </div>

                    

                </div>

            </div>

        </div>

    </div>    

</section>



<section class="resources-sections-sd" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-2">

            </div>

            <div class="col-md-10">

                <h2 class="related-serv-heading-sd">Pricing</h2>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-2">

            </div>

            <div class="col-md-8 ">

                <div class="row pricing-main-row-sd">

                    <div class="col-md-12">

                        <table class="rricing-table-sd">

                            <tbody>

                                <tr class="pricing-row-sd">

                                    <td class="service-name-sd">

                                        Service

                                    </td>

                                    <td class="price-data-sd">

                                        $$$

                                    </td>

                                </tr>

                                <tr class="pricing-row-sd">

                                    <td class="service-name-sd">

                                        Service

                                    </td>

                                    <td class="price-data-sd">

                                        $$$

                                    </td>

                                </tr>

                                <tr class="pricing-row-sd">

                                    <td class="service-name-sd">

                                        Service

                                    </td>

                                    <td class="price-data-sd">

                                        $$$

                                    </td>

                                </tr>

                                <tr class="pricing-row-sd">

                                    <td class="service-name-sd">

                                        Service

                                    </td>

                                    <td class="price-data-sd">

                                        $$$

                                    </td>

                                </tr>

                                <tr class="pricing-row-sd">

                                    <td class="service-name-sd">

                                        Service

                                    </td>

                                    <td class="price-data-sd">

                                        $$$

                                    </td>

                                </tr>

                                <tr class="pricing-row-sd">

                                    <td class="service-name-sd">

                                        Service

                                    </td>

                                    <td class="price-data-sd">

                                        $$$

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <div class="col-md-2">

            </div>

        </div>

    </div>    

</section>



<section class="resources-sections-sd" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-2">

            </div>

            <div class="col-md-10">

                <h2 class="related-serv-heading-sd">Resources</h2>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-2">

            </div>

            <div class="col-md-8 ">

                <div class="row applicat-main-row">

                    <div class="col-md-6">

                        <div class="resource-div-sd"> 

                            <a class="resource-btn-sd" href="#"><i class="fas fa-download download-icon-sd"></i>Product Spec Sheet</a>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="resource-div-sd"> 

                            <a class="resource-btn-sd" href="#"><i class="fas fa-download download-icon-sd"></i>Product Spec Sheet</a>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="resource-div-sd"> 

                            <a class="resource-btn-sd" href="#"><i class="fas fa-download download-icon-sd"></i>Safety Data Sheet</a>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="resource-div-sd"> 

                            <a class="resource-btn-sd" href="#"><i class="fas fa-download download-icon-sd"></i>Safety Data Sheet</a>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="resource-div-sd"> 

                            <a class="resource-btn-sd" href="#"><i class="fas fa-download download-icon-sd"></i>Technical Data Sheets</a>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="resource-div-sd"> 

                            <a class="resource-btn-sd" href="#"><i class="fas fa-download download-icon-sd"></i>Technical Data Sheets</a>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="resource-div-sd"> 

                            <a class="resource-btn-sd" href="#"><i class="fas fa-download download-icon-sd"></i>System Manual</a>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="resource-div-sd"> 

                            <a class="resource-btn-sd" href="#"><i class="fas fa-download download-icon-sd"></i>System Manual</a>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-2">

            </div>

        </div>

    </div>    

</section>



<!-- <section class="service-sd-sec">

    <div class="container m-auto">

        <div class="row">

            <div class="col-md-12">

                <div class="service-txt-div-sd">

                    <h1 class="mb-3">Get expert advise</h1>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

                    <a class="ask-pdp-btn-sd" href="#">Ask an expert</a>

                </div>

            </div>

        </div>

    </div>

</section> -->

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





 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>

<script src="https://hydrolog.weblider24.pl/wp-content/themes/taco/js/js-sliderWithProgressbar.js"></script>



<script type="text/javascript">

    jQuery(".product-slider__slider.overview-link-sd").slick({

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

    jQuery(".product-slider__slider.related.sd").slick({

        infinite: false,

        arrows: false,

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







