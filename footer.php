<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<section class="footer">
	<div class="container"> 
	<div class="row">
		<div class="col-md-4">
				
			<a href="https://resintech.trafficdesk.io/"><img src="/wp-content/uploads/2020/12/image-26.png"></a>
		</div>
		
		<div class="col-md-2">		
			<h5>
				Follow Us
			</h5>
<ul class="footer-listing">
	
	<li><a href="#"><i class="fa fa-facebook"></i><span> Facebook</span></a></li>
	<li><a href="#"><i class="fa fa-twitter"></i><span> Twitter</span></a></li>
	<li><a href="#"><i class="fa fa-linkedin"></i><span> Linkedin</span></a></li>
	<li><a href="#"><i class="fa fa-instagram"></i><span> Instagram</span></a></li>
			</ul>
		</div>
		
		<div class="col-md-2">
			<div class="menu-vga">	
			<h5>
				Quick Links
			</h5>
			<p>
				<a href="https://resintech.trafficdesk.io/products-overview/">Products</a>
			</p>
			<p>
				<a href="https://resintech.trafficdesk.io/services-overview/">Services</a>
			</p>
			<p>
				<a href="https://resintech.trafficdesk.io/application-overview/">Applications</a>
			</p>
			<p>
				<a href="https://resintech.trafficdesk.io/resources-overview/">Resources</a>
			</p>
			<p>
				<a href="#">Support</a>
			</p>
			<p>
				<a href="https://resintech.trafficdesk.io/resources-overview/">Company</a>
			</p>
			<p>
				<a href="#">Careers</a>
			</p>
		</div>
			</div>
	<div class="col-md-2">
			<div class="contact-us">
				 
			<h5>
				Contact
			</h5>
			<p>
				<a href="#">Tel: 856-768-9600</a>
		</p>
		<p>
				Fax: 856-768-9601
		</p>
				</div>
		</div>
	<div class="col-md-2">
			<div class="address">
			<h5>
			Address
			</h5>
				<p>
					ResinTech Gloabl Headquarters 1801 Federal St.
				</p>
				<p>
					Camden, New Jersey 08105
				</p>
			</div>
		</div>
		</div>
				</div>
	
	</section>
<section class="sub-footer">
	<div class="container tech">
		<div class="row">
			<div class="col-md-6">
				
				<p>
					©2020 Resintech inc
				</p>
			</div>
			<div class="col-md-6">
				<p class="terms">
					&nbsp;&nbsp;Terms & Conditions &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Privacy Policy &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Sitemap
				</p>
			</div>
			
		</div>
	</div>
</section>
<!--============================-- Mobile Footer start here----========================----->
<section class="mb-footer">
	<div class="container"> 
	<div class="row">
		<div class="col-md-3">
				
			<a href="https://resintech.trafficdesk.io/"><img src="/wp-content/uploads/2020/12/image-26.png"></a>
		</div>
		<div class="col-md-3">
			<div class="mb-address">
			<h5>
			Address
			</h5>
				<p>
					ResinTech Gloabl Headquarters 1801 Federal St.
				</p>
				<p>
					Camden, New Jersey 08105
				</p>
			</div>
		</div>
		<div class="col-md-3">
			<div class="mb-contact-us">
				 
			<h5>
				Contact
			</h5>
			<p>
				Tel: 856-768-9600
		</p>
		<p>
				Fax: 856-768-9601
		</p>
				</div>
		</div>
		<div class="col-md-3">		
			
<ul class="mb-footer-listing">
	<li> <i class="fa fa-facebook-square" aria-hidden="true"></i></li>
	<li> <i class="fa fa-twitter-square" aria-hidden="true"></i></li>
	<li><i class="fa fa-linkedin-square" aria-hidden="true"></i></li>
	<li> <i class="fa fa-instagram" aria-hidden="true"></i></li>
			</ul>
		</div>
		
		
	
	
		</div>
				</div>
	
	</section>
<section class="mb-sub-footer">
	<div class="container tech">
		<div class="row">
			<div class="col-md-6">
				
				<p>
					©2020 Resintech inc
				</p>
			</div>
			<div class="col-md-6">
					<ul class="mb-terms">
						 <li>Terms & Conditions
						</li>
						<li>Privacy
						</li>
						<li>Sitemap
						</li>
				</ul>
					
			</div>
			
		</div>
	</div>
