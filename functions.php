<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// Enqueue styles and scripts the proper way
function child_scripts_styles() {
   
    wp_enqueue_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', null);
    // Splide slide
    // wp_enqueue_script('slideshow-js', '//cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js', null);
    // wp_enqueue_style('slideshow-css', '//cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css', null);

    // wp_enqueue_script('old-js', get_stylesheet_directory_uri().'/js/old-custom.js', filemtime(get_stylesheet_directory() . '/js/old-custom.js'), null);
    wp_enqueue_script('lz-js', get_stylesheet_directory_uri().'/js/custom.js', filemtime(get_stylesheet_directory() . '/js/custom.js'), null);
    wp_enqueue_style('chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array() );
    wp_enqueue_style('lz-css', get_stylesheet_directory_uri().'/css/style.css', filemtime(get_stylesheet_directory() . '/css/style.css'), null);
}
add_action( 'wp_enqueue_scripts', 'child_scripts_styles', 10 );


function wpdocs_custom_excerpt_length( $length ) {
    return 35;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function child_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'child_add_woocommerce_support' );

function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Desktop Horizontal Menu' ),
      
     )
   );
 }
add_action( 'init', 'register_my_menus' );
function myscript() {
  ?>
<script type="text/javascript">	
	var tree = document.querySelectorAll('ul.my_extra_menu_class a:not(:last-child)');
	for (var i = 0; i < tree.length; i++) {
	    tree[i].addEventListener('click', function(e) {
	        var parent = e.target.parentElement;
			var classList = parent.classList;
	        if (classList.contains("open")) {
	            classList.remove('open');
	            var opensubs = parent.querySelectorAll(':scope .open');
	            for (var i = 0; i < opensubs.length; i++) {
	                opensubs[i].classList.remove('open');
	            }
	        } else {
				if(jQuery("#"+parent.id).closest('.sub-menu').hasClass("sub-menu") == true){					
					jQuery(".sub-menu .menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.open").removeClass('open');
				}else{
					jQuery(".my_extra_menu_class .menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.open").removeClass('open');
				}
	            classList.add('open');
	        }
	    });
	}
</script>
<?php
}
add_action( 'wp_footer', 'myscript' );
// END ENQUEUE PARENT ACTION
/*function news_setup_post_type() {
    $args = array(
        'public'    => true,
        'label'     => __( 'News', 'textdomain' ),
        'menu_icon' => 'dashicons-book',
        'taxonomies'         => array( 'category', 'post_tag' ),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
    register_post_type( 'news', $args );
}
add_action( 'init', 'news_setup_post_type');

function application_setup_post_type() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Application', 'textdomain' ),
        'menu_icon' => 'dashicons-book',
        'taxonomies'         => array( 'category', 'post_tag' ),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
    register_post_type( 'application', $args );
}
add_action( 'init', 'application_setup_post_type');

function services_setup_post_type() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Services', 'textdomain' ),
        'menu_icon' => 'dashicons-book',
        'taxonomies'         => array( 'category', 'post_tag' ),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
    register_post_type( 'services', $args );
}
add_action( 'init', 'services_setup_post_type');*/

