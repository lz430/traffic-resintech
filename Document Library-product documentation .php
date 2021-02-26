<?php /*Template Name: Document Library-product documentation  */ ?>
<?php get_header(); ?>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"  >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

.documentlibrary-breadcumb{
     padding-top:20px;
     max-width: 1250px;
     margin:0 auto;
     font-family: Neue Haas Grotesk Text Pro;
     font-style: normal;
     font-weight: normal;
     font-size: 14px;
     line-height: 160%;
     color: #808284;
}
  .documentlibrary-searchhead{
    font-family: Lora;
    font-style: normal;
    font-weight: normal;
    font-size: 60px;
    line-height: 120%;
    /* or 72px */
    text-align: center;
    letter-spacing: -0.02em;
   /* ResinTech Black */
   color: #111315;

      }
      
      .row1{
              display: flex;
      }
      
      .doclib-search{
          display:flex;
          margin-top: 60px;
      }
      
    .search1 {
        position: relative;
        max-width: 35%;
    }
    .search1 input {
        font-size: 18px;
    padding: 8px;
    border-radius: 3px;
    font-family: 'Lora';
    color: #111315;
    border: 1px solid #808284;
    }
    .search1 button {
        position: absolute;
        top: 0;
        right: 0;
        background-color: transparent !important;
        color: #CD163F;
    }
    i.fa.fa-search {
    font-size: 16px;
}


.searchpra{
    color:black;
    font-size: 20px;
        text-align: center;
        max-width:5%;
}
 .document-dropdown{
     max-width:35%;
 }
.document-dropdown select{
        width: 100%;
        padding: 10px;
    
}
.document-dropdown selec:first-child(){
        font-size: 16px;
    
}

.cat3-menu-doclib{
    margin-top:60px;
}
.documentlib-cat2 .h_line1{
     width:100%;
     height:2px;
     background:#0F75BB;
     margin-top: 14px;
 }
 


 
 

/* filter by start */




/* filter by end */

 /*  Accordion CSS   Start    */
    .card {
    background-color: #F2F7FF;
    margin: 5px;

    }
    
 
.mb-0 > a {
  color:  #111315;
  display: block;
  position: relative;
  padding:5px;
  font-family: Neue Haas Grotesk Display regular;
  font-style: normal;
  font-weight: bold;
  font-size: 23px;
}
.mb-0 > a:after {
  content: "\f067"; /* fa-chevron-down */
  font: normal normal normal 18px/1 FontAwesome;
  font-family: 'FontAwesome';
  position: absolute;
  right: 0;
  font-size:22px;
}
.mb-0 > a[aria-expanded="true"]:after {
  content: "\f068"; /* fa-chevron-up */
   font-size:22px;
} 
 
 i.fa.fa-download {
    font-size: 20px;
    color: #CD163F;
  
}

.card-body {

    padding: 0;
}
.doclib-icon{
    font-family: Neue Haas Grotesk Text regular;
    font-style: normal;
    font-weight: bold;
    font-size: 14px;
    color: #0D2C6C;
    padding:4px;
}

 .documentlib-cat2{
     margin-top:50px;
 }
 
 .panel-default > .panel-heading {
  background-color: transparent;
  border: medium none;
  border-radius: 0;
  color: inherit;
  padding: 0;
  position: relative;
}    
.panel-heading .panel-title > a {
  background-color: #F2F7FF;;
  border: medium none;
  color: #111315;;
  display: block;
  font-family: Arial,Helvetica,sans-serif;
  line-height: 28px;
  padding: 11px 65px 11px 40px;
  word-wrap: break-word;
  font-weight:bold;
  font-size:20px;
  text-decoration:none;
}
    
.panel-heading .panel-title > a::after {
  content: "\f068";
  bottom: 0;
  
  font: normal normal normal 16px/1 FontAwesome;
  font-size: 20px;
  font-weight: bold;
  letter-spacing: -1px;
  line-height: 48px;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  width: 60px;
}  
.panel-heading .panel-title > a.collapsed::after {
  content: "\f067";
}    
.panel-body{
  height:100px;
  overflow: auto;
}