</section>
<!--============================-- Mobile Footer end here----========================----->

			<footer id="site-footer" role="contentinfo" class="header-footer-group">

				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

						<p class="powered-by-wordpress">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentytwenty' ) ); ?>">
								<?php _e( 'Powered by WordPress', 'twentytwenty' ); ?>
							</a>
						</p><!-- .powered-by-wordpress -->

					</div><!-- .footer-credits -->

					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

            <script>
				var j = jQuery.noConflict();
                j(document).ready(function(){
					
                // j(".nav-menu").open();
                
                j("#open").click(function(){
                if(j("#nav").hasClass("nav-menu")){
                j("#nav").addClass("none");
                j('.fa-times').toggle();
                j(".nav-menu").animate({left: "0px"},"slow");
                j("html").css("overflow","hidden");
                }
                else{
                j("#nav").removeClass("none");
                }
                
                
                // j(".nav-menu").Close();
                
                });
                j("#close").click(function(){

                if(j("#nav").hasClass("none")){
                j('.fa-times').toggle();
                j("html").css("overflow","auto");
                var x = j(".nav-menu").animate({left: "-2000px"},"slow");

                    j('li').removeClass('color-red'); 
                    j(".drop_down, .product, .mga_down, .labservice , .application_down, .resources_down, .support_down, .company_down").css('display','none');
                    j('.last-col').css('display','none');
            
                  
                if(x == "-2000px"){
                j("#nav").removeClass("none");
                
            }
            
                }
                
                else{
                j("#nav").addClass("none");
                }
               
                
                });
                    //*DROPDOWN*//
                j("#home_drop").click(function(){        
                if(j("#home_dropdown").hasClass("drop_down")){
                    j(".drop_down").toggle();
                    j(".blue-box .last-col:nth-child(1)").toggle('slow');
                    j("#first li:nth-child(1)").toggleClass("color-red");
                    j("#first li").not(':first').removeClass('color-red');
                     j(".product").css('display','none');
					 j(".labservice").css('display','none');      
                     j(".drop_down ul li").removeClass('color-red');
j(".mga_down,.application_down,.resources_down,.support_down,.company_down").css("display","none");                 
                   j('.last-col').not(':nth-of-type(1)').css('display','none');
                    
                    }    
                     
                });

            
                //col-1 li-2
                j("#second_drop").click(function(){
                if(j("#cta_dropdown").hasClass("mga_down")){
                j(".mga_down").toggle();
                j(".last-col:nth-child(2)").toggle('slow');
                j("#first li:nth-child(2)").toggleClass("color-red");
                j("#first li").not(":nth-child(2)").removeClass('color-red'); 
                j(".product").css('display','none'); 
					                j(".labservice").css('display','none');      
                     j(".mga_down ul li").removeClass('color-red');
j(".drop_down,.application_down,.resources_down,.support_down,.company_down").css("display","none");    
                j('.last-col').not(':nth-of-type(2)').css('display','none');                        
                }          
                });

                //col-1 li-3
                    j("#third_drop").click(function(){
                if(j("#ctamenufirst_dropdown").hasClass("application_down")){
                j(".application_down").toggle();
                j(".last-col:nth-child(3)").toggle('slow');
                j("#first li:nth-child(3)").toggleClass("color-red");
                j("#first li").not(":nth-child(3)").removeClass('color-red'); 
                j(".product").css('display','none');
                j(".drop_down,.mga_down,.resources_down,.support_down,.company_down").css("display","none");  
                j('.last-col').not(':nth-of-type(3)').css('display','none');                        

            }
                });

                // col-1 li-4
                    j("#fourth_drop").click(function(){
                if(j("#ctamenusecond_dropdown").hasClass("resources_down")){
                j(".resources_down").toggle();
                j("#first li:nth-child(4)").toggleClass("color-red");
                j("#first li").not(":nth-child(4)").removeClass('color-red');     
                j(".product").css('display','none');
j(".drop_down,.mga_down,.application_down,.support_down,.company_down").css("display","none");                      
            }
                 
                });

                //li 5
                    j("#fifth_drop").click(function(){
                if(j("#ctamenusupport_dropdown").hasClass("support_down")){
                j(".support_down").toggle();
                j("#first li:nth-child(5)").toggleClass("color-red");
                j("#first li").not(":nth-child(5)").removeClass('color-red'); 
                j(".product").css('display','none');
j(".drop_down,.mga_down,.application_down,.resources_down,.company_down").css("display","none");                      
                }            
                });

                // li 6
                    j("#sixth_drop").click(function(){
                if(j("#ctamenucompany_dropdown").hasClass("company_down")){
                j(".company_down").toggle();
                j("#first li:nth-child(6)").toggleClass("color-red");
                j("#first li").not(":nth-child(6)").removeClass('color-red'); 
                j(".product").css('display','none');
j(".drop_down,.mga_down,.application_down,.resources_down,.support_down").css("display","none");                      
                }        
                });
                
                });

                
                //col-2 li 1
                j("#home_dropdown ul li:nth-child(1)").click(function(){
                    j(".product:nth-child(1)").toggle();
                    j("#home_dropdown ul li:nth-child(1)").toggleClass("color-red");
                    j(".product").not(":nth-child(1)").css('display','none');
                    j("#home_dropdown ul li").not(":nth-child(1)").removeClass("color-red");
                });
                
                //col-2 li 2
                j("#home_dropdown ul li:nth-child(2)").click(function(){
                    j(".product:nth-child(2)").toggle();
                    j("#home_dropdown ul li:nth-child(2)").toggleClass("color-red");
                    j(".product").not(":nth-child(2)").css('display','none');
                    j("#home_dropdown ul li").not(":nth-child(2)").removeClass("color-red");
                });
                
                
                //col-2 li 3
                j("#home_dropdown ul li:nth-child(3)").click(function(){
                    j(".product:nth-child(3)").toggle();
                    j("#home_dropdown ul li:nth-child(3)").toggleClass("color-red");
                    j(".product").not(":nth-child(3)").css('display','none');
                    j("#home_dropdown ul li").not(":nth-child(3)").removeClass("color-red");
                });
                    //col-2 li 4
                    j("#home_dropdown ul li:nth-child(4)").click(function(){
                    j(".product:nth-child(4)").toggle();
                    j("#home_dropdown ul li:nth-child(4)").toggleClass("color-red");
                    j(".product").not(":nth-child(4)").css('display','none');
                    j("#home_dropdown ul li").not(":nth-child(4)").removeClass("color-red");
                });
                  //col-2 li 5
                  j("#home_dropdown ul li:nth-child(5)").click(function(){
                    j(".product:nth-child(5)").toggle();
                    j("#home_dropdown ul li:nth-child(5)").toggleClass("color-red");
                    j(".product").not(":nth-child(5)").css('display','none');
                    j("#home_dropdown ul li").not(":nth-child(5)").removeClass("color-red");
                });
                     //col-2 li 6