function my_scriptss() {
    wp_enqueue_style('bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    //wp_enqueue_script( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    
}
add_action( 'wp_enqueue_scripts', 'my_scriptss' );





function more_post_ajax(){

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => 'news',
        'post_status' => 'publish',
        'posts_per_page' => $ppp,
        'paged'    => $page,
        'order' => 'DESC'
    );

    $loop = new WP_Query($args);

    $out = '';
    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
        $out .= '<div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">
                    <div class="nd-post-div" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
                        <div class="img-detail"> <img class="w-newsdetail" src="'.get_the_post_thumbnail_url(get_the_ID()).'"></div>
                        <div class="post-content-nd">
                            <p class="date-cat-nd">'.get_the_date( 'd.m.y', get_the_ID() ).' |<span> '.get_the_category(get_the_ID())[0]->name.'</span></p>
                            <h5>'.get_the_title().'</h5>
                        </div>
                    </div>
                </div>';

    endwhile;
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

function more_blog_news(){
    
    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => 'news',
        'post_status' => 'publish',
        'category_name' => 'blog',
        'posts_per_page' => $ppp,
        'paged'    => $page,
        'order' => 'DESC'
    );

    $loop = new WP_Query($args);

    $out = '';
    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
        $out .= '<div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">
                    <div class="nd-post-div" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
                       <div class="img-detail"> <img class="w-newsdetail" src="'.get_the_post_thumbnail_url(get_the_ID()).'"></div>
                        <div class="post-content-nd">
                            <p class="date-cat-nd">'.get_the_date( 'd.m.y', get_the_ID() ).' |<span> '.get_the_category(get_the_ID())[0]->name.'</span></p>
                            <h5>'.get_the_title().'</h5>
                        </div>
                    </div>
                </div>';

    endwhile;
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_blog_news', 'more_blog_news');
add_action('wp_ajax_more_blog_news', 'more_blog_news');

function more_press_news(){
    
    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => 'news',
        'post_status' => 'publish',
        'category_name' => 'press_releases',
        'posts_per_page' => $ppp,
        'paged'    => $page,
        'order' => 'DESC'
    );

    $loop = new WP_Query($args);

    $out = '';
    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
        $out .= '<div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">
                    <div class="nd-post-div" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
                        <div class="img-detail"> <img class="w-newsdetail" src="'.get_the_post_thumbnail_url(get_the_ID()).'"></div>
                        <div class="post-content-nd">
                            <p class="date-cat-nd">'.get_the_date( 'd.m.y', get_the_ID() ).' |<span> '.get_the_category(get_the_ID())[0]->name.'</span></p>
                            <h5>'.get_the_title().'</h5>
                        </div>
                    </div>
                </div>';

    endwhile;
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_press_news', 'more_press_news');
add_action('wp_ajax_more_press_news', 'more_press_news');

function more_trade_news(){
    
    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => 'news',
        'post_status' => 'publish',
        'category_name' => 'trade-shows',
        'posts_per_page' => $ppp,
        'paged'    => $page,
        'order' => 'DESC'
    );

    $loop = new WP_Query($args);

    $out = '';
    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
        $out .= '<div class="col-lg-4 col-md-4 col-sm-6 col-6 nd-post-col-set">
                    <div class="nd-post-div" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
                       <div class="img-detail"> <img class="w-newsdetail" src="'.get_the_post_thumbnail_url(get_the_ID()).'"></div>
                        <div class="post-content-nd">
                            <p class="date-cat-nd">'.get_the_date( 'd.m.y', get_the_ID() ).' |<span> '.get_the_category(get_the_ID())[0]->name.'</span></p>
                            <h5>'.get_the_title().'</h5>
                        </div>
                    </div>
                </div>';

    endwhile;
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_trade_news', 'more_trade_news');
add_action('wp_ajax_more_trade_news', 'more_trade_news');

function news_all(){
    
    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => 'news',
        'post_status' => 'publish',
        'posts_per_page' => $ppp,
        'paged'    => $page,
        'order' => 'DESC'
    );

    $loop = new WP_Query($args);

    $out = '';
    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
        $out .= '<div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set>
                    <div class="nd-post-div" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
                       <div class="img-detail"> <img class="w-newsdetail" src="'.get_the_post_thumbnail_url(get_the_ID()).'"></div>
                        <div class="post-content-ne">
                            <p class="date-cat-ne">'.get_the_date( 'd.m.y', get_the_ID() ).' |<span> '.get_the_category(get_the_ID())[0]->name.'</span></p>
                            <h5>'.get_the_title().'</h5>
                        </div>
                    </div>
                </div>';

    endwhile;
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_news_all', 'news_all');
add_action('wp_ajax_news_all', 'news_all');

function blogs_all(){
    
    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;
    
    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => 'news',
        'post_status' => 'publish',
        'category_name' => 'blog',
        'posts_per_page' => $ppp,
        'paged'    => $page,
        'order' => 'DESC',
        
    );
   
    $loop = new WP_Query($args);
   
    $out = '';
    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
        $out .= '<div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set>
                    <div class="nd-post-div" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
                     <div class="img-detail"> <img class="w-newsdetail" src="'.get_the_post_thumbnail_url(get_the_ID()).'"></div>
                        <div class="post-content-ne">
                            <p class="date-cat-ne">'.get_the_date( 'd.m.y', get_the_ID() ).' |<span> '.get_the_category(get_the_ID())[0]->name.'</span></p>
                            <h5>'.get_the_title().'</h5>
                        </div>
                    </div>
                </div>';

    endwhile;
    endif;
    //print_r($out);
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_blogs_all', 'blogs_all');
add_action('wp_ajax_blogs_all', 'blogs_all');

function press_alls(){
    
    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => 'news',
        'post_status' => 'publish',
        'category_name' => 'press_releases',
        'posts_per_page' => $ppp,
        'paged'    => $page,
        'order' => 'DESC',
        
    );

    $loop = new WP_Query($args);

    $out = '';
    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
        $out .= '<div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set>
                    <div class="nd-post-div" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
                        <div class="img-detail"> <img class="w-newsdetail" src="'.get_the_post_thumbnail_url(get_the_ID()).'"></div>
                        <div class="post-content-ne">
                            <p class="date-cat-ne">'.get_the_date( 'd.m.y', get_the_ID() ).' |<span> '.get_the_category(get_the_ID())[0]->name.'</span></p>
                            <h5>'.get_the_title().'</h5>
                        </div>
                    </div>
                </div>';

    endwhile;
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_press_alls', 'press_alls');
add_action('wp_ajax_press_alls', 'press_alls');

function trade_alls(){
    
    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => 'news',
        'post_status' => 'publish',
        'category_name' => 'trade-shows',
        'posts_per_page' => $ppp,
        'paged'    => $page,
        'order' => 'DESC',
        
    );

    $loop = new WP_Query($args);

    $out = '';
    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
        $out .= '<div class="col-lg-4 col-md-4 col-sm-6 col-6 ne-post-col-set>
                    <div class="nd-post-div" data-aos="fade-up"
    data-aos-offset="100"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="true"
    data-aos-anchor-placement="top-center">
                       <div class="img-detail"> <img class="w-newsdetail" src="'.get_the_post_thumbnail_url(get_the_ID()).'"></div>
                        <div class="post-content-ne">
                            <p class="date-cat-ne">'.get_the_date( 'd.m.y', get_the_ID() ).' |<span> '.get_the_category(get_the_ID())[0]->name.'</span></p>
                            <h5>'.get_the_title().'</h5>
                        </div>
                    </div>
                </div>';

    endwhile;
    
    endif;
    
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_trade_alls', 'trade_alls');
add_action('wp_ajax_trade_alls', 'trade_alls');


function extend_woo_pr(){
    
    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;
    $id = $_POST["id"];
    $args = array('suppress_filters' => true, 'post_type' => 'product', 'posts_per_page' => $ppp,'paged' => $page,'product_cat' => $id );

    $loop = new WP_Query( $args );
    
    header("Content-Type: text/html");

    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
    $out .='
            
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 link_'.get_the_ID().'">
                <div class="product-card-div sect-two-prod-fltr-page">
                    <img class="product-img" src="'.get_the_post_thumbnail_url(get_the_ID()).'">
                    
                    <a href="'.get_permalink( get_the_ID() ).'" id="link_'.get_the_ID().'">
                    <h4 class="product-head" >'.get_the_title().'</h4>
                    </a>>
                    
                    <table class="card-table" id="link_'.get_the_ID().'">
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
            
            ';     
   endwhile;
    
    endif;
    
    wp_reset_postdata();
    die($out);

}

add_action('wp_ajax_nopriv_extend_woo_pr', 'extend_woo_pr');
add_action('wp_ajax_extend_woo_pr', 'extend_woo_pr');

function woo_products(){
    
    $id =  $_POST["id"];
    
    $args = array( 'post_type' => 'product', 'posts_per_page' => 6,'product_cat' => $id );

    $loop = new WP_Query( $args );
    $count = array( 'post_type' => 'product','product_cat' => $id );
    $countloop = new WP_Query( $count );

    $out .='<p class="reoduct-srch-result-pgr">'.$countloop->post_count.' results for <span>“'.$id.'”</span></p><div class="row" id="employeeList" >';
    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
    $out .='
            
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 link_'.get_the_ID().'">
                <div class="product-card-div sect-two-prod-fltr-page">
                    <img class="product-img" src="'.get_the_post_thumbnail_url(get_the_ID()).'">
                    <a href="'.get_permalink( get_the_ID() ).'" id="link_'.get_the_ID().'">
                    <h4 class="product-head" >'.get_the_title().'</h4>
                    </a>
                    <table class="card-table" id="link_'.get_the_ID().'">
                        <tbody>
                            <tr>
                                <td class="heading-prod-td">Form</td>
                                <td class="simple-prod-td" >Sodium</td>
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
            
            ';     
   endwhile;
    
    endif;
    $out .='</div><a class="view-more-btn-pgr more_pro" id="'.$id.'">View more</a>';
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_woo_products', 'woo_products');
add_action('wp_ajax_woo_products', 'woo_products');



function all_news() {
    
    ?>
<script type="text/javascript">
var j = jQuery.noConflict();
j(document).ready(function() {

    var load_posts_ppp = 3; // Post per page
    var load_posts_pageNumber = 1;


    function load_posts() {

        load_posts_pageNumber++;
        var str = '&pageNumber=' + load_posts_pageNumber + '&ppp=' + load_posts_ppp + '&action=more_post_ajax';
        var ajax_posts = "<?php echo admin_url( 'admin-ajax.php' );?>";
        j.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts,
            data: str,
            success: function(data) {
                var $data = j(data);
                if ($data.length) {
                    j("#all-news").append($data);
                    j("#more_posts").attr("disabled", false);
                } else {
                    j("#more_posts").attr("disabled", true);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }

        });
        return false;
    }

    j("#more_posts").on("click", function() { // When btn is pressed.
        j("#more_posts").attr("disabled", true); // Disable the button, temp.
        load_posts();
        j(this).insertAfter(
            '#all-news'); // Move the 'Load More' button to the end of the the newly added posts.
    });
    var load_blogs_ppp = 3; // Post per page
    var load_blogs_pageNumber = 1;

    function load_blogs() {

        //j("#more_posts").attr("disabled",true);
        load_blogs_pageNumber++;
        var str = '&pageNumber=' + load_blogs_pageNumber + '&ppp=' + load_blogs_ppp + '&action=more_blog_news';
        var ajax_posts = "<?php echo admin_url( 'admin-ajax.php' );?>";
        j.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts,
            data: str,
            success: function(data) {
                var $data = j(data);
                if ($data.length) {
                    j("#all-blog").append($data);
                    j("#more_blog").attr("disabled", false);
                } else {
                    j("#more_blog").attr("disabled", true);
                }
            }

        });
        return false;
    }

    j("#more_blog").on("click", function() {

        j("#more_blog").attr("disabled", true);
        load_blogs();
        j(this).insertAfter('#all-blog');
    });
    var load_press_ppp = 3; // Post per page
    var load_press_pageNumber = 1;

    function load_press_blog() {

        //j("#more_posts").attr("disabled",true);
        load_press_pageNumber++;
        var str = '&pageNumber=' + load_press_pageNumber + '&ppp=' + load_press_ppp + '&action=more_press_news';
        var ajax_posts = "<?php echo admin_url( 'admin-ajax.php' );?>";
        j.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts,
            data: str,
            success: function(data) {
                var $data = j(data);
                if ($data.length) {
                    j("#all_press").append($data);
                    j("#press_news").attr("disabled", false);
                } else {
                    j("#press_news").attr("disabled", true);
                }
            }

        });
        return false;
    }

    j("#press_news").on("click", function() {

        j("#press_news").attr("disabled", true);
        load_press_blog();
        j(this).insertAfter('#all_press');
    });
    var load_trade_ppp = 3; // Post per page
    var load_trade_pageNumber = 1;

    function load_trade() {

        //j("#more_posts").attr("disabled",true);
        load_trade_pageNumber++;
        var str = '&pageNumber=' + load_trade_pageNumber + '&ppp=' + load_trade_ppp + '&action=more_trade_news';
        var ajax_posts = "<?php echo admin_url( 'admin-ajax.php' );?>";
        j.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts,
            data: str,
            success: function(data) {
                var $data = j(data);
                if ($data.length) {
                    j("#all-trade").append($data);
                    j("#all_trade").attr("disabled", false);
                } else {
                    j("#all_trade").attr("disabled", true);
                }
            }

        });
        return false;
    }

    j("#all_trade").on("click", function() {

        j("#all_trade").attr("disabled", true);
        load_trade();
        j(this).insertAfter('#all-trade');
    });
    var more_news_ppp = 5; // Post per page
    var more_news_pageNumber = 1;

    function more_news() {

        //j("#more_posts").attr("disabled",true);
        more_news_pageNumber++;
        var str = '&pageNumber=' + more_news_pageNumber + '&ppp=' + more_news_ppp + '&action=news_all';
        var ajax_posts = "<?php echo admin_url( 'admin-ajax.php' );?>";
        j.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts,
            data: str,
            success: function(data) {
                var $data = j(data);
                if ($data.length) {
                    j("#all-news-post").append($data);
                    j("#more_news_post").attr("disabled", false);
                } else {
                    j("#more_news_post").attr("disabled", true);
                }
            }

        });
        return false;
    }

    j("#more_news_post").on("click", function() {

        j("#more_news_post").attr("disabled", true);

        more_news();

        j(this).insertAfter('#all-news-post');
    });
    var more_blogs_ppp = 5; // Post per page
    var more_blogs_pageNumber = 1;

    function more_blogs() {

        //j("#more_posts").attr("disabled",true);
        more_blogs_pageNumber++;
        var str = '&pageNumber=' + more_blogs_pageNumber + '&ppp=' + more_blogs_ppp + '&action=blogs_all';
        var ajax_posts = "<?php echo admin_url( 'admin-ajax.php' );?>";
        j.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts,
            data: str,
            success: function(data) {
                var $data = j(data);
                if ($data.length) {
                    j("#n-blogs").append($data);
                    j("#n_blogs").attr("disabled", false);
                } else {
                    j("#n_blogs").attr("disabled", true);
                }
            }

        });
        return false;
    }

    j("#n_blogs").on("click", function() {

        j("#n_blogs").attr("disabled", true);

        more_blogs();

        j(this).insertAfter('#n-blogs');
    });
    var more_press_ppp = 5; // Post per page
    var more_press_pageNumber = 1;

    function more_press() {

        //j("#more_posts").attr("disabled",true);
        more_press_pageNumber++;
        var str = '&pageNumber=' + more_press_pageNumber + '&ppp=' + more_press_ppp + '&action=press_alls';
        var ajax_posts = "<?php echo admin_url( 'admin-ajax.php' );?>";
        j.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts,
            data: str,
            success: function(data) {
                var $data = j(data);
                if ($data.length) {
                    j("#p-blogs").append($data);
                    j("#p_blog").attr("disabled", false);
                } else {
                    j("#p_blog").attr("disabled", true);
                }
            }

        });
        return false;
    }

    j("#p_blog").on("click", function() {

        j("#p_blog").attr("disabled", true);

        more_press();

        j(this).insertAfter('#p-blogs');
    });
    var more_trade_blogs_ppp = 5; // Post per page
    var more_trade_blogs_pageNumber = 1;

    function more_trade_blogs() {

        //j("#more_posts").attr("disabled",true);
        more_trade_blogs_pageNumber++;
        var str = '&pageNumber=' + more_trade_blogs_pageNumber + '&ppp=' + more_trade_blogs_ppp +
            '&action=trade_alls';
        var ajax_posts = "<?php echo admin_url( 'admin-ajax.php' );?>";
        j.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts,
            data: str,
            success: function(data) {
                var $data = j(data);
                if ($data.length) {
                    j("#t-blogs").append($data);
                    j("#t_blogs").attr("disabled", false);
                } else {
                    j("#t_blogs").attr("disabled", true);
                }
            }

        });
        return false;
    }

    j("#t_blogs").on("click", function() {

        j("#t_blogs").attr("disabled", true);

        more_trade_blogs();

        j(this).insertAfter('#t-blogs');
    });



    j('.clickMe').click(function () {
        var id = this.id;
       //alert(this.id);
        var str = '&id=' + id + '&action=woo_products';
        //alert(str);
       var ajax_posts = "<?php echo admin_url( 'admin-ajax.php' );?>";
        j.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts,
            data: str,
            success: function(data) {
               
                var $data = j(data);
                if ($data.length) {
                    j("#products_woo").empty();
                    j("#products_woo").append($data);
                }
            }

        });
        return false;
    });

    var more_trade_woo_pp = 6; // Post per page
    var more_trade_woo_pnum = 1;

    function more_woo_pro(id) {
        
        //j("#more_posts").attr("disabled",true);
        more_trade_woo_pnum++;
        var str = '&pageNumber=' + more_trade_woo_pnum + '&id='+id + '&ppp=' + more_trade_woo_pp +
            '&action=extend_woo_pr';
        var ajax_posts = "<?php echo admin_url( 'admin-ajax.php' );?>";
        j.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts,
            data: str,
            success: function(data) {
                var $data = j(data);
                if ($data.length) {
                    j("#products_woo").append($data); 
                }
            }

        });
        return false;
    }
    j(document).on("click", ".more_pro", function(){

       more_woo_pro(this.id);
       j(this).insertAfter('#products_woo');
    });

    j('[data-search]').on('keyup', function() {
        var input, filter, ul, li, a, i, txtValue,hid;
        input = document.getElementById("myInput");
        //console.log(input);
        filter = input.value.toUpperCase();
        ul = document.getElementById("employeeList");
        
        li = ul.getElementsByTagName("a");
        //console.log(li);
        j.each( li, function( i, val ) {
            //a = j("#link_839").find("h4")[0];
            var curr_id = this.id;
            a = li[i].getElementsByTagName("h4")[0];
            console.log(a);
            txtValue = a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                j("."+curr_id)[0].style.display = "block";
            } else {
                j("."+curr_id)[0].style.display = "none";
            }
        });
        return;
        //console.log(hid);
        //a = li.getElementsByTagName("a");
        //console.log(li[0].getElementsByTagName("h4")[0]);
        
    });

    j('#ionic_form').on('keyup', function() {
        var input, filter, ul, li, a, i, txtValue,hid;
        input = document.getElementById("ionic_form");
        //console.log(input);
        filter = input.value.toUpperCase();
        ul = document.getElementById("employeeList");
        
        li = ul.getElementsByTagName("table");
        console.log(li);
        j.each( li, function( i, val ) {
            //a = j("#link_839").find("h4")[0];
            var curr_id = this.id;
            a = li[i].getElementsByTagName("td")[1];
            console.log(a.innerText);
            console.log(curr_id);
            txtValue = a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                console.log('block');
                j("."+curr_id)[0].style.display = "block";
            } else {
                console.log('none');
                j("."+curr_id)[0].style.display = "none";
            }
        });
        return;
        //console.log(hid);
        //a = li.getElementsByTagName("a");
        //console.log(li[0].getElementsByTagName("h4")[0]);
        
    });

});





