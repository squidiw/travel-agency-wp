<?php

$hero = get_field('hero');

$packages_list_title = get_field('packages_list_title');

$standalone_package = get_field('standalone_package');

$golden_duo = get_field('golden_duo');

$adventurous_family = get_field('adventurous_family');

$jumbo_familia = get_field('jumbo_familia');

?>
<?php get_header(); ?>


<header class="packages-header bg-info">
    <div class="jumbotron jumbotron-fluid packages-jumbo">
        <div class="container">
            <h1 class="display-3 typed-words"> <?php echo $hero['main_title']; ?>. </h1>
            <p class="lead"> <?php echo $hero['sub_title']; ?></p>
        </div>
    </div>
</header>

<!--PACKAGE LISTS-->
<section class="packages-list">
    <div class="container shadow">
        <div class="packages-list__caption col-md-12">
            <h1 class="centered caption-styled pt-5 bold"><?php echo $packages_list_title['list_heading']; ?></h1>
            <div class="title-line pb-5" data-aos="fade-in">
                <div class="tl-1"></div>
                <div class="tl-2"></div>
                <div class="tl-3"></div>
            </div>
            <!-- <h5 class="centered p-3 text-faded"><?php echo $packages_list_title['list_summary']; ?></h5> -->
        </div>

        <div class="row mb-5">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <img src="<?php echo $standalone_package['package_image']['url']; ?>" alt="Standalone package image" class="img-fluid">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="side-info">
                    <h3>standalone package</h3>
                    <span data-aos="zoom-in-up"  data-aos-delay="200">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half" aria-hidden="true"></i>
                    </span>
                    <!-- <p class="text-faded"><?php echo $standalone_package['package_summary']; ?></p> -->
                    <div class="ticket">
                        <ul>
                            <li>Available : <?php echo $standalone_package['available_tickets'] ?></li>
                            <li data-aos="fade-in" data-aos-easing="linear">Starts : <?php echo $standalone_package['start_date'] ?> </li>
                            <li data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="600">Ends : <?php echo $standalone_package['end_date'] ?></li>
                        </ul>
                    </div>
                    <div class="features">
                        <h4> <?php echo $standalone_package['feature_title'] ?> </h4>
                        <ul>
                            <li  data-aos="fade-in" data-aos-delay="600" data-aos-easing="linear" data-aos-duration="500"><?php echo $standalone_package['feature_one'] ?></li>
                            <li  data-aos="fade-in" data-aos-delay="900" data-aos-easing="linear" data-aos-duration="800"><?php echo $standalone_package['feature_two'] ?></li>
                            <li  data-aos="fade-in" data-aos-delay="1200" data-aos-easing="linear" data-aos-duration="1200"><?php echo $standalone_package['feature_three'] ?></li>
                            
                        </ul>
                    </div>
                    <div class="book-btns pt-3" data-aos="zoom-out"  data-aos-delay="1500"  data-aos-duration="1000">
                        <a class="btn btn-primary" href="<?php echo $standalone_package['book_now'] ?>" role="button">book now</a>
                        <a class="btn btn-secondary" href="<?php echo $standalone_package['view_package'] ?>" role="button">view package</a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="center-red" data-aos="zoom-up" data-aos-easing="linear">

        <div class="row mb-5">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <img src="<?php echo $golden_duo['package_image']['url']; ?>" alt="Golden Duo Package Image" class="img-fluid">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="side-info">
                    <h3>golden duo package</h3>
                    <span data-aos="zoom-in-up"  data-aos-delay="200">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                    <!-- <p class="text-faded"><?php echo $golden_duo['package_summary']; ?></p> -->
                    <div class="ticket">
                        <ul>
                            <li>Available : <?php echo $golden_duo['available_tickets'] ?></li>
                            <li data-aos="fade-in" data-aos-easing="linear">Starts : <?php echo $golden_duo['start_date'] ?> </li>
                            <li data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="600">Ends : <?php echo $golden_duo['end_date'] ?></li>
                        </ul>
                    </div>
                    <div class="features">
                        <h4> <?php echo $golden_duo['feature_title'] ?> </h4>
                        <ul>
                            <li data-aos="fade-in" data-aos-delay="600" data-aos-easing="linear" data-aos-duration="500"><?php echo $golden_duo['feature_one'] ?></li>
                            <li data-aos="fade-in" data-aos-delay="900" data-aos-easing="linear" data-aos-duration="800"><?php echo $golden_duo['feature_two'] ?></li>
                            <li data-aos="fade-in" data-aos-delay="1200" data-aos-easing="linear" data-aos-duration="1200"><?php echo $golden_duo['feature_three'] ?></li>
                        </ul>
                    </div>
                    <div class="book-btns pt-3" data-aos="zoom-out"  data-aos-delay="1500"  data-aos-duration="1000">
                        <a name="" id="" class="btn btn-primary" href="<?php echo $golden_duo['book_now']['url'] ?>" role="button">book now</a>
                        <a name="" id="" class="btn btn-secondary" href="<?php echo $golden_duo['view_package']['url'] ?>" role="button">view package</a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="center-red" data-aos="zoom-up" data-aos-easing="linear">

        <div class="row mb-5">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <img src="<?php echo $adventurous_family['package_image']['url']; ?>" alt="Adventurous Family Package Image" class="img-fluid">

            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="side-info">
                    <h3>adventurous family</h3>
                    <span data-aos="zoom-in-up"  data-aos-delay="200">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                    <!-- <p class="text-faded"><?php echo $adventurous_family['package_summary']; ?></p> -->
                    <div class="ticket">
                        <ul>
                            <li>Available : <?php echo $adventurous_family['available_tickets'] ?></li>
                            <li data-aos="fade-in" data-aos-easing="linear">Starts : <?php echo $adventurous_family['start_date'] ?> </li>
                            <li data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="600">Ends : <?php echo $adventurous_family['end_date'] ?></li>
                        </ul>
                    </div>
                    <div class="features">
                        <h4> <?php echo $adventurous_family['feature_title'] ?> </h4>
                        <ul>
                            <li data-aos="fade-in" data-aos-delay="600" data-aos-easing="linear" data-aos-duration="500"><?php echo $adventurous_family['feature_one'] ?></li>
                            <li data-aos="fade-in" data-aos-delay="900" data-aos-easing="linear" data-aos-duration="800"><?php echo $adventurous_family['feature_two'] ?></li>
                            <li data-aos="fade-in" data-aos-delay="1200" data-aos-easing="linear" data-aos-duration="1200"><?php echo $adventurous_family['feature_three'] ?></li>
                        </ul>
                    </div>
                    <div class="book-btns pt-3" data-aos="zoom-out"  data-aos-delay="1500"  data-aos-duration="1000">
                        <a name="" id="" class="btn btn-primary" href="<?php echo $adventurous_family['book_now']['url'] ?>" role="button">book now</a>
                        <a name="" id="" class="btn btn-secondary" href="<?php echo $adventurous_family['view_package']['url'] ?>" role="button">view package</a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="center-red" data-aos="zoom-up" data-aos-easing="linear">

        
        <div class="row mb-5">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <img src="<?php echo $jumbo_familia['package_image']['url']; ?>" alt="Jumbo Familia Package Img" class="img-fluid">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="side-info">
                    <h3>jumbo familia</h3>
                    <span data-aos="zoom-in-up"  data-aos-delay="200">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </span>
                    <!-- <p class="text-faded"><?php echo $jumbo_familia['package_summary']; ?></p> -->
                    <div class="ticket">
                        <ul>
                            <li>Available : <?php echo $jumbo_familia['available_tickets'] ?></li>
                            <li data-aos="fade-in" data-aos-easing="linear">Starts : <?php echo $jumbo_familia['start_date'] ?> </li>
                            <li data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="600">Ends : <?php echo $jumbo_familia['end_date'] ?></li>
                        </ul>
                    </div>
                    <div class="features">
                        <h4> <?php echo $jumbo_familia['feature_title'] ?> </h4>
                        <ul>
                            <li data-aos="fade-in" data-aos-delay="600" data-aos-easing="linear" data-aos-duration="500"><?php echo $jumbo_familia['feature_one'] ?></li>
                            <li data-aos="fade-in" data-aos-delay="900" data-aos-easing="linear" data-aos-duration="800"><?php echo $jumbo_familia['feature_two'] ?></li>
                            <li data-aos="fade-in" data-aos-delay="1200" data-aos-easing="linear" data-aos-duration="1200"><?php echo $jumbo_familia['feature_three'] ?></li>
                        </ul>
                    </div>
                    <div class="book-btns pt-3" data-aos="zoom-out"  data-aos-delay="1500"  data-aos-duration="1000">
                        <a name="" id="" class="btn btn-primary" href="<?php echo $jumbo_familia['book_now'] ?>" role="button">book now</a>
                        <a name="" id="" class="btn btn-secondary" href="<?php echo $jumbo_familia['view_package'] ?>" role="button">view package</a>
                    </div>
                </div>
            </div>

        </div>


    </div>

    <!--TRAVEL TIPS-->
    <?php get_template_part('template-parts/content', 'travel_tips'); ?>

</section>


<?php echo get_template_part( 'template-parts/content', 'book_now' ) ;?>

<?php get_footer(); ?>