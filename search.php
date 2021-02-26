<?php
// Template Name: Search
get_header();

$s=get_search_query();
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
if(isset($_GET['post_type']) && $_GET['post_type'] != 'all'){
	$args   =   array(
		's' =>$s,
		'post_type' => $_GET['post_type'],
		'posts_per_page' => 10,// query last 5 posts  
               'paged' => $paged
	);
}else{
	$args   =   array(
		's' =>$s,
		'posts_per_page' => 10,// query last 5 posts  
               'paged' => $paged
	);
}

$the_query = new WP_Query( $args );
//echo "<pre>";print_r($the_query);exit;
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<style>
    /* Styles for wrapping the search box */

		.main {
		    width: 50%;
		    margin: 50px auto;
		}

		/* Bootstrap 4 text input with search icon */

		.has-search .form-control {
		    padding-left: 2.375rem;
		}

		.has-search .form-control-feedback {
		    position: absolute;
		    z-index: 2;
		    display: block;
		    width: 2.375rem;
		    height: 2.375rem;
		    line-height: 2.375rem;
		    text-align: center;
		    pointer-events: none;
		    color: #aaa;
		}
		.container.search-page {
		    max-width: 855px!important;
		}
		section.searchbar-sec {
		    padding-bottom: 100px;
		    border-bottom: 1px solid #2f2f2f4f;
		}
		.input-inner-div .input-group {
		    padding-bottom: 13px;
		}
		.input-inner-div input.form-control {
		    font-size: 29px;
		}
		section.filter-sec {
		    padding-top: 30px;
		    padding-bottom: 30px;
		    border-bottom: 1px solid #dcdcdcf2;
		}
		.filter-sec-innner a {
		    text-decoration: none;
		    font-size: 15px;
		    color: #080858;
		    font-weight: 700;
		    border: 1px solid #080858;
		    border-radius: 25px;
		    padding: 3px 21px;
		    margin: 5px;
		}
		.filter-sec-innner a:active{
			background-color: #080858;
			color: white
		}
		.filter-sec-innner a:hover{
			background-color: #080858;
			color: white
		}
		section.prodcut-section {
		    padding-top: 40px;
		}
		.product-sec-inner p {
		    color: black;
		    font-size: 14px;
		}
		.product-main-div p.post-type {
		    text-decoration: none;
		    color: #0e74ba;
		    font-size: 19px;
    		font-weight: 500;
		}
		.product-main-div {
		    padding: 30px 0px;
		    border-bottom: 1px solid #dcdcdcf2;
		}
		.product-main-div h1 {
		    font-weight: 700;
		    font-size: 29px;
		}
		p.post-content {
		    color: #000;
		    font-size: 17px;
		    font-weight: 400;
		    padding-top: 10px;
		}
		.product-main-div a {
		    font-size: 16px;
		    font-weight: 600;
		    color: #04275a;
		    text-decoration: none;
		}
		.product-main-div .col-3 {
		    padding-top: 19px;
		}
		.pagination-inner p {
		    color: black;
		    font-size: 14px;
		}
		.pagination-sec{
			padding: 30px 0px;
		}
		li.page-item a.page-link {
		    font-size: 15px;
		    color: black;
		    border-style: none;
		    cursor: pointer;
		}

	</style>
<section class="searchbar-sec">
    <div class="container search-page">
        <div class="input-inner-div">
            <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="input-group">
                    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control" placeholder="Search">
					
					<div class="input-group-append">
                        <button type="submit" id="searchsubmit" class="btn btn-secondary" >
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>                
            </form>
        </div>
    </div>
</section>
<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(isset($_GET['post_type'])){
	$actual_link = strtok($actual_link, "&");
}
?>
<section class="filter-sec">
    <div class="container search-page">
        <div class="filter-sec-innner">
            <a href="<?php echo $actual_link; ?>&post_type=all">All</a>
            <a href="<?php echo $actual_link; ?>&post_type=product">Products</a>
            <a href="<?php echo $actual_link; ?>&post_type=news">News</a>
			<a href="<?php echo $actual_link; ?>&post_type=services">Services</a>
            <a href="<?php echo $actual_link; ?>&post_type=application">Documents</a>
            <a href="<?php echo $actual_link; ?>&post_type=page">Pages</a>
        </div>
    </div>