</script>
<?php
    }
    add_action( 'wp_footer', 'all_news' );
function pagination_bar( $query_wp ) 
{
    $pages = $query_wp->max_num_pages;
    $big = 999999999; // need an unlikely integer
    if ($pages > 1)
    {
        $current_page = max(1, get_query_var('paged'));
        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $pages,
        ));
    }
}

add_action('init',function(){
    register_taxonomy(
        'resource_category',   
        'resource',        
        [ 
            'hierarchical' => true,  
            'label' => 'Categories',  
            'query_var' => true,
            'rewrite' => [
                'slug' => 'resource-category', 
                'with_front' => false 
            ]
        ] 
    );  
    register_post_type( 'resource', [
        'labels' => [
            'name'                => __( 'Resource' ),
            'singular_name'       => __( 'Resource' ),
            'menu_name'           => __( 'Resources' ),
            'parent_item_colon'   => __( 'Parent Resource' ),
            'all_items'           => __( 'All Resources' ),
            'view_item'           => __( 'View Resources' ),
            'add_new_item'        => __( 'Add New Resource' ),
            'add_new'             => __( 'Add New' ),
            'edit_item'           => __( 'Edit Resource' ),
            'update_item'         => __( 'Update Resource' ),
            'search_items'        => __( 'Search Resources' ),
            'not_found'           => __( 'Not Found' ),
            'not_found_in_trash'  => __( 'Not found in Trash' ),
        ],
        'taxonomies' => ['resource_category'],
        'supports' => [ 'title', 'editor', 'thumbnail' ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'resources'],
    ]);
});


