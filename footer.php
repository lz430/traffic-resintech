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
        <h5>Follow Us</h5>
        <ul class="footer-listing">
          <li>
            <a href="#"><i class="fa fa-facebook"></i> <span>Facebook</span></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-twitter"></i> <span>Twitter</span></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-linkedin"></i> <span>Linkedin</span></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
          </li>
        </ul>
      </div>
      <div class="col-md-2">
        <div class="menu-vga">
          <h5>Quick Links</h5>
          <p><a href="https://resintech.trafficdesk.io/products-overview/">Products</a></p>
          <p><a href="https://resintech.trafficdesk.io/services-overview/">Services</a></p>
          <p><a href="https://resintech.trafficdesk.io/application-overview/">Applications</a></p>
          <p><a href="https://resintech.trafficdesk.io/resources-overview/">Resources</a></p>
          <p><a href="#">Support</a></p>
          <p><a href="https://resintech.trafficdesk.io/resources-overview/">Company</a></p>
          <p><a href="#">Careers</a></p>
        </div>
      </div>
      <div class="col-md-2">
        <div class="contact-us">
          <h5>Contact</h5>
          <p><a href="#">Tel: 856-768-9600</a></p>
          <p>Fax: 856-768-9601</p>
        </div>
      </div>
      <div class="col-md-2">
        <div class="address">
          <h5>Address</h5>
          <p>ResinTech Gloabl Headquarters 1801 Federal St.</p>
          <p>Camden, New Jersey 08105</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sub-footer">
  <div class="container tech">
    <div class="row">
      <div class="col-md-6">
        <p>©2020 Resintech inc</p>
      </div>
      <div class="col-md-6">
        <p class="terms">&nbsp;&nbsp;Terms & Conditions &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Privacy Policy &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Sitemap</p>
      </div>
    </div>
  </div>
</section>

<!--============================== Mobile Footer start here===============================-->
<section class="mb-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href="https://resintech.trafficdesk.io/"><img src="/wp-content/uploads/2020/12/image-26.png"></a>
      </div>
      <div class="col-md-3">
        <div class="mb-address">
          <h5>Address</h5>
          <p>ResinTech Gloabl Headquarters 1801 Federal St.</p>
          <p>Camden, New Jersey 08105</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="mb-contact-us">
          <h5>Contact</h5>
          <p>Tel: 856-768-9600</p>
          <p>Fax: 856-768-9601</p>
        </div>
      </div>
      <div class="col-md-3">
        <ul class="mb-footer-listing">
          <li><i aria-hidden="true" class="fa fa-facebook-square"></i></li>
          <li><i aria-hidden="true" class="fa fa-twitter-square"></i></li>
          <li><i aria-hidden="true" class="fa fa-linkedin-square"></i></li>
          <li><i aria-hidden="true" class="fa fa-instagram"></i></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="mb-sub-footer">
  <div class="container tech">
    <div class="row">
      <div class="col-md-6">
        <p>©2020 Resintech inc</p>
      </div>
      <div class="col-md-6">
        <ul class="mb-terms">
          <li>Terms & Conditions</li>
          <li>Privacy</li>
          <li>Sitemap</li>
        </ul>
      </div>
    </div>
  </div>
</section><!--============================== Mobile Footer end here===============================-->

<footer class="header-footer-group" id="site-footer" role="contentinfo">
  <div class="section-inner">
    <div class="footer-credits">
      <p class="footer-copyright">&copy; <?php
              echo date_i18n(
                /* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
                _x( 'Y', 'copyright date format', 'twentytwenty' )
              );
              ?> <a href="%3C?php%20echo%20esc_url(%20home_url(%20'/'%20)%20);%20?%3E"><?php bloginfo( 'name' ); ?></a></p><!-- .footer-copyright -->
      <p class="powered-by-wordpress"><a href="%3C?php%20echo%20esc_url(%20__(%20'https://wordpress.org/',%20'twentytwenty'%20)%20);%20?%3E"><?php _e( 'Powered by WordPress', 'twentytwenty' ); ?></a></p><!-- .powered-by-wordpress -->
    </div><!-- .footer-credits -->
     <a class="to-the-top" href="#site-header"><span class="to-the-top-long"><?php
            /* translators: %s: HTML character for up arrow. */
            printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
            ?></span> <!-- .to-the-top-long -->
     <span class="to-the-top-short"><?php
            /* translators: %s: HTML character for up arrow. */
            printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
            ?></span> <!-- .to-the-top-short --></a> <!-- .to-the-top -->
  </div><!-- .section-inner -->
</footer><!-- #site-footer -->

<?php wp_footer(); ?>

<!-- https://github.com/michalsnik/aos -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>
