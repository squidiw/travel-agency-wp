<?php $standalone_package = get_field('standalone_package')  ;?>


<?php get_header(); ?>

<header class="packages-header">
    <div class="jumbotron jumbotron-fluid packages-jumbo rellax" data-rellax-speed="0.3">
        <div class="container">
            <h1 class="display-3 typed-words">Standalone Package.</h1>
            <!-- <p class="lead">Jumbo helper text</p> -->
        </div>
    </div>
</header>

<!--TOUR PACKAGE-->
<div class="tour-package pt-5">
    <div class="container rounded shadow">
        <div class="row">
            <div class="col-md-9">
                <div class="tour-package__caption">
                    <h2 class="capitalized pt-3">Standalone Package.
                        <span class="stars" data-aos="fade-in">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-half" aria-hidden="true"></i>
                        </span>
                    </h2>
                    <span class="rating">
                        4.5
                    </span>
                </div>

                <div class="tour-package__description">
                    <h3 class="capitalized">Description</h3>
                    <p><?php echo $standalone_package['description_text'] ;?></p>
                </div>

                <div class="tour-package__banner">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/assets/imgs/StandAlone-img.jpg" alt="" class="img-fluid">
                </div>

                <!-- <div class="tour-package__benefits capitalized ">
                    <h3 class="capitalized p-3">your b<span class="underlined">enefit</span>s :</h3>
                    <div class="tour-package__item">
                        <p class="tour-package__item-text"  data-aos="fade-in" data-aos-easing="linear" >
                            <i><img src="<?php bloginfo('stylesheet_directory') ?>/assets/imgs/icons/check-16.png" alt="" class="inline-icon"></i> 
                            <?php echo $standalone_package['first_benefit'] ;?>
                        </p>

                    </div>
                    <div class="tour-package__item">
                        <p class="tour-package__item-text"  data-aos="fade-in" data-aos-delay="200" data-aos-easing="linear">
                            <i><img src="<?php bloginfo('stylesheet_directory') ?>/assets/imgs/icons/check-16.png" alt="" class="inline-icon"></i> 
                            <?php echo $standalone_package['second_benefit'] ;?>
                        </p>
                    </div>
                    <div class="tour-package__item">
                        <p class="tour-package__item-text" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear">
                            <i><img src="<?php bloginfo('stylesheet_directory') ?>/assets/imgs/icons/check-16.png" alt="" class="inline-icon"></i> 
                            <?php echo $standalone_package['third_benefit'] ;?>
                        </p>
                    </div>
                </div> -->

                <div class="tour-offer capitalized">
                    <div class="container-fluid">
                        <h3 class="pt-3"> what we <span class="underlined">offer</span> :</h3>
                        <div class="row d-flex align-items-center text-center">
                            <div class="col-sm-6 col-md-6">
                                <div class="icon">
                                    <i><img src="<?php bloginfo('stylesheet_directory') ?>/assets/imgs/icons/price-tag.png" class="align-bottom"></i>
                                </div>
                                <div class="body">
                                    <span class="underlined">Price : <span class="bold" style="letter-spacing: 2px;">$2,400.00</span></span>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="icon">
                                    <i><img src="<?php bloginfo('stylesheet_directory') ?>/assets/imgs/icons/customer.png" class="align-bottom"></i>
                                </div>
                                <div class="body">
                                    1 person, 7 days / 6 nights
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center text-center">
                            <div class="col-12">
                                <h5 class="bold"> we provide:</h5>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="icon">
                                    <i><img src="<?php bloginfo('stylesheet_directory') ?>/assets/imgs/icons/hotel-room.png" class="align-bottom"></i>
                                </div>
                                <div class="body">
                                    <span class="text-center">1 hotel room</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="icon">
                                    <i><img src="<?php bloginfo('stylesheet_directory') ?>/assets/imgs/icons/rice-36.png" class="align-bottom"></i>
                                </div>
                                <div class="body">
                                    breakfast &amp; dinner
                                </div>
                            </div>
                        </div>
                        <hr data-aos="fade-in">
                        <div class="row d-flex align-items-center text-center">
                            <div class="col-sm-12 col-md-6 ">
                                <div class="icon">
                                    <i><img src="<?php bloginfo('stylesheet_directory') ?>/assets/imgs/icons/security.png" class="align-bottom"></i>
                                </div>
                                <div class="body">
                                    Transportation &amp; security
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="icon">
                                    <i><img src="<?php bloginfo('stylesheet_directory') ?>/assets/imgs/icons/tourist-attractions.png" class="align-bottom"></i>
                                </div>
                                <div class="body">
                                    fun and educational tourist attractions
                                </div>
                            </div>
                        </div>
                        <hr data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear">
                        <div class="row d-flex align-items-center text-center">
                            <div class="col-sm-12 col-md-6">
                                <div class="icon">
                                    <i><img src="<?php bloginfo('stylesheet_directory') ?>/assets/imgs/icons/souvenirs.png" class="align-bottom"></i>
                                </div>
                                <div class="body">
                                    souvenir(african artifact)
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="icon">
                                    <i><img src="<?php bloginfo('stylesheet_directory') ?>/assets/imgs/icons/entertainment.png" class="align-bottom"></i>
                                </div>
                                <div class="body">
                                    entertainment shows
                                </div>
                            </div>
                        </div>
                        <hr data-aos="fade-in" data-aos-delay="600" data-aos-easing="linear">
                        <div class="row">
                            <div class="col-12 centered">
                                <i><img src="<?php bloginfo('stylesheet_directory') ?>/assets/imgs/icons/charity.png" class="align-bottom"></i>
                                business seminar and charitable donations
                            </div>
                        </div>
                        <div class="row pb-4 centered">
                            <div class="col-12">
                                <h3 class="pt-3 bold"> not <span class="underlined">included</span> :</h3>
                            </div>
                            <div class="col-12">
                                <p class="" <i><img src="<?php bloginfo('stylesheet_directory') ?>/assets/imgs/icons/unavailable.png" class="align-bottom"></i>
                                    visa and flight cost</p>
                            </div>
                            <div class="col-12">
                                <a class="btn btn-primary btn-block" href="<?php echo get_permalink( get_page_by_title('booking') ) ;?>" role="button">book package</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3  mb-3">
                <div class="tour-package__sidebar">
                    <div class="tour-package__help-box sidebar-container mb-3 mt-2">
                        <h3 class="sidebar-caption">help &amp; support</h3>
                        <div class="tour-package__help p-3">
                        <h5 class="tour-package__call">
                                   call or message
                               </h5>
                               <div class="phone" style="margin-bottom: 5px;">
                                   <a href="tel:1234567098"  class="bold" style=" display:inline-block;  letter-spacing: 1.4px; padding-left:5px; font-size:large;">    +123-456-948</a>
                               </div>
                               <div class="mail">
                                   <a href="mailto:example@domain.com"  class="bold" style=" display:inline-block; letter-spacing: 1.4px; padding-left:5px;">   support@afrocoast.com</a>
                               </div>
                        </div>
                    </div>

                    <div class="tour-package__packages sidebar-container text">
                        <h3>other packages</h3>
                        <div class="tour-package__packages-details mb-5">
                            <img src="<?php bloginfo('stylesheet_directory') ?>/assets/imgs/resize.jpg" alt="" class="img-fluid rounded">
                            <h4>jumbo familia</h4>
                            <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, odit!</p> -->
                            <a href="<?php echo get_permalink( get_page_by_path('jumbo_familia') ) ;?>" class="btn btn-primary">view package</a>
                        </div>

                        <hr class="sidebar-hr-red">

                        <div class="tour-package__packages-details mb-5">
                            <img src="<?php bloginfo('stylesheet_directory') ?>/assets/imgs/resize.jpg" alt="" class="img-fluid rounded">
                            <h4>golden duo</h4>
                            <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, odit!</p> -->
                            <a href="<?php echo get_permalink( get_page_by_path('golden_duo') ) ;?>" class="btn btn-primary">view package</a>
                        </div>

                        <hr class="sidebar-hr-red">

                        <div class="tour-package__packages-details mb-4">
                            <img src="<?php bloginfo('stylesheet_directory') ?>/assets/imgs/resize.jpg" alt="" class="img-fluid rounded">
                            <h4>adventurous familia</h4>
                            <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, odit!</p> -->
                            <a href="<?php echo get_permalink( get_page_by_path('adventurous_family') ) ;?>" class="btn btn-primary">view package</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/content', 'travel_tips'); ?>
</div>

<?php get_template_part('template-parts/content', 'book_now'); ?>

<?php get_footer(); ?>