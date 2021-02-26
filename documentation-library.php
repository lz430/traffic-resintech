<?php 
/* Template Name: doc-library-page-template */ ?>
 
<?php get_header(); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href='https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css'>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=dp46ucdledpfc9xxfkqnqq" async="true"></script>

<style>
    a:hover{
        text-decoration:none!important;
    }
    section.ne-sect-one{
        padding:60px 0px;
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
   section.product-header-sec {
        padding-bottom: 59px;
    }
    
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

	i.more-less.fas.fa-plus {
        float: right;
        border: 1px solid #CD163F;
        border-radius: 50%;
        padding: 6px;
        font-size: 13px;
        color: #CD163F;
        font-weight: 600;
        position: absolute;
        right: 10px;
        top: 25%;
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
        right: 10px;;
        top: 25%;
    }
    h4.panel-title.faq-heading-acc a {
        font-style: normal;
        font-weight: bold;
        font-size: 23px;
        line-height: 30px;
        letter-spacing: 0.01em;
        color: #111315;
        font-family: 'NeueHaasGroteskDisp-Regular';
    }
    div.panel-heading.faq-heading-tab {
        padding: 0px 15px;
        position:relative;
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
        width: fit-content;
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
    input.search-input-dec {
        font-family: 'Lora';
        font-weight: normal;
        font-size: 18px;
        line-height: 22px;
        color: #111315!important;
        padding: 10px 15px;
        border: 1px solid #808284;
        box-sizing: border-box;
        border-radius: 3px;
    }
    .search-input-div {
        position: relative;
        width: 35%;
    }
    .search-input-div i.fas.fa-search {
        color: #CD163F;
        font-size: 18px;
        position: absolute;
        top: 13px;
        right: 13px;
    }
    .input-doc-lib span {
        font-family: 'NeueHaasGroteskText-Regular';
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 32px;
        color: #111315;
        margin-top: 5px;
        padding: 0px 25px;
    }
    .input-doc-lib select {
        font-family: 'Lora';
        font-weight: normal;
        font-size: 18px;
        line-height: 22px;
        color: #111315;
        padding: 10px 15px;
        border: 1px solid #808284;
        box-sizing: border-box;
        border-radius: 3px;
        width: 35%;
    }
    .row.input-doc-lib.justify-content-center {
        margin: 60px 0px 10px;
    }
    .sku-row-dl p {
        font-family: 'Lora';
        font-weight: normal;
        font-size: 22px;
        line-height: 31px;
        letter-spacing: -0.02em;
        color: #000000;
        margin-top: 10px;
        padding: 0px 25px;
    }
    .dl-fltr-btns {
        justify-content: center;
        margin-top: 15px;
    }
    section.documenttation-btns-filter {
        margin: 50px 0px;
    }
    .dl-acc-head {
        background: #F2F7FF;
        margin: 20px 0px;
    }
    /* @media quirires   */
    @media only screen and (min-width:320px) and (max-width:767px){
        .ne-sect-one h1 {
            font-size: 43px;
            line-height: 53px;
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
    }
    
</style>

<!--<section class="ne-sect-one">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12 col-md-12 col-sm-12 col-12">-->
<!--                <h1>-->
<!--                    Document Library-->
<!--                </h1>-->
<!--                <div class="row input-doc-lib justify-content-center">-->
<!--                    <div class="search-input-div">-->
<!--                        <input class="search-input-dec" type="search" placeholder="Search by keyword" class="form-control" />-->
<!--                        <i class="fas fa-search"></i>-->
<!--                    </div>-->
<!--                    <span>or</span>-->
<!--                    <select name="" id="">-->
<!--                        <option value="">Filter by application</option>-->
<!--                        <option value=""></option>-->
<!--                        <option value=""></option>-->
<!--                        <option value=""></option>-->
<!--                    </select>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!--<section class="overview-menu-slider pt-0 pb-0">-->
<!--    <div class="container dl-links-tabs">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <div class="overview-slider">-->
<!--                    <div class="product-slider ">-->
<!--                        <div class="product-slider__slider overview-link">-->
<!--                            <div class="product-slider__item overview-item">-->
<!--                                <div class="overview-link-div">-->
<!--                                    <a class="overview-mob-link active" href="#"><h2 class="" style="color:black;">Product Documentation</h2></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="product-slider__item overview-item">-->
<!--                                <div class="overview-link-div">-->
<!--                                    <a class="overview-mob-link" href="#"><h2 class="" style="color:black;">Application Bulletins</h2></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="product-slider__item overview-item">-->
<!--                                <div class="overview-link-div">-->
<!--                                    <a class="overview-mob-link" href="#"><h2 class="" style="color:black;">Case Studies</h2></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="product-slider__item overview-item">-->
<!--                                <div class="overview-link-div">-->
<!--                                    <a class="overview-mob-link" href="#"><h2 class="" style="color:black;">Presentations</h2></a>-->
                                    
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="product-slider__item overview-item">-->
<!--                                <div class="overview-link-div">-->
<!--                                    <a class="overview-mob-link" href="#"><h2 class="" style="color:black;">White Papers</h2></a>-->
                                    
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="product-slider__item overview-item">-->
<!--                                <div class="overview-link-div">-->
<!--                                    <a class="overview-mob-link" href="#"><h2 class="" style="color:black;">Brochures</h2></a>-->
                                    
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>    -->
<!--</section>-->
<!--<hr class="mt-0 mb-0 mobile-tab-hr">-->

<!--<section class="documenttation-btns-filter">-->
<!--    <div class="container">-->
<!--        <div class="row sku-row-dl justify-content-center">-->
<!--            <p>Filter by:</p>-->
<!--            <div class="dl-fltr-btns">-->
<!--               <a class="prod-sku-btn active" href="#">All</a>-->
<!--                <a class="prod-sku-btn" href="#">Product Spec Sheets</a>-->
<!--                <a class="prod-sku-btn" href="#">Safety Data Sheets</a>-->
<!--                <a class="prod-sku-btn" href="#">Technical Data Sheets</a>-->
<!--                <a class="prod-sku-btn" href="#">System Manuals</a> -->
<!--            </div>-->
            
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section class="faq-sections">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">
                <h2 class="related-serv-heading">Granular Activated Carbon</h2>
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
            		<div class="panel panel-default dl-acc-head">
            			<div class="panel-heading faq-heading-tab" role="tab" id="headingOne">
            				<h4 class="panel-title faq-heading-acc">
            					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            						<i class="more-less fas fa-plus"></i>
            						Bituminous Coal Carbon
            					</a>
            				</h4>
            			</div>
            			<div id="collapseOne" class="panel-collapse collapse faq-body-tab" role="tabpanel" aria-labelledby="headingOne">
            				<div class="panel-body faq-body-sm-text">
            					  Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book
            				    <div class="panel panel-default dl-acc-head">
            			<div class="panel-heading faq-heading-tab" role="tab" id="headingchildOne">
            				<h4 class="panel-title faq-heading-acc">
            					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsechildOne" aria-expanded="true" aria-controls="collapsechildOne">
            						<i class="more-less fas fa-plus"></i>
            						Bituminous Coal Carbon
            					</a>
            				</h4>
            			</div>
            			<div id="collapsechildOne" class="panel-collapse collapse faq-body-tab" role="tabpanel" aria-labelledby="headingchildOne">
            				<div class="panel-body faq-body-sm-text">
            					  Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book
            				</div>
            			</div>
            		</div>
            				</div>
            			</div>
            		</div>
            		<div class="panel panel-default dl-acc-head">
            			<div class="panel-heading faq-heading-tab" role="tab" id="headingtwo">
            				<h4 class="panel-title faq-heading-acc">
            					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
            						<i class="more-less fas fa-plus"></i>
            						Coconut Shell Carbon
            					</a>
            				</h4>
            			</div>
            			<div id="collapsetwo" class="panel-collapse collapse faq-body-tab" role="tabpanel" aria-labelledby="headingtwo">
            				<div class="panel-body faq-body-sm-text">
            					  Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
            <div class="col-md-2">
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
        slidesToShow: 6,
        slidesToScroll: 1,
        swipeToSlide: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2.25
                }
            },
            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 1.25
                }
            },
            {
                breakpoint: 475,
                settings: {
                    slidesToShow: 1.25
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

<?php get_footer(); ?>