</section>
<?php

$total_results = $the_query->found_posts;
?>
<section class="prodcut-section">
    <div class="container search-page">
        <div class="product-sec-inner">
			<?php if(get_search_query()) { ?>
            <p><?php echo max(1, get_query_var('paged'));?> - <?php echo $the_query->max_num_pages;?> of <?php echo $total_results;?> results for "<span><?php echo get_search_query(); ?></span>"</p>
			<?php }?>
        </div>
        <?php
            if(isset($_GET['s'])){
				
                if($the_query->have_posts()) {
                	while ( $the_query->have_posts() ) {
                	    $the_query->the_post();
	                	$attach_url = wp_get_attachment_url( get_the_ID() );
	                	if (empty($attach_url)) {
	                		$attach_url = "/wp-content/uploads/2021/01/Rectangle-128.png";
	                	}
	                    ?>
	                    <div class="product-main-div">
	                        <div class="row">
	                            <div class="col-9">
	                                <p class="post-type" style="text-transform: capitalize;"><?php echo get_post_type( get_the_ID() );?></p>
	                                <h1><?php the_title(); ?></h1>
	                                <p class="post-content"><?php if ( ! has_excerpt() ) { echo ''; } else { the_excerpt();} ?></p>
	                                <a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a>
	                            </div>
	                            <div class="col-3">
	                                <img src="<?php echo $attach_url;?>">
	                            </div>
	                        </div>
	                    </div>
	                    <?php
	                }
					
                }else{
                    ?>                    
                    <div class="tempale_page_width">
                        <div class="searchcontetnmain">
                            <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
                            <div class="alert alert-info">
                                <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                            </div>
                        </div>
                    </div>
                    <?php 
                }
            } 
        ?>
        
        <!-- <div class="product-main-div">
            <div class="row">
                <div class="col-9">
                    <p class="post-type">product</p>
                    <h1>Donec id elit non prota gravida at eget metus.</h1>
                    <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="https://resintech.com/Etiam/Venenatis">https://resintech.com/Etiam/Venenatis</a>
                </div>
                <div class="col-3">
                    <img src="/wp-content/uploads/2021/01/Rectangle-128.png">
                </div>
            </div>
        </div>
        <div class="product-main-div">
            <div class="row">
                <div class="col-9">
                    <p class="post-type">product</p>
                    <h1>Donec id elit non prota gravida at eget metus.</h1>
                    <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="https://resintech.com/Etiam/Venenatis">https://resintech.com/Etiam/Venenatis</a>
                </div>
                <div class="col-3">
                    <img src="/wp-content/uploads/2021/01/Rectangle-128.png">
                </div>
            </div>
        </div>
        <div class="product-main-div">
            <div class="row">
                <div class="col-9">
                    <p class="post-type">product</p>
                    <h1>Donec id elit non prota gravida at eget metus.</h1>
                    <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="https://resintech.com/Etiam/Venenatis">https://resintech.com/Etiam/Venenatis</a>
                </div>
                <div class="col-3">
                    <img src="/wp-content/uploads/2021/01/Rectangle-128.png">
                </div>
            </div>
        </div> -->
    </div>
</section>
<section class="pagination-sec">
    <div class="container search-page">
        <div class="pagination-inner">
            <div class="row">
                <div class="col-6">
					<?php if(get_search_query()) { ?>
                    <p><?php echo max(1, get_query_var('paged'));?> - <?php echo $the_query->max_num_pages;?> of <?php echo $total_results;?> results for "<span><?php echo get_search_query(); ?></span>"</p>
					<?php }?>
                </div>
                <div class="col-6">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pg-blue justify-content-end">
                            <!-- <li class="page-item disabled">
							      <a class="page-link" tabindex="-1">Previous</a>
							    </li> -->
							<?php if(get_search_query()) { ?>
							<?php
							if (function_exists("pagination_bar")) {

								 pagination_bar($the_query); 

							}?><?php }?>
<!--                             <li class="page-item"><a class="page-link">1</a></li>
                            <li class="page-item"><a class="page-link">2</a></li>
                            <li class="page-item"><a class="page-link">3</a></li>
                            <li class="page-item">
                                <a class="page-link">Next</a>
                            </li> -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<?php get_footer();?>