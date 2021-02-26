<?php
    /* Template Name: pdp-page-template */ ?>
<?php get_header(); ?>
<section class="crumb">
        <div class="container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
<?php
if(function_exists('bcn_display'))
{
bcn_display();
}?>
 </div>
</div>
</section>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href='https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css'>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=dp46ucdledpfc9xxfkqnqq" async="true"></script>
<style>
    .wrapper p{
    color:#111315;
    }
    .Accordions {
    padding-top: 60px;
    padding-bottom: 60px;
    }
    .eccordion__tabs {
    max-width: 600px;
    list-style: none;
    }
    .eccordion__tab {
    width: 100%;
    }
    .eccordion__tab__headline {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid rgba(248, 248, 248, 0.5);
    transition: 0.2s ease all;
    padding: 20px 15px;
    cursor: pointer;
    font-weight: 400;
    }
    .eccordion__tab__headline:hover {
    background-color: #607bba;
    }
    .eccordion__tab__headline > h4 {
    user-select: none;
    text-transform: uppercase;
    margin: 0;
    }
    .eccordion__tab__headline .icon {
    display: inline-block;
    width: 22px;
    height: 22px;
    border: 1px solid;
    border-radius: 22px;
    position: relative;
    }
    .eccordion__tab__headline .icon::before {
    display: block;
    position: absolute;
    content: "";
    top: 10px;
    left: 6px;
    width: 10px;
    height: 2px;
    background: currentColor;
    }
    .eccordion__tab__headline .icon::after {
    display: block;
    position: absolute;
    content: "";
    top: 6px;
    left: 10px;
    width: 2px;
    height: 10px;
    background: currentColor;
    transition: 0.2s ease all;
    }
    .eccordion__tab__content {
    overflow: hidden;
    padding: 0px 15px;
    box-sizing: border-box;
    height: 100%;
    max-height: 0;
    transition: 0.4s ease all;
    }
    .eccordion__tab--open .eccordion__tab__headline .icon::after {
    transform: scaleY(0);
    }
  a:hover{
        text-decoration:none!important;
    }
   section.product-header-sec {
        padding-bottom: 59px;
    }
   h2.producy-name-heading {
        color: black;
        text-transform: uppercase;
        font-size: 45px;
        font-weight: 400;
        padding: 40px 0px 15px;
        border-bottom:1px solid #0e75ba;
        font-family: 'Lora';
    }
    img.thumbnail-p-img {
        width: 100%;
        padding: 20px 20px 20px 0px;
    }
    .row.product-row {
        margin-top: 35px;
    }
    .row.badge-row {
        border-left: 4px solid #0F75BB!important;
        border-radius: 4px;
        padding: 5px 15px;
        border: 1px solid #DEE1E2;
        box-sizing: border-box;
        width: 266px;
    }
    .row.badge-row p{
        font-family: 'Lora';
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 120%;
        color:black;
        padding: 0px 24px;
        margin-top: 15px;
        text-align:justify;
    }
    .product-description {
        WIDTH: 93%;
        margin-left: auto;
    }
    .detail-descr p {
        color: black;
        /*font-weight: 400;*/
        line-height: 32px;
        font-size: 20px;
        margin: 25px 0px;
        font-family: 'NeueHaasGroteskText-Regular';
    }
    a.see-detail-btn {
        display: block;
        color: #CD163F;
        text-transform: capitalize;
        font-style: normal;
        font-weight: bold;
        font-size: 15px;
        line-height: 140%;
        letter-spacing: 0.02em;
        line-height: 30px;
        font-family: 'NeueHaasGroteskText-Regular';
    }
    a.description-pro-btn {
        background: #CD163F;
        border-radius: 2px;
        padding: 14px 29px;
        margin: 20px 0px;
        color: white;
        text-align: center;
        font-style: normal;
        font-weight: bold;
        font-size: 15px;
        line-height: 140%;
        letter-spacing: 0.02em;
        font-family: 'NeueHaasGroteskText-Regular';
    }
     a.description-pro-btn.blue {
        background: #0D2C6C;
        margin-left: 20px;
    }
    .btns-description {
        margin: 40px 0px!important;
    }
    .description-last-p p{
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 160%;
        color:black;
        text-align:left;
        font-family: 'NeueHaasGroteskText-Regular';
    }
    h1.heading-question {
        font-style: normal;
        font-weight: normal;
        font-size: 41px;
        line-height: 57px;
        letter-spacing: -0.02em;
        color: black;
        font-family: 'Lora';
    }
    p.post-name {
        color: #0F75BB;
        font-style: normal;
        font-weight: bold;
        font-size: 14px;
        line-height: 22px;
        margin-bottom: 0;
        letter-spacing: -0.02em;
        font-family: 'NeueHaasGroteskText-Regular';
    }
    h3.name-heading {
        font-style: normal;
        font-weight: bold;
        font-size: 31px;
        line-height: 40px;
        color: #111315;
        font-family: 'NeueHaasGroteskDisp-Regular';
    }
    img.quest-prof-img {
        width: auto;
        margin: 0px 35px;
    }
    a.contact-client {
        font-style: normal;
        font-weight: bold;
        font-size: 15px;
        line-height: 21px;
        letter-spacing: 0.02em;
        color: #111315;
        padding-right: 50px;
        font-family: 'NeueHaasGroteskText-Regular';
    }
    .contact-icons {
        color: #CD163F;
        font-size: 15px;
        padding-right: 8px;
    }
    section.question-product-sec {
        padding: 50px 0px;
    }
    
    
    /* related sider css*/
        .product-slider {
        /*align-items: flex-start;*/
        /*background: #eee;*/
        /*display: flex;*/
        /*flex-flow: row wrap;*/
    
        @media (min-width: 768px) {
            /*flex-flow: row nowrap;*/
        }
    }
    
    .product-slider__category {
        padding: 20px;
        width: 100%;
    
        @media (min-width: 768px) {
            width: 35%;
        }
    }
    
    .product-slider__slider {
        width: 100%;
    
        @media (min-width: 768px) {
            width: 65%;
        }
    
        .slick-list {
            padding-right: 80px;
            position: relative;
        }
    }
    
    /*.product-slider__item {*/
    /*    display: inline-block;*/
    /*    padding: 20px;*/
    /*    text-align: center;*/
    
    /*    img {*/
    /*        border: 1px solid #000;*/
    /*        margin: 0 auto;*/
    /*    }*/
    
    /*    &:hover {*/
    /*        background: rgba(0, 0, 0, 0.15);*/
    /*    }*/
    /*}*/
    
    // Slick Styles
    .slick-arrow {
        background: #97cc55;
        border: 0;
        color: #fff;
        padding: 10px 15px;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1000;
    
        &.slick-prev {
            left: 0;
        }
    
        &.slick-next {
            right: 0;
        }
    
        &.slick-disabled {
            display: none !important; //overrides slick defaults
        }
    }

    /*.product-slider__slider.related .product-slider__item.related-item{*/
    /*    width: auto!important;*/
    /*} */
    .product-slider__slider.related.product .product-slider__item.related-item{
        width: auto!important;
    } 
    h2.related-serv-heading {
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
    .rel-serv-div h2{
        cursor: pointer;
        font-style: normal;
    font-weight: 400;
    font-size: 33px;
    font-family: 'Lora';
    line-height: 40px;
    letter-spacing: -0.02em;
    color: #111315;
    margin: 15px 0px;
    }
    .rel-serv-div h2:hover {
        color: #cc163f;
    }
    .rel-serv-div img{
        padding-right:15px;
        margin-top:30px!important;
    }
    .product-card-div {
        border: 1px solid #808284;
        border-radius: 5px;
        box-sizing: border-box;
        padding: 20px;
        margin-top: 30px!important;
        margin-right: 15px;
    }
    h4.product-head {
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
    }
    table.card-table {
        margin: 0;
        margin-top:5px;
        border-color: transparent!important;
       border: 0px!important;
    }
    table.card-table tbody{
       border-color: transparent!important;
       border: 0px!important;
    }
    table.card-table td{
        border: 0px!important;
        border-color: transparent!important;
    }
    table.card-table tr{
        border-bottom: 1px solid #DEE1E2 !important;
    }
    table.card-table tr:last-child{
        border-bottom: 0px solid #DEE1E2 !important;
    }
    td.heading-prod-td {
        font-style: normal;
        font-weight: bold;
        font-size: 14px;
        line-height: 22px;
        color: #111315;
        padding: 0;
    }
    td.simple-prod-td {
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 22px;
        text-align: right;
        color: #58595B;
    }
    a.application-btn {
        margin-top: 20px!important;
        font-style: normal;
        font-weight: bold;
        font-size: 20px;
        line-height: 32px;
        text-align: center;
        color: #000000;
        text-decoration: none;
        background: #F2F7FF;
        border-radius: 5px;
        padding: 20px 15px;
        width: 100%;
        max-width: 100%;
        margin: auto;
        display: block;
        font-family: 'NeueHaasGroteskText-Regular';
    }
    .related-app-div {
        width: 100%;
        max-width: 100%;
        position: relative;
    }
    .applicat-main-row {
        margin: 20px 0px;
    }
    a.resource-btn {
        font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 32px;
    color: #111315;
    text-align: left;
    font-family: 'NeueHaasGroteskDisp-Bold';
    }
    i.download-icon {
        color: #CD163F;
        font-style: normal;
        font-weight: bold;
        font-size: 20px;
        line-height: 32px;
        padding-right: 15px;
    }
    .resource-div {
        margin: 10px 0px;
    }
    
    
    
 /*   .panel-group .panel {*/
    /*  border-radius: 0;*/
    /*  box-shadow: none;*/
    /*  border-color: #EEEEEE;*/
    /*}*/

    /*.panel-default > .panel-heading {*/
    /*  padding: 0;*/
    /*  border-radius: 0;*/
    /*  color: #212121;*/
    /*  background-color: #FAFAFA;*/
    /*  border-color: #EEEEEE;*/
    /*}*/

    /*.panel-title {*/
    /*  font-size: 14px;*/
    /*}*/

    /*.panel-title > a {*/
    /*  display: block;*/
    /*  padding: 15px;*/
    /*  text-decoration: none;*/
    /*}*/

    i.more-less.fas.fa-plus {
        float: right;
        border: 1px solid #CD163F;
        border-radius: 50%;
        padding: 6px;
        font-size: 13px;
        color: #CD163F;
        font-weight: 600;
        position: absolute;
        right: -5px;
        top: 40%;
    }
    i.more-less.fa-minus.fas{
        float: right;
        border: 1px solid #CD163F;
        border-radius: 50%;
        padding: 6px;
        font-size: 13px;
        color: #CD163F;
        font-weight: 600;
        position: absolute;
        right: -5px;;
        top: 40%;
    }
    h4.panel-title.faq-heading-acc a {
        font-style: normal;
        font-weight: bold;
        font-size: 26px;
        line-height: 34px;
        letter-spacing: 0.01em;
        color: #111315;
        font-family: 'NeueHaasGroteskDisp-Regular';
    }
    div.panel-heading.faq-heading-tab {
        padding: 20px 0px;
        position:relative;
    }
    /*.panel-default > .panel-heading + .panel-collapse > .panel-body {*/
    /*  border-top-color: #EEEEEE;*/
    /*}*/

/* tabs css   */




    .main.tabs-product-div {
      width: 100%;
      margin: 0 auto;
    }
    .left.overview-menues ul li a {
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
    .left.overview-menues ul li a.active {
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 22px;
        color: #ce153f;
        text-align: left;
        text-decoration: none;
        padding-left: 30px;
    }
    .left.overview-menues ul {
        list-style: none;
        margin: 0;
        position:relative;
    }
    .left.overview-menues ul li.active:before {
        content: '';
        width: 30px;
        height: 2px;
        padding: a;
        left: 0;
        position: absolute;
        top: 17px;
        background: #ce153f;
    }
    .left.overview-menues ul li:before {
        content: '';
        width: 30px;
        height: 2px;
        padding: a;
        left: 0;
        position: absolute;
        top: 17px;
        background: transparent;
    }
    .left.overview-menues ul li {
        padding: 6px 0px;
    }
    a.prod-sku-btn.active {
        margin: 0px 5px;
        background: #0D2C6C;
        color: white;
        padding: 5px 20px;
        border-radius: 30px;
        border: 1px solid #0D2C6C;
        text-transform: uppercase;
        letter-spacing: 0.02em;
        font-size: 13px;
        font-family: 'NeueHaasGroteskText-Regular';
    }
    a.prod-sku-btn.active:hover {
        margin: 0px 5px;
        background: transparent;
        color: #0D2C6C;
        padding: 5px 20px;
        border-radius: 30px;
        border: 1px solid #0D2C6C;
        text-transform: uppercase;
        letter-spacing: 0.02em;
        font-size: 13px;
        font-family: 'NeueHaasGroteskText-Regular';
    }
    a.prod-sku-btn:hover {
        margin: 0px 5px;
        background: #0D2C6C;
        color: white;
        padding: 5px 20px;
        border-radius: 30px;
        border: 1px solid #0D2C6C;
        text-transform: uppercase;
        letter-spacing: 0.02em;
        font-size: 13px;
    }
    a.prod-sku-btn {
        margin: 0px 5px;
        background: transparent;
        color: #0D2C6C;
        padding: 5px 20px;
        border-radius: 30px;
        border: 1px solid #0D2C6C;
        text-transform: uppercase;
        letter-spacing: 0.02em;
        font-size: 13px;
    }
    h2.product-heading-in-sku {
        font-style: normal;
        font-weight: normal;
        font-size: 22px;
        line-height: 31px;
        letter-spacing: -0.02em;
        color: #000000;
        text-align: left;
        margin: 20px 0px 10px 0px;
        font-family: 'Lora';
    }
    .sku-product-table table {
        border: 0px;
        border-color: transparent;
    }
    .sku-product-table table tbody tr {
        border: 0px;
        border-color: transparent;
    }
    .sku-product-table table tbody tr td{
        border: 0px;
        border-color: transparent;
        border-bottom: 1px solid #DEE1E2;
        font-size: 15px;
        font-style: normal;
        font-family: 'NeueHaasGroteskText-Regular';
    }
    .sku-product-table table tbody tr td:first-child{
        border: 0px;
        border-color: transparent;
        border-bottom: 1px solid #DEE1E2;
        width: 32%;
        font-weight: bold;
        letter-spacing: 0.02em;
        text-transform: capitalize;
        font-size: 15px;
        font-style: normal;
        font-family: 'NeueHaasGroteskText-Regular';
    }
    section.service-pdp-sec {
        background: url(/wp-content/uploads/2021/01/circle.png);
        width: 100%;
        background-position: center;
        background-size: cover;
        height: 360px;
    }
    .service-txt-div {
        text-align: center;
        max-width:651px;
        width:100%;
        margin:auto;
        transform: translate(0% , 40%);
    }
    .service-txt-div h1 {
        font-style: normal;
        font-weight: normal;
        font-size: 50px;
        line-height: 65px;
        text-align: center;
        letter-spacing: -0.02em;
        color: #FFFFFF;
    }
    .service-txt-div p{
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 32px;
        text-align: center;
        color: #FFFFFF;
    }
    .service-txt-div a.ask-pdp-btn {
        font-style: normal;
        font-weight: normal;
        font-size: 22px;
        line-height: 31px;
        letter-spacing: -0.02em;
        color: #FFFFFF;
        padding: 10px 0px;
        border-bottom: 1px solid red;
    }
    p.overvie-sm-slider-txt {
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 32px;
        color: #111315;
        margin: 50px 0px;
        max-width:830px;
        width:100%;
        font-family: 'NeueHaasGroteskText-Regular';
    }
    .product-slider__item.overview-items.slick-slide.slick-current.slick-active p {
        display: block;
    }
    .product-slider__item.overview-items.slick-slide p {
        display: none;
    }
    .nxt-prev-btn {
        color: #CD163F;
        font-style: normal;
        font-weight: bold;
        font-size: 21px;
        line-height: 26px;
        letter-spacing: 0.02em;
        text-transform: uppercase;
        /*position: absolute;*/
        /*right: 230px;*/
        /*top: -40px;*/
    }
    /*section.slider-sections {*/
    /*    position: relative;*/
    /*}*/
    /*button.slick-arrows-btn {*/
    /*    position: absolute;*/
    /*    top: 0;*/
    /*    right: 0;*/
    /*}*/
    section.faq-sections {
        padding-bottom: 90px;
    }
    section.application-sections {
        padding: 30px 0px 80px;
    }
     section.slider-sections.rel-serv {
        padding: 80px 0px;
    }   
    a.overview-mob-link.active h2{
        font-family: Lora;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 22px;
        color: #CD163F!important;
        border-bottom: 3px solid #CD163F;
        width: 70px;
        padding-bottom: 7px;
        margin-bottom: 0;
    }
    a.overview-mob-link h2{
        font-family: Lora;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 22px;
        color: #111315!important;
        margin-bottom: 0;
    }
    .overview-menu-slider{
        display:none;
    }
    .mobile-tab-hr{
        display:none;
    }
    .left.overview-menues {
        display: block;
    }
    button.slick-prev.slick-arrows-btn.slick-arrow.slick-disabled {
        position: absolute;
        top: -50px;
        left: 65%;
    }
    section.slider-sectionsone button.slick-next.slick-arrows-btn.slick-arrow {
        top: -30px;
        left: 70%;
        position: absolute;
    }
    button.slick-prev.slick-arrows-btn-serv.slick-arrow.slick-disabled {
        position: absolute;
        top: -30px;
        left: 72%;
    }
    button.slick-next.slick-arrows-btn-serv.slick-arrow {
        top: -30px;
        left: 75%;
        position: absolute;
    }
    a.view-all {
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
    .product-card-div:hover {
        color: #cc163f;
        cursor: pointer;
    }
    /* @media quirires   */
    @media only screen and (min-width:320px) and (max-width:767px){
        img.thumbnail-p-img {
            padding: 20px 10px 20px 0px;
        }
        .product-description {
            WIDTH: 100%;
            margin-top: 30px;
            text-align: left;
        }
        a.description-pro-btn {
            padding: 10px 20px;
            font-size: 15px;
            line-height: 21px;
        }
        h1.heading-question {
            font-size: 29px;
            line-height: 41px;
            text-align: center;
            letter-spacing: -0.02em;
            max-width: 275px;
            margin: auto;
            width: 100%;
        }
        .product-desc-col {
            text-align: center;
        }
        img.quest-prof-img {
            width: 50%;
            margin: 40px auto;
        }
        a.contact-client {
            text-align: center;
            width: 100%;
            display: block;
            padding-right: 0px;
            margin-top: 15px;
            font-size: 15px;
            line-height: 21px;
        }
        .detail-descr p {
            text-align: left;
            font-size: 17px;
            line-height: 27px;
        }
        .client-detail-specialist {
            width: 100%;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        h2.related-serv-heading {
            font-style: normal;
            font-weight: normal;
            font-size: 29px;
            line-height: 41px;
            letter-spacing: -0.02em;
            color: #111315;
            border-bottom: 2px solid #0F75BB;
            padding-bottom: 10px;
            font-family: 'Lora';
            max-width:80%;
            width:100%;
            margin:unset;
        }
        .sku-row{
            display: none;
            font-family: 'Lora';
        }
        h2.product-heading-in-sku {
            display: none;
            font-family: 'Lora';
        }
        .service-txt-div {
            text-align: center;
            max-width: 100%;
            width: 100%;
            margin: auto;
            transform: unset;
        }
        section.service-pdp-sec {
            background-position: 0% 0%;
            height: auto; 
        }
        .service-txt-div h1 {
            margin-top: 20px;
            font-size: 36px;
            line-height: 43px;
        }
        .overview-menu-slider{
            display:block;
        }
        .mobile-tab-hr{
            display:block;
        }
        .left.overview-menues {
            display: none;
        }
        h2.producy-name-heading {
            font-size: 44px;
            line-height: 53px;
            letter-spacing: -0.02em;
        }
        .product-thumbnail-pdp {
            display: none!important;
        }
        a.see-detail-btn {
            font-size: 15px;
            line-height: 21px;
        }
        section.question-product-sec {
            padding: 25px 0px;
        }
        h3.name-heading {
            font-size: 23px;
            line-height: 30px;
            margin-bottom: 29px;
        }
        .product-slider__item.overview-items.slick-slide.slick-current.slick-active p {
            font-size: 17px;
            line-height: 27px;
        }
        h4.panel-title.faq-heading-acc a {
            font-size: 16px;
            line-height: 21px;
        }
        i.more-less.fas.fa-plus {
            padding: 2px;
            font-size: 16px;
            right: 0px;
            top: 40%;
        }
        i.more-less.fa-minus.fas{
            padding: 2px;
            font-size: 16px;
            right: 0px;
            top: 40%;
        }
        a.resource-btn {
            font-size: 17px;
            line-height: 27px;
        }
        i.download-icon {
            font-size: 17px;
            line-height: 27px;
        }
        a.application-btn {
            font-size: 17px;
            line-height: 27px;
        }
        .rel-serv-div h2 {
            font-size: 25px;
            line-height: 30px;
        }
        .service-txt-div p {
            font-size: 17px;
            line-height: 27px;
            margin-bottom: 20px;
        }
        .sku-product-table table tbody tr {
            border-bottom: 1px solid #DEE1E2;
            border-color: #DEE1E2;
        }
        .sku-product-table table tbody tr td {
            border: 0px;
            border-color: transparent;
            border-bottom: none!important;
            display: block;
            padding: 0px 0px 12px;
        }
        .sku-product-table table tbody tr td:first-child {
            border: none;
            border-color: transparent;
            border-bottom: none!important;
            width: 100%;
            display:block;
            padding: 12px 0px 0px;
        }
        a.description-pro-btn.blue {
            background: #0D2C6C;
            margin-left: 10px;
        }
    }
    
</style>
<?php if (have_posts()) : while (have_posts()) : the_post();
    ?>
<?php $img_id = wc_get_product( get_the_ID() )->gallery_image_ids;
    //echo '<pre>';print_r($img_id);
    ?>
<?php $ids = wc_get_related_products( get_the_ID() );
    $product = wc_get_product(get_the_ID());
    //$variations = $product->get_available_variations();
    //echo '<pre>';print_r($product->attributes);
        ?>
<section class="product-header-sec">
    <div class="container m-auto">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12 " >
                <h2 class="producy-name-heading"><?php the_title() ?></h2>
            </div>
        </div>
        <div class="row product-row">
            <div class="col-md-6 col-sm-6 col-12">
                <div id="product__slider">
                    <div class="product__slider-main">
                        <?php foreach ($img_id as $key => $id) { ?>
                        <div class="slide">
                            <img src="<?php echo wp_get_attachment_url( $id );?>" class="product-main-img">
                        </div>
                        <?php } ?>
                    </div>
                    <div class="product__slider-thmb product-thumbnail-pdp">
                        <?php foreach ($img_id as $key => $id) { ?>
                        <div class="slide">
                            <img src="<?php echo wp_get_attachment_url( $id );?>" alt="" class="thumbnail-p-img">
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12 product-desc-col" data-aos="fade-up"
    data-aos-offset="30"
    data-aos-delay="10"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
                <div class="product-description">
                    <div class="row badge-row ml-0">
                        <img class="medal-img" src="/wp-content/uploads/2021/01/wqa-gs1-2.png">
                        <p>WQA Gold <br> Seal Certified</p>
                    </div>
                    <div class="detail-descr">
                        <p>
                            <?php the_excerpt(); ?>
                            <a class="see-detail-btn" href="#_pro_details">see Details</a>
                        </p>
                    </div>
                    <div class="btns-description">
                        <a class="description-pro-btn" href="#">Order a sample</a>
                        <a class="description-pro-btn blue" href="#">Get a quote</a>
                    </div>
                    <div class="description-last-p">
                        <p>
                            <?php echo get_field('sample_details', get_the_ID());?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section class="question-product-sec" data-aos="fade-up"
    data-aos-offset="60"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
    <div class="container">
        <div class="row question-row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <h1 class="heading-question">Have questions about this product?</h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-desc-col">
                <div class="row">
                    <img class="quest-prof-img" src="/wp-content/uploads/2021/01/Ellipse-56.png">
                    <div class="client-detail-specialist">
                        <p class="post-name"><?php echo get_field('have_questions', get_the_ID())['designation'];?></p>
                        <h3 class="name-heading"><?php echo get_field('have_questions', get_the_ID())['name'];?></h3>
                        <a class="contact-client" href="tel:<?php echo get_field('have_questions', get_the_ID())['contact_number'];?>"><i class="fas fa-phone-alt contact-icons"></i><?php echo get_field('have_questions', get_the_ID())['contact_number'];?></a>
                        <a class="contact-client" href="mailto:<?php echo get_field('have_questions', get_the_ID())['email_address'];?>"><i class="fas fa-envelope contact-icons"></i> <?php echo get_field('have_questions', get_the_ID())['email_address'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section class="overview-menu-slider pt-0 pb-0" data-aos="fade-up"
    data-aos-offset="60"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-slider">
                    <div class="product-slider ">
                        <div class="product-slider__slider overview-link">
                            <div class="product-slider__item overview-item">
                                <div class="overview-link-div">
                                    <a class="overview-mob-link active" href="#_pro_details">
                                        <h2 class="" style="color:black;">Overview</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="product-slider__item overview-item">
                                <div class="overview-link-div">
                                    <a class="overview-mob-link" href="#_properties">
                                        <h2 class="" style="color:black;">Properties</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="product-slider__item overview-item">
                                <div class="overview-link-div">
                                    <a class="overview-mob-link" href="#_faqs">
                                        <h2 class="" style="color:black;">FAQS</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="product-slider__item overview-item">
                                <div class="overview-link-div">
                                    <a class="overview-mob-link" href="#_resources">
                                        <h2 class="" style="color:black;">Resources</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="product-slider__item overview-item">
                                <div class="overview-link-div">
                                    <a class="overview-mob-link" href="#_applications">
                                        <h2 class="" style="color:black;">Applications</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="product-slider__item overview-item">
                                <div class="overview-link-div">
                                    <a class="overview-mob-link" href="#_products">
                                        <h2 class="" style="color:black;">Products</h2>
                                    </a>
                                </div>
                            </div>
                            <div class="product-slider__item overview-item">
                                <div class="overview-link-div">
                                    <a class="overview-mob-link" href="#_services">
                                        <h2 class="" style="color:black;">Services</h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="mt-0 mb-0 mobile-tab-hr">
<section class="product-tab-section" data-aos="fade-up"
    data-aos-offset="60"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-md-2 col-sm-12 col-12">
                        <div class="main tabs-product-div">
                            <div class="left overview-menues">
                                <ul>
                                    <li class="active">
                                        <a class="link1 active" href="#_pro_details">Overview </a>
                                    </li>
                                    <li>
                                        <a class="link2" href="#_properties">Properties</a>
                                    </li>
                                    <li>
                                        <a class="link3" href="#_faqs">FAQS</a>
                                    </li>
                                    <li>
                                        <a class="link3" href="#_resources">Resources</a>
                                    </li>
                                    <li>
                                        <a class="link3" href="#_applications">Applications</a>
                                    </li>
                                    <li>
                                        <a class="link3" href="#_products">Products</a>
                                    </li>
                                    <li>
                                        <a class="link3" href="#_services">Services</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-12 col-12" data-aos="fade-up"
    data-aos-offset="60"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
                        <div class="main tabs-product-div">
                            <div class="right">
                                <div class="related-slider">
                                    <div class="product-slider ">
                                        <div class="product-slider__slider overview-slider">
                                            <?php foreach (get_field('image_gallery', get_the_ID()) as $key => $value): ?>
                                                <div class="product-slider__item overview-items ">
                                                    <div class="rel-serv-div">
                                                        <img class="w-sliderimg" src="<?php echo $value['image'];?>">
                                                        <p class="overvie-sm-slider-txt">
                                                        </p>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                            <!-- <?php foreach ($img_id as $key => $id) { ?>
                                            <div class="product-slider__item overview-items ">
                                                <div class="rel-serv-div">
                                                    <img class="w-100 " src="<?php echo wp_get_attachment_url( $id );?>">
                                                    <p class="overvie-sm-slider-txt">
                                                    </p>
                                                </div>
                                            </div>
                                            <?php } ?> -->
                                        </div>
                                    </div>
                                </div>
                                <p class="overvie-sm-slider-txt" id="_pro_details">
                                    <?php echo get_the_content();?>
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
<?php endwhile;wp_reset_postdata();  ?>
<?php endif; ?>
<section class="product-properties-sections" id="_properties" data-aos="fade-up"
    data-aos-offset="60"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 col-sm-12 col-12">
                <h2 class="related-serv-heading">Typical Properties</h2>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 col-sm-12 col-12">
                <h2 class="product-heading-in-sku">Products</h2>
                <?php
                    $variations = $product->get_available_variations();
                    /*$variations_id = wp_list_pluck( $variations, 'variation_id' );
                    //$variation = new WC_Product_Variation($variations_id[0]);
                    $ids = implode(" , ", $variations_id);
                    $var_id = explode(" , ", $ids);
                    //print_r($var_id);
                    foreach ($var_id as $value) {
                      //echo $value."<br>";
                       $variation = new WC_Product_Variation($value);
                       $variationName = implode(" , ", $variation->get_variation_attributes());
                       
                       $vr[] = $variation->get_variation_attributes();
                    }
                    $var_name = explode(" , ", $variationName);*/
                    
                       
                    ?>
                <div class="row sku-row justify-content-center">
                    <?php foreach ($variations as $key => $value): ?>
                        <a class="prod-sku-btn <?php if($key == 0){ ?>active <?php } ?> attr_chng" href="javascript:void(0);" id="<?php echo $value['attributes']['attribute_pa_a-10-xxxx'];?>"><?php echo $value['attributes']['attribute_pa_a-10-xxxx'];?></a>
                    <?php endforeach ?>                    
                </div>
                <?php foreach ($variations as $key => $value): 
                    $variation_id = $value['variation_id'];
                    ?>
                    <div class="attr_display sku-product-table <?php echo $value['attributes']['attribute_pa_a-10-xxxx'];?>" style="display: <?php if($key == 0){?> block <?php }else{ ?> none <?php } ?>;">
                        <table>
                            <tbody>
                                <tr>
                                    <td>SKU</td>
                                    <td><?php print_r($value['sku']); ?></td>
                                </tr>
                                <tr>
                                    <td>Product name</td>
                                    <td><?php print_r(get_post_meta( $variation_id, '_product_name', true)); ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td style="text-transform: capitalize;"><?php print_r(get_post_meta( $variation_id, '_pro_status', true)); ?></td>
                                </tr>
                                <tr>
                                    <td>Cartridge Type</td>
                                    <td><?php print_r(get_post_meta( $variation_id, '_cartridge_type', true)); ?></td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td><?php print_r(strip_tags($value['variation_description'])); ?></td>
                                </tr>
                                <tr>
                                    <td>PROP 65 Compliant</td>
                                    <td><?php if(get_post_meta( $variation_id, '_prop_compliant', true) == 1){ print_r('True');}else{ print_r('False');} ?></td>
                                </tr>
                                <tr>
                                    <td>Max. Flow</td>
                                    <td><?php if(empty(get_post_meta( $variation_id, '_max_flow', true))){echo 'n/a';}else{ print_r(get_post_meta( $variation_id, '_max_flow', true)); } ?></td>
                                </tr>
                                <tr>
                                    <td>Master pack height (in)</td>
                                    <td><?php print_r($value['dimensions']['height']); ?></td>
                                </tr>
                                <tr>
                                    <td>Master pack length (in)</td>
                                    <td><?php print_r($value['dimensions']['length']); ?></td>
                                </tr>
                                <tr>
                                    <td>Housing Compatability</td>
                                    <td><?php print_r(get_post_meta( $variation_id, '_housing_compatability', true)); ?></td>
                                </tr>
                                <tr>
                                    <td>Unit Price (USD)</td>
                                    <td><?php print_r($value['price_html']); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
</section>
<section class="faq-sections" id="_faqs" data-aos="fade-up"
    data-aos-offset="60"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <h2 class="related-serv-heading">FAQS</h2>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <section class="Accordions">
                    <ul class="Accordion__tabs">
                        <?php   $faqs = get_field('default-faqs');
                            $i=1;  
                            foreach ($faqs as $value) {
                            ?>
                        <li class="eccordion__tab" onclick="toggleAccordion(this)">
                            <div class="eccordion__tab__headline">
                                <h4><?php echo $value['question']; ?></h4>
                                <span class="icon"></span>
                            </div>
                            <div class="eccordion__tab__content">
                                <div class="wrapper">
                                    <p><?php echo $value['answerss']; ?>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </section>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
</section>
<section class="resources-sections" id="_resources" data-aos="fade-up"
    data-aos-offset="60"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <h2 class="related-serv-heading">Resources</h2>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 pl-0">
                <div class="row applicat-main-row">
                    <?php foreach (get_field('resources', get_the_ID()) as $key => $value): ?>
                        <div class="col-md-6">
                            <div class="resource-div"> 
                                <a class="resource-btn" href="<?php print_r(get_field( "file", $value['resource']->ID ));?>"><i class="fas fa-download download-icon"></i><?php print_r($value['resource']->post_title);?></a>
                            </div>
                        </div>
                    <?php endforeach ?>
                    <!-- <div class="col-md-6">
                        <div class="resource-div"> 
                            <a class="resource-btn" href="#"><i class="fas fa-download download-icon"></i>Ammonium Removal</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="resource-div"> 
                            <a class="resource-btn" href="#"><i class="fas fa-download download-icon"></i>Product Spec Sheet</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="resource-div"> 
                            <a class="resource-btn" href="#"><i class="fas fa-download download-icon"></i>Safety Data Sheet</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="resource-div"> 
                            <a class="resource-btn" href="#"><i class="fas fa-download download-icon"></i>Safety Data Sheet</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="resource-div"> 
                            <a class="resource-btn" href="#"><i class="fas fa-download download-icon"></i>Technical Data Sheets</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="resource-div"> 
                            <a class="resource-btn" href="#"><i class="fas fa-download download-icon"></i>Technical Data Sheets</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="resource-div"> 
                            <a class="resource-btn" href="#"><i class="fas fa-download download-icon"></i>System Manual</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="resource-div"> 
                            <a class="resource-btn" href="#"><i class="fas fa-download download-icon"></i>System Manual</a>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
</section>
<section class="application-sections" id="_applications" data-aos="fade-up"
    data-aos-offset="60"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <h2 class="related-serv-heading">Related Applications</h2>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="row applicat-main-row">

                    <?php foreach (get_field('applications', get_the_ID()) as $key => $value): 
                        ?>
                        <div class="col-md-6">
                            <div class="related-app-div"> 
                                <a class="application-btn" href="/application-category/?tid=<?php echo base64_encode($value->term_id);?>"><?php echo $value->name; ?></a>
                            </div>
                        </div>
                    <?php endforeach ?>
                    <!-- <div class="col-md-6">
                        <div class="related-app-div"> 
                            <a class="application-btn" href="#">Ammonium Removal</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="related-app-div"> 
                            <a class="application-btn" href="#">Antimony Removal</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="related-app-div"> 
                            <a class="application-btn" href="#">Arsenic Removal</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="related-app-div"> 
                            <a class="application-btn" href="#">Boron Removal</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="related-app-div"> 
                            <a class="application-btn" href="#">Brine Softening</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="related-app-div"> 
                            <a class="application-btn" href="#">Bromide Removal</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="related-app-div"> 
                            <a class="application-btn" href="#">Cesium Removal</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="related-app-div"> 
                            <a class="application-btn" href="#">Cobalt Removal</a>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
</section>
<section class="slider-sections" id="_products" data-aos="fade-up"
    data-aos-offset="60"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="related-slider">
                    <div class="product-slider">
                        <h2 class="related-serv-heading">Related Products <a class="view-all" href="#">View all</a></h2>
                        <div class="related-product-slider">
                            <?php 
                                $args = array(
                                    'post_type' => 'product',
                                    'post__in'=> $p_ids
                                );
                                $loops = new WP_Query( $args );
                                // echo '<pre>';
                                // print_r($loops);
                                if ( $loops->have_posts() ):
                                    while ( $loops->have_posts() ): $loops->the_post();
                                        ?>               
                            <div class="product-slider__item related-item">
                                <div class="product-card-div">
                                    <img class="product-img" src="/wp-content/uploads/2021/01/Rectangle-118.png">
                                    <h4 class="product-head"><?php the_title(); ?></h4>
                                    <table class="card-table">
                                        <tbody>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <?php
                                endwhile; wp_reset_postdata(); 
                                endif; 
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="slider-sections rel-serviceone" id="_services" data-aos="fade-up"
    data-aos-offset="60"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="related-slider ad">
                    <div class="product-slider">
                        <h2 class="related-serv-heading">Related Services </h2>
                        <div class="product-slider__slider related ad">
                            <?php foreach (get_field('services', get_the_ID()) as $key => $value): 
                                $img_id = "services_category_".$value->term_id;
                                ?>                                
                                <div class="product-slider__item related-item">
                                    <div class="rel-serv-div">
                                       <div class="mtseries"> <a href="/service-category/?tid=<?php echo base64_encode($value->term_id);?>"><img class="m-20" src="<?php  echo get_field( 'image', $img_id );?>"></div>
                                        <h2><?php echo $value->name; ?></h2></a>
                                    </div>
                                </div>
                            <?php endforeach ?>
                            <!-- <div class="product-slider__item related-item">
                                <div class="rel-serv-div">
                                    <img class=" m-0" src="/wp-content/uploads/2020/12/Rectangle-99-6.png">
                                    <h2>Lab Services</h2>
                                </div>
                            </div>
                            <div class="product-slider__item related-item">
                                <div class="rel-serv-div">
                                    <img class=" m-0" src="/wp-content/uploads/2020/12/Rectangle-99-1.png">
                                    <h2>Resin Regeneration</h2>
                                </div>
                            </div>
                            <div class="product-slider__item related-item">
                                <div class="rel-serv-div">
                                    <img class=" m-0" src="/wp-content/uploads/2020/12/Rectangle-99-2.png">
                                    <h2>RO Membrane Restoration</h2>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- </section>
<section class="service-pdp-sec">
    <div class="container m-auto">
        <div class="row">
            <div class="col-md-12">
                <div class="service-txt-div">
                    <h1 class="mb-3">Get expert advise</h1>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <a class="ask-pdp-btn" href="#">Ask an expert</a>
                </div>
            </div>
        </div>
    </div>
</section>

 -->
 <section class="service-ad-sec" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="center">

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
    jQuery(".product-slider__slider.overview-link").slick({
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
    jQuery(".product-slider__slider.overview-slider").slick({
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
                    slidesToShow: 1.25
                }
            },
            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 1.15
                }
            },
            {
                breakpoint: 475,
                settings: {
                    slidesToShow: 1.15
                }
            }
        ]
    });
</script>
<script type="text/javascript">
    if ( jQuery('.product__slider-main').length ) {
        var jQueryslider = jQuery('.product__slider-main')
            .on('init', function(slick) {
                jQuery('.product__slider-main').fadeIn(1000);
            })
            .slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                autoplay: true,
                lazyLoad: 'ondemand',
                autoplaySpeed: 3000,
                asNavFor: '.product__slider-thmb'
            });
    var jQueryslider2 = jQuery('.product__slider-thmb')
            .on('init', function(slick) {
                jQuery('.product__slider-thmb').fadeIn(1000);
            })
            .slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                lazyLoad: 'ondemand',
                asNavFor: '.product__slider-main',
                dots: false,
                centerMode: false,
                focusOnSelect: true
            });
    //remove active class from all thumbnail slides
    jQuery('.product__slider-thmb .slick-slide').removeClass('slick-active');
    //set active class to first thumbnail slides
    jQuery('.product__slider-thmb .slick-slide').eq(0).addClass('slick-active');
     // On before slide change match active thumbnail to current slide
    jQuery('.product__slider-main').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        var mySlideNumber = nextSlide;
      jQuery('.product__slider-thmb .slick-slide').removeClass('slick-active');
        jQuery('.product__slider-thmb .slick-slide').eq(mySlideNumber).addClass('slick-active');
    });
      
      
      // init slider
    require(['js-sliderWithProgressbar'], function(slider) {
        jQuery('.product__slider-main').each(function() {
            me.slider = new slider($(this), options, sliderOptions, previewSliderOptions);
            // stop slider
            //me.slider.stop();
            // start slider
            //me.slider.start(index);
            // get reference to slick slider
            //me.slider.getSlick();
        });
    });
    var options = {
        progressbarSelector    : '.bJS_progressbar'
        , slideSelector        : '.bJS_slider'
        , previewSlideSelector : '.bJS_previewSlider'
        , progressInterval     : ''
            // add your own progressbar animation function to sync it i.e. with a video
            // function will be called if the current preview slider item (".b_previewItem") has the data-customprogressbar="true" property set
        , onCustomProgressbar : function($slide, $progressbar) {}
    }
        // slick slider options
        // see: https://kenwheeler.github.io/slick/
        var sliderOptions = {
            slidesToShow   : 1,
            slidesToScroll : 1,
            arrows         : true,
            fade           : true,
            autoplay       : true
        }
            // slick slider options
            // see: https://kenwheeler.github.io/slick/
        var previewSliderOptions = {
            slidesToShow   : 3,
            slidesToScroll : 1,
            dots           : false,
            focusOnSelect  : true,
            centerMode     : true
        }
    }
</script>
<script type="text/javascript">
    jQuery(".related-product-slider").slick({
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
    /*******************************
    * ACCORDION WITH TOGGLE ICONS
    *******************************/
    function toggleIcon(e) {
        jQuery(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('fas fa-minus fas fa-plus');
    }
    jQuery('.panel-group').on('hidden.bs.collapse', toggleIcon);
    jQuery('.panel-group').on('shown.bs.collapse', toggleIcon);
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
    var elementOld = null;
    var openClass = "eccordion__tab--open";
    function toggleAccordion(element) {
        content = element.querySelector(".eccordion__tab__content");
        if(elementOld != null){
            elementOld.classList.remove(openClass);
            contentOld = elementOld.querySelector(".eccordion__tab__content");
            contentOld.style.maxHeight = "0px";
        }
        if(elementOld !== element){
            element.classList.add(openClass);
            content.style.maxHeight = content.scrollHeight + "px";
            elementOld = element;
        }else{
            elementOld = null;
        }
    }
</script>
<?php get_footer(); ?>