add_action('init',function(){
    register_taxonomy(
        'services_category',   
        'services',        
        [ 
            'hierarchical' => true,  
            'label' => 'Categories',  
            'query_var' => true,
            'rewrite' => [
                'slug' => 'services-category', 
                'with_front' => false 
            ]
        ] 
    );  
    register_post_type( 'services', [
        'labels' => [
            'name'                => __( 'Services' ),
            'singular_name'       => __( 'Services' ),
            'menu_name'           => __( 'Services' ),
            'parent_item_colon'   => __( 'Parent Services' ),
            'all_items'           => __( 'All Services' ),
            'view_item'           => __( 'View Services' ),
            'add_new_item'        => __( 'Add New Services' ),
            'add_new'             => __( 'Add New' ),
            'edit_item'           => __( 'Edit Services' ),
            'update_item'         => __( 'Update Services' ),
            'search_items'        => __( 'Search Services' ),
            'not_found'           => __( 'Not Found' ),
            'not_found_in_trash'  => __( 'Not found in Trash' ),
        ],
        'taxonomies' => ['services_category'],
        'supports' => [ 'title', 'editor', 'thumbnail' ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'services'],
    ]);
});


add_action('init',function(){
    register_taxonomy(
        'application_category',   
        'application',        
        [ 
            'hierarchical' => true,  
            'label' => 'Categories',  
            'query_var' => true,
            'rewrite' => [
                'slug' => 'application-category', 
                'with_front' => false 
            ]
        ] 
    );  
    register_post_type( 'application', [
        'labels' => [
            'name'                => __( 'Application' ),
            'singular_name'       => __( 'Application' ),
            'menu_name'           => __( 'Applications' ),
            'parent_item_colon'   => __( 'Parent Application' ),
            'all_items'           => __( 'All Applications' ),
            'view_item'           => __( 'View Applications' ),
            'add_new_item'        => __( 'Add New Application' ),
            'add_new'             => __( 'Add New' ),
            'edit_item'           => __( 'Edit Application' ),
            'update_item'         => __( 'Update Application' ),
            'search_items'        => __( 'Search Applications' ),
            'not_found'           => __( 'Not Found' ),
            'not_found_in_trash'  => __( 'Not found in Trash' ),
        ],
        'taxonomies' => ['application_category'],
        'supports' => [ 'title', 'editor', 'thumbnail' ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'applications'],
    ]);
});


