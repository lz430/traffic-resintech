<?php 
/* Template Name: pdp-page-template */ ?>
 
<?php get_header(); ?>
<!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href='https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css'>
<!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=dp46ucdledpfc9xxfkqnqq" async="true"></script> -->

<style>
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
	/*	border-radius: 0;*/
	/*	box-shadow: none;*/
	/*	border-color: #EEEEEE;*/
	/*}*/

	/*.panel-default > .panel-heading {*/
	/*	padding: 0;*/
	/*	border-radius: 0;*/
	/*	color: #212121;*/
	/*	background-color: #FAFAFA;*/
	/*	border-color: #EEEEEE;*/
	/*}*/

	/*.panel-title {*/
	/*	font-size: 14px;*/
	/*}*/

	/*.panel-title > a {*/
	/*	display: block;*/
	/*	padding: 15px;*/
	/*	text-decoration: none;*/
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
	/*	border-top-color: #EEEEEE;*/
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


<section class="product-header-sec">
    <div class="container m-auto">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12" >
                <h2 class="producy-name-heading">cgs</h2>
            </div>
        </div>
        <div class="row product-row">
            <div class="col-md-6 col-sm-6 col-12">
                <div id="product__slider">
                    <div class="product__slider-main">
                        <div class="slide">
                            <img src="/wp-content/uploads/2021/01/Rectangle-118.png" class="product-main-img">
                        </div>
                        <div class="slide">
                           <img src="/wp-content/uploads/2021/01/Rectangle-118.png" class="product-main-img">
                        </div>
                        <div class="slide">
                            <img src="/wp-content/uploads/2021/01/Rectangle-118.png" class="product-main-img">
                        </div>
                    </div>
                    <div class="product__slider-thmb product-thumbnail-pdp">
                        <div class="slide">
                            <img src="/wp-content/uploads/2021/01/Rectangle-118.png" alt="" class="thumbnail-p-img">
                        </div>
                        <div class="slide">
                            <img src="/wp-content/uploads/2021/01/Rectangle-122.png" alt="" class="thumbnail-p-img">
                        </div>
                        <div class="slide">
                            <img src="/wp-content/uploads/2021/01/Rectangle-121.png" alt="" class="thumbnail-p-img">
                        </div>
                        <div class="slide">
                            <img src="/wp-content/uploads/2021/01/Rectangle-119.png" alt="" class="thumbnail-p-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12 product-desc-col" data-aos="fade-up"
    data-aos-offset="90"
    data-aos-delay="20"
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
                        ResinTech CGS is a sodium form standard crosslinked gel strong acid cation resin. CGS is optimized for residential applications that require good regeneration efficiency and high capacity. ResinTech CGS is intended for use in all residential and commercial softening applications that do not have significant chlorine in the feedwater. CGS is supplied in the sodium form.…
                        <a class="see-detail-btn" href="#">see Details</a>
                        </p>
                    </div>
                    <div class="btns-description">
                        <a class="description-pro-btn" href="#">Order a sample</a>
                        <a class="description-pro-btn blue" href="#">Get a quote</a>
                    </div>
                    <div class="description-last-p">
                        <p>
                            *Samples are 500 mL. Only samples can be ordered online. If you’d like to order in large quantity, please get a quote.
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
                        <p class="post-name">ResinTech Specialist</p>
                        <h3 class="name-heading">Joan Freebush</h3>
                        <a class="contact-client" hred="#"><i class="fas fa-phone-alt contact-icons"></i>(555) 555-5555</a>
                        <a class="contact-client" hred="#"><i class="fas fa-envelope contact-icons"></i> Send an email</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>

<section class="overview-menu-slider pt-0 pb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-slider">
                    <div class="product-slider ">
                        <div class="product-slider__slider overview-link">
                            <div class="product-slider__item overview-item">
                                <div class="overview-link-div">
                                    <a class="overview-mob-link active" href="#"><h2 class="" style="color:black;">Overview</h2></a>
                                </div>
                            </div>
                            <div class="product-slider__item overview-item">
                                <div class="overview-link-div">
                                    <a class="overview-mob-link" href="#"><h2 class="" style="color:black;">Properties</h2></a>
                                </div>
                            </div>
                            <div class="product-slider__item overview-item">
                                <div class="overview-link-div">
                                    <a class="overview-mob-link" href="#"><h2 class="" style="color:black;">FAQS</h2></a>
                                </div>
                            </div>
                            <div class="product-slider__item overview-item">
                                <div class="overview-link-div">
                                    <a class="overview-mob-link" href="#"><h2 class="" style="color:black;">Resources</h2></a>
                                    
                                </div>
                            </div>
                            <div class="product-slider__item overview-item">
                                <div class="overview-link-div">
                                    <a class="overview-mob-link" href="#"><h2 class="" style="color:black;">Applications</h2></a>
                                    
                                </div>
                            </div>
                            <div class="product-slider__item overview-item">
                                <div class="overview-link-div">
                                    <a class="overview-mob-link" href="#"><h2 class="" style="color:black;">Products</h2></a>
                                    
                                </div>
                            </div>
                            <div class="product-slider__item overview-item">
                                <div class="overview-link-div">
                                    <a class="overview-mob-link" href="#"><h2 class="" style="color:black;">Services</h2></a>
                                    
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