//                      j("#home_dropdown ul li:nth-child(6)").click(function(){
//                     j(".product:nth-child(6)").toggle();
//                     j("#home_dropdown ul li:nth-child(6)").toggleClass("color-red");
//                     j(".product").not(":nth-child(6)").css('display','none');
//                     j("#home_dropdown ul li").not(":nth-child(6)").removeClass("color-red");
//                 });
                     //col-2 li 7
                     j("#home_dropdown ul li:nth-child(7)").click(function(){
                    j(".product:nth-child(6)").toggle();
                    j("#home_dropdown ul li:nth-child(7)").toggleClass("color-red");
                    j(".product").not(":nth-child(6)").css('display','none');
                    j("#home_dropdown ul li").not(":nth-child(7)").removeClass("color-red");
                });
                   //col-2 li 10
                   j("#home_dropdown ul li:nth-child(10)").click(function(){
                    j(".product:nth-child(7)").toggle();
                    j("#home_dropdown ul li:nth-child(10)").toggleClass("color-red");
                    j(".product").not(":nth-child(7)").css('display','none');
                    j("#home_dropdown ul li").not(":nth-child(10)").removeClass("color-red");
                });
				
				
                //col-1 li-2 col-2 li-1
                j("#cta_dropdown li:nth-child(1)").click(function(){
                    j(".product:nth-child(8)").toggle();
                    j("#cta_dropdown ul li:nth-child(1)").toggleClass("color-red");
                    j(".product").not(":nth-child(8)").css('display','none');
                    j("#cta_dropdown ul li").not(":nth-child(1)").removeClass("color-red");
                });
                //col-1 li-2 col-2 li-2
                j("#cta_dropdown li:nth-child(2)").click(function(){
                    j(".product:nth-child(9)").toggle();
                    j("#cta_dropdown ul li:nth-child(2)").toggleClass("color-red");
                    j(".product").not(":nth-child(9)").css('display','none');
                    j("#cta_dropdown ul li").not(":nth-child(2)").removeClass("color-red");
                });
				  //col-1 li-2 col-2 li-4
                j("#cta_dropdown li:nth-child(4)").click(function(){
                    j(".product:nth-child(10)").toggle();
                    j("#cta_dropdown ul li:nth-child(4)").toggleClass("color-red");
                    j(".product").not(":nth-child(10)").css('display','none');
                    j("#cta_dropdown ul li").not(":nth-child(4)").removeClass("color-red");
                });
				  //col-1 li-2 col-2 li-5
                j("#cta_dropdown li:nth-child(5)").click(function(){
                    j(".product:nth-child(11)").toggle();
                    j("#cta_dropdown ul li:nth-child(5)").toggleClass("color-red");
                    j(".product").not(":nth-child(11)").css('display','none');
                    j("#cta_dropdown ul li").not(":nth-child(5)").removeClass("color-red");
                });
                
                if(j(".drop_down,.mga_down,.application_down,.resources_down,.support_down").css('display') == 'none'){
                    
                j("#home_dropdown ul li").removeClass('color-red');
                }
				


