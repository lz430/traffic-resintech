<?php /*Template Name: Contaminent Search */ ?>
<?php get_header(); ?>
<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- Popper JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=dp46ucdledpfc9xxfkqnqq" async="true"></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet"> -->

<style>

  .contaminentsearch-breadcumb{
     padding-top:20px;
     max-width: 1250px;
     margin:0 auto;
     font-family: Neue Haas Grotesk Text Regular;
     font-style: normal;
     font-weight: normal;
     font-size: 14px;
     line-height: 160%;
     color: #808284;
 }

  .content-search{
     max-width: 757px;
     margin: 0 auto;
}
  .contaminent-search .contaminent-searchpra {
     font-family: 'NeueHaasGroteskDisp-Bold';
    font-style: normal;
    font-weight: bold;
    font-size: 15px;
    line-height: 140%;
    letter-spacing: 0.04em;
    color: #0F75BB;
    margin-top: 40px;
    text-align: center;
     
}
.contaminent-search .contaminent-searchhead{
    font-family: 'Lora';
    font-style: normal;
    font-weight: normal;
    font-size: 60px;
    line-height: 120%;
    padding-bottom: 20px;
    text-align: center;
    letter-spacing: -0.02em;
   color: #111315;

      

}

   /* form */
   
   ::placeholder {
        font-family: Lora;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        
}
   .search {
        position: relative;
        margin:0 auto;
        max-width:480px;
    }
    input.searchTerm {
    height: 50px;
    /* height: 50px */
        border: 1px solid #808284;
}
    .search1 input {
        padding: 4px;
            
    }
    .search button {
        position: absolute;
        top: 0;
        right: 0;
        background-color: transparent !important;
        color: #CD163F;
    }
    i.fa.fa-search {
    font-size: 16px;
    margin-top: 6px;
}


  
   
    /*form end */
    
    
/* buttom section 3*/
.contaminent-search2{
    margin-top:50px;
}
.contaminent-search2 .btnapp1{
       background: #F2F7FF;
    border-radius: 5px;
    flex: none;
    order: 0;
    font-size: 20px;
    flex-grow: 0;
    line-height: 32px;
    margin: 8px 0px;
    color: black;
    font-weight: 700;
    width: 100%;
    font-family: 'NeueHaasGroteskDisp-Bold';
 }
 .contaminent-search2 .btnapp1:hover {
     background: #0D2C6C;
     color:#fff;
     text-decoration:none;
 }
  
  @media only screen and (max-width: 767px){
      .contaminent-search .contaminent-searchhead{
            font-size: 44px;
      }
      
      .contaminent-search2 {
            margin-top: 100px;
     }
  }
       
 @media(max-width: 400px) {
       .contaminentsearch-breadcumb {
             display: none;
     }
 }


</style>

<!-- <div class="container">
<p class="contaminentsearch-breadcumb">Home / Applications / Contaminent search</p>
</div> -->
</br></br></br>

<section class="contaminent-search" data-aos="fade-up"
    data-aos-offset="90"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top">
    <div class="container">
        <div class="content-search">
                <p  class="contaminent-searchpra">Contaminent Search</p>
                <h1 class="contaminent-searchhead">Which contaminent are you trying to remove?</h1>
        </div>
        </br>
        </br>
        
   <div class="search">
        <input type="text" class="searchTerm" placeholder="Contaminent">
        <button type="submit" class="searchButton">
         <i class="fa fa-search"></i>
        </button>
     </div>
  
          
    </div>
</section>


<section class="contaminent-search2" data-aos="fade-up"
    data-aos-offset="90"
    data-aos-delay="20"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
    <div class="container">
        
        <div class="row">
            <div class="col-md-6">
                   <button class="btnapp1" >Ammonium Removal </button>
            </div>
            <div class="col-md-6">
                   <button class="btnapp1" >Antimony Removal</button>
            </div>
        </div>
        
         <div class="row">
             <div class="col-md-6">
                   <button class="btnapp1" >Arsenic Removaly</button>
             </div>
             <div class="col-md-6">
                   <button class="btnapp1" >Boron Removal</button>
             </div>
        </div>
        
         <div class="row">
            <div class="col-md-6">
                   <button class="btnapp1" >Brine Softening</button>
            </div>
             <div class="col-md-6">
                   <button class="btnapp1" > Bromide Removal</button>
            </div>
           </div>
           
             
         <div class="row">
             <div class="col-md-6">
                   <button class="btnapp1" > Cesium Removal</button>
             </div>
             <div class="col-md-6">
                   <button class="btnapp1" > Cobalt Removal</button>
             </div>
        </div>
        
          
         <div class="row">
             <div class="col-md-6">
                   <button class="btnapp1" > Copper Removal</button>
             </div>
             <div class="col-md-6">
                   <button class="btnapp1" >  Cyanide Removal</button>
             </div>
        </div>
        
          
         <div class="row">
             <div class="col-md-6">
                   <button class="btnapp1" >Fluoride Removal</button></button>
             </div>
             <div class="col-md-6">
                   <button class="btnapp1" >Heavy Metals Removal</button>
             </div>
        </div>
        
          
         <div class="row">
             <div class="col-md-6">
                   <button class="btnapp1" >Hexavalent Chromium Removal</button>
             </div>
             <div class="col-md-6">
                   <button class="btnapp1" >Iron Remova</button>
             </div>
        </div>
        
          
         <div class="row">
             <div class="col-md-6">
                   <button class="btnapp1" >Lead Removal</button>
             </div>
             <div class="col-md-6">
                   <button class="btnapp1" >Manganese Removal</button>
             </div>
        </div>
        
          
         <div class="row">
             <div class="col-md-6">
                   <button class="btnapp1" >Mercury Removal</button>
             </div>
             <div class="col-md-6">
                   <button class="btnapp1" >Molybdenum Removal</button>
             </div>
        </div>
        
          
         <div class="row">
             <div class="col-md-6">
                   <button class="btnapp1" >Nickel Removal </button>
             </div>
             <div class="col-md-6">
                   <button class="btnapp1" >Nitrate Removal</button>
             </div>
        </div>
        
          
         <div class="row">
             <div class="col-md-6">
                   <button class="btnapp1" > Organics Removal</button>
             </div>
             <div class="col-md-6">
                   <button class="btnapp1" > Oxygen Removal</button>
             </div>
        </div>
        
          
         <div class="row">
             <div class="col-md-6">
                   <button class="btnapp1" >Perchlorate Removal</button>
             </div>
             <div class="col-md-6">
                   <button class="btnapp1" >PFAS Remediation</button>
             </div>
        </div>
        
          
         <div class="row">
             <div class="col-md-6">
                   <button class="btnapp1" >Phosphate Removal</button>
             </div>
             <div class="col-md-6">
                   <button class="btnapp1" >Precious Metals Recovery</button>
             </div>
        </div>
           
           
             <div class="row">
             <div class="col-md-6">
                   <button class="btnapp1" > Radium Removal</button>
             </div>
             <div class="col-md-6">
                   <button class="btnapp1" > Selenium Removal</button>
             </div>
        </div>
        
          <div class="row">
             <div class="col-md-6">
                   <button class="btnapp1" >Trace Metals Removal</button>
             </div>
             <div class="col-md-6">
                   <button class="btnapp1" >Uranium Removaly</button>
             </div>
        </div>
           
           <div class="row">
             <div class="col-md-6">
                   <button class="btnapp1" >VOC Treatmentl</button>
             </div>
        </div>
           
           
           
        </div>
    </div>
</section>







<?php get_sidebar(); ?>
<?php get_footer(); ?>