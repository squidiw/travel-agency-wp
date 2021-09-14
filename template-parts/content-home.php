
<?php $hero = get_field('hero'); ?>

<header class="index-header">
    <div class="jumbotron jumbotron-fluid index-jumbo d-flex align-items-center text-center rellax" data-rellax-speed="0.4">
        <div class="container">
        <h1 class="display-3 text-light typed-words"> <?php echo $hero['main_title']; ?>. </h1>
        <!--EXPLORE GHANA, PUT THIS IS TYPED WORDS-->
        <p class="lead hero-subtext text-light"> <?php echo $hero['sub_title'] ;?> </p>
            <?php if( $hero['link'] ) : ?>
                <a class="btn btn-primary big-cta text-center" href="<?php echo esc_url($hero['link']); ?>" role="button"><?php echo esc_html($hero['link_text']) ;?></a>
            <?php endif; ?>    
        </div>
    </div>  
</header>

<?php get_template_part( 'template-parts/content', 'destinations' ); ?>    
<?php get_template_part( 'template-parts/content', 'why_choose_us' ); ?>    
<?php get_template_part( 'template-parts/content', 'visit_ghana' ); ?>    
<?php get_template_part( 'template-parts/content', 'packages_highlights' ); ?>    
<?php # get_template_part( 'template-parts/content', 'testimonials' ); ?>    
<?php get_template_part( 'template-parts/content', 'book_now' ); ?>    