<section class="product-tab-section">
    <div class="container-fluid">
       <div class="row">
           <div class="col-md-12 col-sm-12 col-12" data-aos="fade-up"
    data-aos-offset="90"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
               <div class="row">
                   <div class="col-md-2 col-sm-12 col-12">
                       <div class="main tabs-product-div">
                            <div class="left overview-menues">
                                <ul>
                                    <li class="active">
                                        <a class="link1 active" href="">Overview </a>
                                    </li>
                                    <li>
                                        <a class="link2" href="">Properties</a>
                                    </li>
                                    <li>
                                        <a class="link3" href="">FAQS</a>
                                    </li>
                                    <li>
                                        <a class="link3" href="">Resources</a>
                                    </li>
                                    <li>
                                        <a class="link3" href="">Applications</a>
                                    </li>
                                    <li>
                                        <a class="link3" href="">Products</a>
                                    </li>
                                    <li>
                                        <a class="link3" href="">Services</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                   </div>
                   <div class="col-md-10 col-sm-12 col-12">
                       <div class="main tabs-product-div">
                            <div class="right">
                                <div class="related-slider">
                                    <div class="product-slider ">
                                        <div class="product-slider__slider overview-slider">
                                            <div class="product-slider__item overview-items ">
                                                <div class="rel-serv-div">
                                                    <img class="w-100 " src="/wp-content/uploads/2020/12/Rectangle-99-6.png">
                                                    <!--<p class="overvie-sm-slider-txt">-->
                                                    <!--    ResinTech CGS is a sodium form standard crosslinked gel strong acid cation resin. CGS is optimized for residential applications that require good regeneration efficiency and high capacity. ResinTech CGS is intended for use in all residential and commercial softening applications that do not have significant chlorine in the feedwater. CGS is supplied in the sodium form.-->
                                                    <!--</p>-->
                                                </div>
                                            </div>
                                            <div class="product-slider__item overview-items">
                                                <div class="rel-serv-div">
                                                    <img class="w-100" src="/wp-content/uploads/2020/12/Rectangle-99-1.png">
                                                    <!--<p class="overvie-sm-slider-txt">-->
                                                    <!--    ResinTech CGS is a sodium form standard crosslinked gel strong acid cation resin. CGS is optimized for residential applications that require good regeneration efficiency and high capacity. ResinTech CGS is intended for use in all residential and commercial softening applications that do not have significant chlorine in the feedwater. CGS is supplied in the sodium form.-->
                                                    <!--</p>-->
                                                </div>
                                            </div>
                                            <div class="product-slider__item overview-items">
                                                <div class="rel-serv-div">
                                                    <img class="w-100 " src="/wp-content/uploads/2020/12/Rectangle-99-2.png">
                                                    <!--<p class="overvie-sm-slider-txt">-->
                                                    <!--    ResinTech CGS is a sodium form standard crosslinked gel strong acid cation resin. CGS is optimized for residential applications that require good regeneration efficiency and high capacity. ResinTech CGS is intended for use in all residential and commercial softening applications that do not have significant chlorine in the feedwater. CGS is supplied in the sodium form.-->
                                                    <!--</p>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="overvie-sm-slider-txt">
                                    ResinTech CGS is a sodium form standard crosslinked gel strong acid cation resin. CGS is optimized for residential applications that require good regeneration efficiency and high capacity. ResinTech CGS is intended for use in all residential and commercial softening applications that do not have significant chlorine in the feedwater. CGS is supplied in the sodium form.
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

