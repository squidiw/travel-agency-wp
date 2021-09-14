<?php 
/* Template Name: Full-width Template*/
get_header();
?>

<header class="contact-header">
    <div class="jumbotron jumbotron-fluid contact-jumbo">
        <div class="container">
            <h1 class="display-3 typed-words"><?php the_title(); ?>.</h1>
            <!-- <p class="lead">Jumbo helper text</p> -->
        </div>
    </div>
</header>

  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-8">
          <div class="form h-100">
            <h3><?php the_title(); ?> form</h3>
            <?php while( have_posts( ) ) : the_post(); ?>

              <?php  the_content(); ?>

            <?php endwhile; ?>  
        
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="contact-info h-50">
            <h3>Contact Information</h3>
            <ul class="list-unstyled">
              <li class="d-flex">
                <i class="fa fa-phone icon-phone mr-3" style="color: white;"></i>
                <span class="text">+1 (291) 939 9321</span>
              </li>
              <li class="d-flex">
                <i class="fa fa-envelope icon-envelope mr-3" style="color: white;"></i>
                <span class="text">info@mywebsite.com</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>   

  <?php get_template_part( 'template-parts/content', 'book_now' ) ?>

<?php get_footer() ?>

