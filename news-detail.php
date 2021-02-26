<?php 

/* Template Name: news-detail-page-template */ ?>

 

<?php get_header(); ?>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link rel="stylesheet" href='https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css'>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=dp46ucdledpfc9xxfkqnqq" async="true"></script>
-->
<style type="text/css"> 

    a:hover{

        text-decoration:none!important;

    }

    section.nd-sect-one{

        padding:60px 0px;

        max-width: 960px;

        width: 100%;

        margin: auto;

    }

    .nd-sect-one h1 {

        font-family: 'Lora';

        font-style: normal;

        font-weight: normal;

        font-size: 60px;

        line-height: 72px;

        letter-spacing: -0.02em;

        color: #111315;

    }

    .nd-sect-one p {

        font-family: 'NeueHaasGroteskText-Regular';

        font-style: normal;

        font-weight: bold;

        font-size: 20px;

        line-height: 32px;

        text-align: left;

        letter-spacing: 0.02em;

        color: #111315;

        margin: 0;

        margin: auto;

        width: 100%;

    }

    .nd-sect-one p.auther-name-nd {

        font-family: 'NeueHaasGroteskText-Regular';

        font-style: normal;

        font-weight: normal;

        font-size: 20px;

        line-height: 32px;

        color: #111315;

    }

    .nd-sect-one p.date-cat-nd {

        font-family: 'NeueHaasGroteskText-Regular';

        font-style: normal;

        font-weight: bold;

        font-size: 15px;

        line-height: 21px;

        letter-spacing: 0.02em;

        color: #0F75BB;

    }

    img.w-100.detail-blog-img-nd {

        margin: 35px 0;

    }

    div.nd-tabs-div {

        border-bottom: 2px solid #DEE1E2;

    }

    div.nd-tabs-div a.nav-item.nav-link.active {

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

    div.nd-tabs-div a.nav-item.nav-link {

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

    .post-content-nd p.date-cat-nd {

        font-family: 'NeueHaasGroteskText-Regular';
    font-style: normal;
    font-weight: bold;
    font-size: 15px;
    line-height: 21px;
    letter-spacing: 1px;
    color: #0F75BB;

    }
    p.date-cat-nd span {
    color: #0F75BB;
    font-family: 'NeueHaasGroteskText-Regular';
    font-size: 15px;
    font-weight: 700;
    letter-spacing: 0px;
}

    .post-content-nd h5 {

            letter-spacing: 0px;
    font-family: 'NeueHaasGroteskDisp-Bold';
    font-style: normal;
    font-weight: 700;
    font-size: 31px;
    padding-bottom: 20px;
    line-height: 40px;
    color: #111315;

    }

    .post-content-nd p {

        font-family: 'NeueHaasGroteskText-Regular';

        font-style: normal;

        font-weight: normal;

        font-size: 17px;

        line-height: 27px;

        color: #111315;

    }

    .post-content-nd {

        margin: 20px 0px;

    }

    .nd-post-col-set {

        padding: 0px 5px;

        margin-top: 25px;

    }

    .nd-all-post-row {

        margin: 40px 0px 0px;

    }

    section.service-nd-sec {

        background: url(/wp-content/uploads/2021/01/circle.png);

        width: 100%;

        background-position: center;

        background-size: cover;

        height: 360px;

    }

    .service-txt-div-nd {

        text-align: center;

        max-width:651px;

        width:100%;

        margin:auto;

        transform: translate(0% , 40%);

    }

    .service-txt-div-nd h1 {

        font-style: normal;

        font-weight: normal;

        font-size: 50px;

        line-height: 65px;

        text-align: center;

        letter-spacing: -0.02em;

        color: #FFFFFF;

    }

    .service-txt-div-nd p{

        font-style: normal;

        font-weight: normal;

        font-size: 20px;

        line-height: 32px;

        text-align: center;

        color: #FFFFFF;

    }

    .service-txt-div-nd a.ask-pdp-btn-nd {

        font-style: normal;

        font-weight: normal;

        font-size: 22px;

        line-height: 31px;

        letter-spacing: -0.02em;

        color: #FFFFFF;

        padding: 10px 0px;

        border-bottom: 1px solid red;

    }

    a.view-more-btn-nd {

        font-family: 'Lora';

        font-weight: normal;

        font-size: 22px;

        line-height: 31px;

        letter-spacing: -0.02em;

        color: #111315;

        text-align: center!important;

        justify-content: center;

        margin: 50px auto;

        border-bottom: 2px solid #cd163f;

        width: 100%;

        display: block;

        max-width: 106px;

    }

    @media only screen and (min-width:320px) and (max-width:767px){

        .nd-sect-one h1 {

            font-size: 43px;

            line-height: 53px;

        }

        section.nd-sect-one {

            max-width: 100%;

        }

        .nd-sect-one p {

            font-size: 17px;

            line-height: 27px;

            max-width: 100%;

        }

        .nd-sect-one p.date-cat-nd {

            font-size: 12px;

            line-height: 17px;

        }

        .nd-sect-one p.auther-name-nd {

            font-size: 17px;

            line-height: 27px;

        }

        .service-txt-div-nd {

            text-align: center;

            max-width: 100%;

            width: 100%;

            margin: auto;

            transform: translate(0%, 0%);

            height: auto;

            padding: 50px 0px;

        }

        section.service-nd-sec {

            background-position: 0% 0%;

            height: auto; 

        }

        .service-txt-div-nd h1 {

            margin-top: 0px;

            font-size: 36px;

            line-height: 43px;

        }

        div.nd-tabs-div a.nav-item.nav-link.active {

            font-size: 14px;

            line-height: 24px;

            margin: 0px 7px;

        }

        div.nd-tabs-div a.nav-item.nav-link{

            font-size: 14px;

            line-height: 24px;

            color: #111315;

            margin: 0px 7px;

        }

        .post-content-nd p.date-cat-nd {

            font-size: 12px!important;

            line-height: 17px;

        }

        .post-content-nd h5 {

            font-size: 21px;

            line-height: 30px;

        }

        .post-content-nd p {

            font-size: 15px;

            line-height: 24px;

            margin-top: 15px;

        }

        .nd-post-row-all {

            width: 100%;

            margin: auto;

        }

        a.view-more-btn-nd {

            font-size: 17px;

            line-height: 24px;

            margin: 40px auto;

            max-width: 82px;

        }

    }

</style>



<section class="nd-sect-one">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                <p class="date-cat-nd">9.14.20 | Blog</p>

                <h1>

                    Peter Meyers is awarded the IWC Merit Award

                </h1>

                <p class="auther-name-nd">Author: Billy Bob</p>

                <img class="w-100 detail-blog-img-nd" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                <p class="mb-5">

                    ResinTech, Inc. is pleased to announce its Senior Technical Director, Peter Meyers, is the 2018 recipient of the IWC Merit award. The International Water Conference® presents the Annual Merit Award to honor an inspiring individual in the field of industrial water technology — a person who has continually demonstrated outstanding leadership and made significant contributions to water-related technology or the advancement of its application.</p> 



                        <p class="mb-5">IWC Award Presenter, Trisha Scroggin from Burns & McDonnell, introduced the award by saying, “Peter Meyers has presented papers or discussions over twenty-one times over thirty years here at the IWC, and with every single paper or presentation he pushes passion and excellence.” </p>

                        

                        <p class="mb-5">Mr. Meyers took the opportunity to emphasize the importance of engaging the next generation in improving water technologies, “Change is going to happen whether we want it to or not. Change has to happen to the IWC, and I hope we stay relevant." Meyers continued, "We can't keep doing the same thing over and over. We have to try new things, and if those new things don't work, we have to put them aside and try something else.” </p>

                        

                        <p class="mb-5">ResinTech CEO, Jeffrey Gottlieb summarized the feelings of Peter’s coworkers and industry peers, “We are incredibly proud of Peter for his many significant contributions to the ion exchange industry, the field of water treatment and ResinTech over his impressive career.  His long list of lectures and white papers demonstrate his commitment to inspiring the next generation of water technology engineers.”







                </p>

            </div>

        </div>

    </div>

</section>



<section class="nd-blog-sect">

    <div class="row">

        <div class="col-md-12">

            <div class="nd-tabs">

                <nav>

                  	<div class="nav nav-tabs justify-content-center nd-tabs-div" id="nav-tab" role="tablist">

                	    <a class="nav-item nav-link active" id="nav-all-tab" data-toggle="tab" href="#nd-all" role="tab" aria-controls="nav-all" aria-selected="true">

                	    	All

                	    </a>

                	    <a class="nav-item nav-link" id="nd-blog-tab" data-toggle="tab" href="#nd-blog" role="tab" aria-controls="nd-blog" aria-selected="false">

                	    	Blogs

                	    </a>

                	    <a class="nav-item nav-link" id="nd-press-tab" data-toggle="tab" href="#nd-press" role="tab" aria-controls="nd-press" aria-selected="false">

                		    Press Releases

                		</a>

                		<a class="nav-item nav-link" id="nd-trade-tab" data-toggle="tab" href="#nd-trade" role="tab" aria-controls="nd-trade" aria-selected="false">

                		    Trade Shows

                		</a>

                  	</div>

                </nav>

                <div class="tab-content" id="nav-tabContent">

                  	<div class="tab-pane fade show active" id="nd-all" role="tabpanel" aria-labelledby="nav-all-tab">

                  	    <div class="container">

                  	        <div class="row nd-post-row-all">

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Blog</span></p>

                          	                <h5><a href="#">MTV Cribs Business: ResinTech making water magic at brand new Camden building</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Press Release</span></p>

                          	                <h5><a href="#">Peter Myers is awarded the IWC Merit award</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Trade Show</span></p>

                          	                <h5><a href="#">ResinTech inc.’s 32nd annual Fun Run</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Blog</span></p>

                          	                <h5><a href="#">MTV Cribs Business: ResinTech making water magic at brand new Camden building</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Press Release</span></p>

                          	                <h5><a href="#">Peter Myers is awarded the IWC Merit award</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Trade Show</span></p>

                          	                <h5><a href="#">ResinTech inc.’s 32nd annual Fun Run</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Blog</span></p>

                          	                <h5><a href="#">MTV Cribs Business: ResinTech making water magic at brand new Camden building</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Press Release</span></p>

                          	                <h5><a href="#">Peter Myers is awarded the IWC Merit award</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Trade Show</span></p>

                          	                <h5><a href="#">ResinTech inc.’s 32nd annual Fun Run</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	        </div>

                  	        <a class="view-more-btn-nd" href="#">View more</a>

                  	    </div>

                  	</div>

                  	<div class="tab-pane fade" id="nd-blog" role="tabpanel" aria-labelledby="nd-blog-tab">

                  		<div class="container">

                  	        <div class="row nd-post-row-all">

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Blog</span></p>

                          	                <h5><a href="#">MTV Cribs Business: ResinTech making water magic at brand new Camden building</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Press Release</span></p>

                          	                <h5><a href="#">Peter Myers is awarded the IWC Merit award</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Trade Show</span></p>

                          	                <h5><a href="#">ResinTech inc.’s 32nd annual Fun Run</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Blog</span></p>

                          	                <h5><a href="#">MTV Cribs Business: ResinTech making water magic at brand new Camden building</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Press Release</span></p>

                          	                <h5><a href="#">Peter Myers is awarded the IWC Merit award</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Trade Show</span></p>

                          	                <h5><a href="#">ResinTech inc.’s 32nd annual Fun Run</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Blog</span></p>

                          	                <h5><a href="#">MTV Cribs Business: ResinTech making water magic at brand new Camden building</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Press Release</span></p>

                          	                <h5><a href="#">Peter Myers is awarded the IWC Merit award</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Trade Show</span></p>

                          	                <h5><a href="#">ResinTech inc.’s 32nd annual Fun Run</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	        </div>

                  	        <a class="view-more-btn-nd" href="#">View more</a>

                  	    </div>

                  	</div>

                  	<div class="tab-pane fade" id="nd-press" role="tabpanel" aria-labelledby="nd-press-tab">

                  		<div class="container">

                  	        <div class="row nd-post-row-all">

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Blog</span></p>

                          	                <h5><a href="#">MTV Cribs Business: ResinTech making water magic at brand new Camden building</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Press Release</span></p>

                          	                <h5><a href="#">Peter Myers is awarded the IWC Merit award</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Trade Show</span></p>

                          	                <h5><a href="#">ResinTech inc.’s 32nd annual Fun Run</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Blog</span></p>

                          	                <h5><a href="#">MTV Cribs Business: ResinTech making water magic at brand new Camden building</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Press Release</span></p>

                          	                <h5><a href="#">Peter Myers is awarded the IWC Merit award</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Trade Show</span></p>

                          	                <h5><a href="#">ResinTech inc.’s 32nd annual Fun Run</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Blog</span></p>

                          	                <h5><a href="#">MTV Cribs Business: ResinTech making water magic at brand new Camden building</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Press Release</span></p>

                          	                <h5><a href="#">Peter Myers is awarded the IWC Merit award</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Trade Show</span></p>

                          	                <h5><a href="#">ResinTech inc.’s 32nd annual Fun Run</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	        </div>

                  	        <a class="view-more-btn-nd" href="#">View more</a>

                  	    </div>

                  	</div>

                  	<div class="tab-pane fade" id="nd-trade" role="tabpanel" aria-labelledby="nd-trade-tab">

                  		<div class="container">

                  	        <div class="row nd-post-row-all">

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Blog</span></p>

                          	                <h5><a href="#">MTV Cribs Business: ResinTech making water magic at brand new Camden building</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Press Release</span></p>

                          	                <h5><a href="#">Peter Myers is awarded the IWC Merit award</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Trade Show</span></p>

                          	                <h5><a href="#">ResinTech inc.’s 32nd annual Fun Run</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Blog</span></p>

                          	                <h5><a href="#">MTV Cribs Business: ResinTech making water magic at brand new Camden building</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Press Release</span></p>

                          	                <h5><a href="#">Peter Myers is awarded the IWC Merit award</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Trade Show</span></p>

                          	                <h5><a href="#">ResinTech inc.’s 32nd annual Fun Run</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Blog</span></p>

                          	                <h5><a href="#">MTV Cribs Business: ResinTech making water magic at brand new Camden building</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128-1-1.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Press Release</span></p>

                          	                <h5><a href="#">Peter Myers is awarded the IWC Merit award</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	            <div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">

                  	                <div class="nd-post-div">

                  	                    <img class="w-100" src="/wp-content/uploads/2021/01/Rectangle-128.png">

                  	                    <div class="post-content-nd">

                  	                        <p class="date-cat-nd">9.14.20 |<span> Trade Show</span></p>

                          	                <h5><a href="#">ResinTech inc.’s 32nd annual Fun Run</a></h5>

                  	                    </div>

                  	                </div>

                  	            </div>

                  	        </div>

                  	        <a class="view-more-btn-nd" href="#">View more</a>

                  	    </div>

                  	</div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- <section class="service-nd-sec">

    <div class="container m-auto">

        <div class="row">

            <div class="col-md-12">

                <div class="service-txt-div-nd">

                    <h1 class="mb-3">Get expert advise</h1>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

                    <a class="ask-pdp-btn-nd" href="#">Ask an expert</a>

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









<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



<?php get_footer(); ?>