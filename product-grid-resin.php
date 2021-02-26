<?php 

/* Template Name: product-grid-page-template */ ?>

 

<?php get_header(); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link rel="stylesheet" href='https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css'>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=dp46ucdledpfc9xxfkqnqq" async="true"></script>

<style type="text/css">

    a:hover{

        text-decoration:none!important;

    }

    section.product-name-sect-one{

        padding:60px 0px;

    }

    .product-name-sect-one h1 {

        font-family: 'Lora';

        font-style: normal;

        font-weight: normal;

        font-size: 60px;

        line-height: 72px;

        text-align: center;

        letter-spacing: -0.02em;

        color: #111315;

    }

    .product-name-sect-one h1 i {

        font-size: 35px;

        line-height: 0;

        color: #CD163F;

        padding-left: 45px;

    }

    .product-name-sect-one p {

        font-family: 'NeueHaasGroteskText-Regular';

        font-style: normal;

        font-weight: bold;

        font-size: 15px;

        line-height: 21px;

        text-align: center;

        letter-spacing: 0.02em;

        color: #0F75BB;

        margin: 0;

    }

    .product-card-div.sect-two-prod-fltr-page {

        border: 1px solid #808284;

        border-radius: 5px;

        box-sizing: border-box;

        padding: 20px;

        margin-top: 30px!important;

        margin-right: 0px;

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

        margin-top: 5px;

        border-color: transparent!important;

        border: 0px!important;

    }

    table.card-table tbody {

        border-color: transparent!important;

        border: 0px!important;

    }

    table.card-table tr {

        border-bottom: 1px solid #DEE1E2 !important;

    }

    table.card-table td {

        border: 0px!important;

        border-color: transparent!important;

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

    h2.filter-heading {

        margin-top: 14px;

        font-family: 'Lora';

        font-style: normal;

        font-weight: normal;

        font-size: 33px;

        line-height: 40px;

        letter-spacing: -0.02em;

        color: #111315;

        border-bottom: 1px solid #0F75BB;

        padding-bottom: 5px;

    }

    .input-icon-div input[type="text"] {

        background: #FFFFFF;

        border: 1px solid #DEE1E2;

        box-sizing: border-box;

        border-radius: 3px;

        font-family: 'NeueHaasGroteskText-Regular';

        font-style: normal;

        font-weight: normal;

        font-size: 17px;

        line-height: 27px;

        color: #111315;

        padding: 5px 15px;

    }

    .input-icon-div i.input-fltr-dropdoen-icon {

        font-style: normal;

        font-weight: bold;

        font-size: 21px;

        line-height: 26px;

        letter-spacing: 0.02em;

        text-transform: uppercase;

        color: #CD163F;

        position: absolute;

        top: 8px;

        right: 15px;

    }

    .input-icon-div{

        position:relative;

    }

    

    

    

    /*  switch btn css */

    .switch {

      position: relative;

      display: inline-block;

      width: 60px;

      height: 34px;

    }

    

    .switch input { 

      opacity: 0;

      width: 0;

      height: 0;

    }

    

    .slider {

      position: absolute;

      cursor: pointer;

      top: 0;

      left: 0;

      right: 0;

      bottom: 0;

      background-color: #ccc;

      -webkit-transition: .4s;

      transition: .4s;

    }

    

    .slider:before {

      position: absolute;

      content: "";

      height: 26px;

      width: 26px;

      left: 4px;

      bottom: 4px;

      background-color: white;

      -webkit-transition: .4s;

      transition: .4s;

    }

    

    input:checked + .slider {

      background-color: #2196F3;

    }

    

    input:focus + .slider {

      box-shadow: 0 0 1px #2196F3;

    }

    

    input:checked + .slider:before {

      -webkit-transform: translateX(26px);

      -ms-transform: translateX(26px);

      transform: translateX(26px);

    }

    

    /* Rounded sliders */

    .slider.round {

      border-radius: 34px;

    }

    

    .slider.round:before {

      border-radius: 50%;

    }

    p.reoduct-srch-result-pgr {

        font-family: 'NeueHaasGroteskText-Regular';

        font-style: normal;

        font-weight: normal;

        font-size: 20px;

        line-height: 32px;

        color: #111315;

        margin-bottom:0;

        margin-top: 20px;

    }

    p.reoduct-srch-result-pgr span{

        color: #0F75BB;

    }

    section.product-name-filter-sect {

        padding: 50px 0px;

    }

    .filter-input-div {

        margin: 35px 0px 0px;

    }

    a.view-more-btn-pgr {

        font-family: 'Lora';

        font-style: normal;

        font-weight: normal;

        font-size: 22px;

        line-height: 31px;

        letter-spacing: -0.02em;

        color: #111315;

        text-align: center;

        margin: 60px auto;

        display: block;

        border-bottom: 1px solid #CD163F;

        width: 106px;

        padding-bottom: 5px;

    }

    .p-find-div-2 {

        background: #0D2C6C;

        color: white;

        padding: 60px 50px;

    }

    .p-find-div-1 {

        background: #004A80;

        color: white;

        padding: 60px 50px;

    }

    .p-find-div-1 p, .p-find-div-2 p{

        font-family: 'NeueHaasGroteskText-Regular';

        font-style: normal;

        font-weight: bold;

        font-size: 15px;

        line-height: 21px;

        letter-spacing: 0.02em;

        color: #FFFFFF;

        margin-bottom: 20px;

    }

    .p-find-div-1 p:after , .p-find-div-2 p:after{

        content: '';

        width: 300px;

        height: 1px;

        background: white;

        position: absolute;

        right: 50px;

        margin: auto;

        display: block;

        top: 71px;

    }

    .p-find-div-1 h3, .p-find-div-2 h3 {

        font-family: 'Lora';

        font-style: normal;

        font-weight: normal;

        font-size: 43px;

        line-height: 65px;

        letter-spacing: -0.02em;

        color: #FFFFFF;

    }

    .product-finding-pgr h2 {

        font-family: 'Lora';

        font-style: normal;

        font-weight: normal;

        font-size: 60px;

        line-height: 72px;

        letter-spacing: -0.02em;

        color: #111315;

        text-align: center;

        margin-bottom: 40px;

    }

    table.card-table tr:last-child{

        border-bottom:0px!important;

    }

    button.filtr-btn-mbl {

        font-family: 'Lora';

        font-style: normal;

        font-weight: normal;

        font-size: 25px;

        line-height: 30px;

        letter-spacing: -0.02em;

        color: #FFFFFF;

        background: #004A80;

        border-radius: 2px;

        width: 100%;

        padding: 15px 0px;

    }

    @media only screen and (min-width:320px) and (max-width:767px){

        .p-find-div-2 {

            margin-top:30px;

        }

        .product-name-sect-one h1 {

            font-size: 44px;

            line-height: 53px;

        }

        p.reoduct-srch-result-pgr span {

            color: #0F75BB;

            display: block;

        }

        p.reoduct-srch-result-pgr {

            font-size: 15px;

            line-height: 24px;

            display: block;

            text-align: center;

        }

        .product-finding-pgr h2 {

            font-size: 36px;

            line-height: 43px;

        }

        .p-find-div-1, .p-find-div-2 {

            padding: 40px 25px;

            position: relative;

        }

        .p-find-div-1 p, .p-find-div-2 p {

            font-family: Neue Haas Grotesk Text Pro;

            font-style: normal;

            font-weight: bold;

            font-size: 13px;

            line-height: 18px;

            letter-spacing: 0.02em;

            color: #FFFFFF;

            margin-bottom: 20px;

        }

        .p-find-div-1 p:after, .p-find-div-2 p:after {

            content: '';

            width: 140px;

            right: 15px;

            top: 50px;

        }

        .p-find-div-1 h3, .p-find-div-2 h3 {

            font-size: 30px;

            line-height: 47px;

        }
        

    }

</style>



<section class="product-name-sect-one">

    <div class="container">

        <div class="row">
            <?php
                $categories = get_terms( ['taxonomy' => 'product_cat', 'hide_empty' => false] );
                //var_dump($categories);
            ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <p>
                    Ion Exchange Resins
                </p>
                <h1>
                    Strong Acid Cation Resins <span><i class="fas fa-chevron-down"></i></span><div class="dropdown">
                  <id class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php foreach ($categories as $key => $value) { ?>

                        <li class="dropdown-item clickMe" id="<?php echo $value->name;?>"><?php echo $value->name; ?></li>
                    <?php  } ?>
                  </div>

                </h1>

                </div>
            </div>

        </div>

    </div>

</section>

<hr>





<section class="product-name-filter-sect">

    <div class="container">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-12 col-12">

                <div class="filter-div-pgr">

                    <div class="mbl-filtr-div">

                        <button  class="filtr-btn-mbl">

                            Filter

                        </button> 

                    </div>

                    <h2 class="filter-heading">Filter</h2>

                    <div class="filter-input-div">

                        <div class="input-icon-div">

                            <input type="text" Placeholder="Search Here" data-search id="myInput">

                            <i class="fas fa-chevron-down input-fltr-dropdoen-icon" aria-hidden="true"></i>

                        </div>

                        <div class="input-icon-div mt-4">

                            <input type="text" Placeholder="Ionic Form" id='ionic_form'>

                            <i class="fas fa-chevron-down input-fltr-dropdoen-icon" aria-hidden="true"></i>

                        </div>

                        <div class="switch-div mt-4">

                            <label class="switch">

                              <input type="checkbox" checked>

                              <span class="slider round"></span>

                            </label>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-12 col-12" id="products_woo">

                <!-- <p class="reoduct-srch-result-pgr">127 results for <span>“Strong Acid Cation Resins”</span></p>

                <div class="row" > -->

                    <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-12">

                        <div class="product-card-div sect-two-prod-fltr-page">

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

                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">

                        <div class="product-card-div sect-two-prod-fltr-page">

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

                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">

                        <div class="product-card-div sect-two-prod-fltr-page">

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

                    </div> -->

                <!-- </div> -->

               <!--  <div class="row mt-4">

                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">

                        <div class="product-card-div sect-two-prod-fltr-page">

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

                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">

                        <div class="product-card-div sect-two-prod-fltr-page">

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

                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">

                        <div class="product-card-div sect-two-prod-fltr-page">

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

                <div class="row mt-4">

                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">

                        <div class="product-card-div sect-two-prod-fltr-page">

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

                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">

                        <div class="product-card-div sect-two-prod-fltr-page">

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

                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">

                        <div class="product-card-div sect-two-prod-fltr-page">

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

                <div class="row mt-4">

                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">

                        <div class="product-card-div sect-two-prod-fltr-page">

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

                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">

                        <div class="product-card-div sect-two-prod-fltr-page">

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

                </div> -->

                <!-- <a class="view-more-btn-pgr" href="#">View more</a> -->
                
            </div>

        </div>

    </div>

</section>





<section class="product-finding-pgr">

    <div class="container">

        <h2>Need help finding a product?</h2>

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                <div class="p-find-div-1">

                    <p>Product Finder</p>

                    <h3>Not sure which product you need?</h3>

                </div>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                <div class="p-find-div-2">

                    <p>Product Catalog</p>

                    <h3>Search our entire inventory of products.</h3>

                </div>

            </div>

        </div>

    </div>

</section>















<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



<?php get_footer(); ?>