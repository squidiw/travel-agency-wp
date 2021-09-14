<?php
/**
 * The template for displaying the footer
 * Template Name : Footer Temmplate
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travel_Template
 */

?>


<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="<?php echo get_permalink( get_page_by_title('home') ) ;?>">Home</a></li>
                        <li><a href="<?php echo get_permalink( get_page_by_title('packages') ) ;?>">Packages</a></li>
                        <li><a href="<?php echo get_permalink( get_page_by_title('gallery') ) ;?>">Gallery</a></li>
                        <li><a href="<?php echo get_permalink( get_page_by_title('booking') ) ;?>">Book</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Afrocoast233 &copy; 
                        <?php 
                            $startYear = 2019;
                            $currentYear = date('Y');
                            echo $startYear . ( ($startYear != $currentYear) ? '-' . $currentYear : '' );
                        ?> 
                
                </h3>
                    <p>Afroacoast233 travel agency makes the most out of tourism. We give people of different races an unforgettable experience of Africa, especially those living in the diaspora as well as Europeans and Asians.</p>
                </div>
                <div class="col item social">
                  <a href="https://facebook.com/afrocoast233"><img src="<?php bloginfo('stylesheet_directory')?>/assets/imgs/icons/facebook.png" alt=""></a>
                  <a href="https://twitter.com/afrocoast233"><img src="<?php bloginfo('stylesheet_directory')?>/assets/imgs/icons/twitter.png" alt=""></a>
                  <a href="https://www.instagram.com/afrocoast233/"><img src="<?php bloginfo('stylesheet_directory')?>/assets/imgs/icons/instagram.png" alt=""></a>
            </div>
            <p class="theme_developer">
                <a href="http://portfolio.learnywebdev.com" style="font-size: 12px;">Theme Developed with ❤️ by Luna 💘</a>
            </p>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