<section class="product-properties-sections" data-aos="fade-up"
    data-aos-offset="90"
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
                <div class="row sku-row justify-content-center">
                    <a class="prod-sku-btn active" href="#">AF-XX-3323</a>
                    <a class="prod-sku-btn" href="#">AF-XX-3323</a>
                    <a class="prod-sku-btn" href="#">AF-XX-3323</a>
                    <a class="prod-sku-btn" href="#">AF-XX-3323</a>
                    <a class="prod-sku-btn" href="#">AF-XX-3323</a>
                    <a class="prod-sku-btn" href="#">AF-XX-3323</a>
                    <a class="prod-sku-btn" href="#">AF-XX-3323</a>
                </div>
                <div class="sku-product-table">
                    <table>
                        <tbody>
                            <tr>
                                <td>SKU</td>
                                <td>AF-10-3323</td>
                            </tr>
                            <tr>
                                <td>Product name</td>
                                <td>Slow Melt Phosphate Cartridge</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>Active</td>
                            </tr>
                            <tr>
                                <td>Cartridge Type</td>
                                <td>Drop-In Cartridge</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>Aries phosphate cartridges contains food grade, slow-melt polyphosphate crystals that dissolve in wa</td>
                            </tr>
                            <tr>
                                <td>PROP 65 Compliant</td>
                                <td>True</td>
                            </tr>
                            <tr>
                                <td>Max. Flow</td>
                                <td>n/a</td>
                            </tr>
                            <tr>
                                <td>Master pack height (in)</td>
                                <td>12.8</td>
                            </tr>
                            <tr>
                                <td>Master pack length (in)</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>Housing Compatability</td>
                                <td>158005, 150067, 150150, 150068, 158006</td>
                            </tr>
                            <tr>
                                <td>Unit Price (USD)</td>
                                <td>$27.66</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>    
</section>

<section class="faq-sections" data-aos="fade-up"
    data-aos-offset="90"
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
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            		<div class="panel panel-default">
            			<div class="panel-heading faq-heading-tab" role="tab" id="headingOne">
            				<h4 class="panel-title faq-heading-acc">
            					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            						<i class="more-less fas fa-plus"></i>
            						Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus?
            					</a>
            				</h4>
            			</div>
            			<div id="collapseOne" class="panel-collapse collapse faq-body-tab" role="tabpanel" aria-labelledby="headingOne">
            				<div class="panel-body faq-body-sm-text">
            					  Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book
            				</div>
            			</div>
            		</div>
            		<hr>
            		<div class="panel panel-default">
            			<div class="panel-heading faq-heading-tab" role="tab" id="headingtwo">
            				<h4 class="panel-title faq-heading-acc">
            					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
            						<i class="more-less fas fa-plus"></i>
            						Sed posuere consectetur est at lobortis raesent commodo cursus magna, vel scelerisque nisl consectetur et?
            					</a>
            				</h4>
            			</div>
            			<div id="collapsetwo" class="panel-collapse collapse faq-body-tab" role="tabpanel" aria-labelledby="headingtwo">
            				<div class="panel-body faq-body-sm-text">
            					  Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
            				</div>
            			</div>
            		</div>
            		<hr>
            		<div class="panel panel-default">
            			<div class="panel-heading faq-heading-tab" role="tab" id="headingthr">
            				<h4 class="panel-title faq-heading-acc">
            					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethr" aria-expanded="true" aria-controls="collapsethr">
            						<i class="more-less fas fa-plus"></i>
            						Duis mollis est non commodo luctus nisi erat?
            					</a>
            				</h4>
            			</div>
            			<div id="collapsethr" class="panel-collapse collapse faq-body-tab" role="tabpanel" aria-labelledby="headingthr">
            				<div class="panel-body faq-body-sm-text">
            					  Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
            				</div>
            			</div>
            		</div>
            		<hr>
            		<div class="panel panel-default">
            			<div class="panel-heading faq-heading-tab" role="tab" id="headingfour">
            				<h4 class="panel-title faq-heading-acc">
            					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
            						<i class="more-less fas fa-plus"></i>
            						Sed posuere consectetur est at lobortis raesent commodo cursus magna, vel scelerisque nisl consectetur et?
            					</a>
            				</h4>
            			</div>
            			<div id="collapsefour" class="panel-collapse collapse faq-body-tab" role="tabpanel" aria-labelledby="headingfour">
            				<div class="panel-body faq-body-sm-text">
            					  Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
            				</div>
            			</div>
            		</div>
            		<hr>
            	</div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>    
</section>

<section class="resources-sections" data-aos="fade-up"
    data-aos-offset="90"
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
                    <div class="col-md-6">
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
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>    
</section> 

<section class="application-sections" data-aos="fade-up"
    data-aos-offset="90"
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
                    <div class="col-md-6">
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
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>    
</section> 

