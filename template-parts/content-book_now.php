 <?php
    $homepage_id = get_option("page_on_front");
    $book_now = get_field('book_banner', $homepage_id);

    ?>


 <!--BEST TOURS BANNER-->
 <div class="book-now-banner capitalized">
     <div class="container pt-5">
         <div class="row text-center">
             <div class="col-12 pb-2">
                 <h5 class="capitalized">
                 <?php echo $book_now['main_title']; ?>
                     
                 </h5>
             </div>
             <div class="col-12 pb-3">
                 <h4>
                 <?php echo $book_now['sub_title']; ?>
                 </h4>
             </div>
             <div class="col-12 pb-4" >
                 <a class="btn btn-primary w-25 rellax" data-rellax-speed="-0.5" href="<?php echo get_permalink(get_page_by_title('booking')); ?>" role="button"><?php echo esc_html($book_now['button_text']) ;?></a>
             </div>
         </div>
     </div>
 </div>