/*media query start */

 @media(max-width: 767px) {
       .documentlibrary-breadcumb {
             display: none;
     }
       .documentlibrary-searchhead{    
             max-width: 300px;
             margin: 0 auto;
             font-size: 44px;
             margin-top:60px;
    }
       .doclib-search {
               flex-wrap: wrap;
       }
       .search1 {
           max-width: 100%;
           margin:0 auto;
       }
       .searchpra {
           max-width: 100%;
           margin:0 auto;
       }
       .document-dropdown {
          max-width: 100%;
          margin:0 auto;
    }    
    
 }

 /*  Accordion CSS   Start    */
 
 
 
 
 .doclib-menu{
     margin-top:60px;
 }
 
 .doclib-menu a {
  color: black;
  text-align: center;
  text-decoration: none;
  font-size: 17px;
  font-family: Neue Haas Grotesk Text regular;
  font-style: normal;
  font-weight: normal;
 }
 
.doclib-menup {
    display:flex;
    justify-content:space-around;
    flex-wrap:wrap;
   
}

.doclib-menu p:hover   {
      border-bottom: 2px solid #CD163F;
      padding-bottom:10px;
}


.doclib-menu p.active {
  border-bottom: 2px solid #CD163F;
   padding-bottom:10px;
}
.doclib-menu hr {
      
      margin-top:-1rem;
 }
 
 .doclib-product {
     display:flex;
    justify-content:space-around;
    flex-wrap:wrap;
   
 }
 
 .doclib-filterby {
     margin-top:50px;
 }
 
 .filter-pra {
     font-family: Lora;
     font-style: normal;
     font-weight: normal;
     font-size: 22px;
     color:black;
     text-align:right;
 }
 
 .btn {
    width:165px;
  border: 2px solid #0D2C6C;
  padding: 0px;
  border-radius: 25px;
 height:30px;
  cursor: pointer;
  font-family: Neue Haas Grotesk Text regular;
  font-style: normal;
  font-weight: bold;
 font-size: 15px;
  margin-right:8px;
}

.btn:hover {
  background-color:#0D2C6C;
  color:white;
}

.btn.active {
  background-color: #0D2C6C;
  color: white;
}
 
 
 
</style>

<!-- <div class="container">
	<p class="documentlibrary-breadcumb">Home / Resources / Document Library</p>
</div> -->

<section>
<h1 class="documentlibrary-searchhead">Document Library</h1>

<div class="container">
<div class="row doclib-search">
    
   
      <div class="search1">
        <input type="text" class="searchTerm1" placeholder="Search by Keyword">
        <button type="submit" class="searchButton1">
         <i class="fa fa-search"></i>
        </button>
      </div>
   
    <p class="searchpra">or</p>
    
    
    <div class="document-dropdown">
      <select class="mdb-select md-form" searchable="Search here..">
       <option value="" disabled selected>Filter by application</option>
       <option value="1">USA</option>
       <option value="2">Germany</option>
       <option value="3">France</option>
       <option value="3">Poland</option>
       <option value="3">Japan</option>
     </select>

  </div>
  
    
</div>
</div>
</section>



<section class="doclib-menu">
    <div class="container" >
         <div class="doclib-menup">
                <p class="active"><a href="#news">Application Bulletins</a></p>
                <p><a href="#news">Application Bulletins</a></p>
                <p><a href="#contact">Case Studies</a></p>
                <p><a href="#about">Presentations</a></p>
                <p><a href="#about">White Papers</a></p>
                <p><a href="#about">Brochures</a></p>
         </div>        
    </div>
    <hr></hr>
</section>