add_action('init',function(){
    register_taxonomy(
        'news_category',   
        'news',        
        [ 
            'hierarchical' => true,  
            'label' => 'Categories',  
            'query_var' => true,
            'rewrite' => [
                'slug' => 'news-category', 
                'with_front' => false 
            ]
        ] 
    );  
    register_post_type( 'news', [
        'labels' => [
            'name'                => __( 'News' ),
            'singular_name'       => __( 'News' ),
            'menu_name'           => __( 'News' ),
            'parent_item_colon'   => __( 'Parent News' ),
            'all_items'           => __( 'All News' ),
            'view_item'           => __( 'View News' ),
            'add_new_item'        => __( 'Add New News' ),
            'add_new'             => __( 'Add New' ),
            'edit_item'           => __( 'Edit News' ),
            'update_item'         => __( 'Update News' ),
            'search_items'        => __( 'Search News' ),
            'not_found'           => __( 'Not Found' ),
            'not_found_in_trash'  => __( 'Not found in Trash' ),
        ],
        'taxonomies' => ['news_category'],
        'supports' => [ 'title', 'editor', 'thumbnail' ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'news'],
    ]);
});

function variation_settings_fields( $loop, $variation_data, $variation ) {
    woocommerce_wp_text_input(
        array(
            'id'          => '_product_name[' . $variation->ID . ']',
            'label'       => __( 'Product Name', 'woocommerce' ),
            'placeholder' => '',
            'desc_tip'    => 'true',
            'description' => __( 'Enter product name here.', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_product_name', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_cartridge_type[' . $variation->ID . ']',
            'label'       => __( 'Cartridge Type', 'woocommerce' ),
            'placeholder' => '',
            'desc_tip'    => 'true',
            'description' => __( 'Enter cartridge type here.', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_cartridge_type', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_housing_compatability[' . $variation->ID . ']',
            'label'       => __( 'Housing Compatability', 'woocommerce' ),
            'placeholder' => '',
            'desc_tip'    => 'true',
            'description' => __( 'Enter housing compatability here.', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_housing_compatability', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_max_flow[' . $variation->ID . ']',
            'label'       => __( 'Max. Flow', 'woocommerce' ),
            'placeholder' => '',
            'desc_tip'    => 'true',
            'description' => __( 'Enter max flow here.', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_max_flow', true )
        )
    );

    woocommerce_wp_select( 
        array(
            'id'          => 'pro_status_' . $variation->ID,
            'label'       => __( 'Product Status', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_pro_status', true ),
            'options' => array(
                ''   => __( 'Please select product status', 'woocommerce' ),
                'active'   => __( 'Active', 'woocommerce' ),
                'inactive'   => __( 'Inactive', 'woocommerce' )
            )
        )   
    );

    woocommerce_wp_select( 
        array(
            'id'          => 'prop_compliant_' . $variation->ID,
            'label'       => __( 'PROP 65 Compliant', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_prop_compliant', true ),
            'options' => array(
                ''      => __( 'Please select PROP Compliant', 'woocommerce' ),
                '1'     => __( 'True', 'woocommerce' ),
                '0'     => __( 'False', 'woocommerce' )
            )
        )   
    );
}
add_action( 'woocommerce_product_after_variable_attributes', 'variation_settings_fields', 10, 3 );

add_action( 'woocommerce_save_product_variation', 'jb_woo_add_unit_size_field_save' );
function jb_woo_add_unit_size_field_save($post_id){
    $select_prop_compliant = $_POST["prop_compliant_$post_id"];
    if( ! empty( $select_prop_compliant ) ) {
        update_post_meta( $post_id, '_prop_compliant', esc_attr( $select_prop_compliant ) );
    }

    $select_pro_status = $_POST["pro_status_$post_id"];
    if( ! empty( $select_pro_status ) ) {
        update_post_meta( $post_id, '_pro_status', esc_attr( $select_pro_status ) );
    }

    $_cartridge_type = $_POST['_cartridge_type'][ $post_id ];
    if ( ! empty( $_cartridge_type ) ) {
        update_post_meta( $post_id, '_cartridge_type', esc_attr( $_cartridge_type ) );
    }

    $_product_name = $_POST['_product_name'][ $post_id ];
    if ( ! empty( $_product_name ) ) {
        update_post_meta( $post_id, '_product_name', esc_attr( $_product_name ) );
    }

    $_housing_compatability = $_POST['_housing_compatability'][ $post_id ];
    if ( ! empty( $_housing_compatability ) ) {
        update_post_meta( $post_id, '_housing_compatability', esc_attr( $_housing_compatability ) );
    }

    $_max_flow = $_POST['_max_flow'][ $post_id ];
    update_post_meta( $post_id, '_max_flow', esc_attr( $_max_flow ) );
}


function pdp_change_script() {
?>
<script type="text/javascript">
	jQuery( ".attr_chng" ).click(function() {
		var attr_id = this.id;
		jQuery(".attr_chng").removeClass('active');
		jQuery("#"+attr_id).addClass('active');
		jQuery(".attr_display").css('display', 'none');
		jQuery("."+attr_id).css('display', 'block');
	});
</script>
<?php
}
add_action( 'wp_footer', 'pdp_change_script' );


// Woocommerce ajax cart shortcode
add_shortcode ('woo_cart_but', 'woo_cart_but' );
/**
 * Create Shortcode for WooCommerce Cart Menu Item
 */
function woo_cart_but() {
    ob_start();

    $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
    $cart_url = wc_get_cart_url();  // Set Cart URL

    ?>
    <li><a class="menu-item cart-contents" href="<?php echo $cart_url; ?>" title="My Basket">
    <?php
    if ( $cart_count > 0 ) {
    ?>
        <span class="cart-contents-count"><?php echo $cart_count; ?></span>
    <?php
    }
    ?>
    </a></li>
    <?php
        
    return ob_get_clean();

}

add_filter( 'woocommerce_add_to_cart_fragments', 'woo_cart_but_count' );
/**
 * Add AJAX Shortcode when cart contents update
 */
function woo_cart_but_count( $fragments ) {
 
    ob_start();
    
    $cart_count = WC()->cart->cart_contents_count;
    $cart_url = wc_get_cart_url();
    
    ?>
    <a class="cart-contents menu-item" href="<?php echo $cart_url; ?>" title="<?php _e( 'View your shopping cart' ); ?>">
    <?php
    if ( $cart_count > 0 ) {
        ?>
        <span class="cart-contents-count"><?php echo $cart_count; ?></span>
        <?php            
    }
        ?></a>
    <?php
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
}