// gsap.timeline()
// .from("img.d-block.w-100", {opacity:0.5, scale:1.2, ease:"back"})

// .from(".cbx", {y:160, stagger:0.1, duration:5, ease:"back"})
// gsap.registerPlugin(ScrollTrigger);
// gsap.to(".cbx", {
// 	scrollTrigger: ".cbx",
// 	y: -100,
// 	duration:3

// });
// gsap.registerPlugin(ScrollTrigger);

// gsap.to(".elementor-slide-heading", {
// 	scrollTrigger: {
// 		trigger: ".elementor-slide-heading",
// 		// start: "10px 50px",
// 		// scrub: 2,
// 		toggleActions: "restart"
// 	}, 
// 	y:-50,
// 	duration:1

// });
// gsap.to(".elementor-slide-description", {
// 	scrollTrigger: {
// 		trigger: ".elementor-slide-description",
// 		// start: "10px 50px",
// 		// scrub: 2,
// 		toggleActions: "restart"
// 	}, 
// 	y:-50,
// 	duration:1

// });
// gsap.to(".col-md-6.vga", {
// 	scrollTrigger: {
// 		trigger: ".col-md-6.vga",
// 		delay: 8,
// 		// start: "10px 50px",
// 		// scrub: 2,
// 		toggleActions: "restart"
// 	}, 
// 	y:-50,
// 	duration:2

// });
// gsap.to(".animate-img", {
// 	scrollTrigger: {
// 		trigger: ".animate-img",
// 		// start: "-40px 50px",
// 		// scrub: 2,
// 		toggleActions: "restart"
// 	}, 
// 	y: -50,
// 	duration:2

// });
// gsap.to(".blog", {
// 	scrollTrigger: {
// 		trigger: ".blog",
// 		// start: "-40px 50px",
// 		// scrub: 2,
// 		toggleActions: "restart"
// 	}, 
// 	y: -50,
// 	duration:1

// });
// gsap.to("#animate", {
// 	scrollTrigger: {
// 		trigger: "#animate",
// 		// start: "-40px 50px",
// 		// scrub: 2
// 		pin: true,
// 		toggleActions: "restart"
// 	}, 
// 	x: 30, 
     
// 	duration:1


// });
gsap.registerPlugin(ScrollTrigger);
gsap.to(".cbx", {
	scrollTrigger: {
		trigger: ".cbx",
		toggleActions: "restart"
	}, 
	y: -50,
	duration:1

});

$(document).ready(function(){
console.log('working');
if ($('.carousel-item').hasClass('active')) {
	$('img.d-block.w-100').css({'animation':'animateimage 1s ease-in-out',     'animation-delay': '2s' });

}

});
                </script>   



<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
	</body>
</html>