<section class="slider-sectionsone" data-aos="fade-up"
    data-aos-offset="90"
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
                            <div class="product-slider__item related-item">
                                <div class="product-card-div">
                                    <img class="product-img" src="/wp-content/uploads/2021/01/Rectangle-118.png">
                                    <h4 class="product-head">cg8</h4>
                                    <table class="card-table">
                                        <tbody>
                                            <tr>
                                                <td class="heading-prod-td">Form</td>
                                                <td class="simple-prod-td">Sodium</td>
                                            </tr>
                                            <tr>
                                                <td class="heading-prod-td">Industry</td>
                                                <td class="simple-prod-td">Commercial <br>Residential</td>
                                            </tr>
                                            <tr>
                                                <td class="heading-prod-td">Application</td>
                                                <td class="simple-prod-td">Softening <br>Deionization</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="product-slider__item related-item">
                                <div class="product-card-div">
                                    <img class="product-img" src="/wp-content/uploads/2021/01/Rectangle-118.png">
                                    <h4 class="product-head">cg8</h4>
                                    <table class="card-table">
                                        <tbody>
                                            <tr>
                                                <td class="heading-prod-td">Form</td>
                                                <td class="simple-prod-td">Sodium</td>
                                            </tr>
                                            <tr>
                                                <td class="heading-prod-td">Industry</td>
                                                <td class="simple-prod-td">Commercial <br>Residential</td>
                                            </tr>
                                            <tr>
                                                <td class="heading-prod-td">Application</td>
                                                <td class="simple-prod-td">Softening <br>Deionization</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="product-slider__item related-item">
                                <div class="product-card-div">
                                    <img class="product-img" src="/wp-content/uploads/2021/01/Rectangle-118.png">
                                    <h4 class="product-head">cg8</h4>
                                    <table class="card-table">
                                        <tbody>
                                            <tr>
                                                <td class="heading-prod-td">Form</td>
                                                <td class="simple-prod-td">Sodium</td>
                                            </tr>
                                            <tr>
                                                <td class="heading-prod-td">Industry</td>
                                                <td class="simple-prod-td">Commercial <br>Residential</td>
                                            </tr>
                                            <tr>
                                                <td class="heading-prod-td">Application</td>
                                                <td class="simple-prod-td">Softening <br>Deionization</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="product-slider__item related-item">
                                <div class="product-card-div">
                                    <img class="product-img" src="/wp-content/uploads/2021/01/Rectangle-118.png">
                                    <h4 class="product-head">cg8</h4>
                                    <table class="card-table">
                                        <tbody>
                                            <tr>
                                                <td class="heading-prod-td">Form</td>
                                                <td class="simple-prod-td">Sodium</td>
                                            </tr>
                                            <tr>
                                                <td class="heading-prod-td">Industry</td>
                                                <td class="simple-prod-td">Commercial <br>Residential</td>
                                            </tr>
                                            <tr>
                                                <td class="heading-prod-td">Application</td>
                                                <td class="simple-prod-td">Softening <br>Deionization</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="product-slider__item related-item">
                                <div class="product-card-div">
                                    <img class="product-img" src="/wp-content/uploads/2021/01/Rectangle-118.png">
                                    <h4 class="product-head">cg8</h4>
                                    <table class="card-table">
                                        <tbody>
                                            <tr>
                                                <td class="heading-prod-td">Form</td>
                                                <td class="simple-prod-td">Sodium</td>
                                            </tr>
                                            <tr>
                                                <td class="heading-prod-td">Industry</td>
                                                <td class="simple-prod-td">Commercial <br>Residential</td>
                                            </tr>
                                            <tr>
                                                <td class="heading-prod-td">Application</td>
                                                <td class="simple-prod-td">Softening <br>Deionization</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="product-slider__item related-item">
                                <div class="product-card-div">
                                    <img class="product-img" src="/wp-content/uploads/2021/01/Rectangle-118.png">
                                    <h4 class="product-head">cg8</h4>
                                    <table class="card-table">
                                        <tbody>
                                            <tr>
                                                <td class="heading-prod-td">Form</td>
                                                <td class="simple-prod-td">Sodium</td>
                                            </tr>
                                            <tr>
                                                <td class="heading-prod-td">Industry</td>
                                                <td class="simple-prod-td">Commercial <br>Residential</td>
                                            </tr>
                                            <tr>
                                                <td class="heading-prod-td">Application</td>
                                                <td class="simple-prod-td">Softening <br>Deionization</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section> 

<section class="slider-sections rel-services" data-aos="fade-up"
    data-aos-offset="90"
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
                        <h2 class="related-serv-heading">Related Products </h2>
                        <div class="product-slider__slider related ad">
                            <div class="product-slider__item related-item">
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
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>    
</section>

<!---Expert section start here----->

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


<!---Expert section end here----->


 
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
</script>



<?php get_footer(); ?>