<section  class="doclib-filterby">
    <div class="container">
        <div class="row" >
            <div class="col-md-2">
                <p style="align-self: center;" class="filter-pra">Filter By:</p>
            </div>
            <div class="col-md-10">
              <div class="btn-filter">
              <button class="btn active" onclick="#"> All</button>
              <button class="btn" onclick="#)"> Product Spec Sheets</button>
              <button class="btn" onclick="#"> Safety Data Sheets </button>
              <button class="btn" onclick="#"> Technical Data Sheets</button>
              <button class="btn" onclick="#"> System Manuals</button>
              </div> 
           </div>
      </div>
    </div>
    
</section>

 

<section class="documentlib-cat2">
    <div class="container">
        
        <h1 class="ground-wat1" >Ion exchange resins</h1>
        <div class="h_line1"></div></br></br>
        <div id="accordion">
            
  <div class="card">
    <div class="card-header" id="heading-1">
      <h5 class="mb-0">
        <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
          Strong Acid Cation Resins
        </a>
      </h5>
    </div>
    <div id="collapse-1" class="collapse show" data-parent="#accordion" aria-labelledby="heading-1">
      <div class="card-body">

        <div id="accordion-1">
          <div class="card">
            <div class="card-header" id="heading-1-1">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
                    ASM-10-HP
                </a>
              </h5>
            </div>
            <div id="collapse-1-1" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-1">
              <div class="card-body">

                  <div id="accordion-1-1">
                    
                  <h6 class="doclib-icon"><span><i class="fa fa-download" aria-hidden="true"></i>
                  </span>&nbsp;  Spec Sheet</h6>
                  <h6 class="doclib-icon"><span><i class="fa fa-download" aria-hidden="true"></i>
                  </span>&nbsp;  Safety Data Sheet</h6>
                  <h6 class="doclib-icon"><span><i class="fa fa-download" aria-hidden="true"></i>
                  </span>&nbsp;  Technical Data Sheet</h6>
                  <h6 class="doclib-icon"><span><i class="fa fa-download" aria-hidden="true"></i>
                  </span>&nbsp;  System Manual</h6>
                   
                  </div>

              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="card-header" id="heading-1-2">
              <h5 class="mb-0">
                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                  ASM-125
                </a>
              </h5>
            </div>
            <div id="collapse-1-2" class="collapse" data-parent="#accordion-1" aria-labelledby="heading-1-2">
              <div class="card-body">
                nice two
              </div>
            </div>
          </div>
        </div>      
      
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header" id="heading-2">
      <h5 class="mb-0">
        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
          Item 2
        </a>
      </h5>
    </div>
    <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
      <div class="card-body">
        Text 2
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header" id="heading-3">
      <h5 class="mb-0">
        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
          Item 3
        </a>
      </h5>
    </div>
    <div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-3">
      <div class="card-body">
        Text 3
      </div>
    </div>
  </div>
  
</div>

    </div>
</section>




<section class="documentlib-cat2">
    <div class="container">
        <h1 class="ground-wat1" >Granular Activated Carbon</h1>
        <div class="h_line1"></div></br></br>
       
    <div class="panel-group margin_0" id="accordion1">
        
        
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion1" href="#collapse11" class="collapsed">
                        <i class="rt-icon2-bubble highlight"></i>
                        Bituminous Coal Carbon
                    </a>
                </h4>
            </div>
            <div style="height: 0px;" id="collapse11" class="panel-collapse collapse">
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facere doloremque ut dolores laudantium nihil at, repudiandae est numquam fuga tempora totam sequi quidem saepe officiis sint beatae, magni fugit.
                </div>
            </div>
        </div>
        
       
      <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion1" href="#collapse11" class="collapsed">
                        <i class="rt-icon2-bubble highlight"></i>
                        Coconut Shell Carbon
                    </a>
                </h4>
            </div>
            <div style="height: 0px;" id="collapse11" class="panel-collapse collapse">
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facere doloremque ut dolores laudantium nihil at, repudiandae est numquam fuga tempora totam sequi quidem saepe officiis sint beatae, magni fugit.
                </div>
            </div>
        </div>

     
        
    </div> 
  

    </div>
</section>




<script>
    // Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>


<?php get_sidebar(); ?>
<?php get_footer(